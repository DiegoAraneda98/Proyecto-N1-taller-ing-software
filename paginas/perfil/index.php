<?php
$conexion = mysqli_connect("localhost", "root", "", "safedrive");

$consulta = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexion, $consulta);

if ($row = mysqli_fetch_array($resultado)) {
    $id = $row["id_usuario"];
    $nombre = $row["nombre"];
    $correo = $row["correo"];
    $telefono = $row["telefono"];
    $contraseña = $row["contraseña"];
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi Perfil</title>
    <link rel="icon" type="image/jpg" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAhFBMVEX+/v7w8PDjy83dn6PakJXYJjHYIi3dmJzk1tfaKzXn3Nzftbfiu73gUVreQkvcOUPjY2rcO0TiW2PkaHD99fbfSlPxsrXqi5H77O354+T4293lb3bwq7DslZrrkJXuo6f1yMvoe4H31tjzwMPbMTv2ztDpg4nneH7i4uLc3NzRz8/Lt7lL0WTHAAAA4UlEQVR4Ae2ShYGEMAAE94T9RyK4u0P/9b27FnA3EJ94gMPx9CvHA3A4G/wV4+aAW5N/YFqw+SfOu3AVhDAphSKV1i5per4wSEM8JM9KJAPJT0IGn+TjFOjCFg3fhATeozBi4iPm3GHMkb4LDca2Q1whaf2Jfi4mpC..."> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style-perfil.css">
    
</head>

<body>
    <div class="container-fluid fondo-perfil">
        <div class="row bg-light">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <img src="main-logo.svg" class="img-fluid logo" alt="logo">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
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
include
                <div class="col-12 col-md-4 d-flex justify-content-center flex-wrap  mb-5">

                    <div class="card text-center rounded-0 bg-body-secondary" style="width: 20rem;  height: 20rem;">

                        <div class="d-flex justify-content-center mt-5 flex-wrap">
                            <div class="rounded-circle bg-white h-70">
                                <img src="1077114.png" class="img-fluid imagen-perfil m-5">
                            </div>

                            <div class="card-body d-flex align-items-end justify-content-center">
                            <button type="button" class="btn btn-outline-danger text-white rojo w-100 p-3 ">SUBIR IMAGEN <i
                                    class="bi bi-upload text-end"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-4 mb-1 rounded-0" style="width: 30rem; height: 21rem;">
                        
                        <div class="card-body">
                        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">RUT</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mark</td>
      <td>1234</td>
   
    </tr>
    <tr>
      <td>Jacob</td>
      <td>12345</td>
    </tr>
  </tbody>
</table>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex justify-content-center mt-2">
                    <div class="card mb-5 rounded-0" style="width: 34rem;">
                        <div class="card-body">
                            <form action="#" method="POST" id="<?php echo $id ?>">
                                <p class="h5 text-secondary mt-5">Información personal</p>
                                <div class="p-mt-2">Nombre:
                                    <div class="input-group mb-4 mt-2">
                                        <input data-target ="nombre"  type="text" class="form-control rounded-0" aria-label="Username"
                                            aria-describedby="basic-addon1" value="<?php echo $nombre ?>" readonly>
                                    </div>
                                </div>
                                <div class="p-mt-2">Apellido:
                                    <div class="input-group mb-5 mt-2">
                                        <input data-target ="#"  type="text" class="form-control rounded-0" aria-label="Username"
                                            aria-describedby="basic-addon1" value="" readonly>
                                    </div>
                                </div>
                                <p class="h5 text-secondary">Información de contacto</p>
                                <div class="p-mt-2">E-Mail:
                                    <div class="input-group mb-4 mt-2">
                                        <input data-target ="correo"  type="text" class="form-control rounded-0" aria-label="Username"
                                            aria-describedby="basic-addon1" value="<?php echo $correo ?>" readonly>
                                    </div>
                                </div>
                                <div class="p-mt-2">Teléfono:
                                    <div class="input-group mb-4 mt-2">
                                        <input data-target ="telefono" type="text" class="form-control rounded-0" aria-label="Username"
                                            aria-describedby="basic-addon1" value="<?php echo $telefono ?>" readonly>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-center mt-5">
                                    <a href="#" class="btn btn-danger text-white d-flex justify-content-center rojo w-50"
                                        data-bs-toggle="modal" data-role="update-datos" data-id="<?php echo $id ?>">EDITAR
                                        DATOS</a>
                                       
                                </div>
                             
                            </form>
                         
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex justify-content-center flex-wrap mt-2">
                    <div class="card rounded-0" style="width: 34rem;">
                        <div class="card-body">
                            <p class="h5 text-secondary mt-5">Contraseña actual</p>
                            <div class="input-group mt-4">
                                <input id="input"type="password" class="form-control rounded-0" value="<?php echo $contraseña ?>" aria-label="Recipient's username"
                                    aria-describedby="button-addon2" readonly>
                                <button class="btn btn-secondary" type="button" id="eye"><i class="bi bi-eye"></i></button>
                            </div>
                            
                            <div class="d-flex justify-content-center mt-5">
                                <a href="#" class="btn btn-danger text-white d-flex justify-content-center rojo w-50"
                                    data-bs-toggle="modal" data-bs-target="#editarContraseña">EDITAR CONTRASEÑA</a>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-4 mb-5 rounded-0" style="width: 34rem;">
                        <div class="card-body">
                            <div class="input-group mt-3">
                                <input type="text" class="form-control rounded-0" aria-label="Username"
                                    aria-describedby="basic-addon1" placeholder="Nombre Invitado">
                            </div>
                            <div class="input-group mt-4">
                                <input type="text" class="form-control rounded-0" aria-label="Username"
                                    aria-describedby="basic-addon1" placeholder="RUT">
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <button class="btn btn-danger text-white d-flex justify-content-center rojo w-50"
                                    type="submit">AÑADIR INVITADO</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'editarDatos.php';
        include 'editarContraseña.php'; ?>
     
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function(){
            $(document).on('click', 'a[data-role=update-datos]', function(){
              var id = $(this).data('id');
              var nombre = $('#' + id).find('input[data-target=nombre]').val();
              var correo = $('#' + id).find('input[data-target=correo]').val();
              var telefono = $('#' + id).find('input[data-target=telefono]').val();
        
              $('#nombre').val(nombre);
              $('#correo').val(correo);
              $('#telefono').val(telefono);
              $('#idUsuario').val(id);
              $('#editarDatos').modal('toggle');
              });

              $('#save-datos').click(function(){
                var id = $('#idUsuario').val();
                var nombre = $('#nombre').val();
                var correo = $('#correo').val();
                var telefono = $('#telefono').val();

                $.ajax({
                  url    : 'actualizarPerfil.php',
                  method : 'post',
                  data   : {nombre : nombre , correo : correo, telefono : telefono, id : id},
                  success : function(response){
                              $('#' + id).children('input[data-target=nombre]').text(nombre);
                              $('#' + id).children('input[data-target=correo]').text(correo);
                              $('#' + id).children('input[data-target=telefono]').text(telefono);
                              $('#editarDatos').modal('toggle');
                  }
                });

              });
            });
        </script>

     <!--    <script>
            $(document).ready(function(){
            $(document).on('click', 'a[data-role=update]', function(){
              var id = $(this).data('id');
              var nombre = $('#' + id).find('input[data-target=nombre]').val();
              var correo = $('#' + id).find('input[data-target=correo]').val();
              var telefono = $('#' + id).find('input[data-target=telefono]').val();
        
              $('#nombre').val(nombre);
              $('#correo').val(correo);
              $('#telefono').val(telefono);
              $('#idUsuario').val(id);
              $('#editarDatos').modal('toggle');
              });

              $('#save').click(function(){
                var id = $('#idUsuario').val();
                var nombre = $('#nombre').val();
                var correo = $('#correo').val();
                var telefono = $('#telefono').val();

                $.ajax({
                  url    : 'actualizarPerfil.php',
                  method : 'post',
                  data   : {nombre : nombre , correo : correo, telefono : telefono, id : id},
                  success : function(response){
                              $('#' + id).children('input[data-target=nombre]').text(nombre);
                              $('#' + id).children('input[data-target=correo]').text(correo);
                              $('#' + id).children('input[data-target=telefono]').text(telefono);
                              $('#editarDatos').modal('toggle');
                  }
                });

              });
            });
        </script> -->

   
    </body>
</html>
