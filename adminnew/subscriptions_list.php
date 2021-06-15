<?php include("includes/header.php");
?>




<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>ALL  subscriptions</h1>
    <ol class="breadcrumb">
      <li><a href="vwDashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">ALL  subscriptions list</li>
    </ol>
  </section>
  
 <?php include("includes/alert_section.php");  ?> 
  <!-- First Box-->
  <section class="content">

 



     <div class="box box-body">
 
    <div class="box-header with-border">
      <h3 class="box-title">ALL subscriptions</h3>
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
		     <th> ID</th>
         <th> Subscriptions Name</th>
         <th> Icon</th>
         <th> Badge</th>
        <th>Duration</th>
        <th>Amount</th>
        <th>Diamond</th>
        <th>Last Update</th>
        <th>ACTON</th>
       		</tr>
				</thead>
				<tbody>
				<?php  
include("includes/connection.php");
global $mysqli;


        $qrry_get=" SELECT * FROM `services` ";
        $res=mysqli_query($mysqli,$qrry_get);
        $data_list=mysqli_fetch_all($res, MYSQLI_ASSOC); 
  
        foreach($data_list as $data){
         $badge_id=$data['service_badge_id']; 
        $sql=" SELECT * FROM  badge  where   badge_id=$badge_id ";
       $resultd=mysqli_query($mysqli,$sql)or die(mysqli_error($mysqli));
       $single_badge=mysqli_fetch_assoc($resultd);
        
        $service_icon='<img src="'.$server_file_path.$data['service_icon'].'" width="80" height="80">';
              
        $badge_coloricon= " Badge Not Set";
           if($single_badge){
           if($single_badge['badge_color']!=""){
                $badge_coloricon='<img src="'.$server_file_path.$single_badge['badge_color'].'" width="80" height="80">';
               }else{
                 $badge_coloricon= "Please set color Badge ";
               } 
                
             }  
         echo "<tr>"; 
         echo '<td>'.$data['service_id'].'</td>' ;
			   echo '<td>'.$data['service_name'].'</td>'; 
         echo '<td>'.$service_icon.'</td>'; 
         echo '<td>'.$badge_coloricon.'</td>'; 
         echo '<td>'.$data['service_duration'].'-'.$data['service_duration_type'].'</td>'; 
         echo '<td>'.$data['service_amount'].'</td>'; 
         echo '<td>'.$data['service_diamond'].'</td>'; 
         echo '<td>'.$data['service_up_date'].'</td>'; 
         echo '<td><a href="edit_subscription.php?subscription_id='.$data['service_id'].'" class="btn btn-primary">Edit</a></td>'; 
        // echo '<td>'.$data['service_diamond'].'</td>'; 
        echo "</tr>";
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
