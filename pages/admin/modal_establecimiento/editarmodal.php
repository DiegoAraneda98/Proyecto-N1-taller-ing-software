<div class="modal fade" id="editarmodalestablecimiento" tabindex="-1" aria-labelledby="editarmodalestablecimientoLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h1 class="modal-title fs-5 text-white" id="editarmodalestablecimientoLabel">Editar tipo usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="nombre_establecimiento" class="form-label">Nombre establecimiento:</label>
                        <input type="text" name="nombre_establecimiento" id="nombre_establecimiento"
                            class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección:</label>
                        <input type="text" name="direccion" id="direccion" class="form-control">
                    </div>




                    <input type="hidden" id="id_tipo" name="id_tipo" class="form-control">

                    <div class="modal-footer">

                        <a href="#" id="save_tipo" class="btn text-white rojo" data-dismiss="modal">Guardar modificación</a>
                        <button type="button" class="btn text-white rojo" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>