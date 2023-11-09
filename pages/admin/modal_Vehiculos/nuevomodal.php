<div class="modal fade" id="nuevomodalVehiculos" tabindex="-1" aria-labelledby="nuevomodalVehiculosLabel"
    aria-hidden="true">
    <?php $sqlVehiculo = "SELECT * FROM tipo_vehiculo";
    $tipo_vehiculo = $conexion->query($sqlVehiculo); ?>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="nuevomodalVehiculosLabel">Añadir vehículo</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="index.php?p=/admin/actions_Vehiculos/admin_saveVehiculos" method="post"
                    enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="patente" class="form-label">Patente:</label>
                        <input type="text" name="patente" id="patente" class="form-control" minlength="5" maxlength="6"  pattern="[A-Za-z]{4}+[0-9]{2}">  
                    </div>

                    <div class="mb-3">
                        <label for="modelo" class="form-label">Modelo:</label>
                        <input type="text" name="modelo" id="modelo" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="color" class="form-label">Color:</label>
                        <input type="text" name="color" id="color" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="tipo_vehiculo" class="form-label">Tipo de vehículo:</label>
                        <div class="input-group ">
                            <select class="form-select " id="tipo_vehiculo" name="tipo_vehiculo">
                                <option disabled selected>Seleccione su tipo vehículo</option>
                                <?php while ($row_vehiculos = $tipo_vehiculo->fetch_assoc()) { ?>
                                    <option value="<?= $row_vehiculos["nombre"] ?>">
                                        <?= $row_vehiculos["nombre"]; ?>
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
