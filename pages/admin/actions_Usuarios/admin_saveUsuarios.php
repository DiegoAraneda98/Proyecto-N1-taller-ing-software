<?php

require __DIR__ . '/../../../modelo/conexion.php';


$run = $conexion->real_escape_string($_POST["run"]);
$nombre = $conexion->real_escape_string($_POST["nombre"]);
$apellido = $conexion->real_escape_string($_POST["apellido"]);
$correo = $conexion->real_escape_string($_POST["correo"]);
$tipo_usuario = $conexion->real_escape_string($_POST["tipo_usuario"]);
$telefono = $conexion->real_escape_string($_POST["telefono"]);
$salud = $conexion->real_escape_string($_POST["salud"]);
$foto = $conexion->real_escape_string($_POST["foto"]);
$contraseña = $conexion->real_escape_string($_POST["contraseña"]);

$sql = "INSERT INTO usuarios (run, nombre, apellido, correo, tipo_usuario, telefono, salud, foto, contraseña) VALUES ('$run', '$nombre', '$apellido', '$correo', '$tipo_usuario', '$telefono', '$salud', '$foto', '$contraseña') ";

if ($conexion->query($sql)) {
    echo "EXITO";
}
header('Location: index.php?p=admin/admin');

?>