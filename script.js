const corpus = document.querySelector("body");
const lumin = document.querySelector("#modoilum");
let oscuro = false
function cambio() {
    corpus.classList.toggle("negro");

oscuro = !oscuro;

if (oscuro){
    lumin.textContent = "Modo Claro";
}
else{
    lumin.textContent = "Modo Oscuro";
}
}
lumin.addEventListener("click", cambio);