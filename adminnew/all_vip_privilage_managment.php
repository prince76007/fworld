<?php include("includes/header.php");
?>




<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>All Vip Privilage</h1>
    <ol class="breadcrumb">
      <li><a href="vwDashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">all-vip-privilage</li>
    </ol>
  </section>
  
 <?php include("includes/alert_section.php");  ?> 
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
                  <select id="order_status" class="form-control employee-search-input" required>
                     <option value=""> Status</option>
                        <option value="1" >ACTIVE</option>
                        <option value="0">DACTIVE </option>
                        
                  </select>
              </div>
              <div class="form-group">
                  <label for="mobile">Form Date </label>
                  <input type="text" id="form_date" placeholder="Search By Created Date"  class="form-control employee-search-input datepickers"> 
                </div>

              <div class="form-group">
                  <label for="mobile">To Date</label>
                  <input type="text" id="to_date" placeholder="Search By Created Date"  class="form-control employee-search-input datepickers"> 
              </div>  
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
      <h3 class="box-title"> All Vip Privilage
  </h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive">
      
      	<div class="col-xs-12">
       <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModalCenter_assign_vip_privilage">
        Assing Vip Privilage
       </button>
 
     
        <div >  

<br>

<table id="user_table"  class="table table-bordered table-striped">
				<thead>
					<tr>
		    <th> Id</th>
     
        <th>User Details</th>
        <th>Vip</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Status</th>
        <th>Cr Date</th>
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

<?php  include("assign_vip_privilage.php");?>   

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
        //      'excel'
         ],
                "ajax":{
                    url :"ajax/get_all_assign_vip_privilage.php",
                    type: "post",
                    data: function ( data ) {
                    data.order_status = $('#order_status').val();
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
 
    
     $('#user_table').on( 'click', 'a.remove_I_id', function () {
        var id = $(this).attr('data_id');
        console.log(id);
         if (confirm('Are you sure you want to delete this User Vip Details?')) {
         $.ajax({
              type: "POST",
              data: {del_cav_id:id},
              url :"ajax/remove_assing_vip.php",
      
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
