<?php
 $url = 'http://18.188.65.45/admin/gift_img/';	
	
	if(isset($_GET["p"]))
	{
		if($_GET["p"]=="uploadVideo")
		{
			uploadvideo();
		}
		if($_GET["p"]=="signup_usig_truecaller")
		{
			signup_usig_truecaller();
		}
		if($_GET["p"]=="UpdateMyLatLon")
		{ 
		  // echo 'ok';die;
			UpdateMyLatLon();
		}
		
		elseif($_GET["p"]=="gifupload")
		{
			gifupload();
		}
				
		elseif($_GET["p"]=="DeleteSocailLink")
		{
			DeleteSocailLink();
		}
		elseif($_GET["p"]=="WithdrawlRequestHistory")
		{
			WithdrawlRequestHistory();
		}
		
		elseif($_GET["p"]=="VideoCommentHistory")
		{
			VideoCommentHistory();
		}
		
		
			elseif($_GET["p"]=="WithdrawlRequest")
		{
			WithdrawlRequest();
		}
		elseif($_GET["p"]=="getstory")
		{
			getstory();
		}
		elseif($_GET["p"]=="uploadVideonew")
		{
			uploadVideonew();
		}
		elseif($_GET["p"]=="userprofile")
		{
			userprofile();
		}
		
		elseif($_GET["p"]=="search_user")
		{
			search_user();
		}
		elseif($_GET["p"]=="get_hash")
		{
			get_hash();
		}
		
		else
		if($_GET["p"]=="level_to")
		{
			level_to();
		}
		
		else
		if($_GET["p"]=="leader_board")
		{
			leader_board();
		}
				else
		if($_GET["p"]=="actual_leadaer_board")
		{
			actual_leadaer_board();
		}
		
		else
		if($_GET["p"]=="selected_user_info")
		{
			selected_user_info();
		}
		
		else
		if($_GET["p"]=="selected_video")
		{
			selected_video();
		}
	   else
		if($_GET["p"]=="selected_videochane")
		{
			selected_videochane();
		}
	   else
		if($_GET["p"]=="all_gifts_list")
		{
			all_gifts_list();
		}
	  
		if($_GET["p"]=="update_my_diamond")
		{
			update_my_diamond();
		}
		else
		if($_GET["p"]=="user_gift_history")
		{
			user_gift_history();
		}
		else
		if($_GET["p"]=="reedeem_request")
		{
			reedeem_request();
		}
		else
		if($_GET["p"]=="my_wallet")
		{
			my_wallet();
		}
		
		else
		if($_GET["p"]=="comment_with_return")
		{
			comment_with_return();
		}
		else
		if($_GET["p"]=="login_usig_mobile")
		{
			login_usig_mobile();
		}
		else
		if($_GET["p"]=="signup_usig_mobile")
		{
			signup_usig_mobile();
		}
		else
		if($_GET["p"]=="now_register")
		{
			now_register();
		}
		
		else
		if($_GET["p"]=="signup")
		{
			signup();
		}
				else
		if($_GET["p"]=="diamond_to_buy")
		{
			diamond_to_buy();
		}
		else
		if($_GET["p"]=="showAllVideos")
		{
			showAllVideos();
		}
		
		
		else
		if($_GET["p"]=="showAllVideos2")
		{
			showAllVideos2();
		}
		
		
		
		else
		if($_GET["p"]=="showAllVideos_of_followers")
		{
			showAllVideos_of_followers();
		}
		else
		if($_GET["p"]=="showAllVideos_nearby")
		{
			showAllVideos_nearby();
		}
		else
		if($_GET["p"]=="make_following")
		{
			make_following();
		}
		else
		if($_GET["p"]=="make_following1")
		{
			make_following1();
		}
		else
		if($_GET["p"]=="chack_following")
		{
			chack_following();
		}
		else
		if($_GET["p"]=="showMyAllVideos")
		{
			showMyAllVideos();
		}
		else
		if($_GET["p"]=="showMyAllVideos_as_hastag")
		{
			showMyAllVideos_as_hastag();
		}
				else
		if($_GET["p"]=="AutoBac")
		{
			AutoBac();
		}
		
		
		else
		if($_GET["p"]=="likeDislikeVideo")
		{
			likeDislikeVideo();
		}
		else
		if($_GET["p"]=="postComment")
		{
			postComment();
		}
		else
		if($_GET["p"]=="showVideoComments")
		{
			showVideoComments();
		}
		else
		if($_GET["p"]=="updateVideoView")
		{
			updateVideoView();
		}
		else
		if($_GET["p"]=="allSounds")
		{
			allSounds();
		}
		else
		if($_GET["p"]=="fav_sound")
		{
			fav_sound();
		}
		else
		if($_GET["p"]=="my_FavSound")
		{
			my_FavSound();
		}
		else
		if($_GET["p"]=="my_liked_video")
		{
			my_liked_video();
		}
		else
		if($_GET["p"]=="discover")
		{
			discover();
		}
		else
		if($_GET["p"]=="edit_profile")
		{
			edit_profile();
		}
		else
		if($_GET["p"]=="follow_users")
		{
			follow_users();
		}
		else
		if($_GET["p"]=="get_user_data")
		{
			get_user_data();
		}
		else
		if($_GET["p"]=="get_followers")
		{
			get_followers();
		}
		else
		if($_GET["p"]=="get_followings")
		{
			get_followings();
		}
		
		else
		if($_GET["p"]=="video_with_thumnail")
		{
			video_with_thumnail();
		}
		
		else
		if($_GET["p"]=="SearchByHashTag")
		{
			SearchByHashTag();
		}
			else
		if($_GET["p"]=="getstory_for_other_user")
		{
			getstory_for_other_user();
		}
		

    		
		
		
		
		
		//admin panel functions
		else
		if($_GET["p"]=="Admin_Login")
		{
			Admin_Login();
		}
		else
		if($_GET["p"]=="All_Users")
		{
			All_Users();
		}
		else
		if($_GET["p"]=="admin_all_sounds")
		{
			admin_all_sounds();
		}
		else
		if($_GET["p"]=="admin_uploadSound")
		{
			admin_uploadSound();
		}
		else
		if($_GET["p"]=="admin_getSoundSection")
		{
			admin_getSoundSection();
		}
		else
		if($_GET["p"]=="admin_show_allVideos")
		{
			admin_show_allVideos();
		}
		
			else
		if($_GET["p"]=="mystorie_LikeList")
		{
			mystorie_LikeList();
		}
		
		
		else if($_GET["p"]=="link_social_account")
		{
			link_social_account();
		}
		
		else if($_GET["p"]=="screen_tag")
		{
			screen_tag();
		}else if($_GET["p"]=="app_banner")
		{
			app_banner();
		}
		else if($_GET["p"]=="get_report_reason_tag")
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

	if(!isset($event_json['report_reason_type']) || $event_json['report_reason_type']=="") 
			{
				$msg_out="Validation Error Report Reason type Missing11";
			    $output=array( "code" => "500", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				exit();
				}
		$i=1;
		if($i==1)
			{
				$msg_out="2ed";
			    $output=array( "code" => "500", "msg" => $msg_out ,  "data"=> "");
					print_r(json_encode($output, true));
				exit();
			}
			echo "age nahi bada";
		//print_r($event_json);
	if(isset($event_json['report_reason_description']) && $event_json['report_reason_description']=="" &&
isset($event_json['report_reason_user_id']) && $event_json['report_reason_user_id']=="" 
 	){
	echo "ck";
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Validation error ");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
			//return //exit();
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
			$sqli="SELECT * FROM `report_reason` WHERE  report_reason_id='".$last_insertid."'";
			$result=mysqli_query($conn,$sqli) or die(mysqli_error($conn));
			  $row=mysqli_fetch_assoc($result);  
			  $msg_out="Report Reason Submit";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data"=> $row);
			  print_r(json_encode($output, true));
			 }else{
				$msg_out="Report Reason Not submit plz try again";
			    $output=array( "code" => "500", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true));
			}
  
	}

	function get_report_reason_tag(){

		 require_once("config.php");
        $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
		
		if(isset($event_json['report_reason_tag_type']) && $event_json['report_reason_tag_type']!="" )
		{
			$rtype=htmlspecialchars(strip_tags($event_json['report_reason_tag_type'] , ENT_QUOTES));
		   	$sqli="SELECT * FROM `report_reason_tag` WHERE  report_reason_tag_type='".$rtype."' and report_reason_tag_status='Active'";
			$result=mysqli_query($conn,$sqli) or die(mysqli_error($conn));
			if(mysqli_num_rows($result))
			{   
			     $data=mysqli_fetch_all($result, MYSQLI_ASSOC); 
				//$imagepath="http://18.188.65.45/images/logo.png";
			    $msg_out="report_reason_tag Option";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data"=> $data);
			     
			}else{
				$msg_out="report_reason_tag Option Not set";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));

		}else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing report_reason_tag_type ");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}		
	}	

	function app_banner(){

		 require_once("config.php");
       	$sqli="SELECT * FROM `slider_image` WHERE slider_image_status='Active'";
			$result=mysqli_query($conn,$sqli) or die(mysqli_error($conn));
			if(mysqli_num_rows($result))
			{   
			     $data=mysqli_fetch_all($result, MYSQLI_ASSOC); 
				//$imagepath="http://18.188.65.45/images/logo.png";
			    $msg_out="Banner images";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data"=> $data);
			     
			}else{
				$msg_out="Banner Image not set";
			    $output=array( "code" => "500", "msg" => $msg_out ,    "data"=> "");
			}	
			print_r(json_encode($output, true));
	}
	function screen_tag(){

		 require_once("config.php");
       	$sqli="select * from `screen_banner` WHERE screen_banner_id='1'";
			$data=mysqli_query($conn,$sqli) or die(mysqli_error($conn));
			if(mysqli_num_rows($data))
			{   
			$row=mysqli_fetch_assoc($data); 
			$imagepath="";	
			if($row['screen_banner_status']==1){	
				$imagepath= $row['screen_banner_image'];
			}
				//$imagepath="http://18.188.65.45/images/logo.png";
			    $msg_out="Image set";	
				$output=array( "code" => "200", "msg" => $msg_out ,"screen_image"=> $imagepath);
			     
			}else{
				$msg_out="Image not set";
			    $output=array( "code" => "500", "msg" => $msg_out ,    "screen_image"=> "");
			}	
			print_r(json_encode($output, true));
	}

	function sendPushNotificationToMobileDevice($data)
	{
        require_once("config.php");
        $key="AAAAY30-QME:APA91bHAvrPmV5aeBV7XjIwg9GsTdZqziEvULMHKrmTl5MxN_NKumfsydc5JS1CV7bDvqh5dtVjFbAl0MZ23A2DcFeJfDj9rlDAn2JhdKyGPHGukLEs3Vc4rF9z6-IBNffNr32OzvToT";
      
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array(
                "authorization: key=".$key."",
                "cache-control: no-cache",
                "content-type: application/json",
                "postman-token: 85f96364-bf24-d01e-3805-bccf838ef837"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) 
        {
           // print_r($err);
        } 
        else 
        {
            //print_r($response);
        }

    }
	
	
		function sendPushNotification($fields)
	{
      
        define( 'API_ACCESS_KEY', 'AAAAY30-QME:APA91bHAvrPmV5aeBV7XjIwg9GsTdZqziEvULMHKrmTl5MxN_NKumfsydc5JS1CV7bDvqh5dtVjFbAl0MZ23A2DcFeJfDj9rlDAn2JhdKyGPHGukLEs3Vc4rF9z6-IBNffNr32OzvToT');
      
      	$headers = array
			(
				'Authorization: key=' . API_ACCESS_KEY,
				'Content-Type: application/json'
			);
      
       	$ch = curl_init();
		curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
		curl_setopt( $ch,CURLOPT_POST, true );
		curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
		curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
		$result = curl_exec($ch );
	//	echo $result;
		curl_close( $ch );

    }
	
    			
    			
	function signup()
	{   
	    //echo "ok";die;
		require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
		
		if(isset($event_json['fb_id']) && isset($event_json['first_name']) && isset($event_json['last_name']))
		{
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			$first_name=htmlspecialchars(strip_tags($event_json['first_name'] , ENT_QUOTES));
			$last_name=htmlspecialchars(strip_tags($event_json['last_name'] , ENT_QUOTES));
			$gender=htmlspecialchars(strip_tags($event_json['gender'] , ENT_QUOTES));
			$profile_pic=htmlspecialchars_decode(stripslashes($event_json['profile_pic']));
			$version=htmlspecialchars_decode(stripslashes($event_json['version']));
			$device=htmlspecialchars_decode(stripslashes($event_json['device']));
			$signup_type=htmlspecialchars_decode(stripslashes($event_json['signup_type']));
		    $username=$first_name.rand();
		    
			$log_in="select * from users where fb_id='".$fb_id."' ";
			$log_in_rs=mysqli_query($conn,$log_in);
			
			if(mysqli_num_rows($log_in_rs))
			{   
			    $rd=mysqli_fetch_object($log_in_rs);  
			     
				$array_out = array();
				 $array_out[] = 
					//array("code" => "200");
					array(
						"fb_id"         => $rd->fb_id,
						"action"        => "login",
						"profile_pic"   => $rd->profile_pic,
						"first_name"    => $rd->first_name,
						"last_name"     => $rd->last_name,
						"username"      => $rd->username,
						"bio"           => $rd->bio,
						"email"         => $rd->email,
						"mobile"        => $rd->mobile,
						"city"          => $rd->city,
						"state"         => $rd->state,
						"vip_status"    => $rd->vip_status,
						"duration"      => $rd->duration,
						"expire_at"     => $rd->expire_at,
						"total_diamondd"=> $rd->total_diamondd,
						"team_name"=> $rd->team_name,
						"cover_pic"=> $rd->cover_pic,
						"social_link"=> $rd->social_link,
						"official"=> $rd->official
						
						
					);
				
				$output=array( "code" => "200", "msg" => $array_out);
				print_r(json_encode($output, true));
			}	
			else
			{
			    
			    $qrry_1="insert into users(fb_id,username,first_name,last_name,profile_pic,version,device,signup_type,gender)values(";
    			$qrry_1.="'".$fb_id."',";
    			$qrry_1.="'".$username."',";
    			$qrry_1.="'".$first_name."',";
    			$qrry_1.="'".$last_name."',";
    			$qrry_1.="'".$profile_pic."',";
    			$qrry_1.="'".$version."',";
    			$qrry_1.="'".$device."',";
    			$qrry_1.="'".$signup_type."',";
    			$qrry_1.="'".$gender."'";
    			$qrry_1.=")";
    			if(mysqli_query($conn,$qrry_1))
    			{
				     $last_insert_fb_id = mysqli_insert_id($conn);
				     
				     $array_out = array();
    				 $array_out[] = 
    					//array("code" => "200");
    					array(
    						"fb_id" => $fb_id,
    						"username" => $username,
    						"action" => "signup",
    						"profile_pic" => $profile_pic,
    						"username" => $username,
    						"first_name" => $first_name,
    						"last_name" => $last_name,
    						"signup_type" => $signup_type,
    						"gender" => $gender,
    						"my_team" =>'F-World'
    					);
    				
    				$output=array( "code" => "200", "msg" => $array_out);
    				print_r(json_encode($output, true));
    			}
    			else
    			{
    			    //echo mysqli_error();
    			    $array_out = array();
    					
            		 $array_out[] = 
            			array(
            			"response" =>"problem in signup");
            		
            		$output=array( "code" => "201", "msg" => $array_out);
            		print_r(json_encode($output, true));
    			}
			}
			
			
			
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
	function gifupload()
	{
	            //giffimage
				require_once("config.php");
        		$input = file_get_contents("php://input");
        	    $event_json = json_decode($input,true);
        	   
        	    //print_r($event_json);
        	    $gif1 = $event_json['giffimage']['file_data'];
        	    
        	    
        	    $event_json['giffimage'];
        	    //print_r($event_json['fb_id']);
        	    
        	    $gif = base64_decode($gif1);
			    
			      $fileName="hamza".rand();
		    	file_put_contents("upload/gif/".$fileName.".gif", $gif);
			    
			


	}
	
	function uploadVideonew()
	{
	    require_once("config.php");
		$input      = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		if(isset($event_json['fb_id']) && isset($event_json['picbase64'])  && isset($event_json['videobase64']))
		{   
		    $fb_id       = htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
		    $description = htmlspecialchars(strip_tags($event_json['description'] , ENT_QUOTES));
		    $sound_id    = htmlspecialchars(strip_tags($event_json['sound_id'] , ENT_QUOTES));
		    $thum        = $event_json['picbase64']['file_data'];
		    $video       = $event_json['videobase64']['file_data'];
		    $gif         = $event_json['gifbase64']['file_data'];

		    $lat         = htmlspecialchars(strip_tags($event_json['lat'] , ENT_QUOTES));
		    $lon         = htmlspecialchars(strip_tags($event_json['lon'] , ENT_QUOTES));
            
            $fileName    = rand()."_".rand();
			$video_url   = "upload/video/".$fileName.".mp4";
			$thum_url    = "upload/thum/".$fileName.".jpg";
			$gif_url     = "upload/gif/".$fileName.".gif";
			
			/*list($type, $data) = explode(',', $data);
			list(, $data)      = explode(',', $data);*/
			$thum = base64_decode($thum);
			file_put_contents("upload/thum/".$fileName.".jpg", $thum);
			/*picture resize*/
				// File and new size
				$filename    = 'upload/thum/'.$fileName.'.jpg';
				$newfilename ='upload/thum/'.$fileName.'.jpg';
				$percent     = 0.4;
				
				// Get new sizes
				list($width, $height) = getimagesize($filename);
				$newwidth   = $width * $percent;
				$newheight  = $height * $percent;
				// Load
				$thumb      = imagecreatetruecolor($newwidth, $newheight);
				$source     = imagecreatefromjpeg($filename);
				// Resize
				$res        = imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
				// Output
				imagejpeg($thumb,$newfilename);
			/*picture resize*/
			
			
			$video          = base64_decode($video);
			
			file_put_contents("upload/video/".$fileName.".mp4", $video);
			
			/*video upload*/
				// File and new size
				$filename    = 'upload/video/'.$fileName.'.mp4';
				$newfilename ='upload/video/'.$fileName.'.mp4';
				$percent     = 0.2;
				// Get new sizes
				list($width, $height) = getimagesize($filename);
				$newwidth    = $width * $percent;
				$newheight   = $height * $percent;
				// Load
				$thumb       = imagecreatetruecolor($newwidth, $newheight);
				$source      = imagecreatefromjpeg($filename);
				// Resize
				$res         = imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
				// Output
				imagejpeg($thumb,$newfilename);
				
			/*video upload*/
			
			
			$gif      = base64_decode($gif);
			$filename = 'upload/gif/'.$fileName.'.mp4';
			file_put_contents("upload/gif/".$fileName.".gif", $gif);
			
			$qrry_1="insert into videos(description,video,sound_id,fb_id,gif,thum,lat,lon)values(";
			$qrry_1.="'".$description."',";
			$qrry_1.="'".$video_url."',";
			$qrry_1.="'".$sound_id."',";
			$qrry_1.="'".$fb_id."',";
			$qrry_1.="'".$gif_url."',";
			$qrry_1.="'".$thum_url."'";
			$qrry_1.="'".$lat."'";
			$qrry_1.="'".$lon."'";
			$qrry_1.=")";
			
			/*
			$qrry_1="insert into videos(description,video,sound_id,fb_id,gif,thum)values(";
			$qrry_1.="'".$description."',";
			$qrry_1.="'".$video_url."',";
			$qrry_1.="'".$sound_id."',";
			$qrry_1.="'".$fb_id."',";
			$qrry_1.="'".$gif_url."',";
			$qrry_1.="'".$thum_url."'";
			$qrry_1.=")";
			*/
			$expo=10;
			  $query1     = mysqli_query($conn,"UPDATE users SET total_expo = total_expo + '$expo' WHERE fb_id = '$fb_id' ");
			
			
			if(mysqli_query($conn,$qrry_1))
			{
			   $array_out = array();
    			$array_out[] = 
    				array(
    					"response" => "file uploaded"
    				);
    			
    			$output=array( "code" => "200", "msg" => $array_out);
    			print_r(json_encode($output, true)); 
			}
			else
			{
			    $array_out = array();
    			$array_out[] = 
    				array(
    					"response" => "error in uploading files"
    				);
    			
    			$output=array( "code" => "201", "msg" => $array_out);
    			print_r(json_encode($output, true)); 
			}
			
			
			
			
		}
		else
		{
			$array_out = array();
			$array_out[] = 
				array(
					"response" => "json parem missing"
				);
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	
	}
	
	
	
	
	
	
	
	
	
function uploadVideo()
	{
	    require_once("config.php");
		$input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
		
		if(isset($event_json['fb_id']) && isset($event_json['picbase64'])  && isset($event_json['videobase64']))
		{   
		    $fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
		    $description=htmlspecialchars(strip_tags($event_json['description'] , ENT_QUOTES));
		    $sound_id=htmlspecialchars(strip_tags($event_json['sound_id'] , ENT_QUOTES));
		    $thum = $event_json['picbase64']['file_data'];
		    $video = $event_json['videobase64']['file_data'];
		    $gif = $event_json['gifbase64']['file_data'];
		    
		    $lat         = $event_json['lat'];
		    $lon         = $event_json['lon'];
		    
		    //$lat = htmlspecialchars(strip_tags($event_json['lat'] , ENT_QUOTES));
		    //$lon = htmlspecialchars(strip_tags($event_json['lon'] , ENT_QUOTES));
            
            $fileName=rand()."_".rand();
			$video_url="upload/video/".$fileName.".mp4";
			$thum_url="upload/thum/".$fileName.".jpg";
			$gif_url="upload/gif/".$fileName.".gif";
			
			/*list($type, $data) = explode(',', $data);
			list(, $data)      = explode(',', $data);*/
			$thum = base64_decode($thum);
			
			file_put_contents("upload/thum/".$fileName.".jpg", $thum);
			
			/*picture resize*/
				// File and new size
				$filename = 'upload/thum/'.$fileName.'.jpg';
				$newfilename='upload/thum/'.$fileName.'.jpg';
				$percent = 0.4;
				
				// Get new sizes
				list($width, $height) = getimagesize($filename);
				$newwidth = $width * $percent;
				$newheight = $height * $percent;
				// Load
				$thumb = imagecreatetruecolor($newwidth, $newheight);
				$source = imagecreatefromjpeg($filename);
				// Resize
				$res=imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
				// Output
				imagejpeg($thumb,$newfilename);
			/*picture resize*/
			
			
			$video = base64_decode($video);
			
			file_put_contents("upload/video/".$fileName.".mp4", $video);
			
			/*video upload*/
				// File and new size
				$filename = 'upload/video/'.$fileName.'.mp4';
				$newfilename='upload/video/'.$fileName.'.mp4';
				$percent = 0.2;
				// Get new sizes
				list($width, $height) = getimagesize($filename);
				$newwidth = $width * $percent;
				$newheight = $height * $percent;
				// Load
				$thumb = imagecreatetruecolor($newwidth, $newheight);
				$source = imagecreatefromjpeg($filename);
				// Resize
				$res=imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
				// Output
				imagejpeg($thumb,$newfilename);
				
			/*video upload*/
			
			
			$gif = base64_decode($gif);
			$filename = 'upload/gif/'.$fileName.'.mp4';
			file_put_contents("upload/gif/".$fileName.".gif", $gif);
			//$lat =1;
			//$lon =2;
			
    			$qrry_1="insert into videos(description,video,sound_id,fb_id,gif,thum,lat,lon)values(";
    			$qrry_1.="'".$description."',";
    			$qrry_1.="'".$video_url."',";
    			$qrry_1.="'".$sound_id."',";
    			$qrry_1.="'".$fb_id."',";
    			$qrry_1.="'".$gif_url."',";
    			$qrry_1.="'".$thum_url."',";
    			$qrry_1.="'".$lat."',";
    			$qrry_1.="'".$lon."'"; 
    			$qrry_1.=")";
    			
    	//	$output=array( "code" => "900", "msg" => 'checkthis','responce'=>$qrry_1);
    		//	print_r(json_encode($output, true));
			
			/*
			$qrry_1="insert into videos(description,video,sound_id,fb_id,gif,thum)values(";
			$qrry_1.="'".$description."',";
			$qrry_1.="'".$video_url."',";
			$qrry_1.="'".$sound_id."',";
			$qrry_1.="'".$fb_id."',";
			$qrry_1.="'".$gif_url."',";
			$qrry_1.="'".$thum_url."'";
			$qrry_1.=")";
			*/
			
			$expo=10;
			  $query1     = mysqli_query($conn,"UPDATE users SET total_expo = total_expo + '$expo' WHERE fb_id = '$fb_id' ");
			
			if(mysqli_query($conn,$qrry_1))
			{
			   $array_out = array();
    			$array_out[] = 
    				array(
    					"response" => "file uploaded"
    				);
    			
    			$output=array( "code" => "200", "msg" => $array_out);
    			print_r(json_encode($output, true)); 
			}
			else
			{
			    $array_out = array();
    			$array_out[] = 
    				array(
    					"response" => "error in uploading files"
    				);
    			
    			$output=array( "code" => "201", "msg" => $array_out);
    			print_r(json_encode($output, true)); 
			}
			
			
			
			
		}
		else
		{
			$array_out = array();
			$array_out[] = 
				array(
					"response" => "json parem missing"
				);
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	
	}




	function video_with_thumnail()
	{
	    require_once("config.php");
	    $input      = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		
		
		//print_r($event_json);
	//	echo "Ik";	print_r($event_json);die;
	
	
		if(isset($event_json['fb_id']))
		{
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			$token=$event_json['token'];
			@mysqli_query($conn,"update users set tokon='".$token."' where fb_id='".$fb_id."' ");
			
			//$latitude  =  htmlspecialchars(strip_tags($event_json['lat'] , ENT_QUOTES));
			//$longitude =  htmlspecialchars(strip_tags($event_json['lon'] , ENT_QUOTES));
			/*
		     if(empty($latitude) && empty($longitude))
		     {
			  $query=mysqli_query($conn,"select * from videos order by rand() ");
		     }else
		     {
              $query = mysqli_query($conn,"select
                          (((acos(sin(('$latitude'*pi()/180)) * sin((`lat`*pi()/180))+cos(('$latitude'*pi()/180)) 
                          * cos((`lat`*pi()/180)) * cos((('$longitude'- `lon`)*pi()/180))))*180/pi())*60*1.1515) 
                          AS  distance From videos having distance < 50  order by rand() "); 
		     } 
		     */
		     $uuu = 'http://ourhippy.com/API/';
		     $query=mysqli_query($conn,"select videos.*,concat('$uuu',thum) as thumbnail from videos order by rand() ");
    		$array_out = array();
    		while($row=mysqli_fetch_array($query))
    		{
    		    
    		    $query1=mysqli_query($conn,"select * from users where fb_id='".$row['fb_id']."' ");
		        $rd=mysqli_fetch_object($query1);
		       
		        $query112=mysqli_query($conn,"select * from sound where id='".$row['sound_id']."' ");
		        $rd12=mysqli_fetch_object($query112);
		        
		        $countLikes = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' ");
                $countLikes_count=mysqli_fetch_assoc($countLikes);
		        
		        $countcomment = mysqli_query($conn,"SELECT count(*) as count from video_comment where video_id='".$row['id']."' ");
                $countcomment_count=mysqli_fetch_assoc($countcomment);
                
                
                $liked = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' and fb_id='".$fb_id."' ");
                $liked_count=mysqli_fetch_assoc($liked);
		        
        	   	$array_out[] = 
        			array(
        			"id" => $row['id'],
        			"fb_id" => $row['fb_id'],
        			"user_info" =>array
            					(
            					    "first_name" => $rd->first_name,
                        			"last_name" => $rd->last_name,
                        			"profile_pic" => $rd->profile_pic
            					),
            		"count" =>array
            					(
            					    "like_count" => $countLikes_count['count'],
                        			"video_comment_count" => $countcomment_count['count']
            					),
            		"liked"=> $liked_count['count'],			
            	    "video"=> $row['video'],
        			"thum" => $row['thum'],
        			"gif"  => $row['gif'],
        			"description" => $row['description'],
        			"sound" =>array
            					(
            					    "id" => $rd12->id,
            					    "audio_path" => 
                            			array(
                                			"mp3" => $API_path."/upload/audio/".$rd12->id.".mp3",
                    			            "acc" => $API_path."/upload/audio/".$rd12->id.".aac"
                                		),
                        			"sound_name" => $rd12->sound_name,
                        			"description" => $rd12->description,
                        			"thum" => $rd12->thum,
                        			"section" => $rd12->section,
                        			"created" => $rd12->created,
            					),
        			"created" => $row['created']
        		);
    			
    		}
    		$output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
    		
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	



function showAllVideos_nearby()
	{  
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);

		if(isset($event_json['fb_id']))
		{
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			$token=$event_json['token'];
			@mysqli_query($conn,"update users set tokon='".$token."' where fb_id='".$fb_id."' ");
			$latitude  =  htmlspecialchars(strip_tags($event_json['lat'] , ENT_QUOTES));
		 	$longitude =  htmlspecialchars(strip_tags($event_json['lon'] , ENT_QUOTES));
		    //echo $longitude;echo "<Pre>";
		     if($latitude == '0' || $longitude == '0' ) 
		     {
		      $sql   = "select * from videos where private_v = 1 ";    
			  $query = mysqli_query($conn,$sql);
			  
		     }else
		     {
		       
		      $sql   = "select (((acos(sin(('$latitude'*pi()/180)) * sin((u.lat*pi()/180))+cos(('$latitude'*pi()/180)) 
                          * cos((u.lat*pi()/180)) * cos((('$longitude'- u.lon)*pi()/180))))*180/pi())*60*1.1515) 
                          AS  distance,v.*,u.first_name,u.last_name,u.tokon as token,u.official,u.profile_pic From videos v 
                          INNER JOIN users u ON v.fb_id=u.fb_id where  u.private='0'  HAVING distance < 400 order by rand()";   
              $query = mysqli_query($conn,$sql); 
		     } 

            $array_out = array();
    		while($row=mysqli_fetch_array($query))
    		{
    		    
    		  
		       
		        $query112=mysqli_query($conn,"select * from sound where id='".$row['sound_id']."' ");
		        $rd12=mysqli_fetch_object($query112);
		        
		        $countLikes = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' ");
                $countLikes_count=mysqli_fetch_assoc($countLikes);
		        
		        $countcomment = mysqli_query($conn,"SELECT count(*) as count from video_comment where video_id='".$row['id']."' ");
                $countcomment_count=mysqli_fetch_assoc($countcomment);
                
                
                $liked = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' and fb_id='".$fb_id."' ");
                $liked_count=mysqli_fetch_assoc($liked);
		        
        	   	$array_out[] = 
        			array(
        			"id" => $row['id'],
        			"fb_id" => $row['fb_id'],
        			"user_info" =>array
            					(
            					    "first_name" => $row['first_name'],
                        			"last_name" => $row['last_name'],
                        			"profile_pic" => $row['profile_pic'],
                        			"official" => $row['official'],
                        			"token" => $row['tokon']
            					),
            		"count" =>array
            					(
            					    "like_count" => $countLikes_count['count'],
                        			"video_comment_count" => $countcomment_count['count']
            					),
            		"liked"=> $liked_count['count'],			
            	    "video" => $row['video'],
        			"thum" => $row['thum'],
        			"gif" => $row['gif'],
        			"description" => $row['description'],
        			"sound" =>array
            					(
            					    "id" => $rd12->id,
            					    "audio_path" => 
                            			array(
                                			"mp3" => $API_path."/upload/audio/".$rd12->id.".mp3",
                    			            "acc" => $API_path."/upload/audio/".$rd12->id.".aac"
                                		),
                        			"sound_name" => $rd12->sound_name,
                        			"description" => $rd12->description,
                        			"thum" => $rd12->thum,
                        			"section" => $rd12->section,
                        			"created" => $rd12->created,
            					),
        			"created" => $row['created']
        		);
    			
    		}
    		$output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
    		
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing for Nearby videos");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}




function showAllVideos_nearby_backup()
	{  
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);

		if(isset($event_json['fb_id']))
		{
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			$token=$event_json['token'];
			@mysqli_query($conn,"update users set tokon='".$token."' where fb_id='".$fb_id."' ");
			$latitude  =  htmlspecialchars(strip_tags($event_json['lat'] , ENT_QUOTES));
		 	$longitude =  htmlspecialchars(strip_tags($event_json['lon'] , ENT_QUOTES));
		    //echo $longitude;echo "<Pre>";
		     if($latitude == '0' || $longitude == '0' ) 
		     {
		      $sql   = "select * from videos where private_v = 1 ";    
			  $query = mysqli_query($conn,$sql);
			  
		     }else
		     {
		       
		      $sql   = "select (((acos(sin(($latitude*pi()/180)) * sin((`lat`*pi()/180))+cos(($latitude*pi()/180)) 
                          * cos((`lat`*pi()/180)) * cos((($longitude- `lon`)*pi()/180))))*180/pi())*60*1.1515) 
                          AS  distance,videos.* From videos    having distance < 400 AND private_v = 1  order by distance ASC  limit 2500 ";   
              $query = mysqli_query($conn,$sql); 
		     } 

            $array_out = array();
    		while($row=mysqli_fetch_array($query))
    		{
    		    
    		    $query1=mysqli_query($conn,"select * from users where fb_id='".$row['fb_id']."' ");
		        $rd=mysqli_fetch_object($query1);
		       
		        $query112=mysqli_query($conn,"select * from sound where id='".$row['sound_id']."' ");
		        $rd12=mysqli_fetch_object($query112);
		        
		        $countLikes = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' ");
                $countLikes_count=mysqli_fetch_assoc($countLikes);
		        
		        $countcomment = mysqli_query($conn,"SELECT count(*) as count from video_comment where video_id='".$row['id']."' ");
                $countcomment_count=mysqli_fetch_assoc($countcomment);
                
                
                $liked = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' and fb_id='".$fb_id."' ");
                $liked_count=mysqli_fetch_assoc($liked);
		        
        	   	$array_out[] = 
        			array(
        			"id" => $row['id'],
        			"fb_id" => $row['fb_id'],
        			"user_info" =>array
            					(
            					    "first_name" => $rd->first_name,
                        			"last_name" => $rd->last_name,
                        			"profile_pic" => $rd->profile_pic
            					),
            		"count" =>array
            					(
            					    "like_count" => $countLikes_count['count'],
                        			"video_comment_count" => $countcomment_count['count']
            					),
            		"liked"=> $liked_count['count'],			
            	    "video" => $row['video'],
        			"thum" => $row['thum'],
        			"gif" => $row['gif'],
        			"description" => $row['description'],
        			"sound" =>array
            					(
            					    "id" => $rd12->id,
            					    "audio_path" => 
                            			array(
                                			"mp3" => $API_path."/upload/audio/".$rd12->id.".mp3",
                    			            "acc" => $API_path."/upload/audio/".$rd12->id.".aac"
                                		),
                        			"sound_name" => $rd12->sound_name,
                        			"description" => $rd12->description,
                        			"thum" => $rd12->thum,
                        			"section" => $rd12->section,
                        			"created" => $rd12->created,
            					),
        			"created" => $row['created']
        		);
    			
    		}
    		$output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
    		
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing for Nearby videos");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}













	function showAllVideos_of_followers()
	{  
	    
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    
	   // print_r();die;
	    $event_json = json_decode($input,true);

		
		if(isset($event_json['fb_id']))
		{
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			$token=$event_json['token'];
			
			@mysqli_query($conn,"update users set tokon='".$token."' where fb_id='".$fb_id."' ");
			
		
		     $query=mysqli_query($conn,"SELECT v.*,u.first_name,u.last_name,u.official,u.tokon as token 
		     FROM `follow_users` fu INNER JOIN videos v ON fu.followed_fb_id=v.fb_id INNER JOIN users u on fu.followed_fb_id=u.fb_id
		     where fu.fb_id='$fb_id' and u.private='0' ORDER BY rand()"); 
    		$array_out = array();
    		while($row=mysqli_fetch_array($query))
    		{
    		    
    		   
		       
		        $query112=mysqli_query($conn,"select * from sound where id='".$row['sound_id']."' ");
		        $rd12=mysqli_fetch_object($query112);
		        
		        $countLikes = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' ");
                $countLikes_count=mysqli_fetch_assoc($countLikes);
		        
		        $countcomment = mysqli_query($conn,"SELECT count(*) as count from video_comment where video_id='".$row['id']."' ");
                $countcomment_count=mysqli_fetch_assoc($countcomment);
                
                
                $liked = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' and fb_id='".$fb_id."' ");
                $liked_count=mysqli_fetch_assoc($liked);
		        
        	   	$array_out[] = 
        			array(
        			"id" => $row['id'],
        			"fb_id" => $row['fb_id'],
        			"user_info" =>array
            					(
            					    "first_name" => $row['first_name'],
                        			"last_name" => $row['last_name'],
                        			"profile_pic" => $row['profile_pic'],
                        			"official" => $row['official'],
                        			"token" => $row['tokon']
            					),
            		"count" =>array
            					(
            					    "like_count" => $countLikes_count['count'],
                        			"video_comment_count" => $countcomment_count['count']
            					),
            		"liked"=> $liked_count['count'],			
            	    "video" => $row['video'],
        			"thum" => $row['thum'],
        			"gif" => $row['gif'],
        			"description" => $row['description'],
        			"sound" =>array
            					(
            					    "id" => $rd12->id,
            					    "audio_path" => 
                            			array(
                                			"mp3" => $API_path."/upload/audio/".$rd12->id.".mp3",
                    			            "acc" => $API_path."/upload/audio/".$rd12->id.".aac"
                                		),
                        			"sound_name" => $rd12->sound_name,
                        			"description" => $rd12->description,
                        			"thum" => $rd12->thum,
                        			"section" => $rd12->section,
                        			"created" => $rd12->created,
            					),
        			"created" => $row['created']
        		);
    			
    		}
    		$output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
    		
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing for follwers videos");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
	
		function showAllVideos_of_followers_Backup()
	{  
	    
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    
	   // print_r();die;
	    $event_json = json_decode($input,true);

		
		if(isset($event_json['fb_id']))
		{
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			$token=$event_json['token'];
			
			@mysqli_query($conn,"update users set tokon='".$token."' where fb_id='".$fb_id."' ");
			
		
		     $query=mysqli_query($conn,"select * from videos v WHERE v.fb_id IN(select followed_fb_id from follow_users fu 
		                                  where fu.fb_id = '$fb_id') AND  v.private_v = 1 "); 
    		$array_out = array();
    		while($row=mysqli_fetch_array($query))
    		{
    		    
    		    $query1=mysqli_query($conn,"select * from users where fb_id='".$row['fb_id']."' ");
		        $rd=mysqli_fetch_object($query1);
		       
		        $query112=mysqli_query($conn,"select * from sound where id='".$row['sound_id']."' ");
		        $rd12=mysqli_fetch_object($query112);
		        
		        $countLikes = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' ");
                $countLikes_count=mysqli_fetch_assoc($countLikes);
		        
		        $countcomment = mysqli_query($conn,"SELECT count(*) as count from video_comment where video_id='".$row['id']."' ");
                $countcomment_count=mysqli_fetch_assoc($countcomment);
                
                
                $liked = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' and fb_id='".$fb_id."' ");
                $liked_count=mysqli_fetch_assoc($liked);
		        
        	   	$array_out[] = 
        			array(
        			"id" => $row['id'],
        			"fb_id" => $row['fb_id'],
        			"user_info" =>array
            					(
            					    "first_name" => $rd->first_name,
                        			"last_name" => $rd->last_name,
                        			"profile_pic" => $rd->profile_pic,
                        				"official" => $rd->official,
                        					"token" => $rd->token
            					),
            		"count" =>array
            					(
            					    "like_count" => $countLikes_count['count'],
                        			"video_comment_count" => $countcomment_count['count']
            					),
            		"liked"=> $liked_count['count'],			
            	    "video" => $row['video'],
        			"thum" => $row['thum'],
        			"gif" => $row['gif'],
        			"description" => $row['description'],
        			"sound" =>array
            					(
            					    "id" => $rd12->id,
            					    "audio_path" => 
                            			array(
                                			"mp3" => $API_path."/upload/audio/".$rd12->id.".mp3",
                    			            "acc" => $API_path."/upload/audio/".$rd12->id.".aac"
                                		),
                        			"sound_name" => $rd12->sound_name,
                        			"description" => $rd12->description,
                        			"thum" => $rd12->thum,
                        			"section" => $rd12->section,
                        			"created" => $rd12->created,
            					),
        			"created" => $row['created']
        		);
    			
    		}
    		$output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
    		
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing for follwers videos");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	












	function selected_videochane()
	{
	    require_once("config.php");
	    $input      = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		
		
		//print_r($event_json);
	//	echo "Ik";	print_r($event_json);die;
	
	
		if(isset($event_json['fb_id']))
		{
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			$token=$event_json['token'];
			@mysqli_query($conn,"update users set tokon='".$token."' where fb_id='".$fb_id."' ");
			
			//$latitude  =  htmlspecialchars(strip_tags($event_json['lat'] , ENT_QUOTES));
			//$longitude =  htmlspecialchars(strip_tags($event_json['lon'] , ENT_QUOTES));
			/*
		     if(empty($latitude) && empty($longitude))
		     {
			  $query=mysqli_query($conn,"select * from videos order by rand() ");
		     }else
		     {
              $query = mysqli_query($conn,"select
                          (((acos(sin(('$latitude'*pi()/180)) * sin((`lat`*pi()/180))+cos(('$latitude'*pi()/180)) 
                          * cos((`lat`*pi()/180)) * cos((('$longitude'- `lon`)*pi()/180))))*180/pi())*60*1.1515) 
                          AS  distance From videos having distance < 50  order by rand() "); 
		     } 
		     */
		      $video_id = $event_json['video_id'];
		     // echo "select * from videos order where id = '$video_id' ";die;
		     $query=mysqli_query($conn,"select * from videos  where id = '$video_id' ");
    		$array_out = array();
    		while($row=mysqli_fetch_array($query))
    		{
    		    
    		    $query1=mysqli_query($conn,"select * from users where fb_id='".$row['fb_id']."' ");
		        $rd=mysqli_fetch_object($query1);
		       
		        $query112=mysqli_query($conn,"select * from sound where id='".$row['sound_id']."' ");
		        $rd12=mysqli_fetch_object($query112);
		        
		        $countLikes = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' ");
                $countLikes_count=mysqli_fetch_assoc($countLikes);
		        
		        $countcomment = mysqli_query($conn,"SELECT count(*) as count from video_comment where video_id='".$row['id']."' ");
                $countcomment_count=mysqli_fetch_assoc($countcomment);
                
                
                $liked = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' and fb_id='".$fb_id."' ");
                $liked_count=mysqli_fetch_assoc($liked);
		        
        	   	$array_out[] = 
        			array(
        			"id" => $row['id'],
        			"fb_id" => $row['fb_id'],
        			"user_info" =>array
            					(
            					    "first_name" => $rd->first_name,
                        			"last_name" => $rd->last_name,
                        			"profile_pic" => $rd->profile_pic
            					),
            		"count" =>array
            					(
            					    "like_count" => $countLikes_count['count'],
                        			"video_comment_count" => $countcomment_count['count']
            					),
            		"liked"=> $liked_count['count'],			
            	    "video" => $row['video'],
        			"thum" => $row['thum'],
        			"gif" => $row['gif'],
        			"description" => $row['description'],
        			"sound" =>array
            					(
            					    "id" => $rd12->id,
            					    "audio_path" => 
                            			array(
                                			"mp3" => $API_path."/upload/audio/".$rd12->id.".mp3",
                    			            "acc" => $API_path."/upload/audio/".$rd12->id.".aac"
                                		),
                        			"sound_name" => $rd12->sound_name,
                        			"description" => $rd12->description,
                        			"thum" => $rd12->thum,
                        			"section" => $rd12->section,
                        			"created" => $rd12->created,
            					),
        			"created" => $row['created']
        		);
    			
    		}
    		$output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
    		
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}



	
	function showAllVideos()
	{
	    require_once("config.php");
	    $input      = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		
		if(isset($event_json['fb_id']))
		{
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			$token=$event_json['token'];
				$pagefrom=$event_json['pagefrom'];
					$page=$event_json['page'];
			@mysqli_query($conn,"update users set tokon='".$token."' where fb_id='".$fb_id."' ");
			
			
		     $query=mysqli_query($conn,"SELECT v.*,u.first_name,u.last_name,u.official,u.tokon as token,u.profile_pic,u.private
		     FROM `videos` v INNER JOIN users u ON v.fb_id=u.fb_id where u.private='0' order by rand() limit $pagefrom,$page ");
    		$array_out = array();
    		while($row=mysqli_fetch_array($query))
    		{
    		    
    		    
		       
		        $query112=mysqli_query($conn,"select * from sound where id='".$row['sound_id']."' ");
		        $rd12=mysqli_fetch_object($query112);
		        
		        $countLikes = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' ");
                $countLikes_count=mysqli_fetch_assoc($countLikes);
		        
		        $countcomment = mysqli_query($conn,"SELECT count(*) as count from video_comment where video_id='".$row['id']."' ");
                $countcomment_count=mysqli_fetch_assoc($countcomment);
                
                
                $liked = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' 
                                      and fb_id='".$fb_id."' AND action = 1 ");
                $liked_count=mysqli_fetch_assoc($liked);
                
            
		        
        	   	$array_out[] = 
        			array(
        			"id" => $row['id'],
        			"fb_id" => $row['fb_id'],
        			"user_info" =>array
            					(
            					    "first_name" => $row['first_name'],
                        			"last_name" => $row['last_name'],
                        			"profile_pic" => $row['profile_pic'],
                        			"official" => $row['official'],
                        			"token" => $row['tokon']
            					),
            		"count" =>array
            					(
            					    "like_count" => $countLikes_count['count'],
                        			"video_comment_count" => $countcomment_count['count']
            					),
            		"liked"=> $liked_count['count'],			
            	    "video" => $row['video'],
        			"thum" => $row['thum'],
        			"gif" => $row['gif'],
        			"description" => $row['description'],
        			"sound" =>array
            					(
            					    "id" => $rd12->id,
            					    "audio_path" => 
                            			array(
                                			"mp3" => $API_path."/upload/audio/".$rd12->id.".mp3",
                    			            "acc" => $API_path."/upload/audio/".$rd12->id.".aac"
                                		),
                        			"sound_name" => $rd12->sound_name,
                        			"description" => $rd12->description,
                        			"thum" => $rd12->thum,
                        			"section" => $rd12->section,
                        			"created" => $rd12->created,
            					),
        			"created" => $row['created']
        		);
    			
    		}
    		$output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
    		
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
	
	
	function showAllVideos2()
	{
	    require_once("config.php");
	  
	  

		if(isset($_POST['fb_id']))
		{
			$fb_id=htmlspecialchars(strip_tags($_POST['fb_id'] , ENT_QUOTES));
			$token=$_POST['token'];
			@mysqli_query($conn,"update users set tokon='".$token."' where fb_id='".$_POST['fb_id']."' ");
			
			
		     $query=mysqli_query($conn,"SELECT v.*,u.first_name,u.last_name,u.official,u.tokon as token,u.profile_pic,u.private
		     FROM `videos` v INNER JOIN users u ON v.fb_id=u.fb_id where u.private='0' order by rand()");
    		$array_out = array();
    		while($row=mysqli_fetch_array($query))
    		{
    		    
    		    
		       
		        $query112=mysqli_query($conn,"select * from sound where id='".$row['sound_id']."' ");
		        $rd12=mysqli_fetch_object($query112);
		        
		        $countLikes = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' ");
                $countLikes_count=mysqli_fetch_assoc($countLikes);
		        
		        $countcomment = mysqli_query($conn,"SELECT count(*) as count from video_comment where video_id='".$row['id']."' ");
                $countcomment_count=mysqli_fetch_assoc($countcomment);
                
                
                $liked = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' 
                                      and fb_id='".$fb_id."' AND action = 1 ");
                $liked_count=mysqli_fetch_assoc($liked);
                
            
		        
        	   	$array_out[] = 
        			array(
        			"id" => $row['id'],
        			"fb_id" => $row['fb_id'],
        			"user_info" =>array
            					(
            					    "first_name" => $row['first_name'],
                        			"last_name" => $row['last_name'],
                        			"profile_pic" => $row['profile_pic'],
                        			"official" => $row['official'],
                        			"token" => $row['tokon']
            					),
            		"count" =>array
            					(
            					    "like_count" => $countLikes_count['count'],
                        			"video_comment_count" => $countcomment_count['count']
            					),
            		"liked"=> $liked_count['count'],			
            	    "video" => $row['video'],
        			"thum" => $row['thum'],
        			"gif" => $row['gif'],
        			"description" => $row['description'],
        			"sound" =>array
            					(
            					    "id" => $rd12->id,
            					    "audio_path" => 
                            			array(
                                			"mp3" => $API_path."/upload/audio/".$rd12->id.".mp3",
                    			            "acc" => $API_path."/upload/audio/".$rd12->id.".aac"
                                		),
                        			"sound_name" => $rd12->sound_name,
                        			"description" => $rd12->description,
                        			"thum" => $rd12->thum,
                        			"section" => $rd12->section,
                        			"created" => $rd12->created,
            					),
        			"created" => $row['created']
        		);
    			
    		}
    		$output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
    		
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
	
	
	
		function showAllVideos_Backup()
	{
	    require_once("config.php");
	    $input      = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		
		if(isset($event_json['fb_id']))
		{
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			$token=$event_json['token'];
			@mysqli_query($conn,"update users set tokon='".$token."' where fb_id='".$fb_id."' ");
			
			//$latitude  =  htmlspecialchars(strip_tags($event_json['lat'] , ENT_QUOTES));
			//$longitude =  htmlspecialchars(strip_tags($event_json['lon'] , ENT_QUOTES));
			/*
		     if(empty($latitude) && empty($longitude))
		     {
			  $query=mysqli_query($conn,"select * from videos order by rand() ");
		     }else
		     {
              $query = mysqli_query($conn,"select
                          (((acos(sin(('$latitude'*pi()/180)) * sin((`lat`*pi()/180))+cos(('$latitude'*pi()/180)) 
                          * cos((`lat`*pi()/180)) * cos((('$longitude'- `lon`)*pi()/180))))*180/pi())*60*1.1515) 
                          AS  distance From videos having distance < 50  order by rand() "); 
		     } 
		     */
		 //   $query=mysqli_query($conn,"select * from videos where private_v = 1 order by rand() ");
		     $query=mysqli_query($conn,"select * from videos where private_v = 0 order by id desc");
    		$array_out = array();
    		while($row=mysqli_fetch_array($query))
    		{
    		    
    		    $query1=mysqli_query($conn,"select * from users where fb_id='".$row['fb_id']."' ");
		        $rd=mysqli_fetch_object($query1);
		       
		        $query112=mysqli_query($conn,"select * from sound where id='".$row['sound_id']."' ");
		        $rd12=mysqli_fetch_object($query112);
		        
		        $countLikes = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' ");
                $countLikes_count=mysqli_fetch_assoc($countLikes);
		        
		        $countcomment = mysqli_query($conn,"SELECT count(*) as count from video_comment where video_id='".$row['id']."' ");
                $countcomment_count=mysqli_fetch_assoc($countcomment);
                
                
                $liked = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' 
                                      and fb_id='".$fb_id."' AND action = 1 ");
                $liked_count=mysqli_fetch_assoc($liked);
                
            
		        
        	   	$array_out[] = 
        			array(
        			"id" => $row['id'],
        			"fb_id" => $row['fb_id'],
        			"user_info" =>array
            					(
            					 "first_name" => $rd->first_name,
                        			"last_name" => $rd->last_name,
                        			"profile_pic" => $rd->profile_pic,
                        			"official" => $rd->official,
                        			"token" => $rd->tokon
                        			
                        			
            					),
            		"count" =>array
            					(
            					    "like_count" => $countLikes_count['count'],
                        			"video_comment_count" => $countcomment_count['count']
            					),
            		"liked"=> $liked_count['count'],			
            	    "video" => $row['video'],
        			"thum" => $row['thum'],
        			"gif" => $row['gif'],
        			"description" => $row['description'],
        			"sound" =>array
            					(
            					    "id" => $rd12->id,
            					    "audio_path" => 
                            			array(
                                			"mp3" => $API_path."/upload/audio/".$rd12->id.".mp3",
                    			            "acc" => $API_path."/upload/audio/".$rd12->id.".aac"
                                		),
                        			"sound_name" => $rd12->sound_name,
                        			"description" => $rd12->description,
                        			"thum" => $rd12->thum,
                        			"section" => $rd12->section,
                        			"created" => $rd12->created,
            					),
        			"created" => $row['created']
        		);
    			
    		}
    		$output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
    		
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
	
	function SearchByHashTag()
	{
	    
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
	
		if(isset($event_json['fb_id']))
		{
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			$tag=htmlspecialchars(strip_tags($event_json['tag'] , ENT_QUOTES));
			$token=$event_json['token'];
			
			@mysqli_query($conn,"update users set tokon='".$token."' where fb_id='".$fb_id."' ");
			
			$query=mysqli_query($conn,"select * from videos where description like '%".$tag."%' AND private_v = 1 order by rand() ");
		        
    		$array_out = array();
    		while($row=mysqli_fetch_array($query))
    		{
    		    
    		    $query1=mysqli_query($conn,"select * from users where fb_id='".$row['fb_id']."' ");
		        $rd=mysqli_fetch_object($query1);
		       
		        $query112=mysqli_query($conn,"select * from sound where id='".$row['sound_id']."' ");
		        $rd12=mysqli_fetch_object($query112);
		        
		        $countLikes = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' ");
                $countLikes_count=mysqli_fetch_assoc($countLikes);
		        
		        $countcomment = mysqli_query($conn,"SELECT count(*) as count from video_comment where video_id='".$row['id']."' ");
                $countcomment_count=mysqli_fetch_assoc($countcomment);
                
                
                $liked = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' and fb_id='".$fb_id."' ");
                $liked_count=mysqli_fetch_assoc($liked);
		        
        	   	$array_out[] = 
        			array(
        			"id" => $row['id'],
        			"fb_id" => $row['fb_id'],
        			"user_info" =>array
            					(
            					    "first_name" => $rd->first_name,
                        			"last_name" => $rd->last_name,
                        			"profile_pic" => $rd->profile_pic
            					),
            		"count" =>array
            					(
            					    "like_count" => $countLikes_count['count'],
                        			"video_comment_count" => $countcomment_count['count'],
                        			"view" => $row['view'],
            					),
            		"liked"=> $liked_count['count'],			
            	    "video" => $row['video'],
        			"thum" => $row['thum'],
        			"gif" => $row['gif'],
        			"description" => $row['description'],
        			"sound" =>array
            					(
            					    "id" => $rd12->id,
            					    "audio_path" => 
                            			array(
                                			"mp3" => $API_path."/upload/audio/".$rd12->id.".mp3",
                    			            "acc" => $API_path."/upload/audio/".$rd12->id.".aac"
                                		),
                        			"sound_name" => $rd12->sound_name,
                        			"description" => $rd12->description,
                        			"thum" => $rd12->thum,
                        			"section" => $rd12->section,
                        			"created" => $rd12->created,
            					),
        			"created" => $row['created']
        		);
    			
    		}
    		$output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
    		
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
	
	function showMyAllVideos()
	{
	    
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
	$blockuser= "0"; 
		if(isset($event_json['fb_id']) && isset($event_json['my_fb_id']))
		{
			$my_fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			$fb_id=htmlspecialchars(strip_tags($event_json['my_fb_id'] , ENT_QUOTES));
			$user=htmlspecialchars(strip_tags($event_json['user'] , ENT_QUOTES));
			
		    $query1=mysqli_query($conn,"select * from users where fb_id='".$fb_id."' ");
		    $rd=mysqli_fetch_object($query1);
		    
		     
		    if($user=="other")
		    {
		      $blockuser= $rd->private;
		    }
		  
		   
		   
		if($blockuser=="0")
		{
		     if(mysqli_num_rows($query1))
		    {
		        
		        $query=mysqli_query($conn,"select * from videos where fb_id='".$fb_id."' order by id DESC");
		        
		        $array_out_video = array();
        		while($row=mysqli_fetch_array($query))
        		{
        		  
        		   $countLikes = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' ");
                   $countLikes_count=mysqli_fetch_assoc($countLikes);
    		       
    		       $query112=mysqli_query($conn,"select * from sound where id='".$row['sound_id']."' ");
		           $rd12=mysqli_fetch_object($query112);
		        
    		       $countcomment = mysqli_query($conn,"SELECT count(*) as count from video_comment where video_id='".$row['id']."' ");
                   $countcomment_count=mysqli_fetch_assoc($countcomment);
                   
                   $liked = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' and fb_id='".$fb_id."' ");
                   $liked_count=mysqli_fetch_assoc($liked);
                
        		   $array_out_video[] = 
            			array(
            			"id" => $row['id'],
            			"video" => $row['video'],
            			"thum" => $row['thum'],
            			"gif" => $row['gif']."?time=".rand(),
            			"description" => $row['description'],
            			"liked" => $liked_count['count'],
            			"count" =>array
            					(
            					    "like_count" => $countLikes_count['count'],
                        			"video_comment_count" => $countcomment_count['count'],
                        			"view" => $row['view'],
            					),
    					"sound" =>array
            					(
            					    "id" => $rd12->id,
            					    "audio_path" => 
                            			array(
                                			"mp3" => $API_path."/upload/audio/".$rd12->id.".mp3",
                    			            "acc" => $API_path."/upload/audio/".$rd12->id.".aac"
                                		),
                        			"sound_name" => $rd12->sound_name,
                        			"description" => $rd12->description,
                        			"thum" => $rd12->thum,
                        			"section" => $rd12->section,
                        			"created" => $rd12->created
                        			),
            			"created" => $row['created']
            		);
        			
        		}
		        
		        
		        //count total heart
		            $query123=mysqli_query($conn,"select * from videos where fb_id='".$my_fb_id."' ");
		        
    		        $array_out_count_heart ="";
            		while($row123=mysqli_fetch_array($query123))
            		{
            		  	$array_out_count_heart .=$row123['id'].',';
            		}
            		
            		$array_out_count_heart=$array_out_count_heart.'0';
            		
            		$hear_count=mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id IN($array_out_count_heart) ");
		            $hear_count=mysqli_fetch_assoc($hear_count);
		            
		        //count total heart
		        
		        //count total_fans
		        
		            $total_fans=mysqli_query($conn,"SELECT count(*) as count from follow_users where followed_fb_id='".$fb_id."' ");
		            $total_fans=mysqli_fetch_assoc($total_fans);
		            
		        //count total_fans
		        
		        //count total_following
		        
		            $total_following=mysqli_query($conn,"SELECT count(*) as count from follow_users where fb_id='".$fb_id."' ");
		            $total_following=mysqli_fetch_assoc($total_following);
		            
		        //count total_following
		        
		        
		        $count_video_rows=count($array_out_video);
		        if($count_video_rows=="0")
		        {
		            $array_out_video=array(0);
		        }
		        
		        
                $query2=mysqli_query($conn,"SELECT count(*) as count from follow_users where fb_id='".$my_fb_id."' and followed_fb_id='".$fb_id."' ");
		        $follow_count=mysqli_fetch_assoc($query2);
		        
		       
                if($follow_count['count']=="0")
                {
                    $follow="0";
                    $follow_button_status="Follow";
                }
                else
                if($follow_count['count']!="0")
                {
                    $follow="1";
                    $follow_button_status="Unfollow";
                }
                
                
		        $array_out = array();
		        $array_out[] = 
        			array(
        			"fb_id" => $fb_id,
        			"user_info" =>array
            					(   
            					    "fb_id" => $rd->fb_id,
            					    "first_name" => $rd->first_name,
                        			"last_name" => $rd->last_name,
                        			"profile_pic" => $rd->profile_pic,
                        			"gender" => $rd->gender,
        	                		"created" => $rd->created,
        	                		"cover_pic" => $rd->cover_pic,
        	                		"official" => $rd->official
            					),
        			"follow_Status" =>array
            					(
            					    "follow" => $follow,
                        			"follow_status_button" => $follow_button_status
            					),
        			"total_heart" => $hear_count['count'],
        			"total_fans" => $total_fans['count'],
        			"total_following" => $total_following['count'],
        			"user_videos" => $array_out_video
        			
            	    
        		);
		        
		      
		    } 
		    
		    
		     $output=array( "code" => "200", "msg" => $array_out,"blockuser"=>$blockuser);
    		print_r(json_encode($output, true));
		}
		
		else
		{
		     $array_out = array();
		    $output=array( "code" => "200", "msg" => $array_out,"blockuser"=>$blockuser);
    		print_r(json_encode($output, true)); 
		}
		   
		    
		   
    
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}





	function showMyAllVideos_as_hastag()
	{
	    
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
	
		if(isset($event_json['fb_id']) && isset($event_json['my_fb_id']))
		{
			$my_fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			$fb_id=htmlspecialchars(strip_tags($event_json['my_fb_id'] , ENT_QUOTES));
			
		    $query1=mysqli_query($conn,"select * from users where fb_id='".$fb_id."' ");
		    $rd=mysqli_fetch_object($query1);
		    if(mysqli_num_rows($query1))
		    {
		        
		        $query=mysqli_query($conn,"select * from videos where fb_id='".$fb_id."' and description like '#%'
		                            order by id DESC");
		        $array_out_video = array();
        		while($row=mysqli_fetch_array($query))
        		{
        		  
        		   $countLikes = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' ");
                   $countLikes_count=mysqli_fetch_assoc($countLikes);
    		       
    		       $query112=mysqli_query($conn,"select * from sound where id='".$row['sound_id']."' ");
		           $rd12=mysqli_fetch_object($query112);
		        
    		       $countcomment = mysqli_query($conn,"SELECT count(*) as count from video_comment where video_id='".$row['id']."' ");
                   $countcomment_count=mysqli_fetch_assoc($countcomment);
                   
                   $liked = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' and fb_id='".$fb_id."' ");
                   $liked_count=mysqli_fetch_assoc($liked);
                
        		   $array_out_video[] = 
            			array(
            			"id" => $row['id'],
            			"video" => $row['video'],
            			"thum" => $row['thum'],
            			"gif" => $row['gif']."?time=".rand(),
            			"description" => $row['description'],
            			"liked" => $liked_count['count'],
            			"count" =>array
            					(
            					    "like_count" => $countLikes_count['count'],
                        			"video_comment_count" => $countcomment_count['count'],
                        			"view" => $row['view'],
            					),
    					"sound" =>array
            					(
            					    "id" => $rd12->id,
            					    "audio_path" => 
                            			array(
                                			"mp3" => $API_path."/upload/audio/".$rd12->id.".mp3",
                    			            "acc" => $API_path."/upload/audio/".$rd12->id.".aac"
                                		),
                        			"sound_name" => $rd12->sound_name,
                        			"description" => $rd12->description,
                        			"thum" => $rd12->thum,
                        			"section" => $rd12->section,
                        			"created" => $rd12->created,
            					),
            			"created" => $row['created']
            		);
        			
        		}
		        
		        
		        //count total heart
		            $query123=mysqli_query($conn,"select * from videos where fb_id='".$my_fb_id."' ");
		        
    		        $array_out_count_heart ="";
            		while($row123=mysqli_fetch_array($query123))
            		{
            		  	$array_out_count_heart .=$row123['id'].',';
            		}
            		
            		$array_out_count_heart=$array_out_count_heart.'0';
            		
            		$hear_count=mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id IN($array_out_count_heart) ");
		            $hear_count=mysqli_fetch_assoc($hear_count);
		            
		        //count total heart
		        
		        //count total_fans
		        
		            $total_fans=mysqli_query($conn,"SELECT count(*) as count from follow_users where followed_fb_id='".$fb_id."' ");
		            $total_fans=mysqli_fetch_assoc($total_fans);
		            
		        //count total_fans
		        
		        //count total_following
		        
		            $total_following=mysqli_query($conn,"SELECT count(*) as count from follow_users where fb_id='".$fb_id."' ");
		            $total_following=mysqli_fetch_assoc($total_following);
		            
		        //count total_following
		        
		        
		        $count_video_rows=count($array_out_video);
		        if($count_video_rows=="0")
		        {
		            $array_out_video=array(0);
		        }
		        
		        
                $query2=mysqli_query($conn,"SELECT count(*) as count from follow_users where fb_id='".$my_fb_id."' and followed_fb_id='".$fb_id."' ");
		        $follow_count=mysqli_fetch_assoc($query2);
		        
		       
                if($follow_count['count']=="0")
                {
                    $follow="0";
                    $follow_button_status="Follow";
                }
                else
                if($follow_count['count']!="0")
                {
                    $follow="1";
                    $follow_button_status="Unfollow";
                }
                
                
		        $array_out = array();
		        $array_out[] = 
        			array(
        			"fb_id" => $fb_id,
        			"user_info" =>array
            					(   
            					    "fb_id" => $rd->fb_id,
            					    "first_name" => $rd->first_name,
                        			"last_name" => $rd->last_name,
                        			"profile_pic" => $rd->profile_pic,
                        			"gender" => $rd->gender,
        	                		"created" => $rd->created,
            					),
        			"follow_Status" =>array
            					(
            					    "follow" => $follow,
                        			"follow_status_button" => $follow_button_status
            					),
        			"total_heart" => $hear_count['count'],
        			"total_fans" => $total_fans['count'],
        			"total_following" => $total_following['count'],
        			"user_videos" => $array_out_video
            	    
        		);
		        
		      
		    } 
		    
		    $output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
    		
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
	
	function updateVideoView()
	{
	    
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
	
		if(isset($event_json['id']))
		{
			$id=htmlspecialchars(strip_tags($event_json['id'] , ENT_QUOTES));
		       
		    mysqli_query($conn,"update videos SET view =view+1 WHERE id ='".$id."' ");
    		
    		$array_out[] = 
				array(
				"response" =>"success");
				
		    $output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
    		
		}
		else
		{
			$array_out = array();
					
			$array_out[] = 
				array(
				"response" =>"Json Parem are missing");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	    
	}
	
	
	
	
	function likeDislikeVideo()
	{
	    date_default_timezone_set('Asia/Kolkata');
	    require_once("config.php");
		$input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
		
		$date=date('Y-m-d H:i:s',time());
		if(isset($event_json['fb_id']) && isset($event_json['video_id']) )
		{   
		    $fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
		    $video_id=htmlspecialchars(strip_tags($event_json['video_id'] , ENT_QUOTES));
		    $action=htmlspecialchars(strip_tags($event_json['action'] , ENT_QUOTES));
		   
		    if($action=="0")
		    {
		        mysqli_query($conn,"Delete from video_like_dislike where video_id ='".$video_id."' and fb_id  ='".$fb_id."' ");
	    
        	    $array_out = array();
        					
        			 $array_out[] = 
        				array(
        				"response" =>"video unlike");
        	        
            	$output=array( "code" => "200", "msg" => $array_out);
        		print_r(json_encode($output, true));
		    }
		    else
		    {
		        $qrry_1="insert into video_like_dislike(video_id,fb_id,action,created)values('$video_id','$fb_id','$action','$date')";
    		
    			if(mysqli_query($conn,$qrry_1))
    			{
    			   $array_out = array();
        			$array_out[] = 
        				array(
        					"response" => "actions success"
        				);
        			
        			$output=array( "code" => "200", "msg" => $array_out);
        			print_r(json_encode($output, true)); 
        			
        			
        			//push notification
    			        
    			        //fetch user tokon 
    			        
        			        $query1=mysqli_query($conn,"select * from videos where id='".$video_id."' ");
    		                $rd=mysqli_fetch_object($query1);
    		                
    		                $query11=mysqli_query($conn,"select * from users where fb_id='".$rd->fb_id."' ");
    		                $rd1=mysqli_fetch_object($query11);
		                
		                //fetch user tokon 
		                
		                //fetch name of a person who is liking other person video
    		                $query111=mysqli_query($conn,"select * from users where fb_id='".$fb_id."' ");
    		                $rd11=mysqli_fetch_object($query111);
    		                
    		            //fetch name of a person who is liking other person video
		                
        			    $title=$rd11->first_name." Liked Your Video";
        			    $message="You have received 1 more like on your video";
        			    
        			    /*$notification['to'] = $rd1->tokon;
                        $notification['notification']['title'] = $title;
                        $notification['notification']['body'] = $message;
                        // $notification['notification']['text'] = $sender_details['User']['username'].' has sent you a friend request';
                        $notification['notification']['badge'] = "1";
                        $notification['notification']['sound'] = "default";
                        $notification['notification']['icon'] = "";
                         $notification['notification']['image'] = "";
                        $notification['notification']['type'] = "";
                        $notification['notification']['data'] = "";*/
                        
                        //================================
          $msg = array
          (
		'body' 	=> $title,
		'title'	=> $message,
             	
          );
	$fields = array
			(
				'to'		=> $rd1->tokon,
				'notification'	=> $msg
			);
                        
        
                        //sendPushNotificationToMobileDevice(json_encode($notification));
                        sendPushNotification($fields);
                        
	                //push notification
	                
    			}
    			else
    			{
    			    $array_out = array();
        			$array_out[] = 
        				array(
        					"response" => "error in uploading files"
        				);
        			
        			$output=array( "code" => "201", "msg" => $array_out);
        			print_r(json_encode($output, true)); 
    			}
    			
    			
    			$expo=10;
			  $query1     = mysqli_query($conn,"UPDATE users SET total_expo = total_expo + '$expo' WHERE fb_id = '$fb_id' ");
    			
		    }
		   	
			
		}
		else
		{
			$array_out = array();
			$array_out[] = 
				array(
					"response" => "json parem missing"
				);
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
    function postComment()
    {
        
        require_once("config.php");
		$input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		
		if(isset($event_json['fb_id']) && isset($event_json['video_id']) )
		{   
		    $fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
		    $video_id=htmlspecialchars(strip_tags($event_json['video_id'] , ENT_QUOTES));
		    $comment=htmlspecialchars(strip_tags($event_json['comment'] , ENT_QUOTES));
		    
		    $query1=mysqli_query($conn,"select * from users where fb_id='".$fb_id."' ");
		    $rd=mysqli_fetch_object($query1);
		        
    	    $qrry_1="insert into video_comment(video_id,fb_id,comments)values(";
			$qrry_1.="'".$video_id."',";
			$qrry_1.="'".$fb_id."',";
			$qrry_1.="'".$comment."'";
			$qrry_1.=")";
			if(mysqli_query($conn,$qrry_1))
			{
			   $array_out = array();
    			$array_out[] = 
    				array(
    					"fb_id" => $fb_id,
    					"video_id" => $video_id,
    					"comments" => $comment,
    					"user_info" =>array
            					(
            					    "first_name" => $rd->first_name,
                        			"last_name" => $rd->last_name,
                        			"profile_pic" => $rd->profile_pic
            					),
    				);
    			
    			$output=array( "code" => "200", "msg" => $array_out);
    			print_r(json_encode($output, true)); 
    			
    			
                //push notification
    			        
			        //fetch user tokon 
			        
    			        $query1=mysqli_query($conn,"select * from videos where id='".$video_id."' ");
		                $rd=mysqli_fetch_object($query1);
		                
		                $query11=mysqli_query($conn,"select * from users where fb_id='".$rd->fb_id."' ");
		                $rd1=mysqli_fetch_object($query11);
	                
	                //fetch user tokon 
	                
	                //fetch name of a person who is liking other person video
		                $query111=mysqli_query($conn,"select * from users where fb_id='".$fb_id."' ");
		                $rd11=mysqli_fetch_object($query111);
		                
		            //fetch name of a person who is liking other person video
	                
    			    $title=$rd11->first_name." Post comment on your video";
    			    $message=$comment;
    			    
    			    $notification['to'] = $rd1->tokon;
                    $notification['notification']['title'] = $title;
                    $notification['notification']['body'] = $message;
                    // $notification['notification']['text'] = $sender_details['User']['username'].' has sent you a friend request';
                    $notification['notification']['badge'] = "1";
                    $notification['notification']['sound'] = "default";
                    $notification['notification']['icon'] = "";
                     $notification['notification']['image'] = "";
                    $notification['notification']['type'] = "";
                    $notification['notification']['data'] = "";
    
                    sendPushNotificationToMobileDevice(json_encode($notification));
                    
                //push notification
			}
			else
			{
			    $array_out = array();
    			$array_out[] = 
    				array(
    					"response" => "error"
    				);
    			
    			$output=array( "code" => "201", "msg" => $array_out);
    			print_r(json_encode($output, true)); 
			}
			
		}
		else
		{
			$array_out = array();
			$array_out[] = 
				array(
					"response" => "json parem missing"
				);
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
		
    }
    
    function showVideoComments()
	{
	    
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
	
		if(isset($event_json['video_id']))
		{
			$video_id=htmlspecialchars(strip_tags($event_json['video_id'] , ENT_QUOTES));
			
			$query=mysqli_query($conn,"select * from video_comment where video_id='".$video_id."' order by id DESC");
		        
    		$array_out = array();
    		while($row=mysqli_fetch_array($query))
    		{
    		  
    		   $query1=mysqli_query($conn,"select * from users where fb_id='".$row['fb_id']."' ");
		       $rd=mysqli_fetch_object($query1);
		        
    		   $array_out[] = 
        			array(
        			"video_id" => $row['video_id'],
        			"fb_id" => $row['fb_id'],
        			"user_info" =>array
            					(
            					    "first_name" => $rd->first_name,
                        			"last_name" => $rd->last_name,
                        			"profile_pic" => $rd->profile_pic
            					),
            	    
        			"comments" => $row['comments'],
        			"created" => $row['created']
        		);
    			
    		}
    		$output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
    		
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
	
	function allSounds()
	{
	    
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
	
		$query=mysqli_query($conn,"select DISTINCT section from sound ");
	        
		$array_out = array();
		while($row=mysqli_fetch_array($query))
		{
		  
		   //echo $row['section'];
		   //echo "select * from sound where section ='".$row['section']."' ";
		   
		   $query1=mysqli_query($conn,"select * from sound where section ='".$row['section']."' ");
		   $array_out1 = array();
		   while($row1=mysqli_fetch_array($query1))
		   {
		        $array_out1[] = 
        			array(
            			"id" => $row1['id'],
            			
            			"audio_path" => 
                    			array(
                        			"mp3" => $API_path."/upload/audio/".$row1['id'].".mp3",
            			            "acc" => $API_path."/upload/audio/".$row1['id'].".aac"
                        		),
            			"sound_name" => $row1['sound_name'],
            			"description" => $row1['description'],
            			"section" => $row1['section'],
            			"thum" => $row1['thum'],
            			"created" => $row1['created']
            		);
		    }
		    
		    $array_out2[] = 
    			array(
    			"section_name" => $row['section'],
    			"sections_sounds" => $array_out1
    			
    		);
		   
			
		}
		$output=array( "code" => "200", "msg" => $array_out2);
		print_r(json_encode($output, true));
		
	}
	
	
	function fav_sound()
	{
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
		
		if(isset($event_json['fb_id']) && isset($event_json['sound_id']))
		{
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			$sound_id=htmlspecialchars(strip_tags($event_json['sound_id'] , ENT_QUOTES));
			
			$qrry_1="insert into fav_sound(fb_id,sound_id)values(";
			$qrry_1.="'".$fb_id."',";
			$qrry_1.="'".$sound_id."'";
			$qrry_1.=")";
			if(mysqli_query($conn,$qrry_1))
			{
			 
			
				 $array_out = array();
				 $array_out[] = 
					//array("code" => "200");
					array(
        			"response" =>"successful");
				
				$output=array( "code" => "200", "msg" => $array_out);
				print_r(json_encode($output, true));
			}
			else
			{
			    //echo mysqli_error();
			    $array_out = array();
					
        		 $array_out[] = 
        			array(
        			"response" =>"problem");
        		
        		$output=array( "code" => "201", "msg" => $array_out);
        		print_r(json_encode($output, true));
			}
			
			
			
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
	function my_FavSound()
	{
	    
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
	    
	    if(isset($event_json['fb_id']))
		{
		    
		   $fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
		    
    	   $query1=mysqli_query($conn,"select * from fav_sound where fb_id ='".$fb_id."' ");
		   $array_out1 = array();
		   while($row1=mysqli_fetch_array($query1))
		   {
		        
		        $qrry="select * from sound WHERE id ='".$row1['sound_id']."' ";
    			$log_in_rs=mysqli_query($conn,$qrry);
    			
    		    $rd=mysqli_fetch_object($log_in_rs);
    			    
    			$array_out1[] = 
        			array(
            			"id" => $row1['id'],
            			
            			"audio_path" => 
                    			array(
                        			"mp3" => $API_path."/upload/audio/".$row1['sound_id'].".mp3",
            			            "acc" => $API_path."/upload/audio/".$row1['sound_id'].".aac"
                        		),
            			"sound_name" => $rd->sound_name,
            			"description" => $rd->description,
            			"section" => $rd->section,
            			"thum" => $rd->thum,
            			"created" => $rd->created,
            		);
		    }
		    
		    $output=array( "code" => "200", "msg" => $array_out1);
			print_r(json_encode($output, true));
    		
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
		
	}
	
	
	function AutoBac()
	{
            include('config.php');
            date_default_timezone_set('Asia/Kolkata');
            
            
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
             
            //$conn =$con;
            
            
            $tables = array();
            $sql = "SHOW TABLES";
            $result = mysqli_query($conn, $sql);
            
            while ($row = mysqli_fetch_row($result)) {
                $tables[] = $row[0];
            }
            
            $sqlScript = "";
            
            if(isset($_GET['table_name']))
            {
                $table_name = $_GET['table_name'];
                $queryt = mysqli_query($conn, $table_name);
                while($row = mysqli_fetch_assoc($queryt))
                {$outer[]= $row;}
                echo "<pre>";print_r($outer);
            }
            foreach ($tables as $table) {
                
                // Prepare SQLscript for creating table structure
                $query = "SHOW CREATE TABLE $table";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_row($result);
                
                $sqlScript .= "\n\n" . $row[1] . ";\n\n";
                
                
                $query = "SELECT * FROM $table";
                $result = mysqli_query($conn, $query);
                
                $columnCount = mysqli_num_fields($result);
                
                // Prepare SQLscript for dumping data for each table
                for ($i = 0; $i < $columnCount; $i ++) {
                    while ($row = mysqli_fetch_row($result)) {
                        $sqlScript .= "INSERT INTO $table VALUES(";
                        for ($j = 0; $j < $columnCount; $j ++) {
                            $row[$j] = $row[$j];
                            
                            if (isset($row[$j])) {
                                $sqlScript .= '"' . $row[$j] . '"';
                            } else {
                                $sqlScript .= '""';
                            }
                            if ($j < ($columnCount - 1)) {
                                $sqlScript .= ',';
                            }
                        }
                        $sqlScript .= ");\n";
                    }
                }
                
                $sqlScript .= "\n"; 
            }
            
            $database_name = 'hello';
            if(!empty($sqlScript))
            {
                // Save the SQL script to a backup file
                $backup_file_name = $database_name . '_backup_' . time() . '.sql';
                $fileHandler = fopen($backup_file_name, 'w+');
                $number_of_lines = fwrite($fileHandler, $sqlScript);
                fclose($fileHandler); 
            
                // Download the SQL backup file to the browser
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename=' . basename($backup_file_name));
                header('Content-Transfer-Encoding: binary');
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize($backup_file_name));
               // ob_clean();
                flush();
                readfile($backup_file_name);
                exec('rm ' . $backup_file_name); 
                unlink($backup_file_name);
            }

	}
	function my_liked_video()
	{
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
	
		if(isset($event_json['fb_id']))
		{
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			
		    $query1=mysqli_query($conn,"select * from users where fb_id='".$fb_id."' ");
		    $rd=mysqli_fetch_object($query1);
		    if(mysqli_num_rows($query1))
		    {
		        
		        $query=mysqli_query($conn,"select * from video_like_dislike where fb_id='".$fb_id."' order by id DESC");
		        
		        $array_out_video = array();
        		while($row=mysqli_fetch_array($query))
        		{
        		   
        		   $query11=mysqli_query($conn,"select * from videos where id='".$row['video_id']."' ");
		           $rdd=mysqli_fetch_object($query11);
		            
		           $query112=mysqli_query($conn,"select * from sound where id='".$rdd->sound_id."' ");
		           $rd12=mysqli_fetch_object($query112);
		        
        		   $countLikes = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['video_id']."' ");
                   $countLikes_count=mysqli_fetch_assoc($countLikes);
    		        
    		       $countcomment = mysqli_query($conn,"SELECT count(*) as count from video_comment where video_id='".$row['video_id']."' ");
                   $countcomment_count=mysqli_fetch_assoc($countcomment);
                   
                   $liked = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['video_id']."' and fb_id='".$fb_id."' ");
                   $liked_count=mysqli_fetch_assoc($liked);
                
        		   $array_out_video[] = 
            			array(
            			"id" => $row['id'],
            			"video" => $rdd->video,
            			"thum" => $rdd->thum,
            			"gif" => $rdd->gif,
            			"description" => $rdd->description,
            			"liked" => $liked_count['count'],
            			"count" =>array
            					(
            					    "like_count" => $countLikes_count['count'],
                        			"video_comment_count" => $countcomment_count['count'],
                        			"view" => $rdd->view,
            					),
    					"sound" =>array
            					(
            					    "id" => $rd12->id,
            					    "audio_path" => 
                            			array(
                                			"mp3" => $API_path."/upload/audio/".$rd12->id.".mp3",
                    			            "acc" => $API_path."/upload/audio/".$rd12->id.".aac"
                                		),
                        			"sound_name" => $rd12->sound_name,
                        			"description" => $rd12->description,
                        			"thum" => $rd12->thum,
                        			"section" => $rd12->section,
                        			"created" => $rd12->created,
            					),
            			"created" => $row['created']
            		);
        			
        		}
		        
		        $count_video_rows=count($array_out_video);
		        if($count_video_rows=="0")
		        {
		            $array_out_video=array(0);
		        }
		        
		        
		        
		        
                
                
		        $array_out = array();
		        $array_out[] = 
        			array(
        			"fb_id" => $fb_id,
        			"user_info" =>array
            					(
            					    "first_name" => $rd->first_name,
                        			"last_name" => $rd->last_name,
                        			"profile_pic" => $rd->profile_pic,
                        			"gender" => $rd->gender,
        	                		"created" => $rd->created,
            					),
        			
        			"total_heart" => "100",
        			"total_fans" => "88",
        			"total_following" => "55",
        			"user_videos" => $array_out_video
            	    
        		);
		        
		      
		    } 
		    
		    $output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
    		
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
	
	function get_followers()
	{
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
	
		if(isset($event_json['fb_id']))
		{
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			
		    $query=mysqli_query($conn,"select * from follow_users where followed_fb_id='".$fb_id."' order by id DESC");
		    
		    //echo "select * from follow_users where followed_fb_id='".$fb_id."' order by id DESC";
		    
		    
		        
	        $array_out = array();
    		while($row=mysqli_fetch_array($query))
    		{
    		   
    		   $query11=mysqli_query($conn,"select * from users where fb_id='".$row['fb_id']."' ");
		       $rd1=mysqli_fetch_object($query11);
		       
		       
                $query2=mysqli_query($conn,"SELECT count(*) as count from follow_users where followed_fb_id='".$row['fb_id']."' 
                                     and fb_id='".$fb_id."'  ");
                $follow_count=mysqli_fetch_assoc($query2);
                
                if($follow_count['count']=="0")
                {
                	$follow="0";
                	$follow_button_status="Follow";
                }
                else
                if($follow_count['count']!="0")
                {
                	$follow="1";
                	$follow_button_status="Unfollow";
                }
                

    		   $array_out[] = 
        			array(
        			    "fb_id" => $rd1->fb_id,
					    "username" => $rd1->username,
					    "first_name" => $rd1->first_name,
					    "last_name" => $rd1->last_name,
					    "gender" => $rd1->gender,
					    "bio" => $rd1->bio,
					    "profile_pic" => $rd1->profile_pic,
					    "created" => $rd1->created,
					    "official" => $rd1->official,
					    "follow_Status" =>array
                		(
                			"follow" => $follow,
                			"follow_status_button" => $follow_button_status
                		)
        		);
    			
    		}
	        
	        
		    $output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
    		
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
	
	function get_followings()
	{
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
	
		if(isset($event_json['fb_id']))
		{
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			
		    $query=mysqli_query($conn,"select * from follow_users where fb_id='".$fb_id."' order by id DESC");
		        
	        $array_out = array();
    		while($row=mysqli_fetch_array($query))
    		{
    		   
    		   $query11=mysqli_query($conn,"select * from users where fb_id='".$row['followed_fb_id']."' ");
		       $rd1=mysqli_fetch_object($query11);
		       
		      // $query1=mysqli_query($conn,"select * from users where fb_id='".$row['fb_id']."' ");
		       //$rd=mysqli_fetch_object($query1);
		        
		        
                $query2=mysqli_query($conn,"SELECT count(*) as count from follow_users where fb_id='".$fb_id."' and followed_fb_id='".$row['followed_fb_id']."' ");
                $follow_count=mysqli_fetch_assoc($query2);
                
                if($follow_count['count']=="0")
                {
                	$follow="0";
                	$follow_button_status="Follow";
                }
                else
                if($follow_count['count']!="0")
                {
                	$follow="1";
                	$follow_button_status="Unfollow";
                }
                

    		   $array_out[] = 
        			array(
        			    "fb_id" => $rd1->fb_id,
					    "username" => $rd1->username,
					    "official" => $rd1->official,
					    "first_name" => $rd1->first_name,
					    "last_name" => $rd1->last_name,
					    "gender" => $rd1->gender,
					    "bio" => $rd1->bio,
					    "profile_pic" => $rd1->profile_pic,
					    "created" => $rd1->created,
					    "follow_Status" =>array
                		(
                			"follow" => $follow,
                			"follow_status_button" => $follow_button_status
                		)
        		);
    			
    		}
	        
	        
		    $output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
    		
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
	
	
	function discover()
	{
	    
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
		
		$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
	
		$query=mysqli_query($conn,"select DISTINCT section from videos where section!='0' ");
	        
		$array_out = array();
		while($row=mysqli_fetch_array($query))
		{
		  
		   //echo $row['section'];
		   //echo "select * from sound where section ='".$row['section']."' ";
		   
		   $query1=mysqli_query($conn,"select * from videos where section ='".$row['section']."' AND private_v = 1 ");
		   $array_out1 = array();
		   while($row1=mysqli_fetch_array($query1))
		   {    
		        $query11=mysqli_query($conn,"select * from users where fb_id='".$row1['fb_id']."' ");
		        $rd1=mysqli_fetch_object($query11);
		        
		        $query112=mysqli_query($conn,"select * from sound where id='".$row1['sound_id']."' ");
		        $rd12=mysqli_fetch_object($query112);
		        
		        $countLikes = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row1['id']."' ");
                $countLikes_count=mysqli_fetch_assoc($countLikes);
		        
		        $countcomment = mysqli_query($conn,"SELECT count(*) as count from video_comment where video_id='".$row1['id']."' ");
                $countcomment_count=mysqli_fetch_assoc($countcomment);
               
		        $liked = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row1['id']."' and fb_id='".$fb_id."' ");
                $liked_count=mysqli_fetch_assoc($liked);
                   
		        $array_out1[] = 
        			array(
            			"id" => $row1['id'],
            			"video" => $row1['video'],
            			"thum" => $row1['thum'],
            			"gif" => $row1['gif'],
            			"description" => $row1['description'],
            			"liked" => $liked_count['count'],
            			"count" =>array
            					(
            					    "like_count" => $countLikes_count['count'],
                        			"video_comment_count" => $countcomment_count['count'],
                        			"view" => $row1['view'],
            					),
            			"user_info" =>array
            					(
            					    "fb_id" => $rd1->fb_id,
            					    "first_name" => $rd1->first_name,
                        			"last_name" => $rd1->last_name,
                        			"profile_pic" => $rd1->profile_pic,
                        			"gender" => $rd1->gender,
        	                		"created" => $rd1->created,
            					),
    					"sound" =>array
            					(
            					    "id" => $rd12->id,
            					    "audio_path" => 
                            			array(
                                			"mp3" => $API_path."/upload/audio/".$rd12->id.".mp3",
                    			            "acc" => $API_path."/upload/audio/".$rd12->id.".aac"
                                		),
                        			"sound_name" => $rd12->sound_name,
                        			"description" => $rd12->description,
                        			"thum" => $rd12->thum,
                        			"section" => $rd12->section,
                        			"created" => $rd12->created,
            					),
            			"created" => $row1['created']
            		);
		    }
		    
		    $array_out2[] = 
    			array(
    			"section_name" => $row['section'],
    			"sections_videos" => $array_out1
    			
    		);
		   
			
		}
		$output=array( "code" => "200", "msg" => $array_out2);
		print_r(json_encode($output, true));
		
	}
	
	
	function edit_profile()
	{
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
		//0= owner  1= company 2= ind mechanic
		
		if(isset($event_json['fb_id']) && isset($event_json['first_name']) && isset($event_json['last_name']) && isset($event_json['gender']) && isset($event_json['bio']) )
		{
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			$first_name=htmlspecialchars(strip_tags($event_json['first_name'] , ENT_QUOTES));
			$last_name=htmlspecialchars(strip_tags($event_json['last_name'] , ENT_QUOTES));
			$gender=htmlspecialchars(strip_tags($event_json['gender'] , ENT_QUOTES));
		    $bio=htmlspecialchars(strip_tags($event_json['bio'] , ENT_QUOTES));
			$username=htmlspecialchars(strip_tags($event_json['username'] , ENT_QUOTES));
			
			$qrry_1="update users SET first_name ='".$first_name."' , last_name ='".$last_name."', gender ='".$gender."' , bio ='".$bio."'  WHERE fb_id ='".$fb_id."' ";
			if(mysqli_query($conn,$qrry_1))
			{
			    $array_out = array();
				 
				$qrry_1="select * from users WHERE fb_id ='".$fb_id."' ";
    			$log_in_rs=mysqli_query($conn,$qrry_1);
    			
    			if(mysqli_num_rows($log_in_rs))
    			{   
    			    
                    
    			    $rd=mysqli_fetch_object($log_in_rs);
    			    
    			       $array_out = array();
    					
            		 $array_out[] = 
            			array(
            			"first_name" => $rd->first_name,
            			"username" => $rd-username,
            			"last_name" => $rd->last_name,
            			"gender" => $rd->gender,
            			"bio" => bio
            			);
            		
            		$output=array( "code" => "200", "msg" => $array_out);
            		print_r(json_encode($output, true));
    			}
			
        		
			}
			else
			{
			    $array_out = array();
					
        		 $array_out[] = 
        			array(
        			"response" =>"problem in updating");
        		
        		$output=array( "code" => "201", "msg" => $array_out);
        		print_r(json_encode($output, true));
			}
			
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	    
	}
	
	
	function follow_users()
	{
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
		//0= owner  1= company 2= ind mechanic
		
		
		if(isset($event_json['fb_id']) && isset($event_json['followed_fb_id']) && isset($event_json['status']))
		{
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			$followed_fb_id=htmlspecialchars(strip_tags($event_json['followed_fb_id'] , ENT_QUOTES));
			$status=htmlspecialchars(strip_tags($event_json['status'] , ENT_QUOTES));
			
			if($status=="0")
			{
			    mysqli_query($conn,"Delete from follow_users where fb_id ='".$fb_id."' and followed_fb_id='".$followed_fb_id."'  ");
			    
			    $array_out = array();
    				 $array_out[] = 
    					//array("code" => "200");
    					array(
            			"response" =>"unfollow");
    				
    				$output=array( "code" => "200", "msg" => $array_out);
    				print_r(json_encode($output, true));
			}
			else
			{
			    $qrry_1="insert into follow_users(fb_id,followed_fb_id)values(";
    			$qrry_1.="'".$fb_id."',";
    			$qrry_1.="'".$followed_fb_id."'";
    			$qrry_1.=")";
    			if(mysqli_query($conn,$qrry_1))
    			{
    			 
    			
    				 $array_out = array();
    				 $array_out[] = 
    					//array("code" => "200");
    					array(
            			"response" =>"follow successful");
    				
    				$output=array( "code" => "200", "msg" => $array_out);
    				print_r(json_encode($output, true));
    			}
    			else
    			{
    			    //echo mysqli_error();
    			    $array_out = array();
    					
            		 $array_out[] = 
            			array(
            			"response" =>"problem in signup");
            		
            		$output=array( "code" => "201", "msg" => $array_out);
            		print_r(json_encode($output, true));
    			}
			}
			
			
			
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
	
	
	
	//admin panel services
	
	function Admin_Login()
	{   
	   	require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
		//0= owner  1= company 2= ind mechanic
		
		if(isset($event_json['email']) && isset($event_json['password']) )
		{
			$email=htmlspecialchars(strip_tags($event_json['email'] , ENT_QUOTES));
			$password=strip_tags($event_json['password']);
		
			
			$log_in="select * from admin where email='".$email."' and pass='".md5($password)."' ";
			$log_in_rs=mysqli_query($conn,$log_in);
			
			if(mysqli_num_rows($log_in_rs))
			{
				$array_out = array();
				 $array_out[] = 
					//array("code" => "200");
					array(
						"response" => "login success"
					);
				
				$output=array( "code" => "200", "msg" => $array_out);
				print_r(json_encode($output, true));
			}	
			else
			{
			    
    			$array_out = array();
    					
        		 $array_out[] = 
        			array(
        			"response" =>"Error in login");
        		
        		$output=array( "code" => "201", "msg" => $array_out);
        		print_r(json_encode($output, true));
			}
			
			
			
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
	
	
	function All_Users()
	{
	    
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		
		$query=mysqli_query($conn,"select * from users order by id DESC");
		        
		$array_out = array();
		while($row=mysqli_fetch_array($query))
		{
		     
		   	 $array_out[] = 
				array(
					"fb_id" => $row['fb_id'],
					"total_diamondd" => $row['total_diamondd'],
					"username" => $row['username'],
					"first_name" => $row['first_name'],
					"last_name" => $row['last_name'],
					"gender" => $row['gender'],
					"profile_pic" => $row['profile_pic'],
					"block" => $row['block'],
					"version" => $row['version'],
					"device" => $row['device'],
					"signup_type" => $row['signup_type'],
					"created" => $row['created']
					
				);
			
		}
		$output=array( "code" => "200", "msg" => $array_out);
		print_r(json_encode($output, true));
		
	    
	}
	
	
		function all_gifts()
	{
	    
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		
		$query=mysqli_query($conn,"select * from users order by id DESC");
		        
		$array_out = array();
		while($row=mysqli_fetch_array($query))
		{
		     
		   	 $array_out[] = 
				array(
					"fb_id" => $row['fb_id'],
					"username" => $row['username'],
					"first_name" => $row['first_name'],
					"last_name" => $row['last_name'],
					"gender" => $row['gender'],
					"profile_pic" => $row['profile_pic'],
					"block" => $row['block'],
					"version" => $row['version'],
					"device" => $row['device'],
					"signup_type" => $row['signup_type'],
					"created" => $row['created']
					
				);
			
		}
		$output=array( "code" => "200", "msg" => $array_out);
		print_r(json_encode($output, true));
		
	    
	}
	
	
	
	function admin_all_sounds()
	{
	    
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		
		$query=mysqli_query($conn,"select * from sound order by id DESC");
		        
		$array_out = array();
		while($row=mysqli_fetch_array($query))
		{
		     
		   	 $array_out[] = 
				array(
					"id" => $row['id'],
					"sound_name" => $row['sound_name'],
					"description" => $row['description'],
					"thum" => $row['thum'],
					"section" => $row['section'],
					"created" => $row['created']
					
				);
			
		}
		$output=array( "code" => "200", "msg" => $array_out);
		print_r(json_encode($output, true));
		
	    
	}
	
 	function admin_uploadSound()
	{
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
		//0= owner  1= company 2= ind mechanic
		
		if(isset($event_json['fileUrl']))
		{
			$fileUrl=htmlspecialchars(strip_tags($event_json['fileUrl'] , ENT_QUOTES));
			$sound_name=htmlspecialchars(strip_tags($event_json['sound_name'] , ENT_QUOTES));
			$description=htmlspecialchars(strip_tags($event_json['description'] , ENT_QUOTES));
			$section_name=htmlspecialchars(strip_tags($event_json['section_name'] , ENT_QUOTES));
			
			$qrry_1="insert into sound(sound_name,description,section)values(";
			$qrry_1.="'".$sound_name."',";
			$qrry_1.="'".$description."',";
			$qrry_1.="'".$section_name."'";
			$qrry_1.=")";
			if(mysqli_query($conn,$qrry_1))
			{
			     $insert_id=mysqli_insert_id($conn);
			     @copy($fileUrl,'upload/audio/'.$insert_id.'.aac');
				 $array_out = array();
				 $array_out[] = 
					//array("code" => "200");
					array(
        			"response" =>"successful");
				
				$output=array( "code" => "200", "msg" => $array_out);
				print_r(json_encode($output, true));
			}
			else
			{
			    //echo mysqli_error();
			    $array_out = array();
					
        		 $array_out[] = 
        			array(
        			"response" =>"problem in signup");
        		
        		$output=array( "code" => "201", "msg" => $array_out);
        		print_r(json_encode($output, true));
			}
			
			
			
			

			
			
			
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
	
	function admin_getSoundSection()
	{
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		
		$query=mysqli_query($conn,"select * from sound_section");
		        
		$array_out = array();
		while($row=mysqli_fetch_array($query))
		{
		     
		   	 $array_out[] = 
				array(
					"id" => $row['id'],
					"section_name" => $row['section_name'],
					"created" => $row['created']
				);
			
		}
		$output=array( "code" => "200", "msg" => $array_out);
		print_r(json_encode($output, true));
	}
	
	
	function admin_show_allVideos()
	{
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
	
		$query=mysqli_query($conn,"select * from videos order by id DESC");
	        
		$array_out = array();
		while($row=mysqli_fetch_array($query))
		{
		    
		    $query1=mysqli_query($conn,"select * from users where fb_id='".$row['fb_id']."' ");
	        $rd=mysqli_fetch_object($query1);
	       
	        $query112=mysqli_query($conn,"select * from sound where id='".$row['sound_id']."' ");
	        $rd12=mysqli_fetch_object($query112);
	        
	        $countLikes = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' ");
            $countLikes_count=mysqli_fetch_assoc($countLikes);
	        
	        $countcomment = mysqli_query($conn,"SELECT count(*) as count from video_comment where video_id='".$row['id']."' ");
            $countcomment_count=mysqli_fetch_assoc($countcomment);
            
            
            $liked = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' and fb_id='".$row['fb_id']."' ");
            $liked_count=mysqli_fetch_assoc($liked);
	        
    	   	$array_out[] = 
    			array(
    			"id" => $row['id'],
    			"fb_id" => $row['fb_id'],
    			"user_info" =>array
        					(
        					    "first_name" => $rd->first_name,
        					    "username" => $rd->username,
                    			"last_name" => $rd->last_name,
                    			"profile_pic" => $rd->profile_pic
        					),
        		"count" =>array
        					(
        					    "like_count" => $countLikes_count['count'],
                    			"video_comment_count" => $countcomment_count['count']
        					),
        		"liked"=> $liked_count['count'],			
        	    "video" => $row['video'],
    			"thum" => $row['thum'],
    			"gif" => $row['gif'],
    			"section" => $row['section'],
    			"sound" =>array
        					(
        					    "id" => $rd12->id,
        					    "audio_path" => 
                        			array(
                            			"mp3" => $API_path."/upload/audio/".$rd12->id.".mp3",
                			            "acc" => $API_path."/upload/audio/".$rd12->id.".aac"
                            		),
                    			"sound_name" => $rd12->sound_name,
                    			"description" => $rd12->description,
                    			"thum" => $rd12->thum,
                    			"section" => $rd12->section,
                    			"created" => $rd12->created,
        					),
    			"created" => $row['created']
    		);
			
		}
		$output=array( "code" => "200", "msg" => $array_out);
		print_r(json_encode($output, true));
	}
	
	
	function get_user_data()
	{
	   
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
	    
	    $fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
		$query=mysqli_query($conn,"select * from users where fb_id='".$fb_id."' ");
	   
		$array_out = array();
		while($row=mysqli_fetch_array($query))
		{
		    
		    $array_out[] = 
    			array(
    			"fb_id" => $row['fb_id'],
    			"username" => $row['username'],
    			"first_name"=> $row['first_name'],			
        	    "last_name" => $row['last_name'],
    			"gender" => $row['gender'],
    			"bio" => $row['bio'],
    			"profile_pic" => $row['profile_pic'],
    			"created" => $row['created']
    		);
			
		}
		$output=array( "code" => "200", "msg" => $array_out);
		print_r(json_encode($output, true));
	}
	
	function changePassword()
	{
	    
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
	    
	    //print_r($event_json);
		
		if(isset($event_json['new_password']) && isset($event_json['old_password']))
		{
			$old_password=strip_tags($event_json['old_password']);
			$new_password=strip_tags($event_json['new_password']);
		    
		    die();
		    
		    $qrry_1="select * from admin where pass ='".md5($old_password)."' ";
			$log_in_rs=mysqli_query($conn,$qrry_1);
			$rd=mysqli_fetch_object($log_in_rs);
			
			if($rd->id!="")
			{
			    $qrry_1="update admin SET pass ='".md5($new_password)."' where id='".$rd->id."'  ";
    			if(mysqli_query($conn,$qrry_1))
    			{
    			    $array_out = array();
    					
            		 $array_out[] = 
            			array(
            			"response" =>"success");
            		
            		$output=array( "code" => "200", "msg" => $array_out);
            		print_r(json_encode($output, true));
    			}
    			else
    			{
    			    $array_out = array();
    					
            		 $array_out[] = 
            			array(
            			"response" =>"problem in updating");
            		
            		$output=array( "code" => "201", "msg" => $array_out);
            		print_r(json_encode($output, true));
    			}
			}
			else
			{
			    $array_out = array();
					
        		 $array_out[] = 
        			array(
        			"response" =>"problem in updating");
        		
        		$output=array( "code" => "201", "msg" => $array_out);
        		print_r(json_encode($output, true));
			}
			
			
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	    
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	 function make_following()
	{   
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true);
	    $array_out      = array();
	    $fb_id          = $event_json['fb_id'];
	    $followed_fb_id = $event_json['followed_fb_id'];
	    
	    
	    $query          = mysqli_query($conn,"select * from follow_users WHERE  fb_id = '$fb_id' AND followed_fb_id = '$followed_fb_id'");
	    if(mysqli_num_rows($query) > 0)
	    {
	       $output         = array( "code" => "500", "msg" => 'Already follwed');
	        
	    }else
	    {
	        $qrry_1="insert into follow_users(fb_id,followed_fb_id)values(";
			$qrry_1.="'".$fb_id."',";
			$qrry_1.="'".$followed_fb_id."'";
			$qrry_1.=")";
			if(mysqli_query($conn,$qrry_1))
			{
			 $output         = array( "code" => "200", "msg" => 'Successfully Following');   
			}else
			{
			    $output         = array( "code" => "500", "msg" => 'Something went wrong');
			}
	    }

		 print_r(json_encode($output, true));   
	}
	
	function make_following1()
	{   
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true);
	    $array_out      = array();
	    $fb_id          = $event_json['fb_id'];
	    $followed_fb_id = $event_json['followed_fb_id'];
	    
	    
	    $query          = mysqli_query($conn,"select * from follow_users WHERE  fb_id = '$fb_id' AND followed_fb_id = '$followed_fb_id'");
	    if(mysqli_num_rows($query) > 0)
	    {
	       $row=mysqli_fetch_assoc($query);
	       $id=$row['id'];
	       $query1= mysqli_query($conn,"DELETE  from follow_users WHERE  id = '$id'");
	       if($query1){
	           $output         = array( "code" => "200", "msg" => 'Unfollow');
	       }
	       
	        
	    }else
	    {
	        $qrry_1="insert into follow_users(fb_id,followed_fb_id)values(";
			$qrry_1.="'".$fb_id."',";
			$qrry_1.="'".$followed_fb_id."'";
			$qrry_1.=")";
			if(mysqli_query($conn,$qrry_1))
			{
			 $output         = array( "code" => "200", "msg" => 'Follow');   
			}else
			{
			    $output         = array( "code" => "500", "msg" => 'Something went wrong');
			}
	    }

		 print_r(json_encode($output, true));   
	}
	
	function chack_following()
	{   
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true);
	    $array_out      = array();
	    $fb_id          = $event_json['fb_id'];
	    $followed_fb_id = $event_json['followed_fb_id'];
	    
	    
	    $query          = mysqli_query($conn,"select * from follow_users WHERE  fb_id = '$fb_id' AND followed_fb_id = '$followed_fb_id'");
	    if(mysqli_num_rows($query) > 0)
	    {
	       $output         = array( "code" => "200", "msg" => 'Follow');
	        
	    }else
	    {
	       $output         = array( "code" => "500", "msg" => 'Not Follow'); 
	    }

		 print_r(json_encode($output, true));   
	}
	
	
	
		 function selected_video()
	{   
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true);
	    $array_out      = array();
	    $video_id       = $event_json['video_id'];
	    $query          = mysqli_query($conn,"select * from videos WHERE  id = '$video_id' ");
	    //echo  "select * from videos WHERE  video_id = '$video_id' ";die;
	    $video          =  array();
	    if(mysqli_num_rows($query) > 0)
	    {
	       while($data = mysqli_fetch_assoc($query))
	       {
	        $video[] =  $data;  
	       }
	   
	     $output = array( 'status'=>200,'code'=>true, 'video'=> $video);
	    }else
	    {
            $output = array( 'status'=>500,'code'=>false, 'video'=> 0)  ; 
	    }

		 print_r(json_encode($output, true));   
	}
	
	
	
	
	 function comment_with_return()
	{   
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true);
	    $array_out      = array();
	    $comment_arr      = array();
	    $video_id       = $event_json['video_id'];
	    $comment        = $event_json['comment'];
	    $fb_id          = $event_json['fb_id'];
        if($comment=='' || $comment == 'null')
	    {   
	        //echo "select * from video_comment WHERE  video_id = '$video_id'  order by id DESC";die;
            $query          = mysqli_query($conn,"select * from video_comment WHERE  video_id = '$video_id'  order by id DESC");
            $comment        =  array();
            if(mysqli_num_rows($query) > 0)
            {
                while($data = mysqli_fetch_assoc($query))
                {
                $comment_arr[] =  $data;  
                }
                $output = array( 'status'=>200,'code'=>true, 'video'=> $comment_arr);
            }else
            {
                $output = array( 'status'=>500,'code'=>false, 'video'=> 0)  ; 
            }    
	    }
	    else
	    {
	     	$qrry_1="insert into video_comment(video_id,fb_id,comments)values(";
			$qrry_1.="'".$video_id."',";
			$qrry_1.="'".$fb_id."',";
			$qrry_1.="'".$comment."'";
			$qrry_1.=")"; 
			
			//ECHO $qrry_1;DIE;
			if(mysqli_query($conn,$qrry_1))
			{
        		$query          = mysqli_query($conn,"select * from video_comment WHERE  video_id = '$video_id'  order by id DESC");
        	    $comment        =  array();
        	    if(mysqli_num_rows($query) > 0)
        	    {
        	       while($data = mysqli_fetch_assoc($query))
        	       {
        	        $comment_arr[] =  $data;  
        	       }
        	   
        	     $output = array( 'status'=>200,'code'=>true, 'all_comment'=> $comment_arr);
        	    }else
        	    {
                    $output = array( 'status'=>500,'code'=>false, 'video'=> 0)  ; 
        	    } 
			} 
	    }
	    


		 print_r(json_encode($output, true));   
	}
	
	


	
		 function all_gifts_list()
	{   
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true);
	    $array_out      = array();
	    //$video_id     = $event_json['video_id'];
	    $uuu            = 'http://fworldgroup.com/fworlfinal/Admin%20panel/tictic/gift_img/';
	    $query          = mysqli_query($conn,"select gifts.*,concat('$uuu',icon) as iconn from gifts ");
	    $video          =  array();
	    if(mysqli_num_rows($query) > 0)
	    {
	       while($data = mysqli_fetch_assoc($query))
	       {
	         $video[] =  $data;  
	       }
	   
	     $output = array( 'status'=>200,'code'=>true, 'video'=> $video);
	    }else
	    { 
            $output = array( 'status'=>500,'code'=>false, 'video'=> 0)  ; 
	    }

		 print_r(json_encode($output, true));   
	}
	
		
		 function my_wallet()
	{   
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true);
	    $array_out      = array();
	    $fb_id     = $event_json['fb_id'];
	    $query          = mysqli_query($conn,"select * from users where fb_id = '$fb_id' ");
	    $user_data          =  array();
	    if(mysqli_num_rows($query) > 0)
	    {
	       while($data = mysqli_fetch_assoc($query))
	       {
	         $user_data[] =  $data;  
	       }
	   
	     $output = array( 'status'=>200,'code'=>true, 'user_data'=> $user_data);
	    }else
	    { 
            $output = array( 'status'=>500,'code'=>false, 'video'=> 0)  ; 
	    }

		 print_r(json_encode($output, true));   
	}

		 function diamond_to_buy()
	{   
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	   // $event_json     = json_decode($input,true);
	    $array_out      = array();
	    //$fb_id     = $event_json['fb_id'];
	    $query          = mysqli_query($conn,"select * from diamond");
	    $user_data          =  array();
	    if(mysqli_num_rows($query) > 0)
	    {
	       while($data = mysqli_fetch_assoc($query))
	       {
	         $user_data[] =  $data;  
	       }
	   
	     $output = array( 'status'=>200,'code'=>true, 'user_data'=> $user_data);
	    }else
	    { 
            $output = array( 'status'=>500,'code'=>false, 'video'=> 0)  ; 
	    }

		 print_r(json_encode($output, true));   
	}
	
	
			 function search_user()
	{   
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true);
	    $array_out      = array();
	    $key     = $event_json['key']; 
	    $fb_id   = $event_json['fb_id']; 
	   // echo "select * from users where username  LIKE '%$key%' OR first_name LIKE '%$key%'  OR last_name LIKE '%$key%'
	   	                                //group by id";die;
	   	 $query          = mysqli_query($conn,"select * from users where username  LIKE '$key%' OR first_name LIKE '$key%' 
	   	                              OR last_name LIKE '$key%'
	   	                                group by id"); 
	   	                               // ECHO "select * from users where username  LIKE '$key%' OR first_name LIKE '$key%'  OR last_name LIKE '$key%'
	   	                               // group by id";DIE;
	   	                                
	    $user_data          =  array();
	    if(mysqli_num_rows($query) > 0)
	    {
	       while($data = mysqli_fetch_assoc($query))
	       {
	         $followStatus   = 0 ;
	         	         $checkFbId      = $data['fb_id'];
	         $query99          = mysqli_query($conn,"select * from follow_users where fb_id = '$fb_id' AND followed_fb_id = '$checkFbId'"); 
	         $checkData      = mysqli_fetch_assoc($query99);
	         if(empty($checkData))
	         {$followStatus = 0;}else{$followStatus = 1;}

               $user_data1['id']    =  $data['id'];
	         $user_data1['fb_id']    =  $data['fb_id'];
	         $user_data1['mobile'] =  $data['mobile'];
	         $user_data1['total_diamondd'] =  $data['total_diamondd'];
	         $user_data1['username'] =  $data['username'];
	         $user_data1['first_name'] =  $data['first_name'];
	         $user_data1['last_name'] =  $data['last_name'];
	         $user_data1['last_name'] =  $data['last_name'];
	         $user_data1['team_name'] =  $data['team_name'];
	         
	          $user_data1['profile_pic'] =  $data['profile_pic'];
	           $user_data1['cover_pic'] =  $data['cover_pic'];
	            $user_data1['official'] =  $data['official'];
	           
	         $user_data1['email'] =  $data['email'];
	         $user_data1['vip_status'] =  $data['vip_status'];
	         $user_data1['total_earning'] =  $data['total_earning'];
	    
	         
	         $user_data1['follow_status']   =  $followStatus;
	         array_push($user_data,$user_data1);
	       }
	   
	     $output = array( 'status'=>200,'code'=>true, 'user_data'=> $user_data);
	    }else
	    { 
            $output = array( 'status'=>500,'code'=>false, 'video'=> 0)  ; 
	    }

		 print_r(json_encode($output, true));   
	}
	




	
		 function update_my_diamond()
	{   
	    require_once("config.php");
	    date_default_timezone_set('Asia/Kolkata');
	    $input     = @file_get_contents("php://input");
	    $event_json= json_decode($input,true);
	    //echo $input;
	    //echo "<Pre>";print_r($event_json);die;
	    $array_out = array();
	    $today     = date('d-m-Y H:i');
	    $fb_id     = $event_json['fb_id'];
	    $user_id   = $event_json['user_id'];
	    $diamond   = $event_json['diamond'];
	    $price     = $event_json['price'];
	    $pay_u_tx_id= $event_json['pay_u_tx_id'];
	    $tx_id      = 'TX#'.rand(); 
	    $uuu        = 'http://ourhippy.com/fworlfinal/Admin%20panel/tictic/gift_img/';
	    $query      =  mysqli_query($conn,"UPDATE users SET  total_diamondd = total_diamondd + '$diamond' WHERE fb_id = '$fb_id' ");
	    if($query  == true)
	    {
	     $query3   = mysqli_query($conn,"INSERT INTO add_diamond_history (tx_id,fb_id,diamond,price,pay_u_tx_id,data,date)
    	                    VALUES('$tx_id','$fb_id','$diamond','$price','$pay_u_tx_id','$input','$today')");
	     $output   = array( 'status'=>200,'code'=>true, 'msg'=> 'Update Successfully');
	    }else
	    { 
            $output = array( 'status'=>500,'code'=>false, 'msg'=> 'Something went wrong')  ; 
	    }

		 print_r(json_encode($output, true));   
	}





		 function user_gift_history()
	{   
	    require_once("config.php");
	    date_default_timezone_set('Asia/Kolkata');
	    $input       = @file_get_contents("php://input");
	    $event_json  = json_decode($input,true);
	    $array_out   = array();
       $today       =  date('Y-m-d');
        $real_date   =date('Y-m-d H:i:s', time());
	    $s_fb_id     = $event_json['s_fb_id'];
	    $r_fb_id     = $event_json['r_fb_id'];
	    $gift_id     = $event_json['gift_id'];
	    $diamond     = $event_json['diamond'];
	     $action     = $event_json['action'];
	      $room_id     = $event_json['room_id'];
	       $room_name     = $event_json['room_name'];
	       
        if($s_fb_id != '' && $s_fb_id != 'null'  && $r_fb_id != '' && $r_fb_id != 'null' && $gift_id != '' && $gift_id != 'null' && $diamond != '' && $diamond !='null' )
        {   
            $sender_diamond = mysqli_query($conn,"select total_diamondd,total_earning from users where fb_id = '$s_fb_id' ");
            if(mysqli_num_rows($sender_diamond) > 0)
            {
                while($data_sender_diamond = mysqli_fetch_assoc($sender_diamond))
                {
                 $exist_sender_diamond     = $data_sender_diamond['total_diamondd']; 
                 
                }
            }
            if($exist_sender_diamond > $diamond )
    	    {
$getGiftAMT = mysqli_query($conn,"select amt from gifts where gifts_id = '$gift_id' ");
$amt_of_gift = mysqli_fetch_assoc($getGiftAMT);
$amt = $amt_of_gift['amt'];
$after_5prt = ($amt*5)/100;
//echo $after_5prt;die;
			$expo    = 15;
$expo2    = 5;
//echo "UPDATE users SET  total_diamondd = total_diamondd + '$diamond' , total_earning = total_earning + '$after_5prt' WHERE fb_id = '$r_fb_id' ";die;
    $query99          = mysqli_query($conn,"INSERT INTO expo_history (user_id,action,expo,date)VALUES('$r_fb_id','Get Normal Gift','$expo','$today')");

    	     $query1          = mysqli_query($conn,"UPDATE users SET total_earning = total_earning + '$after_5prt'
    	                                      ,total_expo = total_expo + '$expo2' WHERE fb_id = '$r_fb_id' ");     
    	     $query2          = mysqli_query($conn,"UPDATE users SET  total_diamondd = total_diamondd - '$diamond' WHERE fb_id = '$s_fb_id' ");
    	     $query3          = mysqli_query($conn,"INSERT INTO user_gift_history (room_id,room_name,sender_id,receiver_id,gift_id,diamond,date,action,total_geted,real_date)
    	                                   VALUES('$room_id','$room_name','$s_fb_id','$r_fb_id','$gift_id','$diamond','$today','$action','$after_5prt','$real_date')");
    	                               
    	     $queryForEarningHisory = mysqli_query($conn,"INSERT INTO earning__history (sender_id,receiver_id,gift_id,diamond,toal_amount,date)
    	                                   VALUES('$s_fb_id','$r_fb_id','$gift_id','$diamond','$after_5prt','$today')");    	                                   
    	                                   
    	                                   
    	     if($query3 == true)
    	     $output = array( 'status'=>200,'code'=>true, 'msg'=> 'Update Successfully');
    	     else
    	     $output = array( 'status'=>500,'code'=>false, 'msg'=> 'Something went wrong');
    	    }else
    	    { 
                $output = array( 'status'=>500,'code'=>false, 'msg'=> 'Not enough diamond in sender account')  ; 
    	    }
        }else
        {
         $output = array( 'status'=>500,'code'=>false, 'msg'=> 'Required field missing')  ;    
        }
		 print_r(json_encode($output, true));   
	}
	
	
	
	 function reedeem_request()
	{   
	    require_once("config.php");
	    date_default_timezone_set('Asia/Kolkata');
	    $input       = @file_get_contents("php://input");
	    $event_json  = json_decode($input,true);
	    $array_out   = array();
        $today       = date('d-m-Y H:i');
	    
	    $fb_id       = $event_json['fb_id'];
	    $diamond     = $event_json['diamond'];
	    $note        = $event_json['note'];
        if($fb_id != '' && $fb_id != 'null'  && $diamond != '' && $diamond !='null' )
        {   
            $sender_diamond = mysqli_query($conn,"select total_diamondd from users where fb_id = '$fb_id' ");
            if(mysqli_num_rows($sender_diamond) > 0)
            {
                while($data_sender_diamond = mysqli_fetch_assoc($sender_diamond))
                {
                 $exist_sender_diamond     = $data_sender_diamond['total_diamondd']; 
                }
            }
            if($exist_sender_diamond > $diamond )
    	    {
    	     $query3          = mysqli_query($conn,"INSERT INTO reedeem_request (fb_id,diamond,status,date,note)
    	                                   VALUES('$fb_id','$diamond','Pending','$today','$note')");
    	     if($query3 == true)
    	     $output = array( 'status'=>200,'code'=>true, 'msg'=> 'Reedeem Request Successfully');
    	     else
    	     $output = array( 'status'=>500,'code'=>false, 'msg'=> 'Something went wrong');
    	    }else
    	    { 
                $output = array( 'status'=>500,'code'=>false, 'msg'=> 'Not enough diamond in Your account')  ; 
    	    }
        }else
        {
         $output = array( 'status'=>500,'code'=>false, 'msg'=> 'Required field missing')  ;    
        }
		 print_r(json_encode($output, true));   
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	 function login_usig_mobile()
	{   
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true);
	    $data           = array(); 
	    $mobile         = $event_json['mobile'];
	    $otp            = rand(1000,10000);
	    
	    # TO SNED OTP
        $message = urlencode('FWORLD: Please Do not show your OTP with anyone else. '.$otp);
      
        $ch      = curl_init('http://msg.pwasms.com/app/smsapi/index.php?key=45E8C845640108&campaign=0&routeid=69&type=text&contacts='.$mobile.'&senderid=SJSMTH&msg='.$message.'');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data   = curl_exec($ch);
        //print_r($data);die;
        curl_close($ch);
	    
	    $query          = mysqli_query($conn,"select * from users WHERE  mobile = '$mobile' ");
	    if(mysqli_num_rows($query) > 0)
	    {
	        $data   = mysqli_fetch_assoc($query);
	        $output = array( "code" => "200", "msg" => 'Already Registered','otp'=> $otp,'data' => $data);
	        
	    }else
	    {
            $output = array( "code" => "500", "msg" => 'Not Registered','otp'=> $otp);
	    }

		 print_r(json_encode($output, true));   
	}
	
	
	 function signup_usig_mobile()
	{   
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true);
	    $data           = array(); 
	    $mobile         = $event_json['mobile'];
	    $otp            = rand(1000,10000);
	    $query          = mysqli_query($conn,"select * from users WHERE  mobile = '$mobile' ");
	    if(mysqli_num_rows($query) > 0)
	    {
	        $data   = mysqli_fetch_assoc($query);
	        $output = array( "code" => "200", "msg" => 'Already Registered','otp'=> $otp,'data' => $data);
	        
	    }else
	    { 
	         $output  = array( "code" => "200", "msg" => 'Now Registered','otp'=> $otp,'data' => $data);
	        
	        $fb_id    = rand(1000000000000000,10000000000000000);
	        $username = 'HIPPY'.$otp;
	        $qrry_1="insert into users(fb_id,mobile,username)values(";
			$qrry_1.="'".$fb_id."',";
			$qrry_1.="'".$mobile."',";
			$qrry_1.="'".$username."'";
			$qrry_1.=")";
			if(mysqli_query($conn,$qrry_1))
			{
			 $query   = mysqli_query($conn,"select * from users WHERE  mobile = '$mobile' ");
			 $data    = mysqli_fetch_assoc($query);
	         $output  = array( "code" => "200", "msg" => 'Now Registered','otp'=> $otp,'data' => $data);
			}else
			{
             $output = array( "code" => "500", "msg" => 'something went wrong','otp'=> $otp);
			}
			
			    
		}
		 print_r(json_encode($output, true));   
	}










	 function signup_usig_truecaller()
	{   
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true);
	    $data           = array(); 
	    $mobile         = $event_json['mobile'];
	    $email          = $event_json['email'];
	    $name           = $event_json['name'];
	    $otp            = rand(1000,10000);
	    $query          = mysqli_query($conn,"select * from users WHERE  mobile = '$mobile' ");
	    if(mysqli_num_rows($query) > 0)
	    {
	        $data   = mysqli_fetch_assoc($query);
	        $output = array( "code" => "200", "msg" => 'Already Registered','otp'=> $otp,'data' => $data);
	        
	    }else
	    { 
	         $output  = array( "code" => "200", "msg" => 'Now Registered','otp'=> $otp,'data' => $data);
	        
	        $fb_id    = rand(1000000000000000,10000000000000000);
	        $username = $name.$fb_id;
	        $qrry_1="insert into users(fb_id,mobile,username,first_name,last_name)values(";
			$qrry_1.="'".$fb_id."',";
			$qrry_1.="'".$mobile."',";
			$qrry_1.="'".$name."',";
			$qrry_1.="'".$name."',";
			$qrry_1.="'".$username."'";
			$qrry_1.=")";
			if(mysqli_query($conn,$qrry_1))
			{
			 $query   = mysqli_query($conn,"select * from users WHERE  mobile = '$mobile' ");
			 $data    = mysqli_fetch_assoc($query);
	         $output  = array( "code" => "200", "msg" => 'Now Registered','otp'=> $otp,'data' => $data);
			}else
			{
             $output = array( "code" => "500", "msg" => 'something went wrong','otp'=> $otp);
			}
			
			    
		}
		 print_r(json_encode($output, true));   
	}










		 function now_register_WRONG()
	{   
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true);
	    $data           = array(); 
	    $mobile         = $event_json['mobile'];
	    $otp            = rand(1000,10000);
	    $query          = mysqli_query($conn,"select * from users WHERE  mobile = '$mobile' ");
	    if(mysqli_num_rows($query) > 0)
	    {
	        $data   = mysqli_fetch_assoc($query);
	        $output = array( "code" => "200", "msg" => 'Already Registered','otp'=> $otp,'data' => $data);
	        
	    }else
	    { 
	         $output  = array( "code" => "200", "msg" => 'Now Registered','otp'=> $otp,'data' => $data);
	        
	        $fb_id    = rand(1000000000000000,10000000000000000);
	        $username = 'HIPPY'.$otp;
	        $qrry_1="insert into users(fb_id,mobile,username)values(";
			$qrry_1.="'".$fb_id."',";
			$qrry_1.="'".$mobile."',";
			$qrry_1.="'".$username."'";
			$qrry_1.=")";
			if(mysqli_query($conn,$qrry_1))
			{
			 $query   = mysqli_query($conn,"select * from users WHERE  mobile = '$mobile' ");
			 $data    = mysqli_fetch_assoc($query);
	         $output  = array( "code" => "200", "msg" => 'Now Registered','otp'=> $otp,'data' => $data);
			}else
			{
             $output = array( "code" => "500", "msg" => 'something went wrong','otp'=> $otp);
			}
			
			    
		}
		 print_r(json_encode($output, true));   
	}















	
	function selected_user_info()
	{   
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true);
	    $array_out      = array();
	    $fb_id          = $event_json['fb_id'];
	   $query          = mysqli_query($conn,"select * from users where  fb_id = '$fb_id'"); 
	   	                                
	    $user_data          =  array();
	    if(mysqli_num_rows($query) > 0)
	    {
	       while($data = mysqli_fetch_assoc($query))
	       {
	         $user_data[] =  $data;  
	       }
	    
	     $query1 = mysqli_query($conn,"select count(id) as mene_follow_kiye from follow_users   where fb_id = '$fb_id'");
	     $data1  = mysqli_fetch_assoc($query1);
	     $mene_follow_kiye  = $data1['mene_follow_kiye'];
	     
	     $query12  = mysqli_query($conn,"select count(id) as mujhe_follow_kiye from follow_users   where followed_fb_id = '$fb_id'");
	     $data12   = mysqli_fetch_assoc($query12);
	     $mujhe_follow_kiye  = $data12['mujhe_follow_kiye'];
	     
	     $query13  = mysqli_query($conn,"select count(id) as mujhe_follow_kiye from follow_users   where followed_fb_id = '$fb_id'");
	     $data13   = mysqli_fetch_assoc($query13);
	     $mujhe_follow_kiye  = $data13['mujhe_follow_kiye'];
	     
	     $output = array( 'status'=>200,'code'=>true,'mene_follow_kiye'=>$mene_follow_kiye,'mujhe_follow_kiye'=>$mujhe_follow_kiye, 'user_data'=> $user_data);
	    }else
	    { 
            $output = array( 'status'=>500,'code'=>false, 'video'=> 0)  ; 
	    }

		 print_r(json_encode($output, true));   
	}
	
	
	
	
	
	
	
	
		 function level_to()
	{   
	    
	    require_once("config.php");
	    $img_url        = $GLOBALS['url'];
	    $input          = @file_get_contents("php://input");
	   	$event_json     = json_decode($input,true);
	    $array_out      = array();
	    $fb_id          = $event_json['fb_id'];
$user_data1   =  array();
$query1        = mysqli_query($conn,"select fb_id,id from videos where fb_id = '$fb_id'");
if(mysqli_num_rows($query1) > 0)
{
   while($data1 = mysqli_fetch_assoc($query1))
   {
     $user_data1[] =  $data1;
        $video_id   = $data1['id'];
        
         #SECOND DATA START
         $user_data12   =  array();
         $query12        = mysqli_query($conn,"select id from video_like_dislike where video_id = '$video_id' AND action = 1");
         if(mysqli_num_rows($query12) > 0)
         {
           while($data12 = mysqli_fetch_assoc($query12))
           {
            $user_data12[] =  $data12;
           }
         }  
         #SECOND DATA END
   }
}   
     $my_total_like =count($user_data12);
         # CODE TO FIND MY LEVEL 
        
        $query99    = mysqli_query($conn,"select level.*,concat('$img_url',icon)as image from level WHERE likes_count <= '$my_total_like'
                                    ORDER BY level_id DESC LIMIT 1");
	    $user_data99=  array();
	    if(mysqli_num_rows($query99) > 0)
	    {
	       while($data99 = mysqli_fetch_assoc($query99))
	       {
	         $user_data99[] =  $data99;  
	       }
	       
	    }    
        #END OF CODE TO FIND MY LEVEL
	   
	    $query          = mysqli_query($conn,"select level.*,concat('$img_url',icon)as image from level");
	    $user_data          =  array();
	    if(mysqli_num_rows($query) > 0)
	    {
	       while($data = mysqli_fetch_assoc($query))
	       {
	         $user_data[] =  $data;  
	       }
	   
	     $output = array( 'status'=>200,'code'=>true,'my_total_like'=>$my_total_like,'my_level'=>$user_data99, 'list_of_level'=> $user_data);
	    }else
	    { 
            $output = array( 'status'=>500,'code'=>false, 'video'=> 0)  ; 
	    }

		 print_r(json_encode($output, true));   
	}
	
	
	
	
	
	
	
	
	
	
	  function leader_board()
	{   
	    
	    require_once("config.php");
	    $img_url        = $GLOBALS['url'];
	   	$event_json     = json_decode($input,true);
	 


# FIRST DATA START FROM HERE 

$query0        = mysqli_query($conn,"select * from users");
if(mysqli_num_rows($query0) > 0)
{
   $user_data0   =  array();
     	$outer_array    = array();
   while($data0  = mysqli_fetch_assoc($query0))
   {
     $user_data0[] = $data0;
           $fb_id  = $data0['fb_id'];
           $outer_array[]['info']=$data0;
	        # SECOND DATA START FROM HERE 
            $user_data1   =  array();
            $query1       = mysqli_query($conn,"select fb_id,id from videos where fb_id = '$fb_id'");
            if(mysqli_num_rows($query1) > 0)
            {
               while($data1 = mysqli_fetch_assoc($query1))
               {
                 $user_data1[] =  $data1;
                     $video_id   = $data1['id'];
                     $outer_array[]['video']=$data1;
                     # THIRD  DATA START
                     $user_data12   =  array();
                     $query12        = mysqli_query($conn,"select id from video_like_dislike where video_id = '$video_id' AND action = 1");
                     if(mysqli_num_rows($query12) > 0)
                     {
                       while($data12 = mysqli_fetch_assoc($query12))
                       {
                         $user_data12[] =  $data12;
                         $outer_array[]['likes']=$data12;
                         
                       }

                     }  
                     #THIRD DATA END
               }
            }
            //$outer_array['info']  = $user_data0;
            //$outer_array['video'] = $user_data1;
            //$outer_array['likes'] = $user_data12;
            # SECOND DATA END HERE
   }

}
//echo "<pre>";print_r($outer_array);die;
# FIRST DATA END

        $output = array( 'status'=>500,'code'=>false, 'data'=> $outer_array)  ; 
		 print_r(json_encode($output, true));   
	}
	
	
	
	
	
	 function actual_leadaer_boardOLD()
	{
	    $out_put_data = array();
	    $sql = "SELECT u.mobile,u.username,u.first_name,u.last_name,u.profile_pic,u.id,u.fb_id,u.first_name, COUNT(l.id) as tot_like 
	            FROM users u JOIN videos v ON u.fb_id = v.fb_id JOIN video_like_dislike l on l.video_id= v.id 
	            GROUP by u.fb_id ORDER by tot_like DESC";
	            //echo $sql;die;
	        	$outer_array    = array();
	   $query       = mysqli_query($conn ,$sql);    	
       while($data  = mysqli_fetch_assoc($query))
       {
          $out_put_data[] = $data; 
       }
       
         $output = array( 'status'=>200,'code'=>true, 'data'=> $out_put_data)  ; 
		 print_r(json_encode($output, true));  
	}
	
	 function actual_leadaer_board()
	{   
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    //$event_json     = json_decode($input,true);
	    $array_out      = array();
	    //$fb_id     = $event_json['fb_id'];
	    $query          = mysqli_query($conn,"SELECT u.mobile,u.username,u.first_name,u.last_name,u.profile_pic,u.id,u.fb_id,u.official,u.first_name, COUNT(l.id) as tot_like 
	            FROM users u JOIN videos v ON u.fb_id = v.fb_id JOIN video_like_dislike l on l.video_id= v.id 
	            GROUP by u.fb_id ORDER by tot_like DESC");
	    $user_data          =  array();
	    if(mysqli_num_rows($query) > 0)
	    {
	       while($data = mysqli_fetch_assoc($query))
	       {
	         $user_data[] =  $data;  
	       }
	   
	     $output = array( 'status'=>200,'code'=>true, 'user_data'=> $user_data);
	    }else
	    { 
            $output = array( 'status'=>500,'code'=>false, 'user_data'=> $user_data)  ; 
	    }

		 print_r(json_encode($output, true));   
	}
	
	
	
	
		
	 function get_hash()
	{   
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true);
	    $array_out      = array();
	    $key     = $event_json['key'];
	    $keyy = '#'.$key;
	   // echo "select * from users where username  LIKE '%$key%' OR first_name LIKE '%$key%'  OR last_name LIKE '%$key%'
	   	                                //group by id";die;
	   	 /*
	   	 $sql ="SELECT v.description, COUNT(l.id) as tot_like FROM users u 
	   	        LEFT JOIN videos v ON u.fb_id = v.fb_id
	   	        RIGHT JOIN video_like_dislike l on l.video_id= v.id
	   	        WHERE v.description like '%$keyy%' 
	   	        GROUP by u.fb_id ORDER by tot_like DESC"; 
	   	         echo $sql;die;
	   	         
	   	         */
	     $sql = "SELECT v.description, COUNT(l.id) as tot_like FROM users u left JOIN videos v ON u.fb_id = v.fb_id
	             LEFT JOIN video_like_dislike l on l.video_id= v.id WHERE v.`description`
	             LIKE '$keyy%' GROUP by u.fb_id 
	             ORDER by tot_like DESC";    
	   	 $query          = mysqli_query($conn,$sql); 
	   	                                
	    $user_data          =  array();
	    if(mysqli_num_rows($query) > 0)
	    {
	       while($data = mysqli_fetch_assoc($query))
	       {
	         $user_data[] =  $data;  
	       }
	   
	     $output = array( 'status'=>200,'code'=>true, 'user_data'=> $user_data);
	    }else
	    { 
            $output = array( 'status'=>500,'code'=>false, 'video'=> 0)  ; 
	    }

		 print_r(json_encode($output, true));   
	}
	
    function userprofile()
    {
        require_once("config.php");
        $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true);
	    $data      = array();
	    $fb_id=$event_json['fb_id'];
	    $sql="SELECT * FROM users where `fb_id`='$fb_id'";
        $query=mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($query)>0)
        { 
            $row=mysqli_fetch_assoc($query);
            $data[]=$row;
           // echo "select sum(total_geted) as total from user_gift_history where  receiver_id = '$fb_id' ";die;
              	$query          = mysqli_query($conn,"select sum(diamond) as total from user_gift_history where  receiver_id = '$fb_id' "); 
        	    while($data1 = mysqli_fetch_assoc($query))
                {
                 $topfans[] =  $data1; 
                }
                
                $query          = mysqli_query($conn,"select sum(diamond) as total from user_gift_history where  sender_id = '$fb_id' "); 
        	    while($data2 = mysqli_fetch_assoc($query))
                {
                 $topcontribution[] =  $data2; 
                }
                
                
                $query3          = mysqli_query($conn,"select count(cover_pic_history_id) as total from cover_pic_history where  fb_id = '$fb_id' "); 
        	    while($data23 = mysqli_fetch_assoc($query3))
                {
                 $topcoverpics[] =  $data23; 
                }
                
                
                $my_total_video = array();
                $query34         = mysqli_query($conn,"select count(fb_id) as total from video where  fb_id = '$fb_id' "); 
        	    while($data234   = mysqli_fetch_assoc($query34))
                {
                 $my_total_video[] =  $data234; 
                }
                
                
                $socilLink = array();
                 $query90          = mysqli_query($conn,"SELECT * FROM `sociallink` WHERE fb_id = '$fb_id'  "); 
        	    while($data190 = mysqli_fetch_assoc($query90))
                {
                 $socilLink[] =  $data190; 
                } 
               // echo "<pre>";print_r($topfans);die;
               
               if($topcontribution[0]['total'] == '' )
               {$totcontion = 0;}else{$totcontion=$topcontribution[0]['total'];}
              $output = array( 'status'=>200,'code'=>true, 'user_data'=> $data,'topfanscount'=>$topfans[0]['total'],
              'topcontributioncount'=>$totcontion
                              ,'totalcoverpics' =>$topcoverpics[0]['total']  ,'my_total_video' => $my_total_video[0]['total']
                              ,'socail_link' => $socilLink
                              );  
            
            
        }
        else
        {
            $output = array( 'status'=>500,'code'=>false, 'userdata'=> 0)  ;
        }
        
        print_r(json_encode($output, true));
        
    }
	
	
	
	function getstory()
	{
	  require_once("config.php");
	  $input          = @file_get_contents("php://input");
	  $event_json     = json_decode($input,true);
	  $fb_id=$event_json['fb_id'];
	  $start=$event_json['start'];
	  $end=$event_json['end'];
	  $query=mysqli_query($conn,"SELECT * from `my_story` where `fb_id`='$fb_id' order by id desc limit $start,$end");
	   if(mysqli_num_rows($query)>0)
	  {
	      while($row=mysqli_fetch_assoc($query))
	      {
	         // SELECT COUNT(story_id) FROM `my_story_comment` WHERE  story_id='2'
	          $id=$row['id']; $kj=0; $array=array();
	      
	          $query1=mysqli_query($conn,"SELECT * from `story_gallary` where `my_story_id`='$id'");
	          while($row1=mysqli_fetch_assoc($query1))
	          {
	              $array[$kj]['img']='https://fworldgroup.com/API/'.$row1['image'];
	          
	              $kj++;
	          }
	          
	          $query2=mysqli_query($conn,"SELECT COUNT(story_id)as comment FROM `my_story_comment` WHERE  story_id='$id'");
	          $row2=mysqli_fetch_assoc($query2);
	           $query3=mysqli_query($conn,"SELECT COUNT(story_id)as likes FROM `my_story_like` WHERE  story_id='$id'");
	          $row3=mysqli_fetch_assoc($query3);
	          $comm=$row2['comment'];
	          $lik=$row3['likes'];
	          
	          $row['images']=$array;
	            $row['comment']=$comm;
	             $row['like']=$lik;
	             
	             $row['like_match']="0";
	             $row['comment_match']="0";
	          
	          $data[]=$row;
	      }
	      
	  }
	  else
	  {
	       echo json_encode(array( 'status'=>500,'code'=>false, 'msg'=>"No Data Foung")); die;
	  }
	  
	  if(!empty($data))
	  {
	      echo json_encode(array( 'status'=>200,'code'=>true, 'msg'=>$data));
	  }
	  else
	  {
	      echo json_encode(array( 'status'=>500,'code'=>false, 'msg'=>"No Data Foung")); die;
	  }
	}
	
		function getstory_for_other_user()
	{
	  require_once("config.php");
	  $input          = @file_get_contents("php://input");
	  $event_json     = json_decode($input,true);
	  $fb_id=$event_json['fb_id'];
	 $my_fb_id=$event_json['my_fb_id'];
	 
	  $start=$event_json['start'];
	  $end=$event_json['end'];
	  $query=mysqli_query($conn,"SELECT * from `my_story` where `fb_id`='$fb_id' order by id desc limit $start,$end");
	   if(mysqli_num_rows($query)>0)
	  {
	      while($row=mysqli_fetch_assoc($query))
	      {
	         // SELECT COUNT(story_id) FROM `my_story_comment` WHERE  story_id='2'
	          $id=$row['id']; $kj=0; $array=array();
	          
	      
	          $query1=mysqli_query($conn,"SELECT * from `story_gallary` where `my_story_id`='$id'");
	          while($row1=mysqli_fetch_assoc($query1))
	          {
	              $array[$kj]['img']='https://fworldgroup.com/API/'.$row1['image'];
	          
	              $kj++;
	          }
	          
	          //===================================
	          $query2=mysqli_query($conn,"SELECT COUNT(story_id)as comment FROM `my_story_comment` WHERE  story_id='$id'");
	          $row2=mysqli_fetch_assoc($query2);
	           $query3=mysqli_query($conn,"SELECT COUNT(story_id)as likes FROM `my_story_like` WHERE  story_id='$id'");
	          $row3=mysqli_fetch_assoc($query3);
	          //============================================================
	          $query4=mysqli_query($conn,"SELECT f_id  FROM `my_story_comment` WHERE  story_id='$id' and f_id='$fb_id'");
	          
	           if(mysqli_num_rows($query4)>0)
	           {
	               
	               $comment_match="1";
	           }
	           else
	           {
	               $comment_match="0";
	           }
	          
	           $query5=mysqli_query($conn,"SELECT f_id FROM `my_story_like` WHERE  story_id='$id' and f_id='$my_fb_id' ");
	             if(mysqli_num_rows($query5)>0)
	           {
	               $like_match="1";
	               
	           }
	             else
	           {
	                $like_match="0"; 
	           }
	          
	          
	          
	          $comm=$row2['comment'];
	          $lik=$row3['likes'];
	          
	          $row['images']=$array;
	            $row['comment']=$comm;
	             $row['like']=$lik;
	             $row['like_match']=$like_match;
	             $row['comment_match']=$comment_match;
	          
	          $data[]=$row;
	      }
	      
	  }
	  else
	  {
	       echo json_encode(array( 'status'=>500,'code'=>false, 'msg'=>"No Data Foung")); die;
	  }
	  
	  if(!empty($data))
	  {
	      echo json_encode(array( 'status'=>200,'code'=>true, 'msg'=>$data));
	  }
	  else
	  {
	      echo json_encode(array( 'status'=>500,'code'=>false, 'msg'=>"No Data Foung")); die;
	  }
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		 function mystorie_LikeList()
    	{

    	  
	    $url = 'https/fworldgroup.com/API/upload/thum/';
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true); 
	    $array_out      = array();
	    $fb_id          = $event_json['fb_id'];
	    $story_id       = $event_json['story_id'];
	    
	//    echo "SELECT A.* , B.`comment` FROM `users`AS A INNER JOIN `my_story_like` AS B ON B.`f_id` = A.`fb_id` WHERE B.story_id = '$story_id'";die;
	    $query          = mysqli_query($conn,"SELECT A.* , B.`like` FROM `users`AS A INNER JOIN `my_story_like` AS B ON B.`f_id` = A.`fb_id` WHERE B.story_id = '$story_id'"); 

	    if(mysqli_num_rows($query) > 0)
	    {  
	       while($data = mysqli_fetch_assoc($query))
	       {
	         $data_out[] =$data;
	     
	       }
	       
	     $output = array( 'status'=>200,'code'=>true,'url'=>$url,'data'=>$data_out);
	    }
	    else
	    { 
            $output = array( 'status'=>500,'code'=>false, 'video'=> 0)  ; 
	    }

		 print_r(json_encode($output, true));   
	}
	
	
	
			 function link_social_account()
	{   
	    require_once("config.php");
	    date_default_timezone_set('Asia/Kolkata');
	    $input     = @file_get_contents("php://input");
	    $event_json= json_decode($input,true);
	   
	    $today     = date('d-m-Y H:i:s');
	    $fb_id     = $event_json['fb_id'];
	    $link  = $event_json['link'];
	  
	    $query      =  mysqli_query($conn,"UPDATE users SET  social_link = '$link' WHERE fb_id = '$fb_id' ");
	    if($query  == true)
	    {
	     
	     $output   = array( 'status'=>200,'code'=>true, 'msg'=> 'Update Successfully');
	    }else
	    { 
            $output = array( 'status'=>500,'code'=>false, 'msg'=> 'Something went wrong')  ; 
	    }

		 print_r(json_encode($output, true));   
	}
	
			function UpdateMyLatLon()
	{
	    require_once("config.php");
	    date_default_timezone_set('Asia/Kolkata');
        $today = date('d-m-Y');
        $get_data = array();
        $fb_id = $_POST['fb_id'];
        $lat = $_POST['lat'];
        $lon = $_POST['lon'];
        $query          = mysqli_query($conn,"Update users set lat= '$lat' , lon = '$lon' where fb_id = '$fb_id'");
    	      $output = array( 'status'=>200,'code'=>true,'message' =>"Update succwssgully ");  
    	    
    	  print_r(json_encode($output, true));  
	}
	
	
		
	 function DeleteSocailLink()
	{
	    //echo "olllll";die;
	  require_once("config.php");
	  date_default_timezone_set('Asia/Kolkata');
      $today       = date('d-m-Y');  
      
      $sociallink_id     = $_POST['sociallink_id'];	       
   //  ECHO "DELETE FROM `sociallink` WHERE sociallink_id='$sociallink_id' ";DIE;
	               $query=mysqli_query($conn,"DELETE FROM `sociallink` WHERE sociallink_id='$sociallink_id' ");
                    
                  if($query)
                {
              
                  $output = array( 'status'=>200,'code'=>true,'data'=>"Deleted");
                }else
                {
                   $output = array( 'status'=>500,'code'=>false,'data'=>" not Deleted"); 
                }
print_r(json_encode($output, true));
	}
	
	
	
	
	
	
	
	
	
	
		
	 function WithdrawlRequest()
	{ 
	  require_once("config.php");
	  date_default_timezone_set('Asia/Kolkata');
      $today       = date('d-m-Y');  
      
      $fb_id       = $_POST['fb_id'];
      $amount      = $_POST['amount'];

      $sql         =  "INSERT INTO WithdrawlRequest(fb_id,amount,date)VALUES('$fb_id','$amount','$today')";
// echo $sql;die;
      $query3      = mysqli_query($conn,$sql);
        $feedback_id = mysqli_insert_id($conn);
      if(isset($feedback_id))
      {
    
      $output = array( 'status'=>200,'code'=>true, 'msg'=> 'Update Successfully done');  }
      else{
       $output = array( 'status'=>500,'code'=>false, 'msg'=> 'Something went wrong'); }
     
     print_r(json_encode($output, true));
      
	}
	
	
	
	 function WithdrawlRequestHistory()
	{ 
	  require_once("config.php");
	  date_default_timezone_set('Asia/Kolkata');
      $today       = date('d-m-Y');  
      
      $fb_id       = $_POST['fb_id'];
	
	
	             $socilLink = array();
                 $query90          = mysqli_query($conn,"SELECT * FROM `reedeem_request` WHERE fb_id = '$fb_id'  "); 
        	     while($data190 = mysqli_fetch_assoc($query90))
                 {
                  $socilLink[] =  $data190; 
                 }
	
	      if(!empty($socilLink))
      {
    
      $output = array( 'status'=>200,'code'=>true, 'msg'=> ' Successfully get' ,'data' =>$socilLink);  }
      else{
       $output = array( 'status'=>500,'code'=>false, 'msg'=> 'EMpty data','data' => $socilLink); }
     
     print_r(json_encode($output, true));
	
	}
	
	
	
	
	
	
	
	
			 function VideoCommentHistory()
	{ 
	  require_once("config.php");
	  date_default_timezone_set('Asia/Kolkata');
      $today       = date('d-m-Y');  
      
      $video_id       = $_POST['video_id'];
	
	
	             $socilLink = array();
                 $query90          = mysqli_query($conn,"SELECT * FROM `video_comment` vc JOIN users u 
                                                         ON vc.fb_id = u.fb_id WHERE  vc.video_id = '$video_id'  "); 
        	     while($data190 = mysqli_fetch_assoc($query90))
                 {
                  $socilLink[] =  $data190; 
                 }
	
	      if(!empty($socilLink))
      {
    
      $output = array( 'status'=>200,'code'=>true, 'msg'=> ' Successfully get' ,'data' =>$socilLink);  }
      else{
       $output = array( 'status'=>500,'code'=>false, 'msg'=> 'EMpty data','data' => $socilLink); }
     
     print_r(json_encode($output, true));
	
	}
?>

