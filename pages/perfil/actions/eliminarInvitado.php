<?php
require __DIR__ . '/../../../modelo/conexion.php';

$id_recibido = $_GET['id_enviado'];
$delete = "DELETE FROM invitados WHERE id_invitado = $id_recibido";

$resultado = mysqli_query($conexion, $delete);

header('Location: index.php?p=perfil/perfil');
?>