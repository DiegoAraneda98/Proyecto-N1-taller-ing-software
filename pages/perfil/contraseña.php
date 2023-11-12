<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <form action="#" method="POST" id="<?php echo $id ?>">

                <p class="h5 text-secondary ">Mi contraseña</p>

                <div class="p-mt-3 text-start">Contraseña actual:
                    <div class="input-group mt-3 w-75">
                        <input name="nombre" id="nombre" type="text" class="form-control rounded-0 "
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>

                <div class="mt-3 text-start">Nueva contraseña:
                    <div class="input-group mt-3 w-75">
                        <input name="nombre" id="nombre" type="text" class="form-control rounded-0 "
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>

                <div class="mt-3 text-start">Repetir nueva contraseña:
                    <div class="input-group mt-3 w-75">
                        <input name="nombre" id="nombre" type="text" class="form-control rounded-0 mb-4"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>

                <a href="#" class="btn btn_editarDatos border-secondary rounded-0 text-black bg-light fw-semibold mb-5"
                    data-bs-toggle="modal" data-role="update-password" data-id="<?php echo $id ?>">Editar contraseña</a>
            </form>
        </div>
    </div>
</div>