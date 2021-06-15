<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("includes/header.php");






require("includes/function.php");

if(isset($_POST["submit"]) )
{
$server_path=$_SERVER['DOCUMENT_ROOT'];  
$badge_path="/custom_uploads/badges/";
     $id=$_POST['badge_id'];
     $badge_title=$_POST['badge_title'];
     //$inr=$_POST['inr'];
     $badge_status=$_POST['badge_status'];    
     $description = filter_input(INPUT_POST, 'badge_descriptions', FILTER_SANITIZE_STRING);
    $date=date('Y-m-d');
  
if($_POST["submit"]=="Update"){

    $badge_color_image="";
    if(isset($_FILES['badge_color']['name']) && $_FILES['badge_color']['name']!=""){
   
        $badge_color_icon=uniqid().$_FILES['badge_color']['name'];
     
        $temp=$_FILES['badge_color']['tmp_name'];
        if(move_uploaded_file($temp,$server_path.$badge_path.$badge_color_icon)){  
         $badge_color_image=$badge_path.$badge_color_icon;
         }else{
         // echo "eorr".die( 're');
         }   
  
    }

   
    $badge_blackandwhite_image="";
    if(isset($_FILES['badge_blackandwhite']['name']) && $_FILES['badge_blackandwhite']['name']!=""){
   
        $badge_blackandwhite_icon=uniqid().$_FILES['badge_blackandwhite']['name'];
     
        $temp=$_FILES['badge_blackandwhite']['tmp_name'];
        if(move_uploaded_file($temp,$server_path.$badge_path.$badge_blackandwhite_icon)){  
         $badge_blackandwhite_image=$badge_path.$badge_blackandwhite_icon;
         }
         else{
          //echo "eorr".die( 're');
         }   
  
    }



  $blackwhite_icon_sql="";
  $color_icon_sql="";
  if($badge_color_image!=""){
   $color_icon_sql=" badge_color='".$badge_color_image."' , ";
  }
  if($badge_blackandwhite_image!=""){
   $blackwhite_icon_sql=" badge_blackandwhite='".$badge_blackandwhite_image."' , ";
  }

   $extmsg="";
     $sql_p="";
       $sql1="update  badge SET
        badge_title='".$badge_title."' , 
        ".$blackwhite_icon_sql ."
        ".$color_icon_sql ."
        badge_status='".$badge_status."' , 
        badge_descriptions='".$description."'  
        where badge_id='".$id."'";
        $update1=mysqli_query($mysqli,$sql1) or die("updatet -".mysqli_error($mysqli));
          
          if($update1){
                //$statusMsg = "The file ".$fileName. " has been uploaded successfully.";
              $_SESSION['msg']=  $statusMsg = " Update   successfully ! ".$extmsg;
            }
            else
            {
             $_SESSION['msg']=   $statusMsg = " Not Update   successfully !";
            }
    //         $id_e=base64_encode($id);
          // header( "Location:edit_user.php?user_id=$id");
} //update

if($_POST["submit"]=="Create"){
   $extmsg="";
   
    $badge_color_image="";
    if(isset($_FILES['badge_color']['name']) && $_FILES['badge_color']['name']!=""){
   
        $badge_color_icon=uniqid().$_FILES['badge_color']['name'];
     
        $temp=$_FILES['badge_color']['tmp_name'];
        if(move_uploaded_file($temp, $server_path.$badge_path.$badge_color_icon)){  
         $badge_color_image=$badge_color_icon;
         }
         else{
          //echo "eorr".die( 're');
         }   
  
    }

   
    $badge_blackandwhite_image="";
    if(isset($_FILES['badge_blackandwhite']['name']) && $_FILES['badge_blackandwhite']['name']!=""){
   
        $badge_blackandwhite_icon=uniqid().$_FILES['badge_blackandwhite']['name'];
     
        $temp=$_FILES['badge_blackandwhite']['tmp_name'];
        if(move_uploaded_file($temp,$server_path.$badge_path.$badge_blackandwhite_icon)){  
         $badge_blackandwhite_image=$badge_path.$badge_blackandwhite_icon;
         }   
        else{
         // echo "eorr".die( 're');
         }
    }



       $sql1="INSERT INTO `badge`( `badge_title`,  `badge_descriptions`, `badge_status` ,`badge_blackandwhite` ,`badge_color`) VALUES (
        '".$badge_title."' , 
        '".$description."' ,
        '".$badge_status."' , 
        '".$badge_blackandwhite_image."' ,
        '".$badge_color_image."' 
        )";
        mysqli_query($mysqli,$sql1) or die("insert -".mysqli_error($mysqli));
         $lastid=mysqli_insert_id($mysqli);
          if($lastid){
             //$statusMsg = "The file ".$fileName. " has been uploaded successfully.";
              $_SESSION['msg']=  $statusMsg = " Record Added successfully ! ".$extmsg;
              header( "Location:addedit_badge.php?badge_id=".$lastid);
           }
           else
           {
             $_SESSION['msg']=   $statusMsg = "Record  Not Added  successfully !";
           }
    //         $id_e=base64_encode($id);
} //update

}

