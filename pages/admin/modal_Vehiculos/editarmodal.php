<div class="modal fade" id="editarmodalVehiculos" tabindex="-1" aria-labelledby="editarmodalVehiculosLabel" aria-hidden="true">
 
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h1 class="modal-title fs-5 text-white" id="editarmodalVehiculosLabel">Editar vehículo</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="post" enctype="multipart/form-data">

                <div class="mb-3">
                        <label for="patente" class="form-label">Patente:</label>
                        <input type="text" name="patente" id="patente" class="form-control" >
                    </div>

                    <div class="mb-3">
                        <label for="modelo" class="form-label">Modelo:</label>
                        <input type="text" name="modelo" id="modelo" class="form-control" >
                    </div>

                    <div class="mb-3">
                        <label for="color" class="form-label">Color:</label>
                        <input type="text" name="color" id="color" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="tipo_vehiculo" class="form-label">Tipo de vehículo :</label>
                        <div class="input-group ">
                            <select class="form-select " id="tipo_vehiculo" name="tipo_vehiculo">
                            <option selected>Seleccione su tipo de vehículo </option>
                                <?php while ($row_vehiculos = $tipo_vehiculo->fetch_assoc()) { ?>
                                    <option value="<?= $row_vehiculos["nombre"] ?>"> <?= $row_vehiculos["nombre"]; ?> </option>
                                <?php } ?>

                            </select>
                        </div>
                    </div>
                    <input type="hidden" id="id_vehiculo" class="form-control" >

                    <div class="modal-footer">
                        
                        <a href="#" id="save-vehiculos" class="btn btn-primary" data-dismiss="modal">Guardar modificación</a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>