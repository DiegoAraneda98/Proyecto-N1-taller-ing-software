<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "safedrive";

$horaInicio = $_POST['horaInicio'];
$horaFin = $_POST['horaFin'];

$conexion = new mysqli($server, $username, $password, $dbname);

if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}

$sql = "SELECT hora_ingreso FROM historial WHERE hora_ingreso BETWEEN '$horaInicio' AND '$horaFin'";
$resultado = $conexion->query($sql);

$horas = [];

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        $horas[] = $fila['hora_ingreso'];
    }
}

header('Content-Type: application/json');
echo json_encode($horas);

$conexion->close();
?>