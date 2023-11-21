<div class="container-fluid">


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
                                height: 100%;
                                margin: 0px auto;
                                object-fit: cover;
                            }
                        </style>

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
                            <table id="miTabla" class="table table-bordered">
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
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var scanner = null;

        // Función para iniciar la cámara al cargar la página
        function iniciarCamara() {
            var divVideo = document.getElementById('divvideo');

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

                    scanner.addListener('scan', function(contenidoQR) {
                        const datosSeparados = contenidoQR.split(' '); // separa los datos

                        // Verificar si se obtuvieron dos partes
                        if (datosSeparados.length === 2) {
                            const idUsuario = datosSeparados[0];
                            const patente = datosSeparados[1];

                            $(document).ready(function() {
                                $.ajax({
                                    url: 'index.php?p=guardia/actions/insert_historial',
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
                                            window.location.href = 'index.php?p=guardia/vista_guardia';
                                        }, 3000);

                                    },
                                    error: function(error) {

                                    }
                                });
                            });

                        } else {
                            Swal.fire({
                                title: "ACCESO DENEGADO",
                                text: "Por favor validar sus datos. ",
                                icon: "error",
                                timer: 1500
                            });

                        }

                    });
                } else {
                    console.error('No se han encontrado cámaras.');
                    alert('No se encontraron cámaras.');
                }
            }).catch(function(e) {
                alert(e);
            });
        }

        // Ejecutar la función para iniciar la cámara al cargar la página
        document.addEventListener('DOMContentLoaded', iniciarCamara);
    </script>

    <script src="js/data_table.js"></script>