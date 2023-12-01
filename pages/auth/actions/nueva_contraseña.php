<?php

require __DIR__ . '/../../../modelo/conexion.php';

$token = $_POST["token"];
$nueva_contraseña = $_POST["nueva_contraseña"];
$repetir_contraseña = $_POST["repetir_contraseña"];

if ($nueva_contraseña == $repetir_contraseña) {
    // Busca al usuario por el token
    $selectUsuario = "SELECT * FROM usuarios WHERE token = '$token'";
    $resultadoSelect = mysqli_query($conexion, $selectUsuario);

    if ($resultadoSelect && $row = mysqli_fetch_assoc($resultadoSelect)) {
        $id_usuario = $row['id_usuario'];

        // Actualiza la contraseña del usuario utilizando la ID
        $update = "UPDATE usuarios SET contraseña = '$nueva_contraseña' WHERE id_usuario = $id_usuario";
        $resultadoUpdate = mysqli_query($conexion, $update);

        if ($resultadoUpdate) {
            header('Location: index.php?p=auth/login&message=success');
        } else {
            // Manejar error de actualización
            echo "Error al actualizar la contraseña: " . mysqli_error($conexion);
        }
    } else {
        // Manejar error si no se encuentra al usuario
        echo "No se encontró al usuario con el token proporcionado.";
    }
} else {
    header('Location: index.php?p=auth/cambiar_contraseña&token=' . $token . '&message=inequable');
}

?>