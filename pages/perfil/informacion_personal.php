<div class="row">
    <div class="col-8 ">
        <form action="#" method="POST">
            <p class="h2 text-secondary text-start pt-1 mt-3">Información personal</p>
            <div class="mt-3 text-start">Rut:
                <div class="input-group mt-2 w-75">
                    <input name="rut" id="rut" type="text" class="form-control rounded-0 " aria-label="Username"
                        aria-describedby="basic-addon1" onkeydown=filtroLetras() value="<?php echo $rut ?>">
                </div>
            </div>
            <div class="mt-2 text-start">Nombre:
                <div class="input-group mt-2 w-75">
                    <input name="nombre" id="nombre" type="text" class="form-control rounded-0 mb-2"
                        aria-label="Username" aria-describedby="basic-addon1" onkeydown=filtroLetras()
                        value="<?php echo $nombre ?>">
                </div>
            </div>

            <div class="mt-2 text-start">Apellido:
                <div class="input-group mt-2 w-75">
                    <input name="apellido" id="apellido" type="text" class="form-control rounded-0 mb-2"
                        aria-label="Username" aria-describedby="basic-addon1" onkeydown=filtroLetras()
                        value="<?php echo $apellido ?>" require>
                </div>
            </div>



            <div class="input-group mt-4 d-flex justify-content-end align-items-end w-75 ">
                <button class="btn custom-btn  fw-semibold  mb-4 rounded-0 "
                    onclick="guardarDatos()" type="button">
                    Guardar datos
                </button>
            </div>



        </form>
    </div>

    <div class="col-4">
        <form id="imagenForm" enctype="multipart/form-data">
            <div class="text-center rounded-0 bg-body-secondary rounded-circle">
                <div class="d-flex justify-content-center">
                    
                    <?php 
                        $sql = "SELECT foto FROM usuarios WHERE id_usuario = '" . $_SESSION['id_usuario'] . "'";
                        $result = $conexion->query($sql);

                        if ($result) {
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                if ($row["foto"] !== null && $row["foto"] !== '') {
                                    echo '<img src="' . $row["foto"] . '" class="img-fluid imagen-perfil" alt="avatar usuario" id="img" />';
                                } else {
                                    echo '<img src="img/perfil_defualt.png" class="img-fluid imagen-perfil" alt="avatar default" id="img" />';
                                }
                            } else {
                                echo '<img src="img/perfil_defualt.png" class="img-fluid imagen-perfil" alt="avatar default" id="img" />';
                            }
                        } else {
                            // Manejo de errores si la consulta falla
                            echo "Error en la consulta: " . $conexion->error;
                        }
                    ?>

                </div>
            </div>

            <div class="w-100">

                <label
                    class="btn custom-btn  fw-semibold mt-3 rounded-0 subir_imagen "
                    for="foto">Subir imagen</label>
                <button
                    class="btn custom-btn  fw-semibold  rounded-0 mt-2"
                    type="button" onclick="guardarImagen()">
                    Guardar imagen
                </button>

              

                <input type="file" name="foto" id="foto" accept="image/*">
            </div>
        </form>
    </div>

</div>

<script src="js/cambiar_foto.js"></script>