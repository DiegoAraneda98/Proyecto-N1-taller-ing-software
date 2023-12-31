
<div class="container-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-10 bg-white offset-1 mt-5 ">
                    <div class="h2 p-3 text-secondary ">Usuarios</div>
                    <hr class="border border-danger border-1 opacity-50 ">
                    <div class="table-responsive shadow p-3" >
                        <table class="table table-hover table-bordered border-dark  table-striped text-center" id="miTabla" >
                            
                            <thead class="table-dark">
                                <tr >
                                    <th scope="col">ID usuario</th>
                                    <th scope="col">Run</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Tipo de usuario</th>
                                    <th scope="col">Teléfono</th>
                                    <th scope="col">Salud</th>
                                    <th scope="col">Contraseña</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider ">
                                <?php
                                require __DIR__ . '/../../modelo/conexion.php';
                                
                                
                                $sql = "SELECT * FROM usuarios";
                                $resultado = mysqli_query($conexion, "$sql");

                                while ($row = mysqli_fetch_assoc($resultado)) {

                                    echo "<tr id='{$row["id_usuario"]}'>";
                                    echo "<td data-target='id_usuario'>" . $row["id_usuario"] . "</td>";
                                    echo "<td data-target='run'>" . $row["run"] . "</td>";
                                    echo "<td data-target='nombre'>" . $row["nombre"] . "</td>";
                                    echo "<td data-target='apellido'>" . $row["apellido"] . "</td>";
                                    echo "<td data-target='correo'>" . $row["correo"] . "</td>";
                                    echo "<td data-target='tipo_usuario'>" . $row["tipo_usuario"] . "</td>";
                                    echo "<td data-target='telefono'>" . $row["telefono"] . "</td>";
                                    echo "<td data-target='salud'>" . $row["salud"] . "</td>";
                                    echo "<td data-target='contraseña'>" . $row["contraseña"] . "</td>";
                                    

                                    echo "<td>";
                                    echo "<a href='#' class='btn btn-sm' data-role='update-usuario' data-id_usuario='" . $row['id_usuario'] . "'>";
                                    echo "<i class='bi bi-pencil-fill'></i>";
                                    echo "</a>";


                                    echo "<a href='#' class='btn btn-sm' data-role='eliminar' data-id='" . $row['id_usuario'] . "'>";
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
                    <?php include 'modal/modal_Usuarios/editarmodal.php'; ?>
                    <?php include 'modal/modal_Usuarios/nuevomodal.php'; ?>
                    <?php include 'eliminarmodal.php'; ?>
                    
                    <div class="d-flex justify-content-end mt-4">
                        <button type="submit" class="btn custom-btn  fw-semibold  mb-4 añadir_vehiculo rounded-0" name="añadir" data-bs-toggle="modal" data-bs-target="#nuevomodalAdmin">Añadir usuario</button>
                    </div>

                </div>

            </div>
        </div>
        
    </div> 
    <script src="js/admin_editar_usuarios.js"></script>                            
    <script src="js/admin_eliminar_usuarios.js"></script> 
    <script src="js/data_table.js"></script> 