<?php

require __DIR__ . '/../../../../modelo/conexion.php';

$id = $conexion->real_escape_string($_POST["id"]);
$modelo = $conexion->real_escape_string($_POST["modelo"]);


$update = "UPDATE modelo SET  modelo='$modelo'WHERE id_modelo ='$id'";
$resultado = mysqli_query($conexion, $update);

header('Location: ../../../../index.php?p=admin/admin_modelo'); 

?>

