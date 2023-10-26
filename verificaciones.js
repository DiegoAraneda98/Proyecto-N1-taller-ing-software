
    function filtro() {
        var tecla = event.key;
        if (!['0', '1', '2','3', '4', '5', '6', '7', '8', '9', 'Backspace'].includes(tecla))
            event.preventDefault()
    }
