<?php
require __DIR__ . '/../../modelo/conexion.php';
require __DIR__ . '/../auth/actions/controlador_login.php';

$id_usuario = $_SESSION['id_usuario'];
$consulta = "SELECT * FROM usuarios WHERE id_usuario = '$id_usuario'";
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

<div class="container-fluid ">
    <div class="row bg-light m-3  ">
        <div class="h2 mi_perfil">Mi perfil</div>

        <div class="col-12 col-md-4 d-flex justify-content-center flex-wrap">

            <div class="card text-center rounded-0 bg-body-secondary" style="width: 100%;  height: 40%;">
                <div class="d-flex justify-content-center mt-4 flex-wrap">
                    <div class="rounded-circle bg-white h-70">
                        <img src="img/perfil_defualt.png" class="img-fluid imagen-perfil m-5">
                    </div>
                </div>
                <button type="button" class="btn btn-outline-danger text-white rojo">Subir imagen <i class="bi bi-upload text-end"></i></button>
            </div>

            <div class="card rounded-0 mt-4" style="width: 100%; height: 45%;">
                <div class="card-body">
                    <p class="h5 text-secondary">Mis invitados</p>
                    <div class="table-responsive shadow overflow-y-auto" style="max-height: 310px;">
                        <table class="table table-hover text-center">
                            <?php require __DIR__ . '/../auth/actions/controlador_login.php'; ?>
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


                                $id_usuario = $_SESSION['id_usuario'];
                                $sql = "SELECT * FROM invitados WHERE id_usuario = '$id_usuario' ";
                                $resultado = mysqli_query($conexion, "$sql");

                                while ($row = mysqli_fetch_assoc($resultado)) {

                                    echo "<tr id='{$row["id_invitado"]}'>";
                                    echo "<td data-target='run'>" . $row["run"] . "</td>";
                                    echo "<td data-target='nombre'>" . $row["nombre"] . "</td>";
                                    echo "<td>";

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
            <div class="card mb-5 rounded-0" style="width: 100%; height: 95%;">
                <div class="card-body">
                    <form action="#" method="POST">
                        <p class="h5 text-secondary pt-1">Información personal</p>
                        <div class="p-mt-2">Nombre:
                            <div class="input-group mt-2">
                                <input name="nombre" id="nombre" type="text" class="form-control rounded-0" aria-label="Username" aria-describedby="basic-addon1" onkeydown=filtroLetras() value="<?php echo $nombre ?>">
                            </div>
                        </div>
                        <div class="p-mt-2">Apellido:
                            <div class="input-group mt-2">
                                <input name="apellido" id="apellido" type="text" class="form-control rounded-0 mb-2" aria-label="Username" aria-describedby="basic-addon1" onkeydown=filtroLetras() value="<?php echo $apellido ?>">
                            </div>
                        </div>
                        <p class="h5 text-secondary">Información de contacto</p>
                        <div class="p-mt-2">E-Mail:
                            <div class="input-group mt-2">
                                <input name="correo" id="correo" type="text" class="form-control rounded-0 mb-1" aria-label="Username" aria-describedby="basic-addon1" onblur=validarEmailConDominioUCSC() value="<?php echo $correo ?>">
                            </div>
                        </div>
                        <div class="p-mt-2">Teléfono:
                            <div class="input-group mt-2">
                                <input name="telefono" id="telefono" type="text" minlength="9" maxlength="9" class="form-control rounded-0 mb-3" aria-label="Username" aria-describedby="basic-addon1" onkeydown=filtro() value="<?php echo $telefono ?>">
                            </div>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-center align-items-center">
                            <button class="btn btn_editarDatos border-secondary rounded-0 text-black d-flex justify-content-center fw-semibold bg-light" onclick="guardarDatos()" type="button">Guardar datos</button>
                            <a href="#" class="btn btn_editarDatos border-secondary rounded-0 text-black bg-light fw-semibold " data-bs-toggle="modal" data-role="update-password" data-id="<?php echo $id ?>">Editar contraseña</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4 d-flex justify-content-center flex-wrap ">
            <div class="card rounded-0" style="width: 100%; height:25%;">
                <div class="card-body">
                    <form action="#" method="POST" id="<?php echo $id ?>">

                        <p class="h5 text-secondary ">Contraseña actual</p>
                        <div class="input-group mt-3">

                            <input data-target="contraseña" id="input" type="password" class="form-control rounded-0" value="<?php echo $contraseña; ?>" aria-label="Recipient's username" aria-describedby="button-addon2" readonly>
                            <button class="btn btn-secondary" type="button" id="eye"><i class="bi bi-eye"></i></button>
                        </div>


                    </form>
                </div>
            </div>

            <div class="card rounded-0" style="width: 100%; height: 65%">
                <div class="card-body">
                    <form action="index.php?p=perfil/actions/añadirInvitado" method="POST">

                        <div class="input-group mt-3">
                            <input id="nombreInvitado" name="nombreInvitado" type="text" class="form-control rounded-0" aria-label="Username" aria-describedby="basic-addon1" placeholder="Nombre Invitado" required>
                        </div>
                        <div class="input-group mt-4">
                            <input id="rutInvitado" name="rutInvitado" type="text" class="form-control rounded-0" aria-label="Username" aria-describedby="basic-addon1" placeholder="RUT" onkeydown=filtro()  minlength="8" maxlength="8" required>
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <button name="añadir" class="btn btn_editarDatos border-secondary rounded-0 text-black bg-light fw-semibold d-flex justify-content-center w-50" type="submit" >Añadir invitado</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'editarContrasena.php'; ?>
<script src="js/editar_Contraseña.js"></script>
<script src="js/mostrarContraseña.js"></script>
<script src="js/verificaciones.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function guardarDatos() {
    // Obtén los valores de los campos del formulario
    var nombre = document.getElementById('nombre').value;
    var apellido = document.getElementById('apellido').value;
    var correo = document.getElementById('correo').value;
    var telefono = document.getElementById('telefono').value;

    // Crea un objeto con los datos a enviar al servidor
    var datos = {
        nombre: nombre,
        apellido: apellido,
        correo: correo,
        telefono: telefono
    };

    // Realiza una solicitud AJAX para guardar los datos en el servidor
    $.ajax({
        type: "POST",
        url: "pages/perfil/actions/actualizarPerfil.php",
        data: datos,
        dataType: "json", // Esperamos una respuesta JSON
        success: function (response) {
            if (response.success) {
                // Los datos se han guardado correctamente, muestra una alerta
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Los datos se han guardado correctamente",
                    showConfirmButton: false,
                    timer: 1500
                });

                // Redirige al usuario después de mostrar la alerta (opcional)
                setTimeout(function () {
                    window.location.href = "index.php?p=perfil/perfil";
                }, 1500);
            } else {
                // Hubo un problema al guardar los datos, muestra una alerta de error
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Hubo un problema al guardar los datos."
                });
            }
        },
        error: function (error) {
            // En caso de error en la solicitud AJAX, muestra una alerta de error
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "Hubo un problema al guardar los datos."
            });
        }
    });
}
</script>