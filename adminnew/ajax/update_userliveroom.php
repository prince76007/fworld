<?php
include("../includes/connection.php");
global $mysqli;


	 if(isset($_REQUEST['live_id']))
    {
       $id=$_REQUEST['live_id'];
       $qry="update  user_live_room_details set ulrd_status=2 where (ulrd_status=3 or ulrd_status=0) and ulrd_id='$id'";
       $data_ins=mysqli_query($mysqli,$qry);
       $update=mysqli_affected_rows($mysqli);
    	if($update){
    		echo "Live Room Succfully Block";
    	}else{
    		echo "Live Room Not Update";
    	}
    }
