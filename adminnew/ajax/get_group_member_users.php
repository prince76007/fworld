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
    
    $group_id= $_REQUEST['group_id'];
    $where_sql=" Where cgm.custom_group_id=$group_id ";


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
      $where_sql.=' AND  (cgm.custom_group_member BETWEEN "'.$form_date1.'%" and "'.$end_date1.'%") ';
    }

    if(isset($_REQUEST['custom_status']) && $_REQUEST['custom_status']!=""){
   	//	$where_sql.=' AND  (ujlrd.ujlrd_status = "'.$_REQUEST['custom_status'].'" ) ';
    }


    if(isset($searchValue) && $searchValue!=""){
     //$where_sql.=' AND (dth.dth_id = "'.$searchValue.'" OR  user.first_name LIKE "%'.$searchValue.'" OR  user.last_name LIKE "%'.$searchValue.'" OR user.email LIKE "%'.$searchValue.'" OR user.mobile LIKE "%'.$searchValue.'" OR  user.username  LIKE "'.$searchValue.'%"  OR  user.bio LIKE "'.$searchValue.'%" OR  user.created LIKE "'.$searchValue.'%" )';
      $where_sql.=' AND (cgm.custom_group_member_fb_id = "'.$searchValue.'" OR  cgm.custom_group_member_fb_id LIKE "%'.$searchValue.'" )';
    }
    $sql=" SELECT  *  FROM `custom_group_member` as cgm $join_sql  $where_sql  ORDER BY  cgm.custom_group_member_id DESC ";
    
    $resultd=mysqli_query($mysqli,$sql)or die(mysqli_error($mysqli));
    $all__request_data_total=mysqli_fetch_all($resultd, MYSQLI_ASSOC);
   $totalFiltered=count($all__request_data_total);
      
    $sql_limit= $sql .' limit '.$row .','. $rowperpage;
       $query = mysqli_query($mysqli,$sql_limit)or die(mysqli_error($mysqli));
     
    $data_list=mysqli_fetch_all($query, MYSQLI_ASSOC);
      $custom_array=array();
      $totalData =count($data_list);
     foreach ($data_list as $value) {
       $id=$value['custom_group_member_id'];
        $g=$value['custom_group_id'];      

      $user="  "; 
      $userid=$value['custom_group_member_fb_id'];    
      $sqli="select * from `users` WHERE fb_id='$userid'";
	  $userdata=mysqli_fetch_assoc(mysqli_query($mysqli,$sqli));
      if($userdata){
      $user.="<p>".$userdata['first_name'].' '.$userdata['last_name']."</p>";     
      $host_user.="<p>".$value['mobile']."</p>";     
      //$user.="<p>".$userdata['fb_id']."</p>";     
        }

       // $edit_url="view_ulrd.php?ulrd_id=".$id;
        $edit_url='<a href="view_singleuser.php?group_id='.$g.'&fb_id='.$userid.'" class="btn btn-default changestatus_fb_id" data_id="'.$userid.'"  ><i class="fa fa-eye" title="view user Report"></i> View </a>&nbsp; ';
  		  $remove_url=' <a class="remove_member_id btn btn-sm btn-danger btn-sm"   data_id="'.$id.'"  >Remove</a> '; 
         $action=   $edit_url  .$remove_url; 
    
      $cdate="<P>". $value['custom_group_member_cr_date']."</P>";

      $checkbox_string=' <input type="checkbox" data-id="'.$id.'" class="custom_group_member_ids " > ';
       
      $single=array(
                      $checkbox_string.$id ,//.'-'. $value['fb_id'] ,
                      $userid,
                      $user,
                      $cdate,
                      //$room_join_user_count,
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
