<?php  
//$users_badage_result=mysqli_query()
//mysqli_fetch_assoc($users_badage_result,)
include("includes/connection.php");

if(isset($_POST['assign_gift']) && $_POST['assign_gift']!=""){

if($_POST['gift_id']!=""){

$ubh_sender_fb_id=1;
$sender_id=1;
date_default_timezone_set('Asia/Kolkata');
$DATE_TIME=date('Y-m-d H:i:s');
     if($_POST['send_gift_qty']=="" || $_POST['send_gift_qty']=="0"){
      $gift_qty=1;
     }else{
      $gift_qty=$_POST['send_gift_qty'];
     }
      $gift_id=$_POST['gift_id'];
    $qrry_get="SELECT * FROM `gift` where gift_id=$gift_id";
    $res=mysqli_query($mysqli,$qrry_get) or die(mysqli_error($mysqli));
    $gift=mysqli_fetch_assoc($res); 

      $ubh_gift_id=$gift['gift_id'];
      $ubh_gift_title=$gift['gift_title'];
      $ubh_gift_diamond =$gift['gift_diamond'];
          
          $ubh_gift_total_diamond =$gift_qty*$ubh_gift_diamond;
    
      $ubh_fb_ids_array=$_POST['users_fb_ids'];
      if (in_array("ALL", $ubh_fb_ids_array)) {
     //all user send
          $outstring=" All User :-";
          $count_user=0;

              $sqli="select * from `users`  Where user_type=0  ";
              $user_result=mysqli_query($mysqli,$sqli)or die(mysqli_error($mysqli));
              $users=mysqli_fetch_all($user_result, MYSQLI_ASSOC);  
          foreach ($users as $user) {
             $ubh_fb_id=$user['fb_id']; 
            $qrry_get='INSERT INTO `user_baggage`( `ub_fb_id`, `ub_gift_id`, `ub_gift_title`, `ub_gift_diamond`, `ub_gift_qty`, `ub_gift_total_diamond`, `ub_sender_fb_id`, `ub_cr_date`,`ub_gift_remain_qty`) VALUES ("'.$ubh_fb_id.'","'.$ubh_gift_id.'","'.$ubh_gift_title.'","'.$ubh_gift_diamond.'","'.$gift_qty.'","'.$ubh_gift_total_diamond.'","'.$ubh_sender_fb_id.'","'.$DATE_TIME.'","'.$gift_qty.'")';
           mysqli_query($mysqli,$qrry_get)or die(mysqli_error($mysqli));
           $last_insertid = mysqli_insert_id($mysqli);
           if($last_insertid){
            $count_user++;
              //receiver_id add diamonad
             //$UPDATE_daimond_receiver="update users set total_diamondd=total_diamondd+".$send_diamond." WHERE fb_id=".$users_fb_id;
             //mysqli_query($mysqli,$UPDATE_daimond_receiver);
           }
          }//foreach all user loop

      //all user send  
      }else{
      
      $outstring=" Select User :-";
      $count_user=0;
      foreach($ubh_fb_ids_array as $ubh_fb_id) {

            $qrry_get='INSERT INTO `user_baggage`( `ub_fb_id`, `ub_gift_id`, `ub_gift_title`, `ub_gift_diamond`, `ub_gift_qty`, `ub_gift_total_diamond`, `ub_sender_fb_id`, `ub_cr_date`,`ub_gift_remain_qty`) VALUES ("'.$ubh_fb_id.'","'.$ubh_gift_id.'","'.$ubh_gift_title.'","'.$ubh_gift_diamond.'","'.$gift_qty.'","'.$ubh_gift_total_diamond.'","'.$ubh_sender_fb_id.'","'.$DATE_TIME.'","'.$gift_qty.'")';
           mysqli_query($mysqli,$qrry_get)or die(mysqli_error($mysqli));
    
           $last_insertid = mysqli_insert_id($mysqli);
         if($last_insertid){
            $count_user++;
              //receiver_id add diamonad
             //$UPDATE_daimond_receiver="update users set total_diamondd=total_diamondd+".$send_diamond." WHERE fb_id=".$users_fb_id;
             //mysqli_query($mysqli,$UPDATE_daimond_receiver);
         }
      }//foreach loop
     }//allelse 
     $_SESSION['msg']= $outstring. " ".$count_user." Gift Send successfully ! ";

}
else{
     $_SESSION['msg']=  " Please Set Gift to send ! ";
    }    
   
   header('location:all_user_baggage.php');
}


?>
<!-- Modal  custom_uploads/badges  -->
<div class="modal fade" id="exampleModalCenter_send_gift" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLongTitle">Gift Send </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body"> 
      <form method="post">	
  		   <!-- <input type="hidden" name="users_fb_id" value="<?php echo $id;?>">
      -->
        <div class="row">
  			<div class="col-md-12 ">
          <div class="form-group">
            <label for="">User </label>
              <select name="users_fb_ids[]" class="form-control select2 select2-hidden-accessible" id="users_fb_id" multiple="" style="width: 100%"  data-placeholder="Select a User" required>
              <option value="ALL">All</option>
              <?php                  
              $sqli="select * from `users`  Where user_type=0  ";
              $user_result=mysqli_query($mysqli,$sqli)or die(mysqli_error($mysqli));
              $users=mysqli_fetch_all($user_result, MYSQLI_ASSOC);  
              foreach ($users as $user) {
              # code...      
              $users_fb_id=$user['fb_id'];
              $users_name=$user['first_name'].' '.$user['last_name'].' ('.$user['fb_id'].')';
              echo '<option value="'.$users_fb_id.'"> '.$users_name.' </option>';
              }    
              ?>
              </select>
          </div>

          <div class="form-group">
                  <label for="">Send Gift Qty </label>
                  <input type="number" name="send_gift_qty" class="form-control" id="send_gift_qty" placeholder="Enter Gift Qty" value="1"     required>
          </div>

          <div class="form-group">
            <label for="">Gift </label>
              <select name="gift_id" class="form-control" id="gift_id" required>
              <option value="">Select Gift</option>
              <?php                  
              $gsqli="select * from `gift` WHERE  gift_status='Active' and gift_coin_type='Diamond' ";
              $guser_result=mysqli_query($mysqli,$gsqli)or die(mysqli_error($mysqli));
              $gusers=mysqli_fetch_all($guser_result, MYSQLI_ASSOC);  
              foreach ($gusers as $user) {
              # code...      
              $gift_id=$user['gift_id'];
              $gift_name=$user['gift_title'] ; //.' '.$user['last_name'].' ('.$user['fb_id'].')';
              echo '<option value="'.$gift_id.'"> '.$gift_name.' </option>';
              }    
              ?>
              </select>
          </div>

               
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Send Gift" name="assign_gift" >
      </div>
    </form>
     
    </div>
  </div>
 </div>
</div>