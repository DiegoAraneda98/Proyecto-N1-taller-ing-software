<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Encuesta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="disnio.css">
</head>

<body>
    
<div class="container-fluid fondo_reset">
    <div class="row ">
        <div class="col-8 offset-2 d-flex align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="card bg-light rounded-4" style="width: 60%; height: 75%">
                <div class="d-flex justify-content-center ">
                    <img src="img/main-logo.svg" class="card-img-top mt-4 " alt="logo ucsc" style="width: 30%;">
                </div>

                <div class="card-body">
                    <h4 class="card-title text-center">Ingrese sus datos.</h4>
                    <hr class="border border-danger border-1 opacity-50">

                    <form action="Correo/email.php" method="post">
                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col-9 aling-items-center bg-white">
                                <input type="text" name="inombre" class="form-control m-3 w-50" placeholder="Nombre" required>
                            
                            
                               
                            
                            
                        
                            
                            
                                <input type="email" name="icorreo" class="form-control m-3 w-50"  placeholder="Correo" required>
                            </div>
                            <div class="col-9"></div>
                            <div class="col-3 d-flex align-items-center bg-white">
                            <button type="submit" class="btn btn-danger m-3" id="btn-enviar">Enviar</button>
                            
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>