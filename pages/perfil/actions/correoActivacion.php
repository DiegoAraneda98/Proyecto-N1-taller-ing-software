<?php
require __DIR__ . '/../../../modelo/conexion.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


$correo = $_POST['correo'];
$sql = "SELECT * FROM usuarios WHERE correo = '$correo'";

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
    $mail->addAddress($correo);  //Add a recipient

    $subject = "Reactivación de cuenta";
    $subject = utf8_decode($subject);
    //Content
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = 'Estimado/a,<br>

                Esperamos que este mensaje te encuentre bien. Queremos informarte que hemos recibido tu solicitud para reactivar tu cuenta en SafeInDrive UCSC. Agradecemos tu interés en seguir siendo parte de nuestra comunidad.<br>
                
                Para completar el proceso de reactivación, por favor sigue estos pasos:<br>
                
                -Haz clic en el siguiente enlace para acceder a la página de reactivación de cuenta: <a href="localhost/xampp/Proyecto-N1-taller-ing-software/index.php?p=auth/asignacion_salud&token=' . $token . '">Reactiva tu cuenta</a><br>
                
                -En la página, se te solicitará contestar una breve encuesta sobre el COVID-19.<br>
                
                -Una vez terminada el proceso de reactivación de la cuenta estara terminado.<br><br>
                
                Este proceso es parte de nuestras medidas de seguridad para garantizar que solo los propietarios legítimos de las cuentas puedan acceder a ellas. Si no has solicitado esta reactivación o consideras que este correo ha sido enviado por error, por favor ignóralo.<br><br>
                Agradecemos tu paciencia y cooperación durante este proceso. Si tienes alguna pregunta o necesitas asistencia, no dudes en contactarnos respondiendo a este correo.<br>
                
                ¡Bienvenido/a de nuevo!<br>
                
                Atentamente,<br>
                El equipo de SafeInDrive';

    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    /* echo 'Message has been sent'; */
    header('Location: index.php?p=auth/login&message=ok');
} catch (Exception $e) {
    header('Location: index.php?p=auth/login');
    /* echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";  */
}
?>