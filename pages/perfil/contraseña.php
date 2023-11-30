
    <div class="row">
        <div class="col-7">
            <p class="h2 text-secondary text-start pt-1 mt-3">Seguridad</p>
            <form action="#" method="POST" id="<?php echo $id ?>">

                <div class="p-mt-3 text-start">Contraseña actual:
                    <div class="input-group mt-3 w-75">
                        <input name="contraseña_actual" id="contraseña_actual" type="password" class="form-control rounded-0 "
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>

                <div class="mt-3 text-start">Nueva contraseña:
                    <div class="input-group mt-3 w-75">
                        <input name="nuevaContraseña" id="nuevaContraseña" type="password" class="form-control rounded-0 "
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>

                <div class="mt-3 text-start">Repetir nueva contraseña:
                    <div class="input-group mt-3 w-75">
                        <input name="repetirNuevaContraseña" id="repetirNuevaContrasena" type="password" class="form-control rounded-0 mb-4"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>

                <div class="input-group mt-3 d-flex justify-content-end w-75">
                <a href="#" class="btn custom-btn  fw-semibold  mb-4 rounded-0  "
                    id="save-password"  data-id="<?php echo $id ?>">Editar contraseña</a>

                    <a href="index.php?p=perfil/actions/correoDesactivar" class="btn custom-btn  fw-semibold  mb-4 rounded-0 ml-2"
                    id="save-password"  data-id="<?php echo $id ?>">Eliminar cuenta</a>
                </div>

                <div class="input-group mt-3 d-flex justify-content-start w-75 ">
               
                </div>

                <input type="hidden" id="idUsuario" name="idUsuario" class="form-control">

                
            </form>
        </div>

        <div class="col-5 d-flex justify-content-center align-items-center">
            <img src="img/contraseña_seguras.jpg" class="img-fluid" alt="Foto de recomendación contraseña" style="width:100%">
        </div>
    </div>
