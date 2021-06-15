<?php
include("../includes/connection.php");
global $mysqli;
global $server_file_path;

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
      $where_sql.=' AND  (ulrd.ulrd_cr_date BETWEEN "'.$form_date1.'%" and "'.$end_date1.'%") ';
    }

    if($_REQUEST['uwr_is_verified'] && $_REQUEST['uwr_is_verified']!=""){
   		$where_sql.=' AND  (uwr_is_verified = "'.$_REQUEST['uwr_is_verified'].'" ) ';
    }
    if($_REQUEST['uwr_pay_status'] && $_REQUEST['uwr_pay_status']!=""){
      $where_sql.=' AND  (uwr_pay_status = "'.$_REQUEST['uwr_pay_status'].'" ) ';
    }

    if($_REQUEST['custom_status'] && $_REQUEST['custom_status']!=""){
      $where_sql.=' AND  (uwr_status = "'.$_REQUEST['custom_status'].'" ) ';
    }


    if(isset($searchValue) && $searchValue!=""){
     $where_sql.=' AND (uwr_id = "'.$searchValue.'" OR  uwr_fb_id LIKE "%'.$searchValue.'"  )';
    }
    $sql=" SELECT  *  FROM `user_withdrawal_request` $join_sql  $where_sql  ORDER BY  uwr_id DESC ";
    
    $resultd=mysqli_query($mysqli,$sql)or die(mysqli_error($mysqli));
    $all__request_data_total=mysqli_fetch_all($resultd, MYSQLI_ASSOC);
   $totalFiltered=count($all__request_data_total);
      
    $sql_limit= $sql .' limit '.$row .','. $rowperpage;
       $query = mysqli_query($mysqli,$sql_limit)or die(mysqli_error($mysqli));
     
    $data_list=mysqli_fetch_all($query, MYSQLI_ASSOC);
      $custom_array=array();
      $totalData =count($data_list);
     foreach ($data_list as $value) {
       $id=$value['uwr_id'];
      $uwr_pay_status=$value['uwr_pay_status'];
      $uwr_is_verified=$value['uwr_is_verified'];
      $userid=$value['uwr_fb_id'];    
      $sqli="select * from `users` WHERE fb_id='$userid'";
	  $userdata=mysqli_fetch_assoc(mysqli_query($mysqli,$sqli));
     
     $user_data="<p>".$value['uwr_fb_id']."</p>";     
     
     if($userdata){
      $user_data.="<p>".$userdata['first_name'].' '.$userdata['last_name']."</p>";     
      //$host_user.="<p>".$value['ulrd_fb_id']."</p>";     
      //$host_user="<p>".$value['uwr_fb_id']."</p>";     
     }else{
      $user_data.="<p>User Deleted</p>";     
     } 


    $uwr_details=""; 
      $uwr_details.="<p> Name: ".$value['uwr_name']."</p>";     
      $uwr_details.="<p> Contact: ".$value['uwr_contact']."</p>";     
      $uwr_details.="<p> Email: ".$value['uwr_email']."</p>";     
     
    $details=""; 
      if($value['uwr_account_number']){
      $details.="<p> Bank: ".$value['uwr_bank_name']."</p>";     
      $details.="<p> Account: ".$value['uwr_account_number']."</p>";     
      $details.="<p> ifsc: ".$value['uwr_ifsc']."</p>";     
      $details.="<p> Type: ".$value['uwr_account_type']."</p>";     
      }

      if($value['uwr_other']){
       //$details.="<p> Other Details: ".$value['uwr_payment_method']."</p>";     
       $details.="<p> Other Details: ".$value['uwr_other']."</p>";     
      }


         $edit_url="view_uwr.php?uwr_id=".$id;
         $action='<a href="'.$edit_url.'" class="btn btn-default"><i class="fa fa-eye" title="view order"></i>View</a>&nbsp; ';
  		 $icon= '-';
		 if($value['ulrd_icon']){
  		    $icon='<img src="'.$server_file_path.$value['ulrd_icon'].'" width="80" height="80">';
         }

      $single=array(
                      $value['uwr_id'] ,//.'-'. $value['fb_id'] ,
                      $user_data,
                      $uwr_details,
                      $value['uwr_payment_method'],
                      $value['uwr_amount'],
                      $value['uwr_coin'],
                      $details,
                      $value['uwr_request_cr_date'],
                      $value['uwr_up_dateat'],
                      $uwr_is_verified,
                      $uwr_pay_status,
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
