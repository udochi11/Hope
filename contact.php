<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'hopeinthejungle.com';
$email_subject = 'New Form submission';
$email_body = "User Name: $name.\n".
              "User email: $email.\n".
              "subject: $subject.\n".
              "message: $message.\n".
$to = 'hopeinthejungle@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location:contact.html");
?>