
$(document).ready(function () {
    $(document).on('click', 'a[data-role=update_tipo]', function () {
        var id = $(this).data('id_tipo');
        var nombre = $('#' + id).children('td[data-target=nombre]').text();
   
        $('#nombre').val(nombre);
        $('#id_tipo').val(id);
        $('#editarmodaltipoUsuario').modal('toggle');

    })
})

$('#save_tipo ').click(function () {
    var id = $('#id_tipo').val();
    var nombre = $('#nombre').val();
    console.log(id);

    $.ajax({
            url: 'index.php?p=admin/actions_tipo_usuario/admin_updatetipoUsuario',
        method: 'post',
        data: { nombre: nombre, id: id },
        success: function (response) {
            if (response.startsWith("Error")) {
                //console.error(response); Muestra el mensaje de error en la consola
            } else {
                //console.log(response);  Muestra el mensaje de éxito en la consola
                $('#' + id).children('td[data-target=nombre]').text(nombre);
                $('#editarmodaltipoUsuario').modal('toggle');
            }

            
        }
    });
});


