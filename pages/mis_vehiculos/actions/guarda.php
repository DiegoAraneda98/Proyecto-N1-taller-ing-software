<?php

require '../modelo/conexion.php';
require 'controlador_login.php';

$patente = $conexion->real_escape_string($_POST['patente']);
$modelo = $conexion->real_escape_string($_POST['modelo']);
$color = $conexion->real_escape_string($_POST['color']);
$tipo_vehiculo = $conexion->real_escape_string($_POST['tipo_vehiculo']);
$id_usuario = $_SESSION['id_usuario'];

$sql = "INSERT INTO vehiculos (patente, modelo, color, tipo_vehiculo, fecha_ingreso, id_usuario) VALUES ('$patente', '$modelo', '$color', '$tipo_vehiculo', NOW(), $id_usuario) ";

if ($conexion->query($sql)) {
    echo "EXITO";
}

header('Location: ../mis_vehiculos.php');

?>