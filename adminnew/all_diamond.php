<?php include("includes/header.php");
?>

<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>View All Diamond</h1>
    <ol class="breadcrumb">
      <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">View All Diamond</li>
    </ol>
  </section>
  <?php include("includes/alert_section.php");  ?> 
 
  <!-- First Box-->
  <section class="content">
  <div class="box box-default ">
    <div class="box-header with-border">
      <h3 class="box-title"> All Diamond</h3>
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
         <th> Quantity </th>
         <th> Likes </th>
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
        "scrollX": true,
        'paging'      : true,
        'autoWidth'   : true,
                "processing": true,
                "serverSide": true,
                "ajax":{
                    url :"ajax/get_romm_plan.php",
                    type: "post",
                 error: function(){  // error handling
                  $(".user_table-error").html("");
                  }
                  }
    });
    
     $('#user_table').on( 'click', 'a.remove_recharge_plan_id', function () {
        var id = $(this).attr('data_id');
        console.log(id);
         if (confirm('Are you sure you want to delete this recharge plan?')) {
         $.ajax({
              type: "POST",
              data: {id:id},
              url :"ajax/del_recharge.php",
      
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

