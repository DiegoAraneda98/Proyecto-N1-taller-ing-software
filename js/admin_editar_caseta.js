
$(document).ready(function () {
    $(document).on('click', 'a[data-role=update_tipo]', function () {
        var id = $(this).data('id_tipo');
        var nombre = $('#' + id).children('td[data-target=nombre]').text();
        var direccion = $('#' + id).children('td[data-target=direccion]').text();
        console.log(id);
        console.log(nombre);
        console.log(direccion);

        $('#nombre').val(nombre);
        $('#direccion').val(direccion);
        $('#id_tipo').val(id);
        $('#editarmodalcaseta').modal('toggle');

    })
})

$('#save_tipo').click(function () {
    var id = $('#id_tipo').val();
    var nombre = $('#nombre').val();
    var direccion = $('#direccion').val();
    console.log("ID:", id);
    console.log("Nombre:", nombre);
    $.ajax({
        url: 'index.php?p=admin/actions/actions_caseta/admin_update_caseta',
        method: 'post',
        data: { nombre: nombre, id: id, direccion:direccion },
        success: function (response) {
            if (response.startsWith("Error")) {
                console.log("Respuesta del servidor:", response);
            } else {
                
                $('#' + id).children('td[data-target=nombre]').text(nombre);
                $('#' + id).children('td[data-target=direccion]').text(direccion);
                $('#editarmodalcaseta').modal('toggle');
            }

            
        }
    });
});


