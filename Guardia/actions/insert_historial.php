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

	// Consulta vehiculos (coincidencia usuario/patente)
	$consulta = "SELECT * FROM vehiculos WHERE id_usuario = '$idUsuario' AND patente = '$patente'";
	$resultado = $conexion->query($consulta);

	if ($resultado->num_rows > 0) {

		// Obtenemos datos del usuario
		$consultaUsuarios = "SELECT run, nombre, correo FROM usuarios WHERE id_usuario = '$idUsuario'";
		$resultadoUsuarios = $conexion->query($consultaUsuarios);

		$filaUsuario = $resultadoUsuarios->fetch_assoc();
		$run = $filaUsuario['run'];
		$nombre = $filaUsuario['nombre'];
		$correo = $filaUsuario['correo'];

		// Insertar datos en la tabla "historial"
		$horaActual = date("H:i:s");
		$consultaHistorial = "INSERT INTO historial (run, nombre, correo, patente, hora_ingreso, id_usuario) VALUES ('$run', '$nombre', '$correo', '$patente', '$horaActual', '$')";
		$conexion->query($consultaHistorial);
	} else {
		http_response_code(400);
	}
}
/* 
header("location: index.php?p=guardia/vista_guardia"); */
$conexion->close();

?>