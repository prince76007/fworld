<?php  
//$users_badage_result=mysqli_query()
//mysqli_fetch_assoc($users_badage_result,)
//include("includes/connection.php");

if(isset($_POST['assign_vip_privilage']) && $_POST['assign_vip_privilage']!=""){

if($_POST['cav_days']>0){

$fb_id=$_POST['users_fb_ids'];
$cav_days=$_POST['cav_days'];
$cav_service_id=$_POST['cav_service_id'];
$cav_start_date1=$_POST['cav_start_date'];
//$sender_id=1;

date_default_timezone_set('Asia/Kolkata');
$DATE_TIME=date('Y-m-d H:i:s');
       // (NULL, '100005', '2', '3', '2020-12-23', '2020-12-25', '2020-12-23', 'RUNING');

        $cav_start_date=date('Y-m-d', strtotime($cav_start_date1));
        $cav_end_date = date('Y-m-d', strtotime($cav_start_date1 . ' +'.$cav_days.' day'));
   

          $cav_status="RUNING";
          
          $cav_status="RUNING";
          
          $cav_status="RUNING";

         $qrry_get='INSERT INTO `custom_assign_vip` ( `cav_fb_id`, `cav_service_id`, `cav_days`, `cav_start_date`, `cav_end_date`, `cav_cr_date`, `cav_status`)  VALUES ("'.$fb_id.'","'.$cav_service_id.'","'.$cav_days.'","'.$cav_start_date.'","'.$cav_end_date.'","'.$DATE_TIME.'","'.$cav_status.'")';
          mysqli_query($mysqli,$qrry_get)or die(mysqli_error($mysqli));
    
           $last_insertid = mysqli_insert_id($mysqli);
        
         if($last_insertid){
         //  $_SESSION['msg']= " Vip Assign successfully ! ".$qrry_get;
           $_SESSION['success']= " Vip Assign successfully ! ";
         }else{
           $_SESSION['error']= " Error Vip Assign ! ".$qrry_get;
         }
   }
   else{
          $_SESSION['error']= "Please Enter correct days ";
   }    
   header('location:all_vip_privilage_managment.php');
}


?>
<!-- Modal  custom_uploads/badges  -->
<div class="modal fade" id="exampleModalCenter_assign_vip_privilage"  role="dialog" aria-labelledby="exampleModalCenterTitle" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLongTitle">Assign Vip Privilage</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body"> 
      <form method="post">	
        <div class="row">
  			<div class="col-md-12 ">
          <div class="form-group">
            <label for="">User </label>
             <select name="users_fb_ids" class="form-control select2 " id="users_fb_id"   style="width: 100%"  data-placeholder="Select a User" required>
              <option value=""></option>
              <?php                  
              $sqli="select * from `users`  Where user_type=0  ";
              $user_result=mysqli_query($mysqli,$sqli)or die(mysqli_error($mysqli));
              $users=mysqli_fetch_all($user_result, MYSQLI_ASSOC);  
              foreach ($users as $user) {
              # code...      
              $users_fb_id=$user['fb_id'];
              $users_name=$user['first_name'].' '.$user['last_name'].' ('.$user['fb_id'].')';
              echo '<option data-select2-id="'.$users_fb_id.'" value="'.$users_fb_id.'"> '.$users_name.' </option>';
              }    
              ?>
              </select> 
          </div>

          <div class="form-group">
                  <label for="">Start Date </label>
                  <input type="date" name="cav_start_date" class="form-control" id="" placeholder="" value="<?php echo date('Y-m-d');?>"    required>
          </div>


          <div class="form-group">
                  <label for="">Day </label>
                  <input type="number" name="cav_days" class="form-control" id="" placeholder="Enter Day" value="1"    required>
          </div>

          <div class="form-group">
            <label for="">Vip </label>
              <select name="cav_service_id" class="form-control" id="service_id" required>
              <option value="">Select Vip</option>
              <?php                  
              $gsqli="select * from `services` ";
              $gservices_result=mysqli_query($mysqli,$gsqli)or die(mysqli_error($mysqli));
              $gservices=mysqli_fetch_all($gservices_result, MYSQLI_ASSOC);  
              foreach ($gservices as $service) {
              # code...      
              $service_id=$service['service_id'];
              $service_name=$service['service_name'] ; //.' '.$user['last_name'].' ('.$user['fb_id'].')';
              echo '<option value="'.$service_id.'"> '.$service_name.' </option>';
              }    
              ?>
              </select>
          </div>

               
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Assign vip privilage" name="assign_vip_privilage" >
      </div>
    </form>
     
    </div>
  </div>
 </div>
</div>