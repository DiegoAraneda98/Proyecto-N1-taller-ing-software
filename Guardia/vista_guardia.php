<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vista Guardia</title>

    <link rel="stylesheet" href="css/login_register.css">
    <link rel="stylesheet" href="css/style_inicio.css">
    <link rel="stylesheet" href="css/botones.css">


    <!-- j-query -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <!-- instacam -->
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
     -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="container-fluid fondo-vehiculos">
        <div class="row bg-light"> <!-- nav bar -->
            <div class="col-12 ">
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

        <div>
            <div class="row">
                <div class="col-12">
                    <div class="col-10 offset-1 mt-5 d-flex justify-content-between h-75">
                        <div class="col-md-4" style="padding:10px;background:#fff;border-radius: 5px;" id="divvideo">
                            <style>
                                #divvideo {
                                    box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.1);
                                    position: relative;
                                }

                                #preview {
                                    padding-top: 1%;
                                    padding-bottom: 1%;
                                    width: 100%;
                                    height: 90%;
                                    margin: 0px auto;
                                    object-fit: cover;
                                }
                            </style>
                            <center>
                                <button id="toggleCamera" onclick="toggleCamera()" class="btn custom-btn">Encender lector QR</button>
                            </center>

                            <video id="preview" width="100%" style="border-radius:10px;" class="d-none"></video>
                            <br>
                            <br>
                            <?php
                            ?>

                        </div>

                        <div class="col-md-8">
                            <form action="insert_historial.php" method="post" class="form-horizontal" style="border-radius: 5px;padding:10px; background:#fff;" id="divvideo">
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

                                        $conexion = new mysqli($server, $username, $password, $dbname);
                                        if ($conexion->connect_error) {
                                            die("Connection failed" . $conexion->connect_error);
                                        }
                                        $sql = "SELECT * FROM historial";
                                        $query = $conexion->query($sql);
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
                                                    <?php echo $row['hora_ingreso']; ?>
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
                                    <!-- Modal -->
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
        </div>

        <!-- Exportar tablas -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var exportButton = document.getElementById('exportButton');
                if (exportButton) {
                    exportButton.addEventListener('click', function() {
                        Export();
                    });
                }
            });
        </script>

        <!-- Exportar tabla -->
        <script>
            function Export() {
                window.open("actions/exportar.php", '_blank');
                $('#exportModal').modal('hide');
            }
        </script>




        <!-- Cámara/Scanner -->
        <script>
            var scanner = null;

            function toggleCamera() {
                var divVideo = document.getElementById('divvideo');
                const resultadoElement = document.getElementById('dato_QR');

                if (scanner === null) {
                    // Inicializar el scanner si no está encendido
                    Instascan.Camera.getCameras().then(function(cameras) {
                        if (cameras.length > 0) {
                            scanner = new Instascan.Scanner({
                                video: document.getElementById('preview'),
                                scanPeriod: 5,
                                mirror: true
                            });

                            scanner.start(cameras[0]);
                            document.getElementById('preview').classList.remove('d-none'); // Mostrar el video

                            // Ajustar el tamaño del div al 100% del área de la cámara
                            divVideo.style.width = '100%';
                            divVideo.style.height = '100%';

                            document.getElementById('toggleCamera').textContent = 'Apagar lector QR';

                            scanner.addListener('scan', function(contenidoQR) {
                                const datosSeparados = contenidoQR.split(' '); // separa los datos

                                // Verificar si se obtuvieron dos partes
                                if (datosSeparados.length === 2) {
                                    const idUsuario = datosSeparados[0];
                                    const patente = datosSeparados[1];

                                    $(document).ready(function() {
                                        $.ajax({
                                            url: 'actions/insert_historial.php',
                                            type: 'POST',
                                            data: {
                                                id: idUsuario,
                                                patente: patente
                                            },
                                            success: function(response) {
                                                Swal.fire({
                                                    title: "ACCESO CONFIRMADO",
                                                    text: "Tiene permitido el ingreso. ",
                                                    icon: "success"
                                                });
                                                setTimeout(function() {
                                                    window.location.href = 'vista_guardia.php';
                                                }, 3000);

                                            },
                                            error: function(error) {
                                                Swal.fire({
                                                    title: "ACCESO DENEGADO",
                                                    text: "Por favor validar sus datos. ",
                                                    icon: "error",
                                                    timer: 1500
                                                });
                                            }
                                        });
                                    });

                                } else {
                                    resultadoElement.innerHTML = 'Formato de código QR no válido.';
                                }

                            });
                        } else {
                            console.error('No se han encontrado cámaras.');
                            alert('No se encontraron cámaras.');
                        }
                    }).catch(function(e) {
                        alert(e);
                    });
                } else {
                    // Si está encendido, entonces apagar
                    scanner.stop();
                    scanner = null; // Restablece el objeto scanner
                    document.getElementById('toggleCamera').textContent = 'Encender lector QR';

                    // Restablecer el tamaño del div al 100% del área
                    divVideo.style.width = '100%';
                    divVideo.style.height = '100%';

                    // Ocultar el video
                    document.getElementById('preview').classList.add('d-none');
                }


            }
        </script>

</body>

</html>