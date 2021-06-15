
<?php

session_start();

if(!$_SESSION['usernam']){	
	header("location:../index.php");}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
  
   <script type="text/javascript">
   function val(){
	   
	   var i= document.getElementById('lname').value;
	   if(i==''){
		               alert("please select status");                 
		     document.getElementById('n_e').innerHTML='please enter name';
		     return false;  
		   }
		    var j= document.getElementById('').value;
	  
	    var j= document.getElementById('staus').value;
	    if(j==''){
		    alert("please select status");                         
		     document.getElementById('s_e').innerHTML='please enter name';
		     return false;  
		   }
   }
   
		      function val_inve(){alert("please select status");    
	   
	   var k= document.getElementById('iname').value;
	   if(k==''){
		               alert("please select status");                 
		     document.getElementById('n_e').innerHTML='please enter name';
		     return false;  
		   }
		    var j= document.getElementById('').value;
	  
	    var j= document.getElementById('status').value;
	    if(j==''){
		    alert("please select status");                         
		     document.getElementById('s_e').innerHTML='please enter name';
		     return false;  
		   }
			  }
	 
	   
   
   </script>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="abhishek@devzone.co.in">

     <title> Admin Panel </title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
    <!-- Add custom CSS here -->
    <link href="assets/css/arkadmin.css" rel="stylesheet">
      <!-- JavaScript -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/das.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo HTTP_JS_PATH; ?>html5shiv.js"></script>
      <script src="<?php echo HTTP_JS_PATH; ?>respond.min.js"></script>
    <![endif]-->
    <!--  

Author : Ankit jayswal 
Downloaded from http://infocentroid.com
-->  

    <!--  color box           --->
    
 <style>
			body{font:12px/1.2 Verdana, sans-serif; padding:0 10px;}
			
			h2{font-size:13px; margin:15px 0 0 0;}
		</style>
		<link rel="stylesheet" href="colorbox.css" />
		<script src="jquery1.10.2/jquery.min.js"></script>
		<script src="jq/jquery.colorbox.js"></script>
		

 <!--  color box  colse          --->


  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href=""> SUPER ADMIN Panel </a><div class="navbar-brand"> Welcome in bulls eyes <?php if(isset($_SESSION['usernam'])){ echo $u=$_SESSION['usernam']; } else{ header("locatioin:index.php");}?></div>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li ><a href="vwSDashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
             <li ><i class="fa fa-file"></i><a a href="vwManageProduct.php">PRODUCT MANEGMENT</a></li>         
            <li ><a href="upload_lead.php"><i class="fa fa-file"></i> upload lead</a></li>
              <li ><i class="fa fa-file"></i><a a href="vwLead.php">LEAD OPRATION </a></li>           
            <li ><a href="vmSegment.php"><i class="fa fa-file"></i>  SEGMENT</a></li>
              <li ><a href="vwinvestment.php"><i class="fa fa-file"></i> Investment</a></li>
              <li ><a href="vwpools.php"><i class="fa fa-file"></i> Pools</a></li>
           <!-- <li ><a href="vwManageProduct.php"><i class="fa fa-file"></i> Products / Plans</a></li>-->
            <li ><a href="vwManageUser.php"><i class="fa fa-file"></i>USER</a></li>
            
            <li ><a href="vwManageProduct.php"><i class="fa fa-file"></i> Free Trial</a></li>
           
             <li ><a href="vwManageProduct.php"><i class="fa fa-file"></i> Sales Order</a></li>
            
        
          </ul>

            <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown messages-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">7</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">
                7 New Messages</li> <?php 
				
				   include_once('connection.php');
			     $obj8 = new createConnection(); //i created a new object

    $obj8->connectToDatabase(); // connected to the database

	 $obj8->selectDatabase();//select db
			   
			   
			   $query= "SELECT * FROM `chat_massage`  WHERE  	assing_to= '$u'  ";


 // echo $query;
  $grid_rs=mysql_query($query) or die(mysql_error());
          if(mysql_num_rows($grid_rs)>0){}
			
			while($row=mysql_fetch_array($grid_rs))
    	{
				?>
                
               
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="../assets/images/placehold.png"></span>
                    <span class="name"><?php echo $row[0]; ?></span>
                    <span class="message">subject<?php echo $row[1]; ?><Br><?php echo $row[4]; ?>...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> <?php echo $row[3]; ?>4:34 PM</span>
                  </a>
                </li>
                <?php }
				
				$obj8->closeConnection();
				?>
                <!--<li class="divider"></li>
                <li class="divider"></li>
                <li><a href="#">View Inbox <span class="badge">7</span></a></li>
              </ul>
            </li>
            <li class="dropdown alerts-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Alerts <span class="badge">3</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Default <span class="label label-default">Default</span></a></li>
                <li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>
                <li><a href="#">Success <span class="label label-success">Success</span></a></li>
                <li><a href="#">Info <span class="label label-info">Info</span></a></li>
                <li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>
                <li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>
                <li class="divider"></li>
                
                ---->
                <li><a href="vwViewAllMassage.php">View All</a></li>
       
              </ul>
            </li>
            <li class="dropdown alerts-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Alerts <span class="badge">3</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Default <span class="label label-default">Default</span></a></li>
                <li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>
                <li><a href="#">Success <span class="label label-success">Success</span></a></li>
                <li><a href="#">Info <span class="label label-info">Info</span></a></li>
                <li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>
                <li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>
                <li class="divider"></li>
                <li><a href="#">View All</a></li>
              </ul>
            </li>
            <li class="dropdown user-dropdown">  

              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>logo  <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
                <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                <li class="divider"></li>
  
                <li><a href='../logout.php'><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
