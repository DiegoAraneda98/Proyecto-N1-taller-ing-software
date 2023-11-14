
// Camara Scanner

var scanner = null;

function toggleCamera() {
    var divVideo = document.getElementById('divvideo');
    const resultadoElement = document.getElementById('dato_QR');

    if (scanner === null) {
        // Inicializar el scanner si no está encendido
        Instascan.Camera.getCameras().then(function (cameras) {
            if (cameras.length > 0) {
                scanner = new Instascan.Scanner({
                    video: document.getElementById('preview'),
                    scanPeriod: 5,
                    mirror: true
                });

                scanner.start(cameras[0]);
                document.getElementById('preview').classList.remove('d-none'); // Mostrar el video

                // Ajustar el tamaño del div al 100% del área de la cámara
                divVideo.style.width = '100%';
                divVideo.style.height = '100%';

                document.getElementById('toggleCamera').textContent = 'Apagar lector QR';

                scanner.addListener('scan', function (contenidoQR) {
                    const datosSeparados = contenidoQR.split(' ');

                    // Verificar si se obtuvieron dos partes
                    if (datosSeparados.length === 2) {
                        const idUsuario = datosSeparados[0];
                        const patente = datosSeparados[1];

                        // Función para realizar la solicitud AJAX
                        function enviarDatosAJAX(idUsuario, patente) {
                            var xhr = new XMLHttpRequest();
                            var url = "insert_historial.php";
                            var params = "id_usuario=" + idUsuario + "&patente=" + patente;

                            xhr.open("POST", url, true);
                            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                            xhr.onreadystatechange = function () {
                                if (xhr.readyState === 4 && xhr.status === 200) {
                                    // Aquí puedes manejar la respuesta del servidor si es necesario
                                    console.log(xhr.responseText);
                                }
                            };

                            xhr.send(params);
                        }


                    } else {
                        resultadoElement.innerHTML = 'Formato de código QR no válido.';
                    }

                });
            } else {
                console.error('No se han encontrado cámaras.');
                alert('No se encontraron cámaras.');
            }
        }).catch(function (e) {
            alert(e);
        });
    } else {
        // Si está encendido, entonces apagar
        scanner.stop();
        scanner = null; // Restablece el objeto scanner
        document.getElementById('toggleCamera').textContent = 'Encender lector QR';

        // Restablecer el tamaño del div al 100% del área
        divVideo.style.width = '100%';
        divVideo.style.height = '100%';

        // Ocultar el video
        document.getElementById('preview').classList.add('d-none');
    }


}

