<?php

require '../modelo/conexion.php';

$id_recibido = $_POST["id"];
$patente = $conexion->real_escape_string($_POST['patente']);
$modelo = $conexion->real_escape_string($_POST['modelo']);
$color = $conexion->real_escape_string($_POST['color']);
$tipo_vehiculo = $conexion->real_escape_string($_POST['tipo_vehiculo']);


$update = "UPDATE vehiculos SET patente='$patente', modelo='$modelo', color='$color', tipo_vehiculo = 'tipo_vehiculo' WHERE id='$id_recibido';";
$resultado = mysqli_query($conexion, $update);

header('Location: ../mis_vehiculos.php');


?>

