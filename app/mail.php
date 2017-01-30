<?php

require_once 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';
$user = 'antonenko.dentroom@gmail.com';

$mail->isSMTP();
$mail->Host = ' smtp-pulse.com';
$mail->SMTPAuth = true;
$mail->Username = $user;
$mail->Password = 'Gmm9PjY5AKF';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;


$name = empty($_POST['name']) ? 'no_name' : $_POST['name'];
$email = empty($_POST['email']) ? 'no_email' : $_POST['email'];
$phone = empty($_POST['phone']) ? 'no_phone' : $_POST['phone'];


$body_message = 'From: '.$name."\n";
$body_message .= 'E-mail: '.$email."\n";
$body_message .= 'tel: '.$phone."\n";
if ($_POST['comment']) {
    $body_message .= 'Message: ' . $_POST['comment'];
}

$mail->setFrom($user, 'Test');
$mail->addAddress($user, 'Test');

$mail->Subject = 'Antonenko-dentroom';

$mail->Body = $body_message;


if ($mail->send()) {
    $res = array('status' => TRUE);
} else {
    $res = array('status' => FALSE);
}

echo json_encode($res);
