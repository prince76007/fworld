<?php
include("../includes/connection.php");
global $mysqli;
//$BASHPATH="";
function reporttag_list_ajax( )
    {
 $BASHPATH=BASEPATH."/API/";

  global $mysqli;
    $draw = $_REQUEST['draw'];
    $TYPE = $_REQUEST['type'];
    $row = $_REQUEST['start'];
    $searchValue = $_REQUEST['search']['value'];
    $rowperpage = $_REQUEST['length']; // Rows display per page
    $order = $_REQUEST['order'][0]['dir'];
    $columnIndex = $_REQUEST['order'][0]['column']; // Column index
    $columnName = $_REQUEST['columns'][$columnIndex]['data']; // Column name
    $columnSortOrder = $_REQUEST['order'][0]['dir']; // asc or desc
    $searchQuery = '';
  $where_sql=" Where 1=1 ";
  if(isset($TYPE) && $TYPE!=""){
      $where_sql.=' AND  report_reason_type= "'.$TYPE.'" ';
    }
   $join_sql=" Left join users as user on  user.fb_id=rr.report_reason_user_id ";
    if(isset($searchValue) && $searchValue!=""){
      $where_sql.=' AND (rr.report_reason_id = "'.$searchValue.'" OR  rr.report_reason_type = "'.$searchValue.'" OR rr.report_reason_description LIKE "'.$searchValue.'%" OR rr.report_reason_status = "'.$searchValue.'" OR  rr.report_reason_cr_date LIKE "'.$searchValue.'%" )';
    }
   $sql=" SELECT * FROM report_reason as rr $join_sql $where_sql  ORDER BY rr.report_reason_id  DESC ";
    
    $resultd=mysqli_query($mysqli,$sql)or die(mysqli_error($mysqli));
    $all__request_data_total=mysqli_fetch_all($resultd, MYSQLI_ASSOC);
   $totalFiltered=count($all__request_data_total);
      
    $sql_limit= $sql .' limit '.$row .','. $rowperpage;
       $query = mysqli_query($mysqli,$sql_limit)or die(mysqli_error($mysqli));
     
    $data_list=mysqli_fetch_all($query, MYSQLI_ASSOC);
      $custom_array=array();
      $totalData =count($data_list);
      foreach ($data_list as $value) {
         $id=$value['report_reason_id'];
         // $edit_url=' <a href="report.php?report_reason_id='.$id.'" class="btn btn-sm btn-primary" >Edit</a>';
          $remove_url=' <a class="report_reason_id btn btn-sm btn-danger btn-sm"   data_id="'.$id.'"  >Delete</a> '; 
        $action=   $edit_url  .$remove_url; 
      
      $report_for= "";
      if($value['report_reason_to_user_id']!="")
       {
        $fbid=$value['report_reason_to_user_id'];
  $usqli="select * from `users` WHERE fb_id='$fbid'";
  $udata=mysqli_query($mysqli,$usqli) or die(mysqli_error($mysqli));
  $userrow=mysqli_fetch_assoc($udata); 
   $Ufirst_name=$userrow['first_name'].' '.$userrow['last_name'];
   $link='<a href="edit_user.php?user_id='.$userrow['id'].'" target="_blank">'.$Ufirst_name.'</a>';
   $report_for= "User :- <p>Name:-" .$link.' '.'</p><p>Fb id:-'.$fbid.'</p>';//.$link;
       }

       if($value['report_reason_video_id']!=0)
       {
        $vid=$value['report_reason_video_id'];
  $vsqli="select * from `videos` WHERE id='$vid'";
  $vdata=mysqli_query($mysqli,$vsqli) or die(mysqli_error($mysqli));
  $vediorow=mysqli_fetch_assoc($vdata); 
   $r=$vediorow['description'];
   $link='<a href="'.$vediorow['video'].'" target="_blank">Video</a>';
   $report_for= "Video :- <p>Description".$r.'</p> <p>'.$link.'</p>';
       }

       if($value['report_reason_ulrd_id']!=0)
       {
        $ulrdid=$value['report_reason_ulrd_id'];
  $vsqli="select * from `user_live_room_details` WHERE  ulrd_id='$ulrdid'";
  $vdata=mysqli_query($mysqli,$vsqli) or die(mysqli_error($mysqli));
  $ulrdrow=mysqli_fetch_assoc($vdata); 
   $r=$value['report_reason_ulrd_id'] .' ('.$ulrdrow['ulrd_fb_id'].')';
  // $link='<a href="'.$vediorow['video'].'" target="_blank">Video</a>';
   $link='';
   $report_for= "Live Room :- <p> ".$r.'</p>';
  // $report_for.= " <p>".$r.'</p> <p>'.$link.'</p>';
   
       }   
  
  $attachments="";
  $attechmentsqli="select * from `report_reason_attechment` WHERE rra_report_reason_id='$id'";
  $resultdata=mysqli_query($mysqli,$attechmentsqli) or die(mysqli_error($mysqli));
  $attechmentdata=mysqli_fetch_all($resultdata, MYSQLI_ASSOC); 
  if(!empty($attechmentdata)){
  $attachments.="<p>Attachment";
  
  foreach ($attechmentdata as $attval) {
    $attachments.='<a href="'.$BASHPATH.$attval['rra_attechment'].'" target="_blank">'.$attval['rra_id'].'</a>&nbsp;';
  }
  $attachments.="</p>";
  
  }

 $report_reason_description='<p>'.$value['report_reason_description'].'</p><p>'.$value['report_reason_description2']."</p>".$attachments;


      $single=array(
                      $id,
                      //$value['report_reason_name'],
                     // $value['report_reason_type'],
                      $value['report_reason_user_id'],
                      $value['first_name'].' '.$value['last_name'],
                      $report_reason_description,
                      $report_for, 
                      $value['report_reason_cr_date'],
                      //$value['report_reason_up_date'],
                      //$value['report_reason_status'],
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
