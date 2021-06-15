<?php
$mainURL="http://18.188.65.45/API/";
$sound_baseurl = $mainURL."uploadSound/upload/";
$sound_baseurl_play = $mainURL."upload/audio/";

include("../includes/connection.php");
global $mysqli;

function sound_list_ajax( )
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
      $where_sql.=' AND (sound_name  LIKE "%'.$searchValue.'" OR  description   LIKE "%'.$searchValue.'" OR  section  LIKE "'.$searchValue.'%"  OR  created LIKE "'.$searchValue.'%" )';
    }
    $sql=" SELECT * FROM  sound $where_sql  ORDER BY id DESC ";
    
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
          
          $edit_url=' <a href="addedit_sound.php?id='.$id.'" class="btn btn-sm btn-primary" >Edit</a>';
         $view_url='';
         // $view_url=' <a href="edit_blog.php?blog_id='.$id.'" class="btn btn-sm btn-info" >Edit</a>';
          $remove_url=' <a class="remove_sound_id btn btn-sm btn-danger btn-sm"   data_id="'.$id.'"  >Delete</a> '; 
        $action=   $edit_url .   $view_url .$remove_url; 
    $sound_baseurl_play=
       $image='<img src="/'.$value['thum'].'"  width="45px" height="45px">';
       $sound='<audio controls="controls" style="border-radius: 20px;height: 30px;"><source src="'.$sound_baseurl_play.$id.'.aac" type="audio/mp4" /></audio>';
      $single=array(
                      $id,
                      $image.$sound,
                      //$value['sound_name'],
                      $value['sound_name'],
                      $value['description'],
                      $value['section'],
                      //$value['created'],
                      $value['created'],
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

echo sound_list_ajax();
