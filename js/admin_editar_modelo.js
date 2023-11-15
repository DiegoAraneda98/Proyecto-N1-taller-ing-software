
$(document).ready(function () {
    $(document).on('click', 'a[data-role=update_modelo]', function () {
        var id = $(this).data('id_modelo');
        var modelo = $('#' + id).children('td[data-target=modelo]').text();
  
        console.log("ID:", id);
        console.log("Nombre:", modelo);


        $('#modelo').val(modelo);
        $('#id_modelo').val(id);
        $('#editarmodalmodelo').modal('toggle');

    })
})

$('#save_modelo').click(function () {
    var id = $('#id_modelo').val();
    var modelo = $('#modelo').val();
   
    console.log("ID:", id);
    console.log("Nombre:", modelo);

    $.ajax({
        url: 'index.php?p=admin/actions/actions_modelos/admin_update_modelo',
        method: 'post',
        data: { modelo: modelo, id: id },
        success: function (response) {
            if (response.startsWith("Error")) {
                console.log("Respuesta del servidor:", response);
                
            } else {
                console.log('exito');
                console.log(id);
                $('#' + id).children('td[data-target=modelo]').text(modelo);
                
                $('#editarmodalmodelo').modal('toggle');
            }

            
        }
    });
});


