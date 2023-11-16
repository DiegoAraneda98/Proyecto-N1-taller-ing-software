<?php

require __DIR__ . '/../../../../modelo/conexion.php';

 $id_recibido = $_POST["id"];

 $delete = "DELETE FROM casetas WHERE id_caseta=".$id_recibido.";";

 $resultado = mysqli_query($conexion, $delete);

/*  header('Location: index.php?p=admin/admin_tipo_vehiculo'); */


?>

