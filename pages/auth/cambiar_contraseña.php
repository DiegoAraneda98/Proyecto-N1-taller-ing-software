<div class="container-fluid fondo_reset">
    <div class="row ">
        <div class="col-8 offset-2 d-flex align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="card bg-light rounded-4 p-2" style="width: 60%; height: 80%">
                <div class="d-flex justify-content-center">
                    <img src="img/main-logo.svg" class="card-img-top mt-4 " alt="logo ucsc" style="width: 30%;">
                </div>

                <div class="card-body">
                    <h4 class="card-title text-center">Recupere su contraseña</h4>
                    <hr class="border border-danger border-1 opacity-50">
                    <p class="text-center h6">¿Olvidaste tu contraseña? No te preocupes, estamos aquí para ayudarte a
                        recuperar el acceso a tu cuenta. Completa los siguientes campos en donde se le pedira ingresar una nueva contraseña y repetir esta misma. </p>
                    <hr class="border border-danger border-1 opacity-50">
                    <form action="index.php?p=auth/actions/nueva_contraseña" method="post">

                        <div class="p mt-4">Nueva contraseña:</div>
                        <div class="input-group ">
                            <input class="form-control bg-light mt-3" type="text" name="nueva_contraseña"
                                placeholder="Introduzca su nueva contraseña" />
                        </div>

                        <div class="p mt-4">Repetir nueva contraseña:</div>
                        <div class="input-group ">
                            <input class="form-control bg-light mt-3" type="text" name="repetir_contraseña"
                                placeholder="Repita su nueva contraseña" />
                        </div>

                        <input type="hidden" class="d-none" name="token"
                            value="<?php if (isset($_GET['token'])) {
                                echo $_GET['token'];
                            } ?>">
                        <?php
                        if (isset($_GET['message'])) {

                            ?>
                            <div class="alert alert-primary mt-2" role="alert">
                                <?php switch ($_GET['message']) {

                                    case 'inequable':
                                        echo 'Sus contraseñas no son iguales';
                                        break;
                                }

                                ?>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="d-flex justify-content-center">
                            <div class="btn mt-3 shadow-sm rojo w-75">
                                <input type="submit" value="Cambiar contraseña" name="registro"
                                    class="btn rojo text-white fw-semibold w-100 ">
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>