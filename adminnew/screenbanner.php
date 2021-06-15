<?php include("includes/header.php");

  require("includes/function.php");
 $BASE_PATH="http://18.188.65.45/";

  
if(isset($_POST["edit"])){
   $extmsg="";
   
    $scp_file_sql="";
    
    $screen_banner_status=$_POST['screen_banner_status'];

    if(isset($_FILES['scp_picture']['name']) && $_FILES['scp_picture']['name']!=""){
      $icon=$_FILES['scp_picture']['name'];
      $temp=$_FILES['scp_picture']['tmp_name'];
      $pp=$_SERVER["DOCUMENT_ROOT"]."/custom_uploads/screen_banner/".$icon;
     if(move_uploaded_file($temp,$pp)){
      $paht=$BASE_PATH."/custom_uploads/screen_banner/".$icon;
      $scp_file_sql=" `screen_banner_image` ='".$paht."' , ";
     
         $extmsg="Uplaoded image";
     }else{
         $extmsg="Error in Uplaod image";
     }
    }
  
      $id=1;
        $sql1="update  screen_banner SET
        $scp_file_sql
        screen_banner_status='$screen_banner_status' 
        where screen_banner_id='$id' ";
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
    //          header( "Location:edit_dierary_program.php?dierary_program_id=$id_e");
      //   exit;
    
}
  
//$tag=$_GET['tag'];
$tag=1;
 $sqli="select * from `screen_banner` WHERE screen_banner_id='$tag'";
$data=mysqli_query($mysqli,$sqli) or die(mysqli_error($mysqli));
$row=mysqli_fetch_assoc($data);   
?>



<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Screen banner</h1>
    <ol class="breadcrumb">
      <li><a href="vwDashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">add-edit-screen-banner</li>
    </ol>
  </section>
   <?php 
     if(isset($_SESSION['msg'])){
      echo " <div class='alert alert-success'> <strong>Success!</strong>".$_SESSION['msg']."</div>"; }

    ?>

 <!-- Main content -->
 <section class="content">
  
  
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Screen banner</h3>
            </div  >
            <?php   //echo $pp=$_SERVER["DOCUMENT_ROOT"]."/custom_uploads/screen_banner/".$icon;
    ?>
            <!-- /.box-header -->
            <!-- form start -->
                
                 <form role="form" method="post" enctype="multipart/form-data">
              <div class="box-body">
                
                 <div class="form-group">
                  <label for="scp_picture">Image</label>
                  <input type="file" name="scp_picture" class="form-control" id=""     >
                </div> 

              
              <div class="form-group">
                  <label for="mobile"> Permission </label>
                  <select id="3" class="form-control employee-search-input"  name="screen_banner_status" required>
                     <option value=""> Permission</option>
                        <option value="1" <?php if($row['screen_banner_status']==1){ echo 'selected'; }?> >ACTIVE</option>
                        <option value="0" <?php if($row['screen_banner_status']==0){ echo 'selected'; }?>>DACTIVE </option>
                        
                  </select>
              </div>  
              
             </div>
              <div class="box-footer">
                <input type="submit" name="edit" class="btn btn-primary" value="Update">
               <input type="reset" class="btn btn-danger" value="Cancel">
              </div>
          </form>
             
           </div> 
         </div>  
       

       <!-- left column -->
        <div class="col-md-6">
              <div class="box-body">
               <?php if($row['screen_banner_image']!=""){ ?>
               <img  src="<?php echo $row['screen_banner_image'];?>" alt="image" width="200"/>
                 <?php }else{ echo "Image not setup"; } ?>      
              </div>
             
            
        </div> 
     </div>  

        

  </div> 
	
</section>
 <!-- close Main content -->
  


<?php include("includes/footer.php");?>       

