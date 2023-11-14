<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vista Guardia</title>

    <link rel="stylesheet" href="css/estilo_camara.css">
    <link rel="stylesheet" href="css/login_register.css">
    <link rel="stylesheet" href="css/style_inicio.css">
    <link rel="stylesheet" href="css/botones.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

</head>

<body>
    <div class="container-fluid fondo-vehiculos">
        <div class="row bg-light">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <img src="img/main-logo.svg" class="img-fluid logo" alt="logo">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                            <ul class="navbar-nav  ms-auto mb-2 mb-lg-0 ">
                                <li class="nav-item ">
                                    <a class="nav-link active border-bottom border-primary" aria-current="page" href="#">Admin</a>
                                </li>
                                <li class="nav-item ml">
                                    <a class="nav-link active" aria-current="page" href="controlador/controlador_logout.php">Cerrar sesión</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="col-10 offset-1 mt-5 d-flex justify-content-between h-75">
                    <div class="col-md-4" style="padding:10px;background:#fff;border-radius: 5px;" id="divvideo">
                        <style>
                            <?php include 'estilo_camara.css'; ?>
                        </style>
                    </div>

                    <div class="col-md-8">
                        <form action="insert.php" method="post" class="form-horizontal" style="border-radius: 5px;padding:10px; background:#fff;" id="divvideo">
                            <h4>Historial de acceso vehicular</h4>
                        </form>

                        <div style="border-radius: 5px; padding:10px; background:#fff; margin-top: 10px;" id="divvideo">
                            <table id="example1" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>Rut</td>
                                        <td>Nombre</td>
                                        <td>Correo</td>
                                        <td>Patente</td>
                                        <td>Hora ingreso</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $server = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "safedrive";

                                    $conn = new mysqli($server, $username, $password, $dbname);
                                    if ($conn->connect_error) {
                                        die("Connection failed" . $conn->connect_error);
                                    }
                                    $sql = "SELECT * FROM historial";
                                    $query = $conn->query($sql);
                                    while ($row = $query->fetch_assoc()) {
                                    ?>
                                        <tr>
                                            <td>
                                                <?php echo $row['run']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['nombre']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['correo']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['patente']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['hora']; ?>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <tr>
                                <div class="table-button">
                                    <button type="button" class="btn custom-btn" data-bs-toggle="modal" data-bs-target="#exportModal">Exportar tabla</button>
                                </div>
                                <div class="modal fade" id="exportModal" tabindex="-1" aria-labelledby="exportModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exportModalLabel">Confirmar</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                ¿Está seguro de que desea exportar la tabla?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn custom-btn" onclick="Export()">Confirmar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="js/exportar_tabla.js"></script>
        <script src="js/actualizar_tabla.js"></script>
        <script src="js/camara_scanner.js"></script>

        <!-- Script para cargar el modal.html -->
        <script>
            $(document).ready(function() {
                $("#modalContainer").load("modal.html");
            });
        </script>
    </div>
</body>

</html>