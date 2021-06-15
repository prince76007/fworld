<?php
 $url = 'http://ourhippy.com/fworlfinal/Admin%20panel/tictic/gift_img/';	

	if(isset($_GET["p"]))
	{

	if($_GET["p"]="AddSocailLin")
		{ 
		  //echo "ok";die;
			AddSocailLin();
		}
      

	}
	else
	{
		echo"Not Found";

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
      //echo $sql;die;
      $query3      = mysqli_query($conn,$sql);
        $feedback_id = mysqli_insert_id($conn);
      if(isset($feedback_id))
      {
    
      $output = array( 'status'=>200,'code'=>true, 'msg'=> 'Update Successfully done');  }
      else{
       $output = array( 'status'=>500,'code'=>false, 'msg'=> 'Something went wrong'); }
     
     print_r(json_encode($output, true));
      
	}
	
	
	
	
	
	

	
	

	
	?>
