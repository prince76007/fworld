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
      $where_sql.=' AND  (customer_support_status = "'.$_REQUEST['customer_support_status'].'" ) ';
    }


    if(isset($searchValue) && $searchValue!=""){
     $where_sql.=' AND (customer_feedback_id = "'.$searchValue.'" OR customer_support_fb_id LIKE "%'.$searchValue.'"  )';
    }
    $sql=" SELECT  *  FROM `customer_feedback` $join_sql  $where_sql  ORDER BY  customer_feedback_id DESC ";
    
    $resultd=mysqli_query($mysqli,$sql)or die(mysqli_error($mysqli));
    $all__request_data_total=mysqli_fetch_all($resultd, MYSQLI_ASSOC);
   $totalFiltered=count($all__request_data_total);
      
    $sql_limit= $sql .' limit '.$row .','. $rowperpage;
       $query = mysqli_query($mysqli,$sql_limit)or die(mysqli_error($mysqli));
     
    $data_list=mysqli_fetch_all($query, MYSQLI_ASSOC);
      $custom_array=array();
      $totalData =count($data_list);
     foreach ($data_list as $value) {
       $id=$value['customer_feedback_id'];
      $customer_support_status=$value['customer_feedback_status'];
      
      $userid=$value['customer_feedback_fb_id'];    
      $sqli="select * from `users` WHERE fb_id='$userid'";
	  $userdata=mysqli_fetch_assoc(mysqli_query($mysqli,$sqli));
     
     $user_data="<p>".$userid."</p>";     
     if($userdata){
      $user_data.="<p>".$userdata['first_name'].' '.$userdata['last_name']."</p>";     
      $user_data.="<p>".$value['email']."</p>";     
      //$user_data="<p>".$value['uwr_fb_id']."</p>";     
     }else{
      $user_data.="<p>User Deleted</p>";     
     } 


     
    $details=""; 
      if($value['customer_feedback_description']){
      $details.="<p> <textarea>".$value['customer_feedback_description' ]."</textarea></p>";     
      }

        $edit_url='<a href="'.$edit_url1.'" class="btn btn-default"><i class="fa fa-eye" title="view order"></i>View</a>&nbsp; ';
        $remove_url=' <a class="remove_customer_feedback_id btn btn-sm btn-danger btn-sm"   data_id="'.$id.'"  >Delete</a> '; 
        
        $action=  $remove_url;
      
  		 $icon= '-';
		 if($value['customer_feedback_attechment_file']){
  		    $icon='<a href="'.$value['customer_feedback_attechment_file'].'" target="_blank"><img src="'.$value['customer_feedback_attechment_file'].'" width="80" height="80"></a>';
         }

      $single=array(
                      $id ,//.'-'. $value['fb_id'] ,
                      $user_data,
                      $value['customer_feedback_type'],
                      $details,
                      $icon,
                      $value['customer_feedback_contact_type'],
                      $value['customer_feedback_contact'],
                      $value['customer_feedback_cr_date'],
                      //$uwr_is_verified,
                      //$uwr_pay_status,
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
