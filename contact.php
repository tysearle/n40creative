
<?php
require_once 'vendor/autoload.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];



$mail = new PHPMailer;
//Enable SMTP debugging.
$mail->SMTPDebug = 3;
//Set PHPMailer to use SMTP.
$mail->isSMTP();
//Set SMTP host name
$mail->Host = 'smtp.gmail.com';
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;
//Provide username and password
$mail->Username = 'tyler@weareflagship.com';
$mail->Password = 'Tylsea45@';
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = 'tsl';
//Set TCP port to connect to
$mail->Port = 587;

$mail->From = 'noreply@northfortycreative.com';
$mail->FromName = 'North Forty Creative';

$mail->addAddress($email);

$mail->isHTML(true);

$mail->Subject = 'New Client Inquiry';
$mail->Body = 'Hello, we have a new client that we should contact, here is the contact information: <br />Name:' . $name .  '<br />Phone Number : ' . $phone . '<br />Message : ' . $message . ' <br />Thanks ';


if(!$mail->send()) {
 return 'Mail error: '.$mail->ErrorInfo;
}else{
    return true;
}
