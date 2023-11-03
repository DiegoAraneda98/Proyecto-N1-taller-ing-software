<?php
$conexion = mysqli_connect("localhost", "root", "", "safedrive");

$consulta = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexion, $consulta);

if ($row = mysqli_fetch_array($resultado)) {
    $id = $row["id_usuario"];
    $nombre = $row["nombre"];
    $apellido = $row["apellido"];
    $correo = $row["correo"];
    $telefono = $row["telefono"];
    $contraseña = $row["contraseña"];
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi Perfil</title>
    <link rel="icon" type="image/jpg"
        href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAhFBMVEX+/v7w8PDjy83dn6PakJXYJjHYIi3dmJzk1tfaKzXn3Nzftbfiu73gUVreQkvcOUPjY2rcO0TiW2PkaHD99fbfSlPxsrXqi5H77O354+T4293lb3bwq7DslZrrkJXuo6f1yMvoe4H31tjzwMPbMTv2ztDpg4nneH7i4uLc3NzRz8/Lt7lL0WTHAAAA4UlEQVR4Ae2ShYGEMAAE94T9RyK4u0P/9b27FnA3EJ94gMPx9CvHA3A4G/wV4+aAW5N/YFqw+SfOu3AVhDAphSKV1i5per4wSEM8JM9KJAPJT0IGn+TjFOjCFg3fhATeozBi4iPm3GHMkb4LDca2Q1whaf2Jfi4mpC...">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../css/style-perfil.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <div class="container-fluid fondo-perfil " >
        <div class="row bg-light" >
            <div class="col-12">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <img src="main-logo.svg" class="img-fluid logo" alt="logo">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Mis vehiculos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Perfil</a>
                                </li>
                                <li class="nav-item ml">
                                    <a class="nav-link active" aria-current="page" href="#">Cerrar sesión</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row bg-light m-3 border altura"   >
        <div class="h2 mi_perfil">Mi perfil</div>

            <div class="col-12 col-md-4 d-flex justify-content-center flex-wrap " >

                <div class="card text-center rounded-0 bg-body-secondary" style="width: 100%;  height: 50%;">
                    <div class="d-flex justify-content-center mt-4 flex-wrap">
                        <div class="rounded-circle bg-white h-70">
                            <img src="img/perfil_defualt.png" class="img-fluid imagen-perfil m-5">
                        </div>
                    </div>
                    <button type="button" class="btn btn-outline-danger text-white rojo">SUBIR IMAGEN <i
                            class="bi bi-upload text-end"></i></button>
                </div>

                <div class="card rounded-0" style="width: 100%; height: 50%;">
                    <div class="card-body">
                        <div class="table-responsive shadow overflow-y-auto" style="max-height: 310px;">
                            <table class="table table-hover text-center">
                                <!--  php require __DIR__ . '/../auth/actions/controlador_login.php';  -->
                                <thead>
                                    <tr>
                                        <th scope="col">Rut</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <?php
                                require __DIR__ . '/../../modelo/conexion.php';

                                /* $id_usuario = $_SESSION['id_usuario']; */
                                $sql = "SELECT * FROM invitados ";
                                $resultado = mysqli_query($conexion, "$sql");

                                while ($row = mysqli_fetch_assoc($resultado)) {

                                    echo "<tr id='{$row["id_invitado"]}'>";
                                    echo "<td data-target='run'>" . $row["run"] . "</td>";
                                    echo "<td data-target='nombre'>" . $row["nombre"] . "</td>";
                                    echo "<td>";
                                    /*  echo "<a href='#' class='btn btn-sm' data-role='update' data-id_vehiculo='" . $row['id_vehiculo'] . "'>";
                                         echo "<i class='bi bi-pencil-fill'></i>";
                                         echo "</a>"; */


                                    echo "<a href='index.php?p=perfil/actions/eliminarInvitado&id_enviado=" . $row["id_invitado"] . "'>";
                                    echo "<button class = 'btn btn-sm ' data-toggle='modal' data-target='#eliminar' ><i class='bi bi-trash-fill'></i></button>";
                                    echo "</a>";
                                    echo "</td>";

                                    echo "</tr>";
                                }
                                ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 d-flex justify-content-center ">
                <div class="card mb-5 rounded-0" style="width: 100%; height: 100%;">
                    <div class="card-body">
                        <form action="#" method="POST" id="<?php echo $id ?>">
                            <p class="h5 text-secondary pt-1">Informaciónasd personal</p>
                            <div class="p-mt-2">Nombre:
                                <div class="input-group mt-2">
                                    <input data-target="nombre" type="text" class="form-control rounded-0"
                                        aria-label="Username" aria-describedby="basic-addon1"
                                        value="<?php echo $nombre ?>" readonly>
                                </div>
                            </div>
                            <div class="p-mt-2">Apellido:
                                <div class="input-group mt-2">
                                    <input data-target="apellido" type="text" class="form-control rounded-0 mb-2"
                                        aria-label="Username" aria-describedby="basic-addon1"
                                        value="<?php echo $apellido ?>" readonly>
                                </div>
                            </div>
                            <p class="h5 text-secondary">Información de contacto</p>
                            <div class="p-mt-2">E-Mail:
                                <div class="input-group mt-2">
                                    <input data-target="correo" type="text" class="form-control rounded-0 mb-1"
                                        aria-label="Username" aria-describedby="basic-addon1"
                                        value="<?php echo $correo ?>" readonly>
                                </div>
                            </div>
                            <div class="p-mt-2">Teléfono:
                                <div class="input-group mt-2">
                                    <input data-target="telefono" type="text" class="form-control rounded-0 mb-3"
                                        aria-label="Username" aria-describedby="basic-addon1"
                                        value="<?php echo $telefono ?>" readonly>
                                </div>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-center align-items-center">
                                <a href="#"
                                    class="btn btn_editarDatos  text-black d-flex justify-content-center fw-semibold "
                                    data-bs-toggle="modal" data-role="update-datos" data-id="<?php echo $id ?>">Editar
                                    datos</a>
                                <a href="#" class="btn btn_editarDatos text-black fw-semibold " data-bs-toggle="modal"
                                    data-role="update-password" data-id="<?php echo $id ?>">Editar contraseña</a>
                            </div>

                        </form>
                        <?php include 'editarDatos.php'; ?>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 d-flex justify-content-center flex-wrap ">
                <div class="card rounded-0" style="width: 100%; height:20%;">
                    <div class="card-body">
                        <form action="#" method="POST" id="<?php echo $id ?>">

                            <p class="h5 text-secondary ">Contraseña actual</p>
                            <div class="input-group mt-3">

                                <input data-target="contraseña" id="input" type="password"
                                    class="form-control rounded-0" value="<?php echo $contraseña; ?>"
                                    aria-label="Recipient's username" aria-describedby="button-addon2" readonly>
                                <button class="btn btn-secondary" type="button" id="eye"><i
                                        class="bi bi-eye"></i></button>
                            </div>


                        </form>
                    </div>
                </div>

                <div class="card mb-5 rounded-0" style="width: 100%; height: 80%">
                    <div class="card-body">
                        <form action="index.php?p=perfil/actions/añadirInvitado" method="POST">

                            <div class="input-group mt-3">
                                <input id="nombreInvitado" name="nombreInvitado" type="text"
                                    class="form-control rounded-0" aria-label="Username" aria-describedby="basic-addon1"
                                    placeholder="Nombre Invitado">
                            </div>
                            <div class="input-group mt-4">
                                <input id="rutInvitado" name="rutInvitado" type="text" class="form-control rounded-0"
                                    aria-label="Username" aria-describedby="basic-addon1" placeholder="RUT">
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <button name="añadir"
                                    class="btn btn-danger text-white d-flex justify-content-center rojo w-50"
                                    type="submit">AÑADIR INVITADO</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'editarDatos.php';
        include 'editarContrasena.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script type="text/javascript">
    $(document).ready(function() {

        var height = $(window).height();

        $('#div2').height(height/2);
    });
    </script>

    <script src="editar_Datos.js"></script>
    <script src="editar_Contraseña.js"></script>
    <script src="mostrarContraseña.js"></script>
    </div>
</body>

</html>