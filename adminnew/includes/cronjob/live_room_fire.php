<?php

include("../connection.php");
//include("../includes/function.php");
global $mysqli;
global $server_file_path;



date_default_timezone_set('Asia/Kolkata');
$current_datetime1=date('Y-m-d H:i:s');
$current_datetime =date('Y-m-d H:i:s', strtotime($current_datetime1.' - 4 minute'));
 
// echo $sel_sql=" Select ulrd_id,ulrd_isuser_pdatetime From user_live_room_details  where ulrd_isuser_pdatetime < '$current_datetime'  and ulrd_isuser_pdatetime!=''  ORDER by ulrd_id DESC ";
 

echo $sel_sql=" Select ulrd_id,ulrd_isuser_pdatetime From user_live_room_details  where ulrd_isuser_pdatetime < '$current_datetime' and ulrd_status=0  ORDER by ulrd_id DESC ";
  $res=mysqli_query($mysqli,$sel_sql) or die('e'.mysqli_error($mysqli));
   $da=mysqli_fetch_all($res, MYSQLI_ASSOC); 

echo "<pre>";		       
print_r($da);
//echo "<pre>";		       

echo $update_sql=" update user_live_room_details set ulrd_status=4 , ulrd_isuser_online=1 where ulrd_isuser_pdatetime < '$current_datetime'   and ulrd_status=0  ";
 
  mysqli_query($mysqli,$update_sql)or die(mysqli_error($mysqli));

 //$update_sql=" update user_join_live_room_details   set ujlrd_status=4 , ujlrd_isuser_online=1 where ujlrd_isuser_pdatetime < '$current_datetime' and   ujlrd_isuser_pdatetime!=''  and ujlrd_status=0  and ujlrd_isuser_online=0  ORDER by ujlrd_id ASC ";


 // mysqli_query($mysqli,$update_sql)or die(mysqli_error($mysqli));
?>