
$(document).ready(function () {
    $(document).on('click', 'a[data-role=update_establecimiento]', function () {
        var id = $(this).data('id_tipo');
        var nombre = $('#' + id).children('td[data-target=nombre_establecimiento]').text();
        var direccion = $('#' + id).children('td[data-target=direccion]').text();

        console.log("ID:", id);
        console.log("Nombre:", nombre);
        console.log("Nombre:", direccion);

        $('#direccion').val(direccion);
        $('#nombre_establecimiento').val(nombre);
        $('#id_tipo').val(id);
        $('#editarmodalestablecimiento').modal('toggle');

    })
})

$('#save_tipo').click(function () {
    var id = $('#id_tipo').val();
    var nombre = $('#nombre_establecimiento').val();
    var direccion = $('#direccion').val();
    console.log("ID:", id);
    console.log("Nombre:", nombre);
    console.log("Nombre:", direccion);
    $.ajax({
        url: 'index.php?p=admin/actions/actions_establecimiento/admin_update_establecimiento',
        method: 'post',
        data: { nombre: nombre, direccion:direccion, id: id },
        success: function (response) {
            if (response.startsWith("Error")) {
                console.log("Respuesta del servidor:", response);
                
            } else {
                console.log('exito');
                console.log(id);
                $('#' + id).children('td[data-target=nombre_establecimiento]').text(nombre);
                $('#' + id).children('td[data-target=direccion]').text(direccion);
                
                $('#editarmodalestablecimiento').modal('toggle');
            }

            
        }
    });
});


