<?php
if (isset($_POST['submit'])) {
    $name = $_POST['customer_name'];
    $emailfrom = $_POST['customer_email'];
    $subject = "Inquiry"
    $emailfrom = $_POST['customer_email'];
    $tel = $_POST['customer_tel'];
    $message = $_POST['customer_message'];

    $emailto = "maurizio.23@hotmail.com";
    $headers = "From: ".$emailfrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($emailto, $subject, $txt, $headers);
    headers("Location: /send_email.php");
}


?>

<h1>Thanks for contacting us! Will get back to you soon </h1>
<button onclick="window.location.href = 'https://mauriziol23.github.io/DopeMeal/';">Back to site</button>
