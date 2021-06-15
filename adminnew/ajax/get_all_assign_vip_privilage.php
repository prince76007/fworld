<?php
include("../includes/connection.php");
global $mysqli;

function assign_vip_list_ajax( )
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

    $join_sql="";
    $where_sql=" WHERE 1=1 ";
  
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
      $where_sql.=' AND  (pso.pos_cr_date BETWEEN "'.$form_date1.'%" and "'.$end_date1.'%") ';
    }

    if($_REQUEST['order_status']!=""){
      $pos_is_active=$_REQUEST['order_status'];
      $where_sql.=' AND  (cav.cav_status = "'.$pos_is_active.'") ';
    }
   

    if(isset($searchValue) && $searchValue!=""){
     $join_sql.="  JOIN user as u on u.user_id=co.co_user_id ";
      $where_sql.=' AND (cav.cav_id LIKE "%'.$searchValue.'" OR  u.email  LIKE "'.$searchValue.'%"  OR  cav.cav_fb_id LIKE "'.$searchValue.'%"  OR u.mobile LIKE "%'.$searchValue.'") ';
    }
     $sql=" SELECT * FROM custom_assign_vip as cav $join_sql  $where_sql  ORDER BY cav.cav_id DESC ";
    
    $resultd=mysqli_query($mysqli,$sql)or die(mysqli_error($mysqli));
    $all__request_data_total=mysqli_fetch_all($resultd, MYSQLI_ASSOC);
   $totalFiltered=count($all__request_data_total);
      


    $sql_limit= $sql .' limit '.$row .','. $rowperpage;
       $query = mysqli_query($mysqli,$sql_limit)or die(mysqli_error($mysqli));
     
    $data_list=mysqli_fetch_all($query, MYSQLI_ASSOC);
     
//print_r($data_list);
//die();
      $custom_array=array();
      $totalData =count($data_list);
      foreach ($data_list as $value) {
          $id=$value['cav_id'];
         
$uid=$value['cav_fb_id'];
$sqli="select * from `users` WHERE fb_id='$uid'";
$data=mysqli_query($mysqli,$sqli) or die(mysqli_error($mysqli));
$user_data=mysqli_fetch_assoc($data);   
$user_details=" - ";

        if($user_data){              
         $user_details='<p>'.$user_data['name'].'</p>';
         $user_details.='<p>'.$user_data['mobile'].'</p>';
         $user_details.='<p>'.$user_data['email'].'</p>';
        }
        
         $status=$value['cav_status']; 
           
       
        $plan_details=" - "; 

$pso_subscription_id=$value['cav_service_id'];
$sqli="select * from `services` WHERE service_id='$pso_subscription_id'";
$data=mysqli_query($mysqli,$sqli) or die(mysqli_error($mysqli));
$services_data=mysqli_fetch_assoc($data);   
       if($services_data){
         $plan_details='<p>'.$services_data['service_name'].'</p>';
        // $plan_details.='<p>'.$value['co_plan_Name'].'</p>';
         }
         $plan_details.='<p> Days:'.$value['cav_days'].'</p>';
  
        $edit_url="";
        $remove_url=' <a class="remove_I_id btn btn-sm btn-danger btn-sm"   data_id="'.$id.'"  >Delete</a> '; 
        $action=   $edit_url  .$remove_url; 
  
      $single=array(
                    $id,
                    $user_details,
                    $plan_details,
                    $value['cav_start_date'],
                    $value['cav_end_date'],
                    $status,
                    $value['cav_cr_date'],
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

echo assign_vip_list_ajax();
