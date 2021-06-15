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

    $join_sql=" JOIN users as senderuser on  senderuser.fb_id=dth.dth_sender_id  JOIN users as receiveruser on receiveruser.fb_id=dth.dth_receiver_id  ";
    
    $where_sql=" Where 1=1 ";
    if(isset($searchValue) && $searchValue!=""){
     // $where_sql.=' AND (dth.dth_id = "'.$searchValue.'" OR  user.first_name LIKE "%'.$searchValue.'" OR  user.last_name LIKE "%'.$searchValue.'" OR user.email LIKE "%'.$searchValue.'" OR user.mobile LIKE "%'.$searchValue.'" OR  user.username  LIKE "'.$searchValue.'%"  OR  user.bio LIKE "'.$searchValue.'%" OR  user.created LIKE "'.$searchValue.'%" )';
    }
    $sql=" SELECT dth.*,senderuser.fb_id as senderuser_fb_id,senderuser.first_name as senderuser_first_name,senderuser.last_name as senderuser_last_name,senderuser.profile_pic as senderuser_profile_pic,receiveruser.fb_id as receiveruser_fb_id,receiveruser.first_name as receiveruser_first_name,receiveruser.last_name as receiveruser_last_name,receiveruser.profile_pic as receiveruser_profile_pic   FROM `diamond_transfer_history` as dth $join_sql  $where_sql  ORDER BY  dth.dth_id DESC ";
    
    $resultd=mysqli_query($mysqli,$sql)or die(mysqli_error($mysqli));
    $all__request_data_total=mysqli_fetch_all($resultd, MYSQLI_ASSOC);
   $totalFiltered=count($all__request_data_total);
      
    $sql_limit= $sql .' limit '.$row .','. $rowperpage;
       $query = mysqli_query($mysqli,$sql_limit)or die(mysqli_error($mysqli));
     
    $data_list=mysqli_fetch_all($query, MYSQLI_ASSOC);
      $custom_array=array();
      $totalData =count($data_list);
      foreach ($data_list as $value) {
         $id=$value['dth_id'];
     
      $status='Transfer Done';
      $is_certified=" - ";
                   
      $single=array(
                      $value['dth_id'] ,//.'-'. $value['fb_id'] ,
                      $value['senderuser_first_name'].' '.$value['senderuser_last_name'],
                      $value['receiveruser_first_name'].' '.$value['receiveruser_last_name'],
                      $value['dth_send_diamond'],
                      $value['dth_for'],
                      $value['dth_cr_date'],
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
