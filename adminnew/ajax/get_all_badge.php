<?php
include("../includes/connection.php");
global $mysqli;

function badge_list_ajax( )
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
  $where_sql=" Where 1=1 ";
    if(isset($searchValue) && $searchValue!=""){
      $where_sql.=' AND (badge_id LIKE "'.$searchValue.'%" OR   badge_title LIKE "'.$searchValue.'%" OR badge_status LIKE "'.$searchValue.'%" OR badge_descriptions LIKE "'.$searchValue.'%"  )';
    }
    $sql=" SELECT * FROM  badge  $where_sql   ";
    
    $resultd=mysqli_query($mysqli,$sql)or die(mysqli_error($mysqli));
    $all__request_data_total=mysqli_fetch_all($resultd, MYSQLI_ASSOC);
   $totalFiltered=count($all__request_data_total);
      
    $sql_limit= $sql .' limit '.$row .','. $rowperpage;
       $query = mysqli_query($mysqli,$sql_limit)or die(mysqli_error($mysqli));
     
    $data_list=mysqli_fetch_all($query, MYSQLI_ASSOC);
      $custom_array=array();
      $totalData =count($data_list);
      foreach ($data_list as $value) {
         $id=$value['badge_id'];
          $edit_url=' <a href="addedit_badge.php?badge_id='.$id.'" class="btn btn-sm btn-primary" >Edit</a>';
          $remove_url=' <a class="remove_badge_id btn btn-sm btn-danger btn-sm"   data_id="'.$id.'"  >Delete</a> '; 
        $action=   $edit_url  .$remove_url; 
   			$badge_blackandwhiteicon=" - ";
               if($value['badge_blackandwhite']!=""){
               	$badge_blackandwhiteicon='<img src="'.$server_file_path.$value['badge_blackandwhite'].'" width="80" height="80">';
               }
        $badge_coloricon= " - ";
               if($value['badge_color']!=""){
                $badge_coloricon='<img src="'.$server_file_path.$value['badge_color'].'" width="80" height="80">';
               }           
      $single=array(
                      $id,
                      $value['badge_title'],
                      $badge_blackandwhiteicon,
                      $badge_coloricon,
                      $value['badge_descriptions'],
                      $value['badge_status'],
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

echo badge_list_ajax();
