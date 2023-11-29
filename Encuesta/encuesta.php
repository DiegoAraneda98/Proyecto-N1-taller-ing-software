<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../disnio.css">
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
                    <h4 class="card-title text-center">Encuesta</h4>
                    <hr class="border border-danger border-1 opacity-50">
                    Bienvenido, te encuentras en la encuesta. Por favor califica de 1 a 5 la rapidez, interfaz y accesibilidad.
                    <hr class="border border-danger border-1 opacity-50">
                    <form action="Action/ingresar.php" method="post">
                               <h4>Rapidez:     
                    <p class="clasificacion">
                        <input id="radio1-1" type="radio" name="estrellas1" value="5"><!--
                        --><label for="radio1-1">★</label><!--
                        --><input id="radio2-1" type="radio" name="estrellas1" value="4"><!--
                        --><label for="radio2-1">★</label><!--
                        --><input id="radio3-1" type="radio" name="estrellas1" value="3"><!--
                        --><label for="radio3-1">★</label><!--
                        --><input id="radio4-1" type="radio" name="estrellas1" value="2"><!--
                        --><label for="radio4-1">★</label><!--
                        --><input id="radio5-1" type="radio" name="estrellas1" value="1"><!--
                        --><label for="radio5-1">★</label>
                    </p></h4>
                            <h4>Interfaz:
                    <p class="clasificacion">
                        <input id="radio1-2" type="radio" name="estrellas2" value="5"><!--
                        --><label for="radio1-2">★</label><!--
                        --><input id="radio2-2" type="radio" name="estrellas2" value="4"><!--
                        --><label for="radio2-2">★</label><!--
                        --><input id="radio3-2" type="radio" name="estrellas2" value="3"><!--
                        --><label for="radio3-2">★</label><!--
                        --><input id="radio4-2" type="radio" name="estrellas2" value="2"><!--
                        --><label for="radio4-2">★</label><!--
                        --><input id="radio5-2" type="radio" name="estrellas2" value="1"><!--
                        --><label for="radio5-2">★</label>
                    </p></h4>
                        <h4>Accesibilidad:
                    <p class="clasificacion">
                        <input id="radio1-3" type="radio" name="estrellas3" value="5"><!--
                        --><label for="radio1-3">★</label><!--
                        --><input id="radio2-3" type="radio" name="estrellas3" value="4"><!--
                        --><label for="radio2-3">★</label><!--
                        --><input id="radio3-3" type="radio" name="estrellas3" value="3"><!--
                        --><label for="radio3-3">★</label><!--
                        --><input id="radio4-3" type="radio" name="estrellas3" value="2"><!--
                        --><label for="radio4-3">★</label><!--
                        --><input id="radio5-3" type="radio" name="estrellas3" value="1"><!--
                        --><label for="radio5-3">★</label>
                    </p></h4>
                        <button type="submit" class="btn btn-danger m-3">Enviar Clasificación</button>
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