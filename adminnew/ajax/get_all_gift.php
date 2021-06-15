<?php
include("../includes/connection.php");
global $mysqli;

function gift_list_ajax()
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
  $where_sql=" Where 1=1 and gift_coin_type='Diamond' ";
    if(isset($searchValue) && $searchValue!=""){
      $where_sql.=' AND (gift_id LIKE "'.$searchValue.'%" OR  gift_title LIKE "'.$searchValue.'%" OR gift_amt LIKE "'.$searchValue.'%" OR gift_des LIKE "'.$searchValue.'%"  )';
    }
    $sql=" SELECT * FROM gift   $where_sql  ORDER BY gift_id  DESC ";
    
    $resultd=mysqli_query($mysqli,$sql)or die(mysqli_error($mysqli));
    $all__request_data_total=mysqli_fetch_all($resultd, MYSQLI_ASSOC);
   $totalFiltered=count($all__request_data_total);
      
    $sql_limit= $sql .' limit '.$row .','. $rowperpage;
       $query = mysqli_query($mysqli,$sql_limit)or die(mysqli_error($mysqli));
     
    $data_list=mysqli_fetch_all($query, MYSQLI_ASSOC);
      $custom_array=array();
      $totalData =count($data_list);
      foreach ($data_list as $value) {
         $id=$value['gift_id'];
          $edit_url=' <a href="addedit_gift.php?gift_id='.$id.'" class="btn btn-sm btn-primary" >Edit</a>';
          $remove_url=' <a class="remove_gift_id btn btn-sm btn-danger btn-sm"   data_id="'.$id.'"  >Delete</a> '; 
        $action=   $edit_url  .$remove_url; 
        $icon=" - ";
               if($value['gift_icon']!=""){
                $icon='<img src="'.$value['gift_icon'].'" width="30% !important">';
               }    

        $gift_animation_icon=" - ";
              if($value['gift_animation_icon']!=""){
               $gift_animation_icon='<img  src="'.$value['gift_animation_icon'].'" style="width:20%;">';
               }           
      $single=array(
                      $id,
                      $icon,
                      $gift_animation_icon,
                      $value['gift_title'],
                     // $value['gift_qty'],
                      $value['gift_diamond'],
                      '<textarea readonly>'.$value['gift_des'].'</textarea>',
                   //   $value['gift_exp'],
                      $value['gift_date'],
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

echo gift_list_ajax();
