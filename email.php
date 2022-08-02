<?php
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['email'])) {
    $name = $_POST['name'];
    $clientEmail = $_POST['majka'];
    $radio1 = $_POST['radio1'];


    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = "mail.nethely.hu";
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Port = "465";
    $mail->Username = "hsaproba@probaphp.fejlessz.hu";
    $mail->Password = "Zoli3576";


    $mail->Subject = "Sikeres email";
    $mail->setFrom('hsaproba@probaphp.fejlessz.hu');
    $mail->isHTML(true);
    $mail->addAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);
    $mail->Body = "<p>Email: $clientEmail</p><p>Név: $name</p><p>Választás: $radio1</p>";
    $mail->addAddress('valami@email.com');
    if ( $mail->send() ) {
        $message = "Sikeresen elküldted!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }else{
        echo "Hiba...";
    }
    $mail->smtpClose();
}
?>