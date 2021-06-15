<?php 
include("includes/header.php");
require("includes/function.php");
if(isset($_POST["submit"]) )
{

     $id=$_POST['recharge_plan_id'];
     $title=$_POST['title'];
     $inr=$_POST['inr'];
     $coin=$_POST['coin'];    
     $des = filter_input(INPUT_POST, 'des', FILTER_SANITIZE_STRING);
  $date=date('Y-m-d');
  
if($_POST["submit"]=="Update"){
   $extmsg="";
       $sql1="update  recharge_plan SET
        title='".$title."' , 
        inr='".$inr."' ,
        coin='".$coin."' , 
        des='".$des."' , 
        date='".$date."'  
        where recharge_plan_id='".$id."'";
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
          // header( "Location:edit_user.php?user_id=$id");
} //update

if($_POST["submit"]=="Create"){
   $extmsg="";
       $sql1="INSERT INTO `recharge_plan`( `title`, `des`, `inr`, `coin`, `date`) VALUES (
        '".$title."' , 
        '".$des."' ,
        '".$inr."' ,
        '".$coin."' ,
        '".$date."'   

        )";
        mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));
         $lastid=mysqli_insert_id($mysqli);
          if($lastid){
                //$statusMsg = "The file ".$fileName. " has been uploaded successfully.";
              $_SESSION['msg']=  $statusMsg = " Record Added successfully ! ".$extmsg;
              header( "Location:addedit_recharge_plan.php?recharge_plan_id=".$lastid);
           }
            else
            {
             $_SESSION['msg']=   $statusMsg = "Record  Not Added  successfully !";
            }
    //         $id_e=base64_encode($id);
} //update

}
$h1="Add Rechagre Plan";
if($_GET['recharge_plan_id']!='new'){
$h1="Update Rechagre Plan";

$id=$_GET['recharge_plan_id'];
$sqli="select * from `recharge_plan` WHERE recharge_plan_id='$id'";
$data=mysqli_query($mysqli,$sqli) or die(mysqli_error($mysqli));
$row=mysqli_fetch_assoc($data);   
}
?>


<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1><?php echo $h1; ?></h1>
    <ol class="breadcrumb">
      <li><a href="vwDashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
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
              <h3 class="box-title">Rechagre Plan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data">
              <input type="hidden" name="recharge_plan_id" value="<?php if(isset($row)){ echo $row['recharge_plan_id'];} ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="first_name"> Date</label>
                  <input type="text" class="form-control" id="" placeholder="Enter Title" required  value="<?php if(isset($row)){ echo $row['date'];} ?>"  readonly>
                </div>
             
                <div class="form-group">
                  <label for="first_name"> Title</label>
                  <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title" required  value="<?php if(isset($row)){ echo $row['title'];} ?>" >
                </div>
                
                <div class="form-group">
                  <label for="inr"> Inr </label>
                  <input type="number" name="inr" class="form-control" id="inr" placeholder="Enter Inr" required  value="<?php if(isset($row)){echo $row['inr'];}?>">
                </div>

                <div class="form-group">
                  <label for="coin"> Coin </label>
                  <input type="number" name="coin" class="form-control" id="coin" placeholder="Enter Coin" required  value="<?php if(isset($row)){ echo $row['coin']; }?>">
                </div>
               
                
                <div class="form-group">
                  <label for="des">Des</label>
                  <textarea class="form-control" id="des" name="des" placeholder="Enter Des"><?php if(isset($row)){echo $row['des'];}?></textarea>
                </div> 

             </div>
        
                <div class="box-footer">
                <input type="submit" name="submit" class="btn btn-primary" value="<?php   
if($_GET['recharge_plan_id']!='new'){ echo"Update"; }else{ echo "Create"; } ?>">
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

