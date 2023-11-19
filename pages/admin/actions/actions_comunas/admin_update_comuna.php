<?php

require __DIR__ . '/../../../../modelo/conexion.php';

$id = $conexion->real_escape_string($_POST["id"]);
$comuna = $conexion->real_escape_string($_POST["comuna"]);
$provincia = $conexion->real_escape_string($_POST["provincia"]);


$update = "UPDATE comunas SET  comuna='$comuna', provincia_id = '$provincia' WHERE id ='$id'";
$resultado = mysqli_query($conexion, $update);

header('Location: ../../../../index.php?p=admin/admin_comunas'); 

?>

