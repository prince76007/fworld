<?php
include("../includes/connection.php");
global $mysqli;

function notification_list_ajax( )
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
    //$join_sql.="  JOIN user as u on u.user_id=co.co_user_id ";

    $where_sql=" where 1=1 ";
    if(isset($searchValue) && $searchValue!=""){
      $where_sql.=' AND (notification_id LIKE "%'.$searchValue.'" OR  title  LIKE "'.$searchValue.'%"  OR  des LIKE "'.$searchValue.'%" OR  date LIKE "'.$searchValue.'%" )';
    }
    $sql=" SELECT * FROM notification   $where_sql  ORDER BY notification_id DESC ";
    
    $resultd=mysqli_query($mysqli,$sql)or die(mysqli_error($mysqli));
    $all__request_data_total=mysqli_fetch_all($resultd, MYSQLI_ASSOC);
   $totalFiltered=count($all__request_data_total);
      
    $sql_limit= $sql .' limit '.$row .','. $rowperpage;
       $query = mysqli_query($mysqli,$sql_limit)or die(mysqli_error($mysqli));
     
    $data_list=mysqli_fetch_all($query, MYSQLI_ASSOC);
      $custom_array=array();
      $totalData =count($data_list);
      foreach ($data_list as $value) {
         $id=$value['notification_id'] ;
          
          $edit_url=' <a href="addedit_notification.php?id='.$id.'" class="btn btn-sm btn-primary" >Edit</a>';
         
         // $view_url=' <a href="edit_blog.php?blog_id='.$id.'" class="btn btn-sm btn-info" >Edit</a>';
          $remove_url=' <a class="remove_notification_id btn btn-sm btn-danger btn-sm"   data_id="'.$id.'"  >Delete</a> '; 
        $action=   $edit_url .   $view_url .$remove_url; 
    if($value['notification_image']!=''){
       $image='<img src="'.BASEPATH.$value['notification_image'].'"   style="width: 100px !important;">';
    }else{
       $image=''; 
    }
    $u_user="";
    $userid=$value['notification_fb_id'];    
    if($userid){
    $sqli="select * from `users` WHERE fb_id='$userid'";
    $userdata=mysqli_fetch_assoc(mysqli_query($mysqli,$sqli));
     
      $u_user.="<p>".$userdata['first_name'].' '.$userdata['last_name']."</p>";     
      $u_user.="<p>".$value['ulrd_fb_id']."</p>";     
    }else{
      $u_user="All";
    }
      $single=array(
                      $id,
                      $image,
                      $value['title'],
                      $value['des'],
                      $value['date'],
                      $u_user
                              
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

echo notification_list_ajax();
