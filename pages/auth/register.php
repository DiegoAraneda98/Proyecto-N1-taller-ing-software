<div class="container-fluid fondo-principal">
    <div class="row ">
        <div class="col-4 d-flex justify-content-start align-items-start p-3">
            <img src="img/main-logo.svg" class="img-fluid w-50" alt="logo_ucsc">
        </div>
        <div class="col-4  d-flex justify-content-center  mt-3">
            <div class="bg-white p-4 rounded-3 text-secondary shadow mt-2 " style="width: 100%; height: 100%">
                <form action="" method="post">
                    <?php
                    include("modelo/conexion.php");
                    include("actions/controlador_registrar_usuario.php");
                    
                    $sqlUsuario = "SELECT * FROM tipo_usuario";
                    $tipo_usuario = $conexion->query($sqlUsuario); 
                    ?>
                    
                    <div class="text-center fw-bold fs-4">¡Vamos allá!</div>
                    <div class="p mt-3">Rut</div>
                    <div class="input-group ">
                        <input class="form-control bg-light" type="text" name="rut" onkeydown=filtro() minlength="8"
                            maxlength="8" placeholder="Sin puntos, ni dígito verificador" required/>
                    </div>

                    <div class="p mt-3">Nombre</div>
                    <div class="input-group ">
                        <input class="form-control bg-light" type="text" name="nombre" onkeydown=filtroLetras()
                            placeholder="John Doe" required />
                    </div>

                    <div class="p mt-3">Correo Institucional</div>
                    <div class="input-group ">
                        <input class="form-control bg-light" id="correo" type="email" name="correo"
                            onblur=validarEmailConDominioUCSC() placeholder="Correo@ucsc.cl" required/>
                    </div>

                    <div class="p mt-3">¿Qué usuario es?</div>
                    <div class="input-group ">
                        <select class="form-select bg-light" name="tipo_usuario">
                        <option disabled selected>Seleccione su tipo usuario</option>
                                <?php while ($row_usuarios = $tipo_usuario->fetch_assoc()) { ?>
                                    <option value="<?= $row_usuarios["nombre"]?>"><?= $row_usuarios["nombre"]?></option>
                                <?php } ?>
                           
                        </select>
                    </div>

                    <div class="p mt-3">Contraseña</div>
                    <div class="input-group ">
                        <input class="form-control bg-light" type="password" name="contraseña"
                            placeholder="Introduzca su contraseña" required />
                    </div>

                    <div class="btn w-100 mt-3 shadow-sm rojo">
                        <input type="submit" value="Registrarse" name="registro"
                            class="btn rojo text-white fw-semibold w-100 ">
                    </div>

                    <?php
                    if (isset($_GET['message'])) {

                        ?>
                        <div class="alert alert-primary mt-2" role="alert">
                            <?php switch ($_GET['message']) {

                                case 'ok':
                                    echo 'Revise su correo y termine con su registro';
                                    break;

                                case 'success':
                                    echo 'Inicia sesión con tu nueva contraseña';
                                    break;

                                default:
                                    echo 'Algo salió mal, intenta de nuevo';
                                    break;

                            }

                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <p class="text-center mt-2">Si ya tienes una cuenta y deseas activarla haz click <a href="index.php?p=perfil/reactivar_cuenta">aquí</a></p>
                </form>
            </div>
        </div>

        <div class="col-4 d-flex justify-content-end align-items-start">
            <p class=" fw-semibold m-2 p-4 fs-5">Tienes una cuenta</p>
            <a class="btn text-white fw-semibold m-4  rojo" href="index.php?p=auth/login" role="button">Iniciar sesión</a>
        </div>
    </div>
  

<script src="js/verificaciones.js"></script>

