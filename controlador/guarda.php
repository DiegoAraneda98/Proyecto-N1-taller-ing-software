<?php 

require '../modelo/conexion.php';


$patente = $conexion->real_escape_string($_POST['patente']);
$modelo = $conexion->real_escape_string($_POST['modelo']);
$color = $conexion->real_escape_string($_POST['color']);

$sql = "INSERT INTO vehiculos (patente, modelo, color) VALUES ('$patente', '$modelo', '$color') ";


if($conexion->query($sql)){
    echo "EXITO";
}

header('Location: ../mis_vehiculos.php');

?>