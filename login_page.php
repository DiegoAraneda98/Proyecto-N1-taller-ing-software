<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/jpg"
        href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAhFBMVEX+/v7w8PDjy83dn6PakJXYJjHYIi3dmJzk1tfaKzXn3Nzftbfiu73gUVreQkvcOUPjY2rcO0TiW2PkaHD99fbfSlPxsrXqi5H77O354+T4293lb3bwq7DslZrrkJXuo6f1yMvoe4H31tjzwMPbMTv2ztDpg4nneH7i4uLc3NzRz8/Lt7lL0WTHAAAA4UlEQVR4Ae2ShYGEMAAE94T9RyK4u0P/9b27FnA3EJ94gMPx9CvHA3A4G/wV4+aAW5N/YFqw+SfOu3AVhDAphSKV1i5per4wSEM8JM9CgJARYsYBkFCmAGKGGYD8k+ADRVmxRtOWwkjRlYX6JPQoST4InUdqJAPJT0IGn+TjFOjCFg3fhATeozBi4iPm3GHMkb4LDca2Q1whaf2Jfi4mpCpA4c/hs+AFABCbzWMy9ABQsQ0ek2eBKm9zYdLQVZWb4VTGHkk5lZO8nPfg/CdYin+gFhxsyV+RDrCs2/4r27rcA5gKJeq3KHdpAAAAAElFTkSuQmCC" />
    <link rel="stylesheet" href="css/login_register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
</head>

<body>
    <div class="container-fluid fondo-principal">
        <div class="row ">
            <div class="col-4 col-md-6  d-flex justify-content-start">
                <img src="img/main-logo.svg" class="img-fluid p-2" alt="logo_ucsc">
            </div>
            <div class="col-6 d-flex justify-content-end">
                <p class="text-start align-self-center fw-semibold m-2 p-4 fs-5">¿No tienes una cuenta?</p>
                <a class="btn text-white align-self-center fw-semibold rojo" href="register_page.php"
                    role="button">Registrarse</a>

            </div>
        </div>
        <div class="row d-flex align-items-center ">
            <div class="col-4 offset-4 d-flex justify-content-center ">
                <?php
                include "modelo/conexion.php";
                include "controlador/controlador_login.php";
                ?>
                <div class="bg-white mt-3 p-5 rounded-5 text-secondary shadow " style="width: 25rem">


                    <form action="" method="post">
                        <div class="text-center fw-bold fs-4">¡Bienvenido a la plataforma de aforo vehicular!</div>
                        <div class="p mt-4">Rut</div>
                        <div class="input-group mt-1">
                            <input class="form-control bg-light" type="text" name="rut"
                                placeholder="Ingrese su rut sin digito verificador" required />
                        </div>

                        <div class="p mt-4">Contraseña</div>
                        <div class="input-group mt-1">
                            <input class="form-control bg-light" type="password" name="contraseña"
                                placeholder="Contraseña" required />
                        </div>

                         <button type="submit" class="btn rojo text-white fw-semibold w-100 mt-4" name="login" >Iniciar Sesion</button>
                           <!--  <input type="submit" value="Iniciar Sesion" name="login"
                                class="btn rojo text-white fw-semibold w-100 mt-4 "> -->
                        
                    </form>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>

</html>