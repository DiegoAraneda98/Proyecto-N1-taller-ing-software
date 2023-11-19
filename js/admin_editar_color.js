
$(document).ready(function () {
    $(document).on('click', 'a[data-role=update_color]', function () {
        var id = $(this).data('id_color');
        var color = $('#' + id).children('td[data-target=color]').text();
  
        console.log("ID:", id);
        console.log("Nombre:", color);


        $('#color').val(color);
        $('#id_color').val(id);
        $('#editarmodalcolor').modal('toggle');

    })
})

$('#save_color').click(function () {
    var id = $('#id_color').val();
    var color = $('#color').val();
   
    console.log("ID:", id);
    console.log("Nombre:", color);

    $.ajax({
        url: 'index.php?p=admin/actions/actions_colores/admin_update_color',
        method: 'post',
        data: { color: color, id: id },
        success: function (response) {
            if (response.startsWith("Error")) {
                console.log("Respuesta del servidor:", response);
                
            } else {
                console.log('exito');
                console.log(id);
                $('#' + id).children('td[data-target=color]').text(color);
                
                $('#editarmodalcolor').modal('toggle');
            }

            
        }
    });
});


