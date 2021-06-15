<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("includes/header.php");
require("includes/function.php");

if(isset($_GET['remove_smbid']) && $_GET['remove_smbid']!=""  &&  $_GET['id']!="")
{
  $id=$_GET['id'];
  $rmid=$_GET['remove_smbid'];

$smbsql="SELECT * FROM `event_admin_small_banner` where event_admin_small_banner_id='$rmid'";
$smbdata=mysqli_query($mysqli,$smbsql) or die(mysqli_error($mysqli));
$singelsmallbanners=mysqli_fetch_assoc($smbdata); 
    $server_path=$_SERVER['DOCUMENT_ROOT'];  
    $rsmb_path=$server_path.$singelsmallbanners['event_admin_small_banner_image'];
    @unlink($rsmb_path);

  $rsql=" DELETE FROM `event_admin_small_banner` WHERE `event_admin_small_banner_id` =$rmid ";
  mysqli_query($mysqli,$rsql) or die(mysqli_error($mysqli));
  $_SESSION['success']=   " Remove Small Banner successfully ! ";
  header( "Location:addedit_event.php?id=".$id);
}

function add_small_banner($mysqli, $event_id){
     $smlbannerstr='';
    
     
      if(isset($_FILES['small_banner_icon']['name']) && $_FILES['small_banner_icon']['name']!="" ){
      foreach ($_FILES['small_banner_icon']['name'] as $f => $name) 
      {
      
      $server_path=$_SERVER['DOCUMENT_ROOT'];  
      $smb_path="/custom_uploads/admin_events_small_banner/";
    
        $smb_icon=uniqid().trim($_FILES['small_banner_icon']['name'][$f]);
        $temp=$_FILES['small_banner_icon']['tmp_name'][$f];
        if(move_uploaded_file($temp,$server_path.$smb_path.$smb_icon)){  
         $banner=$smb_path.$smb_icon;
      
       $sql1="INSERT INTO `event_admin_small_banner`( `event_admin_id`,`event_admin_small_banner_image`) VALUES (
        '".$event_id."' , 
        '".$banner."'
        )";
        mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));
         //$lastid=mysqli_insert_id($mysqli);
         $smlbannerstr=' Small Banner Add Successfully';
    
        }
       }//for loop 
    }
    return $smlbannerstr;  
}

if(isset($_POST["submit"]) )
{
  $server_path=$_SERVER['DOCUMENT_ROOT'];  
  $level_path="/custom_uploads/admin_events/";
//icon
     $id=$_POST['event_admin_id'];
     $title=$_POST['event_admin_title'];
     $from_date=$_POST['start_date'];
     $enddate=$_POST['end_date'];
      $rule=$_POST['event_admin_rules'];    
     $status=$_POST['event_admin_status'];    
     $type=$_POST['event_admin_type'];    
     $date=date('Y-m-d H:i:s');    
      
 $special_gift= '';
$special_event=(isset($_POST['specail_event'])&& $_POST['specail_event']=='on')?1:0;  
    if($special_event==1 && count($_POST['event_gift'])>2){
       $special_gift= implode(",",array_slice($_POST['event_gift'],0,3));
    }else{$special_event=0;}
    
    
    
    $image="";
    
    if(isset($_FILES['icon']['name']) && $_FILES['icon']['name']!=""){
   
        $badge_color_icon=uniqid().trim($_FILES['icon']['name']);
     
        $temp=$_FILES['icon']['tmp_name'];
        if(move_uploaded_file($temp,$server_path.$level_path.$badge_color_icon)){  
         $image=$level_path.$badge_color_icon;
                $sql1="update  event_admin_new SET
        event_admin_icon='".$image."'  
        where event_admin_id='".$id."'"; 
        $update1=mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));
         }
    }
    $banner='';
    if(isset($_FILES['banner']['name']) && $_FILES['banner']['name']!="" && $special_event==1){
   
        $badge_color_icon=uniqid().trim($_FILES['banner']['name']);
     
        $temp=$_FILES['banner']['tmp_name'];
        if(move_uploaded_file($temp,$server_path.$level_path.$badge_color_icon)){  
         $banner=$level_path.$badge_color_icon;
      $sql1="update  event_admin_new SET
      
        event_special_banner='".$banner."'
        where event_admin_id='".$id."'"; 
        $update1=mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));
         }
    }

    
