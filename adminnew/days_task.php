<?php 
include("includes/header.php");
include("includes/connection.php");

  global $mysqli;
?>

<?php 
    if(isset($_POST['submit']))
    {
        //print_r($_POST);die;
        date_default_timezone_set('Asia/Kolkata');
        $today  = date('Y-m-d');
        $title  = $_POST['title'];
        $day_id    = $_POST['day_id'];
        $gift_id    = $_POST['gift_id'];
       
        if(!isset($_FILES['red']) || $_FILES['red']['error'] == UPLOAD_ERR_NO_FILE) 
        {
            $red =$_POST['old_red'];
            
        }else
        {
            $red=$_FILES['red']['name'];
            $temp=$_FILES['red']['tmp_name'];
            move_uploaded_file($temp,"gift_img/".$red);
            
        }
       $filename =$red;
     
            // $sql   = "insert into gifts (title,qty,amt,des,icon,date)values('$title','$qty','$amt','$des','$red','$today')";
       // $sql = "UPDATE day set title = '$title' ,gift_id = '$gift_id' icon = '$filename' where day_id = '$day_id'";
       $sql=" UPDATE `day` SET `title` = '$title',`gift_id`='$gift_id' ,`icon` = '$filename' WHERE `day`.`day_id` = '$day_id'";
       // echo $sql;die;
        $query = mysqli_query($conn,$sql);
        if($query == true)
        {
           echo "<script>alert('Successfully Added')</script>"; 
        }else
        {
            echo "<script>alert('Something went wrong')</script>";
        }
        
                
    }
?>
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>View All Days Task </h1>
    <ol class="breadcrumb">
      <li><a href="vwDashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">View All Days </li>
    </ol>
  </section>
  <?php include("includes/alert_section.php");  ?> 
 
  <!-- First Box-->
  <section class="content">

 



  <div class="box box-default ">
    <div class="box-header with-border">
      <h3 class="box-title">All Days Task </h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive"> 

      	<div class="col-xs-12">
         <div >  



<br>
<table id="user_table"  class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>ID</th><th>Days</th><th>Title</th><th>Icon</th><th>New Image</th><th>Gift</th><th>Action</th>
          
          </tr>
        </thead>
        <tbody>
        <?php  
          $select = "select * from day";
      $qury   =  mysqli_query($mysqli,$select);
      //$gift_data   = mysqli_fetch_assoc($qury);
      
      
      while($gift_data = mysqli_fetch_assoc($qury)) 
      {
        ?>
        
        <tr style=" text-align: center;">
            <form  action="" method="POST" enctype="multipart/form-data">  
          <td> <?php echo $gift_data['day_id'];?></td>
          <td> <?php echo $gift_data['name'];?></td>
          <td><input type="text" name="title" value="<?php echo $gift_data['title'];?>"></td>
            <td> 
          
          <img style="width: 61px;" src="<?php echo $img_url.$gift_data['icon'];?>"></td>
          <td>
              <input type="hidden" name="old_red" value="<?php echo $gift_data['icon'];?>">
              <input type="hidden" name="day_id" value="<?php echo $gift_data['day_id'];?>">
                <input type="file" id="" name="red" ></td>
          <td> 
          <select name="gift_id" class="form-control">
          
          <?php 
             $gift_id =  $gift_data['gift_id'];
             $select1  = "select * from gifts";
                  $qury1   =  mysqli_query($mysqli,$select1);
                      while($gift_data1 = mysqli_fetch_assoc($qury1)) 
                      { ?>
                      
                      <option value=" <?php echo $gift_data1['gifts_id'];?>" <?=($gift_data1['gifts_id']==$gift_data['gift_id'])?'selected':'' ;?>  > <?php echo $gift_data1['title'];?></option>
                      <?php }?>
          </select>
          </td>

        
          
          
          <td> <input type="submit" value="Update" name="submit" class="buttonColor">
          </td>
            </form>
            </tr>
          
      
        <?php
      }
      ?>

        </tbody>        
        
      </table>
	
  </div>  
  
 
   </div>
 </div>
</div>
</div>
</section>

<?php include("includes/footer.php");?> 

<script type="text/javascript" language="javascript" >
  $(document).ready( function () {
    var table =$('#user_table').DataTable({
       });
    
         
 });    
</script>

