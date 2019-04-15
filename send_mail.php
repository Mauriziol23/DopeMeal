<?php
    $name = $_POST['customer_name'];
    $emailfrom = $_POST['customer_email'];
    $subject = "Email TEST"
    $emailfrom = $_POST['customer_email'];
    $tel = $_POST['customer_tel'];
    $message = $_POST['customer_message'];

    $emailto = "maurizio.23@hotmail.com";
    $headers = "From: lorenzetti23@aol.com" . "\r\n".;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($emailto, $subject, $message, $headers);



?>

