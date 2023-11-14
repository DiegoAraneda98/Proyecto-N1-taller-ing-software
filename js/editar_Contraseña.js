$(document).ready(function() {
    $('#save-password').click(function() {
        var id = $('#idUsuario').val();
        var contraseña_actual = $('#contraseña_actual').val();
        var nuevaContraseña = $('#nuevaContraseña').val();
        var repetirNuevaContraseña = $('#repetirNuevaContrasena').val();

        
        console.log(id);
        console.log(contraseña_actual);
        console.log(nuevaContraseña);
        console.log(repetirNuevaContraseña);

        if (nuevaContraseña !== repetirNuevaContraseña) {
            Swal.fire({
                position: "top-end",
                icon: "error",
                title: "Las contraseñas no son iguales",
                showConfirmButton: false,
                timer: 1500
            });

        } else {
            $.ajax({
                url: ' pages/perfil/actions/actualizaContrasena.php',
                method: 'post',
                data: {
                    nuevaContraseña: nuevaContraseña,
                    id: id,
                    contraseña_actual:contraseña_actual,
                    repetirNuevaContraseña:repetirNuevaContraseña

                },
                success: function(response) {
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "Contraseña cambiada",
                        showConfirmButton: false,
                        timer: 1500
                    });
                    
                }
            });
        }

    });
});