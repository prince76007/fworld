<?php
include("includes/connection.php");
if(isset($_POST["submit"]) && $_POST["submit"]=="Update"){
   $extmsg="";
   
    
    $id=$_POST['report_reason_tag_id'];
    
    $report_reason_tag_name=$_POST['report_reason_tag_name'];
    $report_reason_tag_type=$_POST['report_reason_tag_type'];
    $report_reason_tag_status=$_POST['report_reason_tag_status'];    
   // $mobile=$_POST['mobile'];    
   
      echo  $sql1="update  report_reason_tag SET
   
        report_reason_tag_name='".$report_reason_tag_name."' , 
        report_reason_tag_type='".$report_reason_tag_type."' ,
        report_reason_tag_status='".$report_reason_tag_status."'  
        where report_reason_tag_id='".$id."'";
        $update1=mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));
          
          if($update1){
                //$statusMsg = "The file ".$fileName. " has been uploaded successfully.";
              $_SESSION['msg']=  $statusMsg = " Update   successfully ! ".$extmsg;
            }
            else
            {
             $_SESSION['msg']=   $statusMsg = " Not Update   successfully !";
            }
           header( "Location:report_tag.php");
}


if(isset($_POST["submit"]) && $_POST["submit"]=="Create"){
   $extmsg="";
   
    
    $report_reason_tag_name=$_POST['tag_name'];
    $report_reason_tag_type=$_POST['tag_type'];
    $report_reason_tag_status=$_POST['status'];    
   // $mobile=$_POST['mobile'];    
   
        $sql1="INSERT INTO `report_reason_tag`( `report_reason_tag_name`, `report_reason_tag_type`, `report_reason_tag_status`) VALUES ('".$report_reason_tag_name."' ,'".$report_reason_tag_type."' ,'".$report_reason_tag_status."')";  
        
        $update1=mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));
          
          if($update1){
                //$statusMsg = "The file ".$fileName. " has been uploaded successfully.";
              $_SESSION['msg']=  $statusMsg = " Create successfully ! ".$extmsg;
            }
            else
            {
             $_SESSION['msg']=   $statusMsg = " Not Create successfully !";
            }
           header( "Location:report_tag.php");
}
?>