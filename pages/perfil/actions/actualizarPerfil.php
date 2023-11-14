<?php 

require __DIR__ . '/../../../modelo/conexion.php';
require __DIR__ . '/../../auth/actions/controlador_login.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST" || empty($_POST)) {
    die("Acceso no permitido");
} 

$rut = $_POST['rut'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$id_usuario = $_SESSION['id_usuario'];

$update = "UPDATE usuarios SET nombre='$nombre', apellido = '$apellido', run= '$rut' WHERE id_usuario='$id_usuario'";
$resultado = mysqli_query($conexion,$update);



if ($resultado) {
    echo json_encode(array("success" => true));
} else {
    echo json_encode(array("success" => false));
} 
 
?>