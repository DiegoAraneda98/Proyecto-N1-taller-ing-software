<?php
require __DIR__ . '/../../../modelo/conexion.php';
require __DIR__ . '/../../auth/actions/controlador_login.php';

// Supongamos que $id_usuario es el ID del usuario cuya contraseña quieres obtener
$id_usuario = $_SESSION['id_usuario'];

// Consulta SQL para obtener la información del usuario
$sql = "SELECT contraseña FROM usuarios WHERE id_usuario = '$id_usuario'";
$resultado = mysqli_query($conexion, $sql);

if ($resultado && $fila = mysqli_fetch_assoc($resultado)) {
    
    // $fila ahora contiene la información del usuario, incluida la contraseña
    $contraseña = $fila['contraseña'];

    $contraseñaActual = $_POST['contraseña_actual'];
    $nuevaContrasena = $_POST['nuevaContraseña'];
    $RepetirNuevaContrasena = $_POST['repetirNuevaContraseña'];
    $id = $_POST['id'];

    if ($contraseña == $contraseñaActual) {
        // Consulta SQL para actualizar la contraseña
        $update = "UPDATE usuarios SET contraseña = '$nuevaContrasena' WHERE id_usuario = '$id'";
    
        $resultadoUpdate = mysqli_query($conexion, $update);
    
        if ($resultadoUpdate) {
            http_response_code(200); // Código HTTP 200 OK
            
        } else {
            http_response_code(500); // Código HTTP 500 Error interno del servidor
            echo "Error al actualizar la contraseña: " . mysqli_error($conexion);
        }
    } else {
        http_response_code(400); // Código HTTP 400 Solicitud incorrecta
        echo "La contraseña actual no coincide";
    }
} else {
    http_response_code(500); // Código HTTP 500 Error interno del servidor
    echo "Error al obtener la información del usuario: " . mysqli_error($conexion);
}
?>


