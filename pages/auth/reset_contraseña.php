<div class="container-fluid fondo_reset">
    <div class="row ">
        <div class="col-8 offset-2 d-flex align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="card bg-light rounded-4" style="width: 60%; height: 75%">
                <div class="d-flex justify-content-center ">
                    <img src="img/main-logo.svg" class="card-img-top mt-4 " alt="logo ucsc" style="width: 30%;">
                </div>

                <div class="card-body">
                    <h4 class="card-title text-center">Recuperar contraseña</h4>
                    <hr class="border border-danger border-1 opacity-50">

                    <form action="index.php?p=auth/actions/restablecer_contraseña" method="post">
                        <div class="p mt-4">Correo Institucional</div>
                        <div class="input-group ">
                            <input class="form-control bg-light mt-3" id="correo" type="email" name="correo"
                                onblur=validarEmailConDominioUCSC() placeholder="Correo@ucsc.cl" />
                        </div>

                        <div class="d-flex justify-content-center">
                            <div class="btn mt-4 shadow-sm rojo w-75">
                                <input type="submit" value="Solicitar recuperación" name="registro"
                                    class="btn rojo text-white fw-semibold ">
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>