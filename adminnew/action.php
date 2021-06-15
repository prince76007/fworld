<?php
include("includes/function.php");
 error_reporting(1);
	if(isset($_GET["p"]))
	{
		if($_GET["p"]=="add_notification")
		{
		$response=	add_system_notification($_POST);
           if($response){
               redirect('adminnew/view_allnotification.php');
             
           }
		}
        
      
        if($_GET["p"]=="delete_event")
		{
         $id=$_GET["id"];
		$response=	delete_event($id);
           if($response){
               redirect('adminnew/event_managment.php');
             
           }
		}
    }



function redirect($url){
  return   header("Location: /".$url);
}

?>