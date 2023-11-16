<div class="modal fade" id="nuevomodalestablecimiento" tabindex="-1" aria-labelledby="nuevomodalestablecimientoLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="nuevomodalestablecimientoLabel">Añadir nuevo establecimiento</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="pages/admin/actions/actions_establecimiento/admin_save_establecimiento.php" method="post" enctype="multipart/form-data">
                    

                    <div class="mb-3">
                        <label for="nombre_establecimiento" class="form-label">Nombre establecimiento:</label>
                        <input type="text" name="nombre_establecimiento" id="nombre_establecimiento" class="form-control" >
                    </div>

                    <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección:</label>
                        <input type="text" name="direccion" id="direccion" class="form-control" >
                    </div>

                    <div class="mb-3">
                        <label for="cod_comuna" class="form-label">Código comuna:</label>
                        <input type="text" name="cod_comuna" id="cod_comuna" class="form-control"  onkeydown=filtro()>
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