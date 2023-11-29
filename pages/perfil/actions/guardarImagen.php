<?php

require __DIR__ . '/../../../modelo/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar si se ha enviado un archivo
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'avatares/';
        $uniqueFileName = uniqid('', true) . '' . basename($_FILES['foto']['name']);
        $targetPath = $uploadDir . $uniqueFileName;

        // Mover el archivo al directorio de destino
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $targetPath)) {
            echo 'La imagen se ha guardado correctamente. Nombre de archivo único: ' . $uniqueFileName;
        } else {
            echo 'Hubo un error al guardar la imagen.';
        }
    } else {
        echo 'No se proporcionó ninguna imagen o hubo un error al cargarla.';
    }
}



$id_usuario = $_SESSION['id_usuario'];



$update = "UPDATE usuarios SET foto='$targetPath' WHERE id_usuario='$id_usuario'";
$resultado = mysqli_query($conexion,$update);

?>