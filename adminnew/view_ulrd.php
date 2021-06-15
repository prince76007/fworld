<?php include("includes/header.php");

  require("includes/function.php");

  if(isset($_REQUEST['ulrd_id']))
 {
     $ulrd_id=$_REQUEST['ulrd_id'];

 }


?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      View User live Room Details (Join User)
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">view-user-live-room-detail</li>
      </ol>
    </section>

 <?php include("includes/alert_section.php");  ?> 
 <!-- Main content -->
  <!-- First Box-->
  <section class="content">

 <div class="box box-default collapsed-box ">
    <div class="box-header with-border">
      <h3 class="box-title">FITER</h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive ">
        <form id="form-filter" class="form-horizontal" style="padding: 5%;">
             <div class="form-group">
                  <label for="mobile"> Status </label>
                  <select id="status" class="form-control employee-search-input" required>
                     <option value=""> Status</option>
                        <option value="0">Live</option>
                        <option value="1">Leave</option>
                        
                  </select>
              </div>
           <!--    <div class="form-group">
                  <label for="mobile">Form Date </label>
                  <input type="text" id="form_date" placeholder="Search By Created Date"  class="form-control employee-search-input datepickers"> 
                </div>

              <div class="form-group">
                  <label for="mobile">To Date</label>
                  <input type="text" id="to_date" placeholder="Search By Created Date"  class="form-control employee-search-input datepickers"> 
              </div>   -->
               <div class="form-group" >
                        <div class="col-sm-12">
                            <button type="button" id="btn-filter" class="btn btn-primary">Filter</button>
                            <button type="button" id="btn-reset" class="btn btn-default">Reset</button>
                        </div>
                    </div>
        </form>
      </div>
    </div>
  




     <div class="box box-body">
 
    <div class="box-header with-border">
      <h3 class="box-title">All User live Room Join</h3>
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
        <th> Fb Id</th>
        <th> User Detail </th>
        <th>Join date time</th>
        <th>Leave date time</th>
        <th>Status</th>
        <th>ACTON</th>
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
        
       // "scrollX": true,
        'paging'      : true,
        'autoWidth'   : true,
                "processing": true,
                "serverSide": true,
        
        "dom": 'lBfrtip',
        "buttons": [
             'excel'
        ],
                "ajax":{
                    url :"ajax/get_user_joined_live_room_detail.php?ulrd_id=<?php echo $ulrd_id;?>",
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
 
    
     $('#user_table').on( 'click', 'a.changestatus_fb_id', function () {
        var id = $(this).attr('data_id');
        console.log(id);
         if (confirm('Are you sure you want to block this User Live room Details?')) {
         $.ajax({
              type: "POST",
              data: {live_fb_id:id},
              url :"ajax/ddd.php",
      
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
