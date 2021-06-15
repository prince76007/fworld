<?php
include("../includes/connection.php");
global $mysqli;

function blog_list_ajax( )
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

    $join_sql=" LEFT JOIN blog_cat as bcat ON bcat.blog_cat_id=blog.blog_category_id ";
    //$join_sql.="  JOIN user as u on u.user_id=co.co_user_id ";

    $where_sql=" ";
    if(isset($searchValue) && $searchValue!=""){
      $where_sql.=' AND (blog.blog_id LIKE "%'.$searchValue.'" OR  bcat.blog_cat_name  LIKE "'.$searchValue.'%"  OR  blog.blog_status LIKE "'.$searchValue.'%" OR  blog.blog_publish_date LIKE "'.$searchValue.'%" )';
    }
    $sql=" SELECT * FROM blog as blog $join_sql  $where_sql  ORDER BY blog.blog_id DESC ";
    
    $resultd=mysqli_query($mysqli,$sql)or die(mysqli_error($mysqli));
    $all__request_data_total=mysqli_fetch_all($resultd, MYSQLI_ASSOC);
   $totalFiltered=count($all__request_data_total);
      
    $sql_limit= $sql .' limit '.$row .','. $rowperpage;
       $query = mysqli_query($mysqli,$sql_limit)or die(mysqli_error($mysqli));
     
    $data_list=mysqli_fetch_all($query, MYSQLI_ASSOC);
      $custom_array=array();
      $totalData =count($data_list);
      foreach ($data_list as $value) {
         $id=base64_encode($value['blog_id'] );
          if($value['attachment']!=""){
          $attechment="attachment ";
          }else{
          $attechment="";
              
          }
          $edit_url=' <a href="view_blog.php?blog_id='.$id.'" class="btn btn-sm btn-primary" >View</a>';
         
          $view_url=' <a href="edit_blog.php?blog_id='.$id.'" class="btn btn-sm btn-info" >Edit</a>';
          $remove_url=' <a class="remove_I_id btn btn-sm btn-danger btn-sm"   data_id="'.$id.'"  >Delete</a> '; 
        $action= $attechment.  $edit_url .   $view_url .$remove_url; 
    $image='<img src="images/blog_images/'.$value['blog_image'].'"  style="width: 100px !important;">';
      $single=array(
                      $value['blog_id'],
                      $image,
                      $value['blog_title'],
                      $value['blog_cat_name'],
                      
                      $value['blog_publish_date'],
                      $value['blog_status'],
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

echo blog_list_ajax();
