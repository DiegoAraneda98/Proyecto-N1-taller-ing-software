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
$filename = __DIR__ . '/Historial_' . date('Y-m-d') . '.csv';

$query = "SELECT * FROM historial";
$result = mysqli_query($conn, $query);

$file = fopen($filename, "w");
$array = array("rut", "nombre", "correo", "patente", "hora_ingreso");
fputcsv($file, $array);

while ($row = mysqli_fetch_array($result)) {
    $rut = $row['run'];
    $nombre = $row['nombre'];
    $correo = $row['correo'];
    $patente = $row['patente'];
    $hora_ingreso = $row['hora_ingreso'];

    $array = array($rut, $nombre, $correo, $patente, $hora_ingreso);
    fputcsv($file, $array);
}
fclose($file);

header("Content-Description: File Transfer");
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-type: application/csv;");
readfile($filename);
exit();
?>
