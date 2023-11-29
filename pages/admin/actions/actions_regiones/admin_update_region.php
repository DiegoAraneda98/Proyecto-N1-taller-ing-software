<?php

require __DIR__ . '/../../../../modelo/conexion.php';

$id = $conexion->real_escape_string($_POST["id"]);
$region = $conexion->real_escape_string($_POST["region"]);
$abreviatura = $conexion->real_escape_string($_POST["abreviatura"]);
$capital = $conexion->real_escape_string($_POST["capital"]);


$update = "UPDATE regiones SET  region='$region', abreviatura = '$abreviatura', capital='$capital' WHERE id ='$id'";
$resultado = mysqli_query($conexion, $update);

header('Location: ../../../../index.php?p=admin/admin_regiones'); 

?>

