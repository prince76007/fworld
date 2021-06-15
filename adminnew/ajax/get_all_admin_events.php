<?php
include("../includes/connection.php");


  global $mysqli;
    $TYPE = $_REQUEST['type'];
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
    if(isset($TYPE) && $TYPE!=""){
      $where_sql.=' AND  event_admin_type= "'.$TYPE.'" ';
    }
   
    if(isset($searchValue) && $searchValue!=""){
      $where_sql.=' AND (video_status LIKE "%'.$searchValue.'" OR id LIKE "%'.$searchValue.'" OR  fb_id  LIKE "'.$searchValue.'%"  OR  description LIKE "'.$searchValue.'%" OR  created LIKE "'.$searchValue.'%" )';
    }
    $sql=" SELECT * FROM event_admin_new   $where_sql  ORDER BY event_admin_id DESC ";
    
    $resultd=mysqli_query($mysqli,$sql)or die(mysqli_error($mysqli));
    $all__request_data_total=mysqli_fetch_all($resultd, MYSQLI_ASSOC);
   $totalFiltered=count($all__request_data_total);
      
    $sql_limit= $sql .' limit '.$row .','. $rowperpage;
       $query = mysqli_query($mysqli,$sql_limit)or die(mysqli_error($mysqli));
     
    $data_list=mysqli_fetch_all($query, MYSQLI_ASSOC);
      $custom_array=array();
      $totalData =count($data_list);
      foreach ($data_list as $value) {
         $id=$value['event_admin_id'] ;
          
          $edit_url=' <a href="addedit_event.php?id='.$id.'" class="btn btn-sm btn-primary" >Edit</a>';
         $view_url='';
         // $view_url=' <a href="edit_blog.php?blog_id='.$id.'" class="btn btn-sm btn-info" >Edit</a>';
          $remove_url=' <a href="action.php?p=delete_event&id='.$id.'" class="remove_event_id btn btn-sm btn-danger btn-sm"   data_id="'.$id.'"  >Delete</a> '; 
        
         $action=   $edit_url .   $view_url .$remove_url; 
        $base_URL="";
       
        $image='<img src="'.BASEPATH.'/'.$value['event_admin_icon'].'"   style="width: 100px !important;">';
       $start=$value['event_admin_from_date'] .' '. $value['event_admin_start_time'];
       $end=$value['event_admin_to_date'] .' '. $value['event_admin_end_time'];
                      
      $single=array(
                      $id,
                      $value['event_admin_title'],
                      $image,
                      $start,
                      $end,
                      //$value['event_admin_to_date'],
                      $value['event_admin_type'],
                      $value['event_admin_status'],
                      $value['event_admin_created_date'],
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
   

