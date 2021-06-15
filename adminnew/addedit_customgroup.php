<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("includes/header.php");
require("includes/function.php");

if(isset($_POST["submit"]) )
{
 
     $id=$_POST['custom_group_id'];
     $custom_group_name=$_POST['custom_group_name'];
     $date=date('Y-m-d');

    
  
if($_POST["submit"]=="Update"){
  

     $sql_p="";
       $sql1="update  custom_group SET
        custom_group_name='".$custom_group_name."' , 
        custom_group_cr_date='".$date."'  
        where custom_group_id='".$id."'";
        $update1=mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));
          
          if($update1){
                //$statusMsg = "The file ".$fileName. " has been uploaded successfully.";
              $_SESSION['success']=   " Update   successfully ! ".$sql_p;
            }
            else
            {
             $_SESSION['error']=    " Not Update   successfully !".$sql_p;
            }
    //         $id_e=base64_encode($id);
          // header( "Location:edit_user.php?user_id=$id");
} //update

if($_POST["submit"]=="Create"){
  
 
       $sql1="INSERT INTO `custom_group`( `custom_group_name`, `custom_group_cr_date`) VALUES (
        '".$custom_group_name."' ,
        '".$date."'   

        )";
        mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));
         $lastid=mysqli_insert_id($mysqli);
          if($lastid){
                //$statusMsg = "The file ".$fileName. " has been uploaded successfully.";
              $_SESSION['success']=   " Record Added successfully ! ";
           }
            else
            {
             $_SESSION['error']=  "Record  Not Added  successfully !".$sql1;
            }
          //header( "Location:addedit_customgroup.php?group_id=".$lastid);
          header( "Location:custom_group_list.php");
          
            
    //         $id_e=base64_encode($id);
} //update

}

global $mysqli;
$h1="Add Group";
if(isset($_GET['group_id']) && $_GET['group_id']){
$h1="Update Group ";

$id=$_GET['group_id'];
$sqli="select * from `custom_group` WHERE custom_group_id='$id'";
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
              <h3 class="box-title">Group</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data">
              <input type="hidden" name="custom_group_id" value="<?php if(isset($row)){ echo $row['custom_group_id'];} ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="first_name"> Date</label>
                  <input type="text" class="form-control" id="" placeholder="Enter Date" required  value="<?php if(isset($row['custom_group_cr_date']) && $row['custom_group_cr_date']!=""){ echo $row['custom_group_cr_date'];}else{ echo date('Y-m-d'); } ?>"  readonly>
                </div>
             
                <div class="form-group">
                  <label for="first_name"> Group Name</label>
                  <input type="text" class="form-control" name="custom_group_name" id="title" placeholder="Enter Group Name" required  value="<?php if(isset($row)){ echo $row['custom_group_name'];} ?>" >
                </div>
              

             </div>
        
                <div class="box-footer">
                <input type="submit" name="submit" class="btn btn-primary" value="<?php   
if(isset($id)){ echo"Update"; }else{ echo "Create"; } ?>">
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

