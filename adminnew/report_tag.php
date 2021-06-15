<?php 
include("includes/header.php");
  include("includes/function.php");


?>


<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>View ALL Report Tag</h1>
    <ol class="breadcrumb">
      <li><a href="vwDashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">View ALL Report Tag</li>
    </ol>
  </section>
  <?php include("includes/alert_section.php");  ?> 
 
  <!-- First Box-->
  <section class="content">
<?php if(isset($_GET['report_reason_tag_id']) && $_GET['report_reason_tag_id']!=""){ 
$id=$_GET['report_reason_tag_id'];
$sqli="select * from `report_reason_tag` WHERE report_reason_tag_id='$id'";
$data=mysqli_query($mysqli,$sqli) or die(mysqli_error($mysqli));
$row=mysqli_fetch_assoc($data);   

  ?>
 <div class="box box-default ">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Tag</h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa fa-plus"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
      <div class="box-body table-responsive ">
        
           <form role="form" method="post" action="report_tag_add_edit.php" enctype="multipart/form-data">
              <input type="hidden" name="report_reason_tag_id" value="<?php echo $row['report_reason_tag_id'];?>">
                <div class="form-group">
                  <label for="first_name"> Tag Name </label>
                  <input type="text" class="form-control"  name="report_reason_tag_name" placeholder="Enter  Name" required  value="<?php echo $row['report_reason_tag_name'];?>" required>
                </div>


                <div class="form-group">
                  <label for="bustaus"> Tag Type</label>
                   <select class="form-control" name="report_reason_tag_type"> 
                       <?php echo get_report_reason_tag_type_dropdown($row['report_reason_tag_type']);?>
                 
<!--                     <option value="Video" <?php if($row['report_reason_tag_type']=='Video') { echo  'selected="selected"';}?>>Video</option>
                    <option value="Profile" <?php if($row['report_reason_tag_type']=='Profile') { echo  'selected="selected"';}?>>Profile</option> -->

                   </select>
                </div>  


                <div class="form-group">
                  <label for="bustaus">Status</label>
                   <select class="form-control" name="report_reason_tag_status"> 
                    <option value="Active"  <?php if($row['report_reason_tag_status']=='Active') { echo  'selected="selected"';}?>>Active</option>
                    <option value="Inactive"   <?php if($row['report_reason_tag_status']=='Inactive') { echo  'selected="selected"';}?>>Inactive </option>
                   </select>
                </div>   
                
               <input type="submit" name="submit" class="btn btn-primary" value="Update">
               <input type="reset" class="btn btn-danger" value="Cancel">
               
        </form>

      </div>
 </div>
  
<?php  }else{ ?>
 <div class="box box-default collapsed-box ">
    <div class="box-header with-border">
      <h3 class="box-title">Add New Tag</h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa fa-plus"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
      <div class="box-body table-responsive ">
        
           <form role="form" method="post" action="report_tag_add_edit.php" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="first_name"> Tag Name </label>
                  <input type="text" name="tag_name" class="form-control" id="tag_name" placeholder="Enter  Name" required  value="" required>
                </div>


                <div class="form-group">
                  <label for="bustaus"> Tag Type</label>
                   <select class="form-control" name="tag_type"> 
                    <?php echo get_report_reason_tag_type_dropdown();?>
                  </select>
                </div>  


                <div class="form-group">
                  <label for="bustaus">Status</label>
                   <select class="form-control" name="status"> 
                    <option value="Active" >Active</option>
                    <option value="Inactive" >Inactive </option>
                   </select>
                </div>   
                
               <input type="submit" name="submit" class="btn btn-primary" value="Create">
               <input type="reset" class="btn btn-danger" value="Cancel">
               
        </form>

      </div>
 </div>

<?php } ?>

  <div class="box box-default ">
    <div class="box-header with-border">
      <h3 class="box-title">ALL Report Tag</h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive"> 

      	<div class="col-xs-12">
         <div >  



<br>
<table id="user_table"  class="table table-bordered table-striped">
        <thead>
          <tr>
         <th> Id</th>
         <th> Tag Name</th>
         <th>Tag Type</th>
         <th>Create Date</th>
         <th>Status</th>
         <th>Action</th>
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

<?php include("includes/footer.php");?> 

<script type="text/javascript" language="javascript" >
  $(document).ready( function () {
    var table =$('#user_table').DataTable({
        "scrollX": false,
        'paging'      : true,
        'autoWidth'   : true,
                "processing": true,
                "serverSide": true,
                "ajax":{
                    url :"ajax/get_all_report_tag.php",
                    type: "post",
                 error: function(){  // error handling
                  $(".user_table-error").html("");
                  }
                  }
    });
    
     $('#user_table').on( 'click', 'a.report_reason_tag_id', function () {
        var id = $(this).attr('data_id');
        console.log(id);
         if (confirm('Are you sure you want to delete this report tag?')) {
         $.ajax({
              type: "POST",
              data: {id:id},
              url :"ajax/del_report_reason_tag.php",
      
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

