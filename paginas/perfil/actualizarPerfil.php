<?php 

require '../../modelos/conexion.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$contraseña = $_POST['contraseña'];
$id = $_POST['id'];

$update = "UPDATE usuarios SET nombre='$nombre', correo= '$correo', telefono = '$telefono', contraseña = '$contraseña' WHERE id_usuario='$id'";
$resultado = mysqli_query($conexion,$update);

if($resultado) { 
    echo 'data updated';
} 
?>