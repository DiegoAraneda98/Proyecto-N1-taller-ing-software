<div class="container-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-10 bg-white offset-1 mt-5">
                    <div class="h2 p-3 text-secondary ">Modelos</div>
                    <hr class="border border-danger border-1 opacity-50">
                    <div class="table-responsive shadow  overflow-y-auto " style="max-height: 400px;">
                        <table class="table table-hover text-center" id="miTabla">
                            
                            <thead>
                                <tr>
                                    <th scope="col">Id modelo</th>
                                    <th scope="col">Modelo</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php
                                require __DIR__ . '/../../modelo/conexion.php';
                                
                                
                                $sql = "SELECT * FROM modelo";
                                $resultado = mysqli_query($conexion, "$sql");

                                while ($row = mysqli_fetch_assoc($resultado)) {

                                    echo "<tr id='{$row["id_modelo"]}'>";
                                    echo "<td data-target='id_modelo'>" . $row["id_modelo"] . "</td>";
                                    echo "<td data-target='modelo'>" . $row["modelo"] . "</td>";

                                    echo "<td>";
                                    echo "<a href='#' class='btn btn-sm' data-role='update_modelo' data-id_modelo='" . $row['id_modelo'] . "'>";
                                    echo "<i class='bi bi-pencil-fill'></i>";
                                    echo "</a>";


                                    echo "<a href='#' class='btn btn-sm' data-role='eliminar' data-id='" . $row['id_modelo'] . "'>";
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
                    <?php include 'modal/modal_modelos/editarmodal.php'; ?>
                    <?php include 'modal/modal_modelos/nuevomodal.php'; ?>
                    <?php include 'eliminarmodal.php'; ?>
                    <div class="d-flex justify-content-end mt-5">
                        <button type="submit" class="btn rojo text-white fw-semibold  mb-4 añadir_vehiculo" name="añadir" data-bs-toggle="modal" data-bs-target="#nuevomodalmodelo">Añadir modelo</button>
                    </div>

                    

                </div>

            </div>
        </div>
        
    </div> 
    <script src="js/admin_editar_modelo.js"></script>  
    <script src="js/admin_eliminar_modelo.js"></script>                            
    <script src="js/data_table.js"></script>                            
