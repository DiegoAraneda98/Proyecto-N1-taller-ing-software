<?php

require __DIR__ . '/../../../../modelo/conexion.php';



$nombre = $conexion->real_escape_string($_POST["nombre_guardia"]);
$id_caseta = $conexion->real_escape_string($_POST["caseta"]);

$sql = "INSERT INTO guardias (nombre, id_caseta) VALUES ('$nombre', '$id_caseta')";

if ($conexion->query($sql)) {
    echo "EXITO";
}
header('Location: index.php?p=admin/admin_guardia');

?>