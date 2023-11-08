<!-- Modal -->
<div class="modal fade" id="editarContrasena" tabindex="-1" aria-labelledby="editarContrasenaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editarContrasenaLabel">Editar contraseña</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="nuevaContrasena" class="form-label">Nueva contraseña:</label>
                        <div class="input-group mt-2">
                            <input id="nuevaContrasena" name="nuevaContrasena" type="password"
                                class="form-control rounded-0" aria-label="Nueva contraseña"
                                aria-describedby="button-addon2">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="repetirNuevaContrasena" class="form-label">Repetir nueva contraseña:</label>
                        <div class="input-group mt-2">
                            <input id="repetirNuevaContrasena" name="repetirNuevaContrasena" type="password"
                                class="form-control rounded-0" aria-label="Repetir nueva contraseña"
                                aria-describedby="button-addon2">
                        </div>
                    </div>

                    <input type="hidden" id="idUsuario" name="idUsuario" class="form-control">

                    <div class="d-flex justify-content-end">
                        <a href="" id="save-password" class="btn btn-danger rojo btn-1">Guardar</a>
                        <button type="button" class="btn btn-secondary btn-2" data-bs-dismiss="modal">Cerrar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>