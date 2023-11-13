<?php

if (!empty($_POST["registro"])) { //si el boton es presionado, validar datos que no estan vacios
    if (empty($_POST["rut"]) or empty($_POST["nombre"]) or empty($_POST["correo"]) or empty($_POST["tipo_usuario"]) or empty($_POST["contraseña"])) {
        echo '<div class="alert alert-danger" role="alert"> Uno de los campos está vacio!!</div>';
    } else {
        $rut = stripslashes($_REQUEST['rut']);
        $rut = mysqli_real_escape_string($conexion, $rut);

        $nombre = stripslashes($_REQUEST['nombre']);
        $nombre = mysqli_real_escape_string($conexion, $nombre);

        $tipo_usuario = ($_REQUEST['tipo_usuario']);
        $tipo_usuario = mysqli_real_escape_string($conexion, trim($tipo_usuario));

        $correo = stripslashes($_REQUEST['correo']);
        $correo = mysqli_real_escape_string($conexion, $correo);

        $contraseña = stripslashes($_REQUEST['contraseña']);
        $contraseña = mysqli_real_escape_string($conexion, $contraseña);



        $sql_1 = "SELECT * FROM usuarios WHERE run = '$rut'";
        $result = $conexion->query($sql_1);

        if ($result->num_rows > 0) {
            echo '<div class="alert alert-danger text-center" role="alert">El rut ya esta registrado</div>';
        } else {
            $sql = $conexion->query("INSERT INTO usuarios (run, nombre, correo, tipo_usuario, contraseña) VALUES ('$rut', ' $nombre' , ' $correo' , ' $tipo_usuario' , '$contraseña')");

            if ($sql == 1) {

                header("Location: index.php?p=auth/login");
            } else {
                echo "USUARIO NO REGISTRADO CON EXITO";
            }
        }



    }
}
?>