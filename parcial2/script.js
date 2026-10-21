const formpd = document.querySelector("#form-horno");
const aviso = document.querySelector("#aviso-horno");

function revisar(event){
  

const nom = document.querySelector("#nombre").value;
const corr = document.querySelector("#correo").value;

if(nom === "" || corr === ""){

    event.preventDefault();
    aviso.textContent ="Sin tu nombre y tu correo no anotamos el pedido.";
    aviso.classList.add("error");
    aviso.classList.remove("exito");
}
else if(corr.includes("@") === false){

    event.preventDefault();
    aviso.textContent ="A ese correo le falta el arroba - corregilo antes de enviar.";
    aviso.classList.add("error");
    aviso.classList.remove("exito");
}
else{
    aviso.textContent ="Pedido tomado - te atiende Raul Bernardo Luna Tufiño";
    aviso.classList.add("exito");
    aviso.classList.remove("error");
    formpd.submit();
}
}

formpd.addEventListener("submit", revisar);
