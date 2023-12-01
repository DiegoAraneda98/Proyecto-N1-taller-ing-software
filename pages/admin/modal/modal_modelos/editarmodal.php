<div class="modal fade" id="editarmodalmodelo" tabindex="-1" aria-labelledby="editarmodalmodeloLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h1 class="modal-title fs-5 text-white" id="editarmodalmodeloLabel">Editar color</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="modelo" class="form-label">Modelo:</label>
                        <input type="text" name="modelo" id="modelo"
                            class="form-control">
                    </div>

                    <input type="hidden" id="id_modelo" name="id_modelo" class="form-control">

                    <div class="modal-footer">

                        <a href="#" id="save_modelo" class="btn text-white rojo" data-dismiss="modal">Guardar modificación</a>
                        <button type="button" class="btn text-white rojo" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>