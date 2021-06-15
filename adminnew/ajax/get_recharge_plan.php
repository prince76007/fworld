<?php
include("../includes/connection.php");
global $mysqli;

function recharge_plan_list_ajax( )
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
  $where_sql=" Where 1=1 ";
    if(isset($searchValue) && $searchValue!=""){
      $where_sql.=' AND (recharge_plan_id LIKE "'.$searchValue.'%" OR  title LIKE "'.$searchValue.'%" OR inr LIKE "'.$searchValue.'%" OR coin LIKE "'.$searchValue.'%" OR  des LIKE "'.$searchValue.'%"  OR  date LIKE "'.$searchValue.'%" )';
    }
    $sql=" SELECT * FROM recharge_plan   $where_sql  ORDER BY recharge_plan_id  DESC ";
    
    $resultd=mysqli_query($mysqli,$sql)or die(mysqli_error($mysqli));
    $all__request_data_total=mysqli_fetch_all($resultd, MYSQLI_ASSOC);
   $totalFiltered=count($all__request_data_total);
      
    $sql_limit= $sql .' limit '.$row .','. $rowperpage;
       $query = mysqli_query($mysqli,$sql_limit)or die(mysqli_error($mysqli));
     
    $data_list=mysqli_fetch_all($query, MYSQLI_ASSOC);
      $custom_array=array();
      $totalData =count($data_list);
      foreach ($data_list as $value) {
         $id=$value['recharge_plan_id'];
          $edit_url=' <a href="addedit_recharge_plan.php?recharge_plan_id='.$id.'" class="btn btn-sm btn-primary" >Edit</a>';
          $remove_url=' <a class="remove_recharge_plan_id btn btn-sm btn-danger btn-sm"   data_id="'.$id.'"  >Delete</a> '; 
        $action=   $edit_url  .$remove_url; 
   
                   
      $single=array(
                      $value['recharge_plan_id'],
                      $value['title'],
                      $value['inr'],
                      $value['coin'],
                      $value['des'],
                      $value['date'],
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

echo recharge_plan_list_ajax();
