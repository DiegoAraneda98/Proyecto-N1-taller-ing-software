<div class="container-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-10 bg-white offset-1 mt-5">
                <div class="h2 p-3 text-secondary ">Establecimientos</div>
                <hr class="border border-danger border-1 opacity-50">
                <div class="table-responsive shadow p-3">
                    <table class="table table-hover table-bordered border-dark  table-striped text-center" id="miTabla">

                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Código establecimiento</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Código comuna</th>
                                <th scope="col">Nombre comuna</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php
                            require __DIR__ . '/../../modelo/conexion.php';



                            $sql = "SELECT e.cod_establecimiento, e.nombre_establecimiento, e.direccion, e.cod_comuna, c.comuna
                                FROM establecimiento e
                                JOIN comunas c ON e.cod_comuna= c.id;";

                            $resultado = mysqli_query($conexion, "$sql");

                            while ($row = mysqli_fetch_assoc($resultado)) {

                                echo "<tr id='{$row["cod_establecimiento"]}'>";
                                echo "<td data-target='cod_establecimiento'>" . $row["cod_establecimiento"] . "</td>";
                                echo "<td data-target='nombre_establecimiento'>" . $row["nombre_establecimiento"] . "</td>";
                                echo "<td data-target='direccion'>" . $row["direccion"] . "</td>";
                                echo "<td data-target='cod_comuna'>" . $row["cod_comuna"] . "</td>";
                                echo "<td data-target='cod_comuna'>" . $row["comuna"] . "</td>";

                                echo "<td>";
                                echo "<a href='#' class='btn btn-sm' data-role='update_establecimiento' data-id_tipo='" . $row["cod_establecimiento"] . "'>";
                                ;
                                echo "<i class='bi bi-pencil-fill'></i>";
                                echo "</a>";


                                echo "<a href='#' class='btn btn-sm' data-role='eliminar' data-id='" . $row['cod_establecimiento'] . "'>";
                                echo "<i class='bi bi-trash-fill'></i>";
                                echo "</a>";
                                echo "</td>";

                                echo "</tr>";

                            }
                            ?>

                        </tbody>
                    </table>

                </div>

                <?php include 'modal/modal_establecimiento/editarmodal.php'; ?>
                <?php include 'modal/modal_establecimiento/nuevomodal.php'; ?>
                <?php include 'eliminarmodal.php'; ?>

                <div class="d-flex justify-content-end mt-5">
                    <button type="submit" class="btn custom-btn  fw-semibold  mb-4 añadir_vehiculo rounded-0" name="añadir"
                        data-bs-toggle="modal" data-bs-target="#nuevomodalestablecimiento">Añadir
                        establecimiento</button>
                </div>

            </div>

        </div>
    </div>

</div>
<script src="js/admin_editar_establecimiento.js"></script>
<script src="js/admin_eliminar_establecimiento.js"></script>
<script src="js/data_table.js"></script>