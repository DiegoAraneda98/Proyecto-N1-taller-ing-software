<div class="modal fade" id="nuevomodaltipoUsuario" tabindex="-1" aria-labelledby="nuevomodaltipoUsuarioLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="nuevomodaltipoUsuarioLabel">Añadir nuevo tipo de usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="pages/admin/actions_tipo_usuario/admin_savetipoUsuario.php" method="post" enctype="multipart/form-data">
                    

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" onkeydown=filtroLetras() >
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