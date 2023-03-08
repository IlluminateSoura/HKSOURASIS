<?php
$name = $_POST['name'];
$visitor_Email = $_POST['Email'];
$subject = $_POST['subject'];
$Message = $_POST['Message'];

$Email_from = 'info@edufordas.com';
$Email_subject = 'New from submission';
$Email_body = "User Name: $name.\n".
              "User Email: $visitor_Email.\n".
              "subject: $subject.\n".
              "User Message: $Message.\n";



$to = 'babludacompu@gmail.com';

$headers = "From: $Email_from \r\n";

$headers .= "Reply-To: $visitor_Email \r\n";

mail($to,$Email_subject,$Email_body,$headers);

header("Location: contact.html");
?>