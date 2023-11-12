<div class="container-fluid  ">
    <div class="row ">
        <div class="col-8 ">
            <form action="#" method="POST">
                <p class="h5 text-secondary text-start pt-1">Información personal</p>
                <div class="p-mt-2 text-start">Rut:
                    <div class="input-group mt-2 w-75">
                        <input name="nombre" id="nombre" type="text" class="form-control rounded-0 "
                            aria-label="Username" aria-describedby="basic-addon1" onkeydown=filtroLetras()
                            value="<?php echo $rut ?>">
                    </div>
                </div>
                <div class="p-mt-2 text-start">Nombre:
                    <div class="input-group mt-2 w-75">
                        <input name="apellido" id="apellido" type="text" class="form-control rounded-0 mb-2"
                            aria-label="Username" aria-describedby="basic-addon1" onkeydown=filtroLetras()
                            value="<?php echo $nombre ?>">
                    </div>
                </div>

                <div class="p-mt-2 text-start">Apellido:
                    <div class="input-group mt-2 w-75">
                        <input name="apellido" id="apellido" type="text" class="form-control rounded-0 mb-2"
                            aria-label="Username" aria-describedby="basic-addon1" onkeydown=filtroLetras()
                            value="<?php echo $apellido ?>">
                    </div>
                </div>

                <div class="p-mt-2 text-start">Apellido:
                    <div class="input-group mt-2 w-75">
                        <input name="apellido" id="apellido" type="text" class="form-control rounded-0 mb-2"
                            aria-label="Username" aria-describedby="basic-addon1" onkeydown=filtroLetras()
                            value="<?php echo $apellido ?>">
                    </div>
                </div>
                
                
                <div class="d-grid gap-2 d-md-flex justify-content-center align-items-center mb-4">
                    <button
                        class="btn btn_editarDatos border-secondary rounded-0 text-black d-flex justify-content-center fw-semibold bg-light"
                        onclick="guardarDatos()" type="button">Guardar datos</button>
                 
                </div>

            </form>
        </div>

        <div class="col-4">
            <div class="card text-center rounded-0 bg-body-secondary" style="width: 100%;  height: 70%;">
                <div class="d-flex justify-content-center mt-4 flex-wrap">
                    <div class="rounded-circle bg-white h-70">
                        <img src="img/perfil_defualt.png" class="img-fluid imagen-perfil m-5">
                    </div>
                </div>
                
            </div>
            <button type="button" class="btn btn-outline-danger text-white rojo mt-2 w-50">Subir imagen <i
                        class="bi bi-upload text-end"></i></button>
        </div>

    </div>
</div>
<?php include 'editarContrasena.php'; ?>
<script src="js/editar_Contraseña.js"></script>
<script src="js/mostrarContraseña.js"></script>
<script src="js/verificaciones.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function guardarDatos() {
    // Obtén los valores de los campos del formulario
    var nombre = document.getElementById('nombre').value;
    var apellido = document.getElementById('apellido').value;
    var correo = document.getElementById('correo').value;
    var telefono = document.getElementById('telefono').value;

  

    // Realiza una solicitud AJAX para guardar los datos en el servidor
    $.ajax({
        type: "POST",
        url: "pages/perfil/actions/actualizarPerfil.php",
        data: {nombre:nombre, apellido: apellido,  correo: correo, telefono: telefono },
        dataType: "json", // Esperamos una respuesta JSON
        success: function (response) {
            if (response.success) {
                // Los datos se han guardado correctamente, muestra una alerta
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Los datos se han guardado correctamente",
                    showConfirmButton: false,
                    timer: 1500
                });

                // Redirige al usuario después de mostrar la alerta (opcional)
                setTimeout(function () {
                    window.location.href = "index.php?p=perfil/perfil";
                }, 1500);
            } else {
                // Hubo un problema al guardar los datos, muestra una alerta de error
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Hubo un problema al guardar los datos."
                });
            }
        },
        error: function (error) {
            // En caso de error en la solicitud AJAX, muestra una alerta de error
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "Hubo un problema al guardar los datos."
            });
        }
    });
}
</script>