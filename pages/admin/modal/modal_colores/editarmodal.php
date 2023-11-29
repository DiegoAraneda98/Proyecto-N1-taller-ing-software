<div class="modal fade" id="editarmodalcolor" tabindex="-1" aria-labelledby="editarmodalcolorLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h1 class="modal-title fs-5 text-white" id="editarmodalcolorLabel">Editar color</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="color" class="form-label">Color:</label>
                        <input type="text" name="color" id="color"
                            class="form-control">
                    </div>

                    <input type="hidden" id="id_color" name="id_color" class="form-control">

                    <div class="modal-footer">

                        <a href="#" id="save_color" class="btn text-white rojo" data-dismiss="modal">Guardar modificación</a>
                        <button type="button" class="btn text-white rojo" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>