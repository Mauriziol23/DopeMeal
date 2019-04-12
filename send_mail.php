<?php
$name = $_Post['name'];
$email = $_Post['email'];
$tel = $_Post['tel'];
$message = $_Post['message'];


$email_from = 'Maurizio.23@hotmail.com';
$email_subject = "Question from customer";

$email_body = "User name: $name.\n".
                "User Email: $email.\n".
                "Contact Number: $tel.\n".
                "User Message: $message.\n";

$to = "mlorenze23@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email \r\n";
$headers .= "Content-type: text/html; charset-utf-8";

$send = mail($to,$email_subject,$email_body,$headers);

if ($send) {
    echo '<br>';
    echo 'Thanks for contacing me, I will get back to you asap';
} else {
    echo 'error';
}


?>