if($_POST["submit"]=="Update"){
  $icon_sql="";
  if($level_image!=""){
   $icon_sql=" icon='".$level_image."' , ";
  }


     $sql_p="";
       $sql1="update  event_admin_new SET
        event_admin_title='".$title."' , 
        event_admin_from_date='".$from_date."', 
        event_admin_to_date='".$enddate."', 
        event_admin_type='".$type."' , 
        event_admin_status='".$status."' , 
        event_admin_rules='".$rule."' ,
        event_admin_created_date='".$date."',
         event_special_gift='".$special_gift."',  
        event_special='".$special_event."'
     
        where event_admin_id='".$id."'";
        $update1=mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));
        
        add_small_banner($mysqli, $id);  
          if($resp){
              $_SESSION['msg']=  "Small Banner Image :".$resp;
          }
          if($update1){
                //$statusMsg = "The file ".$fileName. " has been uploaded successfully.";
              $_SESSION['success']=   " Update   successfully ! ";
            }
            else
            {
             $_SESSION['error']=    " Not Update   successfully !";
            }
    //         $id_e=base64_encode($id);
          // header( "Location:edit_user.php?user_id=$id");
} //update

if($_POST["submit"]=="Create"){
  
 
       $sql1="INSERT INTO `event_admin_new`( `event_admin_title`, `event_admin_from_date`, `event_admin_to_date`, `event_admin_type`, `event_admin_status` ,`event_admin_rules`,`event_admin_created_date`,`event_special_gift`,`event_special`,`event_special_banner`,`event_admin_icon`) VALUES (
        '".$title."' , 
        '".$from_date."' ,
        '".$enddate."' ,
        '".$type."' ,
        '".$status."' ,
        '".$rule."' ,
        '".$date."' ,
        '".$special_gift."' ,  
        '".$special_event."' ,
        '".$banner."' ,
        '".$image."' 
        )";
        mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));
         $lastid=mysqli_insert_id($mysqli);
          if($lastid){
              $resp=add_small_banner($mysqli, $lastid);  
              //$statusMsg = "The file ".$fileName. " has been uploaded successfully.";
              $_SESSION['success']=   " Record Added successfully ! ".$resp;
              header( "Location:addedit_event.php?id=".$lastid);
           }
            else
            {
             $_SESSION['error']=  "Record  Not Added  successfully !".$sql1;
            }
    //         $id_e=base64_encode($id);
} //update

}

