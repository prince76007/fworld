<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
 //$url = 'https://fworldgroup.com/fworlfinal/Admin%20panel/tictic/gift_img/';	
 $url = 'http://3.128.105.101/API/tictic/gift_img/';	
 $file_path = 'http://3.128.105.101/';	

	if(isset($_GET["p"]))
	{
		if($_GET["p"]=="viewVideo")
		{ 
		    
			viewVideo();
		}
				if($_GET["p"]=="DeleteMyStory")
		{ 
		    
			DeleteMyStory();
		}
		
	
		if($_GET["p"]=="MyNearByUsers")
		{ 
		    
			MyNearByUsers();
		}
		
		if($_GET["p"]=="MyNearByUsers2")
		{ 
		    
			MyNearByUsers2();
		}
		
		
	if($_GET["p"]=="UpdateMyLatLon")
		{ 
		  // echo 'ok';die;
			UpdateMyLatLon();
		}
		
	  if($_GET["p"]=="rechargePlan")
		{ 
		    
			rechargePlan();
		}
			  if($_GET["p"]=="activateRechargePlan")
		{ 
		    
			activateRechargePlan($url);
		}
	if($_GET["p"]=="LevelUsingExpo")
		{ 
		    
			LevelUsingExpo($url);
		}
			if($_GET["p"]=="RoomlevelDecideGift")
		{ 
		    
			RoomlevelDecideGift($url);
		}
		
		
				if($_GET["p"]=="deleteMyVideo")
		{ 
		    
			deleteMyVideo();
		}

		if($_GET["p"]=="todayTaskList")
		{ 
		    
			todayTaskList();
		}
		
		if($_GET["p"]=="all_notification")
		{ 
		    
			all_notification();
		}
		
				if($_GET["p"]=="todayTaskhistory")
		{ 
		    
			todayTaskhistory();
		}
						if($_GET["p"]=="current_event")
		{ 
		    
			current_event();
		}
		if($_GET["p"]=="GetEventRanking")
		{ 
		    
			GetEventRanking();
		}


		if($_GET["p"]=="upload_my_coverpic")
		{ 
		    
			upload_my_coverpic();
		}

		if($_GET["p"]=="SetPrivacy")
		{ 
		    
			SetPrivacy();
		}

		if($_GET["p"]=="BlockedOtherPerson")
		{ 
		    
			BlockedOtherPerson();
		}
       
		if($_GET["p"]=="blocked_personLIST")
		{ 
		    
			blocked_personLIST();
		}
		
			

		       
		if($_GET["p"]=="checkPersonForBlock")
		{ 
		    
			checkPersonForBlock();
		}
		
				if($_GET["p"]=="myEarningHistory")
		{ 
		    
			myEarningHistory();
		}
 		

     		if($_GET["p"]=="update_my_profile_pic")
		{ 
		    
			update_my_profile_pic();
		}

     		if($_GET["p"]=="getAllMyImages")
		{ 
		    
			getAllMyImages();
		}
		
		
		
		 if($_GET["p"]=="cover_pic_delete")
		{ 
		    
			cover_pic_delete();
		}




		if($_GET["p"]=="topfans")
		{
			topfans();
		}
		
		
		
		if($_GET["p"]=="myContributioNew")
		{
			myContributioNew();
		}


		if($_GET["p"]=="giftTrnfrInRoom")
		{
			giftTrnfrInRoom();
		}
		if($_GET["p"]=="GetLevelByDiamond")
		{
			GetLevelByDiamond();
		}
		
		if($_GET["p"]=="audiobackground")
		{
		    audiobackground();
		}
		
				
		if($_GET["p"]=="audiobackground2")
		{
		    audiobackground2();
		}
		
		if($_GET["p"]=="uploadeStory")
		{
		  uploadeStory();  
		}
		
	    if($_GET["p"]=="my_liked_videos")
		{
		    my_liked_videos();
		}
		
		if($_GET["p"]=="MyMixUp")
		{
		    MyMixUp();
		}
		
	   if($_GET["p"]=="who_like_my_video")
		{
		    who_like_my_video();
		}
		
	   if($_GET["p"]=="who_comment_my_video")
		{
		    who_comment_my_video();
		}
	  if($_GET["p"]=="update_my_info")
		{
		  update_my_info();
		}
		
	if($_GET["p"]=="start_as_vip")
		{
		  start_as_vip();
		}
		 
		 
	if($_GET["p"]=="create_event")
		{
		  create_event();
		}	 
		
	
		
		
	if($_GET["p"]=="my_contribution")
    	{
    	  my_contribution($url);
    	}
    	
    	
    if($_GET["p"]=="updateMyTeamName")
    	{
    	  updateMyTeamName();
    	}
    	
    if($_GET["p"]=="feedback")
    	{
    	  feedback();
    	}
    	
    	 if($_GET["p"]=="appfeedback")
    	{
    	  appfeedback();
    	}
    	
    	
    	
        if($_GET["p"]=="my_feedbackList")
    	{
    	  my_feedbackList($url);
    	}
    	
    	
    	if($_GET["p"]=="app_feedbackList")
    	{
    	  app_feedbackList($url);
    	}
    	
    	
    	if($_GET["p"]=="mystorie_like")
    	{
    	  mystorie_like();
    	}
    	if($_GET["p"]=="mystorie_comment")
    	{
    	  mystorie_comment();
    	}
    	
    		if($_GET["p"]=="mystorie_likeList")
    	{  echo "Ok";die;
    	  mystorie_likeList();
    	}
    	
    	if($_GET["p"]=="mystorie_CommentsList")
    	{
    	  mystorie_CommentsList();
    	}
    	
    		if($_GET["p"]=="save_verification_application")
    	{
    	  save_verification_application();
    	}
    	
    		if($_GET["p"]=="sendNotification")
    	{
    	  	sendNotification();
    	}
    	
    		if($_GET["p"]=="checkRoomExist")
    	{
    	  	checkRoomExist();
    	}
    	
    			if($_GET["p"]=="insertRoomPayment")
    	{
    	  		insertRoomPayment();
    	}
    	
    	  if($_GET["p"]=="getWithdrawList")
    	{
    	  		getWithdrawList();
    	}
    	
    	  if($_GET["p"]=="approvefromAdmin")
    	{
    	  		approvefromAdmin();
    	}
    	
    	  if($_GET["p"]=="getAllFeedback")
    	{
    	  		getAllFeedback($url);
    	}
    	  if($_GET["p"]=="get_contribute")
    	{
    	  		get_contribute();
    	}
        
          if($_GET["p"]=="get_topfans")
    	{
    	  		get_topfans();
    	}  
        if($_GET["p"]=="get_admin_events_details")
    	{
    	  		get_admin_events_details();
    	}
    	
    	
    	
    	
    	
    	
    
    	
    
    	
    

    	
		
	}

	
		function topfans()
	{  
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true);
	    $array_out      = array();
	    $fb_id          = $event_json['fb_id'];
	    
	      $like_my_vid      =  array();
	    # count how much total gift i got
	   
	    /*$query          = mysqli_query($conn,"select ug.*,u.username,u.first_name,u.last_name,u.profile_pic,g.title from user_gift_history ug RIGHT JOIN users u ON ug.sender_id= u.fb_id
	                                           RIGHT JOIN gifts g ON ug.gift_id = g.gifts_id
	                                           where  receiver_id = '$fb_id' "); */
	                                           
	                                          
	         
	         $query          = mysqli_query($conn,"select SUM(ug.diamond) as diamond,ug.receiver_id,u.first_name,u.last_name,u.first_name,u.last_name,u.profile_pic from user_gift_history ug RIGHT JOIN users u ON ug.sender_id= u.fb_id where  ug.receiver_id = '$fb_id' GROUP BY u.fb_id ");                                  
	                                           
	                                           
	    while($data = mysqli_fetch_assoc($query))
        {
         $detailOfTopFain[] =  $data;  
        }
 
         if(!empty($detailOfTopFain))
         {
          $output = array( 'status'=>200,'code'=>true,'topfansData'=>$detailOfTopFain);
         }else
         {
              $output = array( 'status'=>500,'code'=>false,'topfansData'=>$detailOfTopFain);
         }
		 print_r(json_encode($output, true)); 
	} 
	
	
	
	
		
		function myContributioNew()
	{  
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true);
	    $array_out      = array();
	    $fb_id          = $event_json['fb_id'];
	    
	      $detailOfTopFain      =  array();
	    # count how much total gift i got
	   
	    $query          = mysqli_query($conn,"select ug.*,sum(ug.diamond) as diamond,sum(ug.total_geted) as total_geted ,u.username,u.first_name,u.last_name,u.profile_pic,g.title
	                                           from user_gift_history ug left JOIN users u ON ug.receiver_id= u.fb_id
	                                           left JOIN gifts g ON ug.gift_id = g.gifts_id
	                                           
	                                           where  sender_id = '$fb_id' group by ug.receiver_id "); 
	    while($data = mysqli_fetch_assoc($query))
        {
         $detailOfTopFain[] =  $data;  
        }
 
        if(!empty($detailOfTopFain))
        {
         $output = array( 'status'=>200,'code'=>true,'myContributioData'=>$detailOfTopFain);
        }else
        {
         $output = array( 'status'=>500,'code'=>false,'myContributioData'=>$detailOfTopFain);   
        }
		 print_r(json_encode($output, true)); 
	} 
	
	



	
	function MyMixUp()
	{  
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true);
	    $array_out      = array();
	    $fb_id          = $event_json['fb_id'];
	   
	    # WHO LIKE MY VIDEO
	    $query          = mysqli_query($conn,"select u.fb_id as fb_id_of_wholike,u.first_name ,u.last_name,u.profile_pic,v.fb_id as fb_id_whichvid,v.id as vid_id,v.thum as vid_thum ,
	                                          'no' as comment, 'like' as action ,vld.created
	                                          from videos v 
	                                          LEFT JOIN video_like_dislike vld ON v.id=vld.video_id
	                                          LEFT JOIN users u ON vld.fb_id = u.fb_id where  v.fb_id = '$fb_id' order by vld.created desc"); 

	                                          //echo $sql;die;
	    $like_my_vid      =  array();
        while($data = mysqli_fetch_assoc($query))
        {
         $like_my_vid[] =  $data;  
        }
        # WHO COMMENT ON MY VIDEO
        $query          = mysqli_query($conn,"select u.fb_id as fb_id_of_wholike,u.first_name ,u.last_name,u.last_name,u.profile_pic,v.fb_id as fb_id_whichvid,v.id as vid_id ,v.thum as vid_thum ,vc.comments as comment,
                                              'comment' as action ,vc.created
                                              from videos v 
	                                          LEFT JOIN video_comment vc ON v.id=vc.video_id
	                                          LEFT JOIN users u ON vc.fb_id = u.fb_id where  v.fb_id = '$fb_id' order by vc.created desc"); 
	                     
	                                         //echo $sql;die;
	    $comm_my_vid      =  array();
        while($data = mysqli_fetch_assoc($query))
        {
         $comm_my_vid[] =  $data;  
        }
        
        
        
        # WHO FOLLOW TO ME
        $query          = mysqli_query($conn,"select u.fb_id as fb_id_of_wholike,u.first_name ,u.last_name,u.profile_pic,'000'as fb_id_whichvid,
                                               '000' as vid_id ,'not_found' as vid_thum ,'com' as comment,
                                               'follow' as action ,'000' as created
                                               from follow_users fu 
	                                           LEFT JOIN users u ON u.fb_id=fu.fb_id where fu.followed_fb_id = '$fb_id'
	                                           "); 

	                                        $sql = "select u.fb_id as fb_id_of_wholike,u.first_name ,u.last_name,u.profile_pic,'000'as fb_id_whichvid,
                                               '000' as vid_id ,'not_found' as vid_thum ,'com' as comment,
                                               'follow' as action ,'000' as created
                                               from follow_users fu 
	                                           LEFT JOIN users u ON u.fb_id=fu.fb_id where fu.followed_fb_id = '$fb_id'
	                                           ";
	                                         //echo $sql;die;
	    $follo_my_fbid      =  array();
        while($data = mysqli_fetch_assoc($query))
        {
         $follo_my_fbid[] =  $data;  
        }
    // echo "<pre>";print_r($follo_my_fbid); die;
      	  $two = array_merge($comm_my_vid,$like_my_vid);
      	$three = array_merge($two,$follo_my_fbid);
	     $output = array( 'status'=>200,'code'=>true,'mix_data'=>$three);

		 print_r(json_encode($output, true));   
	  
	}
	
	
		function who_like_my_video()
	{  
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true);
	    $array_out      = array();
	    $fb_id          = $event_json['fb_id'];
	    # WHO LIKE MY VIDEO
	    $query          = mysqli_query($conn,"select u.fb_id as fb_id_of_wholike,u.first_name ,u.last_name,u.profile_pic,v.fb_id as fb_id_whichvid,v.id as vid_id,v.thum as vid_thum ,
	                                          'no' as comment, 'like' as action ,vld.created
	                                          from videos v 
	                                          LEFT JOIN video_like_dislike vld ON v.id=vld.video_id
	                                          LEFT JOIN users u ON vld.fb_id = u.fb_id where  v.fb_id = '$fb_id' order by vld.created desc"); 

	                                          //echo $sql;die;
	    $like_my_vid      =  array();
        while($data = mysqli_fetch_assoc($query))
        {
         $like_my_vid[] =  $data;  
        }
         $output = array( 'status'=>200,'code'=>true,'mix_data'=>$like_my_vid);
		 print_r(json_encode($output, true)); 
	} 
	
	 function who_comment_my_video()
	{  
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true);
	    $array_out      = array();
	    $fb_id          = $event_json['fb_id'];
        # WHO COMMENT ON MY VIDEO
        $query          = mysqli_query($conn,"select u.fb_id as fb_id_of_wholike,u.first_name ,u.last_name,u.last_name,u.profile_pic,v.fb_id as fb_id_whichvid,v.id as vid_id ,v.thum as vid_thum ,vc.comments as comment,
                                              'comment' as action ,vc.created
                                              from videos v 
	                                          LEFT JOIN video_comment vc ON v.id=vc.video_id
	                                          LEFT JOIN users u ON vc.fb_id = u.fb_id where  v.fb_id = '$fb_id' order by vc.created desc"); 
	                     
	                                         //echo $sql;die;
	    $comm_my_vid      =  array();
        while($data = mysqli_fetch_assoc($query))
        {
         $comm_my_vid[] =  $data;  
        }
         $output = array( 'status'=>200,'code'=>true,'mix_data'=>$comm_my_vid);
		 print_r(json_encode($output, true)); 
	}
	
	
	function update_my_info()
	{  
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true);
	    $array_out      = array();
	    $fb_id          = $event_json['fb_id'];
	    $mobile         = $event_json['mobile'];
	    $bio            = $event_json['bio'];
	    $email          = $event_json['email'];
	    $state          = $event_json['state'];
	    $city           = $event_json['city'];
	    
	    $first_name          = $event_json['first_name'];
	    $last_name          = $event_json['last_name'];
	    $gender           = $event_json['gender'];
	    # WHO COMMENT ON MY VIDEO
	    $image_pic_sql="";

	    if(isset($event_json['user_profile_file']))
	    {
			
				if($event_json['user_profile_file']=="" )
				{
					$msg_out="Validation Error user_profile_file ";
					$output=array( "code" => "201", "msg" => $msg_out);
					print_r(json_encode($output, true));
					exit();
				}
				     		     

				if(!isset($event_json['user_profile_file_name']) && $event_json['user_profile_file_name']=="" )
				{
					$msg_out="Validation Error user_profile_file_name ";
					$output=array( "code" => "201", "msg" => $msg_out);
					print_r(json_encode($output, true));
					exit();
				}	


			 	$thum1=explode(',', $event_json['user_profile_file']);
				$thum=$thum1[1];
				
				 $fileName    = time()."_".rand().$event_json['user_profile_file_name'];
			     $attach_url   = $_SERVER["DOCUMENT_ROOT"]."/custom_uploads/user_profile/".$fileName;
				 	$profile_pic_file=BASE_PATH."/custom_uploads/user_profile/".$fileName;
					$thum = base64_decode($thum);
					file_put_contents($attach_url, $thum);
				$image_pic_sql=" profile_pic ='".$profile_pic_file."', ";
	    }

	     $qs= "UPDATE users SET "; 
 			
 		$qs.= " mobile = '".$event_json['mobile']."' ,";

 		$qs.= ' bio = "'.$event_json['bio'].'",';

 		if($event_json['email']!=""){
 		$qs.= " email ='".$event_json['email']."',";
        }
		$qs.=" state ='".$event_json['state']."', ";
    	
    	$qs.=$image_pic_sql;
    	
    	$qs.="city = '".$event_json['city']."', 
           first_name = '".$first_name."', last_name ='".$last_name."' ,gender ='".$gender."' WHERE fb_id = '".$event_json['fb_id']."'";

        $query = mysqli_query($conn,$qs) or die(mysqli_error($conn));
        
         $new_data = array('mobile' => $event_json['mobile'],'bio' => $event_json['bio'],'email' =>$event_json['email'],
                                       'state' =>$event_json['state'],'city' => $event_json['city'],
                                       'first_name'=>$first_name,'last_name'=>$last_name,'gender'=>$gender,'city'=>$city,'state'=>$state);

		     
         if($query == true)
         {
             $sqli="SELECT * FROM `users` WHERE  fb_id='".$event_json['fb_id']."'";
			$result=mysqli_query($conn,$sqli) or die(mysqli_error($conn));
			  $user_data=mysqli_fetch_assoc($result);  
			
           $output = array( 'status'=>200,'code'=>true,'new_data'=> $new_data , 'user_data' => $user_data);        
         }else
         {
           $output = array( 'status'=>500,'code'=>false,'new_data'=> $new_data);   
         }
		 print_r(json_encode($output, true)); 
	}
	



	
	  function updateMyTeamName()
	{  
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true);
	    $array_out      = array();
	    $fb_id          = $event_json['fb_id'];
	    $team_name      = $event_json['team_name'];

        # WHO COMMENT ON MY VIDEO
        $query          = mysqli_query($conn,"UPDATE users SET team_name = '".$event_json['team_name']."' WHERE fb_id = '".$event_json['fb_id']."'");
         $new_data = array('team_name' => $event_json['team_name']);                               
         if($query == true)
         {
           $output = array( 'status'=>200,'code'=>true,'new_data'=> $new_data);        
         }else
         {
           $output = array( 'status'=>500,'code'=>false,'new_data'=> $new_data);   
         }
		 print_r(json_encode($output, true)); 
	}







	 
		  function start_as_vip()
	{  
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true);
	    $array_out      = array();
	    $fb_id          = $event_json['fb_id'];
	    $duration       = $event_json['duration']; #1,3,12
	    if(empty($fb_id) || empty($duration))
	    {
	     $output = array( 'status'=>500,'code'=>false,'new_data'=> $array_out,'required field missing');
	     print_r(json_encode($output, true));die;
	    }
	    date_default_timezone_set('Asia/Kolkata');
        $today = date('d-m-Y');
        if($duration == 1)
        $month_later =  date('d-m-Y',strtotime($today." +1 Months"));
        else if($duration == 3)
        $month_later =  date('d-m-Y',strtotime($today." +3 Months"));
        else if($duration == 12)
        $month_later =  date('d-m-Y',strtotime($today." +12 Months"));
        else
        $month_later = 0;
        # WHO COMMENT ON MY VIDEO
        $query     = mysqli_query($conn,"UPDATE users SET vip_status = '1',duration = '$duration',expire_at ='$month_later' where fb_id = '".$event_json['fb_id']."'");
        $new_data = array('vip_status' => 1,'duration' => $duration,'expire_at' =>$month_later);                               
         if($query == true)
         {
           $output = array( 'status'=>200,'code'=>true,'new_data'=> $new_data);        
         }else
         {
           $output = array( 'status'=>500,'code'=>false,'new_data'=> $new_data);   
         }
		 print_r(json_encode($output, true)); 
	}	 
	
	
	
	
	 function create_event()
	 {
	     require_once("config.php");
	     $fb_id  = $_POST['fb_id'];
	     $heading= $_POST['heading'];
	     $des    = $_POST['des'];
	     date_default_timezone_set('Asia/Kolkata');
         $date_time = date('d-m-Y H:i');
	  
	     $array_out      = array();
	     if(empty($fb_id) || empty($heading) || empty($des) ||empty($_FILES['icon']))
	     {
	       $output = array( 'status'=>500,'code'=>false,'message'=>'field missing','outpur'=> $array_out);
	       print_r(json_encode($output, true));
	       die;
	     }else
	     {
	       if(!isset($_FILES['icon']) || $_FILES['icon']['error'] == UPLOAD_ERR_NO_FILE) 
             {
              $red ='notfound.png';
             }else
             {
              $red=$_FILES['icon']['name'];
              $temp=$_FILES['icon']['tmp_name'];
              move_uploaded_file($temp,"upload/thum/".$red);
             }
              $filename    = $red;
              $sql         =  "INSERT INTO event(user_id,heading,des,icon,date_time)VALUES('$fb_id','$heading','$des','$red','$date_time')";
	          $query3      = mysqli_query($conn,$sql);
	         
    	                                   
    	      if($query3 == true){
    	        $output = array( 'status'=>200,'code'=>true, 'msg'=> 'Update Successfully');  }
    	      else{
    	       $output = array( 'status'=>500,'code'=>false, 'msg'=> 'Something went wrong'); }
    	     
    	     print_r(json_encode($output, true));
	     }
	     
	 }
	
  function my_contribution($url)
  {  
    //echo $url;die;
    require_once("config.php");
    $input          = @file_get_contents("php://input");
    $event_json     = json_decode($input,true);
    $array_out      = array();
    $fb_id          = $event_json['fb_id'];	
    # WHO FOLLOW TO ME
    $sql  = "select sum(ugh.diamond) as diamond,  u.username,u.first_name,u.last_name,u.profile_pic,
                                           g.title as gift_title,concat('$url',g.icon) as gift_icon,ugh.diamond,ugh.date
                                           from user_gift_history ugh 
                                           LEFT JOIN users u ON u.fb_id=ugh.receiver_id
                                           LEFT JOIN gifts g ON g.gifts_id=ugh.gift_id
                                           where ugh.sender_id = '$fb_id'  group by ugh.receiver_id
                                           ";
                                         //  echo $sql;die;
    $query      = mysqli_query($conn,$sql);
    if(mysqli_num_rows($query) > 0)
	  {
        while($data = mysqli_fetch_assoc($query))
        {
         $array_out[] = $data;   
        }
       // echo "<pre>";print_r($array_out);die;
        $output = array( 'status'=>200,'code'=>true, 'msg'=> 'successfully get data','data' => $array_out); 
	  }else
	  {
	    $array_out = $array_out ;
	    $output = array( 'status'=>500,'code'=>false, 'msg'=> 'Data not found'); 
	  }
	  
      print_r(json_encode($output, true));
  }  
  
  
  
  
 	function recently_added_video()
	{
	    require_once("config.php");
	    $input      = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		
		if(isset($event_json['fb_id']))
		{
			$fb_id = htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			$from  = htmlspecialchars(strip_tags($event_json['from'] , ENT_QUOTES));
			$to    = htmlspecialchars(strip_tags($event_json['to'] , ENT_QUOTES)); 
			$token = $event_json['token'];
			@mysqli_query($conn,"update users set tokon ='".$token."' where fb_id='".$fb_id."' ");

		    $query     = mysqli_query($conn,"select * from videos order by id DESC LIMIT $from,50 ");
    		$array_out = array();
    		while($row = mysqli_fetch_array($query))
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
	
	
	
		function giftTrnfrInRoom()
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
	     $room_id    = $event_json['room_id'];
	     $room_name    = $event_json['room_name'];
	     $room_profile    = $event_json['room_profile'];
	     
        if($s_fb_id != '' && $s_fb_id != 'null'  && $r_fb_id != '' && $r_fb_id != 'null' && $gift_id != '' && $gift_id != 'null' && $diamond != '' && $diamond !='null' )
        {   
            $sender_diamond = mysqli_query($conn,"select total_diamondd from users where fb_id = '$s_fb_id' ");
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
$expo    = 15;
$expo2    = 5;
/* $query1          = mysqli_query($conn,"UPDATE users SET  total_diamondd = total_diamondd + '$diamond' , total_earning = total_earning + '$after_5prt'
                                 ,total_expo = total_expo + '$expo' WHERE fb_id = '$r_fb_id' ");   */  
                                 
  $query1          = mysqli_query($conn,"UPDATE users SET total_earning = total_earning + '$after_5prt'
    ,total_expo = total_expo + '$expo2' WHERE fb_id = '$r_fb_id' ");
     $query10          = mysqli_query($conn,"UPDATE users SET total_expo = total_expo + '$expo' WHERE fb_id = '$s_fb_id' ");
  	   
# to insert expo

$query99          = mysqli_query($conn,"INSERT INTO expo_history (user_id,action,expo,date)VALUES('$r_fb_id','Get Room Gift ','$expo','$today')");
    	    // $query1          = mysqli_query($conn,"UPDATE users SET  total_diamondd = total_diamondd + '$diamond' WHERE fb_id = '$r_fb_id' ");     
    	     $query2          = mysqli_query($conn,"UPDATE users SET  total_diamondd = total_diamondd - '$diamond' WHERE fb_id = '$s_fb_id' ");
    	     $query3          = mysqli_query($conn,"INSERT INTO user_gift_history (sender_id,receiver_id,room_id,room_name,room_profile,gift_id,diamond,date,action,total_geted,real_date)
    	                                   VALUES('$s_fb_id','$r_fb_id','$room_id','$room_name','$room_profile','$gift_id','$diamond','$today','$action','$after_5prt','$real_date')");
    	                              
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
function deleteMyVideo()
{   
    	require_once("config.php");
    	$vid_id  =$_POST['vid_id'];
    	 if($vid_id =='')
        {
          $output = array( 'status'=>500,'code'=>false, 'msg'=> 'Something went wrong'); 
          
        }else
        {
          $query=mysqli_query($conn,"DELETE FROM `videos` WHERE id='$vid_id' ");
          $output = array( 'status'=>200,'code'=>true, 'msg'=> 'Deleted'); 
        }
    print_r(json_encode($output, true)); die;
}
	
function viewVideo()
{
    	require_once("config.php");
	    date_default_timezone_set('Asia/Kolkata');
	            $today       = date('d-m-Y H:i');
        $real_date   = date('d-m-Y');
        $fb_id       = $_POST['fb_id'];    
        $userInfo    = mysqli_query($conn,"select total_expo from users where fb_id = '$fb_id' ");
        $userInfoData = mysqli_fetch_assoc($userInfo);
        if(empty($userInfoData))
        {
          $output = array( 'status'=>500,'code'=>false, 'msg'=> 'Something went wrong'); 
          print_r(json_encode($output, true)); die;
        }
        $total_expo   = $userInfoData['total_expo'] +1;
        $expo         = 1;
        $query1       = mysqli_query($conn,"UPDATE users SET  total_expo = '$total_expo' WHERE fb_id = '$fb_id' ");  
        
        $query3          = mysqli_query($conn,"INSERT INTO expo_history (user_id,action,expo,date)VALUES('$fb_id','VIEW VIDEO','$expo','$today')");
    	     if($query3 == true)
    	     {
    	     $output = array( 'status'=>200,'code'=>true, 'msg'=> 'Update Successfully');
    	     }
    	     else
    	     {
    	     $output = array( 'status'=>500,'code'=>false, 'msg'=> 'Something went wrong');
    	     }
    	     
    	     print_r(json_encode($output, true)); 
}
	
	function GetLevelByDiamond()
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
	      
	      $user_diamond = $user_data[0]['total_diamondd'];
	     
	      $query1 = mysqli_query($conn,"SELECT * FROM `diamond_wise_level` WHERE total_diamond <= $user_diamond ORDER BY diamond_wise_level_id ASC LIMIT 1");
	      $data1  = mysqli_fetch_assoc($query1);
	      //echo "<pre>";print_r($data1);
	      if(!empty($data1))
	      {
	        $data1 = $data1;  
	      }else
	      {
	        $data1 = array();  
	      }
	     
	     $output = array( 'status'=>200,'code'=>true,'user_info'=>$user_data,'level_info'=>$data1);
	    }else
	    { 
            $output = array( 'status'=>500,'code'=>false)  ; 
	    }

		 print_r(json_encode($output, true));   
	}
	
	
			
	function LevelUsingExpo($url)
	{ 
	    require_once("config.php");
	    $array_out      = array();
	    $fb_id          = $_POST['fb_id'];
	    $query          = mysqli_query($conn,"select * from users where  fb_id = '$fb_id'"); 
	   	                                
	    $user_data          =  array();
	    if(mysqli_num_rows($query) > 0)
	    {
	       while($data = mysqli_fetch_assoc($query))
	       {
	         $user_data[] =  $data;  
	       }
	     // echo "<pre>";print_r($user_data);die;
	      $total_expo = $user_data[0]['total_expo'];
	    // echo "SELECT * FROM `levelDecideExpo` WHERE exp <= $total_expo ORDER BY levelDecideExpo_id ASC ";die;
	      $query1 = mysqli_query($conn,"SELECT * FROM `levelDecideExpo` WHERE exp <= $total_expo ORDER BY levelDecideExpo_id ASC ");
	      while($row = mysqli_fetch_assoc($query1))
	      {
	         $data1[] = $row; 
	      }
	      //echo "<pre>";print_r($data1);
	      if(!empty($data1))
	      {
	        $data1 = $data1;  
	      }else
	      {
	       $query1 = mysqli_query($conn,"SELECT * FROM `levelDecideExpo` WHERE  levelDecideExpo_id = 1 ");
	       while($row = mysqli_fetch_assoc($query1))
	       {
	         $data1[] = $row; 
	       } 
	      }
	     
	     # GET ALL LEVEL
	     	$query2 = mysqli_query($conn,"SELECT * FROM `levelDecideExpo` ");
	       while($row2 = mysqli_fetch_assoc($query2))
	       {
	         $data2[] = $row2; 
	       } 
	     $output = array( 'status'=>200,'code'=>true,'img_url' => $url,'user_info'=>$user_data,'crossed_level_info'=>$data1,'All_level_info'=>$data2);
	    }else
	    { 
            $output = array( 'status'=>500,'code'=>false)  ; 
	    }

		 print_r(json_encode($output, true));   
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
				
	function RoomlevelDecideGift($url)
	{ 
	    require_once("config.php");
	    $array_out      = array();
	    $room_id        = $_POST['room_id'];
	    $action        = $_POST['action'];
	    $query          = mysqli_query($conn,"select sum(diamond) as total_gift,sum(diamond) as total_diamond ,sum(total_geted) as total_geted
	                                   from user_gift_history where  room_id = '$room_id' and action='$action'"); 
	                                   
	                                
	    $user_data          =  array();
	    if(mysqli_num_rows($query) > 0)
	    {
	       while($data = mysqli_fetch_assoc($query))
	       {
	         $user_data[] =  $data;  
	       }
	       
	          $total_gift = $user_data[0]['total_gift'];
	         
	          $query1     = mysqli_query($conn,"SELECT * FROM `RoomlevelDecideGift` WHERE gift_count <= $total_gift  ORDER BY RoomlevelDecideGift_id ASC ");
    	   //  $query1     = mysqli_query($conn,"SELECT * FROM `RoomlevelDecideGift` WHERE gift_count < $total_gift and gift_count > $total_gift  ORDER BY RoomlevelDecideGift_id ASC ");
    	      while($row  = mysqli_fetch_assoc($query1))
    	      {
    	         $data1[] = $row; 
    	      }
    	      
    	      
	      if(!empty($data1))
	      {
	          
	        $data1 = $data1;  
	      }else
	      {
	          
	       $query1 = mysqli_query($conn,"SELECT * FROM `RoomlevelDecideGift` WHERE  RoomlevelDecideGift_id = 1 ");
	       while($row = mysqli_fetch_assoc($query1))
	       {
	         $data1[] = $row; 
	       } 
	      }
	      
        	       # GET ALL LEVEL
        	       $query2 = mysqli_query($conn,"SELECT * FROM `RoomlevelDecideGift` ");
        	       while($row2 = mysqli_fetch_assoc($query2))
        	       {
        	         $data2[] = $row2; 
        	       } 
         	//echo "<pre>";print_r($user_data);die;       
         if($user_data[0]['total_gift']==''){$user_data = array('total_gift' => 0,'total_diamond' => 0, 'total_geted' => 0);}else{$user_data =$user_data;}	       
	     //	echo "<pre>";print_r($user_data);die;  
	     $output = array( 'status'=>200,'code'=>true,'check' => 'Gift count is exist','img_url' => $url,'gift_info'=>$user_data,'crossed_level_info'=>$data1,'All_level_info'=>$data2);
	    }else
	    {  
	       
	       # if $user_data is empty then set to 0
	       $user_data = array('total_gift' => 0,'total_diamond' => 0, 'total_geted' => 0);
           # Get single if there is no room id exist
           $query1 = mysqli_query($conn,"SELECT * FROM `RoomlevelDecideGift` WHERE  RoomlevelDecideGift_id = 1 ");
	       while($row = mysqli_fetch_assoc($query1))
	       {
	         $data1[] = $row; 
	       }
           # GET ALL LEVEL
	       $query2 = mysqli_query($conn,"SELECT * FROM `RoomlevelDecideGift` ");
	       while($row2 = mysqli_fetch_assoc($query2))
	       {
	         $data2[] = $row2; 
	       } 
           $output = array( 'status'=>200,'code'=>true,'check' => 'Gift count is zero','img_url' => $url,'gift_info'=>$user_data,
           'crossed_level_info'=>$data1,'All_level_info'=>$data2);
	    }

		 print_r(json_encode($output, true));   
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	function audiobackground()
	{
	    
	if(!isset($_FILES['audio']) || $_FILES['audio']['error'] == UPLOAD_ERR_NO_FILE) 
        {
          // echo "noooot";
            $red ='notfound.png';
             echo json_encode(array("status"=>"0","response"=>"Audio Not Uploade"));
            
        }else
        {
           // echo "ysss";
            $red=$_FILES['audio']['name'];
        
            $temp=$_FILES['audio']['tmp_name'];
            move_uploaded_file($temp,"upload/groupchat_background/".$red);
          //   unlink("upload/groupchat_background/".$red);
            echo json_encode(array("status"=>"1","response"=>"Audio Successfully Uploaded",
            "audio_name"=>$red,"audio_url"=>"http://fworldgroup.com/API/upload/groupchat_background/".$red));
        
            
        } die;
	    
	    
	   /* 
	    
	     require_once("config.php");
	     $name=$_POST['name']; 
	     $audio=$_FILES['audio']['name'];
         $size=$_FILES['audio']['size'];
         $type=$_FILES['audio']['type'];
         $temp=$_FILES['audio']['tmp_name'];
         
         
         //move_uploaded_file($temp,"upload/groupchat_background/".$audio

        if(move_uploaded_file($temp, "upload/groupchat_background/".$audio))
        {
            unlink("upload/groupchat_background/".$name);
            echo json_encode(array("status"=>"1","response"=>"Audio Successfully Uploade","audio_name"=>$audio,"audio_url"=>"http://fworldgroup.com/API/upload/groupchat_background/".$audio));
        }
        else
        {
            echo json_encode(array("status"=>"0","response"=>"Audio Not Uploade"));
        }*/
        
	}
	
		function audiobackground2()
	{
        if(!isset($_FILES['audio']) || $_FILES['audio']['error'] == UPLOAD_ERR_NO_FILE) 
        {
            $red ='notfound.png';
             echo json_encode(array("status"=>"0","response"=>"Audio Not Uploade"));
            
        }else
        {
            $red=$_FILES['audio']['name'];
            $temp=$_FILES['audio']['tmp_name'];
            move_uploaded_file($temp,"gift_img/".$red);
             unlink("upload/groupchat_background/".$red);
            echo json_encode(array("status"=>"1","response"=>"Audio Successfully Uploade",
            "audio_name"=>$audio,"audio_url"=>"http://fworldgroup.com//API/upload/groupchat_background/".$red));
        
            
        }         
         
	}
	
	



	function my_liked_videos()
	{   
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true);
	    $array_out      = array();
	    $fb_id          = $event_json['fb_id'];
	    $query          = mysqli_query($conn,"select u.*,v.id as video_id ,v.thum as video_thum from videos v 
	                                          LEFT JOIN video_like_dislike vld ON v.id=vld.video_id
	                                          LEFT JOIN users u ON vld.fb_id = u.fb_id
	                                          where  fb_id = '$fb_id'"); 
	    $user_data      =  array();
	    if(mysqli_num_rows($query) > 0)
	    {
	       while($data = mysqli_fetch_assoc($query))
	       {
	         $user_data[] =  $data;  
	       }
	    
	     $query1 = mysqli_query($conn,"select count(id) as mene_follow_kiye from follow_users   where fb_id = '$fb_id'");
	     $data1  = mysqli_fetch_assoc($query1);
      	     
	     $output = array( 'status'=>200,'code'=>true,'mene_follow_kiye'=>$mene_follow_kiye,'mujhe_follow_kiye'=>$mujhe_follow_kiye, 'user_data'=> $user_data);
	    }else
	    { 
            $output = array( 'status'=>500,'code'=>false, 'video'=> 0)  ; 
	    }

		 print_r(json_encode($output, true));   
	}
	


	
	 function AddSocailLin()
	{ 
	  require_once("config.php");
	  date_default_timezone_set('Asia/Kolkata');
      $today       = date('d-m-Y');  
      
      $slname     = $_POST['slname'];
      $fb_id      = $_POST['fb_id'];
      $baseurl    = $_POST['baseurl'];
      $imgurl     = $_POST['imgurl'];
      $sql         =  "INSERT INTO sociallink(fb_id,slname,baseurl,imgurl,created_date)VALUES('$fb_id','$slname','$baseurl','$imgurl','$today')";
    //  echo $sql;die;
      $query3      = mysqli_query($conn,$sql);
        $feedback_id = mysqli_insert_id($conn);
      if(isset($feedback_id))
      {
    
      $output = array( 'status'=>200,'code'=>true, 'msg'=> 'Update Successfully done');  }
      else{
       $output = array( 'status'=>500,'code'=>false, 'msg'=> 'Something went wrong'); }
     
     print_r(json_encode($output, true));
      
	}

	
	
	
	
	 function feedback()
	{ 
	  require_once("config.php");
	  date_default_timezone_set('Asia/Kolkata');
      $today       = date('d-m-Y');  
      $comment     = $_POST['comment'];
      $u_name     = $_POST['u_name'];
      $fb_id      = $_POST['fb_id'];
      $sql         =  "INSERT INTO feedback(fb_id,u_name,comments,created_date)VALUES('$fb_id','$u_name','$comment','$today')";
      //echo $sql;die;
      $query3      = mysqli_query($conn,$sql);
      $feedback_id = mysqli_insert_id($conn);
      if($query3 == true){
      # UPLOAD GALLARY      
      $gallary    = count($_FILES['gallary']['name']);
        for($i=0;$i<$gallary;$i++)
        {
         if(!empty($_FILES['gallary']['name'][$i]))
            {
             $images = rand().$_FILES['gallary']['name'][$i];
             move_uploaded_file($_FILES['gallary']['tmp_name'][$i],"upload/thum/".$images) ;
                    $sql         =  "INSERT INTO feedback_gallary(feedback_id,gal)VALUES('$feedback_id','$images')";
                    $query3      = mysqli_query($conn,$sql);
            
            }
        } 
        $output = array( 'status'=>200,'code'=>true, 'msg'=> 'Update Successfully');  }
      else{
       $output = array( 'status'=>500,'code'=>false, 'msg'=> 'Something went wrong'); }
     
     print_r(json_encode($output, true));
 
	}
	
		 function appfeedback()
	{ 
	  require_once("config.php");
	  date_default_timezone_set('Asia/Kolkata');
      $today       = date('d-m-Y');  
      $comment     = $_POST['comment'];
      $u_name     = $_POST['u_name'];
      $fb_id      = $_POST['fb_id'];
       $mobile      = $_POST['mobile'];
      $sql         =  "INSERT INTO app_feedback(fb_id,u_name,comments,mobile,created_date)VALUES('$fb_id','$u_name','$comment','$mobile','$today')";
      //echo $sql;die;
      $query3      = mysqli_query($conn,$sql);
      $feedback_id = mysqli_insert_id($conn);
      if($query3 == true){
      # UPLOAD GALLARY      
      $gallary    = count($_FILES['gallary']['name']);
        for($i=0;$i<$gallary;$i++)
        {
         if(!empty($_FILES['gallary']['name'][$i]))
            {
             $images = rand().$_FILES['gallary']['name'][$i];
             move_uploaded_file($_FILES['gallary']['tmp_name'][$i],"upload/thum/".$images) ;
                    $sql         =  "INSERT INTO app_feedback_gallary(feedback_id,gal)VALUES('$feedback_id','$images')";
                    $query3      = mysqli_query($conn,$sql);
            
            }
        } 
        $output = array( 'status'=>200,'code'=>true, 'msg'=> 'Update Successfully');  }
      else{
       $output = array( 'status'=>500,'code'=>false, 'msg'=> 'Something went wrong'); }
     
     print_r(json_encode($output, true));
 
	}
	
	
	
	function uploadeStory()
	{
	 require_once("config.php");
	 $fb_id=$_POST['fb_id'];
	 $description=$_POST['description'];
	 date_default_timezone_set("Asia/Kolkata");
	 $date=date('d-m-Y h:i:s');
	 $gallary    = count($_FILES['image']['name']); 
       $j=1;
       if($gallary>0)
       {
           $myquery=mysqli_query($conn,"INSERT INTO `my_story`( `fb_id`, `description`, `status`, `datetime`) VALUES ('$fb_id','$description','0','$date')");
           if($myquery)
           {
              $getid=mysqli_query($conn,"select * from `my_story` order by id desc limit 1");
              $row=mysqli_fetch_assoc($getid);
              $id=$row['id'];
           for($i=0;$i<$gallary;$i++)
	   {
		if(!empty($_FILES['image']['name'][$i]))
		{
			$images = "upload/story_img/".time().$_FILES['image']['name'][$i];
			if(move_uploaded_file($_FILES['image']['tmp_name'][$i],$images))
			{
			    $query=mysqli_query($conn,"INSERT INTO `story_gallary`(`image`, `fb_id`,`my_story_id`) VALUES ('$images','$fb_id','$id')");
                if($query)
                {
                    $j=$j*1;
                }
                else
                {
                    $j=$j*0;
                }
			    
			}
			else
			{
			    echo json_encode(array("status"=>"0","Response"=>"Image Not Uplode")); die;
			}	
		}
	   }
           }
           else
           {
                echo json_encode(array( 'status'=>500,'code'=>false, 'userdata'=> 'Discription Not Inserted')); die;
           }
       }
       else
       {
           echo json_encode(array( 'status'=>500,'code'=>false, 'userdata'=> 0)); die;
       }
	   
	  if($j==1)
	{
	    echo json_encode(array("status"=>"1","Response"=>"Data Uploded"));
	}
	else
	{
	    echo json_encode(array("status"=>"0","Response"=>"Data Not Uploded"));
	}
	}
	
	
	
	
	
	
	
	
	
		function my_feedbackList($url)
	{   
	    $url = 'https/fworldgroup.com/API/upload/thum/';
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true); 
	    $array_out      = array();
	    $fb_id          = $event_json['fb_id'];
	    $query          = mysqli_query($conn,"select * from feedback where  fb_id = '$fb_id'"); 
	    $user_data      =  array();
	    if(mysqli_num_rows($query) > 0)
	    {  
	       while($data = mysqli_fetch_assoc($query))
	       {
	         $feedback_id = $data['feedback_id'];
	         $query2      = mysqli_query($conn,"select * from feedback_gallary where  feedback_id = '$feedback_id'");
                $arr_gal = array();
                if(mysqli_num_rows($query2) > 0)
                {  
                    
                    while($data2 = mysqli_fetch_assoc($query2))
                    {
                        array_push($arr_gal,$data2);
                    }
                    $data['gallary'] = $arr_gal;
                    
                }else
                {
                    $data['gallary'] = $arr_gal;
                    
                }
	         
	         array_push($array_out,$data);
	       }
	       
	     $output = array( 'status'=>200,'code'=>true,'url'=>$url,'data'=>$array_out);
	    }
	    else
	    { 
            $output = array( 'status'=>500,'code'=>false, 'video'=> 0)  ; 
	    }

		 print_r(json_encode($output, true));   
	}
	
	
			function app_feedbackList($url)
	{   
	    $url = 'https/fworldgroup.com/API/upload/thum/';
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true); 
	    $array_out      = array();
	    $fb_id          = $event_json['fb_id'];
	    $query          = mysqli_query($conn,"select * from app_feedback where  fb_id = '$fb_id'"); 
	    $user_data      =  array();
	    if(mysqli_num_rows($query) > 0)
	    {  
	       while($data = mysqli_fetch_assoc($query))
	       {
	         $feedback_id = $data['feedback_id'];
	         $query2      = mysqli_query($conn,"select * from app_feedback_gallary where  feedback_id = '$feedback_id'");
                $arr_gal = array();
                if(mysqli_num_rows($query2) > 0)
                {  
                    
                    while($data2 = mysqli_fetch_assoc($query2))
                    {
                        array_push($arr_gal,$data2);
                    }
                    $data['gallary'] = $arr_gal;
                    
                }else
                {
                    $data['gallary'] = $arr_gal;
                    
                }
	         
	         array_push($array_out,$data);
	       }
	       
	     $output = array( 'status'=>200,'code'=>true,'url'=>$url,'data'=>$array_out);
	    }
	    else
	    { 
            $output = array( 'status'=>500,'code'=>false, 'video'=> 0)  ; 
	    }

		 print_r(json_encode($output, true));   
	}
	
	
	
	

	
	
	

	
			function getAllFeedback($url)
	{   
	    $url = 'https/fworldgroup.com/API/upload/thum/';
	    require_once("config.php");
	    $from=$_POST['from'];
	     $to=$_POST['to'];
	     
	  	    $query = mysqli_query($conn,"SELECT af.*,CONCAT(us.first_name,us.last_name)as name FROM `app_feedback` af 
	  	    INNER JOIN users us on af.fb_id=us.fb_id order by af.feedback_id  desc limit $from,$to"); 
	  	    
	       $array_out  = array();
	    if(mysqli_num_rows($query) > 0)
	    {  
	       while($data = mysqli_fetch_assoc($query))
	       {
	         $feedback_id = $data['feedback_id'];
	      
	         $query2      = mysqli_query($conn,"select * from app_feedback_gallary where  feedback_id = '$feedback_id'");
	       
                $arr_gal = array();
                if(mysqli_num_rows($query2) > 0)
                {  
                    
                    while($data2 = mysqli_fetch_assoc($query2))
                    {
                        array_push($arr_gal,$data2);
                    }
                    $data['gallary'] = $arr_gal;
                    
                }else
                {
                    $data['gallary'] = $arr_gal;
                    
                }
	         
	         array_push($array_out,$data);
	       }
	       
	     $output = array( 'status'=>200,'code'=>true,'url'=>$url,'data'=>$array_out);
	    }
	    else
	    { 
            $output = array( 'status'=>500,'code'=>false, 'video'=> 0)  ; 
	    }

		 print_r(json_encode($output, true));   
	}
	
	
	
	
  function mystorie_like()
	{
	    require_once("config.php");
	    date_default_timezone_set('Asia/Kolkata');
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true); 
	      $fb_id          = $event_json['fb_id'];
	         $story_id         = $event_json['story_id'];
	         $datetime= date( 'Y-m-d h:i:s', time ());
	         $query  = mysqli_query($conn,"select * from my_story_like where f_id='$fb_id' and story_id = '$story_id'");
	           if(mysqli_num_rows($query) > 0)
	           {
	              
	                 $query=mysqli_query($conn,"DELETE FROM `my_story_like` WHERE story_id='$story_id' ");
                    
                  if($query)
                {
              
                     $output = array( 'status'=>200,'code'=>true,'data'=>"Deleted");
                } 
	           }
	           else
	           {
	                  $query=mysqli_query($conn,"INSERT INTO `my_story_like`(`f_id`, `story_id`, `created_at`) VALUES ('$fb_id','$story_id','$datetime')");
                if($query)
                {
                  
                     $output = array( 'status'=>201,'code'=>true,'data'=>"Liked");
                }
                else
                {
                 
                }
	           }
	           
	            print_r(json_encode($output, true));
	    
	    
	    
	    
	}
	
	
	 function mystorie_comment()
	{
	  
	    require_once("config.php");
	    date_default_timezone_set('Asia/Kolkata');
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true); 
	      $fb_id          = $event_json['fb_id'];
	         $story_id         = $event_json['story_id'];
	          $comment        = $event_json['comment'];
	         $datetime= date( 'Y-m-d h:i:s', time ());
	       
	           $query=mysqli_query($conn,"INSERT INTO `my_story_comment`(`f_id`,`story_id` , `comment` , `created_at`) VALUES ('$fb_id','$story_id','$comment','$datetime')");
                if($query)
                {
                    
                         $output = array( 'status'=>200,'code'=>true,'data'=>"saved");
                }
            
                else
                {
                 
                       $output = array( 'status'=>500,'code'=>false,'data'=>"saved");
                }
                
                 print_r(json_encode($output, true));
	    
	}
	
	
	
	
	
	
	
		 function todayTaskList()
	{
	  
	    require_once("config.php");
	    $data = array();
	    $data2 = array();
	    $user_id = $_POST['user_id'];
	    /*
	    if($user_id == '')
	    {
	      $output = array( 'status'=>500,'code'=>true,'img_url'=>'http://fworldgroup.com/fworlfinal/Admin panel/tictic/gift_img/','message' =>'User id missing','data'=>$data,'user_current_week_data'=>$data2); 
	      print_r(json_encode($output, true));die;
	    }
	    */
	    $query99 = mysqli_fetch_assoc(mysqli_query($conn,"SELECT SUM(geted_amt) as total from todayTaskhistory where user_id = '$user_id'"));
	    $total   = $query99['total'];
	    
           $query=mysqli_query($conn,"SELECT d.*,g.title as gift_name,g.icon as gift_icon FROM `day` d JOIN gifts g ON d.gift_id = g.gifts_id");
           
            while($row = mysqli_fetch_assoc($query))
            {
                $data[] = $row;
            }
           if(!empty($data)) 
           {
                # THIS WEEK DATES AND DAYS
                $Monday   = date("d-m-Y", strtotime('Monday this week'));   
                $Tuesday  = date("d-m-Y", strtotime('Tuesday this week'));
                $Wednesday= date("d-m-Y", strtotime('Wednesday this week'));   
                $Thursday = date("d-m-Y", strtotime('Thursday this week'));
                $Friday   = date("d-m-Y", strtotime('Friday this week'));   
                $Saturday = date("d-m-Y", strtotime('Saturday this week'));
                $Sunday   = date("d-m-Y", strtotime('Sunday this week'));   
                # check user data for current week
                $query2     = mysqli_query($conn,"SELECT * from todayTaskhistory where user_id = '$user_id'  AND today_date IN('$Monday','$Tuesday','$Wednesday','$Thursday','$Friday',
                                                  '$Saturday','$Sunday')");
                while($row2 = mysqli_fetch_assoc($query2))
                {
                    $data2[] = $row2;
                }
                $output = array( 'status'=>200,'code'=>true,'img_url'=>'http://fworldgroup.com/fworlfinal/Admin panel/tictic/gift_img/','message' =>'Get data','data'=>$data,
                                        'user_total_earning_from_task'=>$total,'user_current_week_data'=>$data2);
            }
            else
            {
             
                   $output = array( 'status'=>500,'code'=>false,'img_url'=>'http://fworldgroup.com/fworlfinal/Admin panel/tictic/gift_img/','message' =>'Data not found',
                                 'user_total_earning_from_task'=>$total,'data'=>$data,'user_current_week_data'=>$data2);
            }
            print_r(json_encode($output, true));
	    
	}
	
	
		
		 function todayTaskhistory()
	{
	  
	    require_once("config.php");
	    $data = array();
	    $data2 = array();
	    date_default_timezone_set('Asia/Kolkata');
        $today_date  = date('d-m-Y');
         $today_time  = date('d-m-Y H:i:s');
         $user_id = $_POST['user_id'];
         $day_id = $_POST['day_id'];
         $gift_id = $_POST['gift_id'];
         if($user_id == '' || $day_id == '' || $gift_id == '')
         {
             $output = array( 'status'=>500,'code'=>false,'message' => 'Missing field plz check','data'=>$data);
              print_r(json_encode($output, true));
             die;
         }
	 
	           $query=mysqli_query($conn,"SELECT * from todayTaskhistory where user_id = '$user_id'  AND today_date = '$today_date'");
                    while($row = mysqli_fetch_assoc($query))
                    {
                        $data[] = $row;
                    }
              
               if(!empty($data)) 
               {
                         $output = array( 'status'=>500,'code'=>false,'message' => 'you have already complete your taskkk','data'=>$data,'getDiamondData'=>$data2);
                          print_r(json_encode($output, true));
                         die;
                }
                else
                {   
                       $getGiftAMT          = mysqli_query($conn,"select amt from gifts where gifts_id = '$gift_id' ");
                                $amt_of_gift= mysqli_fetch_assoc($getGiftAMT);
                                $amt        = $amt_of_gift['amt'];
                                $after_5prt = ($amt*5)/100;
                       $query=mysqli_query($conn,"INSERT INTO todayTaskhistory(user_id,day_id,gift_id,today_date,today_time,geted_amt) values
                                         ('$user_id','$day_id','$gift_id','$today_date','$today_time','$after_5prt')");
                       $last_id = mysqli_insert_id($conn); 
                       if(isset($last_id))
                       {
                           
                       # TO GET AMT OF GIFT ASSOCIATED WITH TASK TO USER 
                        //echo $after_5prt;die;
    	     $query1                = mysqli_query($conn,"UPDATE users SET  total_earning = total_earning + '$after_5prt' WHERE fb_id = '$user_id' ");
    	                               
    	     $queryForEarningHisory = mysqli_query($conn,"INSERT INTO earning__history (sender_id,receiver_id,gift_id,diamond,toal_amount,date,action)
    	                                   VALUES('2116671305090123','$user_id','$gift_id','0','$after_5prt','$today_time','from_task')"); 
                           
                           
                           
                           
                          	    $query=mysqli_query($conn,"SELECT gifts.*,concat('http://fworldgroup.com/fworlfinal/Admin panel/tictic/gift_img/',icon) as gift_icon from gifts where gifts_id = '$gift_id'");
                                while($row = mysqli_fetch_assoc($query))
                                {
                                    $data[] = $row;
                                }
                                
                                $query2=mysqli_query($conn,"SELECT * from todayTaskhistory where todayTaskhistory_id = '$last_id'");
                                while($row2 = mysqli_fetch_assoc($query2))
                                {
                                    $data2[] = $row2;
                                }
                            
                            $output = array( 'status'=>200,'code'=>true,'message' =>'You task has been complete Now','data'=>$data2,'getDiamondData'=>$data); 
                       }else
                       {
                         $output = array( 'status'=>500,'code'=>false,'message' =>'There is someting wrong','data'=>$data ,'dataOfToday'=>$data2);  
                       }
                 
                       
                }
                
                 print_r(json_encode($output, true));
	
	
	}
	
	
	
	
	
	
		 function mystorie_likeList_old()
    	{   
	    $url = 'https/fworldgroup.com/API/upload/thum/';
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true); 
	    $array_out      = array();
	    $fb_id          = $event_json['fb_id'];
	     $story_id       = $event_json['story_id'];
	    $query          = mysqli_query($conn,"select * from my_story_like where  story_id = '$story_id'"); 
	    $user_data      =  array();
	    if(mysqli_num_rows($query) > 0)
	    {  
	       while($data = mysqli_fetch_assoc($query))
	       {
	         $f_id = $data['f_id'];
	         
	         $query2      = mysqli_query($conn,"select * from users where  fb_id = '$f_id'");
                $arr_gal = array();
                if(mysqli_num_rows($query2) > 0)
                {  
                    
                    while($data2 = mysqli_fetch_assoc($query2))
                    {
                      
                        $output2[]=$data2;
                    }
                 
                
                }else
                {
                   $output2[]=null;
                    
                }
	         
	     
	       }
	       
	     $output = array( 'status'=>200,'code'=>true,'url'=>$url,'data'=>$output2);
	    }
	    else
	    { 
            $output = array( 'status'=>500,'code'=>false, 'video'=> 0)  ; 
	    }

		 print_r(json_encode($output, true));   
	}
	
	
	 function mystorie_CommentsList()
    	{   
	    $url = 'https/fworldgroup.com/API/upload/thum/';
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true); 
	    $array_out      = array();
	    $fb_id          = $event_json['fb_id'];
	    $story_id       = $event_json['story_id'];
	    
	    //echo "SELECT A.* , B.`comment` FROM `users`AS A INNER JOIN `my_story_comment` AS B ON B.`f_id` = A.`fb_id` WHERE B.story_id = '$story_id'";die;
	    
	    $query          = mysqli_query($conn,"SELECT A.* , B.`comment` FROM `users`AS A INNER JOIN `my_story_comment` AS B ON B.`f_id` = A.`fb_id` WHERE B.story_id = '$story_id'"); 

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
	
	
	
	
	
	
	
		
	
	 function mystorie_LikeList()
    	{

    	    echo "Ok in";die;
	    $url = 'https/fworldgroup.com/API/upload/thum/';
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true); 
	    $array_out      = array();
	    $fb_id          = $event_json['fb_id'];
	    $story_id       = $event_json['story_id'];
	    
	    echo "SELECT A.* , B.`comment` FROM `users`AS A INNER JOIN `my_story_like` AS B ON B.`f_id` = A.`fb_id` WHERE B.story_id = '$story_id'";die;
	    $query          = mysqli_query($conn,"SELECT A.* , B.`comment` FROM `users`AS A INNER JOIN `my_story_like` AS B ON B.`f_id` = A.`fb_id` WHERE B.story_id = '$story_id'"); 

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
	
	
	
	function upload_my_coverpic()
	{
	    require_once("config.php");
 		$input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);

	    $fb_id    = $event_json['fb_id'];
        $title    = 'cover pic';
        $cover_pic_image_path    = $event_json['cover_pic_image_path'];
     

			if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out );
				print_r(json_encode($output, true)); 
				exit();
			}

	    	if(!isset($event_json['cover_pic_image_path']) || $event_json['cover_pic_image_path']=="") 
			{
				$msg_out="Validation Error event_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out );
				print_r(json_encode($output, true)); 
				exit();
			}
		 $Acfile = $cover_pic_image_path;  
         $sql = "INSERT INTO cover_pic_history(fb_id,cover_pic,title)VALUES('$fb_id','$Acfile','$title')"; 
	     $query3      = mysqli_query($conn,$sql);
	     $last_id = mysqli_insert_id($conn);
	    if($query3 == true)
	    {
	        $query       = mysqli_query($conn,"UPDATE users SET cover_pic = '".$Acfile."' WHERE fb_id = '".$fb_id."'");
	        
	    	$query  = mysqli_query($conn,"SELECT * from cover_pic_history where cover_pic_history_id =  '".$last_id."' "); 
    	
    	    if(mysqli_num_rows($query) > 0)
    	    {  
    	       while($data = mysqli_fetch_assoc($query))
    	       {
    	         $data_out[] =$data;
    	       }
    	    }    
	    $output = array( 'status'=>200,	'code'=>true,	'data' => $data_out);
	    }
	    else
	    { 
	        $data_out= array();
            $output = array( 'status'=>500,'code'=>false,'data' => $data_out)  ; 
	    }

		 print_r(json_encode($output, true)); 
    }
	
	
	
		 function update_my_profile_pic()
	{
	    require_once("config.php");
        $fb_id    = $_POST['fb_id'];
        $title    = $_POST['title'];
        if(!isset($_FILES['cover_pic']) || $_FILES['cover_pic']['error'] == UPLOAD_ERR_NO_FILE) 
         {   
           $file  = BASE_PATH.'/API/upload/thum/no_image_found.jpg';
         }else
         { 

         	 $file  = time()."_".rand().trim($_FILES['cover_pic']['name']);
             $temp  = $_FILES['cover_pic']['tmp_name'];
             $attach_url   = $_SERVER["DOCUMENT_ROOT"]."/custom_uploads/user_profile/".$file;
             move_uploaded_file($temp,$attach_url);
             $file = BASE_PATH."/custom_uploads/user_profile/".$file;
         }
         $Acfile = $file;  
         $query       = mysqli_query($conn,"UPDATE users SET profile_pic = '".$Acfile."' WHERE fb_id = '".$fb_id."'");
	     $sql         =  "INSERT INTO cover_pic_history(fb_id,cover_pic,title)VALUES('$fb_id','$Acfile','$title')"; 
	     $query3      = mysqli_query($conn,$sql);
	      $last_id = mysqli_insert_id($conn);
	    if($query3 == true)
	    {
	        
	     $query          = mysqli_query($conn,"SELECT * from cover_pic_history where cover_pic_history_id =  '".$last_id."' "); 
    	    if(mysqli_num_rows($query) > 0)
    	    {  
    	       while($data = mysqli_fetch_assoc($query))
    	       {
    	         $data_out[] =$data;
    	     
    	       }
    	    }     
	    $output = array( 'status'=>200,'code'=>true,'data' =>  $data_out);
	    }
	    else
	    { 
            $output = array( 'status'=>500,'code'=>false, 'message'=> 'Something went wront')  ; 
	    }

		 print_r(json_encode($output, true)); 
      
      
	}
	
	

	
	 function getAllMyImages()
	{
	     require_once("config.php");
         $fb_id    = $_POST['fb_id'];
	     $query          = mysqli_query($conn,"SELECT * from cover_pic_history where fb_id =  '".$fb_id."' "); 
    	    if(mysqli_num_rows($query) > 0)
    	    {  
    	       while($data = mysqli_fetch_assoc($query))
    	       {
    	         $data_out[] =$data;
    	     
    	       }
    	    }    
    	 if(!empty($data_out))
    	 {
	    $output = array( 'status'=>200,'code'=>true,'data' =>  $data_out);
	    }
	    else
	    { 
            $output = array( 'status'=>500,'code'=>false, 'message'=> 'Something went wront')  ; 
	    }

		 print_r(json_encode($output, true)); 
      
      
	}
	
	
	
	
	
	
		 function cover_pic_delete()
	{
	     require_once("config.php");
         $cover_pic_history_id    = $_POST['cover_pic_history_id'];
         
        // echo "delete from cover_pic_history where cover_pic_history_id =  '".$cover_pic_history_id."' ";die;
	     $query          = mysqli_query($conn,"delete from cover_pic_history where cover_pic_history_id =  '".$cover_pic_history_id."' "); 
   
    	 if($query == true)
    	 {
	    $output = array( 'status'=>200,'code'=>true,'data' => 'succesfully deleted');
	    }
	    else
	    { 
            $output = array( 'status'=>500,'code'=>false, 'message'=> 'Something went wront')  ; 
	    }

		 print_r(json_encode($output, true)); 
	}
	
	function save_verification_application()
	{
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true); 
       $fb_id  = $event_json['fb_id'];
       $link = $event_json['link'];
       $date=date('Y-m-d h:i:s');
   //     if(!isset($event_json['link']) || $event_json['link']=="") 
			// {
			// 	$msg_out="Validation Error link Missing";
			//     $output=array( "code" => "202", "msg" => $msg_out ,  "data"=> "");
			// 	print_r(json_encode($output, true)); 
			// 	exit();
			// }
			
			if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "202", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
		   
        $query = mysqli_query($conn,"SELECT * from request_verification_application where fb_id =  '".$fb_id."' "); 
    	    if(mysqli_num_rows($query) > 0)
    	    {
    	    $last_data =mysqli_fetch_assoc( $query);

    	       $output = array( 'status'=>201,'code'=>true,'last_data' => $last_data, 'data'=> "Request Already Exist!!1");
    	    } 
    	    else
    	    {
    	      
    	        if(isset($event_json['link']) && $event_json['link']!="") 
				{
    	       $sql         =  "INSERT INTO `request_verification_application`(`fb_id`, `social_link`,`created_at`) VALUES ('$fb_id','$link','$date')"; 
	     $query3      = mysqli_query($conn,$sql);
	      $last_id = mysqli_insert_id($conn);
	    if($query3 == true)
	    {
	          
	    $output = array( 'status'=>200,'code'=>true,'data' =>  "Saved");
	    }
	    else
	    { 
             $output = array( 'status'=>500,'code'=>true,'data' =>  "Failed");
	    }  
			}else{

				$msg_out="Validation Error link Missing";
             $output = array( 'status'=>202,'code'=>true,'data' => $msg_out);
			 
			  //  $output=array( "code" => "202", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			
    	    }
    
	   

		 print_r(json_encode($output, true)); 
      
      
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
	 function SetPrivacy()
	{
	    require_once("config.php");
        $fb_id     = $_POST['fb_id'];
        $action    = $_POST['action'];
        if(empty($fb_id) )
        {
            $output = array( 'status'=>500,'code'=>false,'message' =>'filed missing')  ;
             print_r(json_encode($output, true));die;
        }
        $query = mysqli_query($conn,"UPDATE users SET private = '".$action."' WHERE fb_id = '".$fb_id."'");
	    if($query == true)
	    {
	        
	       $query = mysqli_query($conn,"UPDATE videos SET private_v = '".$action."' WHERE fb_id = '".$fb_id."'"); 
	       $output = array( 'status'=>200,'code'=>true ,'message' =>'update ','action' =>$action);
	    }
	    else
	    { 
	         $data_out= array();
            $output = array( 'status'=>500,'code'=>false ,'message' =>'error ')  ; 
	    }

		 print_r(json_encode($output, true)); 
      
      
	}
	



	
	
	 function BlockedOtherPerson()
	{
	    require_once("config.php");
	    date_default_timezone_set('Asia/Kolkata');
        $today = date('d-m-Y');
        $blocker_fb_id    = $_POST['blocker_fb_id'];
        $blocked_fb_id    = $_POST['blocked_fb_id'];
            $query          = mysqli_query($conn,"SELECT * from blocked_history where blocker_fb_id =  '".$blocker_fb_id."' AND  blocked_fb_id = '".$blocked_fb_id."'"); 

    	    if(mysqli_num_rows($query) > 0)
    	    { 
    	     
    	     
    	     $get_data = mysqli_fetch_assoc($query);
    	     $now_status = $get_data['status'];
    	     if($now_status == 0)
    	     {$set_status = 1;$o='Has been blocked';}else{$set_status = 0;$o= 'Has Been Unblock';}
    	     
    	       $query = mysqli_query($conn,"UPDATE blocked_history SET status = '$set_status',date = '$today' where blocker_fb_id = '".$blocker_fb_id."' AND blocked_fb_id = '".$blocked_fb_id."'");
    	                   $output = array( 'status'=>200,'code'=>true,'message' =>$o,'block_code'=>$set_status);print_r(json_encode($output, true)); die;
    	    }else
    	    {
    	      $o = 'Has been block';     
    	      $sql         =  "INSERT INTO `blocked_history`(`blocker_fb_id`, `blocked_fb_id`,`status`,date) VALUES ('$blocker_fb_id','$blocked_fb_id','1','$today')"; 
    	     // echo $sql;die;
	          $query3      = mysqli_query($conn,$sql);
	          $last_id = mysqli_insert_id($conn); 
	          if(isset($last_id))
	          {
	                        $output = array('status'=>200,'code'=>true,'message' =>'Has been blocked ','block_code'=>1);print_r(json_encode($output, true)); 
	          }else
	          {
                 $output = array( 'status'=>500,'code'=>false,'message' =>'error '); print_r(json_encode($output, true));  
	          }
    	    }

      
      
	}
	
		function blocked_personLIST()
	{  
	    ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	    require_once("config.php");
        $fb_id  = $_POST['fb_id'];
        $data = array();
       //
    //   echo "SELECT * from users u   JOIN blocked_history bh ON u.fb_id = bh.blocked_fb_id where bh.blocker_fb_id =  '".$fb_id."' ";die;
        $query          = mysqli_query($conn,"SELECT * from users u   JOIN blocked_history bh ON u.fb_id = bh.blocked_fb_id where bh.blocker_fb_id =  '".$fb_id."' and status = 1 "); 
    	    if(mysqli_num_rows($query) > 0)
    	    {  
    	       while($data1 = mysqli_fetch_assoc($query))  
    	       {
    	           
    	        $data[]  = $data1;
    	       }
    	     // print_r($data);//die;
    	       $output = array( 'status'=>200,'code'=>true,'message' =>"list of my blocked user",'data' =>  $data);
    	    }else
    	    {
    	        $output = array( 'status'=>500,'code'=>true,'message' =>"blocked user list is empty",'data' =>  $data);
    	    }
    	    print_r(json_encode($output, true)); 
	}   
	
	
	
	
	
	
	
		
	 function checkPersonForBlock()
	{
	    require_once("config.php");
	    date_default_timezone_set('Asia/Kolkata');
        $today = date('d-m-Y');
        $get_data = array();
        $fb_id    = $_POST['fb_id'];
        $checked_fb_id    = $_POST['checked_fb_id'];
        $query          = mysqli_query($conn,"SELECT * from blocked_history where blocker_fb_id =  '".$fb_id."' AND  blocked_fb_id = '".$checked_fb_id."'"); 
    	    if(mysqli_num_rows($query) > 0)
    	    { 
    	     
    	     $get_data = mysqli_fetch_assoc($query);
    	      $output = array( 'status'=>200,'code'=>true,'message' =>"this person is blocked if status 1 else not",'data' =>  $get_data);
    	    }
    	    else
    	    {
    	      $output = array( 'status'=>500,'code'=>false,'message' =>"not blocked",'data' =>  $get_data);  
    	    }
    	  print_r(json_encode($output, true));  
	}
	
 	
	
	
		 function myEarningHistory()
	{
	    require_once("config.php");
	    date_default_timezone_set('Asia/Kolkata');
        $today = date('d-m-Y');
        $get_data = array();
        $fb_id    = $_POST['fb_id'];
      
       // echo "SELECT * from users u JOIN earning__history eh ON u.fb_id = eh.sender_id where eh.receiver_id =  '".$fb_id."'";die;
        $query          = mysqli_query($conn,"SELECT u.*,eh.*,sum(eh.toal_amount) as toal_amount
                            from users u JOIN earning__history eh ON u.fb_id = eh.receiver_id 
                                                 
                                            where eh.receiver_id =  '".$fb_id."'  GROUP BY eh.sender_id"); 
    	    if(mysqli_num_rows($query) > 0)
    	    { 
    	     
    	      while($data = mysqli_fetch_assoc($query))
    	      {
    	          $get_data[]=$data;
    	      }
    	      $output = array( 'status'=>200,'code'=>true,'message' =>"My earning history",'data' =>  $get_data);
    	    }
    	    else
    	    {
    	      $output = array( 'status'=>500,'code'=>false,'message' =>"No earning history",'data' =>  $get_data);  
    	    }
    	  print_r(json_encode($output, true));  
	}
	
function current_event()
{
    
    date_default_timezone_set('Asia/Kolkata');
   // $today   = date('d-m-Y');
    $today   = date('Y-m-d');
     require_once("config.php");
     $response=array();
    // $query = "SELECT * FROM `event_admin` WHERE '$today' BETWEEN `from_d` AND `to_d`";
   $query = "SELECT * FROM `event_admin` WHERE  to_d >= $today";
 //echo $query;die; 
        $dept = mysqli_query($conn, $query);
        if(mysqli_num_rows($dept)>0)
        {
           while ($row = $dept->fetch_assoc())
           {
            $event_admin_id = $row['event_admin_id'];
            $query2 = "SELECT * FROM `event_admin_gallary` where   event_admin_id = '$event_admin_id'";
                  
            $dept2 = mysqli_query($conn, $query2);
             $response2=array();
            if(mysqli_num_rows($dept2)>0)
            {
                
                while ($row2 = $dept2->fetch_assoc()) 
                {
                    array_push($response2,$row2);
                }   
                    $row['banner_of_event']=$response2;
                      
             array_push($response,$row);       
            }
           
           
               
            } 
            echo json_encode(['success' => 200,'result'=>true,'img_url'=>'http://fworldgroup.com/fworlfinal/Admin panel/tictic/gift_img/','message'=>"successfuly get data",'data' => $response]);
        }else
        {
            echo json_encode(['success' => 500,'result'=>false,'img_url'=>'http://fworldgroup.com/fworlfinal/Admin panel/tictic/gift_img/','message'=>"Something went wrong"]);
        }
}
	
	
	
	
	
	
	
	
	
	function GetEventRanking()
	{
     date_default_timezone_set('Asia/Kolkata');
     $today     = date('Y-m-d');
     require_once("config.php"); 
     $response =array();
     $response2= array();
     
    /* $from = $_POST['from'];
     $to = $_POST['to'];*/
       $action = $_POST['action'];
       
       if($action=="LiveGift")
       {
              $sql5="SELECT * FROM `event_admin` WHERE type='LiveGift'";
    $result5 = mysqli_query($conn,$sql5);
    $row5 = mysqli_fetch_assoc($result5);
  $from = $row5['from_d']." ".$row5['s_time']; 
    $to = $row5['to_d']." ".$row5['e_time']; 
   // echo $from."-".$to;
     
       }
       else
       {
               $sql5="SELECT * FROM `event_admin` WHERE type='RoomGift'";
    $result5 = mysqli_query($conn,$sql5);
    $row5 = mysqli_fetch_assoc($result5);
    $from = $row5['from_d']." ".$row5['s_time']; 
    $to = $row5['to_d']." ".$row5['e_time']; 
   // echo $from."-".$to;
       }
     
 
//======================================================
    
    if($action=="LiveGift")
    {
        $sql = "select `mobile`,`username`,`first_name`,`last_name`,`profile_pic`,ugh.*,SUM(diamond) as totalIncome FROM
                        `user_gift_history` ugh
                    JOIN users u ON ugh.receiver_id = u.fb_id
                    where action = 'LiveGift' AND `real_date` BETWEEN '$from' AND '$to' GROUP by
                    ugh.receiver_id ORDER BY totalIncome desc";
	                //echo $sql;die;
	                    $dept = mysqli_query($conn, $sql);
	                    
	   	    $sql2 = "select `mobile`,`username`,`first_name`,`last_name`,`profile_pic`,ugh.*,SUM(diamond) as totalIncome FROM  `user_gift_history` ugh
	   	     JOIN users u ON ugh.receiver_id = u.fb_id 
	            where action = '$action' AND `date` = '$today' GROUP by ugh.receiver_id ORDER BY totalIncome desc";
	        $dept2 = mysqli_query($conn, $sql2);                 
     
           while ($row = $dept->fetch_assoc())
           {
               $response[] = $row;
           }
            while ($row2 = $dept2->fetch_assoc())
           {
               $response2[] = $row2;
               }
    }
    else
    {
      //  
        
    
    $sql = "SELECT room_name as first_name,sum(diamond)as totalIncome,room_profile as profile_pic,room_name as last_name ,
      action,room_id as username FROM `user_gift_history`  where `action`='RoomGift'  
      AND `real_date` BETWEEN '$from' AND '$to' GROUP BY room_id ORDER BY totalIncome desc";
	                //echo $sql;die;
	                    $dept = mysqli_query($conn, $sql);
	                    
	   	    $sql2 = "SELECT room_name as first_name,sum(diamond)as totalIncome,room_profile as profile_pic,room_name as last_name ,
      action,room_id as username FROM `user_gift_history`  where `action`='RoomGift'  
      AND `date`='$today' GROUP BY room_id ORDER BY totalIncome desc";
	        $dept2 = mysqli_query($conn, $sql2);                 
     
           while ($row = $dept->fetch_assoc())
           {
               $response[] = $row;
           }
            while ($row2 = $dept2->fetch_assoc())
           {
               $response2[] = $row2;
           }
    
}

   
	    
           
           echo json_encode(['success' => 200,'result'=>true,'message'=>"Data geted",'all_event_ranking' => $response,'today_event_ranking' => $response2]);
       
	}
	
	
  function GetEventRanking_Backup()
	{
     date_default_timezone_set('Asia/Kolkata');
     $today     = date('Y-m-d');
     require_once("config.php"); 
     $response =array();
     $response2= array();
     
    /* $from = $_POST['from'];
     $to = $_POST['to'];*/
       $action = $_POST['action'];
       
       if($action=="LiveGift")
       {
              $sql5="SELECT * FROM `event_admin` WHERE type='LiveGift'";
    $result5 = mysqli_query($conn,$sql5);
    $row5 = mysqli_fetch_assoc($result5);
  $from = $row5['from_d']." ".$row5['s_time'].":"."00"; 
    $to = $row5['to_d']." ".$row5['e_time'].":"."00"; 
    //echo $from."-".$to;
     
       }
       else
       {
               $sql5="SELECT * FROM `event_admin` WHERE type='RoomGift'";
    $result5 = mysqli_query($conn,$sql5);
    $row5 = mysqli_fetch_assoc($result5);
    $from = $row5['from_d']." ".$row5['s_time'].":"."00"; 
    $to = $row5['to_d']." ".$row5['e_time'].":"."00"; 
  //  echo $from."-".$to;
       }
     
 
//======================================================


   
	    $sql = "select `mobile`,`username`,`first_name`,`last_name`,`profile_pic`,ugh.*,SUM(diamond) as totalIncome FROM
                    `user_gift_history` ugh
                    JOIN users u ON ugh.receiver_id = u.fb_id
                    where action = 'LiveGift' AND `real_date` BETWEEN '$from' AND '$to' GROUP by
                    ugh.receiver_id ORDER BY totalIncome desc";
	                //echo $sql;die;
	                    $dept = mysqli_query($conn, $sql);
	                    
	   	    $sql2 = "select `mobile`,`username`,`first_name`,`last_name`,`profile_pic`,ugh.*,SUM(diamond) as totalIncome FROM  `user_gift_history` ugh
	   	     JOIN users u ON ugh.receiver_id = u.fb_id 
	            where action = '$action' AND `date` = '$today' GROUP by ugh.receiver_id ORDER BY totalIncome desc";
	        $dept2 = mysqli_query($conn, $sql2);                 
     
           while ($row = $dept->fetch_assoc())
           {
               $response[] = $row;
           }
            while ($row2 = $dept2->fetch_assoc())
           {
               $response2[] = $row2;
           }
           
           echo json_encode(['success' => 200,'result'=>true,'message'=>"Data geted",'all_event_ranking' => $response,'today_event_ranking' => $response2]);
       
	}
	
	
	
	

		
		function all_notification()
	{
	    require_once("config.php");
	    date_default_timezone_set('Asia/Kolkata');
        $today = date('d-m-Y');
             $file_path = 'http://3.128.105.101/';	
        $get_data = array();
        $query          = mysqli_query($conn,"SELECT `notification_id`, `title`, `des`, DATE_FORMAT(`notification`.`date`,'%d-%m-%y %h:%i:%s') as date, `notification_image`, `notification_type` from notification order by notification_id DESC"); 
    	    if(mysqli_num_rows($query) > 0)
    	    { 
    	     
    	      while($data = mysqli_fetch_assoc($query))
    	      {
                  if($data['notification_image']!=''){
                 $data['notification_image']=$file_path.$data['notification_image']; 
                  }
    	          $get_data[]=$data;
    	      }
    	      $output = array( 'status'=>200,'code'=>true,'message' =>"Get notification",'data' =>  $get_data);
    	    }
    	    else
    	    {
    	      $output = array( 'status'=>500,'code'=>false,'message' =>"No notification",'data' =>  $get_data);  
    	    }
    	  print_r(json_encode($output, true));  
	}
	
	
	
			
		function rechargePlan()
	{
	    require_once("config.php");
	    date_default_timezone_set('Asia/Kolkata');
        $today = date('d-m-Y');
        $get_data = array();
        $query          = mysqli_query($conn,"SELECT * from recharge_plan order by recharge_plan_id ASC"); 
    	    if(mysqli_num_rows($query) > 0)
    	    { 
    	     
    	      while($data = mysqli_fetch_assoc($query))
    	      {
    	          $get_data[]=$data;
    	      }
    	      $output = array( 'status'=>200,'code'=>true,'message' =>"Get Recharge",'data' =>  $get_data);
    	    }
    	    else
    	    {
    	      $output = array( 'status'=>500,'code'=>false,'message' =>"No Recharge",'data' =>  $get_data);  
    	    }
    	  print_r(json_encode($output, true));  
	}
	
	
	
	
	
	
	
	
	
	
	 function activateRechargePlan()
	{   
	    require_once("config.php");
	    date_default_timezone_set('Asia/Kolkata');
	    $array_out   = array();
        $today       = date('d-m-Y H:i');
	    
	    $fb_id           = $_POST['fb_id'];
	    $diamond         = $_POST['diamond'];
	    $inr         = $_POST['inr'];
	    $recharge_plan_id= $_POST['recharge_plan_id'];
        if($fb_id != '' && $fb_id != 'null'  && $diamond != '' && $diamond !='null' )
        {   
    	     $query1          = mysqli_query($conn,"UPDATE users SET  total_diamondd = total_diamondd + '$diamond' WHERE fb_id = '$fb_id' ");  
    	     $query3          = mysqli_query($conn,"INSERT INTO activateRechargePlan (fb_id,diamond,inr,recharge_plan_id,date)
    	                                   VALUES('$fb_id','$diamond','$inr','$recharge_plan_id','$today')");
    	                                 
    	     if($query3 == true)
    	     $output = array( 'status'=>200,'code'=>true, 'msg'=> ' Recharge Successfully done');
    	     else
    	     $output = array( 'status'=>500,'code'=>false, 'msg'=> 'Something went wrong');
        }else
        {
            $output = array( 'status'=>500,'code'=>false, 'msg'=> 'Field missing');
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


			
		function MyNearByUsers()
	{
	    require_once("config.php");
	    date_default_timezone_set('Asia/Kolkata');
        $today = date('d-m-Y');
        $get_data = array();
        $latitude = $_POST['lat'];
        $longitude  = $_POST['lon'];
        
        $sql   = "select
                          (((acos(sin(('$latitude'*pi()/180)) * sin((`lat`*pi()/180))+cos(('$latitude'*pi()/180)) 
                          * cos((`lat`*pi()/180)) * cos((('$longitude'- `lon`)*pi()/180))))*180/pi())*60*1.1515) 
                          AS  distance,users.* From users    having distance < 25  order by rand() ";
                       //  echo $sql;die;
        $query          = mysqli_query($conn,$sql); 
        
    	    if(mysqli_num_rows($query) > 0)
    	    { 
    	     
    	      while($data = mysqli_fetch_assoc($query))
    	      {
    	          $get_data[]=$data;
    	      }
    	      $output = array( 'status'=>200,'code'=>true,'message' =>"Get Recharge",'data' =>  $get_data);
    	    }
    	    else
    	    {
    	      $output = array( 'status'=>500,'code'=>false,'message' =>"No Recharge",'data' =>  $get_data);  
    	    }
    	  print_r(json_encode($output, true));  
	}
	
	
		function MyNearByUsers2()
	{
	    require_once("config.php");
	    date_default_timezone_set('Asia/Kolkata');
        $today = date('d-m-Y');
        $get_data = array();
        $latitude = $_POST['lat'];
        $longitude  = $_POST['lon'];
         $fb_id   = $_POST['fb_id']; 
        
        $sql   = "select
                          (((acos(sin(('$latitude'*pi()/180)) * sin((`lat`*pi()/180))+cos(('$latitude'*pi()/180)) 
                          * cos((`lat`*pi()/180)) * cos((('$longitude'- `lon`)*pi()/180))))*180/pi())*60*1.1515) 
                          AS  distance,users.* From users    having distance < 25  order by rand() ";
                       //  echo $sql;die;
        $query          = mysqli_query($conn,$sql); 
        
    	                                 
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
	   
	     $output = array( 'status'=>200,'code'=>true, 'data'=> $user_data);
	    }else
	    { 
            $output = array( 'status'=>500,'code'=>false, 'video'=> 0)  ; 
	    }

		 print_r(json_encode($output, true));   
	}
	




		 function DeleteMyStory()
	{
	     require_once("config.php");
         $id    = $_POST['id'];
         
        // echo "delete from cover_pic_history where cover_pic_history_id =  '".$cover_pic_history_id."' ";die;
	     $query          = mysqli_query($conn,"delete from my_story where id =  '".$id."' "); 
   
    	 if($query == true)
    	 {
	    $output = array( 'status'=>200,'code'=>true,'data' => 'succesfully deleted');
	    }
	    else
	    { 
            $output = array( 'status'=>500,'code'=>false, 'message'=> 'Something went wront')  ; 
	    }

		 print_r(json_encode($output, true)); 
	}
	
	
	function sendNotification()
	{
	    
	

define( 'API_ACCESS_KEY', 'AAAAY30-QME:APA91bHAvrPmV5aeBV7XjIwg9GsTdZqziEvULMHKrmTl5MxN_NKumfsydc5JS1CV7bDvqh5dtVjFbAl0MZ23A2DcFeJfDj9rlDAn2JhdKyGPHGukLEs3Vc4rF9z6-IBNffNr32OzvToT');
 //   $registrationIds = ;
 //$token="/topics/all";
 
  $token=$_POST['token'];
 $body=$_POST['body'];
  $title=$_POST['title'];
 
#prep the bundle
     $msg = array
          (
		'body' 	=> $_POST['body'],
		'title'	=> $_POST['title'],
             	
          );
	$fields = array
			(
				'to'		=> $token,
				'notification'	=> $msg
			);
	
	
	$headers = array
			(
				'Authorization: key=' . API_ACCESS_KEY,
				'Content-Type: application/json'
			);
#Send Reponse To FireBase Server	
		$ch = curl_init();
		curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
		curl_setopt( $ch,CURLOPT_POST, true );
		curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
		curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
		$result = curl_exec($ch );
		echo $result;
		curl_close( $ch );

	    
	}
	
	
		function checkRoomExist()
	{
	     require_once("config.php");
         $id    = $_POST['id'];
         
         $output2=array();
	     $query= mysqli_query($conn,"select * from   room_payment_history  where user_id = '".$id."' "); 
	      if(mysqli_num_rows($query) > 0)
   {
    	     $query2= mysqli_query($conn,"SELECT * FROM `room_amount` limit 1"); 
    	     
    	     if(mysqli_num_rows($query2) > 0)
    	     {
    	           while($data = mysqli_fetch_assoc($query2))
    	          {
    	            $output2= $data;
    	          }
    	          
    	            $output = array( 'status'=>200,'data' => 'Exist','pay'=>$output2);
    	     }
    	     else
    	     {
    	           $output = array( 'status'=>200,'data' => 'Exist','pay11'=>$output2);
    	     }
    	     
	  
	    }
	    else
	    { 
	        $query2= mysqli_query($conn,"SELECT * FROM `room_amount` limit 1"); 
    	     
    	     if(mysqli_num_rows($query2) > 0)
    	     {
    	           while($data = mysqli_fetch_assoc($query2))
    	          {
    	           $output2= $data;
    	          }
    	          
    	           
    	     }
    	     else
    	     {
    	           
    	         $output2=array();
    	          
    	     }
	        
            $output = array( 'status'=>500,'data' => 'Not Exist','pay'=>$output2); 
	    }

		 print_r(json_encode($output, true)); 
	}
	
	
	
		 
		  function insertRoomPayment()
	{  
	     date_default_timezone_set('Asia/Kolkata');
	      $today = date('Y-m-d',time());
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true);
	    $array_out      = array();
	    $fb_id          = $event_json['fb_id'];
	    $price      = $event_json['price'];
	     $txn_id      = $event_json['txn_id'];
	     

       if(empty($fb_id) || empty($price))
	    {
	     $output = array( 'status'=>500,'code'=>false,'new_data'=> $array_out,'required field missing');
	     print_r(json_encode($output, true));die;
	    }
	   
 
       
        $query   = mysqli_query($conn,"INSERT INTO `room_payment_history`( `user_id`,`txn_id`, `pay`) VALUES ('$fb_id','$txn_id','$price')");
        
        if($query)
         {
           $output = array( 'status'=>200,'result'=> "Inserted");        
         }
         else
         {
           $output = array('status'=>200,'result'=> "Failed");   
         }
         
		 print_r(json_encode($output, true)); 
	}	 
	
			 
		  function getWithdrawList()
	{  
	     date_default_timezone_set('Asia/Kolkata');
	      $today = date('Y-m-d',time());
	    require_once("config.php");
	  
	    $array_out      = array();

      
         $sql   = "SELECT wr.*,ur.first_name,ur.last_name FROM `WithdrawlRequest` wr INNER JOIN  users ur on wr.fb_id=ur.fb_id order by id  desc";
                       //  echo $sql;die;
        $query= mysqli_query($conn,$sql); 
        
          if(mysqli_num_rows($query) > 0)
          {
                while($data = mysqli_fetch_assoc($query))
                {
                  $array_out[]= $data;
                }
                $output = array( 'status'=>200,'result'=> $array_out); 
          }
          else
          {
                  $array_out      = array();
                $output = array( 'status'=>200,'result'=> $array_out); 
          }
        
		 print_r(json_encode($output, true)); 
	}
	
			  function approvefromAdmin()
	{  
	     date_default_timezone_set('Asia/Kolkata');
	      $today = date('Y-m-d',time());
	    require_once("config.php");
	  
	  $fb=$_POST['fb_id'];
	    $status=$_POST['status'];

         $sql   = "UPDATE `WithdrawlRequest` SET `status`='$status' WHERE  fb_id='$fb'";
                
        $query= mysqli_query($conn,$sql); 
        
          if($query)
          {
                $output = array( 'status'=>200,'result'=> "succes");   
          }
          else
          {
                
                $output = array( 'status'=>200,'result'=> "failed"); 
          }
        
		 print_r(json_encode($output, true)); 
	}

//Rekha 

	function get_contribute()
	{
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
	
		if(isset($event_json['fb_id']))
		{
        
            
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			
            $query3=mysqli_query($conn,"select *,sum(diamonds) as topdiamonds from view_contributer where sender_id='".$fb_id."'  group by reciever_id  order by sum(diamonds) DESC limit 1");
          $rows=  mysqli_fetch_assoc($query3);
            
             $arr=	array(
        			    "sender_id" => $row['sender_id'],
					    "reciever_id" =>$row['reciever_id'],
					    "diamonds" =>$row['topdiamonds'],
					    "reciever_name" =>$row['reciever_name'],
					    "reciever_vip_status" =>$row['reciever_vip_status'],
					    "reciever_profile_pic" =>$row['reciever_profile_pic']
        		      );
                   $array_out = $arr; 
            
		    $query=mysqli_query($conn,"select *,sum(diamonds) as topdiamonds from view_contributer where sender_id='".$fb_id."'  group by reciever_id  order by sum(diamonds) DESC limit 1,1000");
		       
	     
    		while($row=mysqli_fetch_array($query))
    		{
                $query2=mysqli_query($conn,"SELECT count(*) as count from follow_users where fb_id='".$fb_id."' and followed_fb_id='".$row['fb_id']."' ");
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
                

    		   $array_out['list'][] = 
                	array(
        			    "sender_id" => $row['sender_id'],
					    "reciever_id" =>$row['reciever_id'],
					    "diamonds" =>$row['topdiamonds'],
					    "reciever_name" =>$row['reciever_name'],
					    "reciever_vip_status" =>$row['reciever_vip_status'],
					    "reciever_profile_pic" =>$row['reciever_profile_pic'],
					    "follow_Status" =>array
                		(
                			"follow" => $follow,
                			"follow_status_button" => $follow_button_status
                		)
        		      );
    		}
	        
		    $output=array( "code" => "200", "data" => $array_out);
    		print_r(json_encode($output, true));
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing");
			
			$output=array( "code" => "201", "data" => $array_out);
			print_r(json_encode($output, true));
		}
	}

function get_admin_events_details(){
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	 
			if(!isset($event_json['event_id']) || $event_json['event_id']=="") 
			{
				$msg_out="Validation Error event_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
    $res=array(); 
			$event_id=$event_json['event_id'];
			$sqli="SELECT *,if(date_format(`event_admin_from_date`,'%Y-%m-%d %H:%i:%s')>date_format(now(),'%Y-%m-%d %H:%i:%s'),date_format(`event_admin_from_date`,'%Y-%m-%d %H:%i:%s'),date_format(`event_admin_to_date`,'%Y-%m-%d %H:%i:%s') ) as event_date FROM `event_admin_new` where event_admin_id='$event_id'  ORDER BY `event_admin_type`  DESC"; 
			$result=mysqli_query($conn,$sqli) or die(mysqli_error($conn));
		   $res =mysqli_fetch_object($result); 
		   //$res =mysqli_fetch_all($result, MYSQLI_ASSOC); 
    //Daily Ranking start
    $where='';
    if($res->event_special_gift!='' && $res->event_special==1){
    $where=$where."and FIND_IN_SET(user_baggage_history.ubh_gift_id,'$res->event_special_gift')>0";
    }
 $sqli1="SELECT user_baggage_history.*,sum(ubh_gift_total_diamond) as ubh_gift_total_diamond, username,profile_pic FROM `user_baggage_history`left join users on users.fb_id=ubh_fb_id where date_format(ubh_cr_date,'%Y-%m-%d %H:%i:%s') between date_format('$res->event_admin_from_date','%Y-%m-%d %H:%i:%s') and date_format('$res->event_admin_to_date','%Y-%m-%d %H:%i:%s') and date_format(ubh_cr_date,'%Y-%m-%d')=date_format(now(),'%Y-%m-%d') $where group by ubh_fb_id order by sum(ubh_gift_total_diamond) desc";
			$result1=mysqli_query($conn,$sqli1) or die(mysqli_error($conn));
		   $res1 =mysqli_fetch_all($result1,MYSQLI_ASSOC); 
      $dailyrowReceiver=array();
    foreach($res1 as $row3){
      $ubh_fb_id=  $row3['ubh_sender_fb_id'];
 $sqli3="SELECT ubh_sender_fb_id as contri_id ,sum(ubh_gift_total_diamond) as contri_diamond,users.username,users.profile_pic FROM `user_baggage_history` left join users on users.fb_id=`user_baggage_history`.`ubh_sender_fb_id` where ubh_sender_fb_id='$ubh_fb_id' limit 1"; 
       $result3=mysqli_query($conn,$sqli3) or die(mysqli_error($conn));
		$res67 =mysqli_fetch_assoc($result3);
      $rowSender=  array(
         'sender_id'=> $res67['contri_id'],
       'sender_diamond'=>$res67['contri_diamond'],
        'sender_user'=>$res67['username'],
       'sender_profile'=>$res67['profile_pic']
            );
   $dailyrowReceiver[]= array_merge($row3,$rowSender); 
    }
    
    $sqli2="SELECT user_baggage_history.*,sum(ubh_gift_total_diamond) as ubh_gift_total_diamond,username,profile_pic FROM `user_baggage_history`left join users on users.fb_id=ubh_sender_fb_id where date_format(ubh_cr_date,'%Y-%m-%d %H:%i:%s') between date_format('$res->event_admin_from_date','%Y-%m-%d %H:%i:%s') and date_format('$res->event_admin_to_date','%Y-%m-%d %H:%i:%s') and date_format(ubh_cr_date,'%Y-%m-%d')=date_format(now(),'%Y-%m-%d') $where group by ubh_sender_fb_id order by sum(ubh_gift_total_diamond) desc"; 
			$result2=mysqli_query($conn,$sqli2) or die(mysqli_error($conn));
		      $res2 =mysqli_fetch_all($result2,MYSQLI_ASSOC);
    $dailyrowGifter=array();
    foreach($res2 as $row3){
      $ubh_fb_id=  $row3['ubh_fb_id'];
 $sqli3="SELECT ubh_fb_id as contri_id ,sum(ubh_gift_total_diamond) as contri_diamond,users.username,users.profile_pic FROM `user_baggage_history` left join users on users.fb_id=`user_baggage_history`.`ubh_fb_id` where ubh_fb_id='$ubh_fb_id' limit 1"; 
       $result3=mysqli_query($conn,$sqli3) or die(mysqli_error($conn));
		$res67 =mysqli_fetch_assoc($result3);
      $rowreceiver=  array(
         'receiver_id'=> $res67['contri_id'],
       'receiver_diamond'=>$res67['contri_diamond'],
        'receiver_user'=>$res67['username'],
       'receiver_profile'=>$res67['profile_pic']
            );
   $dailyrowGifter[]= array_merge($row3,$rowreceiver); 
    }
    
    // daily Ranking End
    
    //total Ranking start
       $sqli4="SELECT user_baggage_history.*,sum(ubh_gift_total_diamond) as ubh_gift_total_diamond, username,profile_pic FROM `user_baggage_history`left join users on users.fb_id=ubh_fb_id where date_format(ubh_cr_date,'%Y-%m-%d %H:%i:%s') between date_format('$res->event_admin_from_date','%Y-%m-%d %H:%i:%s') and date_format('$res->event_admin_to_date','%Y-%m-%d %H:%i:%s') $where group by ubh_fb_id order by sum(ubh_gift_total_diamond) desc"; 
			$result4=mysqli_query($conn,$sqli4) or die(mysqli_error($conn));
		   $res3 =mysqli_fetch_all($result4,MYSQLI_ASSOC); 
      $totalrowReceiver=array();
    foreach($res3 as $row3){
      $ubh_fb_id=  $row3['ubh_sender_fb_id'];
 $sqli5="SELECT ubh_sender_fb_id as contri_id ,sum(ubh_gift_total_diamond) as contri_diamond,users.username,users.profile_pic FROM `user_baggage_history` left join users on users.fb_id=`user_baggage_history`.`ubh_sender_fb_id` where ubh_sender_fb_id='$ubh_fb_id' limit 1"; 
       $result4=mysqli_query($conn,$sqli5) or die(mysqli_error($conn));
		$res67 =mysqli_fetch_assoc($result4);
      $rowSender=  array(
         'sender_id'=> $res67['contri_id'],
       'sender_diamond'=>$res67['contri_diamond'],
        'sender_user'=>$res67['username'],
       'sender_profile'=>$res67['profile_pic']
            );
   $totalrowReceiver[]= array_merge($row3,$rowSender); 
    }
    
     $sqli5="SELECT user_baggage_history.*,sum(ubh_gift_total_diamond) as ubh_gift_total_diamond,username,profile_pic FROM `user_baggage_history`left join users on users.fb_id=ubh_sender_fb_id where date_format(ubh_cr_date,'%Y-%m-%d %H:%i:%s') between date_format('$res->event_admin_from_date','%Y-%m-%d %H:%i:%s') and date_format('$res->event_admin_to_date','%Y-%m-%d %H:%i:%s') $where group by ubh_sender_fb_id order by sum(ubh_gift_total_diamond) desc"; 
			$result5=mysqli_query($conn,$sqli5) or die(mysqli_error($conn));
		      $res4 =mysqli_fetch_all($result5,MYSQLI_ASSOC);
    $totalrowGifter=array();
    foreach($res4 as $row3){
      $ubh_fb_id=  $row3['ubh_fb_id'];
 $sqli3="SELECT ubh_fb_id as contri_id ,sum(ubh_gift_total_diamond) as contri_diamond,users.username,users.profile_pic FROM `user_baggage_history` left join users on users.fb_id=`user_baggage_history`.`ubh_fb_id` where ubh_fb_id='$ubh_fb_id' limit 1"; 
       $result3=mysqli_query($conn,$sqli3) or die(mysqli_error($conn));
		$res67 =mysqli_fetch_assoc($result3);
      $rowreceiver=  array(
         'receiver_id'=> $res67['contri_id'],
       'receiver_diamond'=>$res67['contri_diamond'],
        'receiver_user'=>$res67['username'],
       'receiver_profile'=>$res67['profile_pic']
            );
   $totalrowGifter[]= array_merge($row3,$rowreceiver); 
    }
    
    //total Ranking End
     //Daily winner start
   //SELECT SUBDATE(now(), INTERVAL 1 DAY); 
   $sqli1="SELECT user_baggage_history.*,sum(ubh_gift_total_diamond) as ubh_gift_total_diamond, username,profile_pic FROM `user_baggage_history`left join users on users.fb_id=ubh_fb_id where date_format(ubh_cr_date,'%Y-%m-%d %H:%i:%s') between date_format('$res->event_admin_from_date','%Y-%m-%d %H:%i:%s') and date_format('$res->event_admin_to_date','%Y-%m-%d %H:%i:%s') and date_format(ubh_cr_date,'%Y-%m-%d')=date_format(SUBDATE(now(), INTERVAL 1 DAY),'%Y-%m-%d') $where group by ubh_fb_id order by sum(ubh_gift_total_diamond) desc"; 
			$result1=mysqli_query($conn,$sqli1) or die(mysqli_error($conn));
		   $res1 =mysqli_fetch_all($result1,MYSQLI_ASSOC); 
      $winnerrowReceiver=array();
    foreach($res1 as $row3){
      $ubh_fb_id=  $row3['ubh_sender_fb_id'];
 $sqli3="SELECT ubh_sender_fb_id as contri_id ,sum(ubh_gift_total_diamond) as contri_diamond,users.username,users.profile_pic FROM `user_baggage_history` left join users on users.fb_id=`user_baggage_history`.`ubh_sender_fb_id` where ubh_sender_fb_id='$ubh_fb_id' limit 1"; 
       $result3=mysqli_query($conn,$sqli3) or die(mysqli_error($conn));
		$res67 =mysqli_fetch_assoc($result3);
      $rowSender=  array(
         'sender_id'=> $res67['contri_id'],
       'sender_diamond'=>$res67['contri_diamond'],
        'sender_user'=>$res67['username'],
       'sender_profile'=>$res67['profile_pic']
            );
   $winnerrowReceiver[]= array_merge($row3,$rowSender); 
    }
    
    $sqli2="SELECT user_baggage_history.*,sum(ubh_gift_total_diamond) as ubh_gift_total_diamond,username,profile_pic FROM `user_baggage_history`left join users on users.fb_id=ubh_sender_fb_id where date_format(ubh_cr_date,'%Y-%m-%d %H:%i:%s') between date_format('$res->event_admin_from_date','%Y-%m-%d %H:%i:%s') and date_format('$res->event_admin_to_date','%Y-%m-%d %H:%i:%s') and date_format(ubh_cr_date,'%Y-%m-%d')=date_format(SUBDATE(now(), INTERVAL 1 DAY),'%Y-%m-%d') $where group by ubh_sender_fb_id order by sum(ubh_gift_total_diamond) desc"; 
			$result2=mysqli_query($conn,$sqli2) or die(mysqli_error($conn));
		      $res2 =mysqli_fetch_all($result2,MYSQLI_ASSOC);
    $winnerrowGifter=array();
    foreach($res2 as $row3){
      $ubh_fb_id=  $row3['ubh_fb_id'];
 $sqli3="SELECT ubh_fb_id as contri_id ,sum(ubh_gift_total_diamond) as contri_diamond,users.username,users.profile_pic FROM `user_baggage_history` left join users on users.fb_id=`user_baggage_history`.`ubh_fb_id` where ubh_fb_id='$ubh_fb_id' limit 1"; 
       $result3=mysqli_query($conn,$sqli3) or die(mysqli_error($conn));
		$res67 =mysqli_fetch_assoc($result3);
      $rowreceiver=  array(
         'receiver_id'=> $res67['contri_id'],
       'receiver_diamond'=>$res67['contri_diamond'],
        'receiver_user'=>$res67['username'],
       'receiver_profile'=>$res67['profile_pic']
            );
   $winnerrowGifter[]= array_merge($row3,$rowreceiver); 
    }
    
    // daily winner End
    
    
    
            $res->daily_ranking['receiver']=$dailyrowReceiver;
            $res->daily_ranking['gifter']=$dailyrowGifter;
            $res->total_ranking['receiver']=$totalrowReceiver;
            $res->total_ranking['gifter']=$totalrowGifter;
            $res->winner_ranking['receiver']=$winnerrowReceiver;
            $res->winner_ranking['gifter']=$winnerrowGifter;
           
    
			if($res)
			{   
			    $msg_out="Get All Events";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data"=> $res);
			}else{
				$msg_out="No any Data  in ".$event_type." ";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
	}

function get_topfans()
	{
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json); die;
	
		if(isset($event_json['fb_id']))
		{
   
            
          
         
            
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
		
		    $query2=mysqli_query($conn,"select *,sum(diamonds) as topdiamonds from view_top_fan where reciever_id='".$fb_id."' group by sender_id  order by sum(diamonds) DESC limit 1"); 
          $rows=mysqli_fetch_assoc($query2);
             // print_r($rows);
		       $arr=array(
        			    "sender_id" => $rows['sender_id'],
					    "reciever_id" =>$rows['reciever_id'],
					    "diamonds" =>$rows['topdiamonds'],
					    "reciever_name" =>$rows['sender_name'],
					    "reciever_vip_status" =>$rows['sender_vip_status'],
					    "reciever_profile_pic" =>$rows['sender_profile_pic']
					    
        		      );
                   $array_out = $arr; 
	 
             $query=mysqli_query($conn,"select *,sum(diamonds) as topdiamonds from view_top_fan where reciever_id='".$fb_id."' group by sender_id  order by sum(diamonds) DESC limit 1, 1000");
    		while($row=mysqli_fetch_array($query))
    		{
                $query2=mysqli_query($conn,"SELECT count(*) as count from follow_users where fb_id='".$fb_id."' and followed_fb_id='".$row['fb_id']."' ");
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
                
             
    		   $array_out['list'][] = 
                	array(
        			    "sender_id" => $row['sender_id'],
					    "reciever_id" =>$row['reciever_id'],
					    "diamonds" =>$row['topdiamonds'],
					    "reciever_name" =>$row['sender_name'],
					    "reciever_vip_status" =>$row['sender_vip_status'],
					    "reciever_profile_pic" =>$row['sender_profile_pic'],
					    "follow_Status" =>array
                		(
                			"follow" => $follow,
                			"follow_status_button" => $follow_button_status
                		)
        		      );
    		}
	        
		    $output=array( "code" => "200", "data" => $array_out);
    		print_r(json_encode($output, true));
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing");
			
			$output=array( "code" => "201", "data" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
	

	?>