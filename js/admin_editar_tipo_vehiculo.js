
$(document).ready(function () {
    $(document).on('click', 'a[data-role=update_tipo]', function () {
        var id = $(this).data('id_tipo');
        var nombre = $('#' + id).children('td[data-target=nombre]').text();
        console.log("ID:", id);
        console.log("Nombre:", nombre);
        $('#nombre').val(nombre);
        $('#id_tipo').val(id);
        $('#editarmodaltipoVehiculo').modal('toggle');

    })
})

$('#save_tipo').click(function () {
    var id = $('#id_tipo').val();
    var nombre = $('#nombre').val();
    console.log("ID:", id);
    console.log("Nombre:", nombre);
    $.ajax({
        url: 'index.php?p=admin/actions_tipo_vehiculo/admin_updatetipoVehiculo',
        method: 'post',
        data: { nombre: nombre, id: id },
        success: function (response) {
            if (response.startsWith("Error")) {
                console.log("Respuesta del servidor:", response);
            } else {
                
                $('#' + id).children('td[data-target=nombre]').text(nombre);
                $('#editarmodaltipoVehiculo').modal('toggle');
            }

            
        }
    });
});