global $mysqli;
$h1="Add Event";
$smallbanners="";
if($_GET['id']!='new'){
$h1="Update Event";
$id=$_GET['id'];
$sqli="select * from `event_admin_new` WHERE event_admin_id='$id'";
$data=mysqli_query($mysqli,$sqli) or die(mysqli_error($mysqli));
$row=mysqli_fetch_assoc($data);   


$smbsql="SELECT * FROM `event_admin_small_banner` where event_admin_id='$id'";
$smbdata=mysqli_query($mysqli,$smbsql) or die(mysqli_error($mysqli));
$smallbanners=mysqli_fetch_all($smbdata,MYSQLI_ASSOC); 

}
$sql2="SELECT * FROM `gift` where gift_coin_type='Diamond' ORDER BY `gift_diamond` ASC";
$data2=mysqli_query($mysqli,$sql2) or die(mysqli_error($mysqli));
$gifts=mysqli_fetch_all($data2,MYSQLI_ASSOC); 


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
  
  <?php
     if(isset($row)){
     $banner= $row['event_special_banner'];
     $mainbanner= $row['event_admin_icon'];
    $rule=$row['event_admin_rules'];
     if(isset($row['event_admin_from_date']) && $row['event_admin_from_date']!=""){  
                    echo date("Y-m-d H:i", strtotime($row['event_admin_from_date'])) ;}
     $from=date("Y-m-d H:i", strtotime($row['event_admin_from_date']));
     $end=date("Y-m-d H:i", strtotime($row['event_admin_to_date']));
   $event_special=  $row['event_special'];
     }
     ?>
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Event </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data">
              <input type="hidden" name="event_admin_id" value="<?php if(isset($row)){ echo $row['event_admin_id'];} ?>">
              <div class="box-body">
                
                <div class="form-group">
                  <label for="first_name"> Event Title</label>
                  <input type="text" class="form-control" name="event_admin_title" id="event_admin_title" placeholder="Enter Event Title" required  value="<?php if(isset($row)){ echo $row['event_admin_title'];} ?>" >
                </div>
              

                <div class="form-group">
                  <label class="">Type:</label>
                    <select class="form-control" name="event_admin_type" >
                      <?php echo get_event_type_dropdown($row['event_admin_type']) ;?>
                    </select>
                </div>
                  
                  <div class="form-group">
                  <label class="">Special Type:</label>
                    <input type="checkbox" name="specail_event" onclick="show_hide()" id="special_event" <?php if(isset($row['event_special']) && $row['event_special']==1){  
                    echo 'checked';} ?> >
                </div>
                  <div id="is_gift" style="display:<?php echo ($row['event_special']==1)?'block':'none'?>">
                  <div class="form-group" >
                  <label class="">Gift: <?php $arr= explode(",",$row['event_special_gift']); ?>  </label>
                    <select class="form-control select2 select2-hidden-accessible" multiple name="event_gift[]" id="event_gift" style="width: 100%">
                        <option value=''>Select gift</option>
                        <?php foreach($gifts as $row):?>
                        <option value="<?php echo $row['gift_id'];?>" <?php if(in_array($row['gift_id'],$arr)){echo 'selected';}else{ echo $row['gift_id']; }?>><?php echo $row['gift_title'];?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                 <div class="form-group">
                  <label for="likes_count"> Banner </label>
    				<?php if(isset($banner)&& $event_special=='1'){ ?>
                  <img src="<?php if(isset($row)){echo BASEPATH.$banner;}?>" width="200px">
                <?php } ?>
                  <input type="file" name="banner" class="form-control" id="banner"  >
                </div>
                </div>
                  
                 <div class="form-group">
                  <label for="first_name">Start Date </label>
                  <input  type="datetime-local" class="form-control" id="start_date" name="start_date" placeholder="Enter From Date" required  value="<?php if(isset($from) && $from!=""){  
                    echo date("Y-m-d", strtotime($from)).'T'.date("H:i", strtotime($from)) ;}else{
    echo date("Y-m-d", strtotime(date('Y-m-d'))).'T'.date("H:i", strtotime(date('H:i')));
} ?>" >
     
                 </div>

                <div class="form-group">
                  <label for="first_name">End Date</label>
                      <input  type="datetime-local" class="form-control" id="end_date" name="end_date" placeholder="Enter End Date" required  value="<?php if(isset($end) && $end!=""){  
                    echo   date("Y-m-d", strtotime($end)).'T'.date("H:i", strtotime($end));}else{
   echo date("Y-m-d", strtotime(date('Y-m-d'))).'T'.date("H:i", strtotime(date('H:i')));} ?>" >
                  
                </div>

                  
                <div class="form-group">
                  <label class="">Status:</label>
                    <select class="form-control" name="event_admin_status" required="required">
                      <?php echo get_event_admin_status_dropdown($row['event_admin_status']) ;?>
                    </select>
                </div>
   

                <div class="form-group">
                  <label for="likes_count"> Icon </label>
    				<?php if(isset($row)&& $mainbanner!=''){ ?>
                  <img src="<?php if(isset($row)){echo BASEPATH.$mainbanner;}?>" width="200px">
                <?php } ?>
                  <input type="file" name="icon" class="form-control" id="icon"  >
                </div>
 	    


                
                <div class="form-group">
                  <label for="description">Rules</label>
                  <textarea class="form-control" id="description" name="event_admin_rules" placeholder="Enter Rules"><?php if(isset($row)){echo $rule;}?></textarea>
                </div> 

              <hr/>             
              <?php if(isset($row) && $smallbanners!=''){ ?>
               <div class="form-group">
              
                <label for="likes_count">Small Banners</label>
                <div class="row">              
                 <?php foreach ($smallbanners as $smallbanner) {
                  ?>
                    <div class="col-md-3">
                     <img src="<?php echo BASEPATH.$smallbanner['event_admin_small_banner_image'];?>" width="200px">
                       <div class=""> <a href="addedit_event.php?id=<?php echo $_GET['id']; ?>&remove_smbid=<?php echo $smallbanner['event_admin_small_banner_id']; ?>">X</a></div>
                    </div>
                 <?php } ?>
                 </div>
                </div>
                <?php } ?>
                <div class="form-group">
                  <label for="likes_count">Small Banner Add</label>
                  <input type="file" name="small_banner_icon[]" class="form-control" id="small_banner_icon" multiple="" >
                </div>
             
                <hr/>
      
                </div>
                <div class="box-footer">
                <input type="submit" name="submit" class="btn btn-primary" value="<?php   
if($_GET['id']!='new'){ echo"Update"; }else{ echo "Create"; } ?>">
               <input type="reset" class="btn btn-danger" value="Cancel">
              </div>
              </form>


        </div> 
     </div>  
       


      <!-- left column -->
        <div class="col-md-6">
              

      
        </div> 
     </div>  

        
    </section>
</div>


 <!-- close Main content -->
  


<?php include("includes/footer.php");?>       
<script>
    function show_hide(){
      
if($("#special_event").is(':checked'))
    $("#is_gift").show();  // checked
else
    $("#is_gift").hide();
    }
</script>
