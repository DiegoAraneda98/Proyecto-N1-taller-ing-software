<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="css/login_register.css">
    <link rel="stylesheet" href="css/style_inicio.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid fondo-vehiculos">
        <div class="row bg-light"> <!-- nav bar -->
            <div class="col-12 ">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <img src="img/main-logo.svg" class="img-fluid logo" alt="logo">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                            <ul class="navbar-nav  ms-auto mb-2 mb-lg-0 ">
                                <li class="nav-item ">
                                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Mis vehiculos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Perfil</a>
                                </li>
                                <li class="nav-item ml">
                                    <a class="nav-link active" aria-current="page"
                                        href="controlador/controlador_logout.php">Cerrar sesión</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-10 bg-white offset-1 mt-5">
                    <div class="h2 p-3 text-secondary ">Mis vehiculos</div>
                    <div class="table-responsive shadow  overflow-y-auto " style="max-height: 400px;">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Patente</th>
                                    <th scope="col">Modelo</th>
                                    <th scope="col">Color</th>
                                    <th scope="col">Tipo de vehiculo</th>
                                    <th scope="col">Fecha Ingreso</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php
                                require_once("modelo/conexion.php");
                                require 'controlador/controlador_login.php';
                                $id_usuario = $_SESSION['id_usuario'];
                                $sql = "SELECT * FROM vehiculos WHERE id_usuario = $id_usuario";
                                $resultado = mysqli_query($conexion, "$sql");

                                while ($row = mysqli_fetch_assoc($resultado)) {

                                    echo "<tr id='{$row["id_vehiculo"]}'>";
                                    echo "<td data-target='patente'>" . $row["patente"] . "</td>";
                                    echo "<td data-target='modelo'>" . $row["modelo"] . "</td>";
                                    echo "<td data-target='color'>" . $row["color"] . "</td>";
                                    echo "<td data-target='tipo_vehiculo'>" . $row["tipo_vehiculo"] . "</td>";
                                    echo "<td>" . $row["fecha_ingreso"] . "</td>";

                                    echo "<td>";
                                    echo "<a href='#' class='btn btn-sm' data-role='update' data-id_vehiculo='" . $row['id_vehiculo'] . "'>";
                                    echo "<i class='bi bi-pencil-fill'></i>";
                                    echo "</a>";


                                    echo "<a href='controlador/eliminar.php?id_enviado=" . $row["id_vehiculo"] . "'>";
                                    echo "<button class = 'btn btn-sm ' data-toggle='modal' data-target='#eliminar' ><i class='bi bi-trash-fill'></i></button>";
                                    echo "</a>";
                                    echo "</td>";

                                    echo "</tr>";

                                }
                                ?>

                            </tbody>
                        </table>

                    </div>
                    <?php include 'controlador/editarmodal.php'; ?>

                    <div class="d-flex justify-content-end mt-5">
                        <button type="submit" class="btn rojo text-white fw-semibold  mb-4 añadir_vehiculo"
                            name="añadir" data-bs-toggle="modal" data-bs-target="#nuevomodal">Añadir vehiculo</button>

                    </div>

                </div>

            </div>
        </div>

    </div>

    <?php include 'controlador/nuevomodal.php'; ?>



    <script>

        $(document).ready(function () {
            $(document).on('click', 'a[data-role=update]', function () {
                var id = $(this).data('id_vehiculo');
                var patente = $('#' + id).children('td[data-target=patente]').text();
                var modelo = $('#' + id).children('td[data-target=modelo]').text();
                var color = $('#' + id).children('td[data-target=color]').text();
                var tipo_vehiculo = $('#' + id).children('td[data-target=tipo_vehiculo]').text();

               /*  console.log("ID: " + id);
                console.log("Patente: " + patente);
                console.log("Modelo: " + modelo);
                console.log("Color: " + color);
                console.log("Tipo de Vehículo: " + tipo_vehiculo); */

                $('#patente').val(patente);
                $('#modelo').val(modelo);
                $('#color').val(color);
                $('#tipo_vehiculo').val(tipo_vehiculo);
                $('#id_vehiculo').val(id);
                $('#editarmodal').modal('toggle');

            })
        })


        $('#save').click(function () {
            var id = $('#id_vehiculo').val();
            var patente = $('#patente').val();
            var modelo = $('#modelo').val();
            var color = $('#color').val();
            var tipo_vehiculo = $('#tipo_vehiculo').val();

            $.ajax({
                url: 'controlador/actualizar.php',
                method: 'post',
                data: { patente: patente, modelo: modelo, color: color, tipo_vehiculo: tipo_vehiculo, id: id },
                success: function (response) {
                    $('#' + id).children('td[data-target=patente]').text(patente);
                    $('#' + id).children('td[data-target=modelo]').text(modelo);
                    $('#' + id).children('td[data-target=color]').text(color);
                    $('#' + id).children('td[data-target=tipo_vehiculo]').text(tipo_vehiculo);
                    $('#editarmodal').modal('toggle');

                    
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>