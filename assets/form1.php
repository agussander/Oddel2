<?php

$name=$_POST['name'];
$mail=$_POST['mail'];
$mensaje=$_POST['message'];

$email_from='no-reply@oddelmarketing.com';
$email_subject="Contact";
$email_body= "$name. \n". 
"$mail. \n". 
"$mensaje. \n";
$honey=$_POST['firstname'];

$to="oddeldigitalmarketing@gmail.com";
$headers = "From: $email_from\r\n";
$headers = "Reply-To: $mail \r\n";

if( !empty( $honey ) ){
    echo("are u a bot??");
}else{
    mail($to,$email_subject,$email_body,$headers);
}
header('Location: /')
?>