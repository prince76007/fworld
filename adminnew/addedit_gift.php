<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("includes/header.php");
require("includes/function.php");

if(isset($_POST["submit"]) )
{
$server_path=$_SERVER['DOCUMENT_ROOT'];  
$badge_path="/custom_uploads/gifts/";
     $id=$_POST['gift_id'];
     $gift_title=$_POST['gift_title'];
    
     $gift_exp= "";//$_POST['gift_exp'];
     $gift_amt="";//$_POST['gift_amt'];
     $gift_diamond=$_POST['gift_diamond'];
     if($_POST['gift_is_flash']){
      $gift_is_flash=$_POST['gift_is_flash'];
     }else{
     $gift_is_flash=0;
     }
    
     $gift_status=$_POST['gift_status'];    
     $description = filter_input(INPUT_POST, 'gift_des', FILTER_SANITIZE_STRING);
    $date=date('Y-m-d');
  
if($_POST["submit"]=="Update"){

    $gift_icon_image="";
    if(isset($_FILES['gift_icon']['name']) && $_FILES['gift_icon']['name']!=""){
   
        $gift_icon_image1=uniqid().trim($_FILES['gift_icon']['name']);
     
        $temp=$_FILES['gift_icon']['tmp_name'];
        if(move_uploaded_file($temp,$server_path.$badge_path.$gift_icon_image1)){  
         $gift_icon_image=$badge_path.$gift_icon_image1;
         }else{
         // echo "eorr".die( 're');
         }   
    }

     $animation_gift_icon_image="";
    if(isset($_FILES['gift_animation_icon']['name']) && $_FILES['gift_animation_icon']['name']!=""){
   
        $gift_animation_icon1=uniqid().trim($_FILES['gift_animation_icon']['name']);
     
        $temp=$_FILES['gift_animation_icon']['tmp_name'];
        if(move_uploaded_file($temp,$server_path.$badge_path.$gift_animation_icon1)){  
         $animation_gift_icon_image=$badge_path.$gift_animation_icon1;
         }else{
         // echo "eorr".die( 're');
         }   
    }
 $gift_icon_image_sql="";
  if($gift_icon_image!=""){
   $gift_icon_image_sql=" gift_icon='".$gift_icon_image."' , ";
  }
 

  $gift_animation_icon_image_sql="";
  if($animation_gift_icon_image!=""){
   $gift_animation_icon_image_sql=" gift_animation_icon='".$animation_gift_icon_image."' , ";
  }

   $extmsg="";
     $sql_p="";
       $sql1="update gift SET
        gift_title='".$gift_title."' , 
        ".$gift_icon_image_sql ."
        ".$gift_animation_icon_image_sql."
        gift_des='".$description."',  
        gift_qty='".$gift_qty."' , 
        gift_amt='".$gift_amt."' , 
        gift_des='".$description."' ,
        gift_date='".$date."' , 
        gift_exp='".$gift_exp."' , 
        gift_diamond='".$gift_diamond."' , 
        gift_status='".$gift_status."' ,  
        gift_is_flash='".$gift_is_flash."'  
        
        where gift_id='".$id."'";
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
           header( "Location:addedit_gift.php?gift_id=".$id);
} //update

if($_POST["submit"]=="Create"){
   $extmsg="";
   
    $gift_icon_image="";
     if(isset($_FILES['gift_icon']['name']) && $_FILES['gift_icon']['name']!=""){
        $badge_color_icon=uniqid().trim($_FILES['gift_icon']['name']);
     
        $temp=$_FILES['gift_icon']['tmp_name'];
        if(move_uploaded_file($temp,$server_path.$badge_path.$badge_color_icon)){  
         $gift_icon_image=$badge_path.$badge_color_icon;
         }else{
         // echo "eorr".die( 're');
         }   
  
    }

    $animation_gift_icon_image="";
    if(isset($_FILES['gift_animation_icon']['name']) && $_FILES['gift_animation_icon']['name']!=""){
   
        $gift_animation_icon1=uniqid().trim($_FILES['gift_animation_icon']['name']);
     
        $temp=$_FILES['gift_animation_icon']['tmp_name'];
        if(move_uploaded_file($temp,$server_path.$badge_path.$gift_animation_icon1)){  
         $animation_gift_icon_image=$badge_path.$gift_animation_icon1;
         }else{
         // echo "eorr".die( 're');
         }   
    }
 

      $sql1="INSERT INTO `gift`( `gift_title`,`gift_is_flash`, `gift_icon`,`gift_animation_icon`, `gift_qty`, `gift_amt`, `gift_des`, `gift_date`, `gift_exp`, `gift_diamond`, `gift_status`) VALUES (
        '".$gift_title."' , 
        '".$gift_is_flash."' , 
       
        '".$gift_icon_image."' ,
        '".$animation_gift_icon_image."',
        '".$gift_qty."' , 
        '".$gift_amt."' , 
        '".$description."' ,
        '".$date."' , 
        '".$gift_exp."' , 
        '".$gift_diamond."' , 
      
        '".$gift_status."' 
        )";
        mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));
         $lastid=mysqli_insert_id($mysqli);
          if($lastid){
             //$statusMsg = "The file ".$fileName. " has been uploaded successfully.";
              $_SESSION['msg']=  $statusMsg = " Record Added successfully ! ".$extmsg;
              header( "Location:addedit_gift.php?gift_id=".$lastid);
           }
           else
           {
             $_SESSION['msg']=   $statusMsg = "Record  Not Added  successfully !";
           }
    //         $id_e=base64_encode($id);
} //update

}

