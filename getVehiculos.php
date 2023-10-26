<?php 

require 'modelo/conexion.php';


$id = $conexion->real_escape_string($_POST['id']);

$sql = "SELECT id_vehiculo,patente,modelo,color,tipo_vehiculo FROM vehiculos WHERE id_vehiculo = $id LIMIT 1 ";
$resultado = $conexion->query($sql);
$row = $resultado->num_rows;

$vehiculos = [];
if($row> 0){

    $vehiculos = $resultado->fetch_array();
}



echo json_encode($vehiculos, JSON_UNESCAPED_UNICODE);
?>