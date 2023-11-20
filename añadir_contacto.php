<?php include("BaseDatos/conectar.php");
$einter = $_POST["interfaz"];
$erapidez = $_POST["rapidez"];
$rut = $_POST["irut"];
$nombre_re = $_POST["inombre"];
$correo_re = $_POST["icorreo"];
$tele_re = $_POST["itelefono"];
$sug =  $_POST["iSugerencia"];
$query = "INSERT INTO encuestas (rapidez, interfaz, id_usuario,nom_usuario,telefono,correo,sugerencia) VALUES ('$erapidez', '$einter', '$rut','$nombre_re','$tele_re','$correo_re','$sug');";
$result =  mysqli_query($conexion, $query);
?>