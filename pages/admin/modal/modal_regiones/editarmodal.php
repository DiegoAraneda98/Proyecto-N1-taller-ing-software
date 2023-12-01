<div class="modal fade" id="editarmodalRegiones" tabindex="-1" aria-labelledby="editarmodalRegionesLabel" aria-hidden="true">
 
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h1 class="modal-title fs-5 text-white" id="editarmodalRegionesLabel">Editar tipo usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="post" enctype="multipart/form-data">


                    <div class="mb-3">
                        <label for="region" class="form-label">Región:</label>
                        <input type="text" name="region" id="region" class="form-control" onkeydown=filtroLetras() >
                    </div>

                    <div class="mb-3">
                        <label for="abreviatura" class="form-label">Abreviatura:</label>
                        <input type="text" name="abreviatura" id="abreviatura" class="form-control" onkeydown=filtroLetras() >
                    </div>

                    <div class="mb-3">
                        <label for="capital" class="form-label">Capital:</label>
                        <input type="text" name="capital" id="capital" class="form-control" onkeydown=filtroLetras() >
                    </div>



                    <input type="hidden" id="id_region" name="id_region" class="form-control" >

                    <div class="modal-footer">
                        
                        <a href="#" id="save_region" class="btn text-white  rojo" data-dismiss="modal">Guardar modificación</a>
                        <button type="button" class="btn text-white  rojo" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

