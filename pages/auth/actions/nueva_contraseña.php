<?php 


require __DIR__ . '/../../../modelo/conexion.php';

$id = $_POST["id"];
$nueva_contraseña = $_POST["nueva_contraseña"];
$repetir_contraseña = $_POST["repetir_contraseña"];



$update = "UPDATE usuarios SET contraseña='$nueva_contraseña' WHERE id_usuario='$id'";
$resultado = mysqli_query($conexion, $update);

header ('Location: index.php?p=auth/login&message=success'); 

?>