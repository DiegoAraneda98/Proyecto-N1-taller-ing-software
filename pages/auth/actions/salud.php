<?php

require __DIR__ . '/../../../modelo/conexion.php';

$token = $_POST["token"];

$selectUsuario = "SELECT * FROM usuarios WHERE token = '$token'";
$resultadoSelect = mysqli_query($conexion, $selectUsuario);

$row = mysqli_fetch_assoc($resultadoSelect);
$id_usuario = $row['id_usuario'];
// Inicializa el contador de respuestas afirmativas
$respuestas_afirmativas = 0;

// Repite este bloque para cada pregunta
if (isset($_POST['fiebre']) && $_POST['fiebre'] == 'si') {
    $respuestas_afirmativas++;
}
if (isset($_POST['contacto']) && $_POST['contacto'] == 'si') {
    $respuestas_afirmativas++;
}
if (isset($_POST['musculos']) && $_POST['musculos'] == 'si') {
    $respuestas_afirmativas++;
}
if (isset($_POST['fatiga']) && $_POST['fatiga'] == 'si') {
    $respuestas_afirmativas++;
}
if (isset($_POST['gusto']) && $_POST['gusto'] == 'si') {
    $respuestas_afirmativas++;
}
if (isset($_POST['apetito']) && $_POST['apetito'] == 'si') {
    $respuestas_afirmativas++;
}
if (isset($_POST['disnea']) && $_POST['disnea'] == 'si') {
    $respuestas_afirmativas++;
}

// Repite este bloque para cada pregunta

// Proceso para determinar el estado de salud
if ($respuestas_afirmativas >= 6) {
    $estado_salud = 'positivo';
} elseif ($respuestas_afirmativas >= 4 and $respuestas_afirmativas < 6) {
    $estado_salud = 'observacion';
} else {
    $estado_salud = 'negativo';
}




$update = "UPDATE usuarios SET salud= '$estado_salud', estado = '1' WHERE id_usuario='$id_usuario'";
$resultado = mysqli_query($conexion, $update);


 header('Location: index.php?p=auth/login&message=activated'); 

?>

