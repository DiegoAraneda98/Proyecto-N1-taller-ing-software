<?php

require __DIR__ . '/../../../modelo/conexion.php';



$nombre = $conexion->real_escape_string($_POST["nombre"]);


$sql = "INSERT INTO tipo_usuario (nombre) VALUES ( '$nombre') ";

if ($conexion->query($sql)) {
    echo "EXITO";
}
header('Location: index.php?p=admin/admin_tipo_usuario');

?>