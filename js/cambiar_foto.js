const defaultFile = 'img/perfil_defualt.png';
const file = document.getElementById('foto');
const img = document.getElementById('img');

file.addEventListener('change', e => {
    if (e.target.files[0]) {
        const reader = new FileReader();
        reader.onload = function (e) {
            img.src = e.target.result;
        }

        reader.readAsDataURL(e.target.files[0]);

    } else {
        img.src = defaultFile;
    }
});

function guardarImagen() {
    const formData = new FormData($('#imagenForm')[0]);

    $.ajax({
        type: 'POST',
        url: 'index.php?p=perfil/actions/guardarImagen', // Ajusta la ruta según tu estructura de archivos.
        data: formData,
        contentType: false,
        processData: false,
        success: function (response) {
            Swal.fire({
                title: "Imagen actualizada!",
                text: "Tú imagen a sido guardada con exito!",
                icon: "success"
                });
        },
        error: function (error) {
            alert('Error al guardar la imagen.');
        }
    });
}