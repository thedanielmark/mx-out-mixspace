<?php
header('Access-Control-Allow-Origin: *');
error_reporting(0);

// get values from client
$type = $_POST["type"];
$category = $_POST["category"];
$subject = $_POST["subject"];
$description = $_POST["description"];

// to send email
require("PHPMailer_5.2.4/class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP(); // set mailer to use SMTP
$mail->SMTPDebug  = 0;

include "mail-config.php";

$mail->AddAddress("xstack@mixspace.xyz");
$mail->addCC("danielmark.uc@gmail.com");

$mail->WordWrap = 50; // set word wrap

$mail->IsHTML(true); // set email format to HTML

$mail->Subject = "Contact form from MixSpace Website.";

$mail->Body = "Ticket Details</b><br>Type: " . $type . "<br>Category: " . $category . "<br>Subject: " . $subject . "<br>Description: " . $description . "<br><br><br><small>Submitted via submit-contact-form.php at mixspace.xyz.</small>";

if ($mail->Send()) {
    echo json_encode("mail-success");
} else {
    echo json_encode("mail-fail");
}
$conn->close();