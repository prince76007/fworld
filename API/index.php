<?php
date_default_timezone_set('Asia/Kolkata');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(1);

 $url = 'http://3.128.105.101/admin/gift_img/';	
 $server_url='http://3.128.105.101/';	
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
		elseif($_GET["p"]=="gettimeanddaysleft"){
			gettimeanddaysleft();
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

		elseif($_GET["p"]=="checkUserBlockStatus")
		{
			checkUserBlockStatus();
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
		}elseif($_GET["p"]=="getcurrenttimendate"){
			getcurrenttimendate();
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
		if($_GET["p"]=="user_mark_unmark_heart")
		{
			user_mark_unmark_heart();
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
			
		if($_GET["p"]=="get_followers_of_live_room")
		{
			get_followers_of_live_room();
		}
		else
		if($_GET["p"]=="get_followers_simple_list")
		{
			get_followers_simple_list();
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
		else
		if($_GET["p"]=="get_setting_tag_value")
		{
			get_setting_tag_value();
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
		else if($_GET["p"]=="get_submited_report_reason")
		{
			get_submited_report_reason();
		} else
		if($_GET["p"]=="submit_diamond_transfer")
		{
			submit_diamond_transfer();
		}
		else
		if($_GET["p"]=="submit_diamond_transfer_onlive_message")
		{
			submit_diamond_transfer_onlive_message();
		} else
		if($_GET["p"]=="get_submited_diamond_transfer")
		{
			get_submited_diamond_transfer();
		}
		else
		if($_GET["p"]=="get_submited_diamond_transfer_detailed")
		{
			get_submited_diamond_transfer_detailed();
		}

		else
		if($_GET["p"]=="save_user_wear_badge")
		{
			save_user_wear_badge();
		}
		else
		if($_GET["p"]=="save_user_gallary_image")
		{
			save_user_gallary_image();
		}
		else
		if($_GET["p"]=="remove_user_gallary_image")
		{
			remove_user_gallary_image();
		}
		else
		if($_GET["p"]=="get_user_gallary_image")
		{
			get_user_gallary_image();
		}
		else
		if($_GET["p"]=="update_user_mood")
		{
			update_user_mood();
		}
		else
		if($_GET["p"]=="update_user_social_link")
		{
			update_user_social_link();
		}
		else
		if($_GET["p"]=="get_vip_services_details_list")
		{
			get_vip_services_details_list();
		}else
		if($_GET["p"]=="get_vip_services_details")
		{
			get_vip_services_details();
		}
		else
		if($_GET["p"]=="create_purchaes_service_order")
		{
			create_purchase_service_order();
		}

		else
		if($_GET["p"]=="daily_task")
		{
           //15_12_2020
          daily_task();
		}
		else
		if($_GET["p"]=="start_time_log")
		{
           //7_3_2021
          insert_time_log();
		}
		else
		if($_GET["p"]=="end_time_log")
		{
		  //7_3_2021
          end_time_log();
		}
		
		else
		if($_GET["p"]=="user_add_daily_task_record")
		{
           //28_12_2020  //user  add task record to collect his coin
           user_add_daily_task_record();
		}
		else
		if($_GET["p"]=="user_collect_silvercoin_daily_task_record")
		{
           //4_2_2021  //user  collect coin that task record to collect coin
           user_collect_silvercoin_daily_task_record();
		}
		
		else
		if($_GET["p"]=="daily_task_today")
		{
           //31_12_2020  //daily task todays
           daily_task_today();
		}
		else
		if($_GET["p"]=="user_join_live_room_detail")
		{
           //15_12_2020  //user join room list all user
          user_join_live_room_detail();
		}
		else
		if($_GET["p"]=="hoster_user_live_room_list")
		{
           //1_2_20201  //live room list for hoster
          	hoster_user_live_room_list();
		}
		else
		if($_GET["p"]=="hoster_user_change_status_of_live_room")
		{
           //1_2_20201  //live room list for hoster 
            hoster_user_change_status_of_live_room();
		}
		else
		if($_GET["p"]=="get_user_joined_live_room_current_position")
		{
           //28_12_2020  //user join live room
          get_user_joined_live_room_current_position();
		}
		else
		if($_GET["p"]=="user_leave_joined_live_room")
		{
           //4_1_2021 //
          user_leave_joined_live_room();
		}
		else
		if($_GET["p"]=="hoster_user_kickout_user_his_joined_live_room")
		{
           //30_1_2021 //
           hoster_user_kickout_user_his_joined_live_room();
		}
        else
		if($_GET["p"]=="hoster_user_kickout_user_update_his_joined_live_room")
		{
           //30_1_2021 //
           hoster_user_kickout_user_update_his_joined_live_room();
		}
        
        else
        if($_GET["p"]=="hoster_user_make_admin_user_his_joined_live_room")
		{
           //31_1_2021 //
           hoster_user_make_admin_user_his_joined_live_room();
		}
		else
        if($_GET["p"]=="hoster_user_make_admin_user_as_normal_user_his_joined_live_room")
		{
           //5_2_2021 //
           hoster_user_make_admin_user_as_normal_user_his_joined_live_room();
		}

		else
		if($_GET["p"]=="get_user_joined_live_room_detail")
		{
           //24_12_2020 
          get_user_joined_live_room_detail();
		}
		else
		if($_GET["p"]=="user_create_live_room_detail")
		{
           //16_12_2020 hoster user create live room
          user_create_live_room_detail();
		}
		
		else
		if($_GET["p"]=="check_user_live_room_or_join_room_status")
		{
           //10_2_2021 
          check_user_live_room_or_join_room_status();
		}
		else
		if($_GET["p"]=="present_user_in_live_or_join_room")
		{
           //15_2_2021 
          present_user_in_live_or_join_room();
		}
		else
		if($_GET["p"]=="user_create_live_room_pk")
		{
           //18_1_2021 call when user accept pk request
          user_create_live_room_pk();
		}
		else
		if($_GET["p"]=="update_status_user_create_live_room_pk")
		{
           //19_1_2021 
          update_status_user_create_live_room_pk();
		}
		else
		if($_GET["p"]=="user_get_live_room_list")
		{
           //16_12_2020
          user_get_live_room_list();
		}
		else
		if($_GET["p"]=="user_update_live_room_status")
		{
           //17_12_2020
          user_update_live_room_status();
		}

		else
		if($_GET["p"]=="get_user_baggage")
		{
           //17_12_2020
          get_user_baggage();
		}
		else
		if($_GET["p"]=="add_user_baggage")
		{
			add_user_baggage();
		}
		else
		if($_GET["p"]=="user_baggage_transfer")
		{
			//27_2_2021
			user_baggage_transfer();
		}
		//21_12_2020
		else
		if($_GET["p"]=="create_user_withdrawal_request")
		{
			create_user_withdrawal_request();
		}
		else
		if($_GET["p"]=="get_user_withdrawal_request_list")
		{
			get_user_withdrawal_request_list();
		}

		else
		if($_GET["p"]=="getmylevel")
		{
			getMylevel();
		}
		

		else
		if($_GET["p"]=="exchange_diamond_to_beans_list")
		{
			exchange_diamond_to_beans_list();
		}else if($_GET["p"]=="get_total_diamond_earning"){
			get_total_diamond_earning();
		}

		else
		if($_GET["p"]=="create_user_exchange_diamond_to_beans_list")
		{
			create_user_exchange_diamond_to_beans_list();
		}else if($_GET["p"]=="get_total_diamond_earning_in_chat"){
			get_total_diamond_earning_in_chat();
		}

		else
		if($_GET["p"]=="get_user_exchange_diamond_to_beans_list")
		{
			get_user_exchange_diamond_to_beans_list();
		}
	    else
		if($_GET["p"]=="app_pages_banners")
		{
			app_pages_banners();
		}
		else
		if($_GET["p"]=="submit_customer_support")
		{
			submit_customer_support();
		}
		else
		if($_GET["p"]=="submit_customer_feedback")
		{
			//20_1_2021
			submit_customer_feedback();
		}
		else
		if($_GET["p"]=="get_recharge_plan")
		{
			//29_12_2020
			get_recharge_plan();
		}
		else
		if($_GET["p"]=="get_admin_events")
		{
			//12_1_2021
			get_admin_events(); //admin events
		}
		else
		if($_GET["p"]=="get_admin_single_event")
		{
			//12_1_2021
			get_admin_single_event(); //admin events
		}
		else
		if($_GET["p"]=="get_single_event_raking")
		{
			//13_1_2021
			get_single_event_raking(); //admin events
		}
		else
		if($_GET["p"]=="request_guardian_shields")
		{
			request_guardian_shields();
		}
		else
		  if($_GET["p"]=="get_contribute")
    	{
    	  		get_contribute();
    	}
        else
          if($_GET["p"]=="get_topfans")
    	{
    	  		get_topfans();
    	}

        else
        if($_GET["p"]=="MasterRanking")
    	{
    	  		MasterRanking();
    	}else if($_GET["p"]=="get_gifters_list"){
			get_gifters_list();
		}
    	
		
	
	}
	else
	{
		echo"Not Found";

	}

function notification_type($type){
    if($type==='fans'){
        return 1;
    }
     if($type==='comments'){
        return 2;
    }
     if($type==='like'){
        return 3;
    }
     if($type==='system'){
        return 4;
    }
     if($type==='celebrity'){
        return 5;
    }
    
}
	//common function
	function custom_current_date_time(){
   		date_default_timezone_set('Asia/Kolkata');
	    return date('Y-m-d H:i:s');
   	}

	function custom_current_date(){
   		date_default_timezone_set('Asia/Kolkata');
	    return date('Y-m-d');
   	}

//add history
function insert_diamond_transfer_history($dth_sender_id , $dth_receiver_id , $dth_send_diamond  ,$dth_for){
   	include("config.php");
 
$DATE_TIME=custom_current_date_time(); 			
 
 $qrry_1="insert into diamond_transfer_history ( `dth_sender_id`, `dth_receiver_id`, `dth_send_diamond`, `dth_cr_date`, `dth_for`)values(";
          $qrry_1.="'".$dth_sender_id."',";
          $qrry_1.="'".$dth_receiver_id."',";
          $qrry_1.="'".$dth_send_diamond."',";
          $qrry_1.="'".$DATE_TIME."',";
          //$qrry_1.="'',";
          $qrry_1.="'".$dth_for."'";
          $qrry_1.=")";
     $res=mysqli_query($conn,$qrry_1)or die(mysqli_error($conn));
     return $res;   	
}


	function get_user_diamond_byfb_id($fb_id)
	{
     	include("config.php");
  		$qrry_get='SELECT total_diamondd FROM `users` WHERE fb_id='.$fb_id;
 		$total_diamondd_data= mysqli_fetch_assoc(mysqli_query($conn,$qrry_get))['total_diamondd']; 
		return $total_diamondd_data;
	}
//update - user diamond
function UPDATE_daimond_sender($fb_id , $remove_diamond)
 {
   	include("config.php");
   $UPDATE_daimond_sender="update users set total_diamondd=total_diamondd-".$remove_diamond." WHERE fb_id=".$fb_id;
	$res=mysqli_query($conn,$UPDATE_daimond_sender);
     return $res;   	
}
//update + user diamond
function UPDATE_daimond_receiver($fb_id , $add_diamond)
 {
   	include("config.php");
    $UPDATE_daimond_receiver="update users set total_diamondd=total_diamondd+".$add_diamond." WHERE fb_id=".$fb_id;
	$res=mysqli_query($conn,$UPDATE_daimond_receiver);
    return $res;   	
 }
// user silver coin  start


	function get_user_silvercoin_byfb_id($fb_id)
	{
     	include("config.php");
  		$qrry_get='SELECT total_silver_coin FROM `users` WHERE fb_id='.$fb_id;
 		$total_silver_coin_data= mysqli_fetch_assoc(mysqli_query($conn,$qrry_get))['total_silver_coin']; 
		return $total_silver_coin_data;
	}

	function UPDATE_add_silvercoin_user($fb_id ,$add_silver_coin)
	{
 			 //update coin
   			include("config.php");
			$UPDATE_daimond_user="update users set total_silver_coin=total_silver_coin+".$add_silver_coin." WHERE fb_id=".$fb_id;
	        mysqli_query($conn,$UPDATE_daimond_user);
	}

	function UPDATE_remove_silvercoin_user($fb_id ,$remove_silver_coin)
	{
 			 //update coin
   			include("config.php");
			$UPDATE_daimond_user="update users set total_silver_coin=total_silver_coin-".$remove_silver_coin." WHERE fb_id=".$fb_id;
	        mysqli_query($conn,$UPDATE_daimond_user);
	}

// user silver coin close 

    function get_user_total_send_diamond($fb_id) 
    {   //remain task
	   	include("config.php");
  		$total_send_diamond="0";
  		//ubh_fb_id!=1 and
  		$qrry_get='SELECT sum(ubh_gift_total_diamond) as total_send_diamond FROM `user_baggage_history` WHERE  ubh_sender_fb_id='.$fb_id;
 		$Data= mysqli_fetch_assoc(mysqli_query($conn,$qrry_get));
 		if($Data['total_send_diamond']){
 		$total_send_diamond=$Data['total_send_diamond']; 
		}
	 return $total_send_diamond;
	}


    function get_user_total_received_diamond($fb_id) 
    {   //remain task
    	include("config.php");
  		$total_received_diamond="0";

		$qrry_get='SELECT sum(ubh_gift_total_diamond) as total_received_diamond FROM `user_baggage_history` WHERE  ubh_fb_id='.$fb_id;
 		$Data= mysqli_fetch_assoc(mysqli_query($conn,$qrry_get));
 		if($Data['total_received_diamond']){
 		$total_received_diamond=$Data['total_received_diamond']; 
		}
		return $total_received_diamond;
	}

   	function get_user_profile_pic_byfb_id($fb_id){
    	include("config.php");
        $qrry_get="SELECT * FROM `users` where fb_id='$fb_id' ";
		$res=mysqli_query($conn,$qrry_get);//or die(mysqli_error($conn));
 		$USER=mysqli_fetch_assoc($res); 
		

		if($USER){
		            $strUrl=$USER['profile_pic'];
					$arrParsedUrl = parse_url($strUrl);
					if (!empty($arrParsedUrl['scheme']))
					{
					// Contains http:// schema
					if ($arrParsedUrl['scheme'] === "http")
					{
					return $strUrl;
					}
					// Contains https:// schema
					else if ($arrParsedUrl['scheme'] === "https")
					{
					return $strUrl;
					}
					}
					else
					{
					        return BASE_PATH."/API/".$strUrl;
					}
				

		}else{
			return '';
		}
	}
	//3_2_2021
	function insert_user_profile_exp($upe_fb_id , $upe_actul_exp ,$upe_type ,$upe_type_id ,$upe_vs_fb_id='null')
	{	
    	include("config.php");
    	$cr_date=custom_current_date_time();
 		$inser_sql="INSERT INTO `user_profile_exp`( `upe_fb_id`, `upe_actul_exp`, `upe_type`, `upe_type_id`, `upe_vs_fb_id`, `upe_cr_date`) VALUES ('".$upe_fb_id."','".$upe_actul_exp."','".$upe_type."','".$upe_type_id."','".$upe_vs_fb_id."',  '".$cr_date."',)";
 		$query2=mysqli_query($conn, $inser_sql )or die(mysqli_error($conn));
    
 	}		


  	function get_ulrd_rank_position($ulrd_id)
	{	
		$ulrd_position_assign="";
    	include("config.php");

    			$qrry_get="SELECT  ULRD.*,(SELECT COUNT(`ubh_gift_total_diamond`) AS GOT_diamond FROM `user_baggage_history` WHERE ubh_type_id =  ULRD.ulrd_id AND ubh_type='LIVEROOM') as count_diamond ,U.fb_id,U.mobile,U.first_name,U.last_name,U.username,U.profile_pic,U.vip_status FROM `user_live_room_details` AS ULRD JOIN   users  AS U on U.fb_id=ULRD.ulrd_fb_id  
			WHERE ULRD.ulrd_status=0  ORDER BY count_diamond  DESC";
			 $res=mysqli_query($conn,$qrry_get);
 		   	  $daily_task_data_list=mysqli_fetch_all($res, MYSQLI_ASSOC); 
		  	$custom_array=array();
		  	$ulrd_position=1;
		  	foreach ($daily_task_data_list as $value) {
		  			# code...
		  		$value['ulrd_rank_position']="{$ulrd_position}";
			   if($ulrd_id == $value['ulrd_id']){
			    $ulrd_position_assign=$ulrd_position;
			    break;
			   }
			   $ulrd_position++;
			}	
 		 // $query2=mysqli_query($conn,"SELECT * from user_live_room_pk_details where (ulrpkd_rquested_ulrd_id='".$ulrd_id."' OR ulrpkd_accepted_ulrd_id='".$ulrd_id."') and ulrpkd_status=0 order by ulrpkd_id desc"  )or die(mysqli_error($conn));
    
    //        $data=mysqli_fetch_assoc($query2);
    		if($ulrd_position_assign){
    		 return $ulrd_position="{$ulrd_position_assign}";		
    		}else{
    		 return "100+";		
    		}
    }
  


    function get_is_pk_run_in_room($ulrd_id)
	{	
    	include("config.php");
 		 $query2=mysqli_query($conn,"SELECT * from user_live_room_pk_details where (ulrpkd_rquested_ulrd_id='".$ulrd_id."' OR ulrpkd_accepted_ulrd_id='".$ulrd_id."') and ulrpkd_status=0 order by ulrpkd_id desc"  )or die(mysqli_error($conn));
    
            $data=mysqli_fetch_assoc($query2);
    		if($data){
    			return $data;		
    		}else{
    			return "";		
    		}
    }

	function get_user_on_hoster_live_room($fb_id){
		include("config.php");
    	//USER Host LIVE ROOM     
        $qrry_get="select ULRD.*,u.username,u.profile_pic,u.first_name,u.last_name from  user_live_room_details as ULRD join users as u on u.fb_id=ULRD.ulrd_fb_id WHERE ULRD.ulrd_fb_id = '$fb_id' and 	ULRD.ulrd_status='0'  ORDER BY ULRD.ulrd_id DESC";
		$res=mysqli_query($conn,$qrry_get) or die(mysqli_error($conn));
 		$data=mysqli_fetch_assoc($res); 
		//print_r($giftdata);
		if($data){


				if($data['ulrd_icon']==""){
		  		$data['ulrd_icon']=get_user_profile_pic_byfb_id($data['ulrd_fb_id']);	
		  	    }else{
		  	    $data['ulrd_icon']=BASE_PATH.$data['ulrd_icon'];	
		  	    }
		  	   $ulrpkd_id_Data=get_is_pk_run_in_room($data['ulrd_id']);
				$data['pk_details']="";
				if($ulrpkd_id_Data){
				$data['ulrd_is_pk']='1';	
				$data['pk_details']=$ulrpkd_id_Data;
				}   		
			$data['actual_data']="HOST Live Room";
			return $data;
			}
	/*
		}else{
			return "";
		}
    }
    function get_user_on_join_live_room($fb_id){

    	include("config.php");
    */
        //USER JOIN LIVE ROOM     
        $qrry_get="select UJLRD.*,ULRD.*,u.username,u.profile_pic,u.first_name,u.last_name from user_join_live_room_details  as UJLRD JOIN user_live_room_details as ULRD ON ULRD.ulrd_id=UJLRD.ujlrd_ulrd_id  join users as u on u.fb_id=ULRD.ulrd_fb_id WHERE UJLRD.ujlrd_fb_id = '$fb_id' and 	UJLRD.ujlrd_status='0' and ULRD.ulrd_status='0' ORDER BY UJLRD.uJlrd_id DESC";
		$res=mysqli_query($conn,$qrry_get) or die(mysqli_error($conn));
 		$data=mysqli_fetch_assoc($res); 
		//print_r($giftdata);
		if($data){
			    if($data['ulrd_icon']==""){
		  		$data['ulrd_icon']=get_user_profile_pic_byfb_id($data['ulrd_fb_id']);	
		  	    }else{
		  	    $data['ulrd_icon']=BASE_PATH.$data['ulrd_icon'];	
		  	    }
		  	    $ulrpkd_id_Data=get_is_pk_run_in_room($data['ulrd_id']);
				$data['pk_details']="";
				if($ulrpkd_id_Data){
				$data['ulrd_is_pk']='1';	
				$data['pk_details']=$ulrpkd_id_Data;
				} 
			$data['actual_data']="Live Room Join" ;
			return $data;
		}else{
			return "";
		}
		//USER JOIN LIVE ROOM END
    }

		   	
   	function get_guardian_shields($fb_id){
		$DATE=custom_current_date();	
    	include("config.php");
         $qrry_get="select rgs.*,u.username,u.profile_pic,u.first_name,u.last_name from request_guardian_shields  as rgs  join users as u on u.fb_id=rgs.guardian_shield_fb_id WHERE  rgs.guardian_shield_for_fb_id = '$fb_id' and rgs.guardian_shield_status='ACTIVE' and  rgs.guardian_shield_cr_date LIKE '%$DATE%' ";
		$res=mysqli_query($conn,$qrry_get) or die(mysqli_error($conn));
 		$guardian_shielddata=mysqli_fetch_assoc($res); 
		//print_r($giftdata);
		if($guardian_shielddata){
			return $guardian_shielddata;
		}
		else{
			return "";
		}
    }
    function get_guardian_shields_icon($fb_id){
		$DATE=custom_current_date();	
    	include("config.php");
         $qrry_get="select rgs.*,u.username,u.profile_pic,u.first_name,u.last_name from request_guardian_shields  as rgs  join users as u on u.fb_id=rgs.guardian_shield_fb_id WHERE  rgs.guardian_shield_for_fb_id = '$fb_id' and rgs.guardian_shield_status='ACTIVE' and  rgs.guardian_shield_cr_date LIKE '%$DATE%' ";
		$res=mysqli_query($conn,$qrry_get) or die(mysqli_error($conn));
 		$guardian_shielddata=mysqli_fetch_assoc($res); 
		//print_r($giftdata);
		if($guardian_shielddata){
			return $guardian_shielddata['profile_pic'];
		}else{
			return "";
		}
    }

   	//expo 5_1_2020
	function expo_init($r_fb_id,$expo,$expo_action,$expo_for,$user_expo_for_id,$s_fb_id){
	 include("config.php");
		$query99= mysqli_query($conn,"INSERT INTO user_expo_history ( `user_expo_fb_id`, `expo`, 
	`user_expo_action`, `user_expo_for`, `user_expo_for_id`, `user_expo_sender_fb_id`) VALUES('$r_fb_id','$expo','$expo_action','$expo_for','$user_expo_for_id','$s_fb_id')");
		$query1 = mysqli_query($conn,"UPDATE users SET total_expo = total_expo + '$expo' WHERE fb_id = '$r_fb_id' ");     
	}	
   	//expo 5_1_2020
	function get_gift($gift_id , $type=null){
    	include("config.php");
    	$typeand_sql="";
    		if($type){
    			$typeand_sql=" and gift_coin_type='$type' ";
    		}
         $qrry_get="SELECT * FROM `gift` where gift_id=$gift_id  $typeand_sql";
		$res=mysqli_query($conn,$qrry_get) or die(mysqli_error($conn));
 		$giftdata=mysqli_fetch_assoc($res); 
		//print_r($giftdata);
		if($giftdata){
			return $giftdata;
		}
    }

     function get_userdata_FULLNAME($fb_id){
    	include("config.php");
        $qrry_get="SELECT * FROM `users` where fb_id='$fb_id' ";
		$res=mysqli_query($conn,$qrry_get);//or die(mysqli_error($conn));
 		$USER=mysqli_fetch_assoc($res); 
		if($USER){
			return $USER['first_name'].' '.$USER['last_name'];
		}else{
			return 'NA';
		}
	}
	
	function get_is_user_can_call($fb_id){
    	include("config.php");
        $qrry_get="SELECT is_user_can_call FROM `users` where fb_id='$fb_id' ";
		$res=mysqli_query($conn,$qrry_get);//or die(mysqli_error($conn));
 		$USER=mysqli_fetch_assoc($res); 
		if($USER){
			return "{$USER['is_user_can_call']}";
		}else{
			return '0';
		}
	}
	
    function get_is_user_can_pk($fb_id){
    	include("config.php");
        $qrry_get="SELECT is_user_can_pk FROM `users` where fb_id='$fb_id' ";
		$res=mysqli_query($conn,$qrry_get);//or die(mysqli_error($conn));
 		$USER=mysqli_fetch_assoc($res); 
		if($USER){
			return "{$USER['is_user_can_pk']}";
		}else{
			return '0';
		}
	}
	function check_is_user_can_joined_liveroom($fb_id, $ulrd_id){
        // return "1";
		
    	include("config.php");
        $qrry_get="SELECT * FROM `user_join_live_room_details` where ujlrd_fb_id='$fb_id' and ujlrd_ulrd_id ='$ulrd_id' and ujlrd_status='2'";
		$res=mysqli_query($conn,$qrry_get);//or die(mysqli_error($conn));
 		$USER=mysqli_fetch_assoc($res); 
		if($USER){
		   return "1";
		}else{
  			return "0";
		}
	 	
    }
		
    function get_user_join_live_room_details_by_ulrd_id($ulrd_id , $type_count_or_all){
    	include("config.php");
        	
    	if($type_count_or_all=='count'){
    	$qrry_get="SELECT count(ujlrd_id) as count_user FROM `user_join_live_room_details` where ujlrd_ulrd_id='$ulrd_id' ";
		$res=mysqli_query($conn,$qrry_get);//or die(mysqli_error($conn));
 		 $USERcount=mysqli_fetch_assoc($res)['count_user']; 
				if($USERcount){
					return $USERcount;
				}else{
					return '0';
				}
    	}

    }


	function send_notification_following_user($fb_id)
	{
		include("config.php");
        
         $forliveroom_usersql="SELECT * FROM `users` WHERE fb_id =$fb_id";			
			 $liveroom_userdetails=mysqli_fetch_assoc(mysqli_query($conn,$forliveroom_usersql));
		$title='Fworld  Live';
		if($liveroom_userdetails){
 			 $live_usename=$liveroom_userdetails['first_name'].' '.$liveroom_userdetails['last_name'];	
 			if($live_usename)
 			{
				$title=' User '.$live_usename.' Is Live';
			}else{
				//if uesr name empty	
				$title=' User '.$fb_id.' Is Live';
			}
		}	
		
		$count=0;
		$sql="SELECT GROUP_CONCAT(DISTINCT(fb_id)) as all_users  FROM `follow_users` WHERE followed_fb_id='$fb_id'";

		 $userdata =mysqli_fetch_assoc(mysqli_query($conn,$sql))['all_users'];
			//return $userdata . $sql;
			if($userdata){
			 $usersql="SELECT * FROM `users` WHERE fb_id IN ($userdata)";			
			 $query1=mysqli_query($conn,$usersql);
			$notification_out="";
			while($udata = mysqli_fetch_assoc($query1))
	       	{
	   			$lasq="SELECT * FROM `ongoing_live_room_notification` WHERE status='Active' ORDER BY RAND()	LIMIT 1";
					$data =mysqli_fetch_assoc(mysqli_query($conn,$lasq));
					$message_body=$data['message_body'];			 		
					
	   			 $receiveruser_Data_token=$udata['tokon'];
				//$fmessage= $senderuser_Data_NAME .' Send You '.$send_diamond. ' Diamond For You';
						$notifi_msg = array
						(
						'title' => $title,
						'body'	=> $message_body,
						);
						$fields = array
						(
						'to'		=> $receiveruser_Data_token,
						'notification'	=> $notifi_msg
						//'dth_id'=>$last_insertid
						);
                    $notification_out.=sendPushNotification($fields);
	              $count++;
	         }
	        }    

		return $count .$userdata .$notification_out ;
	
	}
    function Check_daily_task_iscompleted_byfb_id($fb_id , $task_id, $todaydate){
    	include("config.php");
	    $task_completed_flag="0";	
    	//$todaydate=custom_current_date();
	         $qrry_get=" SELECT * FROM `daily_task` WHERE daily_task_id=$task_id ";
			 $resd=mysqli_query($conn,$qrry_get)or die(mysqli_error($conn));
 		   	 $daily_task_data=mysqli_fetch_assoc($resd); 
		  	if($daily_task_data){
		  	  $task_count=$daily_task_data['daily_task_total_target'];	
		  	  $add_silver_coin=$daily_task_data['daily_task_par_target'];
		  	}  
		  		//and  udtr_task_position ='$udtr_task_position'
	        $sql1="SELECT * FROM `user_daily_task_record` WHERE udtr_daily_task_id='$task_id' AND udtr_fb_id='$fb_id' AND udtr_cr_date like '$todaydate%' ";
			$Already_collect=mysqli_query($conn,$sql1)or die(mysqli_error($conn));
 		    if(mysqli_num_rows($Already_collect) >= $task_count)
			{   
	        $task_completed_flag="1";	
	        }

    	return $task_completed_flag;
    }
	function get_userdata_byfb_id($fb_id){
    	include("config.php");
             $qrry_get="SELECT * FROM `users` where fb_id='$fb_id' ";
		$res=mysqli_query($conn,$qrry_get);//or die(mysqli_error($conn));
 		$USER=mysqli_fetch_assoc($res); 
		if($USER){
			return $USER;
		}
	}

	function get_user_following_count($fb_id )
	{	
    	include("config.php");
 		$query2=mysqli_query($conn,"SELECT count(*) as count from follow_users where followed_fb_id='".$fb_id."'"  );
            $count=mysqli_fetch_assoc($query2);
    		if($count){
    			return $count['count'];		
    		}else{
    			return '0';		
    		}
    }
   
	function get_user_followers_count($fb_id )
	{	
    	include("config.php");
 		$query2=mysqli_query($conn,"SELECT count(*) as count from follow_users where fb_id='".$fb_id ."'" );
    
            $count=mysqli_fetch_assoc($query2);
    		if($count){
    			return $count['count'];		
    		}else{
    			return '0';		
    		}
    }

    
	function get_user_hearts_count($fb_id )
	{	
    	include("config.php");
 		$query2=mysqli_query($conn,"SELECT count(*) as count from heart_users where heart_fb_id='".$fb_id ."'" );
    
            $count=mysqli_fetch_assoc($query2);
    		if($count){
    			return $count['count'];		
    		}else{
    			return '0';		
    		}
    }
    function get_running_event_admin_details(){
        // return "1";
		include("config.php");
         $c_d=custom_current_date_time();
         $qrry_get="SELECT * FROM `event_admin_new` WHERE  event_admin_type='Live' AND event_admin_status='Running' And event_admin_from_date <='$c_d' and event_admin_to_date >='$c_d'  order by   event_admin_id	desc";
		$res=mysqli_query($conn,$qrry_get);//or die(mysqli_error($conn));
 		$data=mysqli_fetch_assoc($res); 
		if($data){
		
		$id=$data['event_admin_id'];
		
		$sqli=" SELECT * FROM `event_admin_small_banner` where event_admin_id=$id	";
				$result=mysqli_query($conn,$sqli) or die(mysqli_error($conn));
		        $small_bannerdata=mysqli_fetch_all($result, MYSQLI_ASSOC); 
		$data['small_banners']=$small_bannerdata;       
		
		   return $data;
		}
	 	else{

	 		$array_out= array(
 			"event_admin_id" => "",
            "event_admin_title" => "",
            "event_admin_from_date" => "",
            "event_admin_to_date" => "",
            "event_admin_start_time" => "",
            "event_admin_end_time" => "",
            "event_admin_icon" => "",
            "event_admin_type" => "",
            "event_admin_status"  => "",
            "event_admin_created_date"  => "",
            "event_admin_rules"  => "",
            "event_special"  => "",
            "event_special_gift"  => "",
            "event_special_banner" => "",
            "small_banners" =>array()
	 		);
	 		return $array_out;
	 	}
    }
	


    function get_user_post_count($fb_id)
	{	
    	include("config.php");
 		$query2=mysqli_query($conn,"SELECT count(*) as count from videos where fb_id='".$fb_id."'" )or die(mysqli_error($conn));
    
            $count=mysqli_fetch_assoc($query2);
    		if($count){
    			return $count['count'];		
    		}else{
    			return '0';		
    		}
    }


	function get_follow_users_status($fb_id , $followedfb_id)
	{	
    	include("config.php");
 		$query2=mysqli_query($conn,"SELECT count(*) as count from follow_users where fb_id='".$fb_id."' and followed_fb_id='".$followedfb_id."' ");
        $follow_count=mysqli_fetch_assoc($query2);
        
       
        if($follow_count['count']=="0")
        {
            $follow="0";
            $follow_button_status="Unfollow";
        //    $follow_button_status="Follow";
        }
        else
        if($follow_count['count']!="0")
        {
            $follow="1";
        //    $follow_button_status="Unfollow";
            $follow_button_status="Follow";
        }

        //"follow_Status" =>get_follow_users_status($vfb_id , $fb_id)
        return array
                    (
                        "follow" => $follow,
                        "follow_status_button" => $follow_button_status
                    );
    }

	function get_user_vip_status($fb_id)
	{	
    	include("config.php");
 		$is_vip_active=0;
 		$is_admin_assign="";
        $current_date=date('Y-m-d');
 	
 		$query2=mysqli_query($conn,"SELECT * from purchase_subscriptions_order where pso_fb_id='".$fb_id."' and pos_is_active='1' ");
        $purchase_subscriptions_order=mysqli_fetch_assoc($query2);
        
        if($purchase_subscriptions_order)
        {

        	 $pso_subscription_id=$purchase_subscriptions_order['pso_subscription_id'];
             $plan_where_come="pos_id:-".$purchase_subscriptions_order['pos_id'];
             
        	 $service_data_result=mysqli_query($conn,"SELECT * from services where service_id='".$pso_subscription_id."' ");
             $service_data=mysqli_fetch_assoc($service_data_result);

           
	        $vip_service_id=$service_data['service_id'];
            $vip_service_name=$service_data['service_name'];
          	$vip_service_icon=$service_data['service_icon'];
          
            $service_badge_id=$service_data['service_badge_id'];
            $badge_data=mysqli_fetch_assoc(mysqli_query($conn,"SELECT badge_color from badge where badge_id='".$service_badge_id."' "));
      	
            $vip_service_badge_icon=$badge_data['badge_color'];
           
            $is_admin_assign=0;
         	$is_vip_active=1;
 	
        }
	   
        //check admin assign
        $query3=mysqli_query($conn,"SELECT * from custom_assign_vip where cav_fb_id='".$fb_id."' ORDER BY cav_id  DESC");
        $custom_assign_vip=mysqli_fetch_assoc($query3);
        
        if($custom_assign_vip)
        {
         
        	 $cav_service_id=$custom_assign_vip['cav_service_id'];
        	 $service_data_result=mysqli_query($conn,"SELECT * from services where service_id='".$cav_service_id."' ");
             $service_data=mysqli_fetch_assoc($service_data_result);

           
	           
            $vip_service_id=$service_data['service_id'];
            $vip_service_name=$service_data['service_name'];
          	$vip_service_icon=$service_data['service_icon'];
            $service_badge_id=$service_data['service_badge_id'];
            $badge_data=mysqli_fetch_assoc(mysqli_query($conn,"SELECT badge_color from badge where badge_id='".$service_badge_id."' "));
      	
            $vip_service_badge_icon=$badge_data['badge_color'];
            $plan_where_come="cav_id:-".$custom_assign_vip['cav_service_id'].$custom_assign_vip['cav_id'];
            $is_admin_assign=1;
         	$is_vip_active=1;
 	
        }
		//    
	
        //"follow_Status" =>get_follow_users_status($vfb_id , $fb_id)
        if($is_vip_active){
        return array
                    (
                        "vip_service_id"=> $vip_service_id,
                        "vip_service_name" => $vip_service_name,
                        "vip_service_icon" => $vip_service_icon,
                        "vip_service_badge_id"=>$service_badge_id,
                        "vip_service_badge_icon" => $vip_service_badge_icon,
                    	"is_admin_assign"=> $is_admin_assign,
                    	"plan_where_come" => $plan_where_come
                    );
    	}else{
    		return "";
    	}

    }

    function get_user_vip_status_icon($fb_id)
	{	
    	include("config.php");
 		$is_vip_active=0;
 		$is_admin_assign="";
        $current_date=date('Y-m-d');
 	
 		$query2=mysqli_query($conn,"SELECT * from purchase_subscriptions_order where pso_fb_id='".$fb_id."' and pos_is_active='1' ");
        $purchase_subscriptions_order=mysqli_fetch_assoc($query2);
        
        if($purchase_subscriptions_order)
        {

        	 $pso_subscription_id=$purchase_subscriptions_order['pso_subscription_id'];
             $plan_where_come="pos_id:-".$purchase_subscriptions_order['pos_id'];
             
        	 $service_data_result=mysqli_query($conn,"SELECT * from services where service_id='".$pso_subscription_id."' ");
             $service_data=mysqli_fetch_assoc($service_data_result);

           
	        $vip_service_id=$service_data['service_id'];
            $vip_service_name=$service_data['service_name'];
          	$vip_service_icon=$service_data['service_icon'];
          
            $service_badge_id=$service_data['service_badge_id'];
            $badge_data=mysqli_fetch_assoc(mysqli_query($conn,"SELECT badge_color from badge where badge_id='".$service_badge_id."' "));
      	
            $vip_service_badge_icon=$badge_data['badge_color'];
           
            $is_admin_assign=0;
         	$is_vip_active=1;
 	
        }
	   
        //check admin assign
        $query3=mysqli_query($conn,"SELECT * from custom_assign_vip where cav_fb_id='".$fb_id."'");
        $custom_assign_vip=mysqli_fetch_assoc($query3);
        
        if($custom_assign_vip)
        {
         
        	 $cav_service_id=$custom_assign_vip['cav_service_id'];
        	 $service_data_result=mysqli_query($conn,"SELECT * from services where service_id='".$cav_service_id."' ");
             $service_data=mysqli_fetch_assoc($service_data_result);

           
	           
            $vip_service_id=$service_data['service_id'];
            $vip_service_name=$service_data['service_name'];
          	$vip_service_icon=$service_data['service_icon'];
            $service_badge_id=$service_data['service_badge_id'];
            $badge_data=mysqli_fetch_assoc(mysqli_query($conn,"SELECT badge_color from badge where badge_id='".$service_badge_id."' "));
      	
            $vip_service_badge_icon=$badge_data['badge_color'];
            $plan_where_come="cav_id:-".$custom_assign_vip['cav_service_id'];
            $is_admin_assign=1;
         	$is_vip_active=1;
 	
        }
		//    
	
        //"follow_Status" =>get_follow_users_status($vfb_id , $fb_id)
        if($is_vip_active){
        return $vip_service_icon; 
        }else{
    		return "";
    	}

    }

	function get_user_level_icon($fb_id)
	{	
    	include("config.php");
		$query1 = mysqli_query($conn,"select * from   users where fb_id = '$fb_id'");
    	$level_expo="0";

		if(mysqli_num_rows($query1) > 0)
		{
		$userdata = mysqli_fetch_assoc($query1);
		$level_expo=$userdata['total_expo'];
		}   
        
        # CODE TO FIND MY LEVEL 
         $lesql="SELECT * from level WHERE level_expo BETWEEN 0 AND ".$level_expo." order by level_tag DESC";
        $query99    = mysqli_query($conn,$lesql);
	     $data99 = mysqli_fetch_assoc($query99);
	    if($data99){ 
	    	return $data99['icon'];
	    }else{
	        return "";		
	    }
	    
    }

    function get_user_family_level_icon($fb_id)
	{
		//['family_icon']	

       $data99="/custom_uploads/family_tag_icon/familytag.png";
	   return $data99;
	}   


	function get_user_level($fb_id)
	{	
    	include("config.php");
		$query1 = mysqli_query($conn,"select * from   users where fb_id = '$fb_id'");
    	$level_expo="0";

		if(mysqli_num_rows($query1) > 0)
		{
		$userdata = mysqli_fetch_assoc($query1);
		$level_expo=$userdata['total_expo'];
		}   
        
        # CODE TO FIND MY LEVEL 
         $lesql="SELECT * from level WHERE level_expo BETWEEN 0 AND ".$level_expo." order by level_tag DESC";
        $query99    = mysqli_query($conn,$lesql);
	     $data99 = mysqli_fetch_assoc($query99);
	    if($data99){ 
	    	$data99['uesr_level_current_expo']=$level_expo;
	    	return $data99;
	    }else{
	        return "";		
	    }
	    
    }
	
//10_2_2021
    function get_user_family_level($fb_id)
	{	
		include("config.php");
		$query1 = mysqli_query($conn,"select * from   users where fb_id = '$fb_id'");
    	$level_expo="0";

		if(mysqli_num_rows($query1) > 0)
		{
		$userdata = mysqli_fetch_assoc($query1);
		$level_expo=$userdata['total_expo'];
		}   
        
        	$data99['family_icon']="/custom_uploads/level_icon/601cf6cd06a73new-03.png";
	    	return $data99;
	    

	}   

	//2_2_2021
	function get_user_live_level($fb_id)
	{	
    	include("config.php");
    	$todaydate=custom_current_date();
            
		$query1 = mysqli_query($conn,"SELECT sum(ubh_gift_total_diamond) as tot_exp FROM `user_baggage_history` WHERE ubh_type='LIVEROOM' AND ubh_fb_id= '$fb_id'");
    	$level_expo="0";

		if(mysqli_num_rows($query1) > 0)
		{
		$userdata = mysqli_fetch_assoc($query1);
		 if($userdata['tot_exp']){
	    	$level_expo=$userdata['tot_exp'];
		 } 
		}   



		$query1 = mysqli_query($conn,"SELECT sum(ubh_gift_total_diamond) as tot_exp FROM `user_baggage_history` WHERE ubh_type='LIVEROOM' AND ubh_fb_id= '$fb_id' and ubh_cr_date like '$todaydate%'");
    	$today_level_expo="0";

		if(mysqli_num_rows($query1) > 0)
		{
		$giftdata = mysqli_fetch_assoc($query1);
		 if($giftdata['tot_exp']){
	    	$today_level_expo=$giftdata['tot_exp'];
		 } 
		} 
		if($today_level_expo>3000){
			$today_level_expo="3000 -Over Flow";
		}  
        
        # CODE TO FIND MY LEVEL 
         $lesql="SELECT * from live_level WHERE live_level_expo BETWEEN 0 AND ".$level_expo." order by live_level_tag DESC";
        $query99    = mysqli_query($conn,$lesql);
	     $data99 = mysqli_fetch_assoc($query99);
	    if($data99){ 
	    	$data99['live_level_current_expo']=$level_expo;
	    	$data99['live_level_today_expo']=$today_level_expo;
	    	return $data99;
	    }else{
	        return "";		
	    }
	    
    }	 


    function user_top_fans($fb_id,$limit ){
	        include("config.php");
			 //old $query=mysqli_query($conn,"select *,sum(diamonds) as topdiamonds from view_top_fan as vtf   where vtf.reciever_id='".$fb_id."' group by vtf.sender_id  order by sum(diamonds) DESC limit  $limit ");
	        $sql="SELECT UBH.ubh_sender_fb_id as reciever_id , SUM(UBH.ubh_gift_total_diamond) as topdiamonds   FROM `user_baggage_history` AS UBH JOIN users as U ON U.fb_id=UBH.ubh_fb_id WHERE  UBH.ubh_fb_id='".$fb_id."' GROUP BY UBH.ubh_sender_fb_id  order BY topdiamonds DESC  limit  $limit ";
	        $query=mysqli_query($conn,$sql);  
    		$array_out = array();
			
	     	while($srow=mysqli_fetch_assoc($query))
    		{
    			//print_r($srow);	
    			//$row=array();
             	$reciever_id=$srow['reciever_id'];
		       	
		       	$sql="SELECT * FROM users where `fb_id`='$reciever_id'";
				$query2=mysqli_query($conn,$sql);
				$row=mysqli_fetch_assoc($query2);
    			$row['reciever_id']=$srow['reciever_id'];
		  	  	$row['topdiamonds']=$srow['topdiamonds'];
		  	  	

	            $selected_value_explde_array=explode(',',$row['user_wear_badge']);	 
			

			    $row['follow_Status']=get_follow_users_status($row['fb_id'], $fb_id);
		  	  	$row['vip_details']=get_user_vip_status($row['fb_id']);
		  		$row['user_level']=get_user_level($row['fb_id']);
		 		$row['user_live_level']=get_user_live_level($row['fb_id']);
		 		
				$row['user_total_send_diamond']=get_user_total_send_diamond($row['fb_id']);
		  		$row['user_total_received_diamond']=get_user_total_received_diamond($row['fb_id']);
	

		 	    $row['user_followers']=get_user_followers_count($row['fb_id']);
		  		$row['user_following']=get_user_following_count($row['fb_id']);
				$row['user_hearts']=get_user_hearts_count($row['fb_id']);
		 	
		 	  	$row['user_post']=get_user_post_count($row['fb_id']);
		 	

		 	  	$guardian_shield=get_guardian_shields($row['fb_id']);
		 	  	if($guardian_shield){
		 	  	$row['guardian_shields_status']="1";
		 	  	$row['guardian_shields_details']=$guardian_shield;
		 	  	}
		 	  	//$row['user_on_hoster_live_room']=get_user_on_hoster_live_room($row['fb_id']);
		 		//$row['user_on_join_live_room']=get_user_on_join_live_room($row['fb_id']);
		 	 	$row['is_user_on_live_room']="0";
		 		$row['user_on_live_room_data']="";
		 		$is_user_on_live_room=get_user_on_hoster_live_room($row['fb_id']);
		 		if($is_user_on_live_room){
		 	 	$row['is_user_on_live_room']="1";
		 		$row['user_on_live_room_data']=$is_user_on_live_room;
		 		}
		     	$row['famliy_tag_icon']='/custom_uploads/family_tag_icon/familytag.png'; 	
		    	$row['vip_details_icon'] =get_user_vip_status_icon($row['fb_id']);
			    $row['user_level_icon']= get_user_level_icon($row['fb_id']);	
			    $row['user_family_level_icon']=    get_user_family_level_icon($row['fb_id']);	
			
		       	     array_push($array_out,$row );
		            
		     //  $array_out =; 
     	   

    		}
	                    
			
     		if($array_out){
			 return	 $array_out;
				}else{
			 return	 array();
				}

	}
	
    function contribution_user_data($fb_id,$limit ){
	          include("config.php");

			//old $query=mysqli_query($conn,"select *,sum(diamonds) as topdiamonds from view_contributer where sender_id='".$fb_id."'  group by reciever_id  order by sum(diamonds) DESC limit $limit");
			$query=mysqli_query($conn,"SELECT U.*,UBH.ubh_fb_id as reciever_id , SUM(UBH.ubh_gift_total_diamond) as topdiamonds   FROM `user_baggage_history` AS UBH JOIN users as U ON U.fb_id=UBH.ubh_fb_id WHERE  UBH.ubh_sender_fb_id='".$fb_id."' GROUP BY reciever_id  order BY topdiamonds DESC limit $limit");
		       
	 		$array_out = array();
			
	     	while($srow=mysqli_fetch_assoc($query))
    		{
    			//print_r($srow);	
    			//$row=array();
             	$reciever_id=$srow['reciever_id'];
		       	
		       	$sql="SELECT * FROM users where `fb_id`='$reciever_id'";
				$query2=mysqli_query($conn,$sql);
				$row=mysqli_fetch_assoc($query2);
    			$row['reciever_id']=$srow['reciever_id'];
		  	  	$row['topdiamonds']=$srow['topdiamonds'];
		  	  	

	            $selected_value_explde_array=explode(',',$row['user_wear_badge']);	 
			

			    $row['follow_Status']=get_follow_users_status($row['fb_id'], $fb_id);
		  	  	$row['vip_details']=get_user_vip_status($row['fb_id']);
		  		$row['user_level']=get_user_level($row['fb_id']);
		 		$row['user_live_level']=get_user_live_level($row['fb_id']);
		 		
				$row['user_total_send_diamond']=get_user_total_send_diamond($row['fb_id']);
		  		$row['user_total_received_diamond']=get_user_total_received_diamond($row['fb_id']);
	

		 	    $row['user_followers']=get_user_followers_count($row['fb_id']);
		  		$row['user_following']=get_user_following_count($row['fb_id']);
				$row['user_hearts']=get_user_hearts_count($row['fb_id']);
		 	
		 	  	$row['user_post']=get_user_post_count($row['fb_id']);
		 	

		 	  	$guardian_shield=get_guardian_shields($row['fb_id']);
		 	  	if($guardian_shield){
		 	  	$row['guardian_shields_status']="1";
		 	  	$row['guardian_shields_details']=$guardian_shield;
		 	  	}
		 	  	//$row['user_on_hoster_live_room']=get_user_on_hoster_live_room($row['fb_id']);
		 		//$row['user_on_join_live_room']=get_user_on_join_live_room($row['fb_id']);
		 	 	$row['is_user_on_live_room']="0";
		 		$row['user_on_live_room_data']="";
		 		$is_user_on_live_room=get_user_on_hoster_live_room($row['fb_id']);
		 		if($is_user_on_live_room){
		 	 	$row['is_user_on_live_room']="1";
		 		$row['user_on_live_room_data']=$is_user_on_live_room;
		 		}
		     	$row['famliy_tag_icon']='/custom_uploads/family_tag_icon/familytag.png'; 	
		    	$row['vip_details_icon'] =get_user_vip_status_icon($row['fb_id']);
			    $row['user_level_icon']= get_user_level_icon($row['fb_id']);	
			    $row['user_family_level_icon']=    get_user_family_level_icon($row['fb_id']);	
			
		       	     array_push($array_out,$row );
		    }
	        

     		if($array_out){
			 return	 $array_out;
				}else{
			 return	 array();
				}

	}
	

	//common function

function insert_time_log()
    {
        require_once("config.php");
        $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true);
	    $data      = array();

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			$fb_id=$event_json['fb_id'];
			$DATE_TIME=custom_current_date_time(); 			
 			$DATE_TIME1="";
 		$qrry_1="insert into time_log_track ( `tlt_fb_id`, `tlt_start_date_time`, `tlt_end_date_time`)values(";
          $qrry_1.="'".$fb_id."',";
          $qrry_1.="'".$DATE_TIME."',";
          $qrry_1.="'".$DATE_TIME1."'";
          $qrry_1.=")";
         $res=mysqli_query($conn,$qrry_1)or die(mysqli_error($conn));
        	$lastid=mysqli_insert_id($conn);
			if($lastid)
			{
			 	$order_data =mysqli_fetch_assoc(mysqli_query($conn,"select * from time_log_track WHERE  tlt_id = '$lastid' "));
			    $msg_out="Insert Time Log Successfully";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $order_data);
			}else{
				$msg_out="Error In Data Insert";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
	
	}

function end_time_log()
    {
        require_once("config.php");
        $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true);
	    $data      = array();

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			$fb_id=$event_json['fb_id'];
			$DATE_TIME=custom_current_date_time(); 			
 			$DATE_TIME1="";
 		$qrry_1="insert into time_log_track ( `tlt_fb_id`, `tlt_start_date_time`, `tlt_end_date_time`)values(";
          $qrry_1.="'".$fb_id."',";
          $qrry_1.="'".$DATE_TIME1."',";
          $qrry_1.="'".$DATE_TIME."'";
          $qrry_1.=")";
         $res=mysqli_query($conn,$qrry_1)or die(mysqli_error($conn));
        $res=mysqli_query($conn,$qrry_1)or die(mysqli_error($conn));
        	$lastid=mysqli_insert_id($conn);
			if($lastid)
			{
			 	$order_data =mysqli_fetch_assoc(mysqli_query($conn,"select * from time_log_track WHERE  tlt_id = '$lastid' "));
			    $msg_out="Update Time Log Successfully";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $order_data);
			}else{
				$msg_out="Error In Data Insert";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
	
    }
	//25_1_2021
	function checkUserBlockStatus()
    {
     
        require_once("config.php");
        $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true);
	    $data      = array();

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			$fb_id=$event_json['fb_id'];
	
			$sql = "SELECT `fb_id`,`block` FROM `users` where `fb_id`='$fb_id'";
        $query=mysqli_query($conn,$sql);
        if(mysqli_num_rows($query)>0)
           { 
			$output=null;
			$msg_out=null;
            $row=mysqli_fetch_assoc($query);
			 if($row['block']==0){
				$msg_out="User Unblock";
			 	 $output=array( "code" => "200", "msg" => $msg_out ,"data" => $row);
			    }else{
			    $msg_out="User Block";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=>$row);
				}
			}else{
				$msg_out="User not found";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
	}

	function request_guardian_shields(){
	
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			$fb_id=$event_json['fb_id'];
			
	    	if(!isset($event_json['ulrd_id']) || $event_json['ulrd_id']=="") 
			{
				$msg_out="Validation Error ulrd_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				 print_r(json_encode($output, true)); 
				exit();
			}


	    	if(!isset($event_json['guardian_shield_for_fb_id']) || $event_json['guardian_shield_for_fb_id']=="") 
			{
				$msg_out="Validation Error guardian_shield_for_fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
	
				
		$total_diamondd_data=get_user_diamond_byfb_id($fb_id);
		$service_diamond=1500;	//guardian_shields_diamond
 		if($total_diamondd_data < $service_diamond) 
			{
				$msg_out="You have not  sufficient diamonad to request guardian shields";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}		
       

		  	$pos_paid_diamond=$service_diamond;
		$guardian_shield_for_fb_id=htmlspecialchars(strip_tags($event_json['guardian_shield_for_fb_id'] , ENT_QUOTES));
			$ulrd_id=htmlspecialchars(strip_tags($event_json['ulrd_id'] , ENT_QUOTES));
			
			 $DATE_TIME=custom_current_date_time();
          	
			//echo "CA";	  	
			$qrry_fire="INSERT INTO `request_guardian_shields`( `guardian_shield_for_fb_id`, `guardian_shield_ulrd_id`, `guardian_shield_diamond`, `guardian_shield_cr_date` ,`guardian_shield_fb_id`) VALUES ('".$guardian_shield_for_fb_id."', '".$ulrd_id."', '".$service_diamond."', '".$DATE_TIME."', '".$fb_id."');"; 
		  	 ;
			$res=mysqli_query($conn,$qrry_fire)or die(mysqli_error($conn));;
 		   	$lastid=mysqli_insert_id($conn);
			if($lastid)
			{
			 	$REMAINDIAMOND=UPDATE_daimond_sender($fb_id , $service_diamond);
			    //add history 
		 		$insertDIAMONDhistory=insert_diamond_transfer_history($fb_id , 1 , $service_diamond  ,'Request guardian shields :-'.$lastid);			
			    
			    $order_data =mysqli_fetch_assoc(mysqli_query($conn,"select * from request_guardian_shields WHERE  guardian_shield_id = '$lastid' "));
			    $msg_out="Request Guardian Shields Successfully";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $order_data);
			}else{
				$msg_out="Error In Data Insert";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
		}
	//13_1_2021
	function get_single_event_raking(){
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}

	    	if(!isset($event_json['event_id']) || $event_json['event_id']=="") 
			{
				$msg_out="Validation Error event_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
	    	if(!isset($event_json['event_rank_type']) || $event_json['event_rank_type']=="") 
			{
				$msg_out="Validation Error event_rank_type Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			$event_rank_type=$event_json['event_rank_type'];
			$event_id=$event_json['event_id'];
			
			
			$sqli="SELECT * FROM `event_admin_new` where event_admin_id='$event_id'";
			$result=mysqli_query($conn,$sqli) or die(mysqli_error($conn));
			$data=mysqli_fetch_assoc($result);  
			if($data)
			{   
				

				$sqli="SELECT fb_id,mobile,first_name,last_name,profile_pic,user_wear_badge,total_diamondd,total_earning,total_expo,total_beans,total_silver_coin FROM `users` limit 20";
				$result=mysqli_query($conn,$sqli) or die(mysqli_error($conn));
		        $userdata=mysqli_fetch_all($result, MYSQLI_ASSOC); 
		       
		        $rankwisedata=array();
		        $top_rank=1;
		  	foreach ($userdata as $value) {
		  			# code...
		  		$value['top_rank']=$top_rank;
		  		$value['follow_Status']=get_follow_users_status($value['fb_id'], $ulrd_fb_id);
		  	 	$value['vip_details']=get_user_vip_status($value['fb_id']);
		  		$value['user_level']=get_user_level($value['fb_id']);
		  		$value['user_followers']=get_user_followers_count($value['fb_id']);
		  		$value['user_following']=get_user_following_count($value['fb_id']);
				$value['user_hearts']=get_user_hearts_count($value['fb_id']);
		 	 
		 	  	$value['user_post']=get_user_post_count($value['fb_id']);

		  		array_push($rankwisedata,$value);
		  		$top_rank++;
		  		}	
		  		if($rankwisedata){
			    $msg_out="Event Rank Wise User Data";	
				$output=array( "code" => "200", "msg" => $msg_out , "event_rank_type"=>$event_rank_type , "data"=> $rankwisedata);
				}else{
				$msg_out="Event Rank Wise User Data Not Found ";
				$output=array( "code" => "500", "msg" => $msg_out , "data"=> "" ,"event_rank_type"=>$event_rank_type );
				}
			}else{
				$msg_out="Event  Not Found ";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));

			  
    }
	//13_1_2021
	
	//12_1_2021
	function get_admin_single_event(){
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}

	    	if(!isset($event_json['event_id']) || $event_json['event_id']=="") 
			{
				$msg_out="Validation Error event_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			$event_id=$event_json['event_id'];
			$sqli="SELECT * FROM `event_admin_new` where event_admin_id='$event_id'";
			$result=mysqli_query($conn,$sqli) or die(mysqli_error($conn));
			$data=mysqli_fetch_assoc($result);  
			if($data)
			{   
				$sqli="SELECT * FROM `event_rules` where event_admin_id='$event_id'";
				$result=mysqli_query($conn,$sqli) or die(mysqli_error($conn));
		        $event_rules_data=mysqli_fetch_all($result, MYSQLI_ASSOC); 
				$sqli="SELECT * FROM `event_rewards` where event_admin_id='$event_id' and event_rewards_type='Top Gifter' order by event_reward_rank ASC ";
				$result=mysqli_query($conn,$sqli) or die(mysqli_error($conn));
		        $event_reward_TopGifter_data=mysqli_fetch_all($result, MYSQLI_ASSOC); 
				
				$sqli="SELECT * FROM `event_rewards` where event_admin_id='$event_id' and event_rewards_type='Top Receiver' order by event_reward_rank ASC ";
				$result=mysqli_query($conn,$sqli) or die(mysqli_error($conn));
		        $event_reward_TopReceiver_data=mysqli_fetch_all($result, MYSQLI_ASSOC); 
			

				
			//	$data['event_rules']=$event_rules_data;
		  	 $data['event_rewards']=array(
		  	 	"Top_Gifter" => $event_reward_TopGifter_data ,
		  	 	"Top_Receiver" => $event_reward_TopReceiver_data ,
		  	 							);
			

			    $msg_out="Get Event";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data"=> $data);
			}else{
				$msg_out="Event  Not Found ";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));

			  
    }
	//12_1_2021
	function get_admin_events(){
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			if(!isset($event_json['event_type']) || $event_json['event_type']=="") 
			{
				$msg_out="Validation Error event_type Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			$event_type=$event_json['event_type'];
				$sqli="SELECT * FROM `event_admin_new` where event_admin_type='$event_type' and date_format(now(),'%Y-%m-%d')<= date_format(event_admin_to_date,'%Y-%m-%d')  ORDER BY `event_admin_type`  DESC";
			$result=mysqli_query($conn,$sqli) or die(mysqli_error($conn));
		   $res['running_event'] =mysqli_fetch_all($result, MYSQLI_ASSOC); 
        
        $sqli="SELECT * FROM `event_admin_new` where event_admin_type='$event_type' and date_format(now(),'%Y-%m-%d') > date_format(event_admin_to_date,'%Y-%m-%d')  ORDER BY `event_admin_type`  DESC";
			$result=mysqli_query($conn,$sqli) or die(mysqli_error($conn));
		   $res['past_event'] =mysqli_fetch_all($result, MYSQLI_ASSOC); 
		
			// $data=array( 
			// 			"Live" =>$livedata,
			// 			"Room" =>$roomdata,
			// 			"Gifter" =>$Gifterdata
			// 			);
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
	//28_12_2020
	
	function submit_customer_support(){
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	        if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				exit();
			}		
	
	        if(!isset($event_json['customer_support_type']) || $event_json['customer_support_type']=="") 
			{
				$msg_out="Validation Error customer_support_type type Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				exit();
			}

			if(!isset($event_json['customer_support_description']) || $event_json['customer_support_description']=="") 
			{
						$msg_out="Validation Error customer_support_description Missing";
					    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
							
						 print_r(json_encode($output, true)); 
						exit();
			}

			if(!isset($event_json['customer_support_contact_type']) || $event_json['customer_support_contact_type']=="") 
			{
						$msg_out="Validation Error customer_support_contact_type Missing";
					    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
							
						 print_r(json_encode($output, true)); 
						exit();
			}

	   if(!isset($event_json['customer_support_contact']) && $event_json['customer_support_contact']=="" )
	    {
			$msg_out="Validation Error customer_support_contact ";
			$output=array( "code" => "201", "msg" => $msg_out);
			print_r(json_encode($output, true));
			exit();
		}

	

		    $customer_support_type=htmlspecialchars(strip_tags($event_json['customer_support_type'] , ENT_QUOTES));
		    $customer_support_contact_type=htmlspecialchars(strip_tags($event_json['customer_support_contact_type'] , ENT_QUOTES));
		    $customer_support_contact=htmlspecialchars(strip_tags($event_json['customer_support_contact'] , ENT_QUOTES));
		    $customer_support_description=htmlspecialchars(strip_tags($event_json['customer_support_description'] , ENT_QUOTES));
		    $fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
		     $DATE_TIME=custom_current_date_time();
            
		$customer_support_attechment_file="";
		if(isset($event_json['customer_support_file']))
	    {
			
				if($event_json['customer_support_file']=="" )
				{
					$msg_out="Validation Error customer_support_file_name ";
					$output=array( "code" => "201", "msg" => $msg_out);
					print_r(json_encode($output, true));
					exit();
				}
				     		     

				if(!isset($event_json['customer_support_file_name']) && $event_json['customer_support_file_name']=="" )
				{
					$msg_out="Validation Error customer_support_file_name ";
					$output=array( "code" => "201", "msg" => $msg_out);
					print_r(json_encode($output, true));
					exit();
				}	


			 	$thum1=explode(',', $event_json['customer_support_file']);
				$thum=$thum1[1];
				
				 $fileName    = time()."_".rand().$event_json['customer_support_file_name'];
			     $attach_url   = $_SERVER["DOCUMENT_ROOT"]."/custom_uploads/customer_support_attechment/".$fileName;
				 	$customer_support_attechment_file="/custom_uploads/customer_support_attechment/".$fileName;
					$thum = base64_decode($thum);
					file_put_contents($attach_url, $thum);
		}    



		     $qrry_1="insert into customer_support (`customer_support_type`, `customer_support_description`, `customer_support_contact_type`, `customer_support_contact`, `customer_support_cr_date`, `customer_support_fb_id`,`customer_support_attechment_file`)values(";
    			$qrry_1.="'".$customer_support_type."',";
    			$qrry_1.="'".$customer_support_description."',";
    			$qrry_1.="'".$customer_support_contact_type."',";
    			$qrry_1.="'".$customer_support_contact."',";
    			$qrry_1.="'".$DATE_TIME."',";
    			$qrry_1.="'".$fb_id."',";
    			$qrry_1.="'".$customer_support_attechment_file."'";
				$qrry_1.=")";
    			 mysqli_query($conn,$qrry_1)or die(mysqli_error($conn));
    		$last_insertid = mysqli_insert_id($conn);
			if($last_insertid)
    		{
				
				/*
					if(isset($event_json['customer_support_attachment']))
					{
						$attechment=json_decode($event_json['customer_support_attachment'] , true);
					// print_r($attechment);
						if(!empty($attechment)){
					      foreach ($attechment as $value) {
							# code...
						  $thum1=explode(',', $value['customer_support_file']);
						  $thum=$thum1[1];
						 
						  $fileName    = time()."_".rand().$value['customer_support_file_name'];
							 $attach_url   = $_SERVER["DOCUMENT_ROOT"]."/custom_uploads/customer_support_attechment/".$fileName;
						  $thum = base64_decode($thum);
					      file_put_contents($attach_url, $thum);
						  $insertatt="INSERT INTO `customer_support_attechment` ( `customer_support_attechment_cs_id`, `customer_support_attechment`) VALUES ('".$last_insertid."', '".$attach_url."')";
						  mysqli_query($conn,$insertatt) or die(mysqli_error($conn));
						  }//for loop
					    }	
					}//attechment code close here
				*/			
		    $sqli="SELECT * FROM `customer_support` WHERE  customer_support_id='".$last_insertid."'";
			$result=mysqli_query($conn,$sqli) or die(mysqli_error($conn));
			  $row=mysqli_fetch_assoc($result);  
			  
			    $msg_out="Customer Support Submit";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data"=> $row);
			    print_r(json_encode($output, true));
			}else{
				$msg_out="Customer Support Not submit plz try again";
			    $output=array( "code" => "500", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true));
			}
  
	}
	//20_1_2021
	function submit_customer_feedback(){
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	        if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				exit();
			}		
	

	        if(!isset($event_json['customer_feedback_type']) || $event_json['customer_feedback_type']=="") 
			{
				$msg_out="Validation Error customer_feedback_type type Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				exit();
			}

			if(!isset($event_json['customer_feedback_description']) || $event_json['customer_feedback_description']=="") 
			{
						$msg_out="Validation Error customer_feedback_description Missing";
					    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
							
						 print_r(json_encode($output, true)); 
						exit();
			}

			if(!isset($event_json['customer_feedback_contact_type']) || $event_json['customer_feedback_contact_type']=="") 
			{
						$msg_out="Validation Error customer_feedback_contact_type Missing";
					    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
							
						 print_r(json_encode($output, true)); 
						exit();
			}

	   if(!isset($event_json['customer_feedback_contact']) && $event_json['customer_feedback_contact']=="" )
	    {
			$msg_out="Validation Error customer_feedback_contact ";
			$output=array( "code" => "201", "msg" => $msg_out);
			print_r(json_encode($output, true));
			exit();
		}

		$customer_feedback_attechment_file="";
		if(isset($event_json['customer_feedback_file']))
	    {
			
				if($event_json['customer_feedback_file']=="" )
				{
					$msg_out="Validation Error customer_feedback_file ";
					$output=array( "code" => "201", "msg" => $msg_out);
					print_r(json_encode($output, true));
					exit();
				}
				     		     

				if(!isset($event_json['customer_feedback_file_name']) && $event_json['customer_feedback_file_name']=="" )
				{
					$msg_out="Validation Error customer_feedback_file_name ";
					$output=array( "code" => "201", "msg" => $msg_out);
					print_r(json_encode($output, true));
					exit();
				}	


			 	$thum1=explode(',', $event_json['customer_feedback_file']);
				$thum=$thum1[1];
				
				 $fileName    = time()."_".rand().$event_json['customer_feedback_file_name'];
			     $attach_url   = $_SERVER["DOCUMENT_ROOT"]."/custom_uploads/customer_feedback_attechment/".$fileName;
				 	$customer_feedback_attechment_file="/custom_uploads/customer_feedback_attechment/".$fileName;
					$thum = base64_decode($thum);
					file_put_contents($attach_url, $thum);
		}	
	

		    $customer_feedback_type=htmlspecialchars(strip_tags($event_json['customer_feedback_type'] , ENT_QUOTES));
		    $customer_feedback_contact_type=htmlspecialchars(strip_tags($event_json['customer_feedback_contact_type'] , ENT_QUOTES));
		    $customer_feedback_contact=htmlspecialchars(strip_tags($event_json['customer_feedback_contact'] , ENT_QUOTES));
		    $customer_feedback_description=htmlspecialchars(strip_tags($event_json['customer_feedback_description'] , ENT_QUOTES));
		    $fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
		     $DATE_TIME=custom_current_date_time();
            
		

		     $qrry_1="insert into customer_feedback (`customer_feedback_type`, `customer_feedback_description`, `customer_feedback_contact_type`, `customer_feedback_contact`, `customer_feedback_cr_date`, `customer_feedback_fb_id`,`customer_feedback_attechment_file`)values(";
    			$qrry_1.="'".$customer_feedback_type."',";
    			$qrry_1.="'".$customer_feedback_description."',";
    			$qrry_1.="'".$customer_feedback_contact_type."',";
    			$qrry_1.="'".$customer_feedback_contact."',";
    			$qrry_1.="'".$DATE_TIME."',";
    			$qrry_1.="'".$fb_id."',";
    			$qrry_1.="'".$customer_feedback_attechment_file."'";
				$qrry_1.=")";
    			 mysqli_query($conn,$qrry_1)or die(mysqli_error($conn));
    		$last_insertid = mysqli_insert_id($conn);
			if($last_insertid)
    		{
		    $sqli="SELECT * FROM `customer_feedback` WHERE  customer_feedback_id='".$last_insertid."'";
			$result=mysqli_query($conn,$sqli) or die(mysqli_error($conn));
			  $row=mysqli_fetch_assoc($result);  
			  
			    $msg_out="Customer Feedback Submit";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data"=> $row);
			    print_r(json_encode($output, true));
			}else{
				$msg_out="Customer Feedback Not submit plz try again";
			    $output=array( "code" => "500", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true));
			}
  
	}
	//20_1_2021
	
	function get_recharge_plan(){
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			$sqli="SELECT * FROM `recharge_plan`";
			$result=mysqli_query($conn,$sqli) or die(mysqli_error($conn));
			if(mysqli_num_rows($result))
			{   
			    $data=mysqli_fetch_all($result, MYSQLI_ASSOC); 
				$msg_out="Get All Recharge plan";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data"=> $data);
			     
			}else{
				$msg_out="Recharge Plan List Empty";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
	}
	//28_12_2020
	function user_add_daily_task_record(){
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
		
		
			if(!isset($event_json['task_position']) || $event_json['task_position']=="") 
			{
				$msg_out="Validation Error task_position Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			
			if(!isset($event_json['daily_task_id']) || $event_json['daily_task_id']=="") 
			{
				$msg_out="Validation Error daily_task_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
		

			if(!isset($event_json['task_type']) || $event_json['task_type']=="") 
			{
				$msg_out="Validation Error task_type Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			$fb_id=$event_json['fb_id'];
			$task_type=$event_json['task_type'];
            $DATE_TIME=custom_current_date_time();
            $todaydate=custom_current_date();
            $task_id=$event_json['daily_task_id'];
	        $add_silver_coin=1; 
	        $udtr_task_position=$event_json['task_position'];
			if($udtr_task_position<6){
				$qrry_get=" SELECT * FROM `daily_task` WHERE daily_task_id=$task_id ";
				$resd=mysqli_query($conn,$qrry_get)or die(mysqli_error($conn));
					$daily_task_data=mysqli_fetch_assoc($resd); 
				 
				 if($daily_task_data){
				   $task_count=$daily_task_data['daily_task_total_target'];	
				   $add_silver_coin=$daily_task_data['daily_task_par_target'];
				 }  
			}else{
	        
	         $qrry_get=" SELECT * FROM `daily_vip_task` WHERE daily_vip_task_id=$task_id ";
			 $resd=mysqli_query($conn,$qrry_get)or die(mysqli_error($conn));
 		   	 $daily_task_data=mysqli_fetch_assoc($resd); 
		  	
		  	if($daily_task_data){
		  	  $task_count=$daily_task_data['daily_vip_task_total_target'];	
		  	  $add_silver_coin=$daily_task_data['daily_vip_task_per_target'];
		  	} 
		} 

	        $sql1="SELECT * FROM `user_daily_task_record` WHERE udtr_daily_task_id='$task_id' AND udtr_fb_id='$fb_id' AND udtr_cr_date like '$todaydate%' and  udtr_task_position ='$udtr_task_position'";
			$old=mysqli_query($conn,$sql1)or die(mysqli_error($conn));
 		   	 $Already_collect=mysqli_fetch_assoc($old); 
		  	
 		    if($Already_collect)   	 
	        {	
	        	$msg_out="Already Task Add for this task";
			    $output=array( "code" => "200", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}

	        $qrry_get='INSERT INTO `user_daily_task_record` ( `udtr_fb_id`, `udtr_cr_date`, `udtr_daily_task_id`, `udtr_add_silver_coin`, `udtr_task_type`,`udtr_task_position`) VALUES ("'.$fb_id.'","'.$DATE_TIME.'","'.$task_id.'","'.$add_silver_coin.'","'.$task_type.'","'.$udtr_task_position.'")';
			 
		     $res=mysqli_query($conn,$qrry_get)or die(mysqli_error($conn));
 		  	 $lastid=mysqli_insert_id($conn);
			if($lastid)
			{
				// as par ashu UPDATE_add_silvercoin_user($fb_id ,$add_silver_coin);	
			   //update silver coin
 			    $msg_out="You have Compeleted Task";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $lastid);
			}else{
				$msg_out="Error in compeleted Task Plz try Again  ";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));

	}
    //4_2_2021
	function user_collect_silvercoin_daily_task_record(){
		    
	   require_once("config.php");
    
	   // require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
		
		
			if(!isset($event_json['udtr_id']) || $event_json['udtr_id']=="") 
			{
				$msg_out="Validation Error udtr_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}

			$fb_id=$event_json['fb_id'];
			
			$udtr_id=$event_json['udtr_id'];
	        
	         $sql1="SELECT * FROM `user_daily_task_record` WHERE udtr_id='$udtr_id' AND udtr_fb_id='$fb_id'";
			$old=mysqli_query($conn,$sql1)or die(mysqli_error($conn));
 		   	$datato_collect=mysqli_fetch_assoc($old); 
		 	//print_r($datato_collect);

		 	if(empty($datato_collect))   	 
	        {	
	        	//$msg_out="Already Collected for this task";
	        	$msg_out="Record Not Found For This Task";
			    $output=array( "code" => "200", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			if($datato_collect['udtr_is_coin_collected']!=0){
		  	    $msg_out="Already Collected for this task";
	        	$output=array( "code" => "200", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			$udtrid=$datato_collect['udtr_id'];
	        $add_silver_coin=$datato_collect['udtr_add_silver_coin'];
	        $fb_id=$datato_collect['udtr_fb_id'];
	        $uqrry='update  `user_daily_task_record` set  udtr_is_coin_collected=1 where  udtr_id="'.$udtrid.'"';
			 $res=mysqli_query($conn,$uqrry)or die(mysqli_error($conn));
 		  	// $lastid=mysqli_insert_id($conn);
			if($res)
			{
			   UPDATE_add_silvercoin_user($fb_id ,$add_silver_coin);	
			   //update silver coin
 			   $msg_out="You have Collected  Silver coin for Task";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => "");
			}else{
				$msg_out="Error in Collected  Silver coin  Plz try Again  ";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
	}
    
    //25_12_2020
    function app_pages_banners(){
    	require_once("config.php");
        $Recharge =mysqli_fetch_assoc(mysqli_query($conn,"select * from app_pages_banners WHERE apb_page = 'Recharge'  AND  apb_status=1"));
        $Income =mysqli_fetch_assoc(mysqli_query($conn,"select * from app_pages_banners WHERE apb_page = 'Income' AND  apb_status=1"));
        	$sql="select * from app_pages_banners WHERE apb_page = 'Live'  AND  apb_status=1";
	        $res=mysqli_query($conn,$sql);
 		   	$Live=mysqli_fetch_all($res, MYSQLI_ASSOC); 
			//('Recharge', 'Income', 'Live
			$custom_array=array(
				'Live'=>$Live,
				'Recharge'=>$Recharge,			
				'Income'=>$Income,			
			);

		  	if($custom_array){
			    $msg_out="Get app_pages_banners List";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $custom_array);
			}else{
				$msg_out="No Any Data Found ";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
	
    }


    //24_12_2020
    function get_user_joined_live_room_detail()
	{   
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
		
			if(!isset($event_json['ulrd_id']) || $event_json['ulrd_id']=="") 
			{
				$msg_out="Validation Error ulrd_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			$fb_id=$event_json['fb_id'];
			$ulrd_id=$event_json['ulrd_id'];
           
		    $ulrd_data =mysqli_fetch_assoc(mysqli_query($conn,"select * from user_live_room_details WHERE ulrd_id = '$ulrd_id' "));
			if(empty($ulrd_data)){
				$msg_out=" This Room not found in our Record ";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			$ulrd_fb_id=$ulrd_data['ulrd_fb_id'];

			
            $qrry_get=" SELECT UJLRD.*,U.fb_id,U.mobile,U.first_name,U.last_name,U.username,U.profile_pic,U.vip_status,U.total_diamondd,U.total_expo,U.is_certified,U.is_certified_reason,U.total_beans,U.total_silver_coin FROM user_join_live_room_details as UJLRD JOIN   users  AS U on U.fb_id=UJLRD.ujlrd_fb_id where UJLRD.ujlrd_ulrd_id='$ulrd_id' and    UJLRD.ujlrd_status=0";
			 $res=mysqli_query($conn,$qrry_get);
 		   	 $daily_task_data_list=mysqli_fetch_all($res, MYSQLI_ASSOC); 
		  	$custom_array=array();
		  	$counter_vip_status=0;
		  	foreach ($daily_task_data_list as $value) {
		  			# code...
		  		$value['follow_Status']=get_follow_users_status($value['fb_id'], $ulrd_fb_id);
		  	 	$value['vip_details']=get_user_vip_status($value['fb_id']);
		  	 	if($value['vip_details']){
		  	 	$value['vip_status']="1";		
		  		$counter_vip_status++;
		  	 		
		  	 	}
		  	 	
		  		$value['user_level']=get_user_level($value['fb_id']);
		  		$value['user_followers']=get_user_followers_count($value['fb_id']);
		  		$value['user_following']=get_user_following_count($value['fb_id']);
		 	  	$value['user_hearts']=get_user_hearts_count($value['fb_id']);
		 	
		 	  	$value['user_post']=get_user_post_count($value['fb_id']);
		 	
		 	$value['user_total_send_diamond']=get_user_total_send_diamond($value['fb_id']);
		  	$value['user_total_received_diamond']=get_user_total_received_diamond($value['fb_id']);
			
		  		array_push($custom_array,$value);
		  		}	
		  	if($custom_array){
				$online_count=count($custom_array);
			    $msg_out="Get user join live room details List";
		  	    $ext_msg= $online_count.' online ( '.$counter_vip_status . ' Vip )';

				$output=array( "code" => "200", "msg" => $msg_out , "ext_msg" =>$ext_msg , "data" => $custom_array);
			}else{
				$msg_out="No Any Data Found In user join live room details";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
	}
   	//24_12_2020
    
   	//21_12_2020
    //beans start
    function exchange_diamond_to_beans_list()
	{   
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			$fb_id=$event_json['fb_id'];
			//$fb_id=$event_json['fb_id'];
	         $qrry_get=" SELECT * FROM `exchange_diamond_to_beans`  where edtb_status='Active' ";
			 $res=mysqli_query($conn,$qrry_get);
 		   	  $daily_task_data_list=mysqli_fetch_all($res, MYSQLI_ASSOC); 
		  	$custom_array=array();
		  	foreach ($daily_task_data_list as $value) {
		  			# code...
		  		array_push($custom_array,$value);
		  		}	
		  	if($custom_array){
			    $msg_out="Get exchange diamond  to beans List";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $custom_array);
			}else{
				$msg_out="No Any Data Found In exchange diamond to beans";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));

    }


	function get_total_diamond_earning_in_chat(){
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);
		if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			$fb_id=$event_json['fb_id'];
			$sql = "SELECT sum(ubh_gift_total_diamond) as 'totalDiamondsInChatRecived' FROM `user_baggage_history` where ubh_fb_id='$fb_id' and ubh_type<>'LIVEROOM'";
			$query=mysqli_query($conn,$sql);
			$msg_out="";
			$finalData=[];
			$finalData['totalDiamondsInChatRecived']=0;
			$finalData['totalDiamondsInChatSend']=0;
			if(mysqli_num_rows($query)>0)
           {
			$msg_out=$msg_out."totalDiamondsInChatRecivedFound  ";
			 $data=mysqli_fetch_assoc($query);
				$finalData['totalDiamondsInChatRecived']=(int)$data['totalDiamondsInChatRecived'];
	}else{
		$msg_out=$msg_out."totalDiamondsInChatRecivedNotFound  ";
	}
	$sql = "SELECT sum(ubh_gift_total_diamond) as 'totalDiamondsInChatSend' FROM `user_baggage_history` where ubh_sender_fb_id='$fb_id' and ubh_type<>'LIVEROOM'";
	$query=mysqli_query($conn,$sql);

	if(mysqli_num_rows($query)>0){
		$msg_out=$msg_out."totalDiamondsInChatSendFound  ";
		$data=mysqli_fetch_assoc($query);
		$finalData['totalDiamondsInChatSend']=(int)$data['totalDiamondsInChatSend'];
	}else{
		$msg_out=$msg_out."totalDiamondsInChatSendNotFound  ";
	}
	$output=array( "code" => "200", "msg" => $msg_out ,"data" => $finalData);
	print_r(json_encode($output, true)); 
				exit();

		}

	function get_total_diamond_earning(){
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);
		if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			$todaysDate=$date=date("Y-m-d");
			$fb_id=$event_json['fb_id'];
			$sql = "SELECT sum(ubh_gift_total_diamond) as 'todaysTotalDiamonds' FROM `user_baggage_history` where ubh_fb_id='$fb_id' and ubh_type='LIVEROOM' And ubh_cr_date like '$todaysDate%'";
        $query=mysqli_query($conn,$sql);
        $msg_out="";	
			 $finalData=[];
			 $finalData['todaysTotalDiamonds']=0;
			 $finalData['grandTotalDiamonds']=0;
        if(mysqli_num_rows($query)>0)
           {
			$msg_out=$msg_out."todaysTotalDiamondsFound  ";
			 $data=mysqli_fetch_assoc($query);
				$finalData['todaysTotalDiamonds']=(int)$data['todaysTotalDiamonds'];
	}else{
		$msg_out=$msg_out."todaysTotalDiamondsNotFound  ";
	}
	$sql = "SELECT sum(ubh_gift_total_diamond) as 'grandTotalDiamonds' FROM `user_baggage_history` WHERE ubh_fb_id='$fb_id' and ubh_type='LIVEROOM'";
	$query=mysqli_query($conn,$sql);

	if(mysqli_num_rows($query)>0){
		$msg_out=$msg_out."grandTotalDiamondsFound  ";
		$data=mysqli_fetch_assoc($query);
		$finalData['grandTotalDiamonds']=(int)$data['grandTotalDiamonds'];
	}else{
		$msg_out=$msg_out."grandTotalDiamondsNotFound  ";
	}
	$output=array( "code" => "200", "msg" => $msg_out ,"data" => $finalData);
	print_r(json_encode($output, true)); 
				exit();
}

    function create_user_exchange_diamond_to_beans_list()
	{   
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}

	    	if(!isset($event_json['edtb_id']) || $event_json['edtb_id']=="") 
			{
				$msg_out="Validation Error edtb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			$fb_id=$event_json['fb_id'];
			
			$User_data=get_userdata_byfb_id($fb_id);
			if(empty($User_data)){
				$msg_out="User not found in our record ";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}

			$edtb_id=$event_json['edtb_id'];
	        $edtb_data =mysqli_fetch_assoc(mysqli_query($conn,"select * from exchange_diamond_to_beans WHERE edtb_status='Active' and edtb_id = '$edtb_id' "));
			if(empty($edtb_data)){
				$msg_out="exchange diamond to beans not found in our record ";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			//check diamond user
	        $before_user_total_diamondd=$User_data['total_diamondd'];
	        $before_user_total_beans=$User_data['total_beans'];
	        
	        $edtb_diamond=$edtb_data['edtb_diamond'];
	        $edtb_beans=$edtb_data['edtb_beans'];
	        
	        if($before_user_total_beans<$edtb_diamond){
				$msg_out="You can not exchange bean to diamond ";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}

	        $DATE_TIME=custom_current_date_time();
	         
	         $qrry_get='INSERT INTO `user_exchange_diamond_to_beans`( `uedtb_fb_id`, `uedtb_request_diamond`, `uedtb_request_beans`, `uedtb_has_diamond`, `uedtb_has_beans`, `uedtb_cr_date`) 
			  VALUES ("'.$fb_id.'","'.$edtb_diamond.'","'.$edtb_beans.'","'.$before_user_total_diamondd.'","'.$before_user_total_beans.'","'.$DATE_TIME.'")';
			 
			 $res=mysqli_query($conn,$qrry_get)or die(mysqli_error($conn));
 		  	 $lastid=mysqli_insert_id($conn);
			if($lastid)
			{
			   //update coin
			   $UPDATE_beans_user="update users set total_beans=total_beans-".$edtb_beans." WHERE fb_id=".$fb_id;
			   mysqli_query($conn,$UPDATE_beans_user); 

 				$UPDATE_daimond_user="update users set total_diamondd=total_diamondd+".$edtb_diamond." WHERE fb_id=".$fb_id;
	         	mysqli_query($conn,$UPDATE_daimond_user);
				//update beans
			    //$UPDATE_beans_user="update users set total_beans=total_beans+".$edtb_beans." WHERE fb_id=".$fb_id;
	         //	mysqli_query($conn,$UPDATE_beans_user);
	
			   $last_data =mysqli_fetch_assoc(mysqli_query($conn,"select * from user_exchange_diamond_to_beans WHERE uedtb_id = '$lastid' "));
			   $msg_out="exchange diamond to beans Successfully";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $last_data);
			}else{
				$msg_out="Error In exchange diamond to beans Request";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
	}

    function get_user_exchange_diamond_to_beans_list()
	{   
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			$fb_id=$event_json['fb_id'];
			//$fb_id=$event_json['fb_id'];
	         $qrry_get=" SELECT * FROM `user_exchange_diamond_to_beans`  where uedtb_fb_id=$fb_id ";
			 $res=mysqli_query($conn,$qrry_get);
 		   	  $daily_task_data_list=mysqli_fetch_all($res, MYSQLI_ASSOC); 
		  	$custom_array=array();
		  	foreach ($daily_task_data_list as $value) {
		  			# code...
		  		array_push($custom_array,$value);
		  		}	
		  	if($custom_array){
			    $msg_out="Get user exchange diamond to beans List";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $custom_array);
			}else{
				$msg_out="No Any Data Found In wuser exchange diamond to beans";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));

    }
     //beans close
    //withdrawal_request start
   	function create_user_withdrawal_request()
	{   
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{ 
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			if(!isset($event_json['uwr_amount']) || $event_json['uwr_amount']=="") 
			{
				$msg_out="Validation Error uwr_amount Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			if(!isset($event_json['uwr_coin']) || $event_json['uwr_coin']=="") 
			{
				$msg_out="Validation Error uwr_coin Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			if(!isset($event_json['uwr_payment_method']) || $event_json['uwr_payment_method']=="") 
			{
				$msg_out="Validation Error uwr_payment_method Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
		
			$uwr_payment_method=$event_json['uwr_payment_method'];

	      	//'Bank Transfer'
			$uwr_bank_name="";
			$uwr_account_type="";
		    $uwr_account_number="";
		    $uwr_ifsc="";
	
		if($uwr_payment_method=="Bank Transfer")
		{
				if(!isset($event_json['uwr_bank_name']) || $event_json['uwr_bank_name']=="") 
			{
				$msg_out="Validation Error uwr_bank_name Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
				if(!isset($event_json['uwr_account_type']) || $event_json['uwr_account_type']=="") 
			{
				$msg_out="Validation Error uwr_account_type Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			if(!isset($event_json['uwr_account_number']) || $event_json['uwr_account_number']=="") 
			{
				$msg_out="Validation Error uwr_account_number Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
		
			if(!isset($event_json['uwr_ifsc']) || $event_json['uwr_ifsc']=="") 
			{
				$msg_out="Validation Error uwr_ifsc Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}

    		$uwr_bank_name=$event_json['uwr_bank_name'];
			$uwr_account_type=$event_json['uwr_account_type'];
		    $uwr_account_number=$event_json['uwr_account_number'];
		    $uwr_ifsc=$event_json['uwr_ifsc'];
	    }

		//other
		$uwr_other ="";
	        
		if($uwr_payment_method!="Bank Transfer")
		{

		 if(!isset($event_json['uwr_other']) || $event_json['uwr_other']=="") 
			{
				$msg_out="Validation Error uwr_other Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
	
		$uwr_other =$event_json['uwr_other'];
	    }



			//
		      	if(!isset($event_json['uwr_name']) || $event_json['uwr_name']=="") 
			{
				$msg_out="Validation Error uwr_name Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			
			if(!isset($event_json['uwr_contact']) || $event_json['uwr_contact']=="") 
			{
				$msg_out="Validation Error uwr_contact Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			
			if(!isset($event_json['uwr_email']) || $event_json['uwr_email']=="") 
			{
				$msg_out="Validation Error uwr_email Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			
			$uwr_coin=$event_json['uwr_coin'];
			$uwr_amount=$event_json['uwr_amount'];
			
			$uwr_fb_id=$event_json['fb_id'];
			
			
			
			
	        
	        $uwr_name=$event_json['uwr_name'];
	        $uwr_contact=$event_json['uwr_contact'];
	        $uwr_email=$event_json['uwr_email'];

	         $DATE_TIME=custom_current_date_time();
	         $qrry_get='INSERT INTO `user_withdrawal_request` (`uwr_fb_id`, `uwr_amount`, `uwr_coin`, `uwr_request_cr_date`,`uwr_bank_name`,`uwr_account_number`, `uwr_ifsc`, `uwr_account_type`, `uwr_other`, `uwr_payment_method`,`uwr_name`, `uwr_contact`, `uwr_email`) VALUES ("'.$uwr_fb_id.'","'.$uwr_amount.'","'.$uwr_coin.'","'.$DATE_TIME.'","'.$uwr_bank_name.'","'.$uwr_account_number.'","'.$uwr_ifsc.'","'.$uwr_account_type.'","'.$uwr_other.'","'.$uwr_payment_method.'","'.$uwr_name.'","'.$uwr_contact.'","'.$uwr_email.'")';
			 
			 $res=mysqli_query($conn,$qrry_get)or die(mysqli_error($conn));
 		  	 $lastid=mysqli_insert_id($conn);
			if($lastid)
			{
			   $last_data =mysqli_fetch_assoc(mysqli_query($conn,"select * from user_withdrawal_request WHERE uwr_id = '$lastid' "));
			   
			//update beans
            $UPDATE_beans_user="update users set total_beans=total_beans-".$uwr_coin." WHERE fb_id=".$uwr_fb_id;
            mysqli_query($conn,$UPDATE_beans_user);
  
			   $msg_out="Withdrawal Request Create Successfully";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $last_data);
			}else{
				$msg_out="Error In Withdrawal Request";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
    }

    function get_user_withdrawal_request_list()
	{   
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			$fb_id=$event_json['fb_id'];
			//$fb_id=$event_json['fb_id'];
	         $qrry_get=" SELECT * FROM `user_withdrawal_request`  where uwr_fb_id=$fb_id ";
			 $res=mysqli_query($conn,$qrry_get);
 		   	  $daily_task_data_list=mysqli_fetch_all($res, MYSQLI_ASSOC); 
		  	$custom_array=array();
		  	foreach ($daily_task_data_list as $value) {
		  			# code...
		  		array_push($custom_array,$value);
		  		}	
		  	if($custom_array){
			    $msg_out="Get withdrawal Request List";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $custom_array);
			}else{
				$msg_out="No Any Data Found In withdrawal Request";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));

    }
    //withdrawal_request close

    //21_12_2020

	//27_2_2021
   	function user_baggage_transfer()
	{   
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{ 
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			if(!isset($event_json['gift_id']) || $event_json['gift_id']=="") 
			{
				$msg_out="Validation Error gift_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			if(!isset($event_json['gift_qty']) || $event_json['gift_qty']=="") 
			{
				$msg_out="Validation Error gift_qty Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			if(!isset($event_json['send_to_fb_id']) || $event_json['send_to_fb_id']=="") 
			{
				$msg_out="Validation Error send_to_fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			if(!isset($event_json['ub_type_id']) || $event_json['ub_type_id']=="") 
			{
				$msg_out="Validation Error ub_type_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			
			if(!isset($event_json['ub_type']) || $event_json['ub_type']=="") 
			{
				$msg_out="Validation Error ub_type  Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			
			$gift=get_gift($event_json['gift_id'] );
		  	if($gift){
		  		//$value['ubh_gift_icon']=$gift['gift_icon'];	
		  		//$value['ubh_gift_animation_icon']=$gift['gift_animation_icon'];	
		  	}
			else{
				$msg_out="Gift Missing In Our record";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}

			$ubh_sender_fb_id=$event_json['fb_id'];
			$ubh_fb_id=$event_json['send_to_fb_id'];
			$gift_qty=$event_json['gift_qty'];
			$ubh_type_id=$event_json['ub_type_id'];
	        $ubh_type=$event_json['ub_type'];
	      	
	      	
	      	
			$giftid=$ubh_gift_id=$gift['gift_id'];
		    $ubh_gift_title=$gift['gift_title'];
			$ubh_gift_coin_type=$gift['gift_coin_type'];
			
			if($ubh_gift_coin_type=="Silver"){
			

				$sender_remain_total_slivercoin_data=get_user_silvercoin_byfb_id($ubh_sender_fb_id);
			$ubh_gift_coin =$gift['gift_diamond'];
	        if($sender_remain_total_slivercoin_data < $ubh_gift_coin) 
			{
				$msg_out="You have not  sufficient  Sliver Coin In Your wallet";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}		
       
			$ubh_gift_total_coin =$gift_qty*$ubh_gift_coin;
			}


		
	        //check baggar gift 
			if($ubh_gift_coin_type=="Diamond"){
				
  $qrry_get_ub_gift=" SELECT *,(SELECT sum(ub_gift_remain_qty) as total_gift  FROM `user_baggage` where ub_fb_id=$ubh_sender_fb_id and ub_gift_id =$giftid) as total_gift FROM `user_baggage` where ub_fb_id=$ubh_sender_fb_id and ub_gift_id =$giftid  and ub_gift_remain_qty!=0 ";
						 $user_baggage_res=mysqli_query($conn,$qrry_get_ub_gift);
 		   	  		     $user_baggage_data=mysqli_fetch_assoc($user_baggage_res); 
		  	    	if($user_baggage_data){
				  	    	if($user_baggage_data['total_gift']!=0){
				  	   
				  	    		
				  	    		if($user_baggage_data['total_gift'] < $gift_qty) 
									{
										$msg_out="You have not sufficient gift quntity  in baggage  ";
									    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
										print_r(json_encode($output, true)); 
										exit();
									}else{
								//ub_last_up_date				
									$ub_id=$user_baggage_data['ub_id'];
									$UPDATE_user_bag="update user_baggage set ub_gift_remain_qty=ub_gift_remain_qty-".$gift_qty." WHERE ub_fb_id='".$ubh_sender_fb_id."' and  ub_id=$ub_id";
									$res=mysqli_query($conn,$UPDATE_user_bag);
  
									//echo " ok here";
									//die;
									}		
						       
				  	    	}else{ 
				  	    		echo 'come hrer'; 
				  	    		die;
				  	    	}	

		  	    	}else{
		  	    	//e
	  	    	$msg_out="This gift not in your baggage";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();			
		  	    	}
		  	    		
				$ubh_gift_coin =$gift['gift_diamond'];
	        	$ubh_gift_total_coin =0;
		  	    	
			}
	


	         $DATE_TIME=custom_current_date_time();
	         $qrry_get='INSERT INTO `user_baggage_history1`( `ubh_fb_id`, `ubh_gift_id`, `ubh_gift_title`, `ubh_gift_diamond`, `ubh_gift_qty`, `ubh_gift_total_diamond`, `ubh_sender_fb_id`, `ubh_cr_date`,`ubh_type_id`,`ubh_type`) VALUES ("'.$ubh_fb_id.'","'.$ubh_gift_id.'","'.$ubh_gift_title.'","'.$ubh_gift_coin.'","'.$gift_qty.'","'.$ubh_gift_total_coin.'","'.$ubh_sender_fb_id.'","'.$DATE_TIME.'","'.$ubh_type_id.'","'.$ubh_type.'")';
			 
			 $res=mysqli_query($conn,$qrry_get)or die(mysqli_error($conn));
 		 	$last_insertid = mysqli_insert_id($conn);
			if($last_insertid){
			
 		  	    $msg_out="Send Gift To User Baggage Successfully";	
			
			if($ubh_gift_coin_type=="Silver"){
				$d=UPDATE_remove_silvercoin_user($ubh_sender_fb_id , $ubh_gift_total_coin);
			}   
			    $sender_remain_total_slivercoin_data=get_user_silvercoin_byfb_id($ubh_sender_fb_id);
		
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $res , "sender_remain_slivercoin" =>$sender_remain_total_slivercoin_data );
			}else{

				$msg_out="Error In Send Gift To Baggage";
			    $output=array( "code" => "500", "msg" => $msg_out );
			}
			print_r(json_encode($output, true));
    }
    //27_2_2021
   
   	//18_12_2020
   	function add_user_baggage()
	{   
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{ 
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			if(!isset($event_json['gift_id']) || $event_json['gift_id']=="") 
			{
				$msg_out="Validation Error gift_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			if(!isset($event_json['gift_qty']) || $event_json['gift_qty']=="") 
			{
				$msg_out="Validation Error gift_qty Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			if(!isset($event_json['send_to_fb_id']) || $event_json['send_to_fb_id']=="") 
			{
				$msg_out="Validation Error send_to_fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			if(!isset($event_json['gift_qty']) || $event_json['gift_qty']=="") 
			{
				$msg_out="Validation Error gift_qty Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			
			$gift=get_gift($event_json['gift_id'] , 'Diamond');
		  	if($gift){
		  		//$value['ubh_gift_icon']=$gift['gift_icon'];	
		  		//$value['ubh_gift_animation_icon']=$gift['gift_animation_icon'];	
		  	}
			else{
				$msg_out="Gift Missing In Our record";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}

			$ubh_sender_fb_id=$event_json['fb_id'];
			$ubh_fb_id=$event_json['send_to_fb_id'];
			
			$gift_qty=$event_json['gift_qty'];
		

			$ubh_type_id=$event_json['ubh_type_id'];
	        $ubh_type=$event_json['ubh_type'];
	      	
	      	
	      	 $level_up=get_user_live_level($ubh_fb_id);

	      	 $level_up_response=array( 
	      	 							'is_live_level_up' => "0" ,
	      	 							'user_live_level' => $level_up	
	      	 						);			//$gift_qty=$event_json['gift_qty'];
		
			$ubh_gift_id=$gift['gift_id'];
		    $ubh_gift_title=$gift['gift_title'];
			$ubh_gift_diamond =$gift['gift_diamond'];
	        $ubh_gift_total_diamond =$gift_qty*$ubh_gift_diamond;

	        //check 

	        $total_diamondd_data=get_user_diamond_byfb_id($ubh_sender_fb_id);
		    if($total_diamondd_data < $ubh_gift_total_diamond) 
			{
				$msg_out="You have not sufficient diamonad to Send Gift ";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}		
       	
//1000042

	         $DATE_TIME=custom_current_date_time();
	         $qrry_get='INSERT INTO `user_baggage_history`( `ubh_fb_id`, `ubh_gift_id`, `ubh_gift_title`, `ubh_gift_diamond`, `ubh_gift_qty`, `ubh_gift_total_diamond`, `ubh_sender_fb_id`, `ubh_cr_date`,`ubh_type_id`,`ubh_type`) VALUES ("'.$ubh_fb_id.'","'.$ubh_gift_id.'","'.$ubh_gift_title.'","'.$ubh_gift_diamond.'","'.$gift_qty.'","'.$ubh_gift_total_diamond.'","'.$ubh_sender_fb_id.'","'.$DATE_TIME.'","'.$ubh_type_id.'","'.$ubh_type.'")';
			 
			 $res=mysqli_query($conn,$qrry_get)or die(mysqli_error($conn));
 		 	$last_insertid = mysqli_insert_id($conn);
			if($last_insertid){
			
 		  	    $msg_out="Send Gift To Baggage Successfully";	
		
				$d=UPDATE_daimond_sender($ubh_sender_fb_id , $ubh_gift_total_diamond);
				$ubh_fb_id_bean=$ubh_gift_total_diamond*0.10;
				$UPDATE_beans_user="update users set total_beans=total_beans+".$ubh_fb_id_bean." WHERE fb_id=".$ubh_fb_id;
				mysqli_query($conn,$UPDATE_beans_user);

			    $sender_remain_total_diamondd_data=get_user_diamond_byfb_id($ubh_sender_fb_id);
		
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $res , "level_up_response" => $level_up_response , 'sender_remain_diamond' => $sender_remain_total_diamondd_data );
			}else{
			     $sender_remain_total_diamondd_data=get_user_diamond_byfb_id($ubh_sender_fb_id);

				$msg_out="Error In Send Gift To Baggage";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "" , 'sender_remain_diamond' => $sender_remain_total_diamondd_data);
			}
			print_r(json_encode($output, true));
    }
    //18_12_2020
    //17_12_2020

    //($value['ubh_gift_id'])
    function get_user_baggage()
	{   
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			$fb_id=$event_json['fb_id'];
			//$fb_id=$event_json['fb_id'];
	        /*
	         $qrry_get=" SELECT * FROM 	`user_baggage`  where ub_fb_id=$fb_id ";
			 $res=mysqli_query($conn,$qrry_get);
 		   	  $daily_task_data_list=mysqli_fetch_all($res, MYSQLI_ASSOC); 
		  	$custom_array=array();
		  	
		  		foreach ($daily_task_data_list as $value) {
		  			# code...
		  		$value['ub_sender_fullname']=get_userdata_FULLNAME($value['ub_sender_fb_id']);	
		  		$gift=get_gift($value['ub_gift_id']);
		  		if($gift){
		  		$value['ub_gift_icon']=$gift['gift_icon'];	
		  		$value['ub_gift_animation_icon']=$gift['gift_animation_icon'];	
		  		}else{
		  				$value['ub_gift_icon']="";	
		  	         	$value['ub_gift_animation_icon']="";	
		  		}
		  		array_push($custom_array,$value);
		  		}
		  		*/

		  	    $query = mysqli_query($conn," select * from gift WHERE gift_coin_type='Silver' and gift_status='Active' ");
	   			 $silver_coin_gift =array();
	    
			    if(mysqli_num_rows($query) > 0)
			    {
			       while($data = mysqli_fetch_assoc($query))
			       {
			         $silver_coin_gift[] =  $data;
			       }
				}
				$query = mysqli_query($conn," select * from gift WHERE gift_coin_type='Diamond' and gift_status='Active' ");
	   			 $diamond_coin_gift =array();
	    
			    if(mysqli_num_rows($query) > 0)
			    {
			       while($data = mysqli_fetch_assoc($query))
			       {
				       	$giftid=$data['gift_id'];
			    	 $qrry_get_ub_gift=" SELECT *,(SELECT sum(ub_gift_remain_qty) as total_gift  FROM `user_baggage` where ub_fb_id=$fb_id and ub_gift_id =$giftid) as total_gift FROM `user_baggage` where ub_fb_id=$fb_id and ub_gift_id =$giftid  and ub_gift_remain_qty!=0";
						 $user_baggage_res=mysqli_query($conn,$qrry_get_ub_gift);
 		   	  		     $user_baggage_data=mysqli_fetch_assoc($user_baggage_res); 
		  	    	if($user_baggage_data){
		  	    	if($user_baggage_data['total_gift']!=0){
		  	    

		  	    	$giftdata['gift_id']=$data['gift_id'];
		  	    	$giftdata['gift_title']=$data['gift_title'];
		  	    	$giftdata['gift_icon']=$data['gift_icon'];
		  	    	$giftdata['gift_animation_icon']=$data['gift_animation_icon'];

			  	    $giftdata['gift_des']=$data['gift_des'];
		  	    	$giftdata['gift_status']=$data['gift_status'];
		  	    	$giftdata['gift_coin_type']=$data['gift_coin_type'];
		  	    	
		  	    	$giftdata['gift_diamond']=$data['gift_diamond'];
		  	    	$giftdata['total_gift']=$user_baggage_data['total_gift'];
		  	    	$giftdata['ub_id']=$user_baggage_data['ub_id'];
				  	    
		  	    	$diamond_coin_gift[] =  $giftdata;
		  	    	//$diamond_coin_gift[] =  $data;
		  	    	}
						}
			       }
				}		
		  	if($silver_coin_gift){
			    $msg_out="Get User Baggage";	
				$output=array( "code" => "200", "msg" => $msg_out ,"silver_coin_gift" => $silver_coin_gift, "data" => $diamond_coin_gift);
			}else{
				$msg_out="No Any Data Found In Baggage";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
	}


    function get_user_baggage_history()
	{   
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			$fb_id=$event_json['fb_id'];
			//$fb_id=$event_json['fb_id'];
	         $qrry_get=" SELECT * FROM `user_baggage_history`  where ubh_fb_id=$fb_id ";
			 $res=mysqli_query($conn,$qrry_get);
 		   	  $daily_task_data_list=mysqli_fetch_all($res, MYSQLI_ASSOC); 
		  	$custom_array=array();
		  	foreach ($daily_task_data_list as $value) {
		  			# code...
		  		$value['ubh_sender_fullname']=get_userdata_FULLNAME($value['ubh_sender_fb_id']);	
		  		$gift=get_gift($value['ubh_gift_id']);
		  		if($gift){
		  		$value['ubh_gift_icon']=$gift['gift_icon'];	
		  		$value['ubh_gift_animation_icon']=$gift['gift_animation_icon'];	
		  		}else{
		  				$value['ubh_gift_icon']="";	
		  	         	$value['ubh_gift_animation_icon']="";	
		  		}
		  		array_push($custom_array,$value);
		  		}	
		  	if($custom_array){
			    $msg_out="Get Baggage History";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $custom_array);
			}else{
				$msg_out="No Any Data Found In Baggage";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
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
	    $uuu            = 'http://fworldgroup.com///';
	    /*
	    $query          = mysqli_query($conn,"select gifts.*,concat('$uuu',icon) as iconn from gifts ");
	    */
	    $query          = mysqli_query($conn," select * from gift WHERE gift_coin_type='Diamond' and gift_status='Active' ");
	    $gift          =  array();
	    
	    if(mysqli_num_rows($query) > 0)
	    {
	       while($data = mysqli_fetch_assoc($query))
	       {
	         $gift[] =  $data;
	       }
	      $output = array( 'status'=>200,'code'=>true, 'data'=> $gift);
	    }else
	    { 
          $output = array( 'status'=>500,'code'=>false, 'data'=> 0)  ; 
	    }
		
		 print_r(json_encode($output, true));   
    }

	function  user_update_live_room_status()
	{
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['ulrd_status']) || $event_json['ulrd_status']=="") 
			{
				$msg_out="Validation Error ulrd_status Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			if(!isset($event_json['room_id']) || $event_json['room_id']=="") 
			{
				$msg_out="Validation Error room_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			if(!isset($event_json['stream_id']) || $event_json['stream_id']=="") 
			{
				$msg_out="Validation Error stream_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			
			$ulrd_room_id=$event_json['room_id'];
			$ulrd_stream_id=$event_json['stream_id'];
			$fb_id=$event_json['fb_id'];
			$ulrd_status=$event_json['ulrd_status'];
			$DATE_TIME=custom_current_date_time();
		
			$update_sql='Update `user_live_room_details` set ulrd_status="'.$ulrd_status.'" ,
				ulrd_leave_at="'.$DATE_TIME.'" 
     	        where ulrd_room_id="'.$ulrd_room_id.'" and ulrd_fb_id="'.$fb_id.'" and
	          ulrd_stream_id="'.$ulrd_stream_id.'"';

	           $res=mysqli_query($conn,$update_sql)or die(mysqli_error($conn));
 		   //	$lastid=mysqli_insert_id($conn);
			if($res)
			{
			   $lasq='select * from user_live_room_details WHERE ulrd_room_id="'.$ulrd_room_id.'" and  ulrd_fb_id="'.$fb_id.'" and  ulrd_stream_id="'.$ulrd_stream_id.'"';
			   $order_data =mysqli_fetch_assoc(mysqli_query($conn,$lasq));
			    $msg_out="Record Update Successfully";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $order_data);
			}else{
				$msg_out="Error in Update Data";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
    }

/*31_1_2021 
* Ksbm Infotech Pvt. Ltd.
*Rekha 
*/
	function  hoster_user_make_admin_user_his_joined_live_room()
	{
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
		   	
		
	
			if(!isset($event_json['ulrd_id']) || $event_json['ulrd_id']=="") 
			{
				$msg_out="Validation Error ulrd_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
		 
			$fb_id=$event_json['fb_id'];
			$ulrd_id=$event_json['ulrd_id'];
			$DATE_TIME=custom_current_date_time();
            
            $sql="SELECT count(*) as admin_user FROM `user_join_live_room_details` where ujlrd_ulrd_id=$ulrd_id and ujlrd_user_type='Admin'";
             $admin_user=mysqli_fetch_assoc(mysqli_query($conn,$sql));
       
            if($admin_user['admin_user']> 5){
                    $msg_out="Admin creation maximum  limit is  exceeded.!";
                    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
                    print_r(json_encode($output, true)); 
                    exit();
            }
        
			
	
		 $update_sql='Update `user_join_live_room_details` set ujlrd_user_type="Admin" 
				where ujlrd_status="0" and ujlrd_ulrd_id="'.$ulrd_id.'" and ujlrd_fb_id ="'.$fb_id.'"';
			$res=mysqli_query($conn,$update_sql)or die(mysqli_error($conn));
        
 		   	if($res)
			{
			  // $lasq='select * from user_join_live_room_details WHERE  ujlrd_id="'.$ujlrd_id.'" and  ujlrd_ulrd_id="'.$ulrd_id.'"';
			   $newdata ="";//mysqli_fetch_assoc(mysqli_query($conn,$lasq));
			    $msg_out="Admin created Successfully ";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $newdata);
			}else{
				$msg_out="Error in Update Data";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
        
			print_r(json_encode($output, true));
}

//5_2_2021

	function  hoster_user_make_admin_user_as_normal_user_his_joined_live_room()
	{
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
		   	
		
	
			if(!isset($event_json['ulrd_id']) || $event_json['ulrd_id']=="") 
			{
				$msg_out="Validation Error ulrd_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
		 
			$fb_id=$event_json['fb_id'];
			$ulrd_id=$event_json['ulrd_id'];
			$DATE_TIME=custom_current_date_time();
       /*     
            $sql="SELECT count(*) as admin_user FROM `user_join_live_room_details` where ujlrd_ulrd_id=$ulrd_id and ujlrd_user_type='Admin'";
             $admin_user=mysqli_fetch_assoc(mysqli_query($conn,$sql));
       
            if($admin_user['admin_user']> 5){
                    $msg_out="Admin creation maximum  limit is  exceeded.!";
                    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
                    print_r(json_encode($output, true)); 
                    exit();
            }
        */
		 $update_sql='Update `user_join_live_room_details` set ujlrd_user_type="User" 
				where ujlrd_user_type="Admin" and ujlrd_status="0" and ujlrd_ulrd_id="'.$ulrd_id.'" and ujlrd_fb_id ="'.$fb_id.'"';
			$res=mysqli_query($conn,$update_sql)or die(mysqli_error($conn));
        
 		   	if($res)
			{
			  // $lasq='select * from user_join_live_room_details WHERE  ujlrd_id="'.$ujlrd_id.'" and  ujlrd_ulrd_id="'.$ulrd_id.'"';
			   $newdata ="";//mysqli_fetch_assoc(mysqli_query($conn,$lasq));
			    $msg_out="Admin as Normal User Updated Successfully ";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $newdata);
			}else{
				$msg_out="Error in Update Data";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
        
			print_r(json_encode($output, true));
}


    //30_1_2021
	function  hoster_user_kickout_user_his_joined_live_room()
	{
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
		   	
		   	if(!isset($event_json['kickout_fb_id']) || $event_json['kickout_fb_id']=="") 
			{
				$msg_out="Validation Error kickout_fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
		   	/*
		   	if(!isset($event_json['ujlrd_id']) || $event_json['ujlrd_id']=="") 
			{
				$msg_out="Validation Error ujlrd_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}*/
	
			if(!isset($event_json['ulrd_id']) || $event_json['ulrd_id']=="") 
			{
				$msg_out="Validation Error ulrd_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
		

			$kickout_fb_id=$event_json['kickout_fb_id'];
			$ulrd_id=$event_json['ulrd_id'];
			$DATE_TIME=custom_current_date_time();
		
		//$ujlrd_id=$event_json['ujlrd_id'];
			
		//	$update_sql='Update `user_join_live_room_details` set ujlrd_status="2" ,
		//		ujlrd_leave_at="'.$DATE_TIME.'" 
     	 //       where  ujlrd_id="'.$ujlrd_id.'"';
		
		$update_sql='Update `user_join_live_room_details` set ujlrd_status="2" ,
				ujlrd_leave_at="'.$DATE_TIME.'" 
     	        where ujlrd_status="0" and ujlrd_ulrd_id="'.$ulrd_id.'" and ujlrd_fb_id ="'.$kickout_fb_id.'"';
			$res=mysqli_query($conn,$update_sql)or die(mysqli_error($conn));
 		   	if($res)
			{
			  // $lasq='select * from user_join_live_room_details WHERE  ujlrd_id="'.$ujlrd_id.'" and  ujlrd_ulrd_id="'.$ulrd_id.'"';
			   $order_data ="";//mysqli_fetch_assoc(mysqli_query($conn,$lasq));
			    $msg_out="Record Update (kickout user) Successfully ";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $order_data);
			}else{
				$msg_out="Error in Update Data";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
}
//5_2_2021
   function  hoster_user_kickout_user_update_his_joined_live_room()
	{
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
		   	
		   	if(!isset($event_json['kickout_fb_id']) || $event_json['kickout_fb_id']=="") 
			{
				$msg_out="Validation Error kickout_fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
		   	/*
		   	if(!isset($event_json['ujlrd_id']) || $event_json['ujlrd_id']=="") 
			{
				$msg_out="Validation Error ujlrd_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}*/
	
			if(!isset($event_json['ulrd_id']) || $event_json['ulrd_id']=="") 
			{
				$msg_out="Validation Error ulrd_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
		

			$kickout_fb_id=$event_json['kickout_fb_id'];
			$ulrd_id=$event_json['ulrd_id'];
			$DATE_TIME=custom_current_date_time();
		
		//$ujlrd_id=$event_json['ujlrd_id'];
			
		//	$update_sql='Update `user_join_live_room_details` set ujlrd_status="2" ,
		//		ujlrd_leave_at="'.$DATE_TIME.'" 
     	 //       where  ujlrd_id="'.$ujlrd_id.'"';
		
		$update_sql='Update `user_join_live_room_details` set ujlrd_status="4" ,
				ujlrd_leave_at="'.$DATE_TIME.'" 
     	        where ujlrd_status="2" and ujlrd_ulrd_id="'.$ulrd_id.'" and ujlrd_fb_id ="'.$kickout_fb_id.'"';
			$res=mysqli_query($conn,$update_sql)or die(mysqli_error($conn));
 		   	if($res)
			{
	//$lasq='select * from user_join_live_room_details WHERE  ujlrd_id="'.$ujlrd_id.'" and  ujlrd_ulrd_id="'.$ulrd_id.'"'; 450
			   $order_data ="";//mysqli_fetch_assoc(mysqli_query($conn,$lasq));
			    $msg_out="Record Update (kickout user not can enter) Successfully ";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $order_data);
			}else{
				$msg_out="Error in Update Data";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
}

    //4_1_2021
	function  user_leave_joined_live_room()
	{
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			if(!isset($event_json['ulrd_id']) || $event_json['ulrd_id']=="") 
			{
				$msg_out="Validation Error ulrd_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
		

			$fb_id=$event_json['fb_id'];
			$ulrd_id=$event_json['ulrd_id'];
			$DATE_TIME=custom_current_date_time();
		
			$update_sql='Update `user_join_live_room_details` set ujlrd_status="1" ,
				ujlrd_leave_at="'.$DATE_TIME.'" 
     	        where  ujlrd_fb_id="'.$fb_id.'" and  ujlrd_ulrd_id="'.$ulrd_id.'"';

	           $res=mysqli_query($conn,$update_sql)or die(mysqli_error($conn));
 		   //	$lastid=mysqli_insert_id($conn);
			if($res)
			{
			   $lasq='select * from user_join_live_room_details WHERE  ujlrd_fb_id="'.$fb_id.'" and  ujlrd_ulrd_id="'.$ulrd_id.'"';
			   $order_data =mysqli_fetch_assoc(mysqli_query($conn,$lasq));
			    $msg_out="Record Update Successfully";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $order_data);
			}else{
				$msg_out="Error in Update Data";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
}


function  get_user_joined_live_room_current_position()
	{
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
		

			$fb_id=$event_json['fb_id'];
			$DATE_TIME=custom_current_date_time();
		
			$sel_sql='SELECT * FROM `user_join_live_room_details` ujlrd_fb_id="'.$fb_id.'" and
	          ujlrd_status="0"  ORDER BY ujlrd_id ASC';

	        $res=mysqli_query($conn,$sel_sql)or die(mysqli_error($conn));
		     $data =mysqli_fetch_assoc(mysqli_query($conn,$lasq));
			if($data)
			{
			    $msg_out="Record Found Successfully";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $data);
			}else{
				$msg_out="No Record Data";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
}
//4_1_2021

//18_1_2021
function user_create_live_room_pk(){
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
	    	if(!isset($event_json['ulrpkd_rquested_fb_id']) || $event_json['ulrpkd_rquested_fb_id']=="") 
			{
				$msg_out="Validation Error ulrpkd_rquested_fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}

			if(!isset($event_json['ulrpkd_rquested_ulrd_room_id']) || $event_json['ulrpkd_rquested_ulrd_room_id']=="") 
			{
				$msg_out="Validation Error ulrpkd_rquested_ulrd_room_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			if(!isset($event_json['ulrpkd_rquested_ulrd_stream_id']) || $event_json['ulrpkd_rquested_ulrd_stream_id']=="") 
			{
				$msg_out="Validation Error ulrpkd_rquested_ulrd_stream_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}


			if(!isset($event_json['ulrpkd_accepted_ulrd_room_id']) || $event_json['ulrpkd_accepted_ulrd_room_id']=="") 
			{
				$msg_out="Validation Error ulrpkd_accepted_ulrd_room_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			if(!isset($event_json['ulrpkd_accepted_ulrd_stream_id']) || $event_json['ulrpkd_accepted_ulrd_stream_id']=="") 
			{
				$msg_out="Validation Error ulrpkd_accepted_ulrd_stream_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
	
	    	if(!isset($event_json['ulrpkd_rquested_ulrd_id']) || $event_json['ulrpkd_rquested_ulrd_id']=="") 
			{
				$msg_out="Validation Error ulrpkd_rquested_ulrd_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			if(!isset($event_json['ulrpkd_accepted_ulrd_id']) || $event_json['ulrpkd_accepted_ulrd_id']=="") 
			{
				$msg_out="Validation Error ulrpkd_accepted_ulrd_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
	
	$ulrpkd_rquested_ulrd_id=$event_json['ulrpkd_rquested_ulrd_id'];
	$ulrpkd_accepted_ulrd_id=$event_json['ulrpkd_accepted_ulrd_id'];
	//$ulrpkd_user_type=$event_json['ulrpkd_user_type'];
			
			
			$ulrpkd_rquested_ulrd_room_id=$event_json['ulrpkd_rquested_ulrd_room_id'];
			$ulrpkd_rquested_ulrd_stream_id=$event_json['ulrpkd_rquested_ulrd_stream_id'];
			$ulrpkd_accepted_ulrd_room_id=$event_json['ulrpkd_accepted_ulrd_room_id'];
			$ulrpkd_accepted_ulrd_stream_id=$event_json['ulrpkd_accepted_ulrd_stream_id'];
			$fb_id=$event_json['fb_id'];
			$ulrpkd_rquested_fb_id=$event_json['ulrpkd_rquested_fb_id'];
			
			$DATE_TIME=custom_current_date_time();
	    
			$insert_sql='INSERT INTO `user_live_room_pk_details`( `ulrpkd_rquested_ulrd_id`, `ulrpkd_accepted_ulrd_id`, `ulrpkd_rquested_ulrd_room_id`, `ulrpkd_rquested_ulrd_stream_id`, `ulrpkd_accepted_ulrd_room_id`, `ulrpkd_accepted_ulrd_stream_id`, `ulrpk_accepted_fb_id`,`ulrpkd_rquested_fb_id`, `ulrpkd_cr_date`) VALUES ("'.$ulrpkd_rquested_ulrd_id.'","'.$ulrpkd_accepted_ulrd_id.'","'.$ulrpkd_rquested_ulrd_room_id.'","'.$ulrpkd_rquested_ulrd_stream_id.'","'.$ulrpkd_accepted_ulrd_room_id.'","'.$ulrpkd_accepted_ulrd_stream_id.'","'.$fb_id.'","'.$ulrpkd_rquested_fb_id.'","'.$DATE_TIME.'")';

     		$res=mysqli_query($conn,$insert_sql)or die(mysqli_error($conn));;
 		   	$lastid=mysqli_insert_id($conn);
			if($lastid)
			{
			   
			   $order_data =mysqli_fetch_assoc(mysqli_query($conn,"select * from user_live_room_pk_details WHERE ulrpkd_id = '$lastid' "));
			    $msg_out="Record Create Successfully";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $order_data);
			}else{
				$msg_out="Error in Create Data";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
}
//user_live_room_pk_details status update 19_1_2021 
function update_status_user_create_live_room_pk(){
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			if(!isset($event_json['ulrpk_id']) || $event_json['ulrpk_id']=="") 
			{
				$msg_out="Validation Error ulrpk_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			
			$fb_id=$event_json['fb_id'];
			$ulrpk_id=$event_json['ulrpk_id'];
			$DATE_TIME=custom_current_date_time();
	   		
	   		$UPDATE_sql='update user_live_room_pk_details  set ulrpkd_status=1 , ulrpkd_leave_at="'.$DATE_TIME.'", ulrpkd_leave_by_fb_id="'.$fb_id.'" WHERE ulrpkd_id="'.$ulrpk_id.'"';
	         	
			$res=mysqli_query($conn,$UPDATE_sql)or die(mysqli_error($conn));
 		   	if($ulrpk_id)
			{
				$order_data =mysqli_fetch_assoc(mysqli_query($conn,"select * from user_live_room_pk_details WHERE ulrpkd_id = '$ulrpk_id' "));
			    $msg_out="Record Update Successfully";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $order_data);
			}else{
				$msg_out="Error in Updte Data";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
}



//16_12_2020
function user_create_live_room_detail(){
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			if(!isset($event_json['room_id']) || $event_json['room_id']=="") 
			{
				$msg_out="Validation Error room_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			if(!isset($event_json['stream_id']) || $event_json['stream_id']=="") 
			{
				$msg_out="Validation Error stream_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}

			if(!isset($event_json['stream_title']) || $event_json['stream_title']=="") 
			{
				$msg_out="Validation Error stream_title Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}


			if(!isset($event_json['stream_label']) || $event_json['stream_label']=="") 
			{
				$msg_out="Validation Error stream_label Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}



			$ulrd_icon="";
            if(isset($event_json['icon_title']) ) 
			{
			   if($event_json['icon_title']=="") 
			  {
		     	$msg_out="Validation Error icon_title Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			  }

			  if(!isset($event_json['icon_baseimage']) || $event_json['icon_baseimage']=="") 
			  {
		     	$msg_out="Validation Error icon_baseimage Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			  }

			  	//	
			     $thum1=explode(',', $event_json['icon_baseimage']);
				 $thum=$thum1[1];
				 $fileName    = time()."_".rand().$event_json['icon_title'];
	     		 $ulrd_icon   = "/custom_uploads/users_live_room_icon/".$fileName;
				 $attach_url_server   = $_SERVER["DOCUMENT_ROOT"]."/custom_uploads/users_live_room_icon/".$fileName;
				 $thum = base64_decode($thum);
			     $d=file_put_contents($attach_url_server, $thum);
				//	
			} 
		
			$ulrd_room_id=$event_json['room_id'];
			$ulrd_stream_id=$event_json['stream_id'];
			$ulrd_stream_title=$event_json['stream_title'];
			$ulrd_stream_label=$event_json['stream_label'];
			$fb_id=$event_json['fb_id'];
   			$DATE_TIME=custom_current_date_time();
	    	$ulrd_location=$event_json['current_location']?$event_json['current_location']:'';
				
			$insert_sql='INSERT INTO `user_live_room_details`( `ulrd_room_id`, `ulrd_fb_id`, `ulrd_stream_id`,`ulrd_stream_title`,`ulrd_icon`,`ulrd_stream_label`,`ulrd_cr_date`,`ulrd_location`) VALUES ("'.$ulrd_room_id.'","'.$fb_id.'","'.$ulrd_stream_id.'","'.$ulrd_stream_title.'","'.$ulrd_icon.'","'.$ulrd_stream_label.'","'.$DATE_TIME.'","'.$ulrd_location.'")';

		$res=mysqli_query($conn,$insert_sql)or die(mysqli_error($conn));;
 		   	$lastid=mysqli_insert_id($conn);
			if($lastid)
			{
			   $order_data =mysqli_fetch_assoc(mysqli_query($conn,"select * from user_live_room_details WHERE ulrd_id = '$lastid' "));
			    $msg_out="Record Create Successfully";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $order_data);
			}else{
				$msg_out="Error in Create Data";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
}

//2_1_2021

	function  hoster_user_change_status_of_live_room()
	{
	
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['ulrd_status']) || $event_json['ulrd_status']=="") 
			{
				$msg_out=" Validation Error ulrd_status Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out=" Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			if(!isset($event_json['ulrd_id']) || $event_json['ulrd_id']=="") 
			{
				$msg_out="Validation Error ulrd_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			
			$ulrd_id=$event_json['ulrd_id'];
			$fb_id=$event_json['fb_id'];
			$ulrd_status=$event_json['ulrd_status'];
			$DATE_TIME=custom_current_date_time();
		    
			$update_sql='Update `user_live_room_details` set ulrd_status="'.$ulrd_status.'"  where ulrd_id="'.$ulrd_id.'" and ulrd_fb_id="'.$fb_id.'"';

	           $res=mysqli_query($conn,$update_sql)or die(mysqli_error($conn));
 		   //	$lastid=mysqli_insert_id($conn);
			if($res)
			{
			   $lasq='select * from user_live_room_details WHERE ulrd_fb_id="'.$fb_id.'" and  ulrd_id="'.$ulrd_id.'"';
			   $data =mysqli_fetch_assoc(mysqli_query($conn,$lasq)) or die(mysqli_error($conn));
			   $sender_counter="";
			 	if($data['ulrd_status']==0){
			 		$sender_counter=send_notification_following_user($fb_id);
			 	}
			 	$data['ulrd_rank_position']=get_ulrd_rank_position($data['ulrd_id']);
		
		  	 	$data['is_active_event']="0";	
				$data['active_event']=$active_event=get_running_event_admin_details();	
				if($active_event['event_admin_id']){
		  		//if($active_event['event_admin_id']){
		  		$data['is_active_event']="1";	
			 	}
			 	
			 	$data['is_user_can_pk']="1";//get_is_user_can_pk($fb_id);		
			    $data['is_user_can_call']="1";//get_is_user_can_call($fb_id);		
			    
			    $msg_out="Record Update Successfully";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $data, "sender_counter" =>$sender_counter);
			}else{
				$msg_out="Error in Update Data";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
    }
//2_1_2021
function hoster_user_live_room_list(){
    require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			$fb_id=$event_json['fb_id'];
			 $qrry_get=" SELECT ULRD.* ,U.fb_id,U.mobile,U.first_name,U.last_name,U.username,U.profile_pic,U.vip_status FROM `user_live_room_details` AS ULRD JOIN   users  AS U on U.fb_id=ULRD.ulrd_fb_id  WHERE  ULRD.ulrd_fb_id='$fb_id' ";//ULRD.ulrd_status=0 ";
			//$qrry_get="SELECT  ULRD.*,(SELECT COUNT(`ubh_gift_total_diamond`) AS GOT_diamond FROM `user_baggage_history` WHERE ubh_type_id =  ULRD.ulrd_id AND ubh_type='LIVEROOM') as count_diamond ,U.fb_id,U.mobile,U.first_name,U.last_name,U.username,U.profile_pic,U.vip_status FROM `user_live_room_details` AS ULRD JOIN   users  AS U on U.fb_id=ULRD.ulrd_fb_id  
			//WHERE ULRD.ulrd_status=0  ORDER BY count_diamond  DESC";
			 $res=mysqli_query($conn,$qrry_get);
 		   	  $daily_task_data_list=mysqli_fetch_all($res, MYSQLI_ASSOC); 
		  	$custom_array=array();
		  	foreach ($daily_task_data_list as $value) {
		  			# code...
		  		if($value['ulrd_icon']==""){
		  		$value['ulrd_icon']=get_user_profile_pic_byfb_id($value['ulrd_fb_id']);	
		  	    }else{
		  	    $value['ulrd_icon']=BASE_PATH.$value['ulrd_icon'];	
		  	    }
				$value['live_user_count']=get_user_join_live_room_details_by_ulrd_id($value['ulrd_id'] , 'count');	

				$value['follow_Status']=get_follow_users_status($value['ulrd_fb_id'], $fb_id);
		  	 	$value['vip_details']=get_user_vip_status($value['ulrd_fb_id']);
		  		$value['user_level']=get_user_level($value['ulrd_fb_id']);
				$ulrpkd_id_Data=get_is_pk_run_in_room($value['ulrd_id']);
				
				$value['pk_details']=$ulrpkd_id_Data;
				if($ulrpkd_id_Data){
				$value['ulrd_is_pk']='1';	
				}
				//$value['is_user_can_joined']=check_is_user_can_joined_liveroom($fb_id); // REMAIN TASK  	
				array_push($custom_array,$value);
		  		}	
		  	if($custom_array){
			    $msg_out="Hoster user live room details List";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $custom_array);
			}else{
				$msg_out="No any Data Found In user live room details";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
}		

function user_get_live_room_list(){
    require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			$fb_id=$event_json['fb_id'];
			// $qrry_get=" SELECT ULRD.* ,U.fb_id,U.mobile,U.first_name,U.last_name,U.username,U.profile_pic,U.vip_status FROM `user_live_room_details` AS ULRD JOIN   users  AS U on U.fb_id=ULRD.ulrd_fb_id  WHERE ULRD.ulrd_status=0 ";
			$qrry_get="SELECT  ULRD.*,(SELECT COUNT(`ubh_gift_total_diamond`) AS GOT_diamond FROM `user_baggage_history` WHERE ubh_type_id =  ULRD.ulrd_id AND ubh_type='LIVEROOM') as count_diamond ,U.fb_id,U.mobile,U.first_name,U.last_name,U.username,U.profile_pic,U.vip_status FROM `user_live_room_details` AS ULRD JOIN   users  AS U on U.fb_id=ULRD.ulrd_fb_id  
			WHERE ULRD.ulrd_status=0  ORDER BY count_diamond  DESC";
			 $res=mysqli_query($conn,$qrry_get);
 		   	  $daily_task_data_list=mysqli_fetch_all($res, MYSQLI_ASSOC); 
		  	$custom_array=array();
		  	$ulrd_position=1;
		  	foreach ($daily_task_data_list as $value) {
		  			# code...
		  		$value['ulrd_rank_position']="{$ulrd_position}";
		  		$ulrd_position++;
		  		if($value['ulrd_icon']==""){
		  		$value['ulrd_icon']=get_user_profile_pic_byfb_id($value['ulrd_fb_id']);	
		  	    }else{
		  	    $value['ulrd_icon']=BASE_PATH.$value['ulrd_icon'];	
		  	    }
				$value['live_user_count']=get_user_join_live_room_details_by_ulrd_id($value['ulrd_id'] , 'count');	

				$value['follow_Status']=get_follow_users_status($value['ulrd_fb_id'], $fb_id);
		  	 	$value['vip_details']=get_user_vip_status($value['ulrd_fb_id']);
		  		$value['user_level']=get_user_level($value['ulrd_fb_id']);
	            $value['user_live_level']=get_user_live_level($value['ulrd_fb_id']);
				
				$ulrpkd_id_Data=get_is_pk_run_in_room($value['ulrd_id']);
				
				$value['pk_details']=$ulrpkd_id_Data;
				if($ulrpkd_id_Data){
				$value['ulrd_is_pk']='1';	
				}
			

				$value['is_user_can_joined']=check_is_user_can_joined_liveroom($fb_id , $value['ulrd_id']); // REMAIN TASK  	
				
		  	 	$value['is_active_event']="0";	
				$value['active_event']=$active_event=get_running_event_admin_details();	
				if($active_event['event_admin_id']){
		  		//if($active_event){
		  		$value['is_active_event']="1";	
			 	}

				array_push($custom_array,$value);
		  		}	
		  	if($custom_array){
			    $msg_out="Get user live room details List";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $custom_array);
			}else{
				$msg_out="No any Data Found In user live room details";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
}		
//16_12_2020

//2_4_2021
function get_followers_of_live_room(){
	//for pk 
    require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			$fb_id=$event_json['fb_id'];

			 $follow_users_sql="SELECT GROUP_CONCAT(DISTINCT(fb_id)) as all_users  FROM `follow_users` WHERE followed_fb_id='$fb_id'";

		  	$follow_users_res=mysqli_fetch_assoc(mysqli_query($conn,$follow_users_sql))['all_users'];
			//return $userdata . $sql;
			$custom_array=array();
		  	if($follow_users_res){
	    
			$fb_ids=$follow_users_res;

			// $qrry_get=" SELECT ULRD.* ,U.fb_id,U.mobile,U.first_name,U.last_name,U.username,U.profile_pic,U.vip_status FROM `user_live_room_details` AS ULRD JOIN   users  AS U on U.fb_id=ULRD.ulrd_fb_id  WHERE ULRD.ulrd_status=0 ";
			$qrry_get="SELECT  ULRD.*,(SELECT COUNT(`ubh_gift_total_diamond`) AS GOT_diamond FROM `user_baggage_history` WHERE ubh_type_id =  ULRD.ulrd_id AND ubh_type='LIVEROOM') as count_diamond ,U.fb_id,U.mobile,U.first_name,U.last_name,U.username,U.profile_pic,U.vip_status FROM `user_live_room_details` AS ULRD JOIN   users  AS U on U.fb_id=ULRD.ulrd_fb_id  
			WHERE ULRD.ulrd_status=0  and ULRD.ulrd_fb_id IN ($fb_ids)  ORDER BY count_diamond  DESC ";
			 $res=mysqli_query($conn,$qrry_get);
 		   	  $daily_task_data_list=mysqli_fetch_all($res, MYSQLI_ASSOC); 
		  	$ulrd_position=1;
		  	foreach ($daily_task_data_list as $value) {
		  			# code...
		  		$value['ulrd_rank_position']="{$ulrd_position}";
		  		$ulrd_position++;
		  		if($value['ulrd_icon']==""){
		  		$value['ulrd_icon']=get_user_profile_pic_byfb_id($value['ulrd_fb_id']);	
		  	    }else{
		  	    $value['ulrd_icon']=BASE_PATH.$value['ulrd_icon'];	
		  	    }
				$value['live_user_count']=get_user_join_live_room_details_by_ulrd_id($value['ulrd_id'] , 'count');	

				$value['follow_Status']=get_follow_users_status($value['ulrd_fb_id'], $fb_id);
		  	 	$value['vip_details']=get_user_vip_status($value['ulrd_fb_id']);
		  		$value['user_level']=get_user_level($value['ulrd_fb_id']);
	            $value['user_live_level']=get_user_live_level($value['ulrd_fb_id']);
				
				$ulrpkd_id_Data=get_is_pk_run_in_room($value['ulrd_id']);
				
				$value['pk_details']=$ulrpkd_id_Data;
				if($ulrpkd_id_Data){
				$value['ulrd_is_pk']='1';	
				}
			

				$value['is_user_can_joined']=check_is_user_can_joined_liveroom($fb_id , $value['ulrd_id']); // REMAIN TASK  	
				
		  	 	$value['is_active_event']="0";	
				$value['active_event']=$active_event=get_running_event_admin_details();	
				if($active_event['event_admin_id']){
		  		//if($active_event){
		  		$value['is_active_event']="1";	
			 	}

				array_push($custom_array,$value);
		  		}	
		  	
		  	}//followueser condition
		  	if($custom_array){
			    $msg_out="Get follwers user live room details List";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $custom_array);
			}else{
				$msg_out="No any Data Found In follwers user live room details";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
}		
//2_4_2021


//15_12_2020
function user_join_live_room_detail(){
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			if(!isset($event_json['ulrd_id']) || $event_json['ulrd_id']=="") 
			{
				$msg_out="Validation Error ulrd_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			$fb_id=$event_json['fb_id'];
			$ulrd_id=$event_json['ulrd_id'];
			$DATE_TIME=custom_current_date_time();
    
    	//CHECK USER LIVE ROOM status is live =0
    	$sql="SELECT *  FROM `user_live_room_details` where ulrd_id=$ulrd_id and ulrd_status in(0)   ORDER BY ulrd_id DESC";
            $liveroom_details=mysqli_fetch_assoc(mysqli_query($conn,$sql));
	       if(empty($liveroom_details)){
             $msg_out="Hoster User not live plz wait";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
             //$lastid=  $join_details['ujlrd_id'];
           }

        $sql="SELECT ujlrd_id  FROM `user_join_live_room_details` where ujlrd_ulrd_id=$ulrd_id and ujlrd_status in(0,3) and ujlrd_fb_id =$fb_id   ORDER BY uJlrd_id DESC";
             $join_details=mysqli_fetch_assoc(mysqli_query($conn,$sql));
	       if(!empty($join_details)){
             $lastid=  $join_details['ujlrd_id'];
           }
    else{
         $insert_sql='INSERT INTO `user_join_live_room_details` ( `ujlrd_ulrd_id`, `ujlrd_fb_id`, `ujlrd_join_at`) VALUES ("'.$ulrd_id.'","'.$fb_id.'","'.$DATE_TIME.'")';  
		 //$insert_sql='INSERT INTO `user_onlive_room_details`(`room_detail_host_fb_id`, `room_detail_user_fb_id`, `room_detail_live_roomid`) VALUES ("'.$room_detail_host_fb_id.'","'.$fb_id.'","'.$room_detail_live_roomid.'")';
      
		$res=mysqli_query($conn,$insert_sql)or die(mysqli_error($conn));;
 		   	$lastid=mysqli_insert_id($conn);
    }
			if($lastid)
			{
			   
			   $sql= "select UJLRD.*,ULRD.*,U.fb_id,U.mobile,U.first_name,U.last_name,U.username,U.profile_pic,U.vip_status from user_join_live_room_details as UJLRD  join user_live_room_details as ULRD on UJLRD.ujlrd_ulrd_id=ULRD.ulrd_id JOIN   users  AS U on U.fb_id=ULRD.ulrd_fb_id   WHERE  UJLRD.ujlrd_id = '$lastid'";
			   $data =mysqli_fetch_assoc(mysqli_query($conn,$sql));
			    if($data){
			    if($data['ulrd_icon']==""){
		  		$data['ulrd_icon']=get_user_profile_pic_byfb_id($data['ulrd_fb_id']);	
		  	    }else{
		  	    $data['ulrd_icon']=BASE_PATH.$data['ulrd_icon'];	
		  	    }
		  	    $ulrpkd_id_Data=get_is_pk_run_in_room($data['ulrd_id']);
				$data['pk_details']="";
				if($ulrpkd_id_Data){
				$data['ulrd_is_pk']='1';	
				$data['pk_details']=$ulrpkd_id_Data;
				} 
				//ADD
				$data['live_user_count']=get_user_join_live_room_details_by_ulrd_id($data['ulrd_id'] , 'count');	

				$data['follow_Status']=get_follow_users_status($data['ulrd_fb_id'], $fb_id);
		  	    $data['vip_details']=get_user_vip_status($data['ulrd_fb_id']);
		  		$data['user_level']=get_user_level($data['ulrd_fb_id']);
				$data['user_live_level']=get_user_live_level($data['ulrd_fb_id']);
				$data['ulrd_rank_position']=get_ulrd_rank_position($data['ulrd_id']);
				$data['is_active_event']="0";	
				$data['active_event']=$active_event=get_running_event_admin_details();	
				if($active_event['event_admin_id']){
		  		$data['is_active_event']="1";	
			 	}

				}

			    $msg_out="Record Create Successfully";	

				$output=array( "code" => "200", "msg" => $msg_out ,   "data" => $data);
			}else{
				$msg_out="Error in Create Data";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));

}
function daily_task(){
    require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			$fb_id=$event_json['fb_id'];
	         $qrry_get=" SELECT * FROM `daily_task` ";
			 $res=mysqli_query($conn,$qrry_get);
 		   	  $daily_task_data_list=mysqli_fetch_all($res, MYSQLI_ASSOC); 
		  	$custom_array=array();
		  	$i=1;
		  	$monday = strtotime("last monday");
			$monday = date('w', $monday)==date('w') ? $monday+7*86400 : $monday;
			$date_wise_check	=date("Y-m-d",$monday);	

		  	foreach ($daily_task_data_list as $value) {
		  		if($i!=1){
		  		$d=$value['daily_task_id'];
		  		$date_wise_check=date("Y-m-d" ,strtotime($date_wise_check." +1 days"));
		  		}
		  		$value['date_here']=$date_wise_check;
		  		$value['is_completed_task']=Check_daily_task_iscompleted_byfb_id($fb_id , $value['daily_task_id'] , $date_wise_check);	
		  		array_push($custom_array,$value);
		  		$i++;
		  		}	
		  	if($custom_array){
			    $msg_out="Get daily task";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $custom_array);
			}else{
				$msg_out="No any Data Found";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
}	
//31_12_2020
function daily_task_today(){
    require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);
		$today_day=date(w);
		$todaydate=custom_current_date('Y-m-d');
	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "$today_day");
				print_r(json_encode($output, true)); 
				exit();
			}
			if(!isset($event_json['vip_status']) || $event_json['vip_status']=="") 
			{
				$msg_out="Validation Error vip_status Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "$today_day");
				print_r(json_encode($output, true)); 
				exit();
			}
			$vip_status=$event_json['vip_status'];
			$fb_id=$event_json['fb_id'];
	         $qrry_get=" SELECT * FROM `daily_task` WHERE daily_task_id=$today_day ";
			 $res=mysqli_query($conn,$qrry_get)or die(mysqli_error($conn));
 		   	 $daily_task_data=mysqli_fetch_assoc($res); 
		  	//$custom_array['todays_task']=$daily_task_data_list;
		  	$custom_array=array();
		  	if($daily_task_data){
		  	 		# code...	
		  	  $task_count=$daily_task_data['daily_task_total_target'];	
		  	  $par_task=$daily_task_data['daily_task_par_target'];
		  	  for($i=1; $i<=$task_count ; $i++) {
		  				# code...
		  	  	$task_status="0";
		  	  	$task_done="";
		  	  	$sql1="SELECT * FROM `user_daily_task_record` WHERE udtr_fb_id='$fb_id' AND udtr_cr_date like '$todaydate%' and udtr_task_position ='$i'";
					 $res=mysqli_query($conn,$sql1)or die(mysqli_error($conn));
 		       	   $done_task_data="";
 		       	 $done_task_data1=mysqli_fetch_assoc($res); 
			 	$to_do_task_is_coin_collect="0";
			 	if($done_task_data1){
				    $done_task_data=$done_task_data1;
				    $to_do_task_is_coin_collect=$done_task_data1['udtr_id'];
				       $task_status="1";
		  	    	  if($done_task_data1['udtr_is_coin_collected']!=0){
					   $task_status="2";
		  	    	   }
					  
		  	    	   }
		  	     $task_string="Watch Video to get Reward ";
		  	     $coins_collection_string="par Video ".$par_task ." Silver coin";
		  		  $value= array( 
		  		  				 'to_do_daily_task_id'=>$daily_task_data['daily_task_id'],	
		  		  				 'to_do_task_postion' => $i , 
		  		  				 'to_do_task_title' => "Task -".$i,
		  		  				 'to_do_task_discription' => $task_string,
		  		  				 'to_do_task_coins_collection_discription' => $coins_collection_string,
		  		  				 'to_do_task_is_completed_task' => $task_status,
		  		  				 'to_do_task_record' => $done_task_data, 
		  		  				 'to_do_task_is_coin_collect'=>$to_do_task_is_coin_collect	
		  		  				);
		  		  array_push($custom_array,$value);
		  		}
				  $vip_task_data=array();
				  if($vip_status==1){
					$qrry_get="SELECT * FROM `daily_vip_task` WHERE daily_vip_task_id=$today_day";
					$res=mysqli_query($conn,$qrry_get)or die(mysqli_error($conn));
						$daily_vip_task_data=mysqli_fetch_assoc($res);
						if($daily_vip_task_data){
							$task_vip_count=$daily_vip_task_data['daily_vip_task_total_target'];	
		  	  $par_vip_task=$daily_vip_task_data['daily_vip_task_per_target'];
				$vip_task_position=5;
		  	  for($i=1; $i<=$task_vip_count ; $i++) {
		  				# code...
		  	  	$vip_task_status="0";
		  	  	$task_done="";
					$vip_task_position=$vip_task_position+$i;
		  	  	$sql1="SELECT * FROM `user_daily_task_record` WHERE udtr_fb_id='$fb_id' AND udtr_cr_date like '$todaydate%' and udtr_task_position ='$vip_task_position'";
					 $res=mysqli_query($conn,$sql1) or die(mysqli_error($conn));
 		       	   $done_vip_task_data="";
 		       	 $done_vip_task_data1=mysqli_fetch_assoc($res); 
			 	$to_do_vip_task_is_coin_collect="0";
			 	if($done_vip_task_data1){
				    $done_vip_task_data=$done_vip_task_data1;
				    $to_do_vip_task_is_coin_collect=$done_vip_task_data1['udtr_id'];
				       $vip_task_status="1";
		  	    	  if($done_vip_task_data1['udtr_is_coin_collected']!=0){
					   $vip_task_status="2";
		  	    	   }
					  
		  	    	   }
		  	     $vip_task_string="Watch Video to get Reward ";
		  	     $vip_coins_collection_string="par Video ".$par_vip_task ." Silver coin";
		  		  $value= array( 
		  		  				 'to_do_daily_task_id'=>$daily_vip_task_data['daily_vip_task_id'],	
		  		  				 'to_do_task_postion' => $vip_task_position , 
		  		  				 'to_do_task_title' => "Task -".$vip_task_position,
		  		  				 'to_do_task_discription' => $vip_task_string,
		  		  				 'to_do_task_coins_collection_discription' => $vip_coins_collection_string,
		  		  				 'to_do_task_is_completed_task' => $vip_task_status,
		  		  				 'to_do_task_record' => $done_vip_task_data, 
		  		  				 'to_do_task_is_coin_collect'=>$to_do_vip_task_is_coin_collect	
		  		  				);
		  		  array_push($vip_task_data,$value);
		  		}
						}
				  }
		  	$outputdata = array('todays_task' => $daily_task_data , 'to_do_task' =>$custom_array,'todays_vip_task' => $daily_vip_task_data ,'to_do_vip_task'=> $vip_task_data); 
		  	//if($outputdata){
			    $msg_out="Get daily task";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $outputdata);
			}else{
				$msg_out="No any Data Found";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
}		
//31_12_2020

//15_12_2020

//8_12_2020
function create_purchase_service_order(){
    require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			$fb_id=$event_json['fb_id'];
			
	    	if(!isset($event_json['service_id']) || $event_json['service_id']=="") 
			{
				$msg_out="Validation Error service_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				 print_r(json_encode($output, true)); 
				exit();
			}


	    	if(!isset($event_json['pos_pay_by']) || $event_json['pos_pay_by']=="") 
			{
				$msg_out="Validation Error pos_pay_by Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
		 		 $service_id=$event_json['service_id'];
		 		 $qrry_get=" SELECT * FROM `services` WHERE service_id= ".$service_id;
				 $res=mysqli_query($conn,$qrry_get);
				 $data_list=mysqli_fetch_assoc($res); 
			  	if(empty($data_list)){
					$msg_out="Error service_id Not found Over Record";
				    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					print_r(json_encode($output, true)); 
					exit();
				}
	    $pos_paid_amount="";  	
	  	if($event_json['pos_pay_by']=='AMOUNT'){
	  	
    	if(!isset($event_json['pos_paid_amount']) || $event_json['pos_paid_amount']=="") 
		{
			$msg_out="Validation Error pos_paid_amount Missing";
		    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				
			 print_r(json_encode($output, true)); 
			exit();
		}
		if(!isset($event_json['pos_transaction_id']) || $event_json['pos_transaction_id']=="") 
		{
			$msg_out="Validation Error pos_transaction_id Missing";
		    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				
			 print_r(json_encode($output, true)); 
			exit();
		}
	  	$pos_pay_by='AMOUNT';
		$pos_paid_amount=$event_json['pos_paid_amount'];
	    $pos_transaction_id=$event_json['pos_transaction_id'];	
		}			  	
		
			$pos_paid_diamond="";
 			if($event_json['pos_pay_by']=='DIAMOND'){
		  	$pos_pay_by='DIAMOND';
		  	if(!isset($event_json['pos_paid_diamond']) || $event_json['pos_paid_diamond']=="") 
			{
				$msg_out="Validation Error pos_paid_diamond Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				exit();
			}
			
		$total_diamondd_data= get_user_diamond_byfb_id($fb_id); 
		$service_diamond=$data_list['service_diamond'];	
 		if($total_diamondd_data < $service_diamond) 
			{
				$msg_out="You have not not sufficient diamonad to Transfered";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}		
       

		  	$pos_paid_diamond=$service_diamond;
			$pos_transaction_id="fword-diamond-".time();	
			}
		
			$pso_subscription_id=$service_id;
		    $pos_duration=$data_list['service_duration'].'-'.$data_list['service_duration_type'];
		  	$PLAN_ADDFOR=$data_list['service_duration'].' '.$data_list['service_duration_type'];
		  	
		  	$pos_start_date=date('Y-m-d');
			$pos_end_date=date('Y-m-d', strtotime('+'.$PLAN_ADDFOR));
			//echo "CA";	  	
			
			$qrry_fire="INSERT INTO `purchase_subscriptions_order` (`pso_fb_id`, `pso_subscription_id`, `pos_pay_by`, `pos_paid_amount`, `pos_paid_diamond`, `pos_duration`, `pos_start_date`, `pos_end_date`, `pos_is_active`, `pos_transaction_id`) VALUES ('".$fb_id."', '".$pso_subscription_id."', '".$pos_pay_by."', '".$pos_paid_amount."', 	'".$pos_paid_diamond."', '".$pos_duration."', '".$pos_start_date."', '".$pos_start_date."', '1', '".$pos_transaction_id."');"; 
		  	 
			$res=mysqli_query($conn,$qrry_fire)or die(mysqli_error($conn));;
 		   	$lastid=mysqli_insert_id($conn);
			if($lastid)
			{
				if($pos_pay_by=='DIAMOND') 
				{  
				UPDATE_daimond_sender($fb_id, $service_diamond);
				 //add history	
			    $insertDIAMONDhistory=insert_diamond_transfer_history($fb_id , 1 , $service_diamond  ,'Purchase Subscriptions Order :-'.$lastid);			
				}
			    
			 $order_data =mysqli_fetch_assoc(mysqli_query($conn,"select * from purchase_subscriptions_order WHERE  pso_id = '$lastid' "));
			    $msg_out="create purchaes services Successfully";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $order_data);
			}else{
				$msg_out="No any Data Found";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));

}
//8_12_2020	

//7_12_2020
function get_vip_services_details_list(){
    require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				exit();
			}
     		 $fb_id=$event_json['fb_id'];
     		 $qrry_get=" SELECT * FROM `services` ";
			 $res=mysqli_query($conn,$qrry_get);
 		   	  $data_list=mysqli_fetch_all($res, MYSQLI_ASSOC); 
		  	if($data_list){
			    $msg_out="Vip services";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $data_list);
			}else{
				$msg_out="No any Data Found";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
}

function get_vip_services_details(){
    require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				exit();
			}

	    	if(!isset($event_json['service_id']) || $event_json['service_id']=="") 
			{
				$msg_out="Validation Error service_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				exit();
			}
     		 $service_id=$event_json['service_id'];
     		 $qrry_get=" SELECT * FROM `services` WHERE service_id= ".$service_id;
			 $res=mysqli_query($conn,$qrry_get);
 		   	  $data_list=mysqli_fetch_assoc($res); 
		  	if($data_list){
			    $msg_out="Vip services Details";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $data_list);
			}else{
				$msg_out="No any Data Found";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
}

function update_user_mood(){
    require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				exit();
			}

     		if(!isset($event_json['user_mood']) || $event_json['user_mood']=="" ) 
			{
				$msg_out="Validation Error mood Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				 exit();
			}
			$fb_id=$event_json['fb_id'];
		     $user_mood=$event_json['user_mood'];
			 $update_sql='update `users` set user_mood= "'.$user_mood.'" WHERE fb_id='.$fb_id;
    	   	 $res=mysqli_query($conn,$update_sql)or die(mysqli_error($conn));
 		   	if($res){
 		   		$last_data=mysqli_fetch_assoc(mysqli_query($conn,'SELECT fb_id,user_mood FROM `users`  WHERE fb_id='.$fb_id));
			    $msg_out="User Mood Update ";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data"=> $last_data);
			}else{
				$msg_out="Error in Update";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));


}
//7_12_2020
//10_2_2021
function update_user_social_link(){
    require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				exit();
			}

     		if(!isset($event_json['social_link_type']) || $event_json['social_link_type']=="" ) 
			{
				$msg_out="Validation Error social link type Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				 exit();
			}
			$fb_id=$event_json['fb_id'];
		     $social_link_type=$event_json['social_link_type'];
		     $social_link_url=$event_json['social_link_url'];
		     if($social_link_type=='social_link_facebook'){
		    	$update_sql='update `users` set social_link_facebook= "'.$social_link_url.'" WHERE fb_id='.$fb_id;
    	   	 }
			 if($social_link_type=='social_link_instagram'){
		     	$update_sql='update `users` set social_link_instagram= "'.$social_link_url.'" WHERE fb_id='.$fb_id;
    	   
		     }
			 if($social_link_type=='social_link_youtube'){
		       $update_sql='update `users` set social_link_youtube= "'.$social_link_url.'" WHERE fb_id='.$fb_id;
    	   
		   	 }
			 if($social_link_type=='social_link_twitter'){
		       $update_sql='update `users` set social_link_twitter= "'.$social_link_url.'" WHERE fb_id='.$fb_id;
    	   	 }
			 
			 $res=mysqli_query($conn,$update_sql)or die(mysqli_error($conn));
 		   	if($res){
 		   		$last_data=mysqli_fetch_assoc(mysqli_query($conn,'SELECT fb_id,social_link_facebook,social_link_instagram,social_link_youtube,social_link_twitter FROM `users`  WHERE fb_id='.$fb_id));
			    $msg_out="User social link Update ";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data"=> $last_data);
			}else{
				$msg_out="Error in Update";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
}

//3_12_2020
function save_user_gallary_image(){
    require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				exit();
			}

     		if(!isset($event_json['user_gallary_image_name']) || $event_json['user_gallary_image_name']=="" ) 
			{
				$msg_out="Validation Error user_gallary_image_name Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				 exit();
			}

     		if(!isset($event_json['user_gallary_image_file']) || $event_json['user_gallary_image_file']=="" ) 
			{
				$msg_out="Validation Error user_gallary_image_file Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				 exit();
			}
			$fb_id=$event_json['fb_id'];			

			     $thum1=explode(',', $event_json['user_gallary_image_file']);
				 $thum=$thum1[1];
				 
				 $fileName    = time()."_".rand().$event_json['user_gallary_image_name'];
	     		 $attach_url   = "/custom_uploads/users_gallary_images/".$fileName;
				 $attach_url_server   = $_SERVER["DOCUMENT_ROOT"]."/custom_uploads/users_gallary_images/".$fileName;
				 $thum = base64_decode($thum);
			     $d=file_put_contents($attach_url_server, $thum);
				 $insertatt="INSERT INTO `users_gallary_images` ( `users_gallary_image_name`, `users_gallary_image_fb_id`) VALUES ('".$attach_url."', '".$fb_id."')";
    			 mysqli_query($conn,$insertatt) or die(mysqli_error($conn));
				$last_insertid = mysqli_insert_id($conn);
			if($last_insertid){
				$last_data=mysqli_fetch_assoc(mysqli_query($conn,'SELECT * FROM users_gallary_images  WHERE users_gallary_image_id='.$last_insertid));
				// or die(mysqli_error($conn));
			
			    $msg_out="User Gallary Image Added" .$attach_url_server .$d;	
				$output=array( "code" => "200", "msg" => $msg_out ,"data"=> $last_data);
			}else{
				$msg_out="Error In User Gallary Image Added";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));	
}

function remove_user_gallary_image(){
    require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				exit();
			}
     		if(!isset($event_json['user_gallary_image_id']) || $event_json['user_gallary_image_id']=="" ) 
			{
				$msg_out="Validation Error user_gallary_image_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				 exit();
			}
			$fb_id=$event_json['fb_id'];
			$user_gallary_image_id=$event_json['user_gallary_image_id'];			
	        $del_sql="DELETE FROM `users_gallary_images` WHERE users_gallary_image_id= '".$user_gallary_image_id."' and users_gallary_image_fb_id=".$fb_id;
    	   	 $res=mysqli_query($conn,$del_sql)or die(mysqli_error($conn));
 		   	if($res){
			    $msg_out="User Gallary Image Deleted";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data"=> $$user_gallary_image_id);
			}else{
				$msg_out="Error in Delete";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
}

function get_user_gallary_image(){
    require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				exit();
			}
     		 $fb_id=$event_json['fb_id'];
     		 $qrry_get=" SELECT * FROM `users_gallary_images` WHERE users_gallary_image_fb_id= ".$fb_id;
			 $res=mysqli_query($conn,$qrry_get);
 		   	  $data_list=mysqli_fetch_all($res, MYSQLI_ASSOC); 
		  	if($data_list){
			    $msg_out="User Gallary Image";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data" => $data_list);
			}else{
				$msg_out="No any  Gallary Image Found";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
}
//3_2_2020	
	//1_12_2020

	function save_user_wear_badge(){
    require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				exit();
			}
     		if(!isset($event_json['badges_ids']) ) 
			{
				$msg_out="Validation Error badges_ids Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				 exit();
			}
			$fb_id=$event_json['fb_id'];			
    		$badges_ids=$event_json['badges_ids'];			
    	   	 $update_sql="update `users` set user_wear_badge= '".$badges_ids."' WHERE fb_id=".$fb_id;
    	   	 $res=mysqli_query($conn,$update_sql);
 		   	if($res){
			    $msg_out="User badge Update ";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data"=> $$badges_ids);
			}else{
				$msg_out="Error in Update";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));


    }		
	function get_submited_diamond_transfer_detailed(){
    require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				exit();
			}
     		if(!isset($event_json['dth_id']) || $event_json['dth_id']=="") 
			{
				$msg_out="Validation Error dth_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				 exit();
			}
			$fb_id=$event_json['fb_id'];			
    		$dth_id=$event_json['dth_id'];			
    		
    		//$transfer_type=$event_json['transfer_type'];
    		
    		//$transfer_type1="Na";
		 	//JOIN users as senderuser on  senderuser.fb_id=dth.dth_sender_id 
	     	$qrry_get='SELECT dth.*,senderuser.fb_id as senderuser_fb_id,senderuser.first_name as senderuser_first_name,senderuser.last_name as senderuser_last_name,senderuser.profile_pic as senderuser_profile_pic,receiveruser.fb_id as receiveruser_fb_id,receiveruser.first_name as receiveruser_first_name,receiveruser.last_name as receiveruser_last_name,receiveruser.profile_pic as receiveruser_profile_pic    FROM `diamond_transfer_history` as dth JOIN users as senderuser on  senderuser.fb_id=dth.dth_sender_id  JOIN users as receiveruser on receiveruser.fb_id=dth.dth_receiver_id WHERE dth.dth_id='.$dth_id;
 			
 		   	  $res=mysqli_query($conn,$qrry_get);
 		   	  $data_list=mysqli_fetch_assoc($res); 
		  	if($data_list){
			    $msg_out="Get Diamond Transfered Details";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data"=> $data_list);
			}else{
				$msg_out="Diamond Transfered Details Not Found ";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
    }

	function get_submited_diamond_transfer(){
    require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				exit();
			}
     		if(!isset($event_json['transfer_type']) || $event_json['transfer_type']=="") 
			{
				$msg_out="Validation Error transfer_type Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				exit();
			}
			$fb_id=$event_json['fb_id'];			
    		$transfer_type=$event_json['transfer_type'];
    		$transfer_type1="Na";
    		if($transfer_type=='SEND'){
   		   	$transfer_type1="SEND";
    		$qrry_get='SELECT * FROM `diamond_transfer_history` as dth JOIN users as receiveruser on  receiveruser.fb_id=dth.dth_receiver_id WHERE dth.dth_sender_id='.$fb_id.' order by dth_id DESC';
 		   	}else{
 		   	$transfer_type1="Received";	
			$qrry_get='SELECT * FROM `diamond_transfer_history` as dth JOIN users as senderuser on  senderuser.fb_id=dth.dth_sender_id WHERE dth.dth_receiver_id='.$fb_id.' order by dth_id DESC ';
 			}
 		   	  $res=mysqli_query($conn,$qrry_get);
 		   	  $data_list=mysqli_fetch_all($res, MYSQLI_ASSOC); 
		   	
			if($data_list){
			    $msg_out="Get Diamond Transfered ".$transfer_type1;	
				$output=array( "code" => "200", "msg" => $msg_out ,"data"=> $data_list);
			}else{
				$msg_out="Data not found Diamond Transfer";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));


    }
///
  function push_notification_new($DeviceToken,$title,$body){
  //$time_tag=" ".date('Y-m-d h:i A'); 
  $data = array(
          'body' => $body,
          'title' => $title,
          'vibrate' => 1,
          'sound' => "default",
          'badge' => '1',
      );


  // $notification = array('title' =>$title , 'body' => $body, 'sound' => 'default', 'badge' => '1');
  // $arrayToSend = array('to' => $token, 'notification' => $notification,'priority'=>'high');
//$DeviceToken"ebbdenJbTrKlYvtWCTZ_bW:APA91bG83dSJ9KP6Uad22a238SXwY9Peonjfz_0YsFUoccugPHPXPeK_YgDkTX7omWzheNCcBGGh-v4EsIpyx3YsmSOMG1GOvPhJBf98ZoEAPiAhSxHa9rjsHNURPVNgJshvveXZrGNy";
  $icon=array('icon' => '/images/app-icon.png');
  $FCMFields = array('to' => $DeviceToken,  'data' => $data  , 'android' => $icon);

//  $FCMFields = array('to' => $DeviceToken, 'notification' => $data, 'data' => $data);
  //FCM API end-point
  $url = 'https://fcm.googleapis.com/fcm/send';
  //api_key in Firebase Console -> Project Settings -> CLOUD MESSAGING -> Server key
//  $server_key = 'AAAAY30-QME:APA91bHAvrPmV5aeBV7XjIwg9GsTdZqziEvULMHKrmTl5MxN_NKumfsydc5JS1CV7bDvqh5dtVjFbAl0MZ23A2DcFeJfDj9rlDAn2JhdKyGPHGukLEs3Vc4rF9z6-IBNffNr32OzvToT';
  $server_key = 'AAAAPurkhgo:APA91bFdfgOMdO2mSrheFrlugyJojgJYLdocx3mD10uPslqT8oC_-R2uG-cvn_l_Aossa5C4VEPADuPYjX1RYQpUCZzXJLC6h09GNJKe8SBqWOWFoeQ3VomN-Tq7GaJvP62oHVmRNdS4';

  //header with content_type api key
  $headers = array(
      'Content-Type:application/json',
      'Authorization:key='.$server_key
  );
  //CURL request to route notification to FCM connection server (provided by Google)
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($FCMFields) );
  $response = curl_exec($ch);
   $err = curl_error($ch);

        curl_close($ch);

        if ($err) 
        {
           // print_r($err);
        return 	$err;
        } 
        else 
        {
        return 	$response;
            //print_r($response);
        }
}

	function submit_diamond_transfer_onlive_message(){
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

		if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				exit();
			}		
	
		if(!isset($event_json['ulr_id']) || $event_json['ulr_id']=="") 
			{
				$msg_out="Validation Error ulr_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				exit();
			}
    	if(!isset($event_json['message']) || $event_json['message']=="") 
			{
				$msg_out="Validation Error message Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				exit();
			}
    	$fb_id=$event_json['fb_id'];
    	$remove_diamond=10;

        $total_diamondd_data= get_user_diamond_byfb_id($fb_id); 
			
 		if($total_diamondd_data < $remove_diamond) 
			{
				$msg_out="You have not not sufficient diamonad to Transfered";
			    $output=array( "code" => "201", "msg" => $msg_out );
				print_r(json_encode($output, true)); 
				exit();
			}		
	

		   $ulrd_id=htmlspecialchars(strip_tags($event_json['ulrd_id'] , ENT_QUOTES));
		   $dth_for=htmlspecialchars(strip_tags($event_json['message'] , ENT_QUOTES));
		  
 		   //insert_diamond_transfer_history
 		   $cr_date=date('Y-m-d H:i:s');
		    $qrry_1="insert into livemessage_history ( `lmh_fb_id`, `lmh_ulrd_id`, `lmh_diamond`, `lmh_crdate`,`lmh_message`)values(";
    			$qrry_1.="'".$fb_id."',";
    			$qrry_1.="'".$ulrd_id."',";
    			$qrry_1.="'".$remove_diamond."',";
    			$qrry_1.="'".$cr_date."',";
    			//$qrry_1.="'',";
    			$qrry_1.="'".$dth_for."'";
    			
    			$qrry_1.=")";
    		
    			 mysqli_query($conn,$qrry_1)or die(mysqli_error($conn));
    			 $last_insertid = mysqli_insert_id($conn);
			if($last_insertid){

			//sender_id remove diamonad
			UPDATE_daimond_sender($fb_id, $remove_diamond);
			
			$total_remain= get_user_diamond_byfb_id($fb_id); 
			
		
			   $qrry_get='SELECT * FROM `livemessage_history` WHERE lmh_id='.$last_insertid;
 		   	   $data= mysqli_fetch_assoc(mysqli_query($conn,$qrry_get)); 
			    $msg_out="Diamond Transfered Successfully ";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data"=> $data , "remain_diamond" => $total_remain);
			     
			}else{
				$msg_out="Error in Diamond Transfer Please Retry";
			    $output=array( "code" => "500", "msg" => $msg_out   );
			}
			print_r(json_encode($output, true));
	}
///
	function submit_diamond_transfer(){
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

		if(!isset($event_json['sender_id']) || $event_json['sender_id']=="") 
			{
				$msg_out="Validation Error sender_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				exit();
			}		
	
		if(!isset($event_json['receiver_id']) || $event_json['receiver_id']=="") 
			{
				$msg_out="Validation Error receiver_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				exit();
			}
    	if(!isset($event_json['send_diamond']) || $event_json['send_diamond']=="") 
			{
				$msg_out="Validation Error send_diamond Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				exit();
			}

    	if(!isset($event_json['diamond_transfer_for']) || $event_json['diamond_transfer_for']=="") 
			{
				$msg_out="Validation Error diamond_transfer_for Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
					
				 print_r(json_encode($output, true)); 
				exit();
			}		

 	       $sender_id=htmlspecialchars(strip_tags($event_json['sender_id'] , ENT_QUOTES));
	       $receiver_id=htmlspecialchars(strip_tags($event_json['receiver_id'] , ENT_QUOTES));
		   $send_diamond=htmlspecialchars(strip_tags($event_json['send_diamond'] , ENT_QUOTES));
		
		  $total_diamondd_data= get_user_diamond_byfb_id($sender_id); 
			
 		if($total_diamondd_data < $send_diamond) 
			{
				$msg_out="You have not not sufficient diamonad to Transfered";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}		
	
 		   $dth_for=htmlspecialchars(strip_tags($event_json['diamond_transfer_for'] , ENT_QUOTES));
		  
 		   //insert_diamond_transfer_history
 		   $dth_cr_date=date('Y-m-d H:i:s');
		    $qrry_1="insert into diamond_transfer_history ( `dth_sender_id`, `dth_receiver_id`, `dth_send_diamond`, `dth_cr_date`, `dth_for`)values(";
    			$qrry_1.="'".$sender_id."',";
    			$qrry_1.="'".$receiver_id."',";
    			$qrry_1.="'".$send_diamond."',";
    			$qrry_1.="'".$dth_cr_date."',";
    			//$qrry_1.="'',";
    			$qrry_1.="'".$dth_for."'";
    			
    			$qrry_1.=")";
    		
    			 mysqli_query($conn,$qrry_1)or die(mysqli_error($conn));
    			 $last_insertid = mysqli_insert_id($conn);
			if($last_insertid){

			//sender_id remove diamonad
			 UPDATE_daimond_sender($sender_id, $send_diamond);
			//receiver_id add diamonad
			 UPDATE_daimond_receiver($receiver_id , $send_diamond);
			 
			//notification
			  $senderuser_Data= mysqli_fetch_assoc(mysqli_query($conn,'SELECT * FROM `users` WHERE fb_id='.$sender_id)); 
		  	  $receiveruser_Data= mysqli_fetch_assoc(mysqli_query($conn,'SELECT * FROM `users` WHERE fb_id='.$receiver_id)); 
		  		$receiveruser_Data_token=$receiveruser_Data['tokon'];
				$senderuser_Data_NAME=$senderuser_Data['first_name'].' '.$senderuser_Data['last_name'];
				$fmessage= $senderuser_Data_NAME .' Send You '.$send_diamond. ' Diamond For You';
						$notifi_msg = array
						(
						'title' => 'Fworld Diamond Transfered',
						'body'	=> $fmessage,
						);
						$fields = array
						(
						'to'		=> $receiveruser_Data_token,
						'notification'	=> $notifi_msg
						//'dth_id'=>$last_insertid
						);
                    $notification_out=sendPushNotification($fields);
                    $title="Fworld Diamond Transfered";
    			    $body=$message=$fmessage;
    			   // $DeviceToken= $receiveruser_Data_token;
                   //$out=push_notification_new($DeviceToken,$title,$body);

			//	  
             
			   $qrry_get='SELECT * FROM `diamond_transfer_history` WHERE dth_id='.$last_insertid;
 		   	   $data= mysqli_fetch_assoc(mysqli_query($conn,$qrry_get)); 
			    $msg_out="Diamond Transfered Successfully ";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data"=> $data,"notification_out" =>$notification_out , 'fields'=>$fields);
			     
			}else{
				$msg_out="Error in Diamond Transfer Please Retry";
			    $output=array( "code" => "500", "msg" => $msg_out , "data"=> "");
			}
			print_r(json_encode($output, true));
	}//method close
	//1_12_2020



	function get_submited_report_reason(){
		require_once("config.php");
		global $conn;
        $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		print_r($event_json);
		
		if(isset($event_json['user_id']) && $event_json['user_id']!="" )

		{
		 $user_id=htmlspecialchars(strip_tags($event_json['user_id'] , ENT_QUOTES));
		   

  		 echo $sqli=' SELECT * FROM report_reason where report_reason_user_id="'.$user_id.'"';
 		   $result=mysqli_query($conn,$sqli) or die("dd".mysqli_error($conn));
	      // $data_list=mysqli_fetch_all($result, MYSQLI_ASSOC); 
		print_r($data_list);

//			     	
      $custom_array=array();
    foreach ($data_list as $value) {
      $id=$value['report_reason_id'];
      $report_for= "";
		if($value['report_reason_to_user_id']!="")
		{
		$fbid=$value['report_reason_to_user_id'];
		$usqli="select * from `users` WHERE fb_id='$fbid'";
		$udata=mysqli_query($conn,$usqli) or die(mysqli_error($conn));
		$userrow=mysqli_fetch_assoc($udata); 
		$Ufirst_name=$userrow['first_name'].' '.$userrow['last_name'];
		//$link='<a href="'.$vediorow['video'].'" target="_blank">Video</a>';
		$report_for= 'User :- Name:-'.$Ufirst_name.'Fb id:-'.$fbid.' ';//.$link;
		}

		if($value['report_reason_video_id']!=0)
		{
		$vid=$value['report_reason_video_id'];
		$vsqli="select * from `videos` WHERE id='$vid'";
		$vdata=mysqli_query($conn,$vsqli) or die(mysqli_error($conn));
		$vediorow=mysqli_fetch_assoc($vdata); 
		$r=$vediorow['description'];
		// $link='<a href="'.$vediorow['video'].'" target="_blank">Video</a>';
		$report_for= "Video :-".$r." ";
		}   

	   $value['report_for']=$report_for;
       $custom=array_push($custom_array , $value);
    }//foreachloop

 			if(!empty($custom_array)){     	
			  echo  $msg_out="Get Submited Report Reason";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data"=> $custom_data);
			}else{
			echo    $msg_out="1Get Submited Report Reason";	
			    $output=array( "code" => "500", "msg" => $msg_out ,    "data"=> "");
			}	
	    print_r(json_encode($output, true));
	   
	   }else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing  ");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}	

	}

///
	
	function submit_report_reason(){
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	if(!isset($event_json['report_reason_user_id']) || $event_json['report_reason_user_id']=="") 
			{
				$msg_out="Validation Error report_reason_user_id Missing";
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


			if($event_json['report_reason_type']=="Live Room")		   
		    {
		    	//video validation fire
				if(!isset($event_json['report_reason_ulrd_id']) || $event_json['report_reason_ulrd_id']=="") 
					{
						$msg_out="Validation Error Report Reason ulrd id Missing";
					    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
							
						 print_r(json_encode($output, true)); 
						exit();
					}

			}


			if($event_json['report_reason_type']!="Video" && $event_json['report_reason_type']!="Profile" && $event_json['report_reason_type']!="Live Room")		   
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


		$report_reason_user_id=htmlspecialchars(strip_tags($event_json['report_reason_user_id'] , ENT_QUOTES));
		    
	    $report_reason_type=htmlspecialchars(strip_tags($event_json['report_reason_type'] , ENT_QUOTES));
		 $report_reason_description=htmlspecialchars(strip_tags($event_json['report_reason_description'] , ENT_QUOTES));
		   $report_reason_description2='';
		  $report_reason_description2=htmlspecialchars(strip_tags($event_json['report_reason_description2'] , ENT_QUOTES));
		 
		   
			if($event_json['report_reason_type']=="Video")		   
		    {
		     //report_reason_video_id
	     	 $report_reason_video_id=htmlspecialchars(strip_tags($event_json['report_reason_video_id'] , ENT_QUOTES));
	
		     $qrry_1="insert into report_reason (`report_reason_type`, `report_reason_description`, `report_reason_description2`,`report_reason_user_id`, ,`report_reason_video_id`)values(";
    			$qrry_1.="'".$report_reason_type."',";
    			$qrry_1.="'".$report_reason_description."',";
    			$qrry_1.="'".$report_reason_description2."',";
    			$qrry_1.="'".$report_reason_user_id."',";
    			//$qrry_1.="'',";
    			$qrry_1.="'".$report_reason_video_id."'";
    			
    			$qrry_1.=")";
    		
    			 mysqli_query($conn,$qrry_1)or die(mysqli_error($conn));
    			 $last_insertid = mysqli_insert_id($conn);
			
    		}

			if($event_json['report_reason_type']=="Profile")		   
		    {
	     	   $report_reason_to_user_id=htmlspecialchars(strip_tags($event_json['report_reason_to_user_id'] , ENT_QUOTES));
	  
		     $qrry_1="insert into report_reason (`report_reason_type`, `report_reason_description`,`report_reason_description2`, `report_reason_user_id`, `report_reason_to_user_id`)values(";
    			$qrry_1.="'".$report_reason_type."',";
    			$qrry_1.="'".$report_reason_description."',";
    			$qrry_1.="'".$report_reason_description2."',";
    			$qrry_1.="'".$report_reason_user_id."',";
    			$qrry_1.="'".$report_reason_to_user_id."'";
    			$qrry_1.=")";
    			 mysqli_query($conn,$qrry_1)or die(mysqli_error($conn));
    			 $last_insertid = mysqli_insert_id($conn);
			
    		}
    		 //echo  $qrry_1;	 
    		if($event_json['report_reason_type']=="Live Room")		   
		    {
		    $report_reason_ulrd_id=htmlspecialchars(strip_tags($event_json['report_reason_ulrd_id'] , ENT_QUOTES));
		     
		     $qrry_1="insert into report_reason (`report_reason_type`, `report_reason_description`,`report_reason_description2`, `report_reason_user_id`, `report_reason_ulrd_id`)values(";
    			$qrry_1.="'".$report_reason_type."',";
    			$qrry_1.="'".$report_reason_description."',";
    			$qrry_1.="'".$report_reason_description2."',";
    			$qrry_1.="'".$report_reason_user_id."',";
    			$qrry_1.="'".$report_reason_ulrd_id."'";
    			$qrry_1.=")";
    			 mysqli_query($conn,$qrry_1)or die(mysqli_error($conn));
    			 $last_insertid = mysqli_insert_id($conn);
			
    		}
    		

    		if($last_insertid)
    		{
			
			if(isset($event_json['report_reason_attachment'])){
				$attechment=json_decode($event_json['report_reason_attachment'] , true);
			// print_r($attechment);
		  	if(!empty($attechment)){
			    foreach ($attechment as $value) {
					# code...
				 $thum1=explode(',', $value['screenshot_file']);
				 $thum=$thum1[1];
				 
				 $fileName    = time()."_".rand().$value['screenshot_name'];
	     		 $attach_url   = "upload/report_reason/".$fileName;
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
				$msg_out="Report Reason Not submit plz try again";
			    $output=array( "code" => "500", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true));
			}
  
	}

///
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

	function get_setting_tag_value(){
		 $tag=$_GET['tag'];//)?$_GET['tag']:'';
		if($tag==""){
			$tag="you_tube_link";
		}
		 require_once("config.php");
		 $sqli="select * from `setting_tag` WHERE setting_tag_key='$tag'";
		 $data=mysqli_query($conn,$sqli) or die(mysqli_error($conn));
			$row=mysqli_fetch_assoc($data);   
			if($row)	
			{   
			    $msg_out="Value set";	
				$output=array( "code" => "200", "msg" => $msg_out ,"data"=> $row);
			}else{
				$msg_out="Value not set";
			    $output=array( "code" => "500", "msg" => $msg_out ,  "data"=> "");
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
        return 	$err;
        } 
        else 
        {
        return 	$response;
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
		return $result;
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
			$email=htmlspecialchars(strip_tags($event_json['email'] , ENT_QUOTES));
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			$first_name=htmlspecialchars(strip_tags($event_json['first_name'] , ENT_QUOTES));
			$last_name=htmlspecialchars(strip_tags($event_json['last_name'] , ENT_QUOTES));
			$gender=htmlspecialchars(strip_tags($event_json['gender'] , ENT_QUOTES));
			$profile_pic=htmlspecialchars_decode(stripslashes($event_json['profile_pic']));
			$version=htmlspecialchars_decode(stripslashes($event_json['version']));
			$device=htmlspecialchars_decode(stripslashes($event_json['device']));
			$signup_type=htmlspecialchars_decode(stripslashes($event_json['signup_type']));
		    $username=$first_name.rand();
		    
			$log_in="select * from users where fb_id2='".$fb_id."' or  email='".$email."' ";
			$log_in_rs=mysqli_query($conn,$log_in);
			
			if(mysqli_num_rows($log_in_rs))
			{   
			    $rd=mysqli_fetch_object($log_in_rs);  
			     
				$array_out = array();
				 
				if($rd->block==0){	
				 $array_out[] = 
					//array("code" => "200");
					array(
						"fb_id2"      => $rd->fb_id2,
						"email"       =>$rd->email,
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
				}else{
				$output=array( "code" => "202", "msg" => "User Blcok By Admin");
				}
				print_r(json_encode($output, true));
			}	
			else
			{
			    
			    $qrry_1="insert into users(email,fb_id2,username,first_name,last_name,profile_pic,version,device,signup_type,gender)values(";
    			$qrry_1.="'".$email."',";
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
    			//echo $qrry_1;
    			if(mysqli_query($conn,$qrry_1))
    			{
				     $last_insert_fb_id = mysqli_insert_id($conn);
			
					$NEWlog_in="select * from users where fb_id='".$last_insert_fb_id."' ";
					$log_in_rsNEW=mysqli_query($conn,$NEWlog_in);
					 $rd=mysqli_fetch_object($log_in_rsNEW);  
			        
				     $array_out = array();
    				 $array_out[] = 
    					//array("code" => "200");
    					array(
    					/*	"fb_id2"      => $rd->fb_id2,
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
    					*/
    						"email" => $rd->email,
    						"fb_id2"      => $rd->fb_id2,
							"fb_id" => $rd->fb_id,
    						"action" => "signup",
    						"profile_pic" => $rd->profile_pic,
    						"username" => $rd->username,
    						"first_name"    => $rd->first_name,
							"last_name"     => $rd->last_name,
							"signup_type" => $rd->signup_type,
    						"gender" => $rd->gender,
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
	

	function gettimeanddaysleft(){
		$date=date("H:i:s");
		$today=date("Y-m-d");
		$today=new DateTime($today);
		$nextsunday=date('Y-m-d', strtotime('next sunday'));
		$nextsunday=new DateTime($nextsunday);
		$days_left_for_sunday= $today->diff($nextsunday);
		$timestamp = strtotime(date('Y-m-d'));
		$daysRemaining = (int)date('t', $timestamp) - (int)date('j', $timestamp);

	
		$array_out=array();
		$array_out[] = 
		array(
		"date" =>$date,
		"days_left_for_next_sunday"=>$days_left_for_sunday->days,
		"days_left_for_last_day_of_month"=>	$daysRemaining	
	);
		$output=array( "code" => "200", "data" => $array_out);
			print_r(json_encode($output, true));
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
	

function getcurrenttimendate(){
	$array_out=date("Y-m-d h-i-s");
	$output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
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
                $vfb_id=$row['id'];
         		$query2=mysqli_query($conn,"SELECT count(*) as count from follow_users where fb_id='".$vfb_id."' and followed_fb_id='".$fb_id."' ");
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
            		"follow_Status" =>array
                                (
                                    "follow" => $follow,
                                    "follow_status_button" => $follow_button_status
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
	
	//2_10_2021
	function get_followers()
	{
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
	    if(isset($event_json['fb_id']))
		{
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			
		    //$query=mysqli_query($conn,"select * from follow_users where followed_fb_id='".$fb_id."' order by id DESC");
		    
		    //echo "select * from follow_users where followed_fb_id='".$fb_id."' order by id DESC";
		    
		    
			$week_sql="SELECT * FROM `follow_users`  
					   WHERE yearweek(DATE(follow_users_cr_date), 1) = yearweek(curdate(), 1) and followed_fb_id='".$fb_id."'  order by id DESC";
		    $query=mysqli_query($conn,$week_sql);
	            
	        $array_out1 = array();
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
                


			
    		   $array_out1[] = 
        			array(
        			    "fb_id" => $rd1->fb_id,
					    "username" => $rd1->username,
					    "first_name" => $rd1->first_name,
					    "last_name" => $rd1->last_name,
					    "gender" => $rd1->gender,
					    "bio" => $rd1->bio,
					    "profile_pic" => $rd1->profile_pic,
					    "vip_details_icon" =>get_user_vip_status_icon($rd1->fb_id),
						"user_level_icon"=> get_user_level_icon($rd1->fb_id),	
						"user_family_level_icon"=>get_user_family_level_icon($rd1->fb_id),	
					    
					    "created" => $rd1->created,
					    "official" => $rd1->official,
					    "follow_Status" =>array
                		(
                			"follow" => $follow,
                			"follow_status_button" => $follow_button_status
                		),
        			    
        				"follow_users_id" =>$row['id'],
        				"follow_users_cr_date" => $row['follow_users_cr_date']
			
        		);
    			
    		}
	        
	        //remain all 
	        	$week_sql="SELECT * FROM `follow_users`  
					   WHERE yearweek(DATE(follow_users_cr_date), 1) != yearweek(curdate(), 1) and followed_fb_id='".$fb_id."'  order by id DESC";
		    $query=mysqli_query($conn,$week_sql);
	            
	        $array_out2 = array();
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
                



    		   $array_out2[] = 
        			array(
        			    "fb_id" => $rd1->fb_id,
					    "username" => $rd1->username,
					    "first_name" => $rd1->first_name,
					    "last_name" => $rd1->last_name,
					    "gender" => $rd1->gender,
					    "bio" => $rd1->bio,
					    "profile_pic" => $rd1->profile_pic,
					    "vip_details_icon" =>get_user_vip_status_icon($rd1->fb_id),
						"user_level_icon"=> get_user_level_icon($rd1->fb_id),	
						"user_family_level_icon"=>get_user_family_level_icon($rd1->fb_id),	
					    "created" => $rd1->created,
					    "official" => $rd1->official,
					    "follow_Status" =>array
                		(
                			"follow" => $follow,
                			"follow_status_button" => $follow_button_status
                		),
        			    
        				"follow_users_id" =>$row['id'],
        				"follow_users_cr_date" => $row['follow_users_cr_date']
			
        		);
    			
    		}
	    
	    	
    		     $data_array=array
	                      (
	                      	'This_Week'  => $array_out1 ,
	                      	'This_Month' =>	$array_out2
	                      );

	        $output=array( "code" => "200", "msg" => $data_array);
    	
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
	//2_4_2021
	function get_followers_simple_list()
	{
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
	    if(isset($event_json['fb_id']))
		{
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			
		    //$query=mysqli_query($conn,"select * from follow_users where followed_fb_id='".$fb_id."' order by id DESC");
		    
		    //echo "select * from follow_users where followed_fb_id='".$fb_id."' order by id DESC";
		    
		    
			$week_sql="SELECT * FROM `follow_users`  
					   WHERE  followed_fb_id='".$fb_id."'  order by id DESC";
		    $query=mysqli_query($conn,$week_sql);
	            
	        $array_out1 = array();
    		while($follow_users_row=mysqli_fetch_assoc($query))
    		{
    		   
		$f_u_fb_id=$follow_users_row['fb_id'];
	    $sql="SELECT * FROM users where `fb_id`='$f_u_fb_id'";
        $query=mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($query)>0)
        { 
            $row=mysqli_fetch_assoc($query);
            
                $selected_value_explde_array=explode(',',$row['user_wear_badge']);	 
			
			    $row['follow_Status']=get_follow_users_status($row['fb_id'], $fb_id);
		  	  	$row['vip_details']="";
		  	  	$row['vip_details']=get_user_vip_status($row['fb_id']);
		  		if($row['vip_details'])
		  		{
		  			$row['vip_status']="1";
		  		}	
		  		$row['user_level']=get_user_level($row['fb_id']);
		 		$row['user_live_level']=get_user_live_level($row['fb_id']);
		 
    			$row['vip_details_icon'] =get_user_vip_status_icon($row['fb_id']);
				$row['user_level_icon']= get_user_level_icon($row['fb_id']);	
			    $row['user_family_level_icon']=get_user_family_level_icon($row['fb_id']);	
				$row['guardian_shields_details_icon']=get_guardian_shields_icon($row['fb_id']);
		 	  


		 		$row['user_total_send_diamond']=get_user_total_send_diamond($row['fb_id']);
		  		$row['user_total_received_diamond']=get_user_total_received_diamond($row['fb_id']);
			

		 	    $row['user_followers']=get_user_followers_count($row['fb_id']);
		  		$row['user_following']=get_user_following_count($row['fb_id']);
				$row['user_hearts']=get_user_hearts_count($row['fb_id']);
		 	  
		 	  	$row['user_hearts']=get_user_hearts_count($row['fb_id']);
		  		
		  		$row['user_post']=get_user_post_count($row['fb_id']);
		 	
		 	  	$row['guardian_shields_details']="";
		 	  	$guardian_shield=get_guardian_shields($row['fb_id']);
		 	  	if($guardian_shield){
		 	  	$row['guardian_shields_status']="1";
		 	  	$row['guardian_shields_details']=$guardian_shield;
		 	  	}
		 	  	//$row['user_on_hoster_live_room']=get_user_on_hoster_live_room($row['fb_id']);
		 		//$row['user_on_join_live_room']=get_user_on_join_live_room($row['fb_id']);
		 	 	$row['is_user_on_live_room']="0";
		 		$row['user_on_live_room_data']="";
		 		$is_user_on_live_room=get_user_on_hoster_live_room($row['fb_id']);
		 		if($is_user_on_live_room){
		 	 	$row['is_user_on_live_room']="1";
		 		$row['user_on_live_room_data']=$is_user_on_live_room;
		 		}
            $array_out1[]=$row;
          }   

    		   
		       
    		}
	        
	    

	        $output=array( "code" => "200", "msg" => 'users followers list',  "data"=>$array_out1);
    	
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
	
	function get_followersbk_2_10_2021()
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
			
			$sql="select * from follow_users where fb_id='".$fb_id."' order by id DESC";
		    $query=mysqli_query($conn,$sql);
	        $array_out1 = array();
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
                		),
        				"follow_users_id" =>$row['id'],
        				"follow_users_cr_date" => $row['follow_users_cr_date']
					   
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
		$query=mysqli_query($conn,"select * from users where fb_id2='".$fb_id."' or fb_id='".$fb_id."' ");
	   
		$array_out = array();
		while($row=mysqli_fetch_assoc($query))
		{
		    $array_out[] =$row;
		    // $array_out[] = 
    		// 	array(
    		// 	"fb_id" => $row['fb_id'],
    		// 	"username" => $row['username'],
    		// 	"first_name"=> $row['first_name'],			
      //   	    "last_name" => $row['last_name'],
    		// 	"gender" => $row['gender'],
    		// 	"bio" => $row['bio'],
    		// 	"profile_pic" => $row['profile_pic'],
    		// 	"created" => $row['created']
    		// );
			
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
	        $DATE_TIME=custom_current_date_time();
	        $qrry_1="insert into follow_users(fb_id,followed_fb_id,follow_users_cr_date)values(";
			$qrry_1.="'".$fb_id."',";
			$qrry_1.="'".$followed_fb_id."',";
			$qrry_1.="'".$DATE_TIME."'";
			$qrry_1.=")";
			if(mysqli_query($conn,$qrry_1))
			{
                
              $query2=mysqli_query($conn,"select * from users where fb_id='".$fb_id."' ");
		        $rd1=mysqli_fetch_object($query2);
                
                $query1=mysqli_query($conn,"select * from users where fb_id='".$followed_fb_id."' ");
		        $rd=mysqli_fetch_object($query1);
                  //  print_r($rd); die;  
		     $msg = array
                  (
                'body' 	=> $rd1->first_name.' '.$rd1->last_name.' satarted following you',
                'title'	=> 'Fallowing',
                'type'=>notification_type('fans')
                  ); 
           $fields = array
                (
                    'to'		=>$rd->tokon,
                    'notification'	=> $msg
                );
       
	           sendPushNotification($fields);    
             
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
	       $DATE_TIME=custom_current_date_time();
	        $qrry_1="insert into follow_users(fb_id,followed_fb_id,follow_users_cr_date)values(";
			$qrry_1.="'".$fb_id."',";
			$qrry_1.="'".$followed_fb_id."',";
			$qrry_1.="'".$DATE_TIME."'";
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
	

	function user_mark_unmark_heart()
	{   
	    require_once("config.php");
	    $input          = @file_get_contents("php://input");
	    $event_json     = json_decode($input,true);
	    $array_out      = array();
	    
		if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			

		if(!isset($event_json['heart_fb_id']) || $event_json['heart_fb_id']=="") 
			{
				$msg_out="Validation Error heart_fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
		$fb_id          = $event_json['fb_id'];
	    $heart_fb_id = $event_json['heart_fb_id'];
	   	
		if($fb_id == $heart_fb_id) 
			{
				$msg_out="plz check fb_id  heart_fb_id Are same";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
		
			
		$query  = mysqli_query($conn,"select * from  heart_users WHERE  fb_id = '$fb_id' AND heart_fb_id = '$heart_fb_id'");
	    if(mysqli_num_rows($query) > 0)
	    {
	       $row=mysqli_fetch_assoc($query);
	       $id=$row['heart_id'];
	       $query1= mysqli_query($conn,"DELETE  from heart_users WHERE  heart_id = '$id'");
	       if($query1){
	           $output         = array( "code" => "200", "msg" => 'Un Heart');
	       }
	       
	    }else
	    {
	       $DATE_TIME=custom_current_date_time();
	        $qrry_1="insert into heart_users(fb_id,heart_fb_id,heart_users_cr_date)values(";
			$qrry_1.="'".$fb_id."',";
			$qrry_1.="'".$heart_fb_id."',";
			$qrry_1.="'".$DATE_TIME."'";
			$qrry_1.=")";
			if(mysqli_query($conn,$qrry_1))
			{
			 $output         = array( "code" => "200", "msg" => 'Heart');   
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
	   	 $query          = mysqli_query($conn,"select * from users where block=0 AND ( username  LIKE '$key%' OR first_name LIKE '$key%' 
	   	                              OR last_name LIKE '$key%' OR fb_id LIKE '%$key%')
	   	                                and fb_id!='$fb_id' and user_type=0 group by fb_id "); 
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
	        
	          	$user_data1['vip_details']="";
		  	  	$user_data1['vip_details']=get_user_vip_status($data['fb_id']);
		  		if($user_data1['vip_details'])
		  		{
		  			$user_data1['vip_status']="1";
		  		}	
		  		$user_data1['user_level']=get_user_level($data['fb_id']);
		 		$user_data1['user_live_level']=get_user_live_level($data['fb_id']);
		 
    			$user_data1['vip_details_icon'] =get_user_vip_status_icon($data['fb_id']);
				$user_data1['user_level_icon']= get_user_level_icon($data['fb_id']);	
			    $user_data1['user_family_level_icon']=get_user_family_level_icon($data['fb_id']);	
				$user_data1['guardian_shields_details_icon']=get_guardian_shields_icon($data['fb_id']);
		 	  


		 		$user_data1['user_total_send_diamond']=get_user_total_send_diamond($data['fb_id']);
		  		$user_data1['user_total_received_diamond']=get_user_total_received_diamond($data['fb_id']);
			

		 	    $user_data1['user_followers']=get_user_followers_count($data['fb_id']);
		  		$user_data1['user_following']=get_user_following_count($data['fb_id']);
				$user_data1['user_hearts']=get_user_hearts_count($data['fb_id']);
		 	  	//$user_data1['user_hearts']=get_user_hearts_count($row['fb_id']);
		 
	         array_push($user_data,$user_data1);
	       }
	   
	     $output = array( 'status'=>200,'code'=>true, 'user_data'=> $user_data);
	    }else
	    { 
            $output = array( 'status'=>500,'code'=>false, 'data'=> '')  ; 
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
            $sender_diamond = mysqli_query($conn,"select total_diamondd,total_earning from users where fb_id = '$s_fb_id' and user_type=0");
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
        
	    $query          = mysqli_query($conn,"select * from users WHERE  mobile = '$mobile' ");
	    if(mysqli_num_rows($query) > 0)
	    {
	        $data   = mysqli_fetch_assoc($query);
			$message=urlencode("your OTP code is ".$otp );
	         if($data['block']==0){
			
	    $ch      = curl_init('http://msg.pwasms.com/app/smsapi/index.php?key=45F314C4D1AD47&campaign=0&routeid=69&type=text&contacts='.$mobile.'&senderid=SJSMTH&msg='.$message.'');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
         curl_exec($ch);
 
        curl_close($ch);
	       
	        $output = array( "code" => "200", "msg" => 'Already Registered','otp'=> $otp,'data' => $data);
	       }else{
	       	  $output = array( "code" => "202", "msg" => 'User block By Admin','data' => $data);
	       
	       } 
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
	        $data['action']='login';
	        if($data['block']==0){
	         $output = array( "code" => "200", "msg" => 'Already Registered','otp'=> $otp,'data' => $data);
	        }else{
	         $output = array( "code" => "202", "msg" => 'User block By Admin','data' => $data);
	        }
	    }else
	    { 
	      //   $output  = array( "code" => "200", "msg" => 'Now Registered','otp'=> $otp,'data' => $data);
	        
	        $fb_id    = rand(1000000000000000,10000000000000000);
	        $username = 'fworld'.$mobile;
	        $qrry_1="insert into users(fb_id2,mobile,username,signup_type)values(";
			$qrry_1.="'".$fb_id."',";
			$qrry_1.="'".$mobile."',";
			$qrry_1.="'".$username."',";
			$qrry_1.="'mobile'";
			$qrry_1.=")";
			//echo $qrry_1;
			mysqli_query($conn,$qrry_1)or die(mysqli_error($conn));
			$lastid=mysqli_insert_id($conn);
			if($lastid)
			{
			 $query   = mysqli_query($conn,"select * from users WHERE  fb_id = '$lastid' ");
			 $data    = mysqli_fetch_assoc($query);
	         $data['action']='signup';
	         $output  = array( "code" => "200", "msg" => 'Now Registered','otp'=> $otp,'data' => $data);
			}else
			{
             $output = array( "code" => "500", "msg" => 'something went wrong','otp'=> '');
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
            
            $selected_value_explde_array=explode(',',$row['user_wear_badge']);	 
			
			    $row['follow_Status']=get_follow_users_status($row['fb_id'], $fb_id);
		  	  	$row['vip_details']="";
		  	  	$row['vip_details']=get_user_vip_status($row['fb_id']);
		  		if($row['vip_details'])
		  		{
		  			$row['vip_status']="1";
		  		}	
		  		$row['user_level']=get_user_level($row['fb_id']);
		 		$row['user_live_level']=get_user_live_level($row['fb_id']);
		 
    			$row['vip_details_icon'] =get_user_vip_status_icon($row['fb_id']);
				$row['user_level_icon']= get_user_level_icon($row['fb_id']);	
			    $row['user_family_level_icon']=get_user_family_level_icon($row['fb_id']);	
				$row['guardian_shields_details_icon']=get_guardian_shields_icon($row['fb_id']);
		 	  


		 		$row['user_total_send_diamond']=get_user_total_send_diamond($row['fb_id']);
		  		$row['user_total_received_diamond']=get_user_total_received_diamond($row['fb_id']);
			

		 	    $row['user_followers']=get_user_followers_count($row['fb_id']);
		  		$row['user_following']=get_user_following_count($row['fb_id']);
				$row['user_hearts']=get_user_hearts_count($row['fb_id']);
		 	  
		 	  	$row['user_hearts']=get_user_hearts_count($row['fb_id']);
		  		
		  		$row['user_post']=get_user_post_count($row['fb_id']);
		 	
		 	  	$row['guardian_shields_details']="";
		 	  	$guardian_shield=get_guardian_shields($row['fb_id']);
		 	  	if($guardian_shield){
		 	  	$row['guardian_shields_status']="1";
		 	  	$row['guardian_shields_details']=$guardian_shield;
		 	  	}
		 	  	//$row['user_on_hoster_live_room']=get_user_on_hoster_live_room($row['fb_id']);
		 		//$row['user_on_join_live_room']=get_user_on_join_live_room($row['fb_id']);
		 	 	$row['is_user_on_live_room']="0";
		 		$row['user_on_live_room_data']="";
		 		$is_user_on_live_room=get_user_on_hoster_live_room($row['fb_id']);
		 		if($is_user_on_live_room){
		 	 	$row['is_user_on_live_room']="1";
		 		$row['user_on_live_room_data']=$is_user_on_live_room;
		 		}
		 		

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
          		$badges = array();
                 $query_all_badge = mysqli_query($conn,"SELECT * FROM `badge` WHERE badge_status = 'Active'  "); 
        	   // $badges=mysqli_fetch_all($query_all_badge, MYSQLI_ASSOC);
			   // foreach ($badges as $badge1) {
			
				 while($badge1 = mysqli_fetch_assoc($query_all_badge))
                {
               
						$sqli="select * from `users_badges` WHERE users_fb_id='$fb_id' and users_badges_badge_id=".$badge1['badge_id'];
						$datad=mysqli_query($conn,$sqli) or die(mysqli_error($conn));
						$old_badge=mysqli_fetch_assoc($datad);
				 $badge1['user_badge_url']=$server_url.$badge1['badge_blackandwhite'];		
                 $badge1['is_user_has_badge']="0";		
                 $badge1['is_user_wear_badge']="0";		
                
                 if($old_badge){
				 
				 $badge1['user_badge_url']=$server_url.$badge1['badge_color'];			
                 $badge1['is_user_has_badge']="1";		
            	
            	 if(in_array($old_badge['users_badges_badge_id'], $selected_value_explde_array)){
            	 $badge1['is_user_wear_badge']="1";		
                 }
                 
                 //$badges[] =  $badge1; 
                 }
                 array_push($badges,  $badge1);
                 
                }//while loop close 
                  
             $qrry_get_sl=" SELECT * FROM `users_gallary_images` WHERE users_gallary_image_fb_id= ".$fb_id;
			 $res_users_gallary_images=mysqli_query($conn,$qrry_get_sl);
 		   	 $users_gallary_images=mysqli_fetch_all($res_users_gallary_images, MYSQLI_ASSOC); 
		  
          
               if($topcontribution[0]['total'] == '' )
               {$totcontion = 0;}else{$totcontion=$topcontribution[0]['total'];}
                

                $order_data =mysqli_fetch_assoc(mysqli_query($conn,"select * from purchase_subscriptions_order WHERE  pso_fb_id = '$fb_id' "));
				$pos_is_active="0";
				if($order_data){
				$pos_is_active=$order_data['pos_is_active'];
				}
				if(empty($order_data)){
				
						$order_data ="";
				}			
     	
              
        $output = array( 'status'=>200,'code'=>true, 

    			'user_data'=> $data,
    			'top3_fans_user_data'=>user_top_fans($fb_id , '3'),
    			'top3_contribution_user_data'=>contribution_user_data($fb_id , '3'),
    			
    			 'topfanscount'=>$topfans[0]['total'],
              	 'topcontributioncount'=>$totcontion,
              	 'totalcoverpics' =>$topcoverpics[0]['total'],
              	 'my_total_video' => $my_total_video[0]['total'],
              	 'socail_link' => $socilLink ,
              	 'badges'=>	$badges ,
              	 'users_gallary_images'=>$users_gallary_images ,
              	 'is_active_purchase_subscriptions_order'=>$pos_is_active,
              	 'purchase_subscriptions_order'=>$order_data
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

//5_1_2021
 function getMylevel()
	{   
	    
	    require_once("config.php");
	    $img_url        = $GLOBALS['url'];
	    $input          = @file_get_contents("php://input");
	   	$event_json     = json_decode($input,true);
	    $array_out      = array();
	    $fb_id          = $event_json['fb_id'];
$user_data1   =  array();
$query1        = mysqli_query($conn,"select * from   users where fb_id = '$fb_id'");
$level_expo=0;
if(mysqli_num_rows($query1) > 0)
{
   $userdata = mysqli_fetch_assoc($query1);
	$level_expo=$userdata['total_expo'];
}   
        
        # CODE TO FIND MY LEVEL 
        $query99    = mysqli_query($conn,"SELECT * from level WHERE level_expo <= '$level_expo'
                                    ORDER BY level_id DESC LIMIT 1");
	    $mylevel_data=  array();
	    if(mysqli_num_rows($query99) > 0)
	    {
	       while($data99 = mysqli_fetch_assoc($query99))
	       {
	         $mylevel_data[] =  $data99; //mycurrent level  
	       }
	       
	    }    
        #END OF CODE TO FIND MY LEVEL
	   
	    $query          = mysqli_query($conn,"select level.* from level");
	    $level_data          =  array();
	    if(mysqli_num_rows($query) > 0)
	    {
	       while($data = mysqli_fetch_assoc($query))
	       {
	         $level_data[] =  $data;  
	       }
	   
	     $output = array( 'status'=>200,'code'=>true,'data'=>$userdata ,'my_level'=>$mylevel_data, 'list_of_level'=> $level_data);
	    }else
	    { 
            $output = array( 'status'=>500,'code'=>false, 'data'=> '')  ; 
	    }

		 print_r(json_encode($output, true));   
	}

//REKHA MAM 
	function get_contribute()
	{
	    //contribute->send kiya total
				
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
	
		if(isset($event_json['fb_id']))
		{
        
            
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));

			$sql="SELECT SUM(UBH.ubh_gift_total_diamond) as total   FROM `user_baggage_history` AS UBH JOIN users as U ON U.fb_id=UBH.ubh_fb_id WHERE  UBH.ubh_sender_fb_id='".$fb_id."' ";			       
			  $total=mysqli_fetch_assoc(mysqli_query($conn,$sql))['total'];//or die(mysqli_error($conn));
	     	
	     	if(!$total){
	     		$total=0;
	     	}

 

		    //$query=mysqli_query($conn,"select *,sum(diamonds) as topdiamonds from view_contributer where sender_id='".$fb_id."'  group by reciever_id  order by sum(diamonds) DESC")or die(mysqli_error());
			 
			 $sql="SELECT UBH.ubh_fb_id as reciever_id , SUM(UBH.ubh_gift_total_diamond) as topdiamonds   FROM `user_baggage_history` AS UBH JOIN users as U ON U.fb_id=UBH.ubh_fb_id WHERE  UBH.ubh_sender_fb_id='".$fb_id."' GROUP BY reciever_id  order BY topdiamonds DESC";			       

			 //$sql="SELECT UBH.ubh_sender_fb_id as reciever_id , SUM(UBH.ubh_gift_total_diamond) as topdiamonds   FROM `user_baggage_history` AS UBH JOIN users as U ON U.fb_id=UBH.ubh_fb_id WHERE  UBH.ubh_fb_id='1000073' GROUP BY reciever_id  order BY topdiamonds DESC";
			$query=mysqli_query($conn,$sql);
	     	$array_out = array();
			
	     	while($srow=mysqli_fetch_assoc($query))
    		{
    			//print_r($srow);	
    			//$row=array();
             	$reciever_id=$srow['reciever_id'];
		       	
		       	$sql="SELECT * FROM users where `fb_id`='$reciever_id'";
				$query2=mysqli_query($conn,$sql);
				$row=mysqli_fetch_assoc($query2);
    			$row['reciever_id']=$srow['reciever_id'];
		  	  	$row['topdiamonds']=$srow['topdiamonds'];
		  	  	

	            $selected_value_explde_array=explode(',',$row['user_wear_badge']);	 
			

			    $row['follow_Status']=get_follow_users_status($row['fb_id'], $fb_id);
		  	  	$row['vip_details']=get_user_vip_status($row['fb_id']);
		  		$row['user_level']=get_user_level($row['fb_id']);
		 		$row['user_live_level']=get_user_live_level($row['fb_id']);
		 		
				$row['user_total_send_diamond']=get_user_total_send_diamond($row['fb_id']);
		  		$row['user_total_received_diamond']=get_user_total_received_diamond($row['fb_id']);
	

		 	    $row['user_followers']=get_user_followers_count($row['fb_id']);
		  		$row['user_following']=get_user_following_count($row['fb_id']);
				$row['user_hearts']=get_user_hearts_count($row['fb_id']);
		 	
		 	  	$row['user_post']=get_user_post_count($row['fb_id']);
		 	

		 	  	$guardian_shield=get_guardian_shields($row['fb_id']);
		 	  	if($guardian_shield){
		 	  	$row['guardian_shields_status']="1";
		 	  	$row['guardian_shields_details']=$guardian_shield;
		 	  	}
		 	  	//$row['user_on_hoster_live_room']=get_user_on_hoster_live_room($row['fb_id']);
		 		//$row['user_on_join_live_room']=get_user_on_join_live_room($row['fb_id']);
		 	 	$row['is_user_on_live_room']="0";
		 		$row['user_on_live_room_data']="";
		 		$is_user_on_live_room=get_user_on_hoster_live_room($row['fb_id']);
		 		if($is_user_on_live_room){
		 	 	$row['is_user_on_live_room']="1";
		 		$row['user_on_live_room_data']=$is_user_on_live_room;
		 		}
		     	$row['famliy_tag_icon']='/custom_uploads/family_tag_icon/familytag.png'; 	
		    	$row['vip_details_icon'] =get_user_vip_status_icon($row['fb_id']);
			    $row['user_level_icon']= get_user_level_icon($row['fb_id']);	
			    $row['user_family_level_icon']=    get_user_family_level_icon($row['fb_id']);	
			
		       	     array_push($array_out,$row );
		            
		     //  $array_out =; 
     	   

    		}
	        
		    $output=array( "code" => "200", "data" => array( 'total'=>$total, 'list' => $array_out));
    	
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

function get_topfans()
	{
	 //top funs -> gift reciver

	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json); die;
	
		if(isset($event_json['fb_id']))
		{
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
		
		//    $query2=mysqli_query($conn,"select *,sum(diamonds) as topdiamonds from view_top_fan as vtf   where vtf.reciever_id='".$fb_id."' group by sender_id  order by sum(diamonds) DESC limit 1")or die(mysqli_error()); 
 $sql="SELECT SUM(UBH.ubh_gift_total_diamond) as total   FROM `user_baggage_history` AS UBH JOIN users as U ON U.fb_id=UBH.ubh_fb_id WHERE  UBH.ubh_fb_id='".$fb_id."' ";			       
			  $total=mysqli_fetch_assoc(mysqli_query($conn,$sql))['total'];//or die(mysqli_error($conn));
	     	
	     	if(!$total){
	     		$total=0;
	     	}

            $sql="SELECT UBH.ubh_sender_fb_id as reciever_id , SUM(UBH.ubh_gift_total_diamond) as topdiamonds   FROM `user_baggage_history` AS UBH JOIN users as U ON U.fb_id=UBH.ubh_fb_id WHERE  UBH.ubh_fb_id='".$fb_id."' GROUP BY UBH.ubh_sender_fb_id  order BY topdiamonds DESC";			       
			  $query=mysqli_query($conn,$sql)or die(mysqli_error($conn));
	     	
    		$array_out = array();
			
    		while($srow=mysqli_fetch_assoc($query))
    		{
                
    		 //print_r($srow);		
    			$row=array();
    			$sender_id=$srow['reciever_id'];
		      
		       	$sql="SELECT * FROM users where `fb_id`='$sender_id'";
				$query2=mysqli_query($conn,$sql);
				$row=mysqli_fetch_assoc($query2);
    		
    		 	$row['reciever_id']=$srow['reciever_id'];
		  	  	$row['topdiamonds']=$srow['topdiamonds'];
		  	  
	            $selected_value_explde_array=explode(',',$row['user_wear_badge']);	 
			
			    $row['follow_Status']=get_follow_users_status($row['fb_id'], $fb_id);
		  	  	$row['vip_details']=get_user_vip_status($row['fb_id']);
		  		$row['user_level']=get_user_level($row['fb_id']);
		 		$row['user_live_level']=get_user_live_level($row['fb_id']);
		 		
		 		$row['user_total_send_diamond']=get_user_total_send_diamond($row['fb_id']);
		  		$row['user_total_received_diamond']=get_user_total_received_diamond($row['fb_id']);
			

		 	    $row['user_followers']=get_user_followers_count($row['fb_id']);
		  		$row['user_following']=get_user_following_count($row['fb_id']);
				$row['user_hearts']=get_user_hearts_count($row['fb_id']);
		 	  
		 	  	$row['user_post']=get_user_post_count($row['fb_id']);
		 	

		 	  	$guardian_shield=get_guardian_shields($row['fb_id']);
		 	  	if($guardian_shield){
		 	  	$row['guardian_shields_status']="1";
		 	  	$row['guardian_shields_details']=$guardian_shield;
		 	  	}
		 	 	$row['is_user_on_live_room']="0";
		 		$row['user_on_live_room_data']="";
		 		$is_user_on_live_room=get_user_on_hoster_live_room($row['fb_id']);
		 		if($is_user_on_live_room){
		 	 	$row['is_user_on_live_room']="1";
		 		$row['user_on_live_room_data']=$is_user_on_live_room;
		 		}
		       	$row['vip_details_icon'] =get_user_vip_status_icon($row['fb_id']);
			    $row['user_level_icon']= get_user_level_icon($row['fb_id']);	
			    $row['user_family_level_icon']=    get_user_family_level_icon($row['fb_id']);	
			

		       	   //	$sresult = array_merge($srow,$row);
		       	     array_push($array_out,$row );
		           //	$array_out[]=$sresult;
			
				
		      // $array_out[] =$row;
    		   /* 
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
        		*/      
    		}
	        
		    $output=array( "code" => "200", "data" => array( 'total'=>$total, 'list' => $array_out));
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


    //5_2_2021
	function TOP_STAR_mode($fb_id=null,$ranking_mode , $ranking_type){
	        //NOTE: ubh_fb_id
	        include("config.php");

	        if($ranking_mode =="Daily")	
	        {
				$todaydate=custom_current_date();
				$sqli="SELECT UBH.ubh_fb_id, sum(UBH.ubh_gift_total_diamond) as r_diamond ,fb_id,mobile,first_name,last_name,profile_pic,user_wear_badge,total_diamondd,total_earning,total_expo,total_beans,total_silver_coin,vip_status FROM `user_baggage_history` AS UBH JOIN users as U ON U.fb_id=UBH.ubh_fb_id WHERE `ubh_cr_date` LIKE '$todaydate%' GROUP BY UBH.ubh_fb_id order BY r_diamond DESC";
			
			}

			if($ranking_mode =="Weekly")	
	        {
				//$todaydate=custom_current_date();
			 $sqli="SELECT UBH.ubh_fb_id, sum(UBH.ubh_gift_total_diamond) as r_diamond ,fb_id,mobile,first_name,last_name,profile_pic,user_wear_badge,total_diamondd,total_earning,total_expo,total_beans,total_silver_coin,vip_status FROM `user_baggage_history` AS UBH JOIN users as U ON U.fb_id=UBH.ubh_fb_id WHERE  yearweek(DATE(ubh_cr_date), 1) = yearweek(curdate(), 1) GROUP BY UBH.ubh_fb_id order BY r_diamond DESC ";
			
			}

			if($ranking_mode =="Monthly")	
	        {
				$todaydate=custom_current_date();
				$wise_check=date("Y-m" ,strtotime($todaydate));
		  	
				$sqli="SELECT UBH.ubh_fb_id, sum(UBH.ubh_gift_total_diamond) as r_diamond ,fb_id,mobile,first_name,last_name,profile_pic,user_wear_badge,total_diamondd,total_earning,total_expo,total_beans,total_silver_coin,vip_status FROM `user_baggage_history` AS UBH JOIN users as U ON U.fb_id=UBH.ubh_fb_id WHERE `ubh_cr_date` LIKE '$wise_check%' GROUP BY UBH.ubh_fb_id order BY r_diamond DESC ";
			
			}	
				$result=mysqli_query($conn,$sqli) or die(mysqli_error($conn));
		        $userdata=mysqli_fetch_all($result, MYSQLI_ASSOC); 
		       
		        $rankwisedata=array();
		        $top_rank=1;
		  	foreach ($userdata as $value) {
		  			# code...
		  		
		  		$value['top_rank']=$top_rank;
		  		$value['follow_Status']=get_follow_users_status($value['fb_id'], $ulrd_fb_id);
		  	 	$value['vip_details']="";
		  		$vip=get_user_vip_status($value['fb_id']);
		  	    if($vip){
		  	  	$value['vip_status']= "1";
		  	  	$value['vip_details']=$vip;
		  	  	}
		  	  	$value['user_level']=get_user_level($value['fb_id']);
		  		$value['user_followers']=get_user_followers_count($value['fb_id']);
		  		$value['user_following']=get_user_following_count($value['fb_id']);
				$value['user_hearts']=get_user_hearts_count($value['fb_id']);
		 	  
		 	  	$value['user_post']=get_user_post_count($value['fb_id']);

             	$value['famliy_tag_icon']='/custom_uploads/family_tag_icon/familytag.png'; 	

             	$value['user_total_send_diamond']=get_user_total_send_diamond($value['fb_id']);
		  		$value['user_total_received_diamond']=get_user_total_received_diamond($value['fb_id']);
			  	$value['vip_details_icon'] =get_user_vip_status_icon($value['fb_id']);
			    $value['user_level_icon']= get_user_level_icon($value['fb_id']);	
			    $value['user_family_level_icon']=    get_user_family_level_icon($value['fb_id']);	
					  
	
		  		array_push($rankwisedata,$value);
		  		$top_rank++;
		  		}	
		  		if($rankwisedata){
			    $msg_out="Rank Wise User Data";	
			 return	$output=array( "code" => "200", "msg" => $msg_out , "ranking_mode"=>$ranking_mode , "ranking_type" =>$ranking_type, "data"=> $rankwisedata);
				}else{
				$msg_out="Rank Wise User Data Not Found ";
			 return	$output=array( "code" => "200", "msg" => $msg_out , "ranking_mode"=>$ranking_mode , "ranking_type" =>$ranking_type,  "data"=> array()  );
				}

	}

//13_4_2021

	function TOP_STAR_ONLY_LIVE($fb_id=null,$ranking_mode , $ranking_type){
	        //NOTE: ubh_fb_id
	        
	        include("config.php");
			if($ranking_mode =="Todays")	
	        {
				$todaydate=custom_current_date();
				$sqli="SELECT UBH.ubh_fb_id, SUM(UBH.ubh_gift_total_diamond) as r_diamond ,fb_id,mobile,first_name,last_name,profile_pic,user_wear_badge,total_diamondd,total_earning,total_expo,total_beans,total_silver_coin,vip_status FROM `user_baggage_history` AS UBH JOIN users as U ON U.fb_id=UBH.ubh_fb_id JOIN  user_live_room_details as ULRD ON ULRD.ulrd_id=UBH.ubh_type_id WHERE UBH.ubh_type='LIVEROOM' AND UBH.ubh_cr_date LIKE '$todaydate%' AND ULRD.ulrd_cr_date LIKE '$todaydate%'  GROUP BY UBH.ubh_fb_id order BY r_diamond DESC ";
			
			}

			if($ranking_mode =="Overall")	
	        {
				//$todaydate=custom_current_date();
			 $sqli="SELECT UBH.ubh_fb_id, SUM(UBH.ubh_gift_total_diamond) as r_diamond ,fb_id,mobile,first_name,last_name,profile_pic,user_wear_badge,total_diamondd,total_earning,total_expo,total_beans,total_silver_coin,vip_status FROM `user_baggage_history` AS UBH JOIN users as U ON U.fb_id=UBH.ubh_fb_id JOIN user_live_room_details as ULRD ON ULRD.ulrd_id=UBH.ubh_type_id WHERE UBH.ubh_type='LIVEROOM' GROUP BY UBH.ubh_fb_id order BY r_diamond DESC";
			
			}

			
				$result=mysqli_query($conn,$sqli) or die(mysqli_error($conn));
		        $userdata=mysqli_fetch_all($result, MYSQLI_ASSOC); 
		       
		        $rankwisedata=array();
		        $top_rank=1;
		  	foreach ($userdata as $value) {
		  			# code...
		  		
		  		$value['top_rank']=$top_rank;
		  		$value['follow_Status']=get_follow_users_status($value['fb_id'], $ulrd_fb_id);
		  	 	

		  	 	$value['vip_details']="";
		  		$vip=get_user_vip_status($value['fb_id']);
		  	    if($vip){
		  	  	$value['vip_status']= "1";
		  	  	$value['vip_details']=$vip;
		  		}
		  	  	$value['user_level']=get_user_level($value['fb_id']);
		  		$value['user_followers']=get_user_followers_count($value['fb_id']);
		  		$value['user_following']=get_user_following_count($value['fb_id']);
				$value['user_hearts']=get_user_hearts_count($value['fb_id']);
		 	  
		 	  	$value['user_post']=get_user_post_count($value['fb_id']);

             	$value['famliy_tag_icon']='/custom_uploads/family_tag_icon/familytag.png'; 	

             	$value['user_total_send_diamond']=get_user_total_send_diamond($value['fb_id']);
		  		$value['user_total_received_diamond']=get_user_total_received_diamond($value['fb_id']);
			  	$value['vip_details_icon'] =get_user_vip_status_icon($value['fb_id']);
			    $value['user_level_icon']= get_user_level_icon($value['fb_id']);	
			    $value['user_family_level_icon']=    get_user_family_level_icon($value['fb_id']);	
					  
	
		  		array_push($rankwisedata,$value);
		  		$top_rank++;
		  		}	
		  		if($rankwisedata){
			    $msg_out="Rank Wise User Data";	
				 return	$output=array( "code" => "200", "msg" => $msg_out , "ranking_mode"=>$ranking_mode , "ranking_type" =>$ranking_type, "data"=> $rankwisedata);
				}else{
				$msg_out="Rank Wise User Data Not Found ";
			 	 return	$output=array( "code" => "200", "msg" => $msg_out , "ranking_mode"=>$ranking_mode , "ranking_type" =>$ranking_type, "data"=> array()  );
				}

	}


//13_4_2021
	function Top_GIFTER_mode($fb_id=null,$ranking_mode , $ranking_type){
	        //NOTE: ubh_sender_fb_id
	        include("config.php");

// yearweek(DATE(follow_users_cr_date), 1) = yearweek(curdate(), 1)
	        if($ranking_mode =="Daily")	
	        {
				$todaydate=custom_current_date();
				$sqli="SELECT UBH.ubh_sender_fb_id, SUM(UBH.ubh_gift_total_diamond) as r_diamond ,fb_id,mobile,first_name,last_name,profile_pic,user_wear_badge,total_diamondd,total_earning,total_expo,total_beans,total_silver_coin,vip_status FROM `user_baggage_history` AS UBH JOIN users as U ON U.fb_id=UBH.ubh_sender_fb_id WHERE `ubh_cr_date` LIKE '$todaydate%' GROUP BY UBH.ubh_sender_fb_id order BY r_diamond DESC ";
			
			}

			if($ranking_mode =="Weekly")	
	        {
				//$todaydate=custom_current_date();
			 $sqli="SELECT UBH.ubh_sender_fb_id, SUM(UBH.ubh_gift_total_diamond) as r_diamond ,fb_id,mobile,first_name,last_name,profile_pic,user_wear_badge,total_diamondd,total_earning,total_expo,total_beans,total_silver_coin,vip_status FROM `user_baggage_history` AS UBH JOIN users as U ON U.fb_id=UBH.ubh_sender_fb_id WHERE  yearweek(DATE(ubh_cr_date), 1) = yearweek(curdate(), 1) GROUP BY UBH.ubh_sender_fb_id order BY r_diamond DESC ";
			
			}

			if($ranking_mode =="Monthly")	
	        {
				$todaydate=custom_current_date();
				$wise_check=date("Y-m" ,strtotime($todaydate));
		  	
				$sqli="SELECT UBH.ubh_sender_fb_id, SUM(UBH.ubh_gift_total_diamond) as r_diamond ,fb_id,mobile,first_name,last_name,profile_pic,user_wear_badge,total_diamondd,total_earning,total_expo,total_beans,total_silver_coin,vip_status FROM `user_baggage_history` AS UBH JOIN users as U ON U.fb_id=UBH.ubh_sender_fb_id WHERE `ubh_cr_date` LIKE '$wise_check%' GROUP BY UBH.ubh_sender_fb_id order BY r_diamond DESC ";
			
			}


			if($ranking_mode =="Overall")	
	        {
				
				$sqli="SELECT UBH.ubh_sender_fb_id, SUM(UBH.ubh_gift_total_diamond) as r_diamond ,fb_id,mobile,first_name,last_name,profile_pic,user_wear_badge,total_diamondd,total_earning,total_expo,total_beans,total_silver_coin,vip_status FROM `user_baggage_history` AS UBH JOIN users as U ON U.fb_id=UBH.ubh_sender_fb_id   GROUP BY UBH.ubh_sender_fb_id order BY r_diamond DESC ";
			
			}	
				$result=mysqli_query($conn,$sqli) or die(mysqli_error($conn));
		        $userdata=mysqli_fetch_all($result, MYSQLI_ASSOC); 
		       
		        $rankwisedata=array();
		        $top_rank=1;
		  	foreach ($userdata as $value) {
		  			# code...
		  		
		  		$value['top_rank']=$top_rank;
		  		$value['follow_Status']=get_follow_users_status($value['fb_id'], $ulrd_fb_id);
		  	 	$value['vip_details']="";
		  		$vip=get_user_vip_status($value['fb_id']);
		  	    if($vip){
		  		$value['vip_status']= "1";
		  	  	$value['vip_details']=$vip;
		  		}
		  	  	$value['user_level']=get_user_level($value['fb_id']);
		  		$value['user_followers']=get_user_followers_count($value['fb_id']);
		  		$value['user_following']=get_user_following_count($value['fb_id']);
				$value['user_hearts']=get_user_hearts_count($value['fb_id']);
		 	  
		 	  	$value['user_post']=get_user_post_count($value['fb_id']);

             	$value['famliy_tag_icon']='/custom_uploads/family_tag_icon/familytag.png'; 	

             	$value['user_total_send_diamond']=get_user_total_send_diamond($value['fb_id']);
		  		$value['user_total_received_diamond']=get_user_total_received_diamond($value['fb_id']);
		
			  	$value['vip_details_icon'] =get_user_vip_status_icon($value['fb_id']);
			    $value['user_level_icon']= get_user_level_icon($value['fb_id']);	
			    $value['user_family_level_icon']=    get_user_family_level_icon($value['fb_id']);	
					  
	
		  		array_push($rankwisedata,$value);
		  		$top_rank++;
		  		}	
		  		if($rankwisedata){
			    $msg_out="Rank Wise User Data";	
			     return	$output=array( "code" => "200", "msg" => $msg_out , "ranking_mode"=>$ranking_mode , "ranking_type" =>$ranking_type, "data"=> $rankwisedata);
				}else{
				$msg_out="Rank Wise User Data Not Found ";
			      return	$output=array( "code" => "200", "msg" => $msg_out , "ranking_mode"=>$ranking_mode , "ranking_type" =>$ranking_type, "data"=> array()  );
				}

	}


	function get_gifts_recivers_list(){
		require_once("config.php");
	    $input = @file_get_contents("php://input");
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
	}


	function get_gifters_list(){ 
		 require_once("config.php");
	    $input = @file_get_contents("php://input");
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}if(!isset($event_json['ranking_mode']) || $event_json['ranking_mode']==""){
				$msg_out="Parameter Error ranking_mode Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}if(!isset($event_json['ranking_type']) || $event_json['ranking_type']==""){
				$msg_out="Parameter Error ranking_type Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			$fb_id=$event_json['fb_id'];
			$ranking_mode=$event_json['ranking_mode'];
			$ranking_type=$event_json['ranking_type'];
			$sqli=null;
			if(strcasecmp("today",$ranking_type)==0){
				$todaysDate=$date=date("Y-m-d");
				if(strcasecmp("LIVEROOM",$ranking_mode)==0){
					$sqli = "SELECT UBH.ubh_sender_fb_id, SUM(UBH.ubh_gift_total_diamond) as r_diamond ,fb_id,mobile,first_name,last_name,profile_pic,user_wear_badge,total_diamondd,total_earning,total_expo,total_beans,total_silver_coin,vip_status FROM `user_baggage_history` AS UBH JOIN users as U ON U.fb_id=UBH.ubh_sender_fb_id where UBH.ubh_fb_id='$fb_id' and ubh_type='LIVEROOM' and ubh_cr_date like '$todaysDate%'  GROUP BY UBH.ubh_sender_fb_id order BY r_diamond DESC";	
				}else if(strcasecmp("CHAT",$ranking_mode)==0){
				$sqli = "SELECT UBH.ubh_sender_fb_id, SUM(UBH.ubh_gift_total_diamond) as r_diamond ,fb_id,mobile,first_name,last_name,profile_pic,user_wear_badge,total_diamondd,total_earning,total_expo,total_beans,total_silver_coin,vip_status FROM `user_baggage_history` AS UBH JOIN users as U ON U.fb_id=UBH.ubh_sender_fb_id where UBH.ubh_fb_id='$fb_id' and ubh_type <> 'LIVEROOM' and ubh_cr_date like '$todaysDate%'  GROUP BY UBH.ubh_sender_fb_id order BY r_diamond DESC";
				}else if(strcasecmp("all",$ranking_mode)==0){
					$sqli = "SELECT UBH.ubh_sender_fb_id, SUM(UBH.ubh_gift_total_diamond) as r_diamond ,fb_id,mobile,first_name,last_name,profile_pic,user_wear_badge,total_diamondd,total_earning,total_expo,total_beans,total_silver_coin,vip_status FROM `user_baggage_history` AS UBH JOIN users as U ON U.fb_id=UBH.ubh_sender_fb_id where UBH.ubh_fb_id='$fb_id' and ubh_cr_date like '$todaysDate%'  GROUP BY UBH.ubh_sender_fb_id order BY r_diamond DESC";
				}
			}else if(strcasecmp("overall",$ranking_type)==0){
				if(strcasecmp("LIVEROOM",$ranking_mode)==0){
					$sqli = "SELECT UBH.ubh_sender_fb_id, SUM(UBH.ubh_gift_total_diamond) as r_diamond ,fb_id,mobile,first_name,last_name,profile_pic,user_wear_badge,total_diamondd,total_earning,total_expo,total_beans,total_silver_coin,vip_status FROM `user_baggage_history` AS UBH JOIN users as U ON U.fb_id=UBH.ubh_sender_fb_id where UBH.ubh_fb_id='$fb_id' and ubh_type='LIVEROOM'  GROUP BY UBH.ubh_sender_fb_id order BY r_diamond DESC";	
				}else if(strcasecmp("CHAT",$ranking_mode)==0){
				$sqli = "SELECT UBH.ubh_sender_fb_id, SUM(UBH.ubh_gift_total_diamond) as r_diamond ,fb_id,mobile,first_name,last_name,profile_pic,user_wear_badge,total_diamondd,total_earning,total_expo,total_beans,total_silver_coin,vip_status FROM `user_baggage_history` AS UBH JOIN users as U ON U.fb_id=UBH.ubh_sender_fb_id where UBH.ubh_fb_id='$fb_id' and ubh_type <> 'LIVEROOM'  GROUP BY UBH.ubh_sender_fb_id order BY r_diamond DESC";
				}else if(strcasecmp("all",$ranking_mode)==0){
					$sqli = "SELECT UBH.ubh_sender_fb_id, SUM(UBH.ubh_gift_total_diamond) as r_diamond ,fb_id,mobile,first_name,last_name,profile_pic,user_wear_badge,total_diamondd,total_earning,total_expo,total_beans,total_silver_coin,vip_status FROM `user_baggage_history` AS UBH JOIN users as U ON U.fb_id=UBH.ubh_sender_fb_id where UBH.ubh_fb_id='$fb_id'  GROUP BY UBH.ubh_sender_fb_id order BY r_diamond DESC";
				}
			}
			
			$result=mysqli_query($conn,$sqli) or die(mysqli_error($conn));
			$userdata=mysqli_fetch_all($result, MYSQLI_ASSOC); 
		   
			$rankwisedata=array();
			$top_rank=1;
		  foreach ($userdata as $value) {
				  # code...
			  
			  $value['top_rank']=$top_rank;
			  $value['follow_Status']=get_follow_users_status($value['fb_id'], $ulrd_fb_id);
			   $value['vip_details']="";
			  $vip=get_user_vip_status($value['fb_id']);
			  if($vip){
			  $value['vip_status']= "1";
				$value['vip_details']=$vip;
			  }
				$value['user_level']=get_user_level($value['fb_id']);
			  $value['user_followers']=get_user_followers_count($value['fb_id']);
			  $value['user_following']=get_user_following_count($value['fb_id']);
			$value['user_hearts']=get_user_hearts_count($value['fb_id']);
		   
			   $value['user_post']=get_user_post_count($value['fb_id']);

			 $value['famliy_tag_icon']='/custom_uploads/family_tag_icon/familytag.png'; 	

			 $value['user_total_send_diamond']=get_user_total_send_diamond($value['fb_id']);
			  $value['user_total_received_diamond']=get_user_total_received_diamond($value['fb_id']);
	
			  $value['vip_details_icon'] =get_user_vip_status_icon($value['fb_id']);
			$value['user_level_icon']= get_user_level_icon($value['fb_id']);	
			$value['user_family_level_icon']=    get_user_family_level_icon($value['fb_id']);	
				  

			  array_push($rankwisedata,$value);
			  $top_rank++;
			  }	
			  if($rankwisedata){
			$msg_out="Rank Wise User Data";	
			$output=array( "code" => "200", "msg" => $msg_out , "ranking_mode"=>$ranking_mode , "ranking_type" =>$ranking_type, "data"=> $rankwisedata);
			}else{
			$msg_out="Rank Wise User Data Not Found ";
			  $output=array( "code" => "200", "msg" => $msg_out , "ranking_mode"=>$ranking_mode , "ranking_type" =>$ranking_type, "data"=> array()  );
			}
			print_r(json_encode($output, true)); 
			exit();


	}



	function  MasterRanking()
	{
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
		   	
		
	
			if(!isset($event_json['ranking_type']) || $event_json['ranking_type']=="")
			{
				$msg_out="Validation Error ranking_type Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
	
			if(!isset($event_json['ranking_mode']) || $event_json['ranking_mode']=="") 
			{
				$msg_out="Validation Error ranking_mode Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
	
		 	$ranking_type=$event_json['ranking_type'];
			$ranking_mode=$event_json['ranking_mode'];
			$fb_id=$event_json['fb_id'];
        
		  	if($ranking_type =='TOP_STAR'){

		  		switch ($ranking_mode) {
		  			case 'Daily':
		  				# code...
		  			 $data_out=TOP_STAR_mode($fb_id ,$ranking_mode , $ranking_type); 
		  			 break;
		  			
		  		    case 'Weekly':
		  				# code...
		  			 $data_out=TOP_STAR_mode($fb_id ,$ranking_mode , $ranking_type); 
		  			break;
		  			
		  		    case 'Monthly':
		  				# code...
		  			 $data_out=TOP_STAR_mode($fb_id ,$ranking_mode , $ranking_type); 
		  			break;
		  		/*SELECT UBH.ubh_fb_id, COUNT(UBH.ubh_gift_total_diamond) as r_diamond ,fb_id,mobile,first_name,last_name,profile_pic,user_wear_badge,total_diamondd,total_earning,total_expo,total_beans,total_silver_coin,vip_status FROM `user_baggage_history` AS UBH JOIN users as U ON U.fb_id=UBH.ubh_fb_id WHERE `ubh_cr_date` LIKE '2021-06-17%' GROUP BY UBH.ubh_fb_id order BY r_diamond DESC;
SELECT UBH.ubh_fb_id, COUNT(UBH.ubh_gift_total_diamond) as r_diamond ,fb_id,mobile,first_name,last_name,profile_pic,user_wear_badge,total_diamondd,total_earning,total_expo,total_beans,total_silver_coin,vip_status FROM `user_baggage_history` AS UBH JOIN users as U ON U.fb_id=UBH.ubh_fb_id WHERE  yearweek(DATE(ubh_cr_date), 1) = yearweek(curdate(), 1) GROUP BY UBH.ubh_fb_id order BY r_diamond DESC
SELECT UBH.ubh_fb_id, COUNT(UBH.ubh_gift_total_diamond) as r_diamond ,fb_id,mobile,first_name,last_name,profile_pic,user_wear_badge,total_diamondd,total_earning,total_expo,total_beans,total_silver_coin,vip_status FROM `user_baggage_history` AS UBH JOIN users as U ON U.fb_id=UBH.ubh_fb_id WHERE `ubh_cr_date` LIKE '2021-06%' GROUP BY UBH.ubh_fb_id order BY r_diamond DESC*/
		  		}
		  
		  	}		
		  	else	
		  	if($ranking_type =='Top_GIFTER'){

		  		switch ($ranking_mode) {
		  			case 'Daily':
		  				# code...
		  			 $data_out=Top_GIFTER_mode($fb_id ,$ranking_mode , $ranking_type); 
		  			 break;
		  			
		  		    case 'Weekly':
		  				# code...
		  			 $data_out=Top_GIFTER_mode($fb_id ,$ranking_mode , $ranking_type); 
		  			break;
		  			
		  		    case 'Monthly':
		  				# code...
		  			 $data_out=Top_GIFTER_mode($fb_id ,$ranking_mode , $ranking_type); 
		  			break;
		  			
		  		    case 'Overall':
		  				# code...
		  			 $data_out=Top_GIFTER_mode($fb_id ,$ranking_mode , $ranking_type); 
		  			break;
		  			
		  		}
		  
		  	}			
			else	
		  	if($ranking_type =='TOP_STAR_ONLY_LIVE'){
		  		//GIFT LENE WALA

		  		switch ($ranking_mode) {
		  			case 'Todays':
		  				# code...
		  			 $data_out=TOP_STAR_ONLY_LIVE($fb_id ,$ranking_mode , $ranking_type); 
		  			 break;
		  			
		  		    case 'Overall':
		  				# code...
		  			 $data_out=TOP_STAR_ONLY_LIVE($fb_id ,$ranking_mode , $ranking_type); 
		  			break;
		  		
		  		}
		  
		  	}		
				

		    //$output=array( "code" => "200", "data" => $data_out);
			print_r(json_encode($data_out, true));
}


	function check_user_live_room_or_join_room_status(){
	
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			$fb_id=$event_json['fb_id'];
 		
 				$drow[]="";
			    $is_user_on_live_room=get_user_on_hoster_live_room($fb_id);
		 		if($is_user_on_live_room){
		 	 	$msg_out="Data found";
			    $output=array( "code" => "200", "msg" => $msg_out ,  "data"=>$is_user_on_live_room );
				print_r(json_encode($output, true)); 
				exit();
				}
				else{
				$msg_out="Data not found";
			    $output=array( "code" => "500", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
				}
	}       


	 	function present_user_in_live_or_join_room(){
	
		require_once("config.php");
        $input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		$event_json = json_decode($input,true);

	    	if(!isset($event_json['fb_id']) || $event_json['fb_id']=="") 
			{
				$msg_out="Validation Error fb_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			if(!isset($event_json['ulrd_id']) || $event_json['ulrd_id']=="") 
			{
				$msg_out="Validation Error ulrd_id Missing";
			    $output=array( "code" => "201", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
			}
			
			$fb_id=$event_json['fb_id'];
 			$ulrd_id=$event_json['ulrd_id'];
 		
 				
 				$live_or_join_room=get_user_on_hoster_live_room($fb_id);
		 		
		 		
 					$custom_current_date_time=custom_current_date_time();	
		 		
				$lastaction="No any action";
			
 				if($live_or_join_room){

 				   if(isset($live_or_join_room['ulrd_id']) && !isset($live_or_join_room['ujlrd_id'])){
 				   //join room list update		
 				   	$ulrd_id1=$live_or_join_room['ulrd_id'];
		 		   $qrry_get="update  user_live_room_details  set ulrd_isuser_pdatetime='$custom_current_date_time' WHERE ulrd_id = '$ulrd_id1' and ulrd_status='0'  and ulrd_isuser_online='0' ";
					$res=mysqli_query($conn,$qrry_get) or die(mysqli_error($conn));
 						$lastaction="Hoster room".$qrry_get;	
 					} //
				
					if(isset($live_or_join_room['ujlrd_id'])){
 				   //join room list update		
				    	$ujlrd_id1=$live_or_join_room['ujlrd_id'];
		 		    $qrry_get="update  user_join_live_room_details set ujlrd_isuser_pdatetime='$custom_current_date_time' WHERE ujlrd_id = '$ujlrd_id1' and ujlrd_status='0' and ujlrd_isuser_online='0' ";
					$res=mysqli_query($conn,$qrry_get) or die(mysqli_error($conn));
 					$data=mysqli_fetch_assoc($res); 
					$lastaction="Join room".$qrry_get;
					} //
				

				}


 				$is_user_on_live_room=get_user_on_hoster_live_room($fb_id);
				if($is_user_on_live_room){
		 	 	$msg_out="Data found";
			    $output=array( "code" => "200", "msg" => $msg_out , 
			    	"lastaction"=> $lastaction,  "data"=>$is_user_on_live_room );
				print_r(json_encode($output, true)); 
				exit();
				}
				else{
				$msg_out="Data not found";
			    $output=array( "code" => "500", "msg" => $msg_out ,  "data"=> "");
				print_r(json_encode($output, true)); 
				exit();
				}
	}       

	
	
?>

