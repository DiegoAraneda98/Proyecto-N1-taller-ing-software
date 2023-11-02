$(document).ready(function() {
    $(document).on('click', 'a[data-role=update-password]', function() {
        var id = $(this).data('id');

        $('#idUsuario').val(id);
        $('#editarContrasena').modal('toggle');

    });

    $('#save-password').click(function() {
        var id = $('#idUsuario').val();
        var nuevaContrasena = $('#nuevaContrasena').val();
        var repetirNuevaContrasena = $('#repetirNuevaContrasena').val();

        if (nuevaContrasena !== repetirNuevaContrasena) {
            window.alert("Contraseñas distintas");

        } else {
            $.ajax({
                url: 'actions/actualizaContrasena.php',
                method: 'post',
                data: {
                    nuevaContrasena: nuevaContrasena,
                    id: id
                },
                success: function(response) {
                    $('#' + id).children('input[data-target=contraseña]').text(
                        contraseña);
                    $('#editarContrasena').modal('toggle');
                }
            });
        }

    });
});