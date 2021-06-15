<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);

include("../includes/connection.php");
global $mysqli;



	$fb_id=$_REQUEST['id'];
	$group_id=$_REQUEST['group_id']; 
	$type=$_REQUEST['type']; 

     $sql="SELECT * FROM custom_group where custom_group_id='$group_id'";
     $result=mysqli_query($mysqli,$sql); 
     $uwr_result=mysqli_fetch_assoc($result);
      $group_id=$uwr_result['custom_group_id'];    
      $custom_group_name=$uwr_result['custom_group_name'];    
    
      $custom_group_cr_date=$uwr_result['custom_group_cr_date'];    


	  $start_date=$custom_group_cr_date;    

      $end_date=date('Y-m-d');    

if($type=="user"){
//	echo $id;// user fb id



	
	$in_app="NA";
	$as_roomviewer_app="NA";
	$as_roomowner_app="NA";
	$as_liveboardcaster_app="NA";
	$as_liveboardcaster_viewer_app="NA";
   




   //send 
	$send_inlive_room="0";
     $sendlive_sql="SELECT sum(ubh_gift_total_diamond) as total_send_inlive_room FROM `user_baggage_history` WHERE   ubh_type='LIVEROOM' AND ubh_sender_fb_id= '$fb_id' AND ( `ubh_cr_date` between  '$start_date%' and '$end_date%') ";
	$send_inlive_room= mysqli_fetch_assoc(mysqli_query($mysqli,$sendlive_sql))['total_send_inlive_room'];
     if(empty($send_inlive_room)){
	  $send_inlive_room=" 0 ";
     }

	$send_inparty_room="NA";
	$send_ininbox_room="NA";
   //receive
	$receive_inlive_room="0";
	  $receive_inlive_sql="SELECT sum(ubh_gift_total_diamond) as total_receive_inlive_room FROM `user_baggage_history` WHERE   ubh_type='LIVEROOM' AND ubh_fb_id='$fb_id' AND ( `ubh_cr_date` between  '$start_date%' and '$end_date%') ";
	
	$receive_inlive_room= mysqli_fetch_assoc(mysqli_query($mysqli,$receive_inlive_sql))['total_receive_inlive_room'];
	 
	 if(empty($receive_inlive_room)){
	  $receive_inlive_room="0";
     }
   
	$receive_inparty_room="NA";
	$receive_ininbox_room="NA";



	$ouptput=array( 

		"fb_id" => $fb_id,
		"group_id"=>$group_id,	
		"type" => $type,	
		"in_app"=>$in_app,
		"as_roomviewer_app"=>$as_roomviewer_app,
		"as_roomowner_app"=>$as_roomowner_app,
		"as_liveboardcaster_app"=>$as_liveboardcaster_app,
		"as_liveboardcaster_viewer_app"=>$as_liveboardcaster_viewer_app,

		"send_inlive_room"=>$send_inlive_room,
	 	"send_inparty_room"=>$send_inparty_room,
	 	"send_ininbox_room" => $send_ininbox_room,
	 	//receive

	 	"receive_inlive_room"=>$receive_inlive_room,
	 	"receive_inparty_room"=>$receive_inparty_room,
	 	"receive_ininbox_room" => $receive_ininbox_room,
	
	  );

	echo json_encode($ouptput);
}


if($type=="group"){
//echo 	$id ;// here group id
   
   $group_id=$uwr_result['custom_group_id'];    
   $group_mmb_sql="SELECT GROUP_CONCAT(DISTINCT(custom_group_member_fb_id)) AS members FROM `custom_group_member` WHERE custom_group_id='$group_id'";
	$members_fb_ids= mysqli_fetch_assoc(mysqli_query($mysqli,$group_mmb_sql))['members'];
	if(empty($members_fb_ids)){
		$members_fb_ids="0";
	}

	
	$in_app="NA";
	$as_roomviewer_app="NA";
	$as_roomowner_app="NA";
	$as_liveboardcaster_app="NA";
	$as_liveboardcaster_viewer_app="NA";
   

   //send 
	$send_inlive_room="0";
      $sendlive_sql="SELECT sum(ubh_gift_total_diamond) as total_send_inlive_room FROM `user_baggage_history` WHERE  ubh_type='LIVEROOM' AND ubh_sender_fb_id IN (".$members_fb_ids.") AND ( `ubh_cr_date` between  '$start_date%' and '$end_date%') ";
	$send_inlive_room= mysqli_fetch_assoc(mysqli_query($mysqli,$sendlive_sql))['total_send_inlive_room'];
     if(empty($send_inlive_room)){
	  $send_inlive_room=" 0 ";
     }

	$send_inparty_room="NA";
	$send_ininbox_room="NA";
   //receive
	$receive_inlive_room="0";
	 $receive_inlive_sql="SELECT sum(ubh_gift_total_diamond) as total_receive_inlive_room FROM `user_baggage_history` WHERE  ubh_type='LIVEROOM' AND ubh_fb_id  IN (".$members_fb_ids.") AND ( `ubh_cr_date` between  '$start_date%' and '$end_date%') ";
	
	$receive_inlive_room= mysqli_fetch_assoc(mysqli_query($mysqli,$receive_inlive_sql))['total_receive_inlive_room'];
	 
	 if(empty($receive_inlive_room)){
	  $receive_inlive_room="0";
     }
      
    $receive_inparty_room="NA";
	$receive_ininbox_room="NA";

	
	$ouptput=array( 

		"fb_id" => $fb_id,
		"group_id"=>$group_id,
		"type" => $type,	
		"in_app"=>$in_app,
		"as_roomviewer_app"=>$as_roomviewer_app,
		"as_roomowner_app"=>$as_roomowner_app,
		"as_liveboardcaster_app"=>$as_liveboardcaster_app,
		"as_liveboardcaster_viewer_app"=>$as_liveboardcaster_viewer_app,

		"send_inlive_room"=>$send_inlive_room,
	 	"send_inparty_room"=>$send_inparty_room,
	 	"send_ininbox_room" => $send_ininbox_room,
	 	//receive

	 	"receive_inlive_room"=>$receive_inlive_room,
	 	"receive_inparty_room"=>$receive_inparty_room,
	 	"receive_ininbox_room" => $receive_ininbox_room,
	
	  );

	echo json_encode($ouptput);
}

?>