global $mysqli;
$h1="Add Badge";
if($_GET['badge_id']!='new' && $_GET['badge_id']!=''){
$h1="Update Badge";

$id=$_GET['badge_id'];
$sqli="select * from `badge` WHERE badge_id='$id'";
$data=mysqli_query($mysqli,$sqli) or die(mysqli_error($mysqli));
$row=mysqli_fetch_assoc($data);   
}
?>


<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1><?php echo $h1; ?></h1>
    <ol class="breadcrumb">
      <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><?php echo $h1; ?></li>
    </ol>
  </section>
  
  <?php include("includes/alert_section.php");  ?>  

 <!-- Main content -->
 <section class="content">
  
  
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Badge</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data">
              <input type="hidden" name="badge_id" value="<?php if(isset($row)){ echo $row['badge_id'];} ?>">
              <div class="box-body">
                
                <div class="form-group">
                  <label for="first_name"> Badge Title</label>
                  <input type="text" class="form-control" name="badge_title" id="title" placeholder="Enter level Name" required  value="<?php if(isset($row)){ echo $row['badge_title'];} ?>" >
                </div>
                
                <div class="form-group">
                  <label for="likes_count"> Icon Black and White </label>
				        <?php if(isset($row)){ ?>
                  <img src="<?php if(isset($row)){echo $row['badge_blackandwhite'];}?>" width="100" height="100">
                <?php } ?>
                  <input type="file" name="badge_blackandwhite" class="form-control" id="icon"  >
                </div>
 	
                <div class="form-group">
                  <label for="likes_count"> Icon Color </label>
                <?php if(isset($row)){ ?>
                  <img src="<?php if(isset($row)){echo $row['badge_color'];}?>" width="100" height="100">
                <?php } ?>
                  <input type="file" name="badge_color" class="form-control" id="icon"  >
                </div>
  
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea class="form-control" id="description" name="badge_descriptions" placeholder="Enter Des"><?php if(isset($row)){echo $row['badge_descriptions'];}?></textarea>
                </div> 

                <div class="form-group">
                    <label for="first_name"> Badge Status</label>
                  <select name="badge_status" class="form-control">
                    <?php 
                    $statu="";
                    if(isset($row)){ $statu=$row['badge_status'];} ?>
                    <?php echo get_status_dropdown($statu);?>
                  </select>
                 </div> 

             </div>
        
                <div class="box-footer">
                <input type="submit" name="submit" class="btn btn-primary" value="<?php   
if($_GET['badge_id']!='new' && $_GET['badge_id']!=''){ echo"Update"; }else{ echo "Create"; } ?>">
               <input type="reset" class="btn btn-danger" value="Cancel">
              </div>
           </from>


        </div> 
     </div>  
       


      <!-- left column -->
        <div class="col-md-6">
              

      
        </div> 
     </div>  

        

  </div> 
	
</section>
 <!-- close Main content -->
  


<?php include("includes/footer.php");?>       

