<div class="container-fluid fondo_reset">
    <div class="row ">
        <div class="col-8 offset-2 d-flex align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="card bg-light rounded-4" style="width: 60%; height: 75%">
                <div class="d-flex justify-content-center ">
                    <img src="img/main-logo.svg" class="card-img-top mt-4 " alt="logo ucsc" style="width: 30%;">
                </div>

                <div class="card-body">
                    <h4 class="card-title text-center">Desactivación de cuenta</h4>
                    <hr class="border border-danger border-1 opacity-50">

                    <form action="index.php?p=perfil/actions/desactivarCuenta" method="post">

                        <div class="p mt-4">Rut</div>
                        <div class="input-group mt-1">
                            <input class="form-control bg-light" type="text" name="rut"
                                placeholder="Ingrese su Rut sin dígito verificador" minlength="8" maxlength="8"
                                onkeydown=filtro() required />
                        </div>

                        <div class="p mt-4">Contraseña</div>
                        <div class="input-group mt-1">
                            <input class="form-control bg-light" type="password" name="contraseña"
                                placeholder="Contraseña" required />
                        </div>

                        <div class="d-flex justify-content-center">
                            <div class="btn mt-4 shadow-sm rojo w-75">
                                <input type="submit" value="Desactivar cuenta" name="registro"
                                    class="btn rojo text-white fw-semibold w-100">
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>