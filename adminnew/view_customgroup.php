<?php include("includes/header.php");

  require("includes/function.php");



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
        <li class="active">view-group-report-details</li>
      </ol>
    </section>

 <?php include("includes/alert_section.php");  ?> 
 <!-- Main content -->
  <!-- First Box-->
  <section class="content">

    


     <div class="box box-body">


  <!-- /.filter -->
    <div class="box-body table-responsive ">
        <form id="form-filter" class="form-horizontal" style="padding: 5%;">
              <div class="form-group">
                  <label for="mobile">Form Date </label>
                  <input type="text" id="form_date" placeholder="Search By "  class="form-control employee-search-input datepickers"> 
                </div>

              <div class="form-group">
                  <label for="mobile">To Date</label>
                  <input type="text" id="to_date" placeholder="Search By "  class="form-control employee-search-input datepickers"> 
              </div>  
               <div class="form-group" >
                        <div class="col-sm-12">
                            <button type="button" id="btn-filter" class="btn btn-primary">Filter</button>
                            <button type="button" id="btn-reset" class="btn btn-default">Reset</button>
                        </div>
                    </div>
        </form>
      </div>
      <!-- filter -->

 
    <div class="box-header with-border">
      <h3 class="box-title"><?php echo $custom_group_name; ?> Report </h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive">
      
        <div class="col-xs-12">
 
	<br>

	<table id="user_table"  class="table table-bordered table-striped">
          <tr>
		        <th>Time</th>
		        <th> Send</th>
		        <th>Receive </th>
		  </tr>
		  <tr>
		        <th>
		          <p>	In APP <span id="in_app"></span></p>
		          <p>	Room Viewer <span id="as_roomviewer_app"></span></p>
		          <p>	Owner <span id="as_roomowner_app"></span></p>
		          <p>	Live Board Caster <span id="as_liveboardcaster_app"></span></p>
		          <p>	Live Board Caster as viewer <span id="as_liveboardcaster_viewer_app"></span></p>
		          
		        </th>
		        <th> 


            <p> Live Room <span id="send_inlive_room"></span> </p>
              <p> Party Room <span id="send_inparty_room"></span></p>
              <p> Inbox <span id="send_ininbox_room"></span></p>
		        </th>

		        <th> 
			      <p>	Live Room <span id="receive_inlive_room"></span> </p>
		          <p>	Party Room <span id="receive_inparty_room"></span></p>
		          <p>	Inbox <span id="receive_ininbox_room"></span></p>
		        </th>
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
      function user_data(form_date , end_date, group_id ,id , type)
      {
        $.ajax({
              type: "GET",
              url :"ajax/Report_wise_ajax.php?id="+id+"&type="+type+"&group_id="+group_id+"&form_date="+form_date+"&end_date="+end_date,
              dataType: 'json',
              
              success: function(result) {
                console.log(result);
                 //alert(result);  
                 $("#in_app").html(result.in_app);
                 $("#as_roomviewer_app").html(result.as_roomviewer_app);
                 $("#as_roomowner_app").html(result.as_roomowner_app);
                 $("#as_liveboardcaster_app").html(result.as_liveboardcaster_app);
                 $("#as_liveboardcaster_viewer_app").html(result.as_liveboardcaster_viewer_app);
                
                 $("#send_inlive_room").html(result.send_inlive_room);
                 $("#send_inparty_room").html(result.send_inparty_room);
                 $("#send_ininbox_room").html(result.send_ininbox_room);
            
                 $("#receive_inlive_room").html(result.receive_inlive_room);
                 $("#receive_inparty_room").html(result.receive_inparty_room);
                 $("#receive_ininbox_room").html(result.receive_ininbox_room);
                    
              },
            });
        }
    $(document).ready(function(){



 //Your  code
    var tt=user_data('' , '' ,<?php echo $_REQUEST['group_id'];?> ,''  , 'group');


    $('#btn-filter').click(function(){ //button filter event click
         tt.reload();
   
      });
    $('#btn-reset').click(function(){ //button reset event click
        $('#form-filter')[0].reset();
        tt.reload();
        //table.ajax.reload();  //just reload table
    });
  
    setInterval(function () {
      tt.reload();
    }, 120000);
 });    
</script>

