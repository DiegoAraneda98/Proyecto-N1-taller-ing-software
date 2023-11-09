<div class="container-fluid fondo-principal">
    <div class="row ">
        <div class="col-6 d-flex justify-content-start">
            <img src="img/main-logo.svg" class="img-fluid p-2 " alt="logo_ucsc">
        </div>
        <div class="col-6 d-flex justify-content-end">
            <p class="text-start align-self-center fw-semibold m-2 p-4 fs-5">Tienes una cuenta</p>
            <a class="btn text-white align-self-center fw-semibold rojo" href="index.php?p=auth/login"
                role="button">Iniciar sesión</a>
        </div>
    </div>
    <div class="row d-flex align-items-center">
        <div class="col-4 offset-4 d-flex justify-content-center ">
            <div class="bg-white p-4 rounded-4 text-secondary shadow " style="width: 100%; height: 100%">
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
                            maxlength="8" placeholder="Sin puntos, ni dígito verificador" />
                    </div>

                    <div class="p mt-3">Nombre</div>
                    <div class="input-group ">
                        <input class="form-control bg-light" type="text" name="nombre" onkeydown=filtroLetras()
                            placeholder="John Doe" />
                    </div>

                    <div class="p mt-3">Correo Institucional</div>
                    <div class="input-group ">
                        <input class="form-control bg-light" id="correo" type="email" name="correo"
                            onblur=validarEmailConDominioUCSC() placeholder="Correo@ucsc.cl" />
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
                            placeholder="Introduzca su contraseña" />
                    </div>

                    <div class="btn w-100 mt-3 shadow-sm rojo">
                        <input type="submit" value="Registrarse" name="registro"
                            class="btn rojo text-white fw-semibold w-100 ">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-4"></div>
    </div>

<script src="js/verificaciones.js"></script>

