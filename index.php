<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Encuesta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="disnio.css">
</head>

<body>
    
        <div class="container-fluid">
            <div class="row">
                <div class="col-10 ">
                    <div class="h2 p-3 text-secondary">Encuesta</div>
                    <form action="email.php" method="post">
                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col-9 aling-items-center bg-white">
                                <input type="text" name="inombre" class="form-control m-3 w-50" placeholder="Nombre" required>
                            
                            
                                <input type="text" name="irut" class="form-control m-3 w-50" placeholder="RUT" maxlength="9" required>
                            
                            
                                <input type="text" name="itelefono" class="form-control m-3 w-50" placeholder="Telefono"
                                    maxlength="10">
                            
                            
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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>