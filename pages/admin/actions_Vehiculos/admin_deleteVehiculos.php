<?php

require __DIR__ . '/../../../modelo/conexion.php';

 $id_recibido = $_GET["id_enviado"];

 $delete = "DELETE FROM vehiculos WHERE id_vehiculo=".$id_recibido.";";

 $resultado = mysqli_query($conexion, $delete);

 header('Location: index.php?p=admin/admin_vehiculos');


?>

