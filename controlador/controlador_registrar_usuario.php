<?php

if (!empty($_POST["registro"])) { //si el boton es presionado, validar datos que no estan vacios
    if (empty($_POST["rut"]) or empty($_POST["nombre"]) or empty($_POST["correo"]) or empty($_POST["telefono"]) or empty($_POST["contraseña"])) {
        echo '<div class="alert alert-danger" role="alert"> Uno de los campos está vacio!!</div>';
    } else {
        $rut = $_POST["rut"];
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $telefono = $_POST["telefono"];
        $contraseña = $_POST["contraseña"];
        $sql = $conexion->query("INSERT INTO usuarios (run, nombre, correo, telefono, contraseña) VALUES ('$rut', ' $nombre' , ' $correo' , ' $telefono' , '$contraseña')");
   
        if ($sql==1) {
            echo"USUARIO REGISTRADO CON EXITO";
        } else {
           echo"USUARIO NO REGISTRADO CON EXITO";
        }
    }
}
?>