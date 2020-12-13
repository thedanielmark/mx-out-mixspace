<?php
require("PHPMailer_5.2.4/class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP(); // set mailer to use SMTP
$mail->SMTPDebug  = 0;
header('Access-Control-Allow-Origin: *');

include "mail-config.php";

$mail->WordWrap = 50; // set word wrap

$mail->IsHTML(true); // set email format to HTML

$mail->Subject = "Try MixSpace For Free";

if (isset($_POST['email'])) {
    $mail->Body = "Email: " . $_POST['email'] . "<br><small>Received from mx-out.mixspace.xyz</small>";
}

// Format the way the details appear in the inbox using HTML.

if ($mail->Send()) {
    echo json_encode("success");
} else {
    echo json_encode("failed");
}