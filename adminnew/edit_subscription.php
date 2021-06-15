<?php 
include("includes/header.php");
require("includes/function.php");
if(isset($_POST["submit"]) && $_POST["submit"]=="Update"){
   $extmsg="";
  

    if(isset($_FILES['scp_picture']['name']) && $_FILES['scp_picture']['name']!=""){
      $icon=time().trim($_FILES['scp_picture']['name']);
      $temp=$_FILES['scp_picture']['tmp_name'];
      $pp=$_SERVER["DOCUMENT_ROOT"]."/custom_uploads/vip/".$icon;
     if(move_uploaded_file($temp,$pp)){
      $paht=$BASE_PATH."/custom_uploads/vip/".$icon;
      $scp_file_sql=" `service_icon` ='".$paht."' , ";
     
         $extmsg="Uplaoded image";
     }else{
         $extmsg="Error in Uplaod image";
     }
    } 
    
    $id=$_POST['service_id'];
    
    $service_name=$_POST['service_name'];
    $service_badge_id=$_POST['service_badge_id'];
    $service_duration=$_POST['service_duration'];    
    $service_duration_type=$_POST['service_duration_type'];    
    
    $service_amount=$_POST['service_amount'];    
    $service_diamond=$_POST['service_diamond'];    
    
     
        $sql1="update  services SET
         $scp_file_sql
        service_name='".$service_name."' ,

        service_badge_id='".$service_badge_id."' ,
        service_duration='".$service_duration."' , 
        service_duration_type='".$service_duration_type."' , 
        service_amount='".$service_amount."' ,
        service_diamond='".$service_diamond."' 
        where service_id='".$id."'";
     //   total_diamondd='".$total_diamondd."'
     
        $update1=mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));
          
          if($update1){
                //$statusMsg = "The file ".$fileName. " has been uploaded successfully.";
             // header( "Location:subscriptions_list.php");
             $location="subscriptions_list.php"; 
              $_SESSION['msg']=  $statusMsg = " Update   successfully ! ".$extmsg;
               echo '<script>
                      window.location.href =("'.$location.'")
                    </script>'; 
            }
            else
            {
             //header( "Location:edit_subscription.php?subscription_id=".$id);
             $_SESSION['msg']=   $statusMsg = " Not Update   successfully !";
             $location="edit_subscription.php?subscription_id=".$id;
               echo '<script>
                      location.replace("'.$location.'")
                    </script>'; 
           }
    //         $id_e=base64_encode($id);
}
 




$id=$_GET['subscription_id'];
$sqli="select * from `services` WHERE service_id='$id'";
$data=mysqli_query($mysqli,$sqli) or die(mysqli_error($mysqli));
$row=mysqli_fetch_assoc($data);   

?>


<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>UPDATE Subscription</h1>
    <ol class="breadcrumb">
      <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">edit Subscription</li>
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
              <h3 class="box-title">Subscription</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data">
              <input type="hidden" name="service_id" value="<?php echo $row['service_id'];?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="service_name"> Subscription Name </label>
                  <input type="text" class="form-control" name="service_name" placeholder="Enter Service Name" required  value="<?php echo $row['service_name'];?>" >
                </div>

                <div class="form-group">
                  <label for="scp_picture">Image</label>

                   <?php if($row['service_icon']!=""){ ?>
                   <img  src="<?php echo $row['service_icon'];?>" alt="image" width=""/>
                 <?php }else{ echo "Image not setup"; } ?>      
              

                  <input type="file" name="scp_picture" class="form-control" id=""     >
                </div> 

                
                <div class="form-group">
                  <label for="service_badge_id"> Badge </label>
                   <select class="form-control" name="service_badge_id"> 
                    <option value="">select </option>
                   <?php 
                      $sqli="select * from `badge` ";
                      $badge_result=mysqli_query($mysqli,$sqli)or die(mysqli_error($mysqli));
                      $badges=mysqli_fetch_all($badge_result, MYSQLI_ASSOC);
                    $a=$row['service_badge_id'];
                    foreach ($badges as $badge) {
                      $sel="";
                      if($badge['badge_id']==$a) { $sel= 'selected="selected"';}
                        echo '<option value="'.$badge['badge_id'].'" '.$sel.' >'.$badge['badge_title'].'</option>';
                     # code...
                   } ?> 
                   
                   </select>
                  

                </div>
                <div class="form-group">
                  <label for="service_duration"> Duration </label>
                  <input type="number" name="service_duration" class="form-control" id="last_name" placeholder="Enter Duration" required  value="<?php echo $row['service_duration'];?>">
                </div>

                  
                <div class="form-group">
                  <label for="service_duration_type">Duration Type </label>
                   <select class="form-control" name="service_duration_type"> 
                    <option value="">select </option>
                    <option value="MONTH" <?php if($row['service_duration_type']=='MONTH') { echo  'selected="selected"';}?>>MONTH</option>
                    <option value="YEAR" <?php if($row['service_duration_type']=='YEAR') { echo  'selected="selected"';}?>>YEAR </option>
                   </select>
                </div>  

                <div class="form-group">
                  <label for="service_amount"> Amount </label>
                  <input type="text" name="service_amount" class="form-control" id="service_amount" placeholder="Enter Amount " required  value="<?php echo $row['service_amount'];?>">
                </div>
                 <div class="form-group">
                  <label for="service_diamond">Diamond</label>
                  <input type="number" class="form-control" name="service_diamond" id="service_diamond" placeholder="Enter Diamond" value="<?php echo $row['service_diamond'];?>" required>
                </div>
               
                <div class="form-group">
                  <label for="service_cr_date"> Created Date </label>
                  <input type="text" class="form-control" id="service_cr_date" placeholder="" required  value="<?php echo $row['service_cr_date'];?>" readonly>
                </div>
              
              
                <div class="form-group">
                  <label for="service_up_date"> Updated Date </label>
                  <input type="text" class="form-control" id="service_up_date" placeholder="" required  value="<?php echo $row['service_up_date'];?>" readonly>
                </div>
            
             </div>
    
             <div class="box-footer">
                <input type="submit" name="submit" class="btn btn-primary" value="Update">
               <input type="reset" class="btn btn-danger" value="Cancel">
              </div>
          </form>
     
        </div> 
     </div>  
       


      <!-- left column --><!-- 
        <div class="col-md-6">

        </div>  -->
     </div>  

        

  </div> 
	
</section>
 <!-- close Main content -->


<?php include("includes/footer.php");?>       

