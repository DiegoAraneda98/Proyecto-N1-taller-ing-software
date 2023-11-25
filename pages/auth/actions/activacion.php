<?php

require __DIR__ . '/../../../modelo/conexion.php';

$id = $conexion->real_escape_string($_POST["id"]);




$update = "UPDATE usuarios SET estado= true WHERE id_usuario='$id'";
$resultado = mysqli_query($conexion, $update);


 header('Location: index.php?p=auth/login'); 

?>

