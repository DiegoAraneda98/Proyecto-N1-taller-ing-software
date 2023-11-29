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
                        value="<?php echo $apellido ?>">
                </div>
            </div>



            <div class="input-group mt-4 d-flex justify-content-end align-items-end w-75 ">
                <button class="btn custom-btn border-secondary rounded-0 text-black fw-semibold bg-light"
                    onclick="guardarDatos()" type="button">
                    Guardar datos
                </button>
            </div>



        </form>
    </div>

    <div class="col-4 ">
        <div class="text-center rounded-0 bg-body-secondary rounded-circle ">
            <div class="d-flex justify-content-center">

                <img src="img/perfil_defualt.png" class="img-fluid imagen-perfil " alt="avatar" id="img" />

            </div>

        </div>

        <div class="d-flex ">
            <button class="btn custom-btn border-secondary rounded-0 text-black fw-semibold mt-3 bg-light d-flex justify-content-start"
                type="button">
                Guardar imagen
            </button>

            <label
                class=" btn custom-btn border-secondary rounded-0 text-black fw-semibold bg-light mt-3 ml-5 subir_imagen d-flex justify-content-end"
                for="foto">Subir imagen</label>

            <input type="file" name="foto" id="foto" accept="image/*">
        </div>

    </div>

</div>

<script src="js/cambiar_foto.js"></script>