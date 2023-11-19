<?php

require __DIR__ . '/../../../../modelo/conexion.php';


$nombre = $conexion->real_escape_string($_POST["nombre"]);
$direccion = $conexion->real_escape_string($_POST["direccion"]);



$sql = "INSERT INTO casetas (nombre, direccion) VALUES ( '$nombre', '$direccion '); ";

if ($conexion->query($sql)) {
    echo "EXITO";
}
header('Location: index.php?p=admin/casetas');

?>