function validarFormulario() {
    var nome = document.getElementById('nome').value;
    var matricula = document.getElementById('matricula').value;
    var nota1 = document.getElementById('nota_1').value;
    var nota2 = document.getElementById('nota_2').value;

    if (!validarNome(nome) || !validarMatricula(matricula) || !validarNota(nota1) || !validarNota(nota2)) {
        alert('Por favor, preencha os campos corretamente.');
        return false;
    }

    return true;
}

function validarNome(nome) {
    return nome.trim() !== '' && /^[A-Za-zÀ-ÖØ-öø-ÿ\s]+$/.test(nome);
}

function validarMatricula(matricula) {
    return matricula.trim() !== '' && /^[0-9]+$/.test(matricula);
}

function validarNota(nota) {
    return nota.trim() !== '' && /^[0-9]+(\.[0-9]{1,2})?$/.test(nota);
}

