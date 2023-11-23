<?php include("BaseDatos/conectar.php");

$einter = $_POST["interfaz"];
$erapidez = $_POST["rapidez"];
$rut = $_POST["irut"];
$nombre_re = $_POST["inombre"];
$correo_re = $_POST["icorreo"];
$tele_re = $_POST["itelefono"];
$sug =  $_POST["iSugerencia"];


$query = "INSERT INTO encuestas (rapidez, interfaz,id_usuario) VALUES ('$erapidez', '$einter','$rut');";
$result =  mysqli_query($conexion, $query);
header("Location: index.php");
?>