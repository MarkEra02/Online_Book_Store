<?php
require_once 'vendor/autoload.php';
session_start();

define('EMAIL', '');
define('Password', '');


// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
  ->setUsername('bayanovzhangir121@gmail.com')
  ->setPassword('2003Zang')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);


function sendPasswordResetLink($email){


	global $mailer;
	$body = '<!DOCTYPE html>
<html>
<head>
	<title>Message</title>
</head>
<body>
<div class = "wrapper">
	<p>Click here to change your <a href = "http://localhost/register/password_message.php">password</a></p>
</div>
</body>
</html>';
global $code;
// Create a message
$message = (new Swift_Message('Hello'))
  ->setFrom('bayanovzhangir121@gmail.com')
  ->setTo($email)
  ->setBody($body, 'text/html');

// Send the message
$result = $mailer->send($message);
}

?>