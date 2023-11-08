<!-- Modal -->
<div class="modal fade" id="eliminarmodal" tabindex="-1" aria-labelledby="eliminarmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title fs-5" id="eliminarmodalLabel">Aviso !!</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <h5 class="text-center">¿Desea eliminar el registro?</h5>
            </div>

            <div class="modal-footer">

                <input type="hidden" name="id" id="id">

                <form action="eliminar.php" method="post">

                    <div class="modal-footer ">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button id="delete" type="button" class="btn btn-danger">Eliminar</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>