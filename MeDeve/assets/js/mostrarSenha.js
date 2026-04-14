const clicado = document.getElementById("clicado");
const campo = document.getElementById("senha_usuario");

clicado.addEventListener("click", () => {
    if (campo.getAttribute("type") == "password") {
        campo.setAttribute("type", "text");
        clicado.setAttribute("src", "assets/img/olho-aberto.png")
    } else {
        campo.setAttribute("type", "password");
        clicado.setAttribute("src", "assets/img/olho-fechado.png")
    }
})