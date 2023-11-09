<?php
session_start();
$server = "localhost";
$username = "root";
$password = "";
$dbname = "safedrive";

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed" . $conn->connect_error);
}

if (isset($_POST['contenido_QR'])) {
	/* valores para ingresar información a la tabla */
	$datosQR = $_POST['contenido_QR'];

	// Separar los datos utilizando el guion como separador
	$datosSeparados = explode(',', $datosQR);

	// Verificar si se obtuvieron dos partes
	if (count($datosSeparados) === 2) {
		// Asignar los datos a las variables
		$idUsuario = $datosSeparados[0];
		$patente = $datosSeparados[1];
		$hora_ingreso = 
		/* Verificación de que el usuario tiene permitido ingresar */
		$sql = "SELECT run, nombre, correo, patente FROM usuarios, vehiculos WHERE id_usuario='$idUsuario' AND patente='$patente";
		
		$query = $conn->query($sql);
		if ($query->num_rows > 0) {
			/* Insertar en historial junto a su información */
			$sql = "INSERT INTO historial(run, nombre, correo, patente, hora_ingreso) VALUES('$text','$nombre','$correo','$patente','$hora_ingreso')";
			if ($conn->query($sql) === TRUE) {
				$_SESSION['success'] = 'Tiene permitido el ingreso.';
			} else {
				$_SESSION['error'] = $conn->error;
			}
		}

		echo "Datos del código QR recibidos: id_usuario = $idUsuario, patente = $patente";
	} else {
		// Si no se pudieron separar los datos
		echo "Formato de código QR no válido.";
	}
}

header("location: vista_guardia.php");
$conn->close();
