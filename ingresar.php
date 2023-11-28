<?php 
include("BaseDatos/conectar.php");
$rapidez = $_POST["estrellas1"];
$interfaz = $_POST["estrellas2"];
$accesibilidad = $_POST["estrellas3"];
$query = "INSERT INTO encuestas(rapidez, interfaz, accesibilidad) VALUES ('$rapidez','$interfaz','$accesibilidad');";
$result = mysqli_query($conexion,$query);
header("Location /../../index.php");
?>