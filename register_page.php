<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
</head>

<body>
    <div class="container-fluid fondo-principal">
        <div class="row rowU">
            <div class="col-6 d-flex justify-content-start">
                <img src="img_login/main-logo.svg" class="img-fluid p-2" alt="logo_ucsc">
            </div>
            <div class="col-6 d-flex justify-content-end">
                <p class="text-start align-self-center m-2 ">¿No tienes una cuenta?</p>
                <a class="btn btn-primary align-self-center rojo" href="#" role="button">Registrarse</a>

            </div>
        </div>
        <div class="row d-flex align-items-center rowD ">
            <div class="col-4"></div>
            <div class="col-4 d-flex justify-content-center ">
                <div class="bg-white  p-5 rounded-5 text-secondary shadow " style="width: 25rem">

                    <div class="text-center fs-1 fw-bold fs-4">¡Vamos allá!</div>
                    <div class="p mt-3">Rut</div>
                    <div class="input-group ">
                        <input class="form-control bg-light" type="text" placeholder="123456789" />
                    </div>

                    <div class="p mt-3">Nombre</div>
                    <div class="input-group ">
                        <input class="form-control bg-light" type="text" placeholder="John Doe" />
                    </div>

                    <div class="p mt-3">Correo Institucional</div>
                    <div class="input-group ">
                        <input class="form-control bg-light" type="text" placeholder="Correo@ucsc.cl" />
                    </div>

                    <div class="p mt-3">Telefono celular</div>
                    <div class="input-group ">
                        <input class="form-control bg-light" type="password" placeholder="912345678" />
                    </div>

                    <div class="p mt-3">Contraseña</div>
                    <div class="input-group ">
                        <input class="form-control bg-light" type="password" placeholder="********" />
                    </div>

                
                    <div class="btn btn-info text-white w-100 mt-3 fw-semibold shadow-sm rojo">
                        Iniciar Sesion
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>

</html>