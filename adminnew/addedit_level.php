<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("includes/header.php");
require("includes/function.php");

if(isset($_POST["submit"]) )
{
  $server_path=$_SERVER['DOCUMENT_ROOT'];  
  $level_path="/custom_uploads/level_icon/";
//icon
    $level_image="";
    if(isset($_FILES['icon']['name']) && $_FILES['icon']['name']!=""){
   
        $badge_color_icon=uniqid().$_FILES['icon']['name'];
     
        $temp=$_FILES['icon']['tmp_name'];
        if(move_uploaded_file($temp,$server_path.$level_path.$badge_color_icon)){  
         $level_image=$level_path.$badge_color_icon;
         }
    }

     $id=$_POST['level_id'];
     $level_tag=$_POST['level_tag'];
     $level_expo=$_POST['level_expo'];
     $level_name=$_POST['level_name'];
     //$inr=$_POST['inr'];
     $likes_count=$_POST['likes_count'];    
     $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
    $date=date('Y-m-d');

    
  
if($_POST["submit"]=="Update"){
  $icon_sql="";
  if($level_image!=""){
   $icon_sql=" icon='".$level_image."' , ";
  }


     $sql_p="";
       $sql1="update  level SET
        level_tag='".$level_tag."' , 
        level_expo='".$level_expo."' , 
        ".$icon_sql."     
        level_name='".$level_name."' , 
        likes_count='".$likes_count."' , 
        description='".$description."' , 
        date='".$date."'  
        where level_id='".$id."'";
        $update1=mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));
          
          if($update1){
                //$statusMsg = "The file ".$fileName. " has been uploaded successfully.";
              $_SESSION['success']=   " Update   successfully ! ".$sql_p;
            }
            else
            {
             $_SESSION['error']=    " Not Update   successfully !".$sql_p;
            }
    //         $id_e=base64_encode($id);
          // header( "Location:edit_user.php?user_id=$id");
} //update

if($_POST["submit"]=="Create"){
  $icon1="";
  if($level_image!=""){
   $icon1=$level_image;
  }
 
       $sql1="INSERT INTO `level`( `level_name`, `icon`, `likes_count`, `description`, `date` ,`level_tag`,`level_expo`) VALUES (
        '".$level_name."' , 
        '".$icon1."' ,
        '".$likes_count."' ,
        '".$description."' ,
        '".$level_tag."' ,
        '".$level_expo."' ,
        '".$date."'   

        )";
        mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));
         $lastid=mysqli_insert_id($mysqli);
          if($lastid){
                //$statusMsg = "The file ".$fileName. " has been uploaded successfully.";
              $_SESSION['success']=   " Record Added successfully ! ".$sql1;
              header( "Location:addedit_level.php?level_id=".$lastid);
           }
            else
            {
             $_SESSION['error']=  "Record  Not Added  successfully !".$sql1;
            }
    //         $id_e=base64_encode($id);
} //update

}

global $mysqli;
$h1="Add Level";
if($_GET['level_id']!='new'){
$h1="Update Level";

$id=$_GET['level_id'];
$sqli="select * from `level` WHERE level_id='$id'";
$data=mysqli_query($mysqli,$sqli) or die(mysqli_error($mysqli));
$row=mysqli_fetch_assoc($data);   
}
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
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Level</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data">
              <input type="hidden" name="level_id" value="<?php if(isset($row)){ echo $row['level_id'];} ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="first_name"> Date</label>
                  <input type="text" class="form-control" id="" placeholder="Enter Date" required  value="<?php if(isset($row['date']) && $row['date']!=""){ echo $row['date'];}else{ echo date('Y-m-d'); } ?>"  readonly>
                </div>
             
                <div class="form-group">
                  <label for="first_name"> Level Name</label>
                  <input type="text" class="form-control" name="level_name" id="title" placeholder="Enter level Name" required  value="<?php if(isset($row)){ echo $row['level_name'];} ?>" >
                </div>
              
                <div class="form-group">
                  <label for="first_name"> Level Tag</label>
                  <input type="text" class="form-control" name="level_tag" id="title" placeholder="Enter level tag" required  value="<?php if(isset($row)){ echo $row['level_tag'];} ?>" >
                </div>
              
                <div class="form-group">
                  <label for="first_name"> Level Expo</label>
                  <input type="text" class="form-control" name="level_expo" id="title" placeholder="Enter level Name" required  value="<?php if(isset($row)){ echo $row['level_expo'];} ?>" >
                </div>
             

                <div class="form-group" style="display: none;">
                  <label for="likes_count"> likes Count </label>
                  <input type="number" name="likes_count" class="form-control" id="inr" placeholder="Enter likes count" required  value="<?php if(isset($row)){echo $row['likes_count'];}?>">
                </div>
                <div class="form-group">
                  <label for="likes_count"> Icon </label>
				<?php if(isset($row)){ ?>
                  <img src="<?php if(isset($row)){echo BASEPATH.$row['icon'];}?>" width="50%">
                <?php } ?>
                  <input type="file" name="icon" class="form-control" id="icon"  >
                </div>
 	
                
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea class="form-control" id="description" name="description" placeholder="Enter Des"><?php if(isset($row)){echo $row['description'];}?></textarea>
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

