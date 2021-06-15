<?php
include("../includes/connection.php");
global $mysqli;

function reporttag_list_ajax( )
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
      $where_sql.=' AND (report_reason_tag_id LIKE "%'.$searchValue.'" OR  report_reason_tag_name LIKE "%'.$searchValue.'" OR report_reason_tag_type LIKE "%'.$searchValue.'" OR report_reason_tag_status LIKE "%'.$searchValue.'" OR  report_reason_tag_cr_date LIKE "'.$searchValue.'%" )';
    }
    $sql=" SELECT * FROM report_reason_tag   $where_sql  ORDER BY report_reason_tag_id  DESC ";
    
    $resultd=mysqli_query($mysqli,$sql)or die(mysqli_error($mysqli));
    $all__request_data_total=mysqli_fetch_all($resultd, MYSQLI_ASSOC);
   $totalFiltered=count($all__request_data_total);
      
    $sql_limit= $sql .' limit '.$row .','. $rowperpage;
       $query = mysqli_query($mysqli,$sql_limit)or die(mysqli_error($mysqli));
     
    $data_list=mysqli_fetch_all($query, MYSQLI_ASSOC);
      $custom_array=array();
      $totalData =count($data_list);
      foreach ($data_list as $value) {
         $id=$value['report_reason_tag_id'];
          $edit_url=' <a href="report_tag.php?report_reason_tag_id='.$id.'" class="btn btn-sm btn-primary" >Edit</a>';
          $remove_url=' <a class="report_reason_tag_id btn btn-sm btn-danger btn-sm"   data_id="'.$id.'"  >Delete</a> '; 
        $action=   $edit_url  .$remove_url; 
        $image='<img src="'.$value['icon'].'"  style="width: 100px !important;">';
    
                 //`levelDecideExpo_id`, `title`, `exp`, `icon`, `des`  
      $single=array(
                      $id,
                      $value['report_reason_tag_name'],
                      $value['report_reason_tag_type'],
                      $value['report_reason_tag_cr_date'],
                      $value['report_reason_tag_status'],
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

echo reporttag_list_ajax();
