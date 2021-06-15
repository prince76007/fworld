<?php 
include("connection.php");
global $mysqli;
//error_reporting(0);

/**
 * Copyright 2017 Viaviweb.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may
 * not use this file except in compliance with the License. You may obtain
 * a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */
function notification_type($type){
    if($type==='fans'){
        return 1;
    }
     if($type==='comments'){
        return 2;
    }
     if($type==='like'){
        return 3;
    }
     if($type==='system'){
        return 4;
    }
     if($type==='celebrity'){
        return 5;
    }
    
}
//report_reason_tag_name
if (!function_exists('get_report_reason_tag_type_dropdown')) {
function get_report_reason_tag_type_dropdown($selected_data = null)
{
$dropdown=array('Video', 'Profile', 'Live Room');
$html='';
foreach($dropdown as $selection){
$selected=($selected_data == $selection)? "selected" : "";
 $html.='<option '.$selected.' value="'.$selection.'">'.$selection.'</option>';
}
return $html;
}
}

//
if (!function_exists('get_event_admin_status_dropdown')) {
function get_event_admin_status_dropdown($selected_data = null)
{
$dropdown=array('Running', 'Completed', 'Stop');
$html='';
foreach($dropdown as $selection){
$selected=($selected_data == $selection)? "selected" : "";
 $html.='<option '.$selected.' value="'.$selection.'">'.$selection.'</option>';
}
return $html;
}
}

if (!function_exists('get_event_type_dropdown')) {
function get_event_type_dropdown($selected_data = null)
{
$dropdown=array('Live', 'Room', 'Gifter');
$html='';
foreach($dropdown as $selection){
$selected=($selected_data == $selection)? "selected" : "";
 $html.='<option '.$selected.' value="'.$selection.'">'.$selection.'</option>';
}
return $html;
}
}

if (!function_exists('get_withdrawal_request_status_dropdown')) {
function get_withdrawal_request_pay_status_dropdown($selected_data = null)
{
$dropdown=array(' ','Success', 'Failed');
$html='';
foreach($dropdown as $selection){
$selected=($selected_data == $selection)? "selected" : "";
 $html.='<option '.$selected.' value="'.$selection.'">'.$selection.'</option>';
}
return $html;
}
}

if (!function_exists('get_withdrawal_request_status_dropdown')) {
function get_withdrawal_request_verified_status_dropdown($selected_data = null)
{
  $dropdown=array('Pending', 'Verified', 'Rejected');
    $html='';
    foreach($dropdown as $selection){
        $selected=($selected_data == $selection)? "selected" : "";
        $html.='<option '.$selected.' value="'.$selection.'">'.$selection.'</option>';
    }
return $html;
}
}

if (!function_exists('get_withdrawal_request_status_dropdown')) {
function get_withdrawal_request_status_dropdown($selected_data = null)
{
  $dropdown=array('New Request', 'Processing', 'Pending', 'Completed','Rejected');
$html='';
foreach($dropdown as $selection){
$selected=($selected_data == $selection)? "selected" : "";
 $html.='<option '.$selected.' value="'.$selection.'">'.$selection.'</option>';
}
return $html;
}
}


if (!function_exists('get_plantype_dropdown')) {
   function get_plantype_dropdown($selected_data = null)
{
  $dropdown=array('MONTH','YEAR');
$html='';
foreach($dropdown as $selection){
$selected=($selected_data == $selection)? "selected" : "";
 $html.='<option '.$selected.' value="'.$selection.'">'.$selection.'</option>';
}
return $html;
}
}
if (!function_exists('get_status_dropdown')) {
function get_status_dropdown($selected_data = null)
{
  $dropdown=array('Active', 'Inactive');
$html='';
foreach($dropdown as $selection){
$selected=($selected_data == $selection)? "selected" : "";
 $html.='<option '.$selected.' value="'.$selection.'">'.$selection.'</option>';
}
return $html;
}
}

if (!function_exists('get_status_dropdown')) {
   function get_status_dropdown($selected_data = null)
{
  $dropdown=array('Active', 'Inactive');
$html='';
foreach($dropdown as $selection){
$selected=($selected_data == $selection)? "selected" : "";
 $html.='<option '.$selected.' value="'.$selection.'">'.$selection.'</option>';
}
return $html;
}
}
if (!function_exists('get_status_appointment_status_dropdown')) {
   function get_status_appointment_status_dropdown($selected_data = null)
{
  $dropdown=array('Pending', 'Assigned', 'Cancel');
$html='';
foreach($dropdown as $selection){
$selected=($selected_data == $selection)? "selected" : "";
 $html.='<option '.$selected.' value="'.$selection.'">'.$selection.'</option>';
}
return $html;
}
} 

