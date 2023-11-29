<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';



sleep(300);
$mail = new PHPMailer(true);

try {

  //Server settings
  $mail->isSMTP();
  $mail->Host = 'smtp-mail.outlook.com';
  $mail->SMTPSecure = 'tls';
  $mail->SMTPAuth = true;
  $mail->Username = 'CorreoSoporteucsc@outlook.com';
  $mail->Password = 'contrasena2023Soporte_';
  $mail->Port = 587;
  $mail->CharSet = 'UTF-8';  


  //Recipients
  $mail->setFrom('CorreoSoporteucsc@outlook.com', 'Soporte');
  $mail->addAddress('npcruz630@gmail.com', 'Ususario Prueba');  //Add a recipient


  //Content
  $subject = "Encuesta Satisfacción";
  $subject = utf8_decode($subject);
  $mail->isHTML(true);
  $mail->Subject = $subject;
  $mail->Body = 'Hola, gracias por utilizar nuestra plataforma. Nos encantaria si por favor pudiera responder la siguiente encuesta, 
        <a href="localhost/xampp/Proyecto-N1-taller-ing-software/index.php?p=encuesta/encuesta"> Encuesta de satisfacción</a>';
  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  $mail->send();

  echo 'Message has been sent';
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

}


?>