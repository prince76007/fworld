<?php 
include("includes/header.php");
include("includes/connection.php");

  global $mysqli;
?>

<?php 
?>
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>View Live Notification </h1>
    <ol class="breadcrumb">
      <li><a href="vwDashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">live-notification-list</li>
    </ol>
  </section>
  <?php include("includes/alert_section.php");  ?> 
 
  <!-- First Box-->
  <section class="content">

 



  <div class="box box-default ">
    <div class="box-header with-border">
      <h3 class="box-title">All Live Notification</h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive"> 

      	<div class="col-xs-12">
         <div >  



<br>
<table id=""  class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>So no</th><th>Message</th>
          </tr>
        </thead>
        <tbody>
        <?php  
          $select = "select * from ongoing_live_room_notification";
      $qury   =  mysqli_query($mysqli,$select);
      while($daily_task_data = mysqli_fetch_assoc($qury)) 
      {
        ?>
        
        <tr>
          <td> 
            <?php echo $daily_task_data['id'];?>
          </td>
          <td>
            <?php echo $daily_task_data['message_body'];?>
          </td>
        </tr>
          
      
        <?php
      }
      ?>

        </tbody>        
        
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
       });
    
         
 });    
</script>

