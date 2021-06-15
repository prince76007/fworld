<?php 
include("includes/header.php");
include("includes/connection.php");

  global $mysqli;
?>

<?php 
    if(isset($_POST['submit']))
    {
        //print_r($_POST);die;
        date_default_timezone_set('Asia/Kolkata');
       // $today  = date('Y-m-d');
        $daily_task_id = $_POST['daily_task_id'];
        $daily_task_total_target    = $_POST['daily_task_total_target'];
        $daily_task_par_target    = $_POST['daily_task_par_target'];
        
        $daily_task_par_day_target = $daily_task_total_target*$daily_task_par_target;
       
      
       $sql=" UPDATE `daily_task` SET `daily_task_total_target` = '$daily_task_total_target',`daily_task_par_target`='$daily_task_par_target' ,   `daily_task_par_day_target` = '$daily_task_par_day_target' WHERE `daily_task_id` = '$daily_task_id'";
       // echo $sql;die;
        $query = mysqli_query($mysqli,$sql) ;//or die(mysqli_error($conn));
        if($query == true)
         {
          $_SESSION['success']= " Daliy Task Successfully Update ! " ;
         }else{
           $_SESSION['error']= " Error In Daliy Task Update ! " ;
         }
        
                
    }
?>
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>View Daliy Task ( for Silver Coin Collect )</h1>
    <ol class="breadcrumb">
      <li><a href="vwDashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">View Daliy Task </li>
    </ol>
  </section>
  <?php include("includes/alert_section.php");  ?> 
 
  <!-- First Box-->
  <section class="content">

 



  <div class="box box-default ">
    <div class="box-header with-border">
      <h3 class="box-title">All Days Task </h3>
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
            <th>So no</th><th>Day</th><th>Total Target</th><th>Par Target Coin</th> <th>Total</th><th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php  
          $select = "select * from daily_task";
      $qury   =  mysqli_query($mysqli,$select);
      while($daily_task_data = mysqli_fetch_assoc($qury)) 
      {
        ?>
        
        <tr style=" text-align: center;">
          <form  action="" method="POST" enctype="multipart/form-data">  
          <td> 
            <input type="hidden" name="daily_task_id" value="<?php echo $daily_task_data['daily_task_id'];?>">
            <?php echo $daily_task_data['daily_task_id'];?>
          </td>
          <td> 
            <?php echo $daily_task_data['daily_task_title'];?>
          </td>
          <td>
            <input type="number" name="daily_task_total_target" value="<?php echo $daily_task_data['daily_task_total_target'];?>">
          </td>
          <td>
            <input type="number" name="daily_task_par_target" value="<?php echo $daily_task_data['daily_task_par_target'];?>">
          </td>
          <td>
            <?php echo $daily_task_data['daily_task_par_day_target'];?>
          </td>
          <td> 
            <input type="submit" value="Update" name="submit" class="btn btn-primary">
          </td>
          </form>
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

