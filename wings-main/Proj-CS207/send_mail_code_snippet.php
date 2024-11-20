<?php
if(isset($_POST['submit'])){
$UN = $_POST['UN'];
$email_to = 'dishtioberai@gmail.com';
$email_subject = 'Thank you for Signing Up !!';
$email_message = "Your Details are as mentioned below"."\n"."User Name: ".$UN;
$email_from = "b20286@students.iitmandi.ac.in";

$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
}
?>
