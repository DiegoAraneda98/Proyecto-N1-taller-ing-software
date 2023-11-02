<?php 

require '../../modelos/conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$id = $_POST['id'];

$update = "UPDATE usuarios SET nombre='$nombre', apellido = '$apellido', correo= '$correo', telefono = '$telefono' WHERE id_usuario='$id'";
$resultado = mysqli_query($conexion,$update);

if($resultado) { 
    header ('Location: index.php');
    
} 
?>