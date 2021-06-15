<?php
include("../includes/connection.php");
global $mysqli;

function group_list_ajax( )
    {
  global $mysqli;
    $draw = $_REQUEST['draw'];
    $row = $_REQUEST['start'];
    $searchValue = $_REQUEST['search']['value'];
    $rowperpage = $_REQUEST['length']; // Rows display per page
    $order = $_REQUEST['order'][0]['dir'];
    $columnIndex = $_REQUEST['order'][0]['column']; // Column index
    $columnName = $_REQUEST['columns'][$columnIndex]['data']; // Column name
    $columnSortOrder = $_REQUEST['order'][0]['dir']; // asc or desc
    $searchQuery = '';

    $join_sql="  ";
    
    $where_sql=" Where 1=1 ";
    if(isset($searchValue) && $searchValue!=""){
      $where_sql.=' AND (custom_group_name   ="'.$searchValue.'"  )';
    }
    $sql=" SELECT * FROM custom_group    $join_sql  $where_sql  ORDER BY  custom_group_id DESC ";
    
    $resultd=mysqli_query($mysqli,$sql)or die(mysqli_error($mysqli));
    $all__request_data_total=mysqli_fetch_all($resultd, MYSQLI_ASSOC);
   
   $totalFiltered=count($all__request_data_total);
      
    $sql_limit= $sql .' limit '.$row .','. $rowperpage;
       $query = mysqli_query($mysqli,$sql_limit)or die(mysqli_error($mysqli));
     
    $data_list=mysqli_fetch_all($query, MYSQLI_ASSOC);
      $custom_array=array();
      $totalData =count($data_list);
      foreach ($data_list as $value) {
         $id=$value['custom_group_id'];
          $edit_url=' <a href="addedit_customgroup.php?group_id='.$id.'" class="btn btn-sm btn-primary" >Edit </a>';
          $view_url=' <a href="manage_group.php?group_id='.$id.'" class="btn btn-sm btn-primary" >Manage </a>';
          $view_group_url='<a href="view_customgroup.php?group_id='.$id.'" class="btn btn-sm btn-primary" >View  </a>';
          
          $remove_url=' <a class="remove_I_id btn btn-sm btn-danger btn-sm"   data_id="'.$id.'"  >Delete</a> '; 
        $action=   $edit_url. $view_url .$view_group_url  .$remove_url; 
      
      $user_count="-";
      $sqlnew=" SELECT COUNT(custom_group_member_id) as user_count FROM `custom_group_member` WHERE custom_group_id=".$id;
        $user_count_data=mysqli_fetch_assoc(mysqli_query($mysqli,$sqlnew));
      if($user_count_data){
        $user_count= $user_count_data['user_count'];
      }
      $single=array(
                      $id,//.'-'. $value['fb_id'] ,
                      $value['custom_group_name'],
                      $user_count,
                      $value['custom_group_cr_date'],
                      // $status,
                      $action
	               );

      $custom=array_push($custom_array , $single);
      }

    $json_data = array(
    "draw"            => intval( $_REQUEST['draw'] ),
    "recordsTotal"    => intval( $totalData ),
    "recordsFiltered" => intval( $totalFiltered ),
    "data"            => $custom_array
    );

    echo json_encode($json_data);
}

echo group_list_ajax();
