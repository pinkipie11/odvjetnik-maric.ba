<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'ured@odvjetnik-maric.ba';

$email_subject = "New Form Submission";

$email_body = "User Name: $name.\n".
             "User Email: $visitor_email.\n".
             "User Message: $message.\n";

$to = "ured@odvjetnik-maric.ba";  

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index1.html");
             
?>