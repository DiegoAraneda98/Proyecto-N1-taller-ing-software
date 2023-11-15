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


