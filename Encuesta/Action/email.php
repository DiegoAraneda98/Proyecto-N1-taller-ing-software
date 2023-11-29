<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../../PHPMailer/Exception.php';
require '../../PHPMailer/PHPMailer.php';
require '../../PHPMailer/SMTP.php';



  
  
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
        $mail->addAddress('tfell@ing.ucsc.cl', 'Ususario Prueba');  //Add a recipient
          

        //Content
        $mail->isHTML(true);                                  
        $mail->Subject = 'Encuesta Satisfacción';
        $mail->Body = 'Hola, por favor responda la siguiente encuesta a la brevedad, 
        <a href="localhost/xampp/Proyecto-N1-taller-ing-software/Encuesta/encuesta.php"> Encuesta de satisfacción</a>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        
      echo 'Message has been sent'; 
    } catch (Exception $e) {
       echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
       
    }


?>