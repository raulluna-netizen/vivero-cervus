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




const botonmenu = document.querySelector("#menu");
const men = document.querySelector("nav ul");
function menhambur(){
    men.classList.toggle("abierto");
}
botonmenu.addEventListener("click", menhambur);



const formpd = document.querySelector("#form-pedido");
const aviso = document.querySelector("#mensaje");

function revisar(event){
  
const nom = document.querySelector("#nombre").value;
const corr = document.querySelector("#correo").value;

if(nom === ""){
    event.preventDefault();
    aviso.textContent ="Nombre no ingresado";
    aviso.classList.add("error");
    aviso.classList.remove("exito");
}
else if(corr.includes("@") === false){
    event.preventDefault();
    aviso.textContent ="Correo no Ingresado, falta @";
    aviso.classList.add("error");
    aviso.classList.remove("exito");
}
else{
    aviso.textContent ="Pedido realizado con exito";
    aviso.classList.add("exito");
    aviso.classList.remove("error");
    formpd.submit();
}
}

formpd.addEventListener("submit", revisar);

