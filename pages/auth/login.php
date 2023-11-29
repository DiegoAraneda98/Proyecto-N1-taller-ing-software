<div class="container-fluid fondo-principal">
    <div class="row ">
        <div class="col-4 col-md-6  d-flex justify-content-start">
            <img src="img/main-logo.svg" class="img-fluid p-2" alt="logo_ucsc">
        </div>
        <div class="col-6 d-flex justify-content-end">
            <p class="text-start align-self-center fw-semibold m-2 p-4 fs-5">¿No tienes una cuenta?</p>
            <a class="btn text-white align-self-center fw-semibold rojo" href="index.php?p=auth/register"
                role="button">Registrarse</a>

        </div>
    </div>
    <div class="row d-flex align-items-center ">
        <div class="col-4 offset-4 d-flex justify-content-center ">

            <div class="bg-white  p-5 rounded-4 text-secondary shadow " style="width: 100%; height: 100%">

                <form action="#" method="post">
                    <?php
                    include("modelo/conexion.php");
                    include("actions/controlador_login.php");
                    ?>
                    <div class="text-center fw-bold fs-4">¡Bienvenido a la plataforma de aforo vehicular!</div>
                    <div class="p mt-4">Rut</div>
                    <div class="input-group mt-1">
                        <input class="form-control bg-light" type="text" name="rut"
                            placeholder="Ingrese su Rut sin dígito verificador" minlength="8" maxlength="8"
                            onkeydown=filtro() required />
                    </div>

                    <div class="p mt-4">Contraseña</div>
                    <div class="input-group mt-1">
                        <input class="form-control bg-light" type="password" name="contraseña" placeholder="Contraseña"
                            required />
                    </div>

                    <input type="submit" value="Iniciar sesión" name="login"
                        class="btn rojo text-white fw-semibold w-100 mt-4 ">
                    <p class="text-center mt-2">Si olvidaste tu contraseña haz click <a
                            href="index.php?p=auth/reset_contraseña">aquí</a></p>


                    <?php
                    if (isset($_GET['message'])) {

                        ?>
                        <div class="alert alert-primary" role="alert">
                            <?php switch ($_GET['message']) {

                                case 'ok':
                                    echo 'Por favor, revisa tu correo';
                                    break;

                                case 'success':
                                    echo 'Inicia sesión con tu nueva contraseña';
                                    break;

                                case 'activated':
                                    echo 'Su cuenta se activo con exito!!';
                                    break;
                                default:
                                    echo 'Algo salió mal, intenta de nuevo';
                                    break;

                            }

                            ?>
                        </div>
                        <?php
                    }
                    ?>
                </form>
                <form action="index.php?p=encuesta/actions/email" method="post"><button type="submit">mandar correo</button></form>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>

<script src="js/verificaciones.js"></script>