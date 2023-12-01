
<div class="container-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-10 bg-white offset-1 mt-5">
                    <div class="h2 p-3 text-secondary ">Regiones</div>
                    <hr class="border border-danger border-1 opacity-50">
                    <div class="table-responsive shadow p-3">
                        <table class="table table-hover table-bordered border-dark  table-striped text-center" id="miTabla">
                            
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">ID región</th>
                                    <th scope="col">Región</th>
                                    <th scope="col">Abreviatura</th>
                                    <th scope="col">Capital</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php
                                require __DIR__ . '/../../modelo/conexion.php';
                                
                                
                                $sql = "SELECT * FROM regiones";
                                $resultado = mysqli_query($conexion, "$sql");

                                while ($row = mysqli_fetch_assoc($resultado)) {

                                    echo "<tr id='{$row["id"]}'>";
                                    echo "<td data-target='id_region'>" . $row["id"] . "</td>";
                                    echo "<td data-target='region'>" . $row["region"] . "</td>";
                                    echo "<td data-target='abreviatura'>" . $row["abreviatura"] . "</td>";
                                    echo "<td data-target='capital'>" . $row["capital"] . "</td>";

                                    

                                    echo "<td>";
                                    echo "<a href='#' class='btn btn-sm' data-role='update_region' data-id_region='" . $row['id'] . "'>";
                                    echo "<i class='bi bi-pencil-fill'></i>";
                                    echo "</a>";


                                    echo "<a href='#' class='btn btn-sm' data-role='eliminar' data-id='" . $row['id'] . "'>";
                                    echo "<i class='bi bi-trash-fill'></i>";
                                    echo "</a>";
                                    echo "</td>";

                                    echo "</tr>";

                                }
                                ?>

                            </tbody>
                        </table>

                    </div>

                    <?php
                    $sqlUsuario = "SELECT * FROM tipo_usuario";
                    $tipo_usuario = $conexion->query($sqlUsuario); ?>
                    <?php include 'modal/modal_regiones/editarmodal.php'; ?>
                    <?php include 'eliminarmodal.php'; ?>
                    

                </div>

            </div>
        </div>
        
    </div> 
    <script src="js/admin_editar_region.js"></script>                            
    <script src="js/admin_eliminar_usuarios.js"></script> 
    <script src="js/data_table.js"></script> 