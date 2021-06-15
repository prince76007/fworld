<?php

global $mysqli;
date_default_timezone_set('Asia/Kolkata');
$current_datetime1=date('Y-m-d H:i:s');
$current_datetime =date('Y-m-d H:i:s', strtotime($current_datetime1.' - 5 minute'));
 
  $update_sql=" update user_live_room_details set ulrd_status=4 , ulrd_isuser_online=1 where ulrd_isuser_pdatetime < '$current_datetime'   and ulrd_status=0  ";
 mysqli_query($mysqli,$update_sql)or die(mysqli_error($mysqli));
?>