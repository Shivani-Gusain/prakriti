<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from ='info@prakritingo.000webhost.com';//email of my website
$email_subject= 'New form Submission';
$email_body="User Name:$name.\n".
"User Email:$visitor_email.\n".
"Subject:$subject.\n".
"Message:$message.\n";

$to = 'shivanigusain06@gmail.com'; //email which receives data
$headers ="From: $email_from \r\n";
$headers .="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location:contact.html"); //retract to which file after form submission
?>