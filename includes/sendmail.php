<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
require 'templates/adminTemplate.php';
require 'templates/autoReplyTemplate.php';

// NOrmal email sent to me 
// No need for a subject

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$name = htmlspecialchars($_POST['name']);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$message = htmlspecialchars($_POST['message']);

try {

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'example@gmail.com';
$mail->Password = 'hello';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('example@gmail.com', 'Portfolio Contact');
$mail->addReplyTo($email, $name);
$mail->addAddress('example@gmail.com');

$mail->isHTML(true);
$mail->Subject = "Portfolio Contact Message";

$mail->Body = adminTemplate($name,$email,$message);

$mail->send();



/* AUTO REPLY EMAIL */

$reply = new PHPMailer(true);

$reply->isSMTP();
$reply->Host = 'smtp.gmail.com';
$reply->SMTPAuth = true;
$reply->Username = 'example@gmail.com';
$reply->Password = 'hello';
$reply->SMTPSecure = 'tls';
$reply->Port = 587;

$reply->setFrom('example@gmail.com', 'Nestor');
$reply->addAddress($email);

$reply->isHTML(true);

$reply->Subject = "Thanks for contacting Nestor";

$reply->Body = autoReplyTemplate($name,$message);

$reply->send();

echo "Message sent successfully";

} catch (Exception $e) {

echo "Message could not be sent.";

}

}