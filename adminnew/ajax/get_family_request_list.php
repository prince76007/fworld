<?php
include("../includes/connection.php");
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
      $where_sql.=' AND  (fr.family_request_cr_date BETWEEN "'.$form_date1.'%" and "'.$end_date1.'%") ';
    }

    if($_REQUEST['order_status']!=""){
      $pos_is_active=$_REQUEST['order_status'];
      $where_sql.=' AND  (fr.family_request_is_active = "'.$pos_is_active.'") ';
    }
   

    if(isset($searchValue) && $searchValue!=""){
     $join_sql.="  JOIN user as u on u.fb_id=fr.family_fb_id ";
      $where_sql.=' AND (fr.family_request_id LIKE "%'.$searchValue.'" OR  fr.family_request_name  LIKE "'.$searchValue.'%"  OR  fr.family_request_fb_id LIKE "'.$searchValue.'%"  OR fr.family_request_contact_number LIKE "%'.$searchValue.'") ';
    }
     $sql=" SELECT * FROM family_request as fr $join_sql  $where_sql  ORDER BY family_request_id DESC ";
    
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
          $id=$value['family_request_id'];
         
$uid=$value['family_request_fb_id'];
$sqli="select * from `users` WHERE fb_id='$uid'";
$data=mysqli_query($mysqli,$sqli) or die(mysqli_error($mysqli));
$user_data=mysqli_fetch_assoc($data);   
        $user_details='<p>'.$uid.'</p>';
        
        if($user_data){              
         //$user_details='<p>'.$user_data['fb_id'].'</p>';
         $user_details.='<p>'.$user_data['name'].'</p>';
         $user_details.='<p>'.$user_data['mobile'].'</p>';
         $user_details.='<p>'.$user_data['email'].'</p>';
        }else{
            $user_details.='<p>Fb id not found </p>';
        }
        
         $status=" - "; //IS USE NOT USE 
          if($value['family_request_is_active']=='1') 
           {
            $status="Active";
           }
          if($value['family_request_is_active']=='0') 
           {
            $status="Pending";
           }
          if($value['family_request_is_active']=='2') 
           {
            $status="Expire";
           }  
       
        

         $edit_url=' <a href="view_family_request.php?family_request_id='.$id.'" class="btn btn-sm btn-primary" >Edit</a>';
         
   
        $remove_url=' <a class="remove_family_request_id btn btn-sm btn-danger btn-sm"   data_id="'.$id.'"  >Delete</a> '; 
        $action=   $edit_url  .$remove_url; 
       
       
        $single=array(
                    $id,
                    $value['family_request_name'],
                    $user_details,
                    $value['family_request_contact_person_name'],
                    $value['family_request_contact_number'],
                    $value['family_request_email'],
                    $value['family_request_country'],
                    $value['family_request_state'],
                    $value['family_request_city'],
                    $value['family_request_social_media_handle'],
                    $value['family_request_cr_date'],
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

