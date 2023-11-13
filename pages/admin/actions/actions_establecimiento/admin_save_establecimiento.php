<?php

require __DIR__ . '/../../../../modelo/conexion.php';


$nombre = $conexion->real_escape_string($_POST["nombre_establecimiento"]);
$direccion = $conexion->real_escape_string($_POST["direccion"]);
$cod = $conexion->real_escape_string($_POST["cod_comuna"]);



$sql = "INSERT INTO establecimiento (nombre_establecimiento, direccion, cod_comuna) VALUES ( '$nombre', '$direccion', '$cod'); ";

if ($conexion->query($sql)) {
    echo "EXITO";
}
header('Location: ../../../../index.php?p=admin/admin_establecimientos');

?>