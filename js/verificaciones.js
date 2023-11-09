
    function filtro() {  /* funcion solo para numeros */
        var tecla = event.key;
        if (!['0', '1', '2','3', '4', '5', '6', '7', '8', '9', 'Backspace'].includes(tecla))
            event.preventDefault()
    }

    function filtroLetras() {  /* funcion solo para letras */
        var tecla = event.key;
        if (!/^[a-zA-Z\s]*$/.test(tecla)) {
            event.preventDefault();
        }
    }

    function validarEmailConDominioUCSC() {
        var email = document.getElementById('correo').value;
        
        // Utiliza una expresión regular para verificar que el dominio "ucsc" esté presente después del "@" en cualquier posición
        var regex = /@.*ucsc\.cl$/i; // El modificador "i" hace que la búsqueda sea insensible a mayúsculas y minúsculas
        
        if (!regex.test(email)) {
            alert('El email debe contener el dominio "ucsc.cl".');
        }
    }


   