<?php

require __DIR__ . '/../../../../modelo/conexion.php';


$run = $conexion->real_escape_string($_POST["run"]);
$nombre = $conexion->real_escape_string($_POST["nombre_guardia"]);
$contraseña = $conexion->real_escape_string($_POST["contraseña"]);
$id_caseta = $conexion->real_escape_string($_POST["caseta"]);

$sql = "INSERT INTO guardias (run,nombre,contraseña,id_caseta) VALUES ('$run','$nombre','$contraseña','$id_caseta')";

if ($conexion->query($sql)) {
    echo "EXITO";
}


$sql2 = "INSERT INTO usuarios(run, nombre, tipo_usuario, salud, contraseña, estado) VALUES ('$run','$nombre','Guardia','negativo','$contraseña','1')";
$resul = mysqli_query($conexion, $sql2);

header('Location: index.php?p=admin/admin_guardia');

?>