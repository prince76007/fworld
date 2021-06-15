<?php
include("../includes/connection.php");
global $mysqli;

function user_baggage_history_list_ajax( )
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

    $join_sql=" JOIN users as senderuser on  senderuser.fb_id=ub.ub_sender_fb_id  JOIN users as receiveruser on receiveruser.fb_id=ub.ub_fb_id  ";
    
    $where_sql=" Where 1=1 ";


    $form_date = $_REQUEST['form_date']; // asc or desc
    $end_date = $_REQUEST['end_date']; // asc or desc
    
    $form_date1 =$end_date1 ="";
    if($form_date!=""  ){
    if($end_date!=""){
    $end_date1 =  date('Y-m-d',strtotime($end_date));
    }else{
    $end_date1 =  date('Y-m-d',strtotime($form_date." +1 day"));
    }
    $form_date1=date('Y-m-d',strtotime($form_date));
    }
   
    if($form_date1!="" && $end_date1!=""){
      $where_sql.=' AND  (ub.ub_cr_date BETWEEN "'.$form_date1.'%" and "'.$end_date1.'%") ';
    }


    if(isset($searchValue) && $searchValue!=""){
     $where_sql.=' AND (ub.ub_fb_id = "'.$searchValue.'" OR  ub.ub_sender_fb_id = "'.$searchValue.'" )';
     // $where_sql.=' AND (dth.dth_id = "'.$searchValue.'" OR  user.first_name LIKE "%'.$searchValue.'" OR  user.last_name LIKE "%'.$searchValue.'" OR user.email LIKE "%'.$searchValue.'" OR user.mobile LIKE "%'.$searchValue.'" OR  user.username  LIKE "'.$searchValue.'%"  OR  user.bio LIKE "'.$searchValue.'%" OR  user.created LIKE "'.$searchValue.'%" )';
    }
    $sql=" SELECT ub.*,senderuser.fb_id as senderuser_fb_id,senderuser.first_name as senderuser_first_name,senderuser.last_name as senderuser_last_name,senderuser.profile_pic as senderuser_profile_pic,receiveruser.fb_id as receiveruser_fb_id,receiveruser.first_name as receiveruser_first_name,receiveruser.last_name as receiveruser_last_name,receiveruser.profile_pic as receiveruser_profile_pic   FROM `user_baggage` as ub $join_sql  $where_sql  ORDER BY  ub.ub_id DESC ";
    
    $resultd=mysqli_query($mysqli,$sql)or die(mysqli_error($mysqli));
    $all__request_data_total=mysqli_fetch_all($resultd, MYSQLI_ASSOC);
   $totalFiltered=count($all__request_data_total);
      
    $sql_limit= $sql .' limit '.$row .','. $rowperpage;
       $query = mysqli_query($mysqli,$sql_limit)or die(mysqli_error($mysqli));
     
    $data_list=mysqli_fetch_all($query, MYSQLI_ASSOC);
      $custom_array=array();
      $totalData =count($data_list);
      foreach ($data_list as $value) {
         $id=$value['ub_id'];
     
      $status='Transfer Done';
      $is_certified=" - ";
           $sting=" ".$value['ub_gift_qty'].'*'.$value['ub_gift_diamond'].'='.$value['ub_gift_total_diamond'];       

      $senderuser_details='<p>'.$value['senderuser_first_name'].' '.$value['senderuser_last_name'].'</p>';
      $senderuser_details.='<p>'.$value['ub_sender_fb_id']  .'</p>';
     
      $receiveruser_details='<p>'.$value['receiveruser_first_name'].' '.$value['receiveruser_last_name'].'</p>';
      $receiveruser_details.='<p>'.$value['ub_fb_id'].'</p>';
                      
      $single=array(
                      $value['ub_id'] ,//.'-'. $value['fb_id'] ,
                      //$senderuser_details,
                      $receiveruser_details,
                      $value['ub_gift_title'],
                      $sting,
                      $value['ub_gift_remain_qty'],
                      $value['ub_cr_date'],
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

echo user_baggage_history_list_ajax();
