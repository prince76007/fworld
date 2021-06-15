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
      $where_sql.=' AND (video_status LIKE "%'.$searchValue.'" OR id LIKE "%'.$searchValue.'" OR  fb_id  LIKE "'.$searchValue.'%"  OR  description LIKE "'.$searchValue.'%" OR  created LIKE "'.$searchValue.'%" )';
    }
    $sql=" SELECT * FROM videos   $where_sql  ORDER BY id DESC ";
    
    $resultd=mysqli_query($mysqli,$sql)or die(mysqli_error($mysqli));
    $all__request_data_total=mysqli_fetch_all($resultd, MYSQLI_ASSOC);
   $totalFiltered=count($all__request_data_total);
      
    $sql_limit= $sql .' limit '.$row .','. $rowperpage;
       $query = mysqli_query($mysqli,$sql_limit)or die(mysqli_error($mysqli));
     
    $data_list=mysqli_fetch_all($query, MYSQLI_ASSOC);
      $custom_array=array();
      $totalData =count($data_list);
      foreach ($data_list as $value) {
         $id=$value['id'] ;
          
          $edit_url=' <a href="addedit_video.php?id='.$id.'" class="btn btn-sm btn-primary" >Edit</a>';
         $view_url='';
         // $view_url=' <a href="edit_blog.php?blog_id='.$id.'" class="btn btn-sm btn-info" >Edit</a>';
          $remove_url=' <a class="remove_vedio_id btn btn-sm btn-danger btn-sm"   data_id="'.$id.'"  >Delete</a> '; 
        
         $action=   $edit_url .   $view_url .$remove_url; 
        $base_URL="";
        $Preview='<a href="'.$value['video'].'" target="_blank"><img src="img/play.png" style="width: 30px;"></a>';
       $image='<img src="/'.$value['thum'].'"   style="width: 100px !important;">';
       
      $single=array(
                      $id,
                      $Preview,
                      $value['fb_id'],
                      $value['section'],
                      $value['sound_id'],
                      $value['description'],
                      $value['created'],
                      $value['video_status'],
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

echo notification_list_ajax();
