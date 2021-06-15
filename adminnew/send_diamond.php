<?php  
//$users_badage_result=mysqli_query()
//mysqli_fetch_assoc($users_badage_result,)
include("includes/connection.php");

if(isset($_POST['assign_diamond']) && $_POST['send_diamond']!="" && $_POST['send_diamond']!="0"){
$users_fb_id=$_POST['users_fb_id'];
$send_diamond=$_POST['send_diamond'];
$dth_for=$_POST['diamond_transfer_for'];
$sender_id=1;
date_default_timezone_set('Asia/Kolkata');
$dth_cr_date=date('Y-m-d H:i:s');
        $qrry_1="insert into diamond_transfer_history ( `dth_sender_id`, `dth_receiver_id`, `dth_send_diamond`, `dth_cr_date`, `dth_for`)values(";
          $qrry_1.="'".$sender_id."',";
          $qrry_1.="'".$users_fb_id."',";
          $qrry_1.="'".$send_diamond."',";
          $qrry_1.="'".$dth_cr_date."',";
          //$qrry_1.="'',";
          $qrry_1.="'".$dth_for."'";
          
          $qrry_1.=")";
        
           mysqli_query($mysqli,$qrry_1)or die(mysqli_error($mysqli));
           $last_insertid = mysqli_insert_id($mysqli);
    if($last_insertid){
      //receiver_id add diamonad
       $UPDATE_daimond_receiver="update users set total_diamondd=total_diamondd+".$send_diamond." WHERE fb_id=".$users_fb_id;
       mysqli_query($mysqli,$UPDATE_daimond_receiver);
      
     $_SESSION['msg']=  $statusMsg = $send_diamond." Diamond Send successfully ! ";
    }else{
     $_SESSION['msg']=  $statusMsg = " Error in Diamond Send ! ";
    }
    header('location:edit_user.php?user_id='.$users_fb_id);

}

$id=$_GET['user_id'];

?>
<!-- Modal  custom_uploads/badges  -->
<div class="modal fade" id="exampleModalCenter_send_diamond" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLongTitle">Diamond Send </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body"> 
      <form method="post">	
  		<input type="hidden" name="users_fb_id" value="<?php echo $id;?>">
     
        <div class="row">
  			<div class="col-md-12 ">
	       <div class="form-group">
                  <label for="">Send  Diamond </label>
                  <input type="number" name="send_diamond" class="form-control" id="send_diamond" placeholder="Enter Diamond" value=""      required="">
          </div>
          <div class="form-group">
                  <label for="mobile">For</label>
                  <textarea class="form-control" id="" name="diamond_transfer_for" placeholder="Enter For"><?php echo 'Admin send Free Gift';?></textarea>
          </div> 

               
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Send Diamond" name="assign_diamond" >
      </div>
    </form>
     
    </div>
  </div>
</div>