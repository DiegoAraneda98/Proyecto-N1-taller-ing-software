<?php

require __DIR__ . '/../../../../modelo/conexion.php';

$id = $conexion->real_escape_string($_POST["id"]);
$color = $conexion->real_escape_string($_POST["color"]);


$update = "UPDATE color SET  color='$color'WHERE id_color ='$id'";
$resultado = mysqli_query($conexion, $update);

header('Location: ../../../../index.php?p=admin/admin_color'); 

?>

