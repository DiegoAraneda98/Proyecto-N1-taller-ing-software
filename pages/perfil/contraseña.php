<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <p class="h2 text-secondary text-start pt-1 mt-3">Seguridad</p>
            <form action="#" method="POST" id="<?php echo $id ?>">

                <div class="p-mt-3 text-start">Contraseña actual:
                    <div class="input-group mt-3 w-75">
                        <input name="contraseña_actual" id="contraseña_actual" type="text" class="form-control rounded-0 "
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>

                <div class="mt-3 text-start">Nueva contraseña:
                    <div class="input-group mt-3 w-75">
                        <input name="nuevaContraseña" id="nuevaContraseña" type="text" class="form-control rounded-0 "
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>

                <div class="mt-3 text-start">Repetir nueva contraseña:
                    <div class="input-group mt-3 w-75">
                        <input name="repetirNuevaContraseña" id="repetirNuevaContrasena" type="text" class="form-control rounded-0 mb-4"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>

                <div class="input-group mt-3 d-flex justify-content-end align-items-end w-75 ">
                <a href="#" class="btn custom-btn border-secondary rounded-0 text-black bg-light fw-semibold mb-5"
                    id="save-password"  data-id="<?php echo $id ?>">Editar contraseña</a>
            </div>

                <input type="hidden" id="idUsuario" name="idUsuario" class="form-control">

                
            </form>
        </div>
    </div>
</div>