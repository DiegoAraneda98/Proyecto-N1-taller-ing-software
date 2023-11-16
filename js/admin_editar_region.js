
$(document).ready(function () {
    $(document).on('click', 'a[data-role=update_region]', function () {
        var id = $(this).data('id_region');
        var region = $('#' + id).children('td[data-target=region]').text();
        var abreviatura = $('#' + id).children('td[data-target=abreviatura]').text();
        var capital = $('#' + id).children('td[data-target=capital]').text();

        console.log("ID:", id);
        console.log("Nombre:", region);
        console.log("Nombre:", abreviatura);
        console.log("Nombre:", capital);

        $('#region').val(region);
        $('#abreviatura').val(abreviatura);
        $('#capital').val(capital);
        $('#id_region').val(id);
        $('#editarmodalRegiones').modal('toggle');

    })
})

$('#save_region').click(function () {
    var id = $('#id_region').val();
    var region = $('#region').val();
    var abreviatura = $('#abreviatura').val();
    var capital = $('#capital').val();
    console.log("ID:", id);
    console.log("Nombre:", region);
    console.log("Nombre:", abreviatura);
    console.log("Nombre:", capital);
    $.ajax({
        url: 'index.php?p=admin/actions/actions_regiones/admin_update_region',
        method: 'post',
        data: { region: region, abreviatura: abreviatura, capital: capital, id: id },
        success: function (response) {
            if (response.startsWith("Error")) {
                console.log("Respuesta del servidor:", response);
                
            } else {
                console.log('exito');
                console.log(id);
                $('#' + id).children('td[data-target=region]').text(region);
                $('#' + id).children('td[data-target=abreviatura]').text(abreviatura);
                $('#' + id).children('td[data-target=capital]').text(capital);
                
                $('#editarmodalRegiones').modal('toggle');
            }

            
        }
    });
});


