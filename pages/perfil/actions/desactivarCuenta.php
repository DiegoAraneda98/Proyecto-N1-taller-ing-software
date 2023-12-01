<?php
require __DIR__ . '/../../../modelo/conexion.php';


$run = $_POST['rut'];
$contraseña = $_POST['contraseña'];

$update = "UPDATE usuarios SET estado = '0' WHERE run = $run";

$resultado = mysqli_query($conexion, $update);

header('Location: index.php?p=auth/actions/controlador_logout');
?>