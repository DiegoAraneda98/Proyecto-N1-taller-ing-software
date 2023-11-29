<div class="container-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-10 bg-white offset-1 mt-5">
                <div class="h2 p-3 text-secondary ">Vehículos</div>
                <hr class="border border-danger border-1 opacity-50">
                <div class="table-responsive shadow">
                    <table class="table table-hover text-center" id="miTabla">
                        <thead>
                            <tr>
                                <th scope="col">ID usuario</th>
                                <th scope="col">Propietario</th>
                                <th scope="col">Patente</th>
                                <th scope="col">Modelo</th>
                                <th scope="col">Color</th>
                                <th scope="col">Tipo de vehículo</th>
                                <th scope="col">Fecha Ingreso</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php
                            require __DIR__ . '/../../modelo/conexion.php';


                            $sql = "SELECT v.id_vehiculo,u.id_usuario, u.nombre, v.patente, v.modelo, v.color, v.tipo_vehiculo, v.fecha_ingreso 
                                    FROM usuarios u 
                                    JOIN vehiculos v ON u.id_usuario = v.id_usuario;";

                            $resultado = mysqli_query($conexion, "$sql");

                            while ($row = mysqli_fetch_assoc($resultado)) {

                                echo "<tr id='{$row["id_vehiculo"]}'>";
                                echo "<td data-target='id_usuario'>" . $row["id_usuario"] . "</td>";
                                 echo "<td data-target='nombre'>" . $row["nombre"] . "</td>";
                                echo "<td data-target='patente'>" . $row["patente"] . "</td>";
                                echo "<td data-target='modelo'>" . $row["modelo"] . "</td>";
                                echo "<td data-target='color'>" . $row["color"] . "</td>";
                                echo "<td data-target='tipo_vehiculo'>" . $row["tipo_vehiculo"] . "</td>";
                                echo "<td>" . $row["fecha_ingreso"] . "</td>";

                                echo "<td>";
                                echo "<a href='#' class='btn btn-sm' data-role='update-vehiculos' data-id_vehiculo='" . $row['id_vehiculo'] . "'>";
                                echo "<i class='bi bi-pencil-fill'></i>";
                                echo "</a>";


                                echo "<a href='#' class='btn btn-sm' data-role='eliminar' data-id='" . $row['id_vehiculo'] . "'>";
                                echo "<i class='bi bi-trash-fill'></i>";
                                echo "</a>";
                                echo "</td>";

                                echo "</tr>";

                            }
                            ?>

                        </tbody>
                    </table>

                </div>
                <?php $sqlVehiculo = "SELECT * FROM tipo_vehiculo";
                $tipo_vehiculo = $conexion->query($sqlVehiculo); ?>
                <?php include 'modal/modal_Vehiculos/editarmodal.php'; ?>
                <?php include 'modal/modal_Vehiculos/nuevomodal.php'; ?>
                <?php include 'eliminarmodal.php'; ?>

                <div class="d-flex justify-content-end mt-5">
                    <button type="submit" class="btn custom-btn  fw-semibold  mb-4 añadir_vehiculo" name="añadir"
                        data-bs-toggle="modal" data-bs-target="#nuevomodalVehiculos">Añadir vehículo</button>
                </div>

            </div>

        </div>
    </div>

</div>
<script src="js/admin_editar_vehiculos.js"></script>
<script src="js/admin_eliminar_vehiculos.js"></script>    
<script src="js/data_table.js"></script>    