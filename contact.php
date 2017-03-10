<?php
if($success) {
	header('location:index.html');
}
else {
	header('location:index.html');
}

    $name = @trim(stripslashes($_POST['name']));
    $email = @trim(stripslashes($_POST['email']));
    $message = @trim(stripslashes($_POST['message']));

    $email_from = $email;
    $email_to = 'tyler@n40creative.com';//replace with your email

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;
