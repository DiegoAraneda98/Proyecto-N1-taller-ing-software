<?php include("/BaseDatos/conectar.php");
$einter = $POST_["interfaz"];
$erapidez = $POST_["rapidez"];
$rut = $POST_["inputrut"];
$query = "INSERT INTO encuestas (rapidez, interfaz, id_usuario) VALUES ('$erapidez', '$einter', '$rut');";

$result =  mysqli_query($connection, $query);
?>