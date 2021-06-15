  	<section class="">
	    <div class="row">
        <div class="col-md-12 col-sm-12">
      
             <?php 
     if(isset($msg)){
      echo " <div class='alert alert-success'> <strong>Success!</strong>".$msg."</div>"; }
      ?>
              <?php if(isset($error))  echo $error;  ?>
    
   			        <?php if(isset($_SESSION['msg'])){?> 
                 <div class="alert alert-success alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <?php echo $_SESSION['msg']; ?> </div>
                <?php unset($_SESSION['msg']);}?> 


                <?php if(isset($_SESSION['success'])){?> 
                 <div class="alert alert-success alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <?php echo $_SESSION['success']; ?> </div>
                <?php unset($_SESSION['success']);}?>

                <?php if(isset($_SESSION['error'])){?> 
                 <div class="alert alert-error alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <?php echo $_SESSION['error']; ?> </div>
                <?php unset($_SESSION['error']);}?>                 
        </div>      
      </div>
    </section>