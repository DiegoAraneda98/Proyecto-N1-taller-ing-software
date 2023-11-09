<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lector de Código QR con Instascan</title>
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
</head>

<body>
    <h1>Lector de Código QR</h1>
    <video id="preview"></video>
    <div id="resultado"></div>

    <script>
        // Obtener el elemento de video y el contenedor de resultados
        const videoElement = document.getElementById('preview');
        const resultadoElement = document.getElementById('resultado');

        // Crear un nuevo escáner de Instascan
        const scanner = new Instascan.Scanner({
            video: videoElement
        });

        // Manejar el evento de escaneo
        scanner.addListener('scan', function (contenidoQR) {
            // Separar las palabras utilizando el espacio como separador
            const palabras = contenidoQR.split(' ');

            // Verificar si se obtuvieron dos palabras
            if (palabras.length === 2) {
                const idUsuario = palabras[0];
                const patente = palabras[1];

                // Mostrar los datos del código QR en el contenedor de resultados
                resultadoElement.innerHTML = `id_usuario: ${idUsuario}, patente: ${patente}`;

                // También puedes realizar acciones adicionales con el contenido del código QR si es necesario
                // Por ejemplo, puedes enviar los datos a un servidor para su procesamiento.
            } else {
                resultadoElement.innerHTML = 'Formato de código QR no válido.';
            }
        });

        // Iniciar el escáner cuando el dispositivo de video esté listo
        Instascan.Camera.getCameras().then(function (cámaras) {
            if (cámaras.length > 0) {
                scanner.start(cámaras[0]);
            } else {
                console.error('No se encontraron cámaras.');
            }
        }).catch(function (error) {
            console.error(error);
        });
    </script>
</body>

</html>
