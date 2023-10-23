<div class="modal fade" id="editarmodal" tabindex="-1" aria-labelledby="editarmodalLabel" aria-hidden="true">
 

    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editarmodalLabel">Editar vehiculo</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="controlador/editar.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="patente" class="form-label">Patente:</label>
                        <input type="text" name="patente" id="patente" class="form-control" value=<?php echo $patente ?>>
                    </div>

                    <div class="mb-3">
                        <label for="modelo" class="form-label">Modelo:</label>
                        <input type="text" name="modelo" id="modelo " class="form-control" value=<?php echo $modelo ?>>
                    </div>

                    <div class="mb-3">
                        <label for="color" class="form-label">Color:</label>
                        <input type="text" name="color" id="color " class="form-control" value=<?php echo $color ?>>
                    </div>

                    <div class="mb-3">
                        <label for="tipo_vehiculo" class="form-label">Tipo de vehiculo:</label>
                        <div class="input-group ">
                            <select class="form-select " name="tipo_vehiculo">
                                <option selected>Seleccione su tipo vehiculo</option>
                                <option value="Auto">Auto</option>
                                <option value="Motocicleta">Motocicleta</option>
                                <option value="Furgon">Furgon</option>
                                <option value="Bus">Bus</option>
                                <option value="Camion">Camion</option>

                            </select>
                        </div>
                    </div>

                    <div class="">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>