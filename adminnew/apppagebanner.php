<?php include("includes/header.php");

 // require("includes/function.php");
$BASE_PATH="";
  
if(isset($_POST["edit"])){
   $extmsg="";
      $apb_id=$_POST['apb_id'];
      $apb_page=$_POST['apb_page'];
      $apb_url=$_POST['apb_url'];
   
    $scp_file_sql="";
    
    $apb_status=$_POST['apb_status'];

    if(isset($_FILES['scp_picture']['name']) && $_FILES['scp_picture']['name']!=""){
      $icon=$_FILES['scp_picture']['name'];
      $temp=$_FILES['scp_picture']['tmp_name'];
      $pp=$_SERVER["DOCUMENT_ROOT"]."/custom_uploads/app_pages_banner/".$icon;
     if(move_uploaded_file($temp,$pp)){
      $paht=$BASE_PATH."/custom_uploads/app_pages_banner/".$icon;
      $scp_file_sql=" `apb_image` ='".$paht."' , ";
     
         $extmsg="Uplaoded image";
     }else{
         $extmsg="Error in Uplaod image";
     }
    }
  
        $sql1="update  app_pages_banners SET
        $scp_file_sql
        apb_status='$apb_status' , 
        apb_url ='$apb_url'
        where apb_page='$apb_page' and apb_id='$apb_id'";
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
           header( "Location:apppagebanner.php?page=$apb_page");
      //   exit;
    
}

if(isset($_GET['page']) && $_GET['page']!=""){ 
$tag=$_GET['page'];
//$tag=;
$sqli="select * from `app_pages_banners` WHERE apb_page='$tag'";
$data=mysqli_query($mysqli,$sqli) or die(mysqli_error($mysqli));
$row=mysqli_fetch_assoc($data);   
}
?>



<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1><?php echo $row['apb_page'];?> banner</h1>
    <ol class="breadcrumb">
      <li><a href="vwDashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">add-edit-<?php echo $row['apb_page'];?>-banner</li>
    </ol>
  </section>

 <?php include("includes/alert_section.php");  ?> 

 <!-- Main content -->
 <section class="content">
  
  
    <div class="row">
        <?php if($row){ ?>
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo $row['apb_page'];?> banner</h3>
            </div  >
            <?php   //echo $pp=$_SERVER["DOCUMENT_ROOT"]."/custom_uploads/screen_banner/".$icon;
    ?>
            <!-- /.box-header -->
            <!-- form start -->
                
              <form role="form" method="post" enctype="multipart/form-data">
              <input type="hidden" name="apb_id" value="<?php echo $row['apb_id'];?>">
              <input type="hidden" name="apb_page" value="<?php echo $row['apb_page'];?>">

              <div class="box-body">
                
                 <div class="form-group">
                  <label for="scp_picture">Image</label>
                  <input type="file" name="scp_picture" class="form-control" id=""     >
                </div> 

                 <div class="form-group">
                  <label for="apb_url">Url</label>
                  <input type="text" name="apb_url" class="form-control"  value="<?php echo $row['apb_url'];?>" >
                </div> 
    
              
              <div class="form-group">
                  <label for="mobile"> Status </label>
                  <select id="3" class="form-control employee-search-input"  name="apb_status" required>
                     <option value=""> Status</option>
                        <option value="1" <?php if($row['apb_status']==1){ echo 'selected'; }?> >ACTIVE</option>
                        <option value="0" <?php if($row['apb_status']==0){ echo 'selected'; }?>>DACTIVE </option>
                        
                  </select>
              </div>  
              
             </div>
              <div class="box-footer">
                <input type="submit" name="edit" class="btn btn-primary" value="Update Banner">
               <input type="reset" class="btn btn-danger" value="Cancel">
              </div>
          </form>
             
           </div> 
         </div>  
       

       <!-- left column -->
        <div class="col-md-6">
              <div class="box-body">
               <?php if($row['apb_image']!=""){ ?>
               <img  src="http://3.128.105.101/<?php echo $row['apb_image'];?>" alt="image" width="200"/>
                 <?php }else{ echo "Image not setup"; } ?>      
              </div>
        </div> 
     </div>  

     <?php } ?>       

  </div> 
  
</section>
 <!-- close Main content -->
  


<?php include("includes/footer.php");?>       

