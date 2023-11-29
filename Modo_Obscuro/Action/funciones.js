const modoobscuro = () => {
   document.querySelector("body").setAttribute("dara-bs-theme","dark");
   document.querySelector("#icono_modo").setAttribute("class","sun-fill");
}
const modoclaro = () => {
    document.querySelector("body").setAttribute("dara-bs-theme","light");
    document.querySelector("#icono_modo").setAttribute("class","moon-stars-fill");
 }
 
 const cambiomodo = (){
    document.querySelector("body").getAttribute("data-bs-theme") ==="light"?
     modoobscuro():modoclaro();
 }