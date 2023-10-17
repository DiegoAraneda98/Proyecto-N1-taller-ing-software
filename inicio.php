<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <link rel="stylesheet" href="style_inicio.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <img src="img/main-logo.svg" class="rounded float-start p-1" alt="logo ucsc">
        <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
          <li class="nav-item ">
            <a class="nav-link active " aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active " aria-current="page" href="#">Mis vehiculos</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="#">Perfil</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="#">Cerrar sesion</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="row">
    <div class="col-1"></div>
    <div class="col-10">
      <hr class="border border-danger border-1 opacity-50">
    </div>
    <div class="col-1"></div>
  </div>


  <div class="container-fluid">
    <div class="row">
      <div class="col-1"></div>
      <div class="col-10">
        <div id="carouselExampleIndicators" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active d-item">
              <img src="img/foto1_inicio.png" class="d-block w-100 d-img" alt="slider 1">
            </div>
            <div class="carousel-item d-item">
              <img src="img/foto2_inicio.jpg" class="d-block w-100 d-img" alt="slider 2">
            </div>
            <div class="carousel-item d-item">
              <img src="..." class="d-block w-100 d-img" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="col-1"></div>
    </div>
  </div>

  <div class="row">
    <div class="col-1"></div>
    <div class="col-10">
      <hr class="border border-danger border-1 opacity-50">
    </div>
    <div class="col-1"></div>
  </div>

  <div class="row">
    <div class="col-1 "></div>
    
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>