<?php 

require '../modelo/conexion.php';


$patente = $conexion->real_escape_string($_POST['patente']);
$modelo = $conexion->real_escape_string($_POST['modelo']);
$color = $conexion->real_escape_string($_POST['color']);
$tipo_vehiculo = $conexion->real_escape_string($_POST['tipo_vehiculo']);


$sql = "INSERT INTO vehiculos (patente, modelo, color, tipo_vehiculo, fecha_ingreso) VALUES ('$patente', '$modelo', '$color', '$tipo_vehiculo', NOW()) ";


if($conexion->query($sql)){
    echo "EXITO";
}

header('Location: ../mis_vehiculos.php');

?>