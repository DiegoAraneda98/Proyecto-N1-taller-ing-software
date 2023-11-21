<?php include("BaseDatos/conectar.php");
$einter = $_POST["interfaz"];
$erapidez = $_POST["rapidez"];
$rut = $_POST["irut"];
$nombre_re = $_POST["inombre"];
$correo_re = $_POST["icorreo"];
$tele_re = $_POST["itelefono"];
$sug =  $_POST["iSugerencia"];
$para = "tfell@ing.ucsc.cl";
$titulo="Sugerencias de ".$nombre_re;
$mensaje="Nombre: ".$nombre_re."\nCorreo: ".$correo_re."\nTelefono: ".$tele_re."\nSugerencia: \n".$sug;
mail($para,$titulo,$mensaje,null);
$query = "INSERT INTO encuestas (rapidez, interfaz) VALUES ('$erapidez', '$einter');";
$result =  mysqli_query($conexion, $query);

?>