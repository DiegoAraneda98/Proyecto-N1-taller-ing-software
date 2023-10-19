<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/jpg"
    href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAhFBMVEX+/v7w8PDjy83dn6PakJXYJjHYIi3dmJzk1tfaKzXn3Nzftbfiu73gUVreQkvcOUPjY2rcO0TiW2PkaHD99fbfSlPxsrXqi5H77O354+T4293lb3bwq7DslZrrkJXuo6f1yMvoe4H31tjzwMPbMTv2ztDpg4nneH7i4uLc3NzRz8/Lt7lL0WTHAAAA4UlEQVR4Ae2ShYGEMAAE94T9RyK4u0P/9b27FnA3EJ94gMPx9CvHA3A4G/wV4+aAW5N/YFqw+SfOu3AVhDAphSKV1i5per4wSEM8JM9CgJARYsYBkFCmAGKGGYD8k+ADRVmxRtOWwkjRlYX6JPQoST4InUdqJAPJT0IGn+TjFOjCFg3fhATeozBi4iPm3GHMkb4LDca2Q1whaf2Jfi4mpCpA4c/hs+AFABCbzWMy9ABQsQ0ek2eBKm9zYdLQVZWb4VTGHkk5lZO8nPfg/CdYin+gFhxsyV+RDrCs2/4r27rcA5gKJeq3KHdpAAAAAElFTkSuQmCC" />
  <title>Inicio</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style_inicio.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
</head>

<body>
  <div class="row bg-light"> <!-- nav bar -->
    <div class="col-10 offset-1">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <img src="img/main-logo.svg" class="img-fluid logo" alt="logo">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item ">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Mis vehiculos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Perfil</a>
              </li>
              <li class="nav-item ml">
                <a class="nav-link active" aria-current="page" href="#">Cerrar sesión</a>
              </li>
            </ul>

          </div>
        </div>
      </nav>
    </div>
  </div>


  <div class="row "> <!-- linea divisora -->
    <div class="col-1"></div>
    <div class="col-10">
      <hr class="border border-danger border-1 opacity-50">
    </div>
    <div class="col-1"></div>
  </div>


  <div class="container-fluid bg-light"> <!-- Carrusel de imagenes -->
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

  <div class="row"> <!-- linea divisora -->
    <div class="col-1"></div>
    <div class="col-10">
      <hr class="border border-danger border-1 opacity-50">
    </div>
    <div class="col-1"></div>
  </div>

  <div class="row text-center"> <!-- codigo qr y contador -->
    <div class=" col-4 offset-2  d-flex justify-content-center border">
      <div class="card " style="width: 18rem;">
        <img src="img/qr_prueba.png" class="card-img-top p-2" alt="codigo qr">
      </div>
    </div>
    <div class=" col-4 offset-1 d-flex justify-content-center border">
      <div class="card" style="width: 18rem;">
        <img src="img/qr_prueba.png" class="card-img-top" alt="...">
      </div>
    </div>
  </div>


  <div class="row"> <!-- fechas -->

  </div>

  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          <svg class="bi" width="30" height="24">
            <use xlink:href="#bootstrap" />
          </svg>
        </a>
        <span class="mb-3 mb-md-0 text-muted">&copy; 2022 Company, Inc</span>
      </div>

      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
              <i class="bi bi-twitter-x"></i>
            </svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
              <i class="bi bi-instagram"></i>
            </svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
              <i class="bi bi-facebook"></i>
            </svg></a></li>
      </ul>
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>