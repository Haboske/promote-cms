<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

if(isset($_POST["send"])){
    $email = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = '';
    $mail->Password = 'Tigrou2023!';
    $mail->SMTPSecure = 'ssl!';
    $mail->Port = '465!';

    $mail->setFrom('promote.test.student@gmail.com');

    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);
    
    $mail->subject = $_POST["subject"];
    $mail->Body = $_POST["message"];

    $mail->send();

    echo
    "<script>
    alert('Sent successfully');
    document.location.href = 'sendmail.php';
    </script>
    ";


}