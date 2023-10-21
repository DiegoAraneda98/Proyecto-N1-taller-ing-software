<?php

if (!empty($_POST["registro"])) { //si el boton es presionado, validar datos que no estan vacios
    if (empty($_POST["rut"]) or empty($_POST["nombre"]) or empty($_POST["correo"]) or empty($_POST["telefono"]) or empty($_POST["contraseña"])) {
        echo '<div class="alert alert-danger" role="alert"> Uno de los campos está vacio!!</div>';
    } else {
        $rut = stripslashes($_REQUEST['rut']);
        $nombre = stripslashes($_REQUEST['nombre']);

        $correo = stripslashes($_REQUEST['correo']);
        $correo = mysqli_real_escape_string($conexion,$correo);

        $telefono = stripslashes($_REQUEST['telefono']);

        $contraseña = stripslashes($_REQUEST['contraseña']);
        $contraseña = mysqli_real_escape_string($conexion,$contraseña);
        
        $sql = $conexion->query("INSERT INTO usuarios (run, nombre, correo, telefono, contraseña) VALUES ('$rut', ' $nombre' , ' $correo' , ' $telefono' , '" . md5($contraseña) . "')");

        if ($sql == 1) {
            echo "USUARIO REGISTRADO CON EXITO";
        } else {
            echo "USUARIO NO REGISTRADO CON EXITO";
        }
    }
}
?>