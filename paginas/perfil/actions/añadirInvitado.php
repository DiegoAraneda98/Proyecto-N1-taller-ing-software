<?php
require '../../../modelo/conexion.php';

if (!($_POST['añadir'])) {
    $nombreInvitado = $_POST['nombreInvitado'];
    $rutInvitado = $_POST['rutInvitado'];

    $insert = "INSERT INTO invitados( run, nombre) VALUES ('$rutInvitado','$nombreInvitado')";

    $resultado = mysqli_query($conexion, $insert);

    if ($resultado) {
        header('Location: ../perfil.php');
    } else {
        echo "Error al actualizar la contraseña: " . mysqli_error($conexion);
    }
} 

?>