if (!function_exists('get_listappointment_assign_user_list')) {
function get_listappointment_assign_user_list(){
 global $mysqli;   
    
//$array=array( 1 =>"admin" , 2 =>"ankit");
//return $array;
$sql = "SELECT * FROM  user_second";
$result = mysqli_query($mysqli, $sql);
// Fetch all
return mysqli_fetch_all($result, MYSQLI_ASSOC);
    
}
}

if (!function_exists('get_sappointment_assign_user_list_dropdown')) {
   function get_sappointment_assign_user_list_dropdown($selected_data = null)
{
 $dropdown=get_listappointment_assign_user_list();

$html='';

foreach($dropdown as $selection){
$selected=($selected_data == $selection['user_second_id'])? "selected" : "";
 $html.='<option '.$selected.' value="'.$selection['user_second_id'].'">'.$selection['user_second_name'].'</option>';
}
return $html;
}
} 
#Admin Login
function adminUser($username, $password){
    
    global $mysqli;

    $sql = "SELECT id,username FROM tbl_admin where username = '".$username."' and password = '".md5($password)."'";       
    $result = mysqli_query($mysqli,$sql);
    $num_rows = mysqli_num_rows($result);
     
    if ($num_rows > 0){
    
        while ($row = mysqli_fetch_array($result)){
            echo $_SESSION['ADMIN_ID'] = $row['id'];
            echo $_SESSION['ADMIN_USERNAME'] = $row['username'];
        return true; 
        }
    
    }
    
}


# Insert Data 
function Insert($table, $data){

    global $mysqli;
    //print_r($data);

    $fields = array_keys( $data );  
    $values = array_map( array($mysqli, 'real_escape_string'), array_values( $data ) );
    
   //echo "INSERT INTO $table(".implode(",",$fields).") VALUES ('".implode("','", $values )."');";
   //exit;  
    mysqli_query($mysqli, "INSERT INTO $table(".implode(",",$fields).") VALUES ('".implode("','", $values )."');") or die( mysqli_error($mysqli) );

}

