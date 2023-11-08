
<div class="container-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-10 bg-white offset-1 mt-5">
                    <div class="h2 p-3 text-secondary ">Tipo vehículo</div>
                    <div class="table-responsive shadow  overflow-y-auto " style="max-height: 400px;">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col">id_tipo</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php
                                require __DIR__ . '/../../modelo/conexion.php';
                                
                                
                                $sql = "SELECT * FROM tipo_vehiculo";
                                $resultado = mysqli_query($conexion, "$sql");

                                while ($row = mysqli_fetch_assoc($resultado)) {

                                    echo "<tr id='{$row["id_tipoVehiculo"]}'>";
                                    echo "<td data-target='id_tipoVehiculo'>" . $row["id_tipoVehiculo"] . "</td>";
                                    echo "<td data-target='nombre'>" . $row["nombre"] . "</td>";

                                    echo "<td>";
                                    echo "<a href='#' class='btn btn-sm' data-role='update_tipo' data-id_tipo='" . $row['id_tipoVehiculo'] . "'>";
                                    echo "<i class='bi bi-pencil-fill'></i>";
                                    echo "</a>";


                                    echo "<a href='index.php?p=admin/actions_tipo_vehiculo/admin_deletetipoVehiculo&id_enviado=" . $row["id_tipoVehiculo"] . "'>";
                                    echo "<button class = 'btn btn-sm ' data-toggle='modal' data-target='#eliminar' ><i class='bi bi-trash-fill'></i></button>";
                                    echo "</a>";
                                    echo "</td>";

                                    echo "</tr>";

                                }
                                ?>

                            </tbody>
                        </table>

                    </div>
                    <?php include 'modal_tipo_vehiculo/editarmodal.php'; ?>
                    <?php include 'modal_tipo_vehiculo/nuevomodal.php'; ?>
                    
                    <div class="d-flex justify-content-end mt-5">
                        <button type="submit" class="btn rojo text-white fw-semibold  mb-4 añadir_vehiculo" name="añadir" data-bs-toggle="modal" data-bs-target="#nuevomodaltipoVehiculo">Añadir tipo vehiculo</button>
                    </div>

                </div>

            </div>
        </div>
        
    </div> 
    <script src="js/admin_editar_tipo_vehiculo.js"></script>                            
