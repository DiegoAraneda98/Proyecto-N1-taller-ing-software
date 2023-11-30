<?php

require __DIR__ . '/../../../modelo/conexion.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$correo = $_POST['correo'];
$sql = "SELECT * FROM usuarios WHERE correo = '$correo' ";  /*  AND status = 1 */

$result = $conexion->query($sql);
$row =mysqli_fetch_assoc($result);

if ($result->num_rows > 0) {

    $token = bin2hex(random_bytes(16)); // Genera un token único
    $id_usuario = $row['id_usuario'];
    $nombre = $row['nombre'];

    $updateTokenSql = "UPDATE usuarios SET token = '$token' WHERE id_usuario = $id_usuario";
    $conexion->query($updateTokenSql);
    
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
        $mail->addAddress($correo, $nombre);  //Add a recipient
          
        /* 'Hola, este es un correo generado para solicitar la recuperacion de tú contraseña, por favor, 
        visita la pagina: <a href="localhost/xampp/Proyecto-N1-taller-ing-software/index.php?p=auth/cambiar_contraseña&id='.$row['id_usuario'].'">Recupera tu contraseña</a>'; */
        //Content
        $subject = "Recuperación de contraseña";
        $subject = utf8_decode($subject);
        $mail->isHTML(true);                                  
        $mail->Subject = "Recuperación de contraseña";
        $mail->Body = 'Hola, este es un correo generado para solicitar la recuperación de tu contraseña, por favor, 
        visita la pagina: <a href="localhost/xampp/Proyecto-N1-taller-ing-software/index.php?p=auth/cambiar_contraseña&token='.$token.'">Recupera tu contraseña</a>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        header('Location: index.php?p=auth/login&message=ok');
        /* echo 'Message has been sent'; */ 
    } catch (Exception $e) {
        /*  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";   */
       header('Location: index.php?p=auth/login&message=error');
    }

} else{
    header('Location: index.php?p=auth/login&message=not found');
}



?>