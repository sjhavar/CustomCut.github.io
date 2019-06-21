<?php
 $name = $_POST['name'];
 $visitor_email = $_POST['email'];
 $message = $_POST['message'];

 // $email_from = 'Easy'
 $email_from = 'surbhi.jhavar@gmail.com';
 $email_subject = "New Form Submission";

 $email_body =
  "User Name:" $name.\n".
  "User Email: $visitor_email.\n".
  "User Message: $message.\n";

$to = "surbhi.jhavar@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To": $visitor_email \r\n"

 mail($to, $email_subject, $email_body, $headers);
?>
