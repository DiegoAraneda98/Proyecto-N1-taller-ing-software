<?php 
require __DIR__ . '/../../../modelo/conectar.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$rut = $_POST["irut"];
$nombre_re = $_POST["inombre"];
$correo_re = $_POST["icorreo"];
$tele_re = $_POST["itelefono"];

if ($result->num_rows > 0) {

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


        //Recipients
        $mail->setFrom('CorreoSoporteucsc@outlook.com', 'Soporte');
        $mail->addAddress($correo_re, 'Ususario Prueba');  //Add a recipient
          

        //Content
        $mail->isHTML(true);                                  
        $mail->Subject = 'Encuesta Satisfacción '.$nombre_re;
        $mail->Body = 'Hola, '.$nombre_re.'por favor responda la siguiente encuesta a la brevedad, 
        <a href="localhost/xampp/Proyecto-N1-taller-ing-software/encuesta.php</a>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        header('Location: index.php');
      /*   echo 'Message has been sent'; */
    } catch (Exception $e) {
       /*  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; */
       header('Location: index.php');
    }

} else{
    header('Location: index.php?p=auth/login&message=not found');
}
?>