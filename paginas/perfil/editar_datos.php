<?php 

$conexion = mysqli_connect("localhost","root","","safedrive");

$nombre_recibido = $_POST["nombre"];
$correo_recibido = $_POST["correo"];
$telefono_recibido = $_POST["telefono"];
$id_recibido = $_POST["id"];


$update = "UPDATE usuarios SET nombre='$nombre_recibido', correo='$correo_recibido', telefono='$telefono_recibido' WHERE id='$id_recibio';";
$resultado = mysqli_query($conexion, $update);



?>