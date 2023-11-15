<div class="modal fade" id="nuevomodalguardia" tabindex="-1" aria-labelledby="nuevomodalguardiaLabel" aria-hidden="true">
<?php $sqlCasetas = "SELECT * FROM casetas";
    $casetas = $conexion->query($sqlCasetas); ?>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="nuevomodalguardiaLabel">Añadir nuevo tipo de usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="index.php?p=admin/actions/actions_guardia/admin_saveGuardia" method="post" enctype="multipart/form-data">
                    

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" name="nombre_guardia" id="nombre_guardia" class="form-control" onkeydown=filtroLetras() >
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