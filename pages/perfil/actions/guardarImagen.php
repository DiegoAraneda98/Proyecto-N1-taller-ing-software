<?php

require __DIR__ . '/../../../modelo/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar si se ha enviado un archivo
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'avatares/';
        $uniqueFileName = uniqid('', true) . '' . basename($_FILES['foto']['name']);
        $targetPath = $uploadDir . $uniqueFileName;

        // Obtener la imagen actual del usuario
        $id_usuario = $_SESSION['id_usuario'];
        $consulta = "SELECT foto FROM usuarios WHERE id_usuario = '$id_usuario'";
        $resultado_consulta = mysqli_query($conexion, $consulta);

        if ($resultado_consulta) {
            $fila = mysqli_fetch_assoc($resultado_consulta);
            $imagen_anterior = $fila['foto'];

            // Si hay una imagen anterior, eliminarla del directorio
            if ($imagen_anterior && file_exists($imagen_anterior)) {
                unlink($imagen_anterior);
            }

            // Mover el archivo al directorio de destino
            if (move_uploaded_file($_FILES['foto']['tmp_name'], $targetPath)) {
                // Actualizar la nueva imagen del usuario en la base de datos
                $update = "UPDATE usuarios SET foto='$targetPath' WHERE id_usuario='$id_usuario'";
                $resultado_update = mysqli_query($conexion, $update);

                if ($resultado_update) {
                    echo 'La imagen se ha guardado correctamente. Nombre de archivo único: ' . $uniqueFileName;
                } else {
                    echo 'Hubo un error al actualizar la imagen en la base de datos.';
                }
            } else {
                echo 'Hubo un error al guardar la imagen.';
            }
        } else {
            echo 'Error al obtener la imagen anterior del usuario.';
        }
    } else {
        echo 'No se proporcionó ninguna imagen o hubo un error al cargarla.';
    }
}
?>
