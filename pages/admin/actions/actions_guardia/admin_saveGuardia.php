<?php

require __DIR__ . '/../../../../modelo/conexion.php';



$nombre = $conexion->real_escape_string($_POST["nombre_guardia"]);
$contraseña = $conexion->real_escape_string($_POST["contraseña"]);
$id_caseta = $conexion->real_escape_string($_POST["caseta"]);

$sql = "INSERT INTO guardias (nombre, contraseña, id_caseta) VALUES ('$nombre', '$contraseña', '$id_caseta')";

if ($conexion->query($sql)) {
    echo "EXITO";
}


$sqlUsuario = "INSERT INTO usuarios ( nombre, tipo_usuario, contraseña, salud, estado) VALUES ('$nombre', 'Guardia' , '$contraseña','negativo', '1')";
$resultado = mysqli_query($conexion, $sqlUsuario);
header('Location: index.php?p=admin/admin_guardia');

?>