<div class="row">
    <div class="col-8">
        <p class="h2 text-secondary text-start pt-1 mt-3">Invitados</p>
        <form action="index.php?p=perfil/actions/añadirInvitado" method="POST">

            <div class="mt-3 text-start">Rut invitado:
                <div class="input-group mt-3 w-75">
                    <input id="rutInvitado" name="rutInvitado" type="text" class="form-control rounded-0"
                        aria-label="Username" aria-describedby="basic-addon1" onkeydown=filtro()
                        minlength="8" maxlength="8" required>
                </div>
            </div>
            <div class="mt-3 text-start">Nombre invitado:
                <div class="input-group mt-3 w-75">
                    <input id="nombreInvitado" name="nombreInvitado" type="text" class="form-control rounded-0"
                        aria-label="Username" aria-describedby="basic-addon1" required>
                </div>
            </div>
            <div class="mt-3 text-start">Correo secundario:
                <div class="input-group mt-3 w-75">
                    <input name="repetirNuevaContraseña" id="repetirNuevaContrasena" type="text"
                        class="form-control rounded-0 mb-4" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>

            <div class="input-group mt-3 d-flex justify-content-end align-items-end w-75 ">

                <button name="añadir"
                    class="btn custom-btn border-secondary rounded-0 text-black bg-light fw-semibold mb-5"
                    type="submit">Añadir invitado</button>

            </div>

            <input type="hidden" id="idUsuario" name="idUsuario" class="form-control">


        </form>




    </div>
    <div class="col-4">
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