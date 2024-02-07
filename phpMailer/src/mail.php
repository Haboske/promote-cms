<?php 
// On importe les classes de PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';



function send_mail($to, $subject, $body){
    $mail = new PHPMailer();
    $mail->CharSet = 'UTF-8';
    $username         = "pataud@alwaysdata.net"; // on utilise un compte gmail créé pour l'occasion
    $password         = 'rvp270175';  // vous pourrez utiliser ce compte-ci ou paramétrer le votre si vous le souhaitez
    // dans ce cas pensez à aller dans les paramètres de sécurité de votre compte et diminuer la sécurité pour permettre l'authentification via des applications tierces

    $mail->IsSMTP();
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );
    $mail->SMTPDebug  = 0;  // mettez 2 pour avoir toutes les infos concernant l'envoi du mail sous la forme d'un echo
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host       = 'smtp-pataud.alwaysdata.net';
    $mail->Port       = '587';
    $mail->Username   = $username;
    $mail->Password   = $password;

    $mail->SetFrom($username, $username);
    $mail->AddReplyTo($username,$username);
    $mail->Subject    = $subject;
    $mail->MsgHTML($body);
    $address = $to;
    $mail->AddAddress($address, $username);

    return $mail->Send();
}

send_mail("ker-wan@hotmail.com", "Premiere newsletter", "Bienvenue à la promot - ion !");
