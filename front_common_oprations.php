<?php 

    error_reporting(1);
 		 ob_start();
    session_start();
 
    define('BASEPATH' ,'http://3.128.105.101/');
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

global  $mysqli;
//echo "C";
//print_r($_POST);

if(isset($_POST)){
$family_request_fb_id=$_POST['family_request_fb_id'];
$family_request_name=$_POST['family_request_name'];
$family_request_email=$_POST['family_request_email'];
$family_request_contact_person_name=$_POST['family_request_contact_person_name'];
$family_request_contact_number=$_POST['family_request_contact_number'];
$family_request_country=$_POST['family_request_country'];
$family_request_state=$_POST['family_request_state'];
$family_request_city=$_POST['family_request_city'];
$family_request_social_media_handle=$_POST['family_request_social_media_handle'];
$date_time=date('Y-m-d h:i:A');	

 	$sql="INSERT INTO `family_request` (`family_request_fb_id`, `family_request_name`, `family_request_email`, `family_request_contact_person_name`, `family_request_contact_number`, `family_request_country`, `family_request_state`, `family_request_city`, `family_request_social_media_handle`, `family_request_cr_date`) VALUES ('$family_request_fb_id', '$family_request_name', '$family_request_email', '$family_request_contact_person_name', '$family_request_contact_number', '$family_request_country', '$family_request_state', '$family_request_city', '$family_request_social_media_handle', '$date_time')";
   
    mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
    $lastid=mysqli_insert_id($mysqli);
    if($lastid){
     $data=array( 'out' => '1' , 'msg' =>"Your Request Successfully Taken" );
    echo json_encode($data);

    }else{
     $data=array( 'out' => '2' , 'msg' =>"Error In Record Plz Try Again" );
    echo json_encode($data);

    }

}else{

$data=array( 'out' => '2' , 'msg' =>"Validation Error" );
echo json_encode($data);

}


?>