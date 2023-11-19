<?php

require __DIR__ . '/../../../../modelo/conexion.php';


$color = $conexion->real_escape_string($_POST["color"]);




$sql = "INSERT INTO color (color) VALUES ( '$color'); ";

if ($conexion->query($sql)) {
    echo "EXITO";
}
header('Location: ../../../../index.php?p=admin/admin_color');

?>