$(document).ready(function () {
    $(document).on('click', 'a[data-role=qr]', function () {
        var id = $(this).data('id_vehiculo');
        var patente = $('#' + id).children('td[data-target=patente]').text();
        console.log(id);
        console.log(patente);

        // Realiza una solicitud AJAX POST para obtener el código QR
        $.ajax({
            type: 'POST',
            url: 'pages/vehiculos/actions/generar_qr.php',
            data: { id_vehiculo: id, patente: patente },
            dataType: 'json',
            success: function (data) {
                // Carga el código QR en la imagen del modal
                $('#codigo-qr').attr('src', 'data:image/png;base64,' + data.codigoQR);

                // Muestra la patente en el modal
                $('#patente-modal').text(data.patente);
            },
            error: function () {
                // Maneja errores si es necesario
            }
        });

        $('#patente').val(patente);
        $('#id_vehiculo').val(id);
        $('#qrModal').modal('toggle');
    });
});


