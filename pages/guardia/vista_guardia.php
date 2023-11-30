<div class="container-fluid">


    <div>
        <div class="row">
            <div class="col-12">
                <div class="col-10 offset-1 mt-5 d-flex justify-content-between h-75">
                    <div class="col-md-4">
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

                                #chartContainer {
                                    margin-top: 10px;
                                }
                            </style>

                            <video id="preview" width="100%" style="border-radius:10px;" class="d-none"></video>
                            <br>
                            <br>
                        </div>


                        <div class="" style="padding: 10px; background: #fff; border-radius: 5px; margin-top: 10px; position:relative; z-index:0;text-align: center;">
                            <h4 style="margin-bottom: 0;">Hora Peek</h4>
                            <form id="filtroHorasForm">
                                <label for="horaInicio">Hora de inicio:</label>
                                <input type="time" id="horaInicio" name="horaInicio" required>
                                <label for="horaFin">Hora de fin:</label>
                                <input type="time" id="horaFin" name="horaFin" required>
                                <input class="custom-btn" style="border-radius: .25rem;" type="submit" value="Filtrar">
                            </form>
                            <div id="chartContainer" style="background: #fff; border-radius: 5px; padding: 10px;">
                                <canvas id="horaPicoChart" width="400" height="300"></canvas>
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

                                    $sql1 = "SELECT hora_ingreso, COUNT(*) as cantidad FROM historial GROUP BY hora_ingreso";
                                    $result = $conexion->query($sql1);

                                    $horas = [];
                                    $cantidades = [];

                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            $horas[] = $row['hora_ingreso'];
                                            $cantidades[] = (int)$row['cantidad'];
                                        }
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


    <!-- Gráfico historial  -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('horaPicoChart').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($horas); ?>,
                    datasets: [{
                        label: 'Hora vs Cantidad',
                        data: <?php echo json_encode($cantidades); ?>,
                        backgroundColor: '#d6092c',
                        borderColor: '#d6092c',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    indexAxis: 'y',
                    scales: {
                        x: {
                            title: {
                                display: true,
                                text: 'Hora'
                            }
                        },
                        y: {
                            title: {
                                display: true,
                                text: 'Cantidad'
                            }
                        }
                    }
                }
            });
        });
    </script>

    <!-- filtrar gráfico -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const ctx = document.getElementById('horaPicoChart').getContext('2d');
            let myChart;

            function actualizarGrafico(data) {
                if (myChart) {
                    myChart.destroy();
                }

                myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: data.horas,
                        datasets: [{
                            label: 'Cantidad',
                            data: data.cantidades,
                            backgroundColor: '#d6092c',
                            borderColor: '#d6092c',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        indexAxis: 'y',
                        scales: {
                            x: {
                                title: {
                                    display: true,
                                    text: 'Hora'
                                }
                            },
                            y: {
                                title: {
                                    display: true,
                                    text: 'Cantidad'
                                }
                            }
                        }
                    }
                });
            }

            document.getElementById('filtroHorasForm').addEventListener('submit', function(event) {
                event.preventDefault();

                // Obtener valores del formulario
                const horaInicio = document.getElementById('horaInicio').value;
                const horaFin = document.getElementById('horaFin').value;

                fetch('actions/filtrar_grafico.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({
                            horaInicio: horaInicio,
                            horaFin: horaFin
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        // Actualizar el gráfico con los datos recibidos
                        actualizarGrafico(data);
                    })
                    .catch(error => {});
            });
        });
    </script>


    <script src="js/data_table.js"></script>