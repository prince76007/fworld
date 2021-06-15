<?php
include("../includes/connection.php");
global $mysqli;


	 if(isset($_REQUEST['del_cav_id']))
    {
       $id=$_REQUEST['del_cav_id'];
       $qry="delete from custom_assign_vip where cav_id='$id'";
       $data_ins=mysqli_query($mysqli,$qry);
       echo 1;
    }
