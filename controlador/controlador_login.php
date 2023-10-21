<?php
include(__DIR__ . '/../modelo/conexion.php');
session_start();
if (!empty($_POST["login"])) {
    if (!empty($_POST["correo"]) and !empty($_POST["contraseña"])) {

        $correo = stripslashes($_REQUEST['correo']);
        $correo = mysqli_real_escape_string($conexion, $correo);

        $contraseña = stripslashes($_REQUEST['contraseña']);
        $contraseña = mysqli_real_escape_string($conexion, $contraseña);

        $sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND contraseña = '" . md5($contraseña) . "' ";
        $result = mysqli_query($conexion, $sql) or die(mysqli_error());
        $rows = mysqli_num_rows($result);
        echo "Número de filas: " . $rows;
        if ($rows == 1) {
            $_SESSION['correo'] = $correo;
            header("Location: inicio.php");
        } else {
            echo "No se logea";
        }

    } else {
        echo '<div class="alert alert-danger text-center" role="alert"> Campos vacios!!</div>';
    }
}

?>