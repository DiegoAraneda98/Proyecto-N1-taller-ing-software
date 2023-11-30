$(document).ready(function() {
    $('#save-password').click(function() {
        var id = $(this).data('id'); 
        var contraseña_actual = $('#contraseña_actual').val();
        var nuevaContraseña = $('#nuevaContraseña').val();
        var repetirNuevaContraseña = $('#repetirNuevaContrasena').val();

        if (nuevaContraseña !== repetirNuevaContraseña) {
            Swal.fire({
                icon: "error",
                title: "Las contraseñas no son iguales",
                showConfirmButton: false,
                timer: 1500
            });
        } else {
            $.ajax({
                url: 'pages/perfil/actions/actualizaContrasena.php',
                method: 'post',
                data: {
                    nuevaContraseña: nuevaContraseña,
                    id: id,
                    contraseña_actual: contraseña_actual,
                    repetirNuevaContraseña: repetirNuevaContraseña
                },
                success: function(response) {
                    Swal.fire({
                        icon: "success",
                        title: "Contraseña cambiada",
                        showConfirmButton: false,
                        timer: 1500
                    });
                },
                error: function(response) {
                
                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        text: "Hubo un problema al cambiar la contraseña. Por favor, inténtalo de nuevo.",
                    });
                }
            });
        }
    });
});