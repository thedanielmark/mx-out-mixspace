<?php

include("../passwords.php");

$mail->From = "noreply.danielmarkd@gmail.com";
$mail->FromName = "MixSpace Internet Services";
$mail->Host = "smtp.gmail.com"; // specif smtp server
$mail->SMTPSecure = "ssl"; // Used instead of TLS when only POP mail is selected
$mail->Port = 465; // Used instead of 587 when only POP mail is selected
$mail->SMTPAuth = true;
$mail->Username = "noreply.danielmarkd@gmail.com"; // SMTP username
$mail->Password = $mxOutGmailPassword; // SMTP password
$mail->AddAddress("danielmark.uc@gmail.com", ""); //replace myname and mypassword to yours
$mail->AddReplyTo("danielmark.uc@gmail.com", "");