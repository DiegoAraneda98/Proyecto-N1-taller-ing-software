<?php
require __DIR__ . '/../../../modelo/conexion.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Inicia la sesión solo si no está activa
}


if (isset($_POST["rut"], $_POST["contraseña"]) && !empty($_POST["rut"]) && !empty($_POST["contraseña"])) {
    $rut = mysqli_real_escape_string($conexion, $_POST["rut"]);
    $contraseña = mysqli_real_escape_string($conexion, $_POST["contraseña"]);

    $sql = "SELECT * FROM usuarios WHERE run = '$rut' AND contraseña = '$contraseña' AND estado = '1'";
    $result = mysqli_query($conexion, $sql);
    $rows = mysqli_num_rows($result);

    if ($rows == 1) {
        $fila = mysqli_fetch_assoc($result);
        $_SESSION['run'] = $rut;
        $_SESSION['id_usuario'] = $fila['id_usuario'];
        $_SESSION['tipo_usuario'] = $fila['tipo_usuario'];
        $_SESSION['correo'] = $fila['correo'];

        // Redireccionar según el tipo de usuario
        if ($_SESSION['tipo_usuario'] == 'Guardia' or $_SESSION['tipo_usuario'] == ' Guardia') {
            header("Location: index.php?p=guardia/vista_guardia");
        } elseif ($_SESSION['tipo_usuario'] == 'Institucional' or $_SESSION['tipo_usuario'] == ' Institucional') {
            header("Location: index.php?p=inicio");
        } elseif ($_SESSION['tipo_usuario'] == 'admin' or $_SESSION['tipo_usuario'] == ' admin') {
            header("Location: index.php?p=admin/admin");
        }
    } else {
        echo '<div class="alert alert-danger text-center" role="alert">Inicio de sesión fallido</div>';
    }
}

?>






