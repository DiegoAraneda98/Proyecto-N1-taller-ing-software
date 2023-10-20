<?php

if (!empty($_POST["login"])) { 
    if (!empty($_POST["correo"]) and !empty($_POST["contraseña"])) {
        $correo = $_POST["correo"];
        $contraseña = $_POST["contraseña"];
        $sql = $conexion ->query("SELECT * FROM usuarios WHERE correo = '$correo' AND contraseña = '$contraseña' ");
        if($datos = $sql->fetch_object()) {
            header("location: inicio.php");
        } else {
            echo"no funciona";
        }
       
    } else {
        echo '<div class="alert alert-danger text-center" role="alert"> Campos vacios!!</div>';
    }
}

?>