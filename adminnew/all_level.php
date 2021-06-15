<?php include("includes/header.php");
?>

<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>View ALL Level</h1>
    <ol class="breadcrumb">
      <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">View All Level</li>
    </ol>
  </section>
  <?php include("includes/alert_section.php");  ?> 
 
  <!-- First Box-->
  <section class="content">
  <div class="box box-default ">
    <div class="box-header with-border">
      <h3 class="box-title">ALL Level</h3>
    </div>
    <!-- /.box-header -->
  

          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Profile Level</a></li>
              <li><a href="#tab_2" data-toggle="tab">Live Room Level</a></li>
            </ul>
            <!-- .tab-content -->
            <div class="tab-content">
              <!-- .tab-pane -->
              <div class="tab-pane active" id="tab_1">
                <div class="box-body table-responsive"> 
                  <b>Profile Level:</b>

                  <br>
                  <table id="profile_level_table"  class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th> Id</th>
                  <th> Level Tag </th>
                  <th> Title </th>
                  <th>Icon</th>
                  <th> Level Expo </th>
                  <!-- <th> Likes </th> -->
                  <th>Description  </th>
                  <th>Date</th>

                  <th>ACTON</th>
                  </tr>
                  </thead>
                  </table>
                </div>  
              </div>
              <!-- .tab-pane -->
              <div class="tab-pane" id="tab_2">
                 <div class="box-body table-responsive"> 

                  <b>Live Room Level:</b>

                  <br>
                  <table id="room_level_table"  class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th> Id</th>
                  <th> Level Tag </th>
                  <th> Title </th>
                  <th>Icon</th>
                  <th> Level Expo </th>
                  <!-- <th> Likes </th> -->
                  <th>Description  </th>
                  <th>Date</th>

                  <!-- <th>ACTON</th> -->
                  </tr>
                  </thead>
                  </table>
                </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->


   



	
</div>
</section>

<?php include("includes/footer.php");?> 

<script type="text/javascript" language="javascript" >
  $(document).ready( function () {
    var table =$('#profile_level_table').DataTable({
        'paging'      : true,
        'autoWidth'   : false,
                "processing": true,
                "serverSide": true,
                "ajax":{
                    url :"ajax/get_all_level.php?type=profile_level",
                    type: "get",
                 error: function(){  // error handling
                  $(".profile_level_table-error").html("");
                  }
                  }
    });

    var room_level_table =$('#room_level_table').DataTable({
        'paging'      : true,
        'autoWidth'   : false,
                "processing": true,
                "serverSide": true,
                "ajax":{
                    url :"ajax/get_all_level.php?type=room_level",
                    type: "get",
                 error: function(){  // error handling
                  $(".room_level_table-error").html("");
                  }
                  }
    });
    
     
 });    
</script>
