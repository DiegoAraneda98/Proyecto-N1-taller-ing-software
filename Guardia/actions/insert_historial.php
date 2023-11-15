<?php
session_start();
$server = "localhost";
$username = "root";
$password = "";
$dbname = "safedrive";

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Error de conexión: " . $conn->connect_error);
}

if (isset($_POST['id_usuario']) && isset($_POST['patente'])) {

	$idUsuario = $_POST['id_usuario'];
	$patente = $_POST['patente'];

	// Consulta vehiculos (coincidencia usuario/patente)
	$consulta = "SELECT * FROM vehiculos WHERE id_usuario = '$idUsuario' AND patente = '$patente'";
	$resultado = $conn->query($consulta);

	if ($resultado->num_rows > 0) {

		// Obtenemos datos del usuario
		$consultaUsuarios = "SELECT run, nombre, correo FROM usuarios WHERE id_usuario = '$idUsuario'";
        $resultadoUsuarios = $conexion->query($consultaUsuarios);

        if ($resultadoUsuarios->num_rows > 0) {
            $filaUsuario = $resultadoUsuarios->fetch_assoc();
            $run = $filaUsuario['run'];
            $nombre = $filaUsuario['nombre'];
            $correo = $filaUsuario['correo'];

            // Insertar datos en la tabla "historial"
            $horaActual = date("H:i:s");
            $consultaHistorial = "INSERT INTO historial (run, nombre, correo, patente, hora) VALUES ('$run', '$nombre', '$correo', '$patente', '$horaActual')";
            
	} else {

		echo "No se encontraron datos en vehiculos para la patente $patente y el id_usuario $idUsuario.";
	}
} else {
	// Si no se recibieron datos del código QR
	echo "No se recibieron datos del código QR.";
}
}

header("location: vista_guardia.php");
$conn->close();
?>