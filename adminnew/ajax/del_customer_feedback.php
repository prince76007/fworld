<?php
include("../includes/connection.php");
global $mysqli;


	 if(isset($_REQUEST['id']))
    {
       $id=$_REQUEST['id'];
       $qry="delete from customer_feedback where customer_feedback_id='$id'";
       $data_ins=mysqli_query($mysqli,$qry);
       echo 1;
    }
