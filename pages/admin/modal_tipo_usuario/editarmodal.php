<div class="modal fade" id="editarmodaltipoUsuario" tabindex="-1" aria-labelledby="editarmodaltipoUsuarioLabel" aria-hidden="true">
 
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h1 class="modal-title fs-5 text-white" id="editarmodaltipoUsuarioLabel">Editar tipo de usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="post" enctype="multipart/form-data">


                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" >
                    </div>


                    <input type="hidden" id="id_tipoUsuario" name="id_tipoUsuario" class="form-control" >

                    <div class="modal-footer">
                        
                        <a href="#" id="save-tipo-usuario" class="btn btn-primary" data-dismiss="modal">Guardar modificación</a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>