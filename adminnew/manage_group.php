<?php include("includes/header.php");

  require("includes/function.php");

if(isset($_POST['add_member']) && $_POST['add_member']!=""){

if($_POST['users_fb_ids']!="" && $_POST['custom_group_id'] ){

date_default_timezone_set('Asia/Kolkata');
$DATE_TIME=date('Y-m-d H:i:s');
  
   $fb_ids_array=$_POST['users_fb_ids'];
   $custom_group_id=$_POST['custom_group_id'];
   $outstring=" Member Added : - ";
    $count_user=0;
      foreach($fb_ids_array as $ubh_fb_id) {

            $qrry_get='INSERT INTO `custom_group_member`( `custom_group_member_fb_id`, `custom_group_id`, `custom_group_member_cr_date`) VALUES ("'.$ubh_fb_id.'","'.$custom_group_id.'","'.$DATE_TIME.'")';
           mysqli_query($mysqli,$qrry_get)or die(mysqli_error($mysqli));
    
           $last_insertid = mysqli_insert_id($mysqli);
         if($last_insertid){
            $count_user++;
         }
      }//foreach loop
    
     $_SESSION['msg']= $outstring. " ".$count_user." successfully ! ";
  
 }
   header('location:manage_group.php?group_id='.$custom_group_id);

}


  if(isset($_REQUEST['group_id']))
 {
     $id=$_REQUEST['group_id'];
     $sql="SELECT * FROM custom_group where custom_group_id='$id'";
     $result=mysqli_query($mysqli,$sql); 
     $uwr_result=mysqli_fetch_assoc($result);
      $group_id=$uwr_result['custom_group_id'];    
      $custom_group_name=$uwr_result['custom_group_name'];    
    
 }


?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Group Details <?php echo $custom_group_name; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">view-group-member-details</li>
      </ol>
    </section>

 <?php include("includes/alert_section.php");  ?> 
 <!-- Main content -->
  <!-- First Box-->
  <section class="content">

 <div class="box box-default collapsed-box ">
    <div class="box-header with-border">
      <h3 class="box-title">Group Setting</h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive live-room-data">
          <form id="form-filter" class="form-horizontal" style="padding: 5%;">
               <div class="form-group">
               </div>
              
              <div class="form-group">
                  <label for="mobile">Select All</label>
                  <input type="checbox" id="select_all" placeholder="Search By Created Date"  class="form-control employee-search-input datepickers"> 
              </div>  
               <div class="form-group" >
                        <div class="col-sm-12">
                            <button type="button" id="btn-filter" class="btn btn-primary">Delete</button>
                        </div>
                    </div>
        </form>

    </div>
    </div>
  




     <div class="box box-body">
 
    <div class="box-header with-border">
      <h3 class="box-title"><?php echo $custom_group_name; ?>  User </h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive">
      
        <div class="col-xs-12">
       <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModalAdd_member">
        Add Member
       </button>
 
<br>

<table id="user_table"  class="table table-bordered table-striped">
        <thead>
          <tr>
        <th>Member Id</th>
        <th> Fb Id</th>
        <th> User Detail </th>
        <th> Join date time</th>
        <th> ACTON </th>
          </tr>
        </thead>
        <thead>
        
        </thead>
      </table>
  
  </div>  
  
 
   </div>
 </div>
</div>
</div>
</section>



<!-- Modal  custom_uploads/badges  -->
<div class="modal fade" id="exampleModalAdd_member" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLongTitle">Select Member </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body"> 
      <form method="post">  
         <input type="hidden" name="custom_group_id" value="<?php echo $id;?>">
        <div class="row">
        <div class="col-md-12 ">
          <div class="form-group">
            <label for="">User </label>
              <select name="users_fb_ids[]" class="form-control select2 select2-hidden-accessible" id="users_fb_id" multiple="" style="width: 100%"  data-placeholder="Select a User" required>
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="ADD " name="add_member" >
      </div>
    </form>
     
    </div>
  </div>
 </div>
</div>



<?php include("includes/footer.php");?> 

<script type="text/javascript" language="javascript" >
  $(document).ready( function () {
    var table =$('#user_table').DataTable({
        
       // "scrollX": true,
        'paging'      : true,
        'autoWidth'   : true,
                "processing": true,
                "serverSide": true,
        
                "ajax":{
                    url :"ajax/get_group_member_users.php?group_id=<?php echo $group_id;?>",
                    type: "get",
                    data: function ( data ) {
                    data.custom_status = $('#status').val();
                    data.form_date = $('#form_date').val();
                    data.end_date = $('#to_date').val();
                    }
       
                  }
    });
    $('#btn-filter').click(function(){ //button filter event click
        table.ajax.reload();  //just reload table
    });
    $('#btn-reset').click(function(){ //button reset event click
        $('#form-filter')[0].reset();
        table.ajax.reload();  //just reload table
    });
 
    
     $('#user_table').on( 'click', 'a.remove_member_id', function () {
        var id = $(this).attr('data_id');
        console.log(id);
         if (confirm('Are you sure you want to this Remove this Member ?')) {
         $.ajax({
              type: "POST",
              data: {group_member_id:id , opration:del},
              url :"ajax/group_ajax.php",
      
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
    
    setInterval(function () {
      table.ajax.reload();
    }, 120000);
 });    
</script>
