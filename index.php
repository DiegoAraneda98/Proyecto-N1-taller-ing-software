<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Encuesta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="disnio.css">
</head>

<body>
    <div class="container-fluid bg-light">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <img src="img/logo.png" class="img-fluid logo" alt="logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Mis vehiculos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Perfil</a>
                        </li>
                        <li class="nav-item ml">
                            <a class="nav-link active"
                                href="controlador/controlador_logout.php">Cerrar sesión</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Contenido principal -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-10 bg-white offset-1 mt-5">
                    <div class="h2 p-3 text-secondary">Encuesta</div>
                    <form action="añadir_contacto.php" method="post">
                        <div class="row">
                            <div class="col-6">
                                <input type="text" name="inombre" class="form-control m-3" placeholder="Nombre">
                            
                            
                                <input type="text" name="irut" class="form-control m-3" placeholder="RUT" maxlength="9" >
                            
                            
                                <input type="text" name="itelefono" class="form-control m-3" placeholder="Telefono"
                                    maxlength="10">
                            
                            
                                <input type="email" name="icorreo" class="form-control m-3"  placeholder="Correo">
                            </div>
                            <div class="col-6">
                               
                                <select name="interfaz" class="form-select m-3">
                                <option selected>Interfaz</option>
                                    <option value="Muy Buena">Muy Buena</option>
                                    <option value="Buena">Buena</option>
                                    <option value="Regular">Regular</option>
                                    <option value="Mala">Mala</option>
                                    <option value="Muy Mala">Muy Mala</option>
                                </select>
                           
                            
                                
                                <select name="rapidez" class="form-select m-3">
                                <option selected>Rapidez</option>
                                    <option value="Muy Rapida">Muy Rapida</option>
                                    <option value="Rapida">Rapida</option>
                                    <option value="Regular">Regular</option>
                                    <option value="Lenta">Lenta</option>
                                    <option value="Muy Lenta">Muy Lenta</option>
                                </select>
                            </div>
                        
                            <div class="col-12 mt-3">
                                <textarea name="iSugerencia" class="form-control" cols="16" rows="4"
                                    placeholder="Sugerencia (128 Caracteres Maximo)" maxlength="128"></textarea>
                            
                            
                                <button type="submit" class="btn btn-danger m-3">Enviar</button>
                                <button type="reset" class="btn btn-success m-3">Resetear</button>
                                <button disabled="disabled" class="btn btn-dark m-3">Generar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>