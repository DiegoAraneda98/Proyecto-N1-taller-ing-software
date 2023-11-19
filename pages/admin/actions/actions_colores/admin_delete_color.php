<?php

require __DIR__ . '/../../../../modelo/conexion.php';

 $id_recibido = $_POST["id"];

 $delete = "DELETE FROM color WHERE id_color=".$id_recibido.";";

 $resultado = mysqli_query($conexion, $delete);

/*  header('Location: index.php?p=admin/admin_colores'); */


?>

