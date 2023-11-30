
$(document).ready(function () {
    $(document).on('click', 'a[data-role=update_tipo]', function () {
        var id = $(this).data('id_tipo');
        var nombre = $('#' + id).children('td[data-target=nombre]').text();
        var contraseña = $('#' + id).children('td[data-target=contraseña]').text();
        var id_caseta = $('#' + id).children('td[data-target=id_caseta]').text();
        /* console.log("ID:", id);
        console.log("Nombre:", nombre);
        console.log("Caseta:", id_caseta);
        console.log("Caseta:", contraseña); */
        $('#nombre').val(nombre);
        $('#contraseña').val(contraseña);
        $('#id_caseta').val(id_caseta);
        $('#id_tipo').val(id);
        $('#editarmodalGuardia').modal('toggle');

    })
})

$('#save_tipo').click(function () {
    var id = $('#id_tipo').val();
    var nombre = $('#nombre').val();
    var contraseña = $('#contraseña').val();
    var id_caseta = $('#id_caseta').val();
   /*  console.log("ID:", id);
    console.log("Nombre:", nombre); */
    $.ajax({
        url: 'index.php?p=admin/actions/actions_guardia/admin_updateGuardia',
        method: 'post',
        data: { nombre: nombre, contraseña: contraseña , id: id , id_caseta:id_caseta},
        success: function (response) {
            if (response.startsWith("Error")) {
                console.log("Respuesta del servidor:", response);
            } else {
                
                $('#' + id).children('td[data-target=nombre]').text(nombre);
                $('#' + id).children('td[data-target=contraseña]').text(contraseña);
                $('#' + id).children('td[data-target=id_caseta]').text(id_caseta);
                $('#editarmodalGuardia').modal('toggle');
            }

            
        }
    });
});


