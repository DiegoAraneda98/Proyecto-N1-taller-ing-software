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
        <div class="card text-center rounded-0 bg-body-secondary " style="width: 95%;  height: 80%;">
            <div class="d-flex justify-content-center mt-5 flex-wrap">
                <div class="rounded-circle bg-white">
                    <img src="img/perfil_defualt.png" class="img-fluid imagen-perfil m-5" alt="avatar" id="img"/>
                </div>
            </div>
            
        </div>
        <div class="d-flex justify-content-end align-items-center ">
            <input  type="file" name="foto" id="foto" accept="image/*">
            <label class=" btn custom-btn border-secondary rounded-0 text-black d-flex justify-content-center fw-semibold bg-light mt-3 subir_imagen" for="foto">Subir imagen</label>
        </div>
        

    </div>

</div>

<script src="js/cambiar_foto.js"></script>