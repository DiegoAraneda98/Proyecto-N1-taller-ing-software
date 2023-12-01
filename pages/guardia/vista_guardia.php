<div class="container-fluid">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <div>
        <div class="row">
            <div class="col-12">
                <div class="col-10 offset-1 mt-5 d-flex justify-content-between h-75">
                    <div class="col-md-4">
                        <div class="col-12 h-50" style="padding:10px;background:#fff;border-radius: 5px;" id="divvideo">
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

                                #chartContainer {
                                    margin-top: 10px;
                                }
                            </style>

                            <video id="preview" style="border-radius:10px;" class="d-none"></video>
                            <br>
                            <br>
                        </div>


                        <div class="" style="padding: 10px; background: #fff; border-radius: 5px; margin-top: 10px; position:relative; z-index:0;text-align: center;">
                            <h4 style="margin-bottom: 0;">Hora Peek</h4>
                            <div id="chartContainer" style="background: #fff; border-radius: 5px; padding: 10px;">
                                <canvas id="grafico_hora_peek" width="400" height="300"></canvas>
                            </div>
                        </div>
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

                                    $sql_1 = "SELECT DATE_FORMAT(hora_ingreso, '%H') AS hora, COUNT(*) AS cantidad_usuarios 
                                    FROM historial 
                                    GROUP BY DATE_FORMAT(hora_ingreso, '%H')";
                                    $query = $conexion->query($sql_1);

                                    $data = [];
                                    while ($row = $query->fetch_assoc()) {
                                        $data[$row['cantidad_usuarios']] = $row['hora'];
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
        // Obtener los datos PHP en JavaScript
        var data = <?php echo json_encode($data); ?>;

        // Preparar los datos para el gráfico
        var labels = Object.values(data);
        var valores = Object.keys(data).map(Number);

        // Configurar el gráfico
        var ctx = document.getElementById('grafico_hora_peek').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Cantidad de usuarios por hora',
                    data: valores,
                    backgroundColor: '#d6092c', 
                    borderColor: '#d6092c', 
                    borderWidth: 1
                }]
            },
            options: {
                indexAxis: 'y', 
                scales: {
                    x: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Cantidad de Usuarios'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Hora'
                        }
                    }
                }
            }
        });
    </script>

    <script>
        var scanner = null;

        function toggleCamera() {
            var divVideo = document.getElementById('divvideo');
            const resultadoElement = document.getElementById('dato_QR');

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

                    scanner.addListener('scan', function(contenidoQR) {
                        const datosSeparados = contenidoQR.split(' '); // separa los datos

                        // Verificar si se obtuvieron dos partes
                        if (datosSeparados.length === 2) {
                            const idUsuario = datosSeparados[0];
                            const patente = datosSeparados[1];
                            console.log(idUsuario);
                            console.log(patente);
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



        }
        // Ejecutar la función para iniciar la cámara al cargar la página
        document.addEventListener('DOMContentLoaded', toggleCamera);
    </script>


    <script src="js/data_table.js"></script>