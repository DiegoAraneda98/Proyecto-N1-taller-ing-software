<div class="modal fade" id="editarmodalVehiculos" tabindex="-1" aria-labelledby="editarmodalVehiculosLabel" aria-hidden="true">
<?php $sqlVehiculo = "SELECT * FROM tipo_vehiculo";
    $tipo_vehiculo = $conexion->query($sqlVehiculo);
    
    $sqlVehiculo = "SELECT * FROM tipo_vehiculo";
    $tipo_vehiculo = $conexion->query($sqlVehiculo); 
    
    $sqlcolores = "SELECT * FROM color";
    $colores = $conexion->query($sqlcolores); 

    $sqlmodelo = "SELECT * FROM modelo";
    $modelo = $conexion->query($sqlmodelo);
    ?>
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
                        <input type="text" name="patente" id="patente" class="form-control" pattern= "[A-Za-z]{4}[0-9]{2}" >
                    </div>

                    <div class="mb-3">
                        <label for="modelo" class="form-label">Modelo:</label>
                        <div class="input-group">
                            <select class="form-select" name="modelo" id="modelo">
                                <option disabled selected>Seleccione el modelo</option>
                                <?php while ($row_modelo = $modelo->fetch_assoc()) { ?>
                                    <option value="<?= $row_modelo["modelo"] ?>"> <?= $row_modelo["modelo"]; ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="color" class="form-label">Color:</label>
                        <div class="input-group">
                            <select class="form-select" name="color" id="color">
                                <option disabled selected>Seleccione el color</option>
                                <?php while ($row_color = $colores->fetch_assoc()) { ?>
                                    <option value="<?= $row_color["color"] ?>"> <?= $row_color["color"]; ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="tipo_vehiculo" class="form-label">Tipo de vehículo :</label>
                        <div class="input-group ">
                            <select class="form-select " id="tipo_vehiculo" name="tipo_vehiculo">
                            <option disabled selected>Seleccione su tipo de vehículo </option>
                                <?php while ($row_vehiculos = $tipo_vehiculo->fetch_assoc()) { ?>
                                    <option value="<?= $row_vehiculos["nombre"] ?>"> <?= $row_vehiculos["nombre"]; ?> </option>
                                <?php } ?>

                            </select>
                        </div>
                    </div>
                    <input type="hidden" id="id_vehiculo" class="form-control" >

                    <div class="modal-footer">
                        
                        <a href="#" id="save-vehiculos" class="btn rojo text-white" data-dismiss="modal">Guardar modificación</a>
                        <button type="button" class="btn rojo text-white" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>