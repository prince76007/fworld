<?php
include("../includes/connection.php");
global $mysqli;

function level_list_ajax( )
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
      $where_sql.=' AND (level_id LIKE "'.$searchValue.'%" OR  level_name LIKE "'.$searchValue.'%" OR likes_count LIKE "'.$searchValue.'%" OR description LIKE "'.$searchValue.'%"  )';
    }
    $sql=" SELECT * FROM level   $where_sql  ORDER BY level_id  DESC ";
    
    $resultd=mysqli_query($mysqli,$sql)or die(mysqli_error($mysqli));
    $all__request_data_total=mysqli_fetch_all($resultd, MYSQLI_ASSOC);
   $totalFiltered=count($all__request_data_total);
      
    $sql_limit= $sql .' limit '.$row .','. $rowperpage;
       $query = mysqli_query($mysqli,$sql_limit)or die(mysqli_error($mysqli));
     
    $data_list=mysqli_fetch_all($query, MYSQLI_ASSOC);
      $custom_array=array();
      $totalData =count($data_list);
      foreach ($data_list as $value) {
         $id=$value['level_id'];
          $edit_url=' <a href="addedit_level.php?level_id='.$id.'" class="btn btn-sm btn-primary" >Edit</a>';
          $remove_url=' <a class="remove_level_id btn btn-sm btn-danger btn-sm"   data_id="'.$id.'"  >Delete</a> '; 
        $action=  $edit_url .' '.$remove_url; 
   			$icon="";
               if($value['icon']!=""){
               	$icon='<img src="'.BASEPATH.$value['icon'].'"  width="50%">';
               }    
      $single=array(
                      $id,
                      $value['level_tag'],
                      $value['level_name'],
                      $icon,
                      $value['level_expo'],
                      //$value['likes_count'],
                      $value['description'],
                      $value['date'],
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

    return  json_encode($json_data);
}



function live_level_list_ajax( )
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
      $where_sql.=' AND (live_level_id LIKE "'.$searchValue.'%" OR  live_level_name LIKE "'.$searchValue.'%" OR live_likes_count LIKE "'.$searchValue.'%" OR live_description LIKE "'.$searchValue.'%"  )';
    }
    $sql=" SELECT * FROM  live_level   $where_sql  ORDER BY   live_level_id  DESC ";
    
    $resultd=mysqli_query($mysqli,$sql)or die(mysqli_error($mysqli));
    $all__request_data_total=mysqli_fetch_all($resultd, MYSQLI_ASSOC);
   $totalFiltered=count($all__request_data_total);
      
    $sql_limit= $sql .' limit '.$row .','. $rowperpage;
       $query = mysqli_query($mysqli,$sql_limit)or die(mysqli_error($mysqli));
     
    $data_list=mysqli_fetch_all($query, MYSQLI_ASSOC);
      $custom_array=array();
      $totalData =count($data_list);
      foreach ($data_list as $value) {
         $id=$value['live_level_id'];
          $edit_url=' <a href="addedit_live_level.php?level_id='.$id.'" class="btn btn-sm btn-primary" >Edit</a>';
          $remove_url=' <a class="remove_level_id btn btn-sm btn-danger btn-sm"   data_id="'.$id.'"  >Delete</a> '; 
        $action= $edit_url .' ' .$remove_url; 
        $icon="";
               if($value['live_icon']!=""){
                $icon='<img src="'.BASEPATH.$value['live_icon'].'"  width="50%">';
               }    
      $single=array(
                      $id,
                      $value['live_level_tag'],
                      $value['live_level_name'],
                      $icon,
                      $value['live_level_expo'],
                      //$value['likes_count'],
                      $value['live_description'],
                      $value['live_date'],
       //               $action
                 );

      $custom=array_push($custom_array , $single);
      }

    $json_data = array(
    "draw"            => intval( $_REQUEST['draw'] ),
    "recordsTotal"    => intval( $totalData ),
    "recordsFiltered" => intval( $totalFiltered ),
    "data"            => $custom_array
    );

    return json_encode($json_data);
}

$type = $_REQUEST['type'];
if($type=="room_level")    
{
  echo live_level_list_ajax();
}

if($type=="profile_level")    
{

  echo level_list_ajax();
}