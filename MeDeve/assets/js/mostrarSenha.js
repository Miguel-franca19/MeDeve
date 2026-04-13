const clicado = document.getElementById("clicado");
const campo = document.getElementById("senha_usuario");

clicado.addEventListener("click", () => {
    if (campo.getAttribute("type") == "password") {
        campo.setAttribute("type", "text");
        clicado.innerHTML = "aberto";
    } else {
        campo.setAttribute("type", "password");
        clicado.innerHTML = "fechado"
    }
})