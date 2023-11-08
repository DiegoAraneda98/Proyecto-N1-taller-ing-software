<div class="container-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-10 bg-white offset-1 mt-5">
                <div class="h2 p-3 text-secondary ">Mis vehículos</div>
                <div class="table-responsive shadow  overflow-y-auto " style="max-height: 400px;">
                    <table class="table table-hover text-center">
                        <?php require __DIR__ . '/../auth/actions/controlador_login.php'; ?>
                        <thead>
                            <tr>
                                <th scope="col">Patente</th>
                                <th scope="col">Modelo</th>
                                <th scope="col">Color</th>
                                <th scope="col">Tipo de vehículo</th>
                                <th scope="col">Fecha ingreso</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php
                            require __DIR__ . '/../../modelo/conexion.php';

                            $id_usuario = $_SESSION['id_usuario'];
                            $sql = "SELECT * FROM vehiculos WHERE id_usuario = $id_usuario";
                            $resultado = mysqli_query($conexion, "$sql");

                            while ($row = mysqli_fetch_assoc($resultado)) {

                                echo "<tr id='{$row["id_vehiculo"]}'>";
                                echo "<td data-target='patente'>" . $row["patente"] . "</td>";
                                echo "<td data-target='modelo'>" . $row["modelo"] . "</td>";
                                echo "<td data-target='color'>" . $row["color"] . "</td>";
                                echo "<td data-target='tipo_vehiculo'>" . $row["tipo_vehiculo"] . "</td>";
                                echo "<td>" . $row["fecha_ingreso"] . "</td>";

                                echo "<td>";
                                echo "<a href='#' class='btn btn-sm' data-role='update' data-id_vehiculo='" . $row['id_vehiculo'] . "'>";
                                echo "<i class='bi bi-pencil-fill'></i>";
                                echo "</a>";


                                echo "<a href='index.php?p=/vehiculos/actions/eliminar&id_enviado=" . $row["id_vehiculo"] . "'>";
                                echo "<button class = 'btn btn-sm ' data-toggle='modal' data-target='#eliminar' ><i class='bi bi-trash-fill'></i></button>";
                                echo "</a>";


                                echo "<a href='#' class='btn btn-sm'  data-bs-toggle='modal' data-bs-target='#qrModal' data-role='qr' data-id_vehiculo='" . $row['id_vehiculo'] . "'>";
                                echo "<i class='bi bi-qr-code'></i>";
                                echo "</a>";

                             

                                echo "</tr>";

                            }
                            ?>

                        </tbody>
                    </table> <!-- cierre tabla -->

                </div>

                <?php $sqlVehiculo = "SELECT * FROM tipo_vehiculo";
                $tipo_vehiculo = $conexion->query($sqlVehiculo); ?>

                <?php include 'editarmodal.php'; ?>
                <?php include 'nuevomodal.php'; ?>
                <?php include 'qrModal.php'; ?>


                <div class="d-flex justify-content-end mt-5">
                    <button type="submit" class="btn rojo text-white fw-semibold  mb-4 añadir_vehiculo" name="añadir"
                        data-bs-toggle="modal" data-bs-target="#nuevomodal">Añadir vehículo</button>
                </div>

            </div>

        </div>
    </div>

</div>
<script src="js/editar_vehiculos.js"></script>
<script src="js/crear_qr.js"></script>