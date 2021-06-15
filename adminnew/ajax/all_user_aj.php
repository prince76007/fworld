<?php
include("../includes/connection.php");
global $mysqli;

function user_list_ajax( )
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
    
    $where_sql=" Where user_type=0 ";
    if(isset($searchValue) && $searchValue!=""){
      $where_sql.=' AND (user.fb_id   ="'.$searchValue.'" OR  user.fb_id  LIKE "%'.$searchValue.'" OR  user.first_name LIKE "%'.$searchValue.'" OR  user.last_name LIKE "%'.$searchValue.'" OR user.email LIKE "%'.$searchValue.'" OR user.mobile LIKE "%'.$searchValue.'" OR  user.username  LIKE "'.$searchValue.'%"  OR  user.bio LIKE "'.$searchValue.'%" OR  user.created LIKE "'.$searchValue.'%" )';
    }
    $sql=" SELECT * FROM users as user   $join_sql  $where_sql  ORDER BY  user.fb_id DESC ";
    
    $resultd=mysqli_query($mysqli,$sql)or die(mysqli_error($mysqli));
    $all__request_data_total=mysqli_fetch_all($resultd, MYSQLI_ASSOC);
   $totalFiltered=count($all__request_data_total);
      
    $sql_limit= $sql .' limit '.$row .','. $rowperpage;
       $query = mysqli_query($mysqli,$sql_limit)or die(mysqli_error($mysqli));
     
    $data_list=mysqli_fetch_all($query, MYSQLI_ASSOC);
      $custom_array=array();
      $totalData =count($data_list);
      foreach ($data_list as $value) {
         $id=$value['fb_id'];
          $edit_url=' <a href="edit_user.php?user_id='.$id.'" class="btn btn-sm btn-primary" >Edit</a>';
          $remove_url=' <a class="remove_I_id btn btn-sm btn-danger btn-sm"   data_id="'.$id.'"  >Delete</a> '; 
        $action=   $edit_url  .$remove_url; 
    $image='<img src="'.$value['profile_pic'].'"  width="25px" height="25px" >';
      
      if($value['block']==0){
       $status='Unblock';
      }else{
       $status='Block';
      }
      $is_certified=" - ";
      if( $value['is_certified']==1){
      $is_certified='<img src="'.BASE_URL.'/custom_upload/certified_img.png"  width="25px" height="25px"> ';
      }
      $det="";
      $det.= '<p>'.$value['first_name'].$value['last_name'].'</p>';             
      $det.= '<p> <i class="fa fa-diamond" aria-hidden="true"></i>&nbsp;'.$value['total_diamondd'].'&nbsp; <i class="fa fa-database" aria-hidden="true"></i>&nbsp;'.$value['total_silver_coin'].'&nbsp;<i class="fa fa-life-ring" aria-hidden="true"></i>&nbsp;'.$value['total_beans']. ' </p>';             
      
      $single=array(
                      $value['fb_id'] ,//.'-'. $value['fb_id'] ,
                      $image,
                      $is_certified,
                      $det,
                      $value['mobile'],
                      $value['username'],
                      $value['email'],
                      $value['created'],
                      $value['device'],
                      $status,
                      $action,
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

echo user_list_ajax();
