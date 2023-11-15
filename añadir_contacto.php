<?php include("/BaseDatos/conectar.php");
$einter = $POST_["interfaz"];
$erapidez = $POST_["rapidez"];
$rut = $POST_["inputrut"];
$nombre_re = $POST_["inombre"];
$correo_re = $POST_["icorreo"];
$tele_re = $POST_["itelefono"];
$sug =  $POST_["iSugerencia"]
$sql = "INSERT INTO encuestas (rapidez, interfaz, id_usuario) VALUES ('$erapidez', '$einter', '$rut');";
$result =  mysqli_query($connection, $query);
?>