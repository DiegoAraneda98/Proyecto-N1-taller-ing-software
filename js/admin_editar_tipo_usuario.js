$(document).ready(function () {
    $(document).on('click', 'a[data-role=update-tipo-usuario]', function () {
        var id = $(this).data('id_tipoUsuario');
        var nombre = $('#' + id).children('td[data-target=nombre]').text();

        $('#nombre').val(nombre);
        $('#id_tipoUsuario').val(id);
        $('#editarmodaltipoUsuario').modal('toggle');
    });

    $('#save-tipo-usuario').click(function () {
        var id = $('#id_tipoUsuario').val();
        var nombre = $('#nombre').val();
        
        $.ajax({
            url: 'pages/admin/actions_tipo_usuario/admin_updatetipoUsuario.php',
            method: 'post',
            data: { nombre: nombre, id: id },
            success: function (response) {
                $('#' + id).children('td[data-target=nombre]').text(nombre);
                $('#editarmodaltipoUsuario').modal('toggle');
            }
        });
    });
});
