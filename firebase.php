<?php

 $msg1              = $_POST['msg'];
 $_REQUEST['token'] = $_POST['token']; 
 define( 'API_ACCESS_KEY', 'AAAAY30-QME:APA91bHAvrPmV5aeBV7XjIwg9GsTdZqziEvULMHKrmTl5MxN_NKumfsydc5JS1CV7bDvqh5dtVjFbAl0MZ23A2DcFeJfDj9rlDAn2JhdKyGPHGukLEs3Vc4rF9z6-IBNffNr32OzvToT');
 $msg = array
        (
            'body' => $msg1,
            'title' => 'OUR HIPPY',
              );
    $fields = array
    (
    'to' => $_REQUEST['token'],
    'notification' => $msg
    );
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
 echo json_encode(array("status"=>"1","Response"=>"Successfully sent"));
?>