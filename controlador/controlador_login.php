<?php
include(__DIR__ . '/../modelo/conexion.php');
session_start();

if (!empty($_POST["login"])) {
    if (!empty($_POST["rut"]) and !empty($_POST["contraseña"])) {

        $rut = stripslashes($_REQUEST['rut']);
        $rut = mysqli_real_escape_string($conexion, $rut);

        $contraseña = stripslashes($_REQUEST['contraseña']);
        $contraseña = mysqli_real_escape_string($conexion, $contraseña);

        $sql = "SELECT * FROM usuarios WHERE run = '$rut' AND contraseña = '" . md5($contraseña). "' ";
       /*  echo "Consulta SQL: $sql"; */
        $result = mysqli_query($conexion, $sql) ;
        $rows = mysqli_num_rows($result);

       /*  echo "Número de filas: " . $rows; */
        
        if ($rows == 1) {
           /*  $fila = mysqli_fetch_assoc($result);
            $tipo_usuario = $fila['tipo_usuario'];
            echo "Número de filas: " . $rows;  */
            $_SESSION['run'] = $rut;
            header("Location: inicio.php");
        } else {
            echo '<div class="alert alert-danger text-center" role="alert"> Usuario o contraseña incorrectos</div>';
        }

    } else {
        echo '<div class="alert alert-danger text-center" role="alert"> Campos vacios!!</div>';
    }
}

?>