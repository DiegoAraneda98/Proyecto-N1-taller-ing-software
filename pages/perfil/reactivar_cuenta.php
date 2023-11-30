<div class="container-fluid fondo_reset">
    <div class="row ">
        <div class="col-8 offset-2 d-flex align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="card bg-light rounded-4" style="width: 60%; height: 75%">
                <div class="d-flex justify-content-center ">
                    <img src="img/main-logo.svg" class="card-img-top mt-4 " alt="logo ucsc" style="width: 30%;">
                </div>

                <div class="card-body">
                    <h4 class="card-title text-center">Reactivar cuenta</h4>
                    <hr class="border border-danger border-1 opacity-50">
                    <p class="text-center h6">En esta página se solicitará tu dirección de correo electrónico con el fin
                        de volver a activar tu cuenta. Por favor, proporciona tu correo electrónico asociado a tu
                        cuenta para recibir instrucciones sobre cómo volver a activar tu cuenta.
                    </p>
                    <hr class="border border-danger border-1 opacity-50">

                    <form action="index.php?p=perfil/actions/correoActivacion" method="post">

                        <div class="p mt-4">Correo Institucional</div>
                        <div class="input-group ">
                            <input class="form-control bg-light mt-3" id="correo" type="email" name="correo"
                                placeholder="Correo@ucsc.cl" />
                        </div>

                        <div class="d-flex justify-content-center">
                            <div class="btn mt-4 shadow-sm rojo w-75">
                                <input type="submit" value="Solicitar reactivación" name="registro"
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