<?php
require __DIR__ . '/../../../modelo/conexion.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings (debes poner estas configuraciones dentro del bucle)
    $mail->isSMTP();
    $mail->Host = 'smtp-mail.outlook.com';
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = 'CorreoSoporteucsc@outlook.com';
    $mail->Password = 'contrasena2023Soporte_';
    $mail->Port = 587;
    $mail->CharSet = 'UTF-8';

    // Obtener todos los correos
    $sql = "SELECT correo FROM usuarios WHERE tipo_usuario ='Institucional'";
    $result = mysqli_query($conexion, $sql);

    // Almacena todos los correos en un array
    $correos = array();
    while ($row = mysqli_fetch_assoc($result)){
        $correos[] = $row['correo'];
    }

    // Actualizar el campo 'cuarentena' a 1 para todos los usuarios
    $updateQuery = "UPDATE usuarios SET cuarentena = 1";
    mysqli_query($conexion, $updateQuery);

    // Envío de correos a todos los usuarios
    foreach ($correos as $correo) {
        //Recipients
        $mail->setFrom('CorreoSoporteucsc@outlook.com', 'Soporte');
        $mail->addAddress($correo);  // Agrega cada correo del array

        $subject = "Activación de cuarentena";
        $subject = utf8_decode($subject);

        //Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = 'El ministerio de Salud de Chile ha determinado que este establecimiento está actualmente en cuarentena. Rogamos al usuario que se quede en su hogar. Se les informará ante algún cambio. Desde ya, muchas gracias por su comprensión.';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent to ' . $correo . '<br>';
        
        // Puedes agregar un retraso aquí si es necesario para evitar limitaciones del servidor SMTP
        // sleep(1);
        
        // Limpiar los destinatarios para el próximo correo
        $mail->clearAddresses();
    }

    // Redirige después de enviar todos los correos
    header('Location: index.php?p=admin/admin');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
