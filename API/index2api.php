<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 $url = 'http://18.188.65.45/admin/gift_img/';	
	
	if(isset($_GET["p"]))
	{
		 if($_GET["p"]=="get_report_reason_tag")
		{
			get_report_reason_tag();
		}else if($_GET["p"]=="submit_report_reason")
		{
			submit_report_reason();
		}
	
	}
	else
	{
		echo"Not Found";

	}

	function submit_report_reason(){
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);

	if(!isset($event_json['report_reason_user_id']) || $event_json['report_reason_user_id']=="") 
			{
				$msg_out="Validation Error report_reason_user_id Missing11";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				exit();
			}		
	
	if(!isset($event_json['report_reason_type']) || $event_json['report_reason_type']=="") 
			{
				$msg_out="Validation Error Report Reason type Missing11";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				exit();
			}

			if($event_json['report_reason_type']=="Video")		   
		    {
		    	//video validation fire
				if(!isset($event_json['report_reason_video_id']) || $event_json['report_reason_video_id']=="") 
					{
						$msg_out="Validation Error Report Reason video_id Missing";
					    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
							
						 print_r(json_encode($output, true)); 
						exit();
					}

			}
			if($event_json['report_reason_type']=="Profile")		   
		    {
		    //report_reason_to_user_id validation fire
				if(!isset($event_json['report_reason_to_user_id']) || $event_json['report_reason_to_user_id']=="") 
					{
						$msg_out="Validation Error report_reason_to_user_id Missing";
					    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
							
						 print_r(json_encode($output, true)); 
						exit();
					}
			}

			if($event_json['report_reason_type']!="Video" && $event_json['report_reason_type']!="Profile")		   
		    {
		
						$msg_out="Validation Error report_reason_type not match";
					    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
							
						 print_r(json_encode($output, true)); 
						exit();
					}
					    	

	if(isset($event_json['report_reason_description']) && $event_json['report_reason_description']=="" )
	    {
			$msg_out="Validation Error report_reason_description ";
			$output=array( "code" => "201", "msg" => $msg_out);
			print_r(json_encode($output, true));
			exit();
		}


			$report_reason_type=htmlspecialchars(strip_tags($event_json['report_reason_type'] , ENT_QUOTES));
		   $report_reason_type=htmlspecialchars(strip_tags($event_json['report_reason_type'] , ENT_QUOTES));
		   $report_reason_description=htmlspecialchars(strip_tags($event_json['report_reason_description'] , ENT_QUOTES));
		   $report_reason_to_user_id=htmlspecialchars(strip_tags($event_json['report_reason_to_user_id'] , ENT_QUOTES));
	
			if($event_json['report_reason_type']=="Video")		   
		    {
		    $report_reason_user_id=htmlspecialchars(strip_tags($event_json['report_reason_user_id'] , ENT_QUOTES));
		     
		     $qrry_1="insert into report_reason (`report_reason_type`, `report_reason_description`, `report_reason_user_id`, ,`report_reason_video_id`)values(";
    			$qrry_1.="'".$report_reason_type."',";
    			$qrry_1.="'".$report_reason_description."',";
    			$qrry_1.="'".$report_reason_user_id."',";
    			//$qrry_1.="'',";
    			$qrry_1.="'".$report_reason_video_id."'";
    			
    			$qrry_1.=")";
    		
    			 mysqli_query($conn,$qrry_1)or die(mysqli_error($conn));
    			 $last_insertid = mysqli_insert_id($conn);
			
    		}

			if($event_json['report_reason_type']=="Profile")		   
		    {
		    $report_reason_user_id=htmlspecialchars(strip_tags($event_json['report_reason_user_id'] , ENT_QUOTES));
		     
		     $qrry_1="insert into report_reason (`report_reason_type`, `report_reason_description`, `report_reason_user_id`, `report_reason_to_user_id`)values(";
    			$qrry_1.="'".$report_reason_type."',";
    			$qrry_1.="'".$report_reason_description."',";
    			$qrry_1.="'".$report_reason_user_id."',";
    			$qrry_1.="'".$report_reason_to_user_id."'";
    			$qrry_1.=")";
    			 mysqli_query($conn,$qrry_1)or die(mysqli_error($conn));
    			 $last_insertid = mysqli_insert_id($conn);
			
    		}
    		 //echo  $qrry_1;	 
    		
    		if($last_insertid)
    		{
			
			if(isset($event_json['report_reason_attachment'])){
				$attechment=json_decode($event_json['report_reason_attachment'],true);
			 print_r($attechment);
		  	if(!empty($attechment)){
			    foreach ($attechment as $value) {
					# code...
				 $thum=$value['screenshot_file'];
				 $fileName    = time()."_".rand();
	     		 $attach_url   = "upload/report_reason/".$fileName.".jpg";
				 $thum = base64_decode($thum);
			     file_put_contents($attach_url, $thum);
				 $insertatt="INSERT INTO `report_reason_attechment` ( `rra_report_reason_id`, `rra_attechment`) VALUES ('".$last_insertid."', '".$attach_url."')";
    			  mysqli_query($conn,$insertatt) or die(mysqli_error($conn));
					
				}//for loop
			}	
    		}//attechment code close here
    	
			$sqli="SELECT * FROM `report_reason` WHERE  report_reason_id='".$last_insertid."'";
			$result=mysqli_query($conn,$sqli) or die(mysqli_error($conn));
			  $row=mysqli_fetch_assoc($result);  
			  $msg_out="Report Reason Submit";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data"=> $row);
			  print_r(json_encode($output, true));
			}else{
				$msg_out="111Report Reason Not submit plz try again";
			    $output=array( "code" => "500", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true));
			}
  
	}

