<?php

require __DIR__ . '/../../../modelo/conexion.php';

 $id_recibido = $_GET["id_enviado"];

 $delete = "DELETE FROM tipo_usuario WHERE id_tipoUsuario=".$id_recibido.";";

 $resultado = mysqli_query($conexion, $delete);

 header('Location: index.php?p=admin/admin_tipo_usuario');


?>

