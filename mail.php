<?php $name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "saurabhbhugra4@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>