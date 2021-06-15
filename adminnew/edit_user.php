<?php 
include("includes/header.php");
require("includes/function.php");
if(isset($_POST["submit"]) && $_POST["submit"]=="Update"){
   $extmsg="";
   
    $scp_file_sql="";
    
    $id=$_POST['user_id'];
    
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];    
    $mobile=$_POST['mobile'];    
    
     $gender=$_POST['gender'];
     $city=$_POST['city'];    
     $state=$_POST['state'];    
    // $bio=$_POST['bio'];    
     $bio = filter_input(INPUT_POST, 'bio', FILTER_SANITIZE_STRING);
     $block_note = filter_input(INPUT_POST, 'block_note', FILTER_SANITIZE_STRING);
  
     $block=$_POST['block'];
     $is_user_can_pk=$_POST['is_user_can_pk'];
     $is_user_can_call=$_POST['is_user_can_call'];
   
     $is_certified =$_POST['is_certified'];
     $is_certified_reason=$_POST['is_certified_reason'];
     $profile_verified_type=$_POST['profile_verified_type'];
   
   //  $total_diamondd=$_POST['total_diamondd'];
    // if(isset($_FILES['scp_picture']['name']) && $_FILES['scp_picture']['name']!=""){
    //   $icon=$_FILES['scp_picture']['name'];
    //   $temp=$_FILES['scp_picture']['tmp_name'];
    //   $pp=$_SERVER["DOCUMENT_ROOT"]."/custom_uploads/screen_banner/".$icon;
    //  if(move_uploaded_file($temp,$pp)){
    //   $paht=$BASE_PATH."/custom_uploads/screen_banner/".$icon;
    //   $scp_file_sql=" `screen_banner_image` ='".$paht."' , ";
    //      $extmsg="Uplaoded image";
    //  }else{
    //      $extmsg="Error in Uplaod image";
    //  }
    // }
    // `gender`, `bio`, `profile_pic`, `block`, 
  
        $sql1="update  users SET
        $scp_file_sql
        first_name='".$first_name."' , 
        last_name='".$last_name."' ,
        mobile='".$mobile."' , 
        email='".$email."' , 
        gender='".$gender."' ,
        state='".$state."' , 
        city='".$city."' ,
        gender='".$gender."' ,
        bio='".$bio."' ,
        block='".$block."' ,
        is_user_can_pk='".$is_user_can_pk."' ,
        is_user_can_call='".$is_user_can_call."' ,
        block_note='".$block_note."' ,
        is_certified='".$is_certified."', 
            is_certified_reason='".$is_certified_reason."',
        profile_verified_type='".$profile_verified_type."'
        where fb_id='".$id."'";
     //   total_diamondd='".$total_diamondd."'
     
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
 




$id=$_GET['user_id'];
$sqli="select * from `users` WHERE fb_id='$id'";
$data=mysqli_query($mysqli,$sqli) or die(mysqli_error($mysqli));
$row=mysqli_fetch_assoc($data);   

?>


