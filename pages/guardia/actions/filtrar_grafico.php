<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "safedrive";

$conexion = new mysqli($server, $username, $password, $dbname);
if ($conexion->connect_error) {
    die("Connection failed" . $conexion->connect_error);
}

$data = array();

$sql = "SELECT hora_ingreso FROM historial";
$query = $conexion->query($sql);
while ($row = $query->fetch_assoc()) {
    $data[] = $row['hora_ingreso'];
}

echo json_encode($data);

$conexion->close();
