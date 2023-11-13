<div class="modal fade" id="editarmodalAdmin" tabindex="-1" aria-labelledby="editarmodalAdminLabel" aria-hidden="true">
 
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h1 class="modal-title fs-5 text-white" id="editarmodalAdminLabel">Editar usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="run" class="form-label">Run:</label>
                        <input type="text" name="run" id="run" class="form-control" >
                    </div>

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" >
                    </div>

                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido:</label>
                        <input type="text" name="apellido" id="apellido" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo:</label>
                        <input type="text" name="correo" id="correo" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="tipo_usuario" class="form-label">Tipo de usuario:</label>
                        <div class="input-group ">
                            <select class="form-select " id="tipo_usuario" name="tipo_usuario">
                            <option selected>Seleccione su tipo usuario</option>
                                <?php while ($row_usuarios = $tipo_usuario->fetch_assoc()) { ?>
                                    <option value="<?= $row_usuarios["nombre"]?>"><?= $row_usuarios["nombre"]?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono:</label>
                        <input type="text" name="telefono" id="telefono" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="salud" class="form-label">Estado salud::</label>
                        <div class="input-group ">
                            <select class="form-select " id="salud" name="salud">
                                <option selected>Seleccione su estdao de salud</option>
                                <option value="Sano">Sano</option>
                                <option value="Sospecha">Sospecha</option>
                                <option value="Positivo">Positivo</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto:</label>
                        <input type="text" name="foto" id="foto" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="contraseña" class="form-label">Contraseña:</label>
                        <input type="text" name="contraseña" id="contraseña" class="form-control">
                    </div>

                    <input type="hidden" id="id_usuario" class="form-control" >

                    <div class="modal-footer">
                        
                        <a href="#" id="save-usuario" class="btn btn-primary" data-dismiss="modal">Guardar modificación</a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>