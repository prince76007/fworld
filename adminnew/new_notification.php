<?php include("includes/header.php");
?>

<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> Notification</h1>
    <ol class="breadcrumb">
      <li><a href="vwDashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Add Notification</li>
    </ol>
  </section>
  <?php include("includes/alert_section.php");  ?> 
 
  <!-- First Box-->

  <div class="box box-default ">
    <div class="box-header with-border">
     
      <div class="box-tools pull-right">
         
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body"> 
 
<form class="form-horizontal" action="action.php?p=add_notification" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="" class="control-label col-sm-2" >User </label>
            <div class="col-sm-6">
              <select name="users_fb_ids" class="form-control select2 select2-hidden-accessible" id="users_fb_id"  style="width: 100%"  data-placeholder="Select a User" required>
              <option value="0">All</option>
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
          </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="Title">Title:</label>
    <div class="col-sm-6">
     <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title"  required>
    </div>
  </div>
    
  <div class="form-group">
    <label class="control-label col-sm-2" for="Description">Notification Type:</label>
    <div class="col-sm-2">
        <input type="radio"  value="1" id="notification_type1" onclick="notify_type(1)" name="notification_type" required > Text
    </div>
      <div class="col-sm-2">
        <input type="radio" value="2" id="notification_type2" onclick="notify_type(2)" name="notification_type" required  > Image
    </div>
  </div>
  
  <div class="form-group" id="des">
    <label class="control-label col-sm-2" for="Description">Description:</label>
    <div class="col-sm-6">
        <textarea class="form-control" id="description" name="description" placeholder="Enter Description" ></textarea>
    </div>
  </div>
  <div class="form-group" id="des2" style="display:none">
    <label class="control-label col-sm-2" for="Description">Image</label>
    <div class="col-sm-6">
        <input type="file" class="form-control" id="file" name="file" >
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
	
  </div>  
  
 
   </div>
 



<?php include("includes/footer.php");?> 

<script type="text/javascript" language="javascript" >
    function notify_type(val){
        if(val==1){
            $('#des2').hide();
              $('#des').show();
           }else{
               $('#des').hide();
                $('#des2').show();
           }
       
    }
  $(document).ready( function () {
    var table =$('#user_table').DataTable({
        "scrollX": true,
        'paging'      : true,
        'autoWidth'   : true,
                "processing": true,
                "serverSide": true,
                "ajax":{
                    url :"ajax/get_all_notification.php",
                    type: "post",
                 error: function(){  // error handling
                  $(".user_table-error").html("");
                  }
                  }
    });
    
     $('#user_table').on( 'click', 'a.remove_notification_id', function () {
        var id = $(this).attr('data_id');
        console.log(id);
         if (confirm('Are you sure you want to delete this Notification?')) {
         $.ajax({
              type: "POST",
              data: {id:id},
              url :"ajax/del_notification.php",
      
              success: function(result) {
                if(result){
                table.draw(); // redrawing datatable
                }else{
                alert('data not deleted plz try again');    
                }
               //$('#myModal2').modal('show');
               $('.result-div').html(result);
             
              },
              async:false
            });
        } 
       });
    
 });    
</script>

