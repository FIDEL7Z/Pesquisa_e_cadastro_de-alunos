<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de cadastro</title>
    <link rel="stylesheet" type="text/css" href="css/cadastro.css">
    <link rel="icon" href="https://www.unipe.edu.br/wp-content/uploads/2023/02/marcaUnipeFavicon.svg" sizes="32x32">

</head>

<body>
    <h1>Cadastrar Aluno</h1>
    <form id="cadastroForm" action="cadastro_script.php" method="POST" onsubmit="return validarFormulario()">
        <label for="nome">Nome completo:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="matricula">Matrícula do Aluno:</label>
        <input type="text" id="matricula" name="matricula" required>

        <label for="nota_1">Nota 1:</label>
        <input type="text" id="nota_1" name="nota_1" required>

        <label for="nota_2">Nota 2:</label>
        <input type="text" id="nota_2" name="nota_2" required>

        <input type="submit" value="Salvar">
    </form>
    <a href="logado.php" role="button">Voltar para o início</a>

    <script src="js/funcao_validação_cadastro.js"></script>
</body>

</html>