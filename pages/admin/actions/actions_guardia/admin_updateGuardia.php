<?php

require __DIR__ . '/../../../../modelo/conexion.php';

$id = $conexion->real_escape_string($_POST["id"]);
$run = $conexion->real_escape_string($_POST["run"]);
$nombre = $conexion->real_escape_string($_POST["nombre"]);
$contraseña = $conexion->real_escape_string($_POST["contraseña"]);
$id_caseta = $conexion->real_escape_string($_POST["id_caseta"]);



$update = "UPDATE guardias SET  run='$run', nombre='$nombre', contraseña='$contraseña', id_caseta='$id_caseta'WHERE id_guardia ='$id'";
$resultado = mysqli_query($conexion, $update);

header('Location: ../../../../index.php?p=admin/admin_guardia');

?>

