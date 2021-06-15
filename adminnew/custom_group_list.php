<?php include("includes/header.php");
?>




<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>ALL Group</h1>
    <ol class="breadcrumb">
      <li><a href="vwDashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">ALL Group list</li>
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
       <!-- 
       <div class="form-group">
         <label for="mobile"> Search by Name</label>    

<input type="text" id="1" placeholder="NAME"  class="employee-search-input form-control">
 </div>
   <div class="form-group">
         <label for="mobile"> Search by Mobile</label>    

<input type="text" id="2" placeholder="Mobile"  class="employee-search-input form-control">
 </div>

 -->

 
 <div class="form-group">
         <label for="mobile"> Status</label>
         
<select id="4" class="employee-search-input form-control" required> <option value="" >Status</option>

    <option value="Block" >Block</option><option value="Unblock" >Unblock </option>
                   
</select>
</div>
      
        <!--  <div class="form-group">
                  <label for="mobile"> Permission </label>
              <select id="3" class="form-control employee-search-input" required>
                 <option value=""> Permission</option>
                    <option value="1" >ACTIVE</option>
                    <option value="0">DACTIVE </option>
                    
              </select>
        </div> -->

              <div class="form-group">
                  <label for="mobile"> DATE </label>
                  <input type="text" id="5" placeholder="Search By Created Date"  class="form-control employee-search-input datepickers"> 
                </div>

    
      </div>
    </div>
  




     <div class="box box-body">
 
    <div class="box-header with-border">
      <h3 class="box-title">All Group</h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive">
      
      	<div class="col-xs-12">
            <a class="btn btn-primary pull-right" href="addedit_customgroup.php">Add New Group</a>
	
     <div >  

<br>

<table id="user_table"  class="table table-bordered table-striped">
				<thead>
					<tr>
		  <th> Group Id</th>
         <th>Group Name</th>
         <th>Users</th>
        <th>Created date</th>
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
        
        'paging'      : true,
        'autoWidth'   : true,
                "processing": true,
                "serverSide": true,
        
                "ajax":{
                    url :"ajax/get_all_custom_group.php",
                    type: "post",
                 error: function(){  // error handling
                  $(".user_table-error").html("");
                  }
                  }
    });
    
     $('#user_table').on( 'click', 'a.remove_I_id', function () {
        var id = $(this).attr('data_id');
        console.log(id);
         if (confirm('Are you sure you want to delete this Group?')) {
         $.ajax({
              type: "POST",
              data: {del_user_id:id},
              url :"ajax/del_group.php",
      
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
