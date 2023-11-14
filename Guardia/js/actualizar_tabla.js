// Actualizar tabla

function actualizarTabla(data) {
    document.getElementById('historialBody').innerHTML = "";

    for (var i = 0; i < data.length; i++) {
        var row = data[i];
        var newRow = "<tr>";
        newRow += "<td>" + row.run + "</td>";
        newRow += "<td>" + row.nombre + "</td>";
        newRow += "<td>" + row.correo + "</td>";
        newRow += "<td>" + row.patente + "</td>";
        newRow += "<td>" + row.horario_ingreso + "</td>";
        newRow += "</tr>";
        document.getElementById('historialBody').innerHTML += newRow;
    }
}

function actualizarTabla_ajax() {
    $.ajax({
        url: 'insert_historial.php',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            actualizarTabla(data);
        },
        error: function (error) {
            console.log(error);
        }
    });
}

document.addEventListener('DOMContentLoaded', function () {
    actualizarTabla_ajax();
});