global $mysqli;
$h1="Add Gift";
if($_GET['badge_id']!='new'){
$h1="Update Gift";

$id=$_GET['gift_id'];
$sqli="select * from `gift` WHERE gift_id='$id'";
$data=mysqli_query($mysqli,$sqli) or die(mysqli_error($mysqli));
$row=mysqli_fetch_assoc($data);   
}
?>


<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1><?php echo $h1; ?></h1>
    <ol class="breadcrumb">
      <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><?php echo $h1; ?></li>
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
              <h3 class="box-title">Gift</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data">
              <input type="hidden" name="gift_id" value="<?php if(isset($row)){ echo $row['gift_id'];} ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="gift_diamond">Date </label>
                  <input type="text" class="form-control"  id="" placeholder="Enter gift Date"  value="<?php if(isset($row)){ echo $row['gift_date'];} ?>" readonly>
                </div>   


                <div class="form-group">
                  <label for="gift_title"> Gift Title</label>
                  <input type="text" class="form-control" name="gift_title" id="gift_title" placeholder="Enter Gift Title" required  value="<?php if(isset($row)){ echo $row['gift_title'];} ?>" >
                </div>
                
                <div class="form-group">
                  <label for="gift_icon"> Icon  </label>
				        <?php if(isset($row)){ ?>
                  <img src="<?php if(isset($row)){echo $row['gift_icon'];}?>" width="100" height="100">
                <?php } ?>
                  <input type="file" name="gift_icon" class="form-control" id="gift_icon"  >
                </div>


                <div class="form-group">
                  <label for="gift_animation_icon"> Animation Icon  </label>
                <?php if(isset($row)){ ?>
                  <img src="<?php if(isset($row)){echo $row['gift_animation_icon'];}?>" width="100" height="100">
                <?php } ?>
                  <input type="file" name="gift_animation_icon" class="form-control" id="gift_animation_icon"  >
                </div>  
                
 	
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea class="form-control" id="description" name="gift_des" placeholder="Enter Des"><?php if(isset($row)){echo $row['gift_des'];}?></textarea>
                </div> 

                <div class="form-group "style="display: none">
                  <label for="gift_diamond">Qty</label>
                  <input type="number" class="form-control" name="gift_qty" id="gift_qty" placeholder="Enter Qty"   value="<?php if(isset($row)){ echo $row['gift_qty'];} ?>" >
            
                </div> 
                <?php /*<div class="form-group">
                  <label for="gift_diamond">gift Exp </label>
                  <input type="text" class="form-control" name="gift_exp" id="gift_exp" placeholder="Enter gift exp" required  value="<?php if(isset($row)){ echo $row['gift_exp'];} ?>" >
            
                </div>  */?> 

                <div class="form-group">
                  <label for="gift_diamond">Diamond</label>
                  <input type="text" class="form-control" name="gift_diamond" id="gift_diamond" placeholder="Enter Diamond" required  value="<?php if(isset($row)){ echo $row['gift_diamond'];} ?>" >
            
                </div> 

                <div class="form-group">
                  <label class="">Special Flash:</label>
                    <input type="checkbox" name="gift_is_flash" value="1" id="special_event" <?php if(isset($row['gift_is_flash']) && $row['gift_is_flash']==1){  
                    echo 'checked';} ?> >
                </div>
              
                 <div class="form-group">
                    <label for="first_name"> Gift Status</label>
                  <select name="gift_status" class="form-control">
                    <?php 
                    $statu="";
                    if(isset($row)){ $statu=$row['gift_status'];} ?>
                    <?php echo get_status_dropdown($statu);?>
                  </select>
                 </div> 
                
             </div>
        
                <div class="box-footer">
                <input type="submit" name="submit" class="btn btn-primary" value="<?php     
              if($_GET['gift_id']!='new'){ echo"Update"; }else{ echo "Create"; } ?>">
               <input type="reset" class="btn btn-danger" value="Cancel">
              </div>
           </from>


        </div> 
     </div>  
       


      <!-- left column -->
        <div class="col-md-6">
              

      
        </div> 
     </div>  

        

  </div> 
	
</section>
 <!-- close Main content -->
  


<?php include("includes/footer.php");?>       

