<?php include("includes/header.php");
?>

<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>View ALL Report </h1>
    <ol class="breadcrumb">
      <li><a href="vwDashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">View ALL Report </li>
    </ol>
  </section>
  <?php include("includes/alert_section.php");  ?> 
 
  <!-- First Box-->
  <section class="content">

 



  <div class="box box-default ">
    <div class="box-header with-border">
      <h3 class="box-title">ALL Report </h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body "> 

            <div class="col-xs-12">
  
            <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#Live_room_table_tab" data-toggle="tab">Live Room</a></li>
              <li><a href="#Profile_table_tab" data-toggle="tab">Profile</a></li>
              <li><a href="#Video_table_tab" data-toggle="tab">Video </a></li>
            </ul>
            <!-- .tab-content -->
            <div class="tab-content">
              <!-- .tab-pane -->
              <div class="tab-pane active" id="Live_room_table_tab">
                <div class="box-body table-responsive"> 
                  <b>Live Room:</b>

                  <br>
                  <table id="Live_room_table"  class="table table-bordered table-striped">
                     <thead>
                          <tr>
                            <th> Id</th>
                             <!-- <th>Report Type</th> -->
                             <th>Reported Fb id</th>
                             <th>Reported User Name</th>
                             <th>Report Description</th>
                             <th>Report For</th>
                             <th>Created At</th>
                              <th>Action</th>
                           </tr>
                    </thead>
                  </table>
                </div>  
              </div>
              <!-- .tab-pane -->
                <!-- .tab-pane -->
              <div class="tab-pane " id="Profile_table_tab">
                <div class="box-body table-responsive"> 
                  <b>Profile :</b>
                
                  <table id="Profile_table"  class="table table-bordered table-striped">
                     <thead>
                    
                          <tr>
                            <th> Id</th>
                             <!-- <th>Report Type</th> -->
                             <th>Reported Fb id</th>
                             <th>Reported User Name</th>
                             <th>Report Description</th>
                             <th>Report For</th>
                             <th>Created At</th>
                              <th>Action</th>
                           </tr>
                     </thead>
                  </table>
                </div>  
              </div>
              <!-- .tab-pane -->
              <!-- .tab-pane -->
              <div class="tab-pane " id="Video_table_tab">
                <div class="box-body table-responsive"> 
                  <b>Video :</b>

                  <table id="Video_table"  class="table table-bordered table-striped">
                     <thead>
                          <tr>
                            <th> Id</th>
                             <!-- <th>Report Type</th> -->
                             <th>Reported Fb id</th>
                             <th>Reported User Name</th>
                             <th>Report Description</th>
                             <th>Report For</th>
                             <th>Created At</th>
                              <th>Action</th>
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
 </div>
</div>
</div>
</section>

<?php include("includes/footer.php");?> 

<script type="text/javascript" language="javascript" >
    $(document).ready( function () {
    var Ltable =$('#Live_room_table').DataTable({
        //"scrollX": true,
        'paging'      : true,
        'autoWidth'   : false,
                "processing": true,
                "serverSide": true,
                "ajax":{
                    url :"ajax/get_all_report.php?type=Live Room",
                    type: "post",
                 error: function(){  // error handling
                  $(".Live_room_table-error").html("");
                  }
                  }
    });
    
    //
    var Ptable =$('#Profile_table').DataTable({
        //"scrollX": true,
        'paging'      : true,
        'autoWidth'   : true,
                "processing": true,
                "serverSide": true,
                "ajax":{
                    url :"ajax/get_all_report.php?type=Profile",
                    type: "post",
                 error: function(){  // error handling
                  $(".Room_event_table-error").html("");
                  }
                  }
    });
    

    //
    var Vtable =$('#Video_table').DataTable({
       // "scrollX": true,
        'paging'      : true,
        'autoWidth'   : true,
                "processing": true,
                "serverSide": true,
                "ajax":{
                    url :"ajax/get_all_report.php?type=Video",
                    type: "post",
                 error: function(){  // error handling
                  $(".Video_table-error").html("");
                  }
                  }
    });
    
 
     $('#user_table').on( 'click', 'a.report_reason_id', function () {
        var id = $(this).attr('data_id');
        console.log(id);
         if (confirm('Are you sure you want to delete this report ?')) {
         $.ajax({
              type: "POST",
              data: {id:id},
              url :"ajax/del_report_reason.php",
      
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

