
<?php include("includes/header.php");

    if(isset($_REQUEST['del']))
    {
     $id=base64_decode($_REQUEST['del']);
     $qry="delete from slider_image where id='$id'";
   $qry_o=mysqli_query($mysqli,$qry)or die(mysqli_error($mysqli));
   $_SESSION['msg']="Record Delete Successfully";
    }
?>




<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>ALL Banner</h1>
    <ol class="breadcrumb">
      <li><a href="vwDashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">ALL Banner list</li>
    </ol>
  </section>
  
 <?php include("includes/alert_section.php");  ?> 
  <!-- First Box-->
  <section class="content">


     <div class="box box-body">
 
    <div class="box-header with-border">
      <h3 class="box-title">ALL Banner</h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
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
        <th>S. no</th>
        <th>Name</th>
        <th>Image</th>
        <th>Url</th>
        <th>Status</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        <?php 
        $qry="select * from slider_image order by id desc"; 
		$qry_result=mysqli_query($mysqli,$qry);
		if(mysqli_num_rows($qry_result)>0)
		{
		    $s=1;
		    while($row=mysqli_fetch_assoc($qry_result))
		    {
		        $id=base64_encode($row['id']);
        ?>
      <tr>
        <td><?=$s++;?></td>
        <td><?=$row['image_name'];?></td>
        <td><img src="<?= $base_upload_path.$row['image'];?>" style="width: 100px !important;"></td>
        <td><?=$row['slider_image_redirect_url'];?></td>
        <td><?php echo $row['slider_image_status'];?></td>
        <td><button class="btn btn-sm btn-info" onclick="window.location.href='topbanner.php?edit=<?=$id?>'">Edit</button><button class="btn btn-sm btn-danger" onclick="window.location.href='topbannerlist.php?del=<?=$id?>'">Delete</button></td>
      </tr>
      <?php } }?>
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
        "scrollX": true,
    });
 });    
</script>
  