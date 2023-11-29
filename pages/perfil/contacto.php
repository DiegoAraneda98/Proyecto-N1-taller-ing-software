<div class="row">
        <div class="col-8">
            <p class="h2 text-secondary text-start pt-1 mt-3">Contacto</p>
            <form action="#" method="POST" id="<?php echo $id ?>">

                <div class="p-mt-3 text-start">Correo:
                    <div class="input-group mt-3 w-75">
                        <input name="correo" id="correo" type="text" class="form-control rounded-0 "
                            aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $correo ?>">
                    </div>
                </div>

                <div class="mt-3 text-start">Teléfono:
                    <div class="input-group mt-3 w-75">
                        <input name="telefono" id="telefono" type="text" class="form-control rounded-0 "
                            aria-label="Username" aria-describedby="basic-addon1" onkeydown=filtro() minlength="9" maxlength="9" value="<?php echo $telefono ?>">
                    </div>
                </div>

                <div class="mt-3 text-start">Correo secundario:
                    <div class="input-group mt-3 w-75">
                        <input name="repetirNuevaContraseña" id="repetirNuevaContrasena" type="text" class="form-control rounded-0 mb-4"
                            aria-label="Username" aria-describedby="basic-addon1" value="">
                    </div>
                </div>

                <div class="input-group mt-3 d-flex justify-content-end align-items-end w-75 ">
                <a href="#" class="btn custom-btn border-secondary rounded-0 text-black bg-light fw-semibold mb-5"
                onclick="guardarContacto()" id="save-password"  data-id="<?php echo $id ?>">Guardar contacto</a>

            
            </div>

                <input type="hidden" id="idUsuario" name="idUsuario" class="form-control">

                
            </form>
        </div>
    </div>

<script src="js/guardarContacto.js"></script>
<script src="js/verificaciones.js"></script>