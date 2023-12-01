<?php
require __DIR__ . '/../../../modelo/conexion.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


$_SESSION['correo'];

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
                $mail->addAddress($_SESSION['correo']);  //Add a recipient

                $subject = "Desactivación de cuenta";
                $subject = utf8_decode($subject);
                //Content
                $mail->isHTML(true);
                $mail->Subject = $subject;
                $mail->Body = '¿ Esta seguro de desactivar su cuenta ? <a href="localhost/xampp/Proyecto-N1-taller-ing-software/index.php?p=perfil/confirmacion_desactivacion">Desactiva tu cuenta</a>';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
               /*  echo 'Message has been sent';  */
                header ("Location:index.php?p=auth/actions/controlador_logout");
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
            }
?>