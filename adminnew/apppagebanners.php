<?php 
error_reporting(1);
include("includes/header.php");

if(isset($_GET["del_apb_id"])){
        $apb_page="Live"; 
        $id=$_GET["del_apb_id"];
         $delsql1="DELETE FROM `app_pages_banners` WHERE apb_page='$apb_page' and  `apb_id` =$id ";  
          mysqli_query($mysqli,$delsql1) or die(mysqli_error($mysqli));
          $_SESSION['msg']=   $statusMsg = " Banner Delete  successfully !";
           header( "Location:apppagebanners.php?page=$apb_page");

}
 // require("includes/function.php");
$BASE_PATH="";
$page=$_GET['page'];  
//edit start
if(isset($_POST["edit"])){
   $extmsg="";
      $apb_id=$_POST['apb_id'];
      $apb_page=$_POST['apb_page'];
      $apb_url=$_POST['apb_url'];
    $scp_file_sql="";
    
    $apb_status=$_POST['apb_status'];

    if(isset($_FILES['scp_picture']['name']) && $_FILES['scp_picture']['name']!=""){
      $icon=$_FILES['scp_picture']['name'];
      $temp=$_FILES['scp_picture']['tmp_name'];
      $pp=$_SERVER["DOCUMENT_ROOT"]."/custom_uploads/app_pages_banner/".$icon;
     if(move_uploaded_file($temp,$pp)){
      $paht=$BASE_PATH."/custom_uploads/app_pages_banner/".$icon;
      $scp_file_sql=" `apb_image` ='".$paht."' , ";
     
         $extmsg="Uplaoded image";
     }else{
         $extmsg="Error in Uplaod image";
     }
    }

  
        $sql1="update  app_pages_banners SET
        $scp_file_sql
        apb_status='$apb_status' , 
        apb_url='$apb_url'
        where apb_page='$apb_page' and apb_id='$apb_id'";
            $update1=mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));
        
        
            if($update1){
                //$statusMsg = "The file ".$fileName. " has been uploaded successfully.";
              $_SESSION['msg']=  $statusMsg = " Update   successfully ! ".$extmsg;
                
            }
            else
            {
             $_SESSION['msg']=   $statusMsg = " Not Update   successfully !";
            }
    //         $id_e=base64_encode($id);
           header( "Location:apppagebanners.php?page=$apb_page");
      //   exit;
    
}
//edit end

//add code 

if(isset($_POST["create"])){
   $extmsg="";
      //$apb_id=$_POST['apb_id'];
      $apb_page=$_POST['apb_page'];
    $apb_url=$_POST['apb_url'];
    $apb_status=$_POST['apb_status'];

    if(isset($_FILES['scp_picture']['name']) && $_FILES['scp_picture']['name']!=""){
      $icon=$_FILES['scp_picture']['name'];
      $temp=$_FILES['scp_picture']['tmp_name'];
      $pp=$_SERVER["DOCUMENT_ROOT"]."/custom_uploads/app_pages_banner/".$icon;
     $paht="";
     if(move_uploaded_file($temp,$pp)){
      $paht=$BASE_PATH."/custom_uploads/app_pages_banner/".$icon;
         $extmsg="Uplaoded image";
     }else{
         $extmsg="Error in Uplaod image";
     }
    }
      if(empty($apb_page)){
        $apb_page='Live';
      }
        $sql1="INSERT INTO `app_pages_banners`( `apb_page`, `apb_image`, `apb_status`, `apb_url`) VALUES ('$apb_page' ,'$paht','$apb_status' , '$apb_url')";
         $insert1=mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));
            $last_insertid = mysqli_insert_id($mysqli);
            if($last_insertid ){
                //$statusMsg = "The file ".$fileName. " has been uploaded successfully.";
              $_SESSION['msg']=  $statusMsg = " Insert successfully ! ".$extmsg;
            }
            else
            {
             $_SESSION['msg']=   $statusMsg = " Not Add  successfully !";
            }
           header( "Location:apppagebanners.php?page=$apb_page");
}
//insert end


//add code close
?>



<div class="content-wrapper"> 
  <!-- banner edit -->

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1><?php echo $page;?> banners</h1>
    <ol class="breadcrumb">
      <li><a href="vwDashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">List-<?php echo $page;?>-banner</li>
    </ol>
  </section>

 <?php include("includes/alert_section.php");  ?> 

  
  
