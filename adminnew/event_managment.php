<?php include("includes/header.php");
?>

<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>View All Events</h1>
    <ol class="breadcrumb">
      <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">view-all-events</li>
    </ol>
  </section>
  <?php include("includes/alert_section.php");  ?> 
 
  <!-- First Box-->
  <section class="content">
  <div class="box box-default ">
    <div class="box-header with-border">
      <h3 class="box-title"> All Events</h3>
      <div class="box-tools pull-right">
             <a href="<?php echo BASEPATH.'adminnew/addedit_event.php?id=new'?>" class="btn btn-success"><i class="fa fa-plus"></i> Add Event</a>
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body"> 

      	<div class="col-xs-12">
  
            <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#Live_event_table_tab" data-toggle="tab">Live Events</a></li>
              <li><a href="#Room_event_table_tab" data-toggle="tab">Room Events</a></li>
              <li><a href="#Gift_event_table_tab" data-toggle="tab">Gifter Events</a></li>
            </ul>
            <!-- .tab-content -->
            <div class="tab-content">
              <!-- .tab-pane -->
              <div class="tab-pane active" id="Live_event_table_tab">
                <div class="box-body table-responsive"> 
                  <b>Live Event:</b>

                  <br>
                  <table id="Live_event_table"  class="table table-bordered table-striped">
                     <thead>
                      <tr>
                     <th>Event ID</th><th>Title</th><th>Image </th><th> Start Date </th><th> End Date </th>
                     <th> Type </th><th>Status</th><th>Cr Date</th><th>ACTION</th>
                     </tr>
                    </thead>
                  </table>
	              </div>  
              </div>
              <!-- .tab-pane -->
                <!-- .tab-pane -->
              <div class="tab-pane " id="Room_event_table_tab">
                <div class="box-body table-responsive"> 
                  <b>Room Event:</b>
                
                  <table id="Room_event_table"  class="table table-bordered table-striped">
                     <thead>
                      <tr>
                     <th>Event ID</th><th>Title</th><th>Image </th><th> Start Date </th><th> End Date </th>
                     <th> Type </th><th>Status</th><th>Cr Date</th><th>ACTION</th>
                     </tr>
                    </thead>
                  </table>
                </div>  
              </div>
              <!-- .tab-pane -->
              <!-- .tab-pane -->
              <div class="tab-pane " id="Gift_event_table_tab">
                <div class="box-body table-responsive"> 
                  <b>Gift Event:</b>

                  <table id="Gift_event_table"  class="table table-bordered table-striped">
                     <thead>
                      <tr>
                     <th>Event ID</th><th>Title</th><th>Image </th><th> Start Date </th><th> End Date </th>
                     <th> Type </th><th>Status</th><th>Cr Date</th><th>ACTION</th>
                     </tr>
                    </thead>
                  </table>
                </div>  
              </div>
              <!-- .tab-pane -->
            


            </div>
            <!-- .tab-content -->

</div>
</div>
      </div>
      </div>
    </section>
</div>
<?php include("includes/footer.php");?> 

<script type="text/javascript" language="javascript" >
  $(document).ready( function () {
    var Ltable =$('#Live_event_table').DataTable({
        'paging'      : true,
        'autoWidth'   : false,
                "processing": true,
                "serverSide": true,
                "ajax":{
                    url :"ajax/get_all_admin_events.php?type=Live",
                    type: "post",
                 error: function(){  // error handling
                  $(".Live_event_table-error").html("");
                  }
                  }
    });
    
    //
    var Rtable =$('#Room_event_table').DataTable({
        'paging'      : true,
       'autoWidth'   : true,
                "processing": true,
                "serverSide": true,
                "ajax":{
                    url :"ajax/get_all_admin_events.php?type=Room",
                    type: "post",
                 error: function(){  // error handling
                  $(".Room_event_table-error").html("");
                  }
                  }
    });
    

    //
    var Gtable =$('#Gift_event_table').DataTable({
        'paging'      : true,
        'autoWidth'   : true,
                "processing": true,
                "serverSide": true,
                "ajax":{
                    url :"ajax/get_all_admin_events.php?type=Gifter",
                    type: "post",
                 error: function(){  // error handling
                  $(".Gift_event_table-error").html("");
                  }
                  }
    });
    


     $('#user_table').on( 'click', 'a.event_id', function () {
        var id = $(this).attr('data_id');
        console.log(id);
         if (confirm('Are you sure you want to delete this Event?')) {
         $.ajax({
              type: "POST",
              data: {id:id},
              url :"ajax/del_gifts.php",
      
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

