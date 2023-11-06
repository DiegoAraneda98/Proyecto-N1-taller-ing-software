<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vista Guardia</title>

    <link rel="stylesheet" href="css/login_register.css">
    <link rel="stylesheet" href="css/style_inicio.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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
                                }
                            </style>

                            <style>
                                #preview {
                                    width: 500px;
                                    height: 500px;
                                    margin: 0px auto;
                                }
                            </style>
                            <center>
                                <p class="login-box-msg"> <i class="glyphicon glyphicon-camera"></i> ¡Lector QR!</p>
                            </center>
                            <video id="preview" width="100%" style="border-radius:10px;"></video>
                            <br>
                            <br>
                            <?php
                            if (isset($_SESSION['error'])) {
                                echo "
						<div class='alert alert-danger alert-dismissible' style='background:red;color:#fff'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						  <h4><i class='icon fa fa-warning'></i> Error!</h4>
						  " . $_SESSION['error'] . "
						</div>
					  ";
                                unset($_SESSION['error']);
                            }
                            if (isset($_SESSION['success'])) {
                                echo "
						<div class='alert alert-success alert-dismissible' style='background:green;color:#fff'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						  <h4><i class='icon fa fa-check'></i> Success!</h4>
						  " . $_SESSION['success'] . "
						</div>
					  ";
                                unset($_SESSION['success']);
                            }
                            ?>

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
                                                    <?php echo $row('hora_ingreso'); ?>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <tr>
                                    <div class="table-button">
                                        <button type="button" class="btn btn-danger">Exportar tabla</button>
                                    </div>
                                </tr>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cámara/Scanner -->
        <script>
            var scanner = new Instascan.Scanner({
                video: document.getElementById('preview'),
                scanPeriod: 5,
                mirror: false
            });
            Instascan.Camera.getCameras().then(function(cameras) {
                if (cameras.length > 0) {
                    scanner.start(cameras[0]);
                } else {
                    console.error('No se han encontrado cámaras.')
                    alert('No camaras encontradas.');
                }
            }).catch(function(e) {
                alert(e);
            });

            scanner.addListener('scan', function(c) {
                document.getElementById('text').value = c;
                document.forms[0].submit();
            });
        </script>

        <!-- Exportar tablas -->
        <script>
            function Export() {
                var conf = confirm("Please confirm if you wish to proceed in exporting the attendance in to Excel File");
                if (conf == true) {
                    window.open("export.php", '_blank');
                }
            }
        </script>

        <!-- Exportar tablas -->
        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "autoWidth": false,
                });
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>




</body>

</html>