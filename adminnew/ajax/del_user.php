<?php
include("../includes/connection.php");
global $mysqli;


	 if(isset($_REQUEST['del_user_id']))
    {
       $id=$_REQUEST['del_user_id'];
       $qry="delete from users where fb_id='$id'";
       $data_ins=mysqli_query($mysqli,$qry);
       echo 1;
    }
