const texto = document.querySelector("#mensaje");
const boton = document.querySelector("#btn-confirmar");
function cambio() {
    texto.classList.toggle("oculto");
    texto.textContent = "Encargo recibido - te atiende Raul Bernardo Luna Tufiño";
}
boton.addEventListener("click", cambio);