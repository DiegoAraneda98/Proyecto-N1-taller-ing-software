<div class="container-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-10 bg-white offset-1 mt-5">
                    <div class="h2 p-3 text-secondary ">Colores</div>
                    <hr class="border border-danger border-1 opacity-50">
                    <div class="table-responsive shadow  overflow-y-auto " style="max-height: 400px;">
                        <table class="table table-hover text-center">
                            
                            <thead>
                                <tr>
                                    <th scope="col">Id color</th>
                                    <th scope="col">Color</th>
                                </tr>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php
                                require __DIR__ . '/../../modelo/conexion.php';
                                
                                
                                $sql = "SELECT * FROM color";
                                $resultado = mysqli_query($conexion, "$sql");

                                while ($row = mysqli_fetch_assoc($resultado)) {

                                    echo "<tr id='{$row["id_color"]}'>";
                                    echo "<td data-target='id_color'>" . $row["id_color"] . "</td>";
                                    echo "<td data-target='color'>" . $row["color"] . "</td>";

                                    echo "<td>";
                                    echo "<a href='#' class='btn btn-sm' data-role='update_color' data-id_color='" . $row['id_color'] . "'>";
                                    echo "<i class='bi bi-pencil-fill'></i>";
                                    echo "</a>";


                                    echo "<a href='#' class='btn btn-sm' data-role='eliminar' data-id='" . $row['id_color'] . "'>";
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
                    <?php include 'modal/modal_colores/editarmodal.php'; ?>
                    <?php include 'modal/modal_colores/nuevomodal.php'; ?>
                    <?php include 'eliminarmodal.php'; ?>
                    <div class="d-flex justify-content-end mt-5">
                        <button type="submit" class="btn rojo text-white fw-semibold  mb-4 añadir_vehiculo" name="añadir" data-bs-toggle="modal" data-bs-target="#nuevomodalcolor">Añadir color</button>
                    </div>

                    

                </div>

            </div>
        </div>
        
    </div> 
    <script src="js/admin_editar_color.js"></script>  
    <script src="js/admin_eliminar_color.js"></script>                            
