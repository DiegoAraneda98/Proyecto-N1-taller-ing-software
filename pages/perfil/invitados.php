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
            <div class="mt-3 text-start">Correo invitado:
                <div class="input-group mt-3 w-75">
                    <input name="correo_invitado" id="correo_invitado" type="email"
                        class="form-control rounded-0 mb-4" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>

            <div class="input-group mt-3 d-flex justify-content-end align-items-end w-75 ">

                <button name="añadir"
                    class="btn custom-btn  fw-semibold  mb-4 rounded-0"
                    type="submit">Añadir invitado</button>

            </div>

            <input type="hidden" id="idUsuario" name="idUsuario" class="form-control">


        </form>




    </div>
    <div class="col-4">
        <div class="table table-hover   table-striped text-center overflow-y-auto" style="max-height: 310px;">
            <table class="table table-hover text-center">
                <?php require __DIR__ . '/../auth/actions/controlador_login.php'; ?>
                <thead class="table-dark">
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

                                    echo "<a href='#' class='btn btn-sm' data-role='eliminar' data-id='" . $row['id_invitado'] . "'>";
                                    echo "<i class='bi bi-trash-fill'></i>";
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

