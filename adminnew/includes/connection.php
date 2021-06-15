<?php
    error_reporting(1);
 		 ob_start();
    session_start();
 
 define('BASEPATH' ,'http://3.128.105.101/');
 //	header("Content-Type: text/html;charset=UTF-8");
    $server_file_path="http://3.128.105.101/";	
	
		if($_SERVER['HTTP_HOST']=="localhost" )
		{	
			//local  

			 DEFINE ('DB_USER', 'root');
			 DEFINE ('DB_PASSWORD', '');
			 DEFINE ('DB_HOST', 'localhost'); //host name depends on server
			 DEFINE ('DB_NAME', '');
		}
		else
		{
			//local live 
		 	 DEFINE ('DB_USER', 'root');
			 DEFINE ('DB_PASSWORD', 'Fworld@123#');
			 DEFINE ('DB_HOST', 'localhost'); //host name depends on server
			 DEFINE ('DB_NAME', 'wwwfworl_world');
		}

	
	$mysqli =mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
	

	if ($mysqli->connect_errno) 
	{
    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	else if($mysqli){
	    //echo 'OK';
	}

	 


	
	//Settings
	
    //Profile
    if(isset($_SESSION['admin_id']))
    {
     	$profile_qry="SELECT * FROM user_second where user_second_id='".$_SESSION['admin_id']."'";
	    $profile_result=mysqli_query($mysqli,$profile_qry);
	    $profile_details=mysqli_fetch_assoc($profile_result);
       define("PROFILE_IMG",$profile_details['user_second_image']);
    }
    
	
 
?> 
	 
 