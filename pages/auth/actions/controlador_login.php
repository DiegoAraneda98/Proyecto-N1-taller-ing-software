<?php
require __DIR__ . '/../../../modelo/conexion.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Inicia la sesión solo si no está activa
}

if (!empty($_POST["login"])) {
    if (!empty($_POST["rut"]) and !empty($_POST["contraseña"])) {

        $rut = stripslashes($_REQUEST['rut']);
        $rut = mysqli_real_escape_string($conexion, $rut);

        $contraseña = stripslashes($_REQUEST['contraseña']);
        $contraseña = mysqli_real_escape_string($conexion, $contraseña);

        $sql = "SELECT * FROM usuarios WHERE run = '$rut' AND contraseña = '$contraseña'";
        $result = mysqli_query($conexion, $sql);
        $rows = mysqli_num_rows($result);

        $mensaje = '';
        
        if ($rows == 1) {
            $fila = mysqli_fetch_assoc($result);
            $_SESSION['run'] = $rut;
            $_SESSION['id_usuario'] = $fila['id_usuario'];
            $_SESSION['tipo_usuario'] = $fila['tipo_usuario'];

        
            // Redireccionar según el tipo de usuario

            if ( $_SESSION['tipo_usuario'] == 'Guardia') {
                header("Location: index.php?p=Guardia/vista_guardia");  // Página para administradores
               
            } elseif ( $_SESSION['tipo_usuario'] == ' Institucional') {

                header("Location: index.php?p=inicio"); // Página para usuarios comunes

            }  elseif ( $_SESSION['tipo_usuario'] == 'admin') {

                header("Location: index.php?p=admin/admin"); // Página para admin no funcionando
            } else{
                header("Location: index.php?p=inicio"); // Página para usuarios comunes
            }
        } else {
            echo '<div class="alert alert-danger text-center" role="alert">Usuario o contraseña incorrectos</div>';
           
        }
    } else {
        echo '<div class="alert alert-danger text-center" role="alert">Campos vacíos!!</div>';
    }
}
