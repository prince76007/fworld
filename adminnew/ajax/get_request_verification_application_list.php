<?php
include("../includes/connection.php");
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
      $where_sql.=' AND  (rva.created_at BETWEEN "'.$form_date1.'%" and "'.$end_date1.'%") ';
    }

    if(isset($_REQUEST['order_status']) && $_REQUEST['order_status']!=""){
   		$where_sql.=' AND  (rva.status = '.$_REQUEST['order_status'].' ) ';
    }


    if(isset($searchValue) && $searchValue!=""){
        $where_sql.=' AND (rva.fb_id = "'.$searchValue.'" )';
    }
    $sql=" SELECT  *  FROM `request_verification_application` as rva $join_sql  $where_sql  ORDER BY  rva.id DESC ";
    
    $resultd=mysqli_query($mysqli,$sql)or die(mysqli_error($mysqli));
    $all__request_data_total=mysqli_fetch_all($resultd, MYSQLI_ASSOC);
   $totalFiltered=count($all__request_data_total);
      
    $sql_limit= $sql .' limit '.$row .','. $rowperpage;
       $query = mysqli_query($mysqli,$sql_limit)or die(mysqli_error($mysqli));
     
    $data_list=mysqli_fetch_all($query, MYSQLI_ASSOC);
      $custom_array=array();
      $totalData =count($data_list);
     foreach ($data_list as $value) {
       $id=$value['id'];
      $status=$value['status'];
    
      $host_user="  "; 
      $userid=$value['fb_id'];    
      $sqli="select * from `users` WHERE fb_id='$userid'";
	  $userdata=mysqli_fetch_assoc(mysqli_query($mysqli,$sqli));
     $user="";
      $user.="<p>".$userdata['first_name'].' '.$userdata['last_name']."</p>";     
      //$host_user.="<p>".$value['ulrd_fb_id']."</p>";     
      $user.="<p>".$value['fb_id']."</p>";     
      


        $edit_url1="edit_user.php?user_id=".$userid;
       $edit_url='<a href="'.$edit_url1.'" class="btn btn-default"><i class="fa fa-eye" title="view order"></i>View</a>&nbsp; ';
       
       //$blockroom_url='&nbsp; <a class="block_room_id btn btn-sm btn-primary btn-sm"   data_id="'.$id.'"  >Block</a> &nbsp;'; 
       
        $remove_url='&nbsp; <a class="remove_id btn btn-sm btn-danger btn-sm"   data_id="'.$id.'"  >Delete</a> '; 
        
        $action=   $edit_url. $blockroom_url  .$remove_url;
  		

      $single=array(
                      $value['id'] ,//.'-'. $value['fb_id'] ,
                      $user,
                      $value['social_link'],
                      $value['created_at'],
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
