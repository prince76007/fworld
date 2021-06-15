<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("includes/header.php");
require("includes/function.php");

if(isset($_POST["submit"]) )
{
     $id=$_POST['video_id'];
     $video_status=$_POST['video_status'];
    
  
if($_POST["submit"]=="Update"){
     $sql1="update videos SET
        video_status='".$video_status."'  
        where id='".$id."'";
        $update1=mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));
          
          if($update1){
                //$statusMsg = "The file ".$fileName. " has been uploaded successfully.";
              $_SESSION['success']=   " Update Status successfully ! ".$sql_p;
            }
            else
            {
             $_SESSION['error']=    " Not Update successfully !".$sql_p;
            }
    //         $id_e=base64_encode($id);
          // header( "Location:edit_user.php?user_id=$id");
} //update


}

global $mysqli;
$h1="Add video";
if($_GET['id']!='new'){
$h1="Update video";

$id=$_GET['id'];
$sqli="select * from `videos` WHERE id='$id'";
$data=mysqli_query($mysqli,$sqli) or die(mysqli_error($mysqli));
$row=mysqli_fetch_assoc($data);   
}
$sqli="select * from `video_comment` WHERE video_id='$id'";
$Cdata=mysqli_query($mysqli,$sqli) or die(mysqli_error($mysqli));
$video_comments=mysqli_fetch_all($Cdata, MYSQLI_ASSOC);   
      
?>


<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1><?php echo $h1; ?></h1>
    <ol class="breadcrumb">
      <li><a href="vwDashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><?php echo $h1; ?></li>
    </ol>
  </section>
  
  <?php include("includes/alert_section.php");  ?>  

 <!-- Main content -->
 <section class="content">
  
  
    <div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Video</h3>
            </div>
            <!-- /.box-header -->
             <div class="box-body with-border">
              
<h1></h1>
<BR/>
<video width="420" height="240" controls>
  <source src="<?php echo BASEPATH.'/API/'.$row['video'];?>" type="video/mp4">
  <source src="<?php echo BASEPATH.'/API/'.$row['thum'];?>" type="video/ogg">
  Your browser does not support the video tag.
</video>
          
          <Br/>  
          <Br/>  
          <Br/>  
          <p> Description: <?php echo $row['description'];?></p>   
          <Br/>
           </div>  
          </div> 
       </div>  
       


      <!-- left column -->
        <div class="col-md-4">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Video Details</h3>
            </div>
            <div class="box-body with-border">
           
            <!-- /.box-header -->
                <p> Fb id: <?php echo $row['fb_id'];?></p>   
                <p> Cr Date : <?php echo $row['created'];?></p>   
                <p> View : <?php echo $row['view'];?></p>   
                <p> Section: <?php echo $row['section'];?></p>   
                <p> Is private: <?php if($row['private_v']===1){ echo "Private"; }else{echo 'Public';}?></p>   
              
               <form action="" method="post">
                <div class="form-group">
                  <label for="mobile"> Status </label>
                    <input type="hidden" name="video_id" value="<?php echo $row['id'];?>">
                    <select name="video_status" class="form-control employee-search-input" required>
                       <option value=""> Status</option>
                          <option value="Block"  <?php if($row['video_status']=='Block'){ echo 'selected="selected"'; } ?>>Block</option>
                          <option value="Unblock"  <?php if($row['video_status']=='Unblock'){ echo 'selected="selected"'; } ?>>Unblock</option>
                    </select>
               </div>
                <input type="submit" value="Update" name="submit" class="btn btn-primary">
              </form>   
            </div>
          </div> 
        </div> 
     </div>  

       
    <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Video Comments</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body with-border">
              
              <?php  foreach($video_comments  as $video_comment){ ?>
                
                <hr/>
                <div style=""> 
                    <p>
                        <?php echo $video_comment['comments'];?>
                    </p>
                    <hr/>
                    <p class="pull-right"> 
                      <h5>- <?php echo $video_comment['fb_id'];?></h5>
                    </p>
                    <p class="pull-right"> 
                      <?php echo $video_comment['created'];?> 
                    </p>
                 </div> 
                  <br/>
              <?php  } ?>  
              <br/> 

              <br/>         
                   
            </div>
            <!-- /.box-body -->
            
          </div> 
        </div> 
     </div>  
   

  </div> 
	
</section>
 <!-- close Main content -->
  


<?php include("includes/footer.php");?>       