<?php 
 
  if(isset($_GET['page']) && $_GET['page']!="" && isset($_GET['apb_id']) && $_GET['apb_id']!="New"){ 
  $tag=$_GET['page'];
  $apb_isd=$_GET['apb_id'];
  $sqli="select * from `app_pages_banners` WHERE apb_id='$apb_isd' and apb_page='$tag' ";
  $data=mysqli_query($mysqli,$sqli) or die(mysqli_error($mysqli));
  $row=mysqli_fetch_assoc($data);   
  if($row){ 
?>
 <!-- Main content -->
 <section class="content">

  <!-- banner edit -->
     <div class="row edit-wala-section">
      <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo $page;?> banner</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" enctype="multipart/form-data">
              <input type="hidden" name="apb_id" value="<?php echo $row['apb_id'];?>">
              <input type="hidden" name="apb_page" value="<?php echo $row['apb_page'];?>">

              <div class="box-body">
                
                 <div class="form-group">
                  <label for="scp_picture">Image</label>
                  <input type="file" name="scp_picture" class="form-control" id=""     >
                </div> 

                <div class="form-group">
                  <label for="apb_url">Url</label>
                  <input type="text" name="apb_url" class="form-control"  value="<?php echo $row['apb_url'];?>" >
                </div> 
      
              
              <div class="form-group">
                  <label for="mobile"> Status </label>
                  <select id="3" class="form-control employee-search-input"  name="apb_status" required>
                        <option value=""> Status</option>
                        <option value="1" <?php if($row['apb_status']==1){ echo 'selected'; }?> >ACTIVE</option>
                        <option value="0" <?php if($row['apb_status']==0){ echo 'selected'; }?>>DACTIVE </option>
                  </select>
              </div>  
              
             </div>
              <div class="box-footer">
                <input type="submit" name="edit" class="btn btn-primary" value="Update Banner">
               <input type="reset" class="btn btn-danger" value="Cancel">
              </div>
          </form>
             
           </div> 
         </div>  
       

       <!-- left column -->
        <div class="col-md-6">
              <div class="box-body">
               <?php if($row['apb_image']!=""){ ?>
               <img  src="<?php echo BASEPATH.$row['apb_image'];?>" alt="i" width="200"/>
               <?php }else{ echo "Image not setup"; } ?>      
              </div>
        </div> 
     </div>  
  <!-- banner edit -->
</section>

<?php 
  } //row
}else
if(isset($_GET['apb_id']) && $_GET['apb_id']=="New"){
//add code
?>
<!-- Main content -->
 <section class="content">

  <!-- banner edit -->
     <div class="row edit-wala-section">
      <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo $page;?> banner</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" enctype="multipart/form-data">
              <input type="hidden" name="apb_id" value="New">
              <input type="hidden" name="apb_page" value="<?php echo $page;?>">

              <div class="box-body">
                
                 <div class="form-group">
                  <label for="scp_picture">Image</label>
                  <input type="file" name="scp_picture" class="form-control" id=""     >
                </div> 

               <div class="form-group">
                  <label for="apb_url">Url</label>
                  <input type="text" name="apb_url" class="form-control"  value="" >
                </div> 
            
              <div class="form-group">
                  <label for="mobile"> Status </label>
                  <select id="3" class="form-control employee-search-input"  name="apb_status" required>
                        <option value=""> Status</option>
                        <option value="1" >ACTIVE</option>
                        <option value="0" >DACTIVE </option>
                  </select>
              </div>  
              
             </div>
              <div class="box-footer">
                <input type="submit" name="create" class="btn btn-primary" value="Add Banner">
               <input type="reset" class="btn btn-danger" value="Cancel">
              </div>
          </form>
             
           </div> 
         </div>  
       

       <!-- left column -->
        <div class="col-md-6">
              <div class="box-body">
              </div>
        </div> 
     </div>  
  <!-- banner edit -->
</section>


<?php  
//add code close
}else{
  ?> 
<!-- Main content -->
 <section class="content">
 <!-- First Box-->
  <div class="box box-default ">
    <div class="box-header with-border">
      <h3 class="box-title">ALL Banners</h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive"> 

        <div class="col-xs-12">
          <div class="pull-right">
            <a class="btn btn-primary" href="apppagebanners.php?page=Live&apb_id=New">Add </a>
          </div>
        <br>
        <table id="user_table"  class="table table-bordered table-striped">
        <thead>
          <tr>
         <th> Id</th>
         <th> Image </th>
         <th> Url </th>
    
         <th> Status</th>
         <th>ACTON</th>
          </tr>
        </thead>
        <thead>
          <?php 
         $tag=$_GET['page'];
      $sqli="select * from `app_pages_banners` WHERE  apb_page='$tag' ";
      $res=mysqli_query($mysqli,$sqli) or die(mysqli_error($mysqli));
      $data_list=mysqli_fetch_all($res, MYSQLI_ASSOC); 
        foreach ($data_list as $value) {
          ?>
         <tr>
           <td><?php echo $value['apb_id'];?> </td>
           
           <td>
            <?php if($value['apb_image']!=""){ ?>
               <img  src="<?php echo BASEPATH.$value['apb_image'];?>" alt="i" width="250" height="250"/>
               <?php }else{ echo "Image not setup"; } ?>      
            </td>
           <td><?php echo $value['apb_url'];?> </td>
           <td>
            <?php if($value['apb_status']==1) { echo 'ACTIVE'; }else{ echo 'DACTIVE'; }?> </td>
           <td><a class="btn btn-primary" href="apppagebanners.php?page=Live&apb_id=<?php echo $value['apb_id'];?>">Edit </a>

            <a class="btn btn-danger" href="apppagebanners.php?page=Live&del_apb_id=<?php echo $value['apb_id'];?>">Delete </a>
            </td>
          
          </tr>
          <?php
           }      
          ?>
        
        </thead>
      </table>
      </div>

     
     </div>
     </div>
    <!-- banner list -->
</section>

<?php } ?>
 <!-- close Main content -->
  


<?php include("includes/footer.php");?>       

