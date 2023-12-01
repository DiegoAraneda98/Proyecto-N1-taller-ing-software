<div class="modal fade" id="nuevomodalAdmin" tabindex="-1" aria-labelledby="nuevomodalAdminLabel" aria-hidden="true">
    <?php $sqlUsuario = "SELECT * FROM tipo_usuario";
    $tipo_usuario = $conexion->query($sqlUsuario);
    ?>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="nuevomodalAdminLabel">Añadir usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="index.php?p=/admin/actions/actions_Usuarios/admin_saveUsuarios" method="post"
                    enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="run" class="form-label">Run:</label>
                        <input type="text" name="run" id="run" class="form-control" onkeydown=filtro() minlength="8"
                            maxlength="8" >
                    </div>

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" onkeydown=filtroLetras()>
                    </div>

                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido:</label>
                        <input type="text" name="apellido" id="apellido" class="form-control" onkeydown=filtroLetras()>
                    </div>

                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo:</label>
                        <input type="text" name="correo" id="correo" class="form-control"  onblur=validarEmailConDominioUCSC()>
                    </div>

                    <div class="mb-3">
                        <label for="tipo_usuario" class="form-label">Tipo de usuario:</label>
                        <div class="input-group ">
                            <select class="form-select " id="tipo_usuario" name="tipo_usuario">
                                <option disabled selected>Seleccione su tipo usuario</option>
                                <?php while ($row_usuarios = $tipo_usuario->fetch_assoc()) { ?>
                                    <option value="<?= $row_usuarios["nombre"] ?>">
                                        <?= $row_usuarios["nombre"] ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono:</label>
                        <input type="text" name="telefono" id="telefono" class="form-control" onkeydown=filtro() minlength="9"
                            maxlength="9">
                    </div>

                    <div class="mb-3">
                        <label for="salud" class="form-label">Estado salud:</label>
                        <div class="input-group ">
                            <select class="form-select " id="salud" name="salud">
                                <option disabled selected>Seleccione su estado de salud</option>
                                <option value="Sano">Sano</option>
                                <option value="Sospecha">Sospecha</option>
                                <option value="Positivo">Positivo</option>
                            </select>
                        </div>
                    </div>

                

                    <div class="mb-3">
                        <label for="contraseña" class="form-label">Contraseña:</label>
                        <input type="text" name="contraseña" id="contraseña" class="form-control">
                    </div>

                    <div class="d-flex justify-content-end ">
                        <button type="submit" class="btn text-white boton1 rojo">Guardar</button>
                        <button type="button" class="btn  text-white boton2 rojo"
                            data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>