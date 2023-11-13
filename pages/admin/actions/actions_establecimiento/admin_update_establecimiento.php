<?php

require __DIR__ . '/../../../../modelo/conexion.php';

$id = $conexion->real_escape_string($_POST["id"]);
$nombre = $conexion->real_escape_string($_POST["nombre"]);
$direccion = $conexion->real_escape_string($_POST["direccion"]);


$update = "UPDATE establecimiento SET  nombre_establecimiento='$nombre', direccion = '$direccion' WHERE cod_establecimiento ='$id'";
$resultado = mysqli_query($conexion, $update);

header('Location: ../../../../index.php?p=admin/admin_establecimientos'); 

?>

