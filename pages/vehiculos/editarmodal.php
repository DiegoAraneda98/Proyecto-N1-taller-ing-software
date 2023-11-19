<?php $sqlVehiculo = "SELECT * FROM tipo_vehiculo";
 $tipo_vehiculo = $conexion->query($sqlVehiculo); 
 
 $sqlcolores = "SELECT * FROM color";
 $colores = $conexion->query($sqlcolores); 
 ?>

<div class="modal fade" id="editarmodal" tabindex="-1" aria-labelledby="editarmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h1 class="modal-title fs-5 text-white" id="editarmodalLabel">Editar vehículo</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="post" enctype="multipart/form-data">

                    
                    <div class="mb-3">
                        <label for="patente" class="form-label">Patente:</label>
                        <input type="text" name="patente" id="patente" class="form-control" pattern="[A-Za-z]{4}[0-9]{2}">
                    </div>

                    <div class="mb-3">
                        <label for="modelo" class="form-label">Modelo:</label>
                        <input type="text" name="modelo" id="modelo" class="form-control" >
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
                        <label for="tipo_vehiculo" class="form-label">Tipo de vehículo:</label>
                        <div class="input-group ">
                            <select class="form-select " id="tipo_vehiculo" name="tipo_vehiculo">
                                <option disabled selected>Seleccione su tipo vehículo</option>
                                <?php while ($row_vehiculos = $tipo_vehiculo->fetch_assoc()) { ?>
                                    <option value="<?= $row_vehiculos["nombre"] ?>"> <?= $row_vehiculos["nombre"]; ?>
                                 </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" id="id_vehiculo" class="form-control" >

                    <div class="modal-footer">
                        
                        <a href="#" id="save" class="btn rojo text-white" data-dismiss="modal">Guardar modificación</a>
                        <button type="button" class="btn rojo text-white" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>