<?php
header('Access-Control-Allow-Origin: *');
error_reporting(0);

// get values from client
$fullName = $_POST["full_name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$subject = $_POST["subject"];
$description = $_POST["description"];

// to send email
require("PHPMailer_5.2.4/class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP(); // set mailer to use SMTP
$mail->SMTPDebug  = 0;

include "mail-config.php";

$mail->AddAddress("pattarai.licet@gmail.com");
$mail->addCC("theflyingrahul@gmail.com");

$mail->WordWrap = 50; // set word wrap

$mail->IsHTML(true); // set email format to HTML

$mail->Subject = "Contact form from Pattarai.in";

$mail->Body = "Full Name: " . $fullName . "<br>Email ID: " . $email . "<br>Phone: " . "<br>Subject: " . $subject . "<br>Description: " . $description . "<br><br><br><small>Submitted via submit-contact-form.php at mx-out-mixspace.</small>";

if ($mail->Send()) {
    echo json_encode("mail-success");
} else {
    echo json_encode("mail-fail");
}
$conn->close();