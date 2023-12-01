<?php

require __DIR__ . '/../../../../modelo/conexion.php';

$id = $conexion->real_escape_string($_POST["id"]);
$run = $conexion->real_escape_string($_POST["run"]);
$nombre = $conexion->real_escape_string($_POST["nombre"]);
$apellido = $conexion->real_escape_string($_POST["apellido"]);
$correo = $conexion->real_escape_string($_POST["correo"]);
$tipo_usuario = $conexion->real_escape_string($_POST["tipo_usuario"]);
$telefono = $conexion->real_escape_string($_POST["telefono"]);
$salud = $conexion->real_escape_string($_POST["salud"]);
$foto = $conexion->real_escape_string($_POST["foto"]);
$contraseña = $conexion->real_escape_string($_POST["contraseña"]);


$update = "UPDATE usuarios SET run='$run', nombre='$nombre', apellido='$apellido', correo = '$correo' , tipo_usuario = '$tipo_usuario' , telefono = '$telefono' , salud = '$salud' , foto = '$foto' , contraseña = '$contraseña' WHERE id_usuario ='$id'";
$resultado = mysqli_query($conexion, $update);

header('Location: ../../../../index.php?p=admin/admin');

?>

