// Exportar tabla

$(document).ready(function () {
    var exportButton = document.getElementById('exportButton');
    if (exportButton) {
        exportButton.addEventListener('click', function () {
            Export();
        });
    }
});

function Export() {
    window.open("exportar.php", '_blank');
    $('#exportModal').modal('hide');
}
