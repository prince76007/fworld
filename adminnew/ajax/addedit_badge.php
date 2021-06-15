<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("includes/header.php");
require("includes/function.php");

if(isset($_POST["submit"]) )
{

     $id=$_POST['badge_id'];
     $badge_title=$_POST['badge_title'];
     //$inr=$_POST['inr'];
     $badge_status=$_POST['badge_status'];    
     $description = filter_input(INPUT_POST, 'badge_description', FILTER_SANITIZE_STRING);
    $date=date('Y-m-d');
  
if($_POST["submit"]=="Update"){

  $blackwhite_icon_sql="";
  $color_icon_sql="";

   $extmsg="";
     $sql_p="";
       $sql1="update  badge SET
        badge_title='".$badge_title."' , 
        ".$blackwhite_icon_sql ."
        ".$color_icon_sql ."
        badge_status='".$badge_status."' , 
        badge_description='".$description."' , 
        where badge_id='".$id."'";
        $update1=mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));
          
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
   $icon="";
       $sql1="INSERT INTO `badge`( `badge_title`,  `badge_description`, `badge_status`) VALUES (
        '".$badge_title."' , 
        '".$badge_description."' ,
        '".$badge_status."' ,
        )";
        mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));
         $lastid=mysqli_last_id($mysqli);
          if($lastid){
              
                //$statusMsg = "The file ".$fileName. " has been uploaded successfully.";
              $_SESSION['msg']=  $statusMsg = " Record Added successfully ! ".$extmsg;
              header( "Location:addedit_badge.php?level_id=".$lastid);
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
if($_GET['badge_id']!='new'){
$h1="Update Level";

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
                  <img src="<?php if(isset($row)){echo $row['badge_blackandwhite'];}?>">
                <?php } ?>
                  <input type="file" name="badge_blackandwhite" class="form-control" id="icon"  >
                </div>
 	
                <div class="form-group">
                  <label for="likes_count"> Icon Color </label>
                <?php if(isset($row)){ ?>
                  <img src="<?php if(isset($row)){echo $row['badge_color'];}?>">
                <?php } ?>
                  <input type="file" name="badge_color" class="form-control" id="icon"  >
                </div>
  
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea class="form-control" id="description" name="badge_description" placeholder="Enter Des"><?php if(isset($row)){echo $row['badge_description'];}?></textarea>
                </div> 

                <div class="form-group">
                    <label for="first_name"> Badge Status</label>
                  <select name="badge_status" class="form-control">
                    <?php echo get_status_dropdown(if(isset($row)){echo $row['badge_status'];});?>
                  </select>
                 </div> 

             </div>
        
                <div class="box-footer">
                <input type="submit" name="submit" class="btn btn-primary" value="<?php   
if($_GET['level_id']!='new'){ echo"Update"; }else{ echo "Create"; } ?>">
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

