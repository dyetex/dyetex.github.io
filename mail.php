<?php  $name= $_POST['name'];
$email= $_POST['email'];
$website= $_POST['website'];
$message= $_POST['message'];
$formcontent="From: $name \nWebsite: $website \n Message: $message" ;
$recipient="rishitparas21@gmail.com";
$subject="Contact Form";
$mailheader="From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Form not submnitted! Try Again.");
echo "Your enquiry has been submitted!";
?>
