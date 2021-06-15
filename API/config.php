<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(1);
 	
	// Turn off error reporting
    //web API path
	//eg http://domain.com/API/
	define("GIFTSENDEXP","5");
	define("GIFTRECEIVEEXP","3");
	define("SENDPOST","0.1");
	define("COMMENTPOST","0.001");
	
	define("BASE_PATH","http://3.128.105.101/");
	$API_path="http://3.128.105.101/API/";

    define("firebase_key","AAAA72BqQ9Y:APA91bFiZ1GFWcYaJiCB9wNPm5a_ZhSMxuh7A1_R88i76-8G-gToF096WqJ8FAOAumuLv7n2dKKpyJu-LsclNcsyGLkW5IiToOVXPWjSCZj-iAMh9zDE_nYWOWMVw-JBywwVzfBgIPBG");
	
	//database configration
	$servername = "localhost";
	$database = "wwwfworl_world";
	$username = "root";
	$password = "Fworld@123#";
    
	// Create connection

	$conn = mysqli_connect($servername, $username, $password, $database);
	mysqli_query($conn,"SET SESSION sql_mode = 'NO_ENGINE_SUBSTITUTION'");
	
	// Check connection

	if (!$conn) {

	    die("Connection failed: " . mysqli_connect_error());

	}
    
	
?>