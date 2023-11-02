<?php
require '../../modelos/conexion.php';


$nuevaContrasena = $_POST['nuevaContrasena'];
$id = $_POST['id'];



// Consulta SQL para actualizar la contraseña
$update = "UPDATE usuarios SET contraseña = '$nuevaContrasena' WHERE id_usuario = '$id'";

$resultado = mysqli_query($conexion, $update);

if ($resultado) {
    header('Location: index.php');
} else {
    echo "Error al actualizar la contraseña: " . mysqli_error($conexion);
}
?>