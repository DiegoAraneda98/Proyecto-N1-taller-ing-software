<?php

require __DIR__ . '/../../../../modelo/conexion.php';


$modelo = $conexion->real_escape_string($_POST["modelo"]);




$sql = "INSERT INTO modelo (modelo) VALUES ( '$modelo'); ";

if ($conexion->query($sql)) {
    echo "EXITO";
}
header('Location: ../../../../index.php?p=admin/admin_modelo');

?>