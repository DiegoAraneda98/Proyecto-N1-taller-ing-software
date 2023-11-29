<div class="modal fade" id="editarmodalComunas" tabindex="-1" aria-labelledby="editarmodalComunasLabel" aria-hidden="true">
 
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h1 class="modal-title fs-5 text-white" id="editarmodalComunasLabel">Editar tipo usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="post" enctype="multipart/form-data">


                    <div class="mb-3">
                        <label for="comuna" class="form-label">Comuna:</label>
                        <input type="text" name="comuna" id="comuna" class="form-control" onkeydown=filtroLetras() >
                    </div>


                    <input type="hidden" id="id_comuna" name="id_comuna" class="form-control" >

                    <div class="modal-footer">
                        
                        <a href="#" id="save_comuna" class="btn text-white  rojo" data-dismiss="modal">Guardar modificación</a>
                        <button type="button" class="btn text-white  rojo" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

