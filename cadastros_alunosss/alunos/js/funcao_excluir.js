
function confirmarExclusao(cod_pessoa, nome) {
    var resposta = confirm("Deseja realmente excluir " + nome + "?");

    if (resposta) {
        window.location.href = "excluir.php?id=" + cod_pessoa;
    }
}
function validarNome() {
    var nome = document.getElementById('nome').value;
    if (/^\d+$/.test(nome)) {
        alert('O nome não pode conter números.');
        return false;
    }
    return true;
}
