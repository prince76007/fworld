<?php include("includes/connection.php");
	 

	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

	  
	if($username=="")
	{
		 $_SESSION['msg']="Username Required"; 
		 header( "Location:index.php");
		 exit;
		 
	}
	else if($password=="")
	{
		$_SESSION['msg']="Password Required"; 
		header( "Location:index.php");
		exit;		 
	}	 
	else
	{
	echo 	$qry="select * from user_second where user_second_username='".$username."' and user_second_password='".$password."'   and user_second_status ='Active'";
		 
		$result=mysqli_query($mysqli,$qry);		
		
		if(mysqli_num_rows($result) > 0)
		{ 
			$row=mysqli_fetch_assoc($result);
    print_r($row);
            
			$_SESSION['admin_id']=$row['user_second_id'];
		    $_SESSION['fullname']==$row['user_second_name'];
		    $_SESSION['admin_name']=$row['user_second_name'];
		    $_SESSION['admin_usertype']=$row['user_second_usertype'];
			 
			header( "Location:home.php");
			exit;
				
		}
		else
		{
			$_SESSION['msg']="Invalid User name and Password"; 
			header( "Location:index.php");
			exit;
			 
		}
	}
	
	
	


?> 