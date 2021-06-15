<?php
// 	if(!isset($_SESSION['admin_user_type']))
// 	{
// 	    session_destroy();
// 		header( "Location:index.php");
// 		exit;
	    
// 	}
	if(!isset($_SESSION['admin_usertype'])){
	   	session_destroy();
		
		header( "Location:index.php");
		exit;
	}
    if(!isset($_SESSION['admin_id']))
	{
		session_destroy();
		
		header( "Location:index.php");
		exit;
		 
	}
	 
	
?>