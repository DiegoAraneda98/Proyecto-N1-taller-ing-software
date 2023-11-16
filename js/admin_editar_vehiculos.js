
$(document).ready(function () {
    $(document).on('click', 'a[data-role=update-vehiculos]', function () {
        var id = $(this).data('id_vehiculo');
        var patente = $('#' + id).children('td[data-target=patente]').text();
        var modelo = $('#' + id).children('td[data-target=modelo]').text();
        var color = $('#' + id).children('td[data-target=color]').text();
        var tipo_vehiculo = $('#' + id).children('td[data-target=tipo_vehiculo]').text();

        $('#patente').val(patente);
        $('#modelo').val(modelo);
        $('#color').val(color);
        $('#tipo_vehiculo').val(tipo_vehiculo);
        $('#id_vehiculo').val(id);
        $('#editarmodalVehiculos').modal('toggle');
        

    })
})


$('#save-vehiculos').click(function () {
    var id = $('#id_vehiculo').val();
    var patente = $('#patente').val();
    var modelo = $('#modelo').val();
    var color = $('#color').val();
    var tipo_vehiculo = $('#tipo_vehiculo').val();

    $.ajax({
        url: 'pages/admin/actions/actions_Vehiculos/admin_updateVehiculos.php',
        method: 'post',
        data: { patente: patente, modelo: modelo, color: color, tipo_vehiculo: tipo_vehiculo, id: id },
        success: function (response) {
            $('#' + id).children('td[data-target=patente]').text(patente);
            $('#' + id).children('td[data-target=modelo]').text(modelo);
            $('#' + id).children('td[data-target=color]').text(color);
            $('#' + id).children('td[data-target=tipo_vehiculo]').text(tipo_vehiculo);
            $('#editarmodalVehiculos').modal('toggle');

            
        }
    });
});