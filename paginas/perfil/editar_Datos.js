$(document).ready(function() {
    $(document).on('click', 'a[data-role=update-datos]', function() {
        var id = $(this).data('id');
        var nombre = $('#' + id).find('input[data-target=nombre]').val();
        var apellido = $('#' + id).find('input[data-target=apellido]').val();
        var correo = $('#' + id).find('input[data-target=correo]').val();
        var telefono = $('#' + id).find('input[data-target=telefono]').val();

        $('#nombre').val(nombre);
        $('#apellido').val(apellido);
        $('#correo').val(correo);
        $('#telefono').val(telefono);
        $('#idUsuario').val(id);
        $('#editarDatos').modal('toggle');
    });

    $('#save-datos').click(function() {
        var id = $('#idUsuario').val();
        var nombre = $('#nombre').val();
        var apellido = $('#apellido').val();
        var correo = $('#correo').val();
        var telefono = $('#telefono').val();

        $.ajax({
            url: 'actions/actualizarPerfil.php',
            method: 'post',
            data: {
                nombre: nombre,
                apellido: apellido,
                correo: correo,
                telefono: telefono,
                id: id
            },
            success: function(response) {
                $('#' + id).children('input[data-target=nombre]').text(nombre);
                $('#' + id).children('input[data-target=apellido]').text(apellido);
                $('#' + id).children('input[data-target=correo]').text(correo);
                $('#' + id).children('input[data-target=telefono]').text(telefono);
                $('#editarDatos').modal('toggle');
            }
        });

    });
});