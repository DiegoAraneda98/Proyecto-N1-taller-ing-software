
<div class="container-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-10 bg-white offset-1 mt-5">
                    <div class="h2 p-3 text-secondary ">Comunas</div>
                    <hr class="border border-danger border-1 opacity-50">
                    <div class="table-responsive shadow  overflow-y-auto " style="max-height: 400px;">
                        <table class="table table-hover text-center">
                            
                            <thead>
                                <tr>
                                    <th scope="col">Id comuna</th>
                                    <th scope="col">Comuna</th>
                                    <th scope="col">Id provincia</th>
                                </tr>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php
                                require __DIR__ . '/../../modelo/conexion.php';
                                
                                
                                $sql = "SELECT * FROM comunas";
                                $resultado = mysqli_query($conexion, "$sql");

                                while ($row = mysqli_fetch_assoc($resultado)) {

                                    echo "<tr id='{$row["id"]}'>";
                                    echo "<td data-target='id_comuna'>" . $row["id"] . "</td>";
                                    echo "<td data-target='comuna'>" . $row["comuna"] . "</td>";
                                    echo "<td data-target='provincia_id'>" . $row["provincia_id"] . "</td>";

                                    

                                    echo "<td>";
                                    echo "<a href='#' class='btn btn-sm' data-role='update_comuna' data-id_comuna='" . $row['id'] . "'>";
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
                    <?php include 'modal/modal_comunas/editarmodal.php'; ?>
                    <?php include 'eliminarmodal.php'; ?>
                    

                </div>

            </div>
        </div>
        
    </div> 
    <script src="js/admin_editar_comuna.js"></script>                            
    <script src="js/admin_eliminar_usuarios.js"></script> 