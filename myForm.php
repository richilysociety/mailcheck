<?php
// error_reporting(-1);
// ini_set('display_errors', 'On');
// set_error_handler("var_dump");

$to = "sourav15102@iiitd.ac.in";
$subject = "Test mail";
$message = "Hello! This is a test email message.";
$from = "insaneindian47@gmail.com";
$headers = "From:" . $from;
$resp =  mail($to,$subject,$message,$headers);
if($resp==FALSE){
	echo 'No';
}
else{
	echo 'Yes';
}
?>
