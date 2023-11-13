
$(document).ready(function () {
    $(document).on('click', 'a[data-role=eliminar]', function () {
        var id = $(this).data('id');
        
        console.log("ID:", id);

        $('#id').val(id);
        $('#eliminarmodal').modal('toggle');

    })
})

$('#delete').click(function () {
    var id = $('#id').val();
   
    console.log("ID:", id);

    $.ajax({
        url: 'index.php?p=admin/actions/actions_Vehiculos/admin_deleteVehiculos',
        method: 'post',
        data: { id: id },
        success: function (response) {
            if (response.startsWith("Error")) {
                console.log("Respuesta del servidor:", response);
                
            } else {
                console.log('exito');
                window.location.href= 'index.php?p=admin/admin_vehiculos';
                $('#eliminarmodal').modal('toggle');
            }

            
        }
    });
});


