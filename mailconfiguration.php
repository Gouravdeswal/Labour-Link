<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'example@gmail.com';
$mail->Password = 'password';
$mail->SMTPSecure = 'ssl';

$mail->Port = 465;
$mail->setFrom('example@gmail.com',"Labour Link");



?>
