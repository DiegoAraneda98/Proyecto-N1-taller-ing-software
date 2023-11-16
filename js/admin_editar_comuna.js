
$(document).ready(function () {
    $(document).on('click', 'a[data-role=update_comuna]', function () {
        var id = $(this).data('id_comuna');
        var comuna = $('#' + id).children('td[data-target=comuna]').text();
        var provincia = $('#' + id).children('td[data-target=provincia_id]').text();

        console.log("ID:", id);
        console.log("Nombre:", comuna);
        console.log("Nombre:", provincia);

        $('#comuna').val(comuna);
        $('#provincia').val(provincia);
        $('#id_comuna').val(id);
        $('#editarmodalComunas').modal('toggle');

    })
})

$('#save_comuna').click(function () {
    var id = $('#id_comuna').val();
    var comuna = $('#comuna').val();
    var provincia = $('#provincia_id').val();
    console.log("ID:", id);
    console.log("Nombre:", comuna);
    console.log("Nombre:", provincia);
    $.ajax({
        url: 'index.php?p=admin/actions/actions_comunas/admin_update_comuna',
        method: 'post',
        data: { comuna: comuna, provincia: provincia, id: id },
        success: function (response) {
            if (response.startsWith("Error")) {
                console.log("Respuesta del servidor:", response);
                
            } else {
                console.log('exito');
                console.log(id);
                $('#' + id).children('td[data-target=comuna]').text(comuna);
                $('#' + id).children('td[data-target=provincia_id]').text(provincia);
                
                $('#editarmodalComunas').modal('toggle');
            }

            
        }
    });
});


