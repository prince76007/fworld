<?php
include("../includes/connection.php");
global $mysqli;

function order_list_ajax( )
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
      $where_sql.=' AND  (pso.pos_is_active = "'.$pos_is_active.'") ';
    }
   

    if(isset($searchValue) && $searchValue!=""){
     $join_sql.="  JOIN user as u on u.user_id=co.co_user_id ";
      $where_sql.=' AND (pso.pso_id LIKE "%'.$searchValue.'" OR  u.email  LIKE "'.$searchValue.'%"  OR  pso.pso_fb_id LIKE "'.$searchValue.'%"  OR pso.pos_pay_by LIKE "%'.$searchValue.'") ';
    }
     $sql=" SELECT * FROM purchase_subscriptions_order as pso $join_sql  $where_sql  ORDER BY pso.pso_id DESC ";
    
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
          $id=$value['pso_id'];
         
$uid=$value['pso_fb_id'];
$sqli="select * from `users` WHERE fb_id='$uid'";
$data=mysqli_query($mysqli,$sqli) or die(mysqli_error($mysqli));
$user_data=mysqli_fetch_assoc($data);   
$user_details=" - ";

        if($user_data){              
         $user_details='<p>'.$user_data['name'].'</p>';
         $user_details.='<p>'.$user_data['mobile'].'</p>';
         $user_details.='<p>'.$user_data['email'].'</p>';
        }
        
         $status=" - "; //IS USE NOT USE 
          if($value['pos_is_active']=='1') 
           {
            $status="Active";
           }
          if($value['pos_is_active']=='0') 
           {
            $status="Dactive";
           }
          if($value['pos_is_active']=='2') 
           {
            $status="Expire";
           }  
       
        $plan_details=" - "; 

$pso_subscription_id=$value['pso_subscription_id'];
$sqli="select * from `services` WHERE service_id='$pso_subscription_id'";
$data=mysqli_query($mysqli,$sqli) or die(mysqli_error($mysqli));
$services_data=mysqli_fetch_assoc($data);   
       if($services_data){
         $plan_details='<p>'.$services_data['service_name'].'</p>';
        // $plan_details.='<p>'.$value['co_plan_Name'].'</p>';
         }
         $plan_details.='<p>'.$value['pos_duration'].'</p>';
        

         $edit_url="view_subcription_order.php?order_id=".$id;
         $action='<a href="'.$edit_url.'" class="btn btn-default"><i class="fa fa-eye" title="view order"></i>View</a>&nbsp;<a href="#" ><i class="icon-trash"></i></a> ';
    $pos_pay_by=$value['pos_pay_by'];
    if($pos_pay_by=='DIAMOND'){
$am=$value['pos_paid_diamond'];
    }
    if($pos_pay_by=='AMOUNT'){
$am=$value['pos_paid_amount'];
    }
      $single=array(
                    $id,
                    $user_details,
                    $plan_details,
                    $am,
                    $pos_pay_by,
                
                    $value['pos_transaction_id'],
                    $value['pos_start_date'],
                    $value['pos_end_date'],
                    
                    $value['pos_cr_date'],
	 	 		            $status,
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

echo order_list_ajax();
