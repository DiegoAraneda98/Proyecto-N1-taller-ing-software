<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "safedrive";

if (isset($_POST['horaInicio']) && isset($_POST['horaFin'])) {
    $horaInicio = $_POST['horaInicio'];
    $horaFin = $_POST['horaFin'];

    $conexion = new mysqli($server, $username, $password, $dbname);

    if ($conexion->connect_error) {
        die("Connection failed: " . $conexion->connect_error);
    }

    $sql = "SELECT hora_ingreso FROM historial WHERE (hora_ingreso BETWEEN ? AND ?)";
    $stmt = $conexion->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ss", $horaInicio, $horaFin);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $horas = [];

        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $horas[] = $fila['hora_ingreso'];
            }
        }

        $stmt->close();

        echo json_encode($horas); // Devuelve solo el JSON de las horas

    } else {
        echo json_encode(['error' => 'Error en la preparación de la consulta']); // Devuelve un JSON con el error si la preparación falla
    }

    $conexion->close();
} else {
    echo json_encode(['error' => 'Los campos "horaInicio" y "horaFin" no están definidos en la solicitud POST.']); // Devuelve un JSON con el error si los campos no están definidos
}
?>
