<?php include("includes/header.php");

  require("includes/function.php");
 

 if(isset($_POST['update']))
  {

      $extmsg1="";
     
      $id=$_POST['uwr_id'];
      $uwr_is_verified=$_POST["uwr_is_verified"];
      $qry='Update `user_withdrawal_request` set `uwr_is_verified`="'.$uwr_is_verified.'",`uwr_note`="'.$_POST["uwr_note"].' " where uwr_id="'.$id.'"';
      $data_ins=mysqli_query($mysqli,$qry)or die(mysqli_error($mysqli));


     $sql="SELECT * FROM user_withdrawal_request where uwr_id='$id'";
     $result=mysqli_query($mysqli,$sql); 
     $uwr_result=mysqli_fetch_assoc($result);
      $userid=$uwr_result['uwr_fb_id'];    
      $edtb_beans=$uwr_result['uwr_coin'];

      if('Verified'==$uwr_is_verified){
        //send notification 
      
      }

      if('Rejected'==$uwr_is_verified){
          //send notification and give back its beans to user
            //update beans
            $UPDATE_beans_user="update users set total_beans=total_beans+".$edtb_beans." WHERE fb_id=".$userid;
            mysqli_query($mysqli,$UPDATE_beans_user);
  
      }

      if($data_ins)
      {
          $_SESSION['success']="Withdrawal Request Update Successfully " .$extmsg1 ;
      }else{
          $_SESSION['error']="Error in Withdrawal Request " .$extmsg1 ;
      } 
      header('location:view_uwr.php?uwr_id='.$id);
  }

 if(isset($_POST['update_pay_status']))
  {

      $extmsg1="";
     
      $id=$_POST['uwr_id'];
      $qry='Update `user_withdrawal_request` set `uwr_pay_status`="'.$_POST["uwr_pay_status"].'",`uwr_note`="'.$_POST["uwr_note"].' " where uwr_id="'.$id.'"';
      $data_ins=mysqli_query($mysqli,$qry)or die(mysqli_error($mysqli));
      if($data_ins)
      {
          $_SESSION['success']="Withdrawal Request Payment Update Successfully " .$extmsg1 ;
      }else{
          $_SESSION['error']="Error in Withdrawal Request " .$extmsg1 ;
      } 
      header('location:withdrawal_request_list.php');
  }

  
 
 if(isset($_REQUEST['uwr_id']))
 {
     $id=$_REQUEST['uwr_id'];
     $sql="SELECT * FROM user_withdrawal_request where uwr_id='$id'";
     $result=mysqli_query($mysqli,$sql); 
     $s_result=mysqli_fetch_assoc($result);
 
    $userid=$s_result['uwr_fb_id'];    
      $sqli="select * from `users` WHERE fb_id='$userid'";
    $userdata=mysqli_fetch_assoc(mysqli_query($mysqli,$sqli));
     
     $user_data="<p>".$s_result['uwr_fb_id']."</p>";     
     
     if($userdata){
      $user_data.="<p>".$userdata['first_name'].' '.$userdata['last_name']."</p>";     
      //$host_user.="<p>".$value['ulrd_fb_id']."</p>";     
      //$host_user="<p>".$value['uwr_fb_id']."</p>";     
     }else{
      $user_data.="<p>User Deleted</p>";     
     } 


    $uwr_details=""; 
      $uwr_details.="<p> Name: ".$s_result['uwr_name']."</p>";     
      $uwr_details.="<p> Contact: ".$s_result['uwr_contact']."</p>";     
      $uwr_details.="<p> Email: ".$s_result['uwr_email']."</p>";     
     
    $details=""; 
      if($s_result['uwr_payment_method'] == "Bank Transfer"){
      $details.="<p> Bank: ".$s_result['uwr_bank_name']."</p>";     
      $details.="<p> Account: ".$s_result['uwr_account_number']."</p>";     
      $details.="<p> ifsc: ".$s_result['uwr_ifsc']."</p>";     
      $details.="<p> Type: ".$s_result['uwr_account_type']."</p>";     
      }

      if($s_result['uwr_other']){
       $details.="<p> Other Details: ".$s_result['uwr_other']."</p>";     
      }


}


?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Withdrawal Request
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">update-withdrawal-request</li>
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
              <h3 class="box-title">Update Withdrawal Request</h3>
            </div  >
         <form  name="" method="POST" class="form " enctype="multipart/form-data">
            
           <div class="card-body mrg_bottom" style="padding-left: 2%;"> 
                <input type="hidden" name="uwr_id" value="<?php echo $s_result['uwr_id'];?>">
                <div class="form-group">
                  <label for="first_name">User Details</label>
                  <?php echo $user_data; ?>
                </div>

                <div class="form-group">
                  <label for="first_name">Details</label>
                  <?php echo $uwr_details; ?>
                </div> 
              
                <div class="form-group">
                  <label for="first_name"> Method: <?php echo $s_result['uwr_payment_method'];?></label>
                  <p> <?php echo $row['uwr_payment_method']; ?> </p>
                  <?php echo $details;  ?>
                </div>
                <div class="form-group">
                  <label for="first_name">Amount:</label>
                  <p><?php echo $s_result['uwr_amount']; ?> </p>
                </div>
                
                <div class="form-group">
                  <label for="first_name"> Coin:</label>
                  <p><?php echo $s_result['uwr_coin']; ?> </p>
                </div>
                

                <?php if($s_result['uwr_is_verified']=="Pending"){?>  
                <div class="form-group">
                  <label class="">verified status:</label>
                    <select class="form-control" name="uwr_is_verified" required="required">
                    <option value >Please Select</option>
                      <?php echo get_withdrawal_request_verified_status_dropdown($s_result['uwr_is_verified']) ;?>
                    </select>
                </div>
                  <br/>
                  <div class="form-group">
                    <div class="">
                      <button type="submit" name="update" class="btn btn-primary">
                        UPDATE</button>
                      <input type="reset" name="reset"  class="btn">
                    
                    <!--<input type="submit" name="submit" value="add">-->
                          
                    </div>
                  </div>
              
                <?php 
                 }else{  echo '<p>'. $s_result['uwr_is_verified'].'</p>'; }
                ?>

               <?php if($s_result['uwr_is_verified']=="Verified") {?>  
              
                <div class="form-group">
                  <label for="first_name"> Note:</label>
                  <textarea  class="form-control" name="uwr_note" required><?php echo $s_result['uwr_note']; ?></textarea> 
                </div>
               
                <div class="form-group">
                  <label class="">status:</label>
                    <select class="form-control" name="uwr_pay_status" required="required">
                      <?php echo get_withdrawal_request_pay_status_dropdown($s_result['uwr_pay_status']) ;?>
                    </select>
                </div>
                
                <br/>
                  <div class="form-group">
                    <div class="">
                      <button type="submit" name="update_pay_status" class="btn btn-primary">
                        UPDATE Payment status</button>
                     <input type="reset" name="reset" class="btn" >
                    </div>
                  </div>
                 <?php  } ?>
               
                </div>
            <br/>
            <div style="padding-left: 2%;">
              <a  class="btn btn-default" href="withdrawal_request_list.php">Back</a>          
            </div>
            <br/>
         </div>
          </form>
      </div>
    </div>
  
</section>
 <!-- close Main content -->
  


<?php include("includes/footer.php");?>       

  
