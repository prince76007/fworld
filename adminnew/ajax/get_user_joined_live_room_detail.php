<?php
include("../includes/connection.php");

include("../includes/function.php");
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
    
    $ulrd_id= $_REQUEST['ulrd_id'];
    $where_sql=" Where ujlrd.ujlrd_ulrd_id=$ulrd_id ";


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
      $where_sql.=' AND  (ujlrd.ujlrd_join_at BETWEEN "'.$form_date1.'%" and "'.$end_date1.'%") ';
    }

    if(isset($_REQUEST['custom_status']) && $_REQUEST['custom_status']!=""){
   		$where_sql.=' AND  (ujlrd.ujlrd_status = "'.$_REQUEST['custom_status'].'" ) ';
    }


    if(isset($searchValue) && $searchValue!=""){
     //$where_sql.=' AND (dth.dth_id = "'.$searchValue.'" OR  user.first_name LIKE "%'.$searchValue.'" OR  user.last_name LIKE "%'.$searchValue.'" OR user.email LIKE "%'.$searchValue.'" OR user.mobile LIKE "%'.$searchValue.'" OR  user.username  LIKE "'.$searchValue.'%"  OR  user.bio LIKE "'.$searchValue.'%" OR  user.created LIKE "'.$searchValue.'%" )';
    $where_sql.=' AND (ujlrd.ujlrd_id = "'.$searchValue.'" OR  ujlrd.ujlrd_fb_id LIKE "%'.$searchValue.'" )';
    }
    $sql=" SELECT  *  FROM `user_join_live_room_details` as ujlrd $join_sql  $where_sql  ORDER BY  ujlrd.ujlrd_id DESC ";
    
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
         $ujlrd_status=$value['ujlrd_status']; 
      $status='-';
      //1->leaving by user,2->kick(hoster Block) ,  3->admin(not usenow) 4=>unblock hosteruser

    	if($ujlrd_status==0){
      $status='Live';
  		}

      if($ujlrd_status==1){
      $status='Leave';
      }
      //3 not use
      if($ujlrd_status==3){
      $status=' block(Admin Block) ';
      }
      
      if($ujlrd_status==2){
      $status=' kick(hoster Block) ';
      }
      if($ujlrd_status==4){
      $status=' Unblock(hoster unblock) ';
      }


      $host_user="  "; 
      $userid=$value['ujlrd_fb_id'];    
      $sqli="select * from `users` WHERE fb_id='$userid'";
	  $userdata=mysqli_fetch_assoc(mysqli_query($mysqli,$sqli));
     
      $host_user.="<p>".$userdata['first_name'].' '.$userdata['last_name']."</p>";     
      //$host_user.="<p>".$value['ulrd_fb_id']."</p>";     
      $host_user.="<p>".$value['fb_id']."</p>";     
      
      $room_join_user_count=" - ";

       // $edit_url="view_ulrd.php?ulrd_id=".$id;
        $edit_url='<a  class="btn btn-default changestatus_fb_id" data_id="'.$id.'"  ><i class="fa fa-eye" title="view order"></i>Block</a>&nbsp; ';
  		  //$remove_url=' <a class="remove_I_id btn btn-sm btn-danger btn-sm"   data_id="'.$id.'"  >Delete</a> '; 
         $action=   $edit_url  .$remove_url=""; 
    
      $data_ujlrd="<P>". $value['ujlrd_join_at']."</P>";

      $data_ujlrd.="<P>Last Ping :". $value['ujlrd_isuser_pdatetime']."</P>";
       
      $ujlrd_user_type=" ";
      if($value['ujlrd_user_type']=='Admin'){
      $ujlrd_user_type=" A ";                 
      }
      $single=array(
                      $value['ujlrd_id'] .$ujlrd_user_type ,//.'-'. $value['fb_id'] ,
                      $value['ujlrd_fb_id'],
                      $host_user,
                      //$room_join_user_count,
                      $data_ujlrd,
                      $value['ujlrd_leave_at'],
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
