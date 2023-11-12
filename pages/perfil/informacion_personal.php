<div class="container-fluid  ">
    <div class="row">
        <div class="col-8 " style="height: auto;">
            <form action="#" method="POST">
                <p class="h5 text-secondary text-start pt-1 mt-3">Información personal</p>
                <div class="p-mt-2 text-start">Rut:
                    <div class="input-group mt-2 w-75">
                        <input name="nombre" id="nombre" type="text" class="form-control rounded-0 "
                            aria-label="Username" aria-describedby="basic-addon1" onkeydown=filtroLetras()
                            value="<?php echo $rut ?>">
                    </div>
                </div>
                <div class="p-mt-2 text-start">Nombre:
                    <div class="input-group mt-2 w-75">
                        <input name="apellido" id="apellido" type="text" class="form-control rounded-0 mb-2"
                            aria-label="Username" aria-describedby="basic-addon1" onkeydown=filtroLetras()
                            value="<?php echo $nombre ?>">
                    </div>
                </div>

                <div class="p-mt-2 text-start">Apellido:
                    <div class="input-group mt-2 w-75">
                        <input name="apellido" id="apellido" type="text" class="form-control rounded-0 mb-2"
                            aria-label="Username" aria-describedby="basic-addon1" onkeydown=filtroLetras()
                            value="<?php echo $apellido ?>">
                    </div>
                </div>

                <div class="p-mt-2 text-start">Apellido:
                    <div class="input-group mt-2 w-75">
                        <input name="apellido" id="apellido" type="text" class="form-control rounded-0 mb-2"
                            aria-label="Username" aria-describedby="basic-addon1" onkeydown=filtroLetras()
                            value="<?php echo $apellido ?>">
                    </div>
                </div>
                
                
                <div class="d-grid gap-2 d-md-flex justify-content-center align-items-center mb-4">
                    <button
                        class="btn btn_editarDatos border-secondary rounded-0 text-black d-flex justify-content-center fw-semibold bg-light"
                        onclick="guardarDatos()" type="button">Guardar datos</button>
                 
                </div>

            </form>
        </div>

        <div class="col-4" style="height: auto;">
            <div class="card text-center rounded-0 bg-body-secondary" style="width: 100%;  height: 70%;">
                <div class="d-flex justify-content-center mt-4 flex-wrap">
                    <div class="rounded-circle bg-white h-70">
                        <img src="img/perfil_defualt.png" class="img-fluid imagen-perfil m-5">
                    </div>
                </div>
                
            </div>
            <button type="button" class="btn btn-outline-danger text-white rojo mt-2 w-50">Subir imagen <i
                        class="bi bi-upload text-end"></i></button>
        </div>

    </div>
</div>
