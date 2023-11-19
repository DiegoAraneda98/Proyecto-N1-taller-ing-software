<?php
require '../../../phpqrcode/qrlib.php'; 

require __DIR__ . '/../../auth/actions/controlador_login.php';

// Obtén el id_vehiculo y la patente de la solicitud POST
$id_usuario = $_SESSION['id_usuario'];
$patente = $_POST['patente'];

// Genera el contenido del código QR con id_vehiculo y patente
$contenido = $id_usuario. " " .$patente;

// Configuración del QR
$tamanio = 20;
$level = 'M';
$frameSize = 3;

// Genera el código QR en memoria
ob_start();
QRcode::png($contenido, null, $level, $tamanio, $frameSize);
$codigoQR = ob_get_clean();

// Devuelve el código QR y la patente como respuesta AJAX en formato JSON
header('Content-Type: application/json');
echo json_encode(array('codigoQR' => base64_encode($codigoQR), 'patente' => $patente));
?>
