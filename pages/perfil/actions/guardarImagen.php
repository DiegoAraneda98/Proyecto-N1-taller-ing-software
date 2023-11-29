<?php 

require __DIR__ . '/../../../modelo/conexion.php';



$rut = $_POST['rut'];
$nombre = $_POST['nombre'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar si se ha enviado un archivo
    if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] === UPLOAD_ERROK) {
        $uploadDir = 'avatares/';
        $uniqueFileName = uniqid('', true) . '' . basename($_FILES['avatar']['name']);
        $targetPath = $uploadDir . $uniqueFileName;

        // Mover el archivo al directorio de avatares
        if (move_uploaded_file($_FILES['avatar']['tmp_name'], $targetPath)) {
            echo 'La imagen se ha subido correctamente. Nombre de archivo único: ' . $uniqueFileName;
        } else {
            echo 'Hubo un error al subir la imagen.';
        }
    } else {
        echo 'No se proporcionó ninguna imagen o hubo un error al cargarla.';
    }
}

$update = "UPDATE usuarios SET foto='$foto' WHERE id_usuario='$id_usuario'";
$resultado = mysqli_query($conexion,$update);



?>