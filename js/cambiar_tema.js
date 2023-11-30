const temaOscuro = () =>{

    document.querySelector("body").setAttribute("data-bs-theme" , "dark");
    document.querySelector("#dl-icon").setAttribute("class" , "bi bi-sun-fill");
}


const temaClaro = () =>{

    document.querySelector("body").setAttribute("data-bs-theme" , "light");
    document.querySelector("#dl-icon").setAttribute("class" , "bi bi-moon-fill");
}


const cambiarTema = () =>{

    document.querySelector("body").getAttribute("data-bs-theme") === "light" ?
    temaOscuro() : temaClaro();
}







const aumentarTamanioLetra = () => {
    const elementosConLetra = document.querySelector("body"); // Reemplaza "cambiar-letra" con la clase de los elementos cuyo tamaño de letra quieres cambiar

    elementosConLetra.forEach(elemento => {
        let fontSize = window.getComputedStyle(elemento, null).getPropertyValue('font-size');
        fontSize = parseFloat(fontSize) * 1.2; // Puedes ajustar el factor de aumento según tus necesidades
        elemento.style.fontSize = `${fontSize}px`;
    });
}

const disminuirTamanioLetra = () => {
    const elementosConLetra = document.querySelectorAll("body"); // Reemplaza "cambiar-letra" con la clase de los elementos cuyo tamaño de letra quieres cambiar

    elementosConLetra.forEach(elemento => {
        let fontSize = window.getComputedStyle(elemento, null).getPropertyValue('font-size');
        fontSize = parseFloat(fontSize) / 1.2; // Puedes ajustar el factor de disminución según tus necesidades
        elemento.style.fontSize = `${fontSize}px`;
    });
}

const cambiarTamanioLetra = () => {
    // Función para cambiar el tamaño de la letra en respuesta a un botón
    aumentarTamanioLetra();
}

// Asigna estas funciones al evento de clic del botón correspondiente
document.querySelector("#letra-icon").addEventListener("click", cambiarTamanioLetra);
