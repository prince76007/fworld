<?php include("includes/header.php");

  require("includes/function.php");
 

 if(isset($_POST['update']))
  {

      $extmsg1="";
      $imgsql=" ";
      if($_FILES['big_picture']['name']!="")
      {
        $icon=$_FILES['big_picture']['name'];
        $temp=$_FILES['big_picture']['tmp_name'];
      $pp=$_SERVER["DOCUMENT_ROOT"]."/custom_uploads/banners/".$icon;
     if(move_uploaded_file($temp,$pp)){
        $paht1="/custom_uploads/banners/".$icon;
           $imgsql=' `image`="'.$paht1.'" , ';
          $extmsg1= " Image upload";
      
        }else{
              $extmsg1= " Image not upload";
        } 
      }

      $id=base64_decode($_REQUEST['edit']);
      $qry='Update `slider_image` set `slider_image_status`="'.$_POST["slider_image_status"].'",'.$imgsql.' `slider_image_redirect_url`="'.$_POST["slider_image_redirect_url"].'", `image_name`="'.$_POST["name"].' " where id="'.$id.'"';
      $data_ins=mysqli_query($mysqli,$qry)or die(mysqli_error($mysqli));
      if($data_ins)
      {
          $_SESSION['msg']=" Banner Update Successfully " .$extmsg1 ;
      } 
  }

  
  if(isset($_POST['submit']))
  {
      $extmsg="";
        $icon=$_FILES['big_picture']['name'];
        $temp=$_FILES['big_picture']['tmp_name'];
      $pp=$_SERVER["DOCUMENT_ROOT"]."/custom_uploads/banners/".$icon;
     if(move_uploaded_file($temp,$pp)){
        $paht="/custom_uploads/banners/".$icon;
          $extmsg= "Image upload";
        }else{
          $extmsg= "Image not upload";
        } 
       $slider_image_redirect_url=$_POST['slider_image_redirect_url']; 
    
      $qry='INSERT INTO `slider_image`(`slider_image_status`, `image_name`, `image` , `slider_image_redirect_url`) VALUES ("'.$_POST['slider_image_status'].'","'.$_POST['name'].'","'.$paht.'","'.$slider_image_redirect_url.'")';
      $data_ins=mysqli_query($mysqli,$qry)or die(mysqli_error($mysqli));
      if($data_ins)
      {
          $_SESSION['msg']=" Banner Add Successfully" .$extmsg ;
      }
  }
  
  
 
 if(isset($_REQUEST['edit']))
 {
     $id=base64_decode($_REQUEST['edit']);
     $slider="SELECT * FROM slider_image where id='$id'";
     $slider_result1=mysqli_query($mysqli,$slider); 
     $s_result=mysqli_fetch_assoc($slider_result1);
 }
   

?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Banner
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">add-edit-banner</li>
      </ol>
    </section>

 <?php include("includes/alert_section.php");  ?> 
 <!-- Main content -->
 <section class="content">

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Top Banner</h3>
            </div  >

           <div class="card-body mrg_bottom"> 
            <form  name="addeditcategory" method="POST" class="form form-horizontal" enctype="multipart/form-data">
              
                  <div class="form-group">
                    <label class="col-md-3 control-label">Image Name :-</label>
                    <div class="col-md-6">
                      <input type="text" name="name" id="title" class="form-control" value="<?=$s_result['image_name']?>" placeholder="" >
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-md-3 control-label">Redirect Url :-</label>
                    <div class="col-md-6">
                      <input type="text" name="slider_image_redirect_url" id="slider_image_redirect_url" class="form-control" value="<?=$s_result['slider_image_redirect_url']?>" placeholder="" >
                    </div>
                  </div>
                  
                  
                  <?php if(isset($_REQUEST['edit'])){?>
                  <div class="form-gorup">
                      <label class="col-md-3 control-label">Image </label>
                      <div class="col-md-9">
                      <img src="<?= $base_upload_path.$s_result['image']?>" style="width:100px;margin-bottom: 20px;">
                      </div>
                  </div>
                  <?php }?>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Image :-<br/><p class="control-label-help">(Recommended resolution: 600x293 or 650x317 or 700x342 or 750x366)</p></label>

                    <div class="col-md-6">
                      <div class="fileupload_block">
                         <input type="file" name="big_picture" value="" id="fileupload" <?php if(isset($_REQUEST['edit'])){echo "";}else{echo "required";}?>>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">status:-</label>
                  <div class="col-sm-6">
                       <select class="form-control" name="slider_image_status" required="required">
                    <option value >Please Select status</option>
                   <?php echo get_status_dropdown($s_result['slider_image_status']) ;?>
                    </select>
                  </div>
                </div>
                <br/>
                  <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
                      <button type="submit" name="<?php if(isset($_REQUEST['edit'])){ echo "update";} else{echo "submit";}?>" class="btn btn-primary">
                          <?php if(isset($_REQUEST['edit'])){ echo "UPDATE";} else{echo "SUBMIT";}?></button>
                          
                          <!--<input type="submit" name="submit" value="add">-->
                          
                    </div>
                  </div>
                </div>
            </form>
         </div>
      </div>
    </div>
  
</section>
 <!-- close Main content -->
  


<?php include("includes/footer.php");?>       

  
