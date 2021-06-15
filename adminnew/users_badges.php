<?php  
//$users_badage_result=mysqli_query()
//mysqli_fetch_assoc($users_badage_result,)
include("includes/connection.php");

if(isset($_POST['assign_badge']) && $_POST['assign_badge']!=""){
$users_fb_id=$_POST['users_fb_id'];
$badges=$_POST['badge'];
$delsqli="DELETE FROM `users_badges` WHERE `users_fb_id` = ".$users_fb_id;
mysqli_query($mysqli,$delsqli)or die(mysqli_error($mysqli));
foreach($badges as $badge){
 $insert="INSERT INTO `users_badges` (`users_fb_id`, `users_badges_badge_id`) VALUES ( '".$users_fb_id."','".$badge."');";
 mysqli_query($mysqli,$insert)or die(mysqli_error($mysqli));
}
 $_SESSION['msg']=  $statusMsg = " Add Or Update  Badges successfully ! ";

header('location:edit_user.php?user_id='.$users_fb_id);
}


$id=$_GET['user_id'];

$sqli="select * from `badge` ";
$badge_result=mysqli_query($mysqli,$sqli)or die(mysqli_error($mysqli));
$badges=mysqli_fetch_all($badge_result, MYSQLI_ASSOC);
?>
<!-- Modal  custom_uploads/badges  -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLongTitle">Badges</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body"> 
      <form method="post">	
  		<input type="hidden" name="users_fb_id" value="<?php echo $id;?>">
     
        <div class="row">
  		    <?php foreach ($badges as $badge) {
$sqli="select * from `users_badges` WHERE users_fb_id='$id' and users_badges_badge_id=".$badge['badge_id'];
$data=mysqli_query($mysqli,$sqli) or die(mysqli_error($mysqli));
$old_badge=mysqli_fetch_assoc($data);   
			  		
  			# code...
  		    	//check 
				
  			?>
	  		<div class="col-md-3 col-sm-6 col-xs-12">
	          <div class="info-box">
	            <span class="info-box-icon bg-aq">
		    		<img src="<?php echo $server_file_path.$badge['badge_blackandwhite'];?>" class="img-rounded" alt="<?php echo $badage['badge_title'];?>" width="65" height="65">
	            </span>

	            <div class="info-box-content">
	              <span class="info-box-text">
	              	<?php echo $badge['badge_title'];?>
	              	<?php //if($old_badge){ echo "Badge Assign Date:-".$old_badge['users_badges_cr_date']; }?> 
	              		

	              	</span>
	              
	              <span class="info-box-number"><input type="checkbox" 			name="badge[]" value="<?php echo $badge['badge_id'];?>"  <?php if($old_badge){ echo 'checked="checked"'; }?> >

	              </span>
	            </div>
	            <!-- /.info-box-content -->
	          </div>
	          <!-- /.info-box -->
	        </div>
			<?php  } ?>
 		
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Save changes" name="assign_badge" >
      </div>
    </form>
     
    </div>
  </div>
</div>