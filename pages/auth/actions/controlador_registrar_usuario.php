<?php
require __DIR__ . '/../../../modelo/conexion.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if (!empty($_POST["registro"])) { //si el boton es presionado, validar datos que no estan vacios
    if (empty($_POST["rut"]) or empty($_POST["nombre"]) or empty($_POST["correo"]) or empty($_POST["tipo_usuario"]) or empty($_POST["contraseña"])) {
        /*  echo '<div class="alert alert-danger" role="alert"> Uno de los campos está vacio!!</div>'; */
    } else {
        $rut = stripslashes($_REQUEST['rut']);
        $rut = mysqli_real_escape_string($conexion, $rut);

        $nombre = stripslashes($_REQUEST['nombre']);
        $nombre = mysqli_real_escape_string($conexion, $nombre);

        $tipo_usuario = ($_REQUEST['tipo_usuario']);
        $tipo_usuario = mysqli_real_escape_string($conexion, trim($tipo_usuario));

        $correo = stripslashes($_REQUEST['correo']);
        $correo = mysqli_real_escape_string($conexion, $correo);

        $contraseña = stripslashes($_REQUEST['contraseña']);
        $contraseña = mysqli_real_escape_string($conexion, $contraseña);



        $sql_1 = "SELECT * FROM usuarios WHERE run = '$rut'";
        $result = $conexion->query($sql_1);

        if ($result->num_rows > 0) {
            echo '<div class="alert alert-danger text-center" role="alert">El rut ya esta registrado</div>';
        } else {
            $sql = $conexion->query("INSERT INTO usuarios (run, nombre, correo, tipo_usuario, contraseña) VALUES ('$rut', ' $nombre' , ' $correo' , ' $tipo_usuario' , '$contraseña')");

            $sql = "SELECT * FROM usuarios WHERE run = '$rut' and contraseña = '$contraseña' ";  /*  AND status = 1 */

            $result = $conexion->query($sql);
            $row = mysqli_fetch_assoc($result);

            $token = bin2hex(random_bytes(16)); // Genera un token único
            $id_usuario = $row['id_usuario'];
        
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
                $mail->addAddress($correo, 'Ususario Prueba');  //Add a recipient

                $subject = "Activación de cuenta";
                $subject = utf8_decode($subject);
                //Content
                $mail->isHTML(true);
                $mail->Subject = $subject;
                $mail->Body = 'Bienvenido a la plataforma SafeInDrive, este es un correo generado con la finalidad de activar tu cuenta y terminar con su registro, por favor, 
                visita la pagina: <a href="localhost/xampp/Proyecto-N1-taller-ing-software/index.php?p=auth/asignacion_salud&token='.$token.'">Activa tu cuenta</a>';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                header('Location: index.php?p=auth/register&message=ok');
                /*   echo 'Message has been sent'; */
            } catch (Exception $e) {
                /*  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; */
                header('Location: index.php?p=auth/login&message=error');
            }

           /*  if ($sql == 1) {

                header("Location: index.php?p=auth/login");
            } else {
                echo "USUARIO NO REGISTRADO CON EXITO";
            } */
        }



    }
}


?>