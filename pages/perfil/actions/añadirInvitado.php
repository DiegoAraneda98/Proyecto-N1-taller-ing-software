<?php
require __DIR__ . '/../../../modelo/conexion.php';
require __DIR__ . '/../../auth/actions/controlador_login.php';



if (!($_POST['añadir'])) {
    $nombreInvitado = $_POST['nombreInvitado'];
    $rutInvitado = $_POST['rutInvitado'];
    $correo_invitado = $_POST['correo_invitado'];
    $id_usuario = $_SESSION['id_usuario'];
    
    $insert = "INSERT INTO invitados( run, nombre, correo_invitado, id_usuario) VALUES ('$rutInvitado','$nombreInvitado' , '$correo_invitado', '$id_usuario')";

    $resultado = mysqli_query($conexion, $insert);

    if ($resultado) {
        header('Location: index.php?p=perfil/perfil');
    } else {
        echo "Error al actualizar la contraseña: " . mysqli_error($conexion);
    }
} 

?>