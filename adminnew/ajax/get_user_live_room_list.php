<?php
include("../includes/connection.php");
//include("../includes/function.php");
global $mysqli;
global $server_file_path;

 include("../includes/cronjob/testcron.php");



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

    if(isset($_REQUEST['custom_status']) && $_REQUEST['custom_status']!=""){
   		$where_sql.=' AND  (ulrd.ulrd_status = '.$_REQUEST['custom_status'].' ) ';
    }


    if(isset($searchValue) && $searchValue!=""){
      $where_sql.=' AND (ulrd.ulrd_id = "'.$searchValue.'" OR  ulrd.ulrd_room_id LIKE "%'.$searchValue.'" OR  ulrd.ulrd_stream_id LIKE "%'.$searchValue.'" OR ulrd.ulrd_stream_title LIKE "%'.$searchValue.'" )';
    }
    $sql=" SELECT  *  FROM `user_live_room_details` as ulrd $join_sql  $where_sql  ORDER BY  ulrd.ulrd_id DESC ";
    
    $resultd=mysqli_query($mysqli,$sql)or die(mysqli_error($mysqli));
    $all__request_data_total=mysqli_fetch_all($resultd, MYSQLI_ASSOC);
   $totalFiltered=count($all__request_data_total);
      
    $sql_limit= $sql .' limit '.$row .','. $rowperpage;
       $query = mysqli_query($mysqli,$sql_limit)or die(mysqli_error($mysqli));
     
    $data_list=mysqli_fetch_all($query, MYSQLI_ASSOC);
      $custom_array=array();
      $totalData =count($data_list);
     foreach ($data_list as $value) {
       $id=$value['ulrd_id'];
      $ulrd_status=$value['ulrd_status'];
    if($ulrd_status==3){
    $status='Pending';
    }    
    if($ulrd_status==1){
    $status='Stop';
  	}
    if($ulrd_status==2){
      $status='Block';
      }

    if($ulrd_status==0){
      $status='Live';
  		}
    if($ulrd_status==4){
      $status='System Out';
      }

      $host_user="  "; 
      $userid=$value['ulrd_fb_id'];    
      $sqli="select * from `users` WHERE fb_id='$userid'";
	  $userdata=mysqli_fetch_assoc(mysqli_query($mysqli,$sqli));
     
      $host_user.="<p>".$userdata['first_name'].' '.$userdata['last_name']."</p>";     
      //$host_user.="<p>".$value['ulrd_fb_id']."</p>";     
      $host_user.="<p>".$value['ulrd_fb_id']."</p>";     
      
      $room_join_user_count=" - ";
       $count_joinuser = mysqli_query($mysqli,"SELECT count(*) as count_joinuser from user_join_live_room_details where ujlrd_ulrd_id=$id");
       $room_join_user_count=mysqli_fetch_assoc($count_joinuser)['count_joinuser'];
           


         $edit_url1="view_ulrd.php?ulrd_id=".$id;
        $edit_url='<a href="'.$edit_url1.'" class="btn btn-default"><i class="fa fa-eye" title="view order"></i>View</a>&nbsp; ';
         $blockroom_url='&nbsp; <a class="block_room_id btn btn-sm btn-primary btn-sm"   data_id="'.$id.'"  >Block</a> &nbsp;'; 
       
        $remove_url='&nbsp; <a class="remove_I_id btn btn-sm btn-danger btn-sm"   data_id="'.$id.'"  >Delete</a> '; 
        
        $action=   $edit_url. $blockroom_url  .$remove_url;
  		 $icon= '-';
		 if($value['ulrd_icon']){
  		    $icon='<img src="'.$server_file_path.$value['ulrd_icon'].'" width="80" height="80">';
         }

     $value_ulrd_cr_date= "<p>".$value['ulrd_cr_date']."</p>";
     $value_ulrd_cr_date.= "<p>Last Ping: ".$value['ulrd_isuser_pdatetime']."</p>";
     
      $single=array(
                      $value['ulrd_id'] ,//.'-'. $value['fb_id'] ,
                      $value['ulrd_room_id'],
                      $value['ulrd_stream_id'],
                      $value['ulrd_stream_title'],
                      $icon,
                      $host_user,
                      $room_join_user_count,
                      $value_ulrd_cr_date,
                      $value['ulrd_leave_at'],
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
