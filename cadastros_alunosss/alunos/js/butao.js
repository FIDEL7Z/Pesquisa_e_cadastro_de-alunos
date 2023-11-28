function mostrarOcultarSenha() {
    var senhaInput = document.getElementById("senha");
    var botaoMostrarSenha = document.getElementById("mostrarSenha");

    if (senhaInput.type === "password") {
        senhaInput.type = "text";
        botaoMostrarSenha.innerHTML = '<i class="bi bi-eye-slash-fill"></i>';
    } else {
        senhaInput.type = "password";
        botaoMostrarSenha.innerHTML = '<i class="bi bi-eye-fill"></i>';
    }
}
