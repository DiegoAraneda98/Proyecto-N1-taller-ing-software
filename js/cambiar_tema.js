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
    const elementosConLetra = document.querySelectorAll("body"); 

    elementosConLetra.forEach(elemento => {
        let fontSize = window.getComputedStyle(elemento, null).getPropertyValue('font-size');
        fontSize = parseFloat(fontSize) * 1.2; 
        elemento.style.fontSize = `${fontSize}px`;
    });
}

const disminuirTamanioLetra = () => {
    const elementosConLetra = document.querySelectorAll("body"); 

    elementosConLetra.forEach(elemento => {
        let fontSize = window.getComputedStyle(elemento, null).getPropertyValue('font-size');
        fontSize = parseFloat(fontSize) / 1.2; 
        elemento.style.fontSize = `${fontSize}px`;
    });
}

const cambiarTamanioLetra = (accion) => {
    // Función para cambiar el tamaño de la letra en respuesta a un botón
    if (accion === 'aumentar') {
        aumentarTamanioLetra();
    } else if (accion === 'disminuir') {
        disminuirTamanioLetra();
    }
}

// Asignar las funciones a los eventos de clic de los botones correspondientes
document.querySelector("#dl-icon2").addEventListener("click", () => cambiarTamanioLetra('aumentar'));
document.querySelector("#dl-icon3").addEventListener("click", () => cambiarTamanioLetra('disminuir'));

/* 
const aumentarTamanioLetra = () => {
    const elementosConLetra = document.querySelectorAll("body"); 

    elementosConLetra.forEach(elemento => {
        let fontSize = window.getComputedStyle(elemento, null).getPropertyValue('font-size');
        fontSize = parseFloat(fontSize) * 1.2; 
        elemento.style.fontSize = `${fontSize}px`;
    });
}

const disminuirTamanioLetra = () => {
    const elementosConLetra = document.querySelectorAll("body"); 

    elementosConLetra.forEach(elemento => {
        let fontSize = window.getComputedStyle(elemento, null).getPropertyValue('font-size');
        fontSize = parseFloat(fontSize) / 1.2; 
        elemento.style.fontSize = `${fontSize}px`;
    });
}

const cambiarTamanioLetra = () => {
    // Función para cambiar el tamaño de la letra en respuesta a un botón
    aumentarTamanioLetra();
}

// Asigna estas funciones al evento de clic del botón correspondiente
document.querySelector(".btn").addEventListener("click", cambiarTamanioLetra);
 */