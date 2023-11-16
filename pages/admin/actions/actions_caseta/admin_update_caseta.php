<?php

require __DIR__ . '/../../../../modelo/conexion.php';

$id = $conexion->real_escape_string($_POST["id"]);
$nombre = $conexion->real_escape_string($_POST["nombre"]);
$direccion = $conexion->real_escape_string($_POST["direccion"]);


$update = "UPDATE casetas SET  nombre='$nombre', direccion='$direccion' WHERE id_caseta ='$id'";
$resultado = mysqli_query($conexion, $update);

header('Location: index.php?p=admin/casetas');

?>

