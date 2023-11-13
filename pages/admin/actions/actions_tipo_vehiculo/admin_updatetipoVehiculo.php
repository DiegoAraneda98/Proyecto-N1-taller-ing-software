<?php

require __DIR__ . '/../../../../modelo/conexion.php';

$id = $conexion->real_escape_string($_POST["id"]);
$nombre = $conexion->real_escape_string($_POST["nombre"]);



$update = "UPDATE tipo_vehiculo SET  nombre='$nombre' WHERE id_tipoVehiculo ='$id'";
$resultado = mysqli_query($conexion, $update);

header('Location: index.php?p=admin/admin_tipo_vehiculo');

?>