// Update Data, Where clause is left optional
function Update($table_name, $form_data, $where_clause='')
{   
    global $mysqli;
    // check for optional where clause
    $whereSQL = '';
    if(!empty($where_clause))
    {
        // check to see if the 'where' keyword exists
        if(substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE')
        {
            // not found, add key word
            $whereSQL = " WHERE ".$where_clause;
        } else
        {
            $whereSQL = " ".trim($where_clause);
        }
    }
    // start the actual SQL statement
    $sql = "UPDATE ".$table_name." SET ";

    // loop and build the column /
    $sets = array();
    foreach($form_data as $column => $value)
    {
         $sets[] = "`".$column."` = '".$value."'";
    }
    $sql .= implode(', ', $sets);

    // append the where statement
    $sql .= $whereSQL;
         
    // run and return the query result
    return mysqli_query($mysqli,$sql);
}

 
//Delete Data, the where clause is left optional incase the user wants to delete every row!
function Delete($table_name, $where_clause='')
{   
    global $mysqli;
    // check for optional where clause
    $whereSQL = '';
    if(!empty($where_clause))
    {
        // check to see if the 'where' keyword exists
        if(substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE')
        {
            // not found, add keyword
            $whereSQL = " WHERE ".$where_clause;
        } else
        {
            $whereSQL = " ".trim($where_clause);
        }
    }
    // build the query
    $sql = "DELETE FROM ".$table_name.$whereSQL;
     
    // run and return the query result resource
    return mysqli_query($mysqli,$sql);
}  
 
//GCM function
function Send_GCM_msg($registration_id,$data)
{
    $data1['data']=$data;
 
    $url = 'https://fcm.googleapis.com/fcm/send';
  
    $registatoin_ids = array($registration_id);
     // $message = array($data);
   
         $fields = array(
             'registration_ids' => $registatoin_ids,
             'data' => $data1,
         );
  
         $headers = array(
             'Authorization: key='.APP_GCM_KEY.'',
             'Content-Type: application/json'
         );
         // Open connection
         $ch = curl_init();
  
         // Set the url, number of POST vars, POST data
         curl_setopt($ch, CURLOPT_URL, $url);
  
         curl_setopt($ch, CURLOPT_POST, true);
         curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Disabling SSL Certificate support temporarly
         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
         curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
  
         // Execute post
         $result = curl_exec($ch);
         if ($result === FALSE) {
             die('Curl failed: ' . curl_error($ch));
         }
  
         // Close connection
         curl_close($ch);
       //echo $result;exit;
}


//Image compress
function compress_image($source_url, $destination_url, $quality) 
{

    $info = getimagesize($source_url);

        if ($info['mime'] == 'image/jpeg')
              $image = imagecreatefromjpeg($source_url);

         elseif ($info['mime'] == 'image/gif')
              $image = imagecreatefromgif($source_url);

         elseif ($info['mime'] == 'image/png')
              $image = imagecreatefrompng($source_url);

        imagejpeg($image, $destination_url, $quality);
    return $destination_url;

}

//Create Thumb Image
function create_thumb_image($target_folder ='',$thumb_folder = '', $thumb_width = '',$thumb_height = '')
    {  
     //folder path setup
         $target_path = $target_folder;
         $thumb_path = $thumb_folder;  
          

         $thumbnail = $thumb_path;
         $upload_image = $target_path;

            list($width,$height) = getimagesize($upload_image);
            $thumb_create = imagecreatetruecolor($thumb_width,$thumb_height);
            switch($file_ext){
                case 'jpg':
                    $source = imagecreatefromjpeg($upload_image);
                    break;
                case 'jpeg':
                    $source = imagecreatefromjpeg($upload_image);
                    break;
                case 'png':
                    $source = imagecreatefrompng($upload_image);
                    break;
                case 'gif':
                    $source = imagecreatefromgif($upload_image);
                     break;
                default:
                    $source = imagecreatefromjpeg($upload_image);
            }
       imagecopyresized($thumb_create, $source, 0, 0, 0, 0, $thumb_width, $thumb_height, $width,$height);
            switch($file_ext){
                case 'jpg' || 'jpeg':
                    imagejpeg($thumb_create,$thumbnail,80);
                    break;
                case 'png':
                    imagepng($thumb_create,$thumbnail,80);
                    break;
                case 'gif':
                    imagegif($thumb_create,$thumbnail,80);
                     break;
                default:
                    imagejpeg($thumb_create,$thumbnail,80);
            }
 }


if (!function_exists('add_system_notification')) {
function add_system_notification($data)
{
  // print_r($data); die;
    global $mysqli;

    $server_path=$_SERVER['DOCUMENT_ROOT'];  
    $badge_path="/custom_uploads/notification/";
      $file="";
    
    if(isset($_FILES['file']['name']) && $_FILES['file']['name']!="" && $data['notification_type']==2){
   
        $file=uniqid().$_FILES['file']['name'];
        $temp=$_FILES['file']['tmp_name'];
    
             if(move_uploaded_file($temp,$server_path.$badge_path.$file)){  
               $file=$badge_path.$file;
             }else{
             // echo "eorr".die( 're');
             }   
    }
   $notification_fb_id=0;
   $notification_fb_id=$data['users_fb_ids'];
    $sql="INSERT INTO `notification` (`title`, `des`, `date`, `notification_image`, `notification_type`,`notification_fb_id`) VALUES ('".$data['title']."','".$data['description']."',now(),'".$file."','".$data['notification_type']."','".$notification_fb_id."')"; 
     mysqli_query($mysqli,$sql);
    if($notification_fb_id !=0){
    $sql2="SELECT * FROM `users` WHERE fb_id =$notification_fb_id "; 
    }else{
     $sql2="SELECT * FROM `users` ORDER BY `fb_id` DESC"; 
    }
     $q=mysqli_query($mysqli,$sql2);
     //mysqli_num_rows();
    	   while($row=mysqli_fetch_array($q))
		   {
              
		        $msg = array
                  (
                'body' 	=>$data['description'] ,
                'title'	=>$data['title'] ,
                'type'=>notification_type('system')
                  ); 
                
                $fields = array
        			(
        				'to'		=> $row['tokon'],
        				'notification'	=> $msg
        			);
       
	       sendPushNotification($fields);
           }
    
       
        return true;
}
}
    
    
	function sendPushNotification($fields)
	{
        define( 'API_ACCESS_KEY', 'AAAAY30-QME:APA91bHAvrPmV5aeBV7XjIwg9GsTdZqziEvULMHKrmTl5MxN_NKumfsydc5JS1CV7bDvqh5dtVjFbAl0MZ23A2DcFeJfDj9rlDAn2JhdKyGPHGukLEs3Vc4rF9z6-IBNffNr32OzvToT');
      
      	$headers = array
			(
				'Authorization: key=' . API_ACCESS_KEY,
				'Content-Type: application/json'
			);
    
       	$ch = curl_init();
		curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
		curl_setopt( $ch,CURLOPT_POST, true );
		curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
		curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
	    $result = curl_exec($ch );
		//echo $result;
		curl_close( $ch );
		return $result;
    }


if (!function_exists('delete_event')) {
function delete_event($id)
{
     global $mysqli;
    $sql="delete from  event_admin_new where event_admin_id=".$id; 
    mysqli_query($mysqli,$sql);
     return true;
}
}
	


?>