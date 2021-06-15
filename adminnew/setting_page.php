<?php 
include("includes/header.php");
require("includes/function.php");
if(isset($_POST["submit"]) && $_POST["submit"]=="Update"){
   $extmsg="";
   
    $scp_file_sql="";
    
    $id=$_POST['setting_tag_id'];
    
     $setting_tag_value = filter_input(INPUT_POST, 'setting_tag_value', FILTER_SANITIZE_STRING);
  
    
        $sql1="update  setting_tag SET
        $scp_file_sql
        setting_tag_value='".$setting_tag_value."' 
        where setting_tag_id='".$id."'";
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
}
 




$tag=$_GET['tag'];
$sqli="select * from `setting_tag` WHERE setting_tag_key='$tag'";
$data=mysqli_query($mysqli,$sqli) or die(mysqli_error($mysqli));
$row=mysqli_fetch_assoc($data);   

?>


<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Setting </h1>
    <ol class="breadcrumb">
      <li><a href="vwDashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">edit <?php echo $row['setting_tag_key'];?> setting </li>
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
              <h3 class="box-title">Setting <?php echo $row['setting_tag_key'];?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data">
              <input type="hidden" name="setting_tag_id" value="<?php echo $row['setting_tag_id'];?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="setting_tag_key"> Key </label>
                  <input type="text" class="form-control" id="setting_tag_key"  value="<?php echo $row['setting_tag_key'];?>" readonly>
                </div>
                
                <div class="form-group">
                  <label for="setting_tag_value"> Value </label>
                  <input type="text" name="setting_tag_value" class="form-control" id="setting_tag_value" placeholder="Enter First Name" required  value="<?php echo $row['setting_tag_value'];?>">
                </div>
              
              <div class="box-footer">
                <input type="submit" name="submit" class="btn btn-primary" value="Update">
               <input type="reset" class="btn btn-danger" value="Cancel">
             </div>
           </from>
           
        </div> 
     </div>  
       


      <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
           
     </div>  

        

  </div> 
	
</section>
 <!-- close Main content -->
  


<?php include("includes/footer.php");?>       

