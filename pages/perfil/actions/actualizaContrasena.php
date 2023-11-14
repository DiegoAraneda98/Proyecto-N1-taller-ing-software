<?php
require __DIR__ . '/../../../modelo/conexion.php';
require __DIR__ . '/../../auth/actions/controlador_login.php';

$contraseñaActual = $_POST['contraseña_actual'];
$nuevaContrasena = $_POST['nuevaContraseña'];
$RepetirNuevaContrasena = $_POST['repetirNuevaContraseña'];
$id = $_POST['id'];

if ( == $contraseñaActual) {
    // Consulta SQL para actualizar la contraseña
    $update = "UPDATE usuarios SET contraseña = '$nuevaContraseña' WHERE id_usuario = '$id'";

    $resultado = mysqli_query($conexion, $update);

    if ($resultado) {
        header('Location: ../../../index.php?p=perfil/perfil');
    } else {
        echo "Error al actualizar la contraseña: " . mysqli_error($conexion);
    }
}else{
    echo '<div class="alert alert-danger text-center" role="alert">no</div>';
}


?>