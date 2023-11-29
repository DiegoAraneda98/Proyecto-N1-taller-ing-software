function guardarContacto() {
    // Obtén los valores de los campos del formulario
    var correo = document.getElementById('correo').value;
    var telefono = document.getElementById('telefono').value;
    /* var correo_sec = document.getElementById('correo_sec').value; */
    
    // Crea un objeto con los datos a enviar al servidor
    var datos = {
        correo : correo,
        telefono: telefono,
        /* correo_sec: correo_sec, */
    };

    // Realiza una solicitud AJAX para guardar los datos en el servidor
    $.ajax({
        type: "POST",
        url: "pages/perfil/actions/actualizarContacto.php",
        data: datos,
        dataType: "json", // Esperamos una respuesta JSON
        
        success: function (response) {
            if (response.success) {
                // Los datos se han guardado correctamente, muestra una alerta
                Swal.fire({
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
                    text: "Hubo un problema al guardar los datos aa."
                });
            }
        },
        error: function (error) {
            // En caso de error en la solicitud AJAX, muestra una alerta de error
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "Hubo un problema al guardar los datos bb."
            });
        }
    });
}
