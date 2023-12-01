<?php
session_start();
date_default_timezone_set("America/Santiago");
$server = "localhost";
$username = "root";
$password = "";
$dbname = "safedrive";

$conexion = new mysqli($server, $username, $password, $dbname);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if (isset($_POST['id']) && isset($_POST['patente'])) {
    $idUsuario = $_POST['id'];
    $patente = $_POST['patente'];

    // Verificar si el usuario y la patente existen en la base de datos
    $consulta = "SELECT * FROM vehiculos WHERE id_usuario = '$idUsuario' AND patente = '$patente'";
    $resultado = $conexion->query($consulta);

    if ($resultado->num_rows > 0) {
        // Obtener el último registro activo (sin hora de salida) para el usuario y la patente proporcionados
        $checkQuery = "SELECT id_historial FROM historial WHERE id_usuario = '$idUsuario' AND patente = '$patente' AND hora_salida IS NULL ORDER BY id_historial DESC LIMIT 1";
        $checkResult = $conexion->query($checkQuery);

        if ($checkResult->num_rows > 0) {
            // Si hay un registro, actualizar la hora de salida de ese registro
            $row = $checkResult->fetch_assoc();
            $idHistorial = $row['id_historial'];

            $updateQuery = "UPDATE historial SET hora_salida = NOW() WHERE id_historial = '$idHistorial'";
            $conexion->query($updateQuery);
        } else {
            // Si no hay registro, insertar uno nuevo
            $consultaUsuarios = "SELECT run, nombre, correo, cuarentena FROM usuarios WHERE id_usuario = '$idUsuario' AND  cuarentena = '0'";
            $resultadoUsuarios = $conexion->query($consultaUsuarios);

            if ($resultadoUsuarios->num_rows > 0) {
                $filaUsuario = $resultadoUsuarios->fetch_assoc();
                $run = $filaUsuario['run'];
                $nombre = $filaUsuario['nombre'];
                $correo = $filaUsuario['correo'];


                // Insertar datos en la tabla como nuevo registro
                $horaActual = date("Y-m-d H:i:s");
                $consultaHistorial = "INSERT INTO historial (run, nombre, correo, patente, hora_ingreso, id_usuario) VALUES ('$run', '$nombre', '$correo', '$patente', '$horaActual', '$idUsuario')";
                $conexion->query($consultaHistorial);
            }else{
                http_response_code(400);
        }
        }
    } else {
        http_response_code(400);
    }
} else {
    http_response_code(400);
}

$conexion->close();
?>
