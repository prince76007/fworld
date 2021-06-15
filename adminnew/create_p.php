<?php include("includes/header.php");

  require("includes/function.php");
 





?>


<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>UPDATE USER</h1>
    <ol class="breadcrumb">
      <li><a href="vwDashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">edit user</li>
    </ol>
  </section>
   <?php 
     if(isset($msg)){
      echo " <div class='alert alert-success'> <strong>Success!</strong>".$msg."</div>"; }

    ?>

 <!-- Main content -->
 <section class="content">
  
  
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">USER</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1"> Name </label>
                  <input type="text" name="fullname" class="form-control" id="name" placeholder="Enter Name" value="" required>
             
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="" required>
                </div>
               
                 <div class="form-group">
                  <label for="exampleInputEmail1"> Password </label>
                  <input type="pssword" name="password" class="form-control" id="napsswordme" placeholder="Enter UserName" value="" required>
                  
                </div>
                
                <div class="form-group">
                  <label for="mobile">Moblie</label>
                  <input type="text" name="mobile" maxlength="10" class="form-control" id="mobile" placeholder="mobile" value="" required>
                </div>

              <div class="form-group">
                  <label for="mobile">Alternte Number</label>
                  <input type="text" maxlength="15" name="altno" class="form-control" id="alt" placeholder="Alternte Number" value="">
                </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1"> DOB </label>
                  <input type="text" name="username" class="form-control" id="name" placeholder="Enter Date of Birth" value="" required>
                  
                </div>
                <div class="form-group">
                  <label for="mobile">Address</label>
                  <textarea class="form-control" id="address" name="address" placeholder="Enter Address"></textarea>
                </div> 

             </div>
             <div class="box-footer">
              </div>

        </div> 
     </div>  
       


      <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">profile Staus</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                  <div class="form-group">
                  <label for="bustaus">Status</label>
                   <select class="form-control" name="bustatus"> <option value="Block" >Block</option><option value="Unblock" >Unblock </option>
                   
                 </select>
                 </div>   
                  <div class="form-group">
                  <label for="staus" >Permission</label>
                   <select class="form-control" name="adstatus"> <option value="1" >ACTIVE</option><option value="0">DACTIVE </option>
                
                 </select>
                 </div>  
                  <div class="form-group">
                  <label for="staus" >Role</label>
                   <select class="form-control" name="type"> <option value="U">User</option><option value="0">Admin </option>
                
                 </select>
                 </div> 

                   <div class="form-group">
                  <label for="salary">Salary</label>
                  <input type="text" maxlength="10" name="salary" class="form-control" id="cr_at" placeholder="Salary per Month"  value="0">
                </div> 

                 <div class="form-group">
                  <label for="pic">Image</label>
                  <input type="file" name="pic" class="form-control" id=""     >
                </div> 

                 <div class="form-group">
                  <label for="mobile">Created At</label>
                  <input type="text" maxlength="10" name="cr_date" class="form-control" id="cr_at" placeholder="" value="<?php echo date('Y-m-d H:s:i'); ?>"  readonly  >
                </div>   
              
                
              
              

              <div class="box-footer">
                <input type="submit" name="submit" class="btn btn-primary" value="Create">
               <input type="reset" class="btn btn-danger" value="Cancel">
           </from>
              </div>

        </div> 
     </div>  

        

  </div> 
	
</section>
 <!-- close Main content -->
  


<?php include("includes/footer.php");?>       

