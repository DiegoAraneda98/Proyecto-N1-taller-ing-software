<?php 

require 'modelo/conexion.php';


$id = $conexion->real_escape_string($_POST['id']);

$sql = "SELECT * FROM usuario WHERE id_usuario = $id LIMIT 1 ";

$resultado = $conexion->query($sql);
$row = $resultado->num_rows;

$usuarios = [];
if($row> 0){

    $usuarios = $resultado->fetch_array();
}



echo json_encode($usuarios, JSON_UNESCAPED_UNICODE);
?>