<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$_SESSION['correo'];

$numeroAleatorio = rand(0, 50);

// Evaluar si el número es menor que 25
if ($numeroAleatorio < 25) {
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
    $mail->addAddress($_SESSION['correo'], 'Ususario Prueba');  //Add a recipient


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
} else {
  if (isset($_SESSION['run'])) {
    // Destruye la sesión si existe
    session_destroy();
    header("Location: index.php?p=auth/login");
  } else {
    // Redirige al usuario a la página de inicio de sesión si no está autenticado
    header("Location: index.php?p=auth/login");
  }
}





?>