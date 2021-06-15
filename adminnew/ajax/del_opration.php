<?php
include("../includes/connection.php");
global $mysqli;

$opration=$_POST['opration'];

if($opration=='remove_recharge_plan_id')
{
 if(isset($_POST['id']))
    {
       $id=$_POST['id'];
       $qry="delete from recharge_plan where recharge_plan_id='$id'";
       $data_ins=mysqli_query($mysqli,$qry);
       if(mysqli_affected_rows($mysqli)){
  			echo 1;
       }else{
        //echo 0;
       }
    }
}
