<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mi Perfil</title>
  <link rel="icon" type="image/jpg"
    href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAhFBMVEX+/v7w8PDjy83dn6PakJXYJjHYIi3dmJzk1tfaKzXn3Nzftbfiu73gUVreQkvcOUPjY2rcO0TiW2PkaHD99fbfSlPxsrXqi5H77O354+T4293lb3bwq7DslZrrkJXuo6f1yMvoe4H31tjzwMPbMTv2ztDpg4nneH7i4uLc3NzRz8/Lt7lL0WTHAAAA4UlEQVR4Ae2ShYGEMAAE94T9RyK4u0P/9b27FnA3EJ94gMPx9CvHA3A4G/wV4+aAW5N/YFqw+SfOu3AVhDAphSKV1i5per4wSEM8JM9CgJARYsYBkFCmAGKGGYD8k+ADRVmxRtOWwkjRlYX6JPQoST4InUdqJAPJT0IGn+TjFOjCFg3fhATeozBi4iPm3GHMkb4LDca2Q1whaf2Jfi4mpCpA4c/hs+AFABCbzWMy9ABQsQ0ek2eBKm9zYdLQVZWb4VTGHkk5lZO8nPfg/CdYin+gFhxsyV+RDrCs2/4r27rcA5gKJeq3KHdpAAAAAElFTkSuQmCC" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style-perfil.css">
</head>

<body>
  <div class="container-fluid fondo-perfil">
    <div class="row bg-light">
      <div class="col-12 ">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <img src="main-logo.svg" class="img-fluid logo" alt="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
              aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav ms-auto  mb-2 mb-lg-0">
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


    <div class="container-fluid">
      <div class="row bg-light m-5">
        <div class="h2 p-3">Mi perfil</div>
        <div class="col-4 d-flex justify-content-center flex-wrap  mt-2 border bg-white">
          <div class="card text-center rounded-0 bg-body-secondary" style="width: 25rem;">
            <div class="d-flex justify-content-center mt-5">
              <div class="rounded-circle bg-white h-100">
                <img src="1077114.png" class="img-fluid imagen-perfil m-5">
              </div>
            </div>
            <div class="card-body d-flex align-items-end justify-content-center">            
              <button type="button" class="btn btn-outline-danger text-white rojo w-100 p-3">SUBIR IMAGEN <i class="bi bi-upload text-end"></i></button>
            </div>  
          </div>
          <div class="card mt-4 mb-5 rounded-0" style="width: 25rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-4 d-flex justify-content-center mt-2 border bg-white">
          
          <div class="card mb-5 rounded-0 " style="width: 34rem;">
            <div class="card-body">

              <p class="h5 text-secondary mt-5">Información personal</p>
              <div class="input-group mb-4 mt-4">
                <input type="text" class="form-control rounded-0" aria-label="Username" aria-describedby="basic-addon1"
                  placeholder="Nombre">
              </div>

              <div class="input-group mb-5">
                <input type="text" class="form-control rounded-0" aria-label="Username" aria-describedby="basic-addon1"
                  placeholder="Apellidos">
              </div>

              <p class="h5 text-secondary mb-4">Información de contacto</p>
              <div class="input-group mb-4">
                <input type="text" class="form-control rounded-0" aria-label="Username" aria-describedby="basic-addon1"
                  placeholder="E-mail">
              </div>


              <div class="input-group mb-4">
                <input type="text" class="form-control rounded-0" aria-label="Username" aria-describedby="basic-addon1"
                  placeholder="Celular">
              </div>

              <div class="d-grid gap-2 d-md-flex justify-content-center mt-5">
                <button class="btn btn-danger text-white d-flex justify-content-center  rojo w-50"
                  type="submit">EDITAR DATOS</button>
              </div>


            </div>
          </div>
        </div>
        <div class="col-4 d-flex justify-content-center flex-wrap mt-2 border bg-white">
          <div class="card rounded-0 " style="width: 34rem;">
            <div class="card-body">
              <p class="h5 text-secondary mt-5">Constraseña actual</p>
              <div class="input-group mt-4">
                <input type="text" class="form-control rounded-0" placeholder="Contraseña" aria-label="Recipient's username"
                  aria-describedby="button-addon2">
                <button class="btn btn-secondary " type="button" id="button-addon2"><i class="bi bi-eye"></i></button>
              </div>

              <p class="h5 text-secondary mt-4">Nueva constraseña</p>
              <div class="input-group mt-4">
                <input type="text" class="form-control rounded-0" aria-label="Username" aria-describedby="basic-addon1"
                  placeholder="Nueva constraseña">
              </div>

              <p class="h5 text-secondary mt-4">Repite la nueva constraseña</p>
              <div class="input-group mt-4">
                <input type="text" class="form-control rounded-0" aria-label="Username" aria-describedby="basic-addon1"
                  placeholder="Nueva constraseña">
              </div>

              <div class="d-flex justify-content-center mt-5">
                <button class="btn btn-danger text-white text-center rojo w-50" type="submit">EDITAR
                  CONTRASEÑA</button>
              </div>

            </div>
          </div>
          <div class="card mt-4 mb-5 rounded-0" style="width: 34rem;">
            <div class="card-body">
              <div class="input-group mt-3">
                <input type="text" class="form-control rounded-0" aria-label="Username" aria-describedby="basic-addon1"
                  placeholder="Nombre Invitado">
              </div>

              <div class="input-group mt-4">
                <input type="text" class="form-control rounded-0" aria-label="Username" aria-describedby="basic-addon1"
                  placeholder="RUT">
              </div>

              <div class="d-flex justify-content-center mt-4">
                <button class="btn btn-danger text-white d-flex justify-content-center  rojo w-50" type="submit">AÑADIR
                  INVITADO</button>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
</body>

</html>