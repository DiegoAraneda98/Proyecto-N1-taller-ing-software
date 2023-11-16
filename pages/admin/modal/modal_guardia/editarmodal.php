<div class="modal fade" id="editarmodalGuardia" tabindex="-1" aria-labelledby="editarmodalGuardiaLabel" aria-hidden="true">
<?php $sqlCasetas = "SELECT * FROM casetas";
    $casetas = $conexion->query($sqlCasetas); ?>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h1 class="modal-title fs-5 text-white" id="editarmodalGuardiaLabel">Editar tipo usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="post" enctype="multipart/form-data">


                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control"  >
                    </div>

  
                    <div class="mb-3">
                        <label for="caseta" class="form-label">Casetas:</label>
                        <div class="input-group ">
                            <select class="form-select " id="caseta" name="caseta">
                                <option disabled selected>Seleccione la caseta</option>
                                <?php while ($row_casetas = $casetas->fetch_assoc()) { ?>
                                    <option value="<?= $row_casetas["id_caseta"] ?>">
                                        <?= $row_casetas["id_caseta"]; ?>
                                    </option>
                                <?php } ?>

                            </select>
                        </div>
                    </div>

                    <input type="hidden" id="id_tipo" name="id_tipo" class="form-control" >

                    <div class="modal-footer">
                        
                        <a href="#" id="save_tipo" class="btn text-white  rojo" data-dismiss="modal">Guardar modificación</a>
                        <button type="button" class="btn text-white  rojo" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