<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>UPDATE USER</h1>
    <ol class="breadcrumb">
      <li><a href="vwDashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">edit user</li>
    </ol>
  </section>
  
  <?php include("includes/alert_section.php");  ?>  

 <!-- Main content -->
 <section class="content">
  
  
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">USER</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data">
              <input type="hidden" name="user_id" value="<?php echo $row['fb_id'];?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="first_name"> User Name </label>
                  <input type="text" class="form-control" id="username" placeholder="Enter user Name" required  value="<?php echo $row['username'];?>" readonly>
                </div>
                
                <div class="form-group">
                  <label for="first_name"> First Name </label>
                  <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Enter First Name" required  value="<?php echo $row['first_name'];?>">
                </div>
                <div class="form-group">
                  <label for="last_name"> Last Name </label>
                  <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Enter Last Name" required  value="<?php echo $row['last_name'];?>">
                </div>

                <div class="form-group">
                  <label for="mobile"> Mobile </label>
                  <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Enter mobile " required  value="<?php echo $row['mobile'];?>">
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="<?php echo $row['email'];?>" required>
                </div>
               
                
                <!-- <div class="form-group">
                  <label for="mobile">Moblie</label>
                  <input type="text" name="mobile" maxlength="10" class="form-control" id="mobile" placeholder="mobile" value="<?php echo $row['mobile'];?>" required>
                </div> -->


              <div class="form-group">
                 <label for="gender">Gender</label>
                 <select name="gender"  class="form-control" >
                  <option value="">-Select-</option>
                  <option value="male"  <?php if($row['gender']=='male') { echo  'selected="selected"';}?>>male</option>
                  <option value="female" <?php if($row['gender']=='female') { echo  'selected="selected"';}?>>female</option>
                 </select>
              </div>

              <div class="form-group">
                  <label for="mobile">State</label>
                  <input type="text"  name="state" class="form-control" id="state" placeholder="Enter State" value="<?php echo $row['state'];?>" >
                </div>
                  <div class="form-group">
                  <label for="city"> City </label>
                  <input type="text" name="city" class="form-control" id="city" placeholder="Enter City" value="<?php echo $row['city'];?>"  required>
                  
                </div>
                <div class="form-group">
                  <label for="mobile">Bio</label>
                  <textarea class="form-control" id="bio" name="bio" placeholder="Enter Bio"><?php echo $row['bio'];?></textarea>
                </div> 

             </div>
             <div class="box-footer">
              </div>

        </div> 
     </div>  
       


      <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">profile Staus</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                 
                <div class="form-group">
                  <label for="profile_pic">Image</label>
                  <img src="<?php echo $row['profile_pic'];?>" width="72px" height="75px">
                 <!--  <input type="file" name="profile_pic" class="form-control" id="" > -->
                 </div>   

                <div class="form-group">
                  <label for="bustaus">Pk Status</label>
                   <select class="form-control" name="is_user_can_pk"> 
                    <option value="1" <?php if($row['is_user_can_pk']=='1') { echo  'selected="selected"';}?>>Active</option>
                    <option value="0" <?php if($row['is_user_can_pk']=='0') { echo  'selected="selected"';}?>>Inactive </option>
                   </select>
                </div>   
             
                <div class="form-group">
                  <label for="bustaus">Call Status</label>
                   <select class="form-control" name="is_user_can_call"> 
                    <option value="1" <?php if($row['is_user_can_call']=='1') { echo  'selected="selected"';}?>>Active</option>
                    <option value="0" <?php if($row['is_user_can_call']=='0') { echo  'selected="selected"';}?>>Inactive </option>
                   </select>
                </div>   
             
              
                <div class="form-group">
                  <label for="bustaus">Block Status</label>
                   <select class="form-control" name="block"> 
                    <option value="1" <?php if($row['block']=='1') { echo  'selected="selected"';}?>>Block</option>
                    <option value="0" <?php if($row['block']=='0') { echo  'selected="selected"';}?>>Unblock </option>
                   </select>
                </div>   
                
                <div class="form-group hide_is_block_note" >
                    <label for="mobile">Block Note</label>
                    <textarea class="form-control" id="block_note" name="block_note" placeholder="Enter Block Note"><?php echo $row['block_note'];?></textarea>
               </div> 

                <div class="form-group">
                  <label for="bustaus">verify </label>
                   <select class="form-control" name="is_certified"> 
                    <option value="1" <?php if($row['is_certified']=='1') { echo  'selected="selected"';}?>>Verified</option>
                    <option value="0" <?php if($row['is_certified']=='0') { echo  'selected="selected"';}?>>Not Veryfied </option>
                   </select>
                </div>   
                
                <div class="form-group hide_is_certified_reason" >
                    <label for="mobile">Verified Reason</label>
                    <textarea class="form-control" id="is_certified_reason" name="is_certified_reason" placeholder="Enter Vertified reason"><?php echo $row['is_certified_reason'];?></textarea>
               </div> 

                <div class="form-group">
                  <label for="bustaus">Profile verified type</label>
                   <select class="form-control" name="profile_verified_type"> 
                    <option value="0">-Select-</option>
                    <option value="1" <?php if($row['profile_verified_type']=='1') { echo  'selected="selected"';}?>>Normal</option>
                    <option value="2" <?php if($row['profile_verified_type']=='2') { echo  'selected="selected"';}?>>Fword  Offical </option>
                    <option value="3" <?php if($row['profile_verified_type']=='3') { echo  'selected="selected"';}?>>Celebrity </option>
                   </select>
                </div>   
             
                <div class="form-group">
                  <label for=""> Total Diamond </label>
                  <input type="text" name="" class="form-control" id="total_diamondd" placeholder="" value="<?php echo $row['total_diamondd'];?>"      readonly>
                </div>
                <div class="form-group">
                  <label for=""> Total Silver Coin </label>
                  <input type="text" name="" class="form-control" id="total_silver_coin" placeholder="" value="<?php echo $row['total_silver_coin'];?>"      readonly>
                </div>
                <div class="form-group">
                  <label for=""> Total Beans </label>
                  <input type="text"  class="form-control" id="total_beans" placeholder="" value="<?php echo $row['total_beans'];?>"      readonly>
                </div>
                <div class="form-group">
                  <label for=""> Total Expo </label>
                  <input type="text"  class="form-control" id="total_expo" placeholder="" value="<?php echo $row['total_expo'];?>" readonly>
                </div>
              
                 <div class="form-group">
                  <label for="mobile">Created At</label>
                  <input type="text"  class="form-control" id="cr_at" placeholder="" value="<?php echo $row['created'];?>"  readonly  >
                </div>   
              
                
              
              

              <div class="box-footer">
                <input type="submit" name="submit" class="btn btn-primary" value="Update">
               <input type="reset" class="btn btn-danger" value="Cancel">
           </form>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Assgin Badge
</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter_send_diamond">
  Assgin Diamond
</button>
              </div>

        </div> 
     </div>  

        

  </div> 
	
</section>
 <!-- close Main content -->

<?php include("users_badges.php");?>   

<?php include("send_diamond.php");?>  

<?php include("includes/footer.php");?>       

