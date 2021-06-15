<?php
//sendLoadInMail("technicalpointsolution@gmail.com","KORWAN LOAD IN","RAVENDRA KUMAR","Your Booking Request Id 17832398 Has Been Successfully Done !","Alok Singh Rajput","+91987654323","Aligarh Uttar Pradsh","25-07-2020","12:10 PM","Dilshad Garden Delhi 201298","UP65L8723","7237","","Thank You For Using Our Service.");
sendLoadInMail("deepaknamdeoo@gmail.com","KORWAN LOAD IN","ANKIT","Your Booking Request Id 17832398 Has Been Successfully Done !","Alok Singh Rajput","+91987654323","Aligarh Uttar Pradsh","25-07-2020","12:10 PM","Dilshad Garden Delhi 201298","UP65L8723","7237","","Thank You For Using Our Service.");


function sendLoadInMail($to,$subject,$customername,$message,$drivername,$drivernumber,$pickuplocation,$pickupdate,$pickuptime,$droplocation,$vehiclenumber,$amount,$othervalue="",$othermessage=""){
echo $message = "
<html>
<head>
<title>".$subject."</title>
</head>
<body>
Dear, <b>$customername ,</b>
<p>".$message."</p>


<table style='width:100%;text-align:left'>
<tr>
<th style='width:150px'>Driver Name</th>
<td>:</td>
<th>".$drivername."</th>
</tr>
<tr>
<td style='width:150px'>Driver Mobile</td>
<td>:</td>
<td>".$drivernumber."</td>
</tr>
<tr>
<td style='width:150px'>Pickup Location</td>
<td>:</td>
<td>".$pickuplocation."</td>
</tr>
<tr>
<td style='width:150px'>Pickup Date</td>
<td>:</td>
<td>".$pickupdate."</td>
</tr>
<tr>
<td style='width:150px'>Pickup Time</td>
<td>:</td>
<td>".$pickuptime."</td>
</tr>
<tr>
<td style='width:150px'>Drop Location</td>
<td>:</td>
<td>".$droplocation."</td>
</tr>
<tr>
<td style='width:150px'>Vehicle Number</td>
<td>:</td>
<td>".$vehiclenumber."</td>
</tr>
<tr>
<td>Amount</td>
<td>:</td>
<td>&#8377; ".$amount."</td>
</tr>
".$othervalue."
</table>
".$othermessage."
<h4>Best Regards,</h4>
<h6>KORWAN TEAM</h6>
<p><a href='https://korwan.in'>NEED  HELP ?</a> CALL +919867815763 or Email: <a href='mailto:contact@korwan.in'>contact@korwan.in</a> 24X7 Support .<p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: KORWAN LOAD IN<contact@korwan.in>' . "\r\n";
// $headers .= 'Cc: myboss@example.com' . "\r\n";

if(mail($to,$subject,$message,$headers)){
    echo 'successfully send';
}else{
    echo 'email not send';
}
}
?>