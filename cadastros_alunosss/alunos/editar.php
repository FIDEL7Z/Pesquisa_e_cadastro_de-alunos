<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="css/editar.css">
    <link rel="icon" href="https://www.unipe.edu.br/wp-content/uploads/2023/02/marcaUnipeFavicon.svg" sizes="32x32">
</head>

<body>

    <?php
    include "conexao.php";
    $id = $_GET['id'] ?? '';
    $sql = "SELECT * FROM pessoas WHERE cod_pessoa = $id";

    $dados = mysqli_query($conn, $sql);
    $linha = mysqli_fetch_assoc($dados);
    ?>

    <h1>Cadastro</h1>
    <form action="edit_script.php" method="POST" onsubmit="return validarFormulario()">
        <label for="nome">Nome completo:</label>
        <input type="text" id="nome" name="nome" required value="<?php echo $linha['nome']; ?>">

        <label for="matricula">Matrícula:</label>
        <input type="text" id="matricula" name="matricula" required value="<?php echo $linha['matricula']; ?>">

        <label for="nota_1">Nota 1:</label>
        <input type="text" id="nota_1" name="nota_1" required value="<?php echo $linha['nota_1']; ?>">

        <label for="nota_2">Nota 2:</label>
        <input type="text" id="nota_2" name="nota_2" required value="<?php echo $linha['nota_2']; ?>">

        <input type="submit" value="Salvar alterações">
        <input type="hidden" name="id" value="<?php echo $linha['cod_pessoa']; ?>">
    </form>

    <a href="pesquisa.php" role="button">Voltar para o início</a>
    <script src="js/validacao_editar.js"></script>

</body>

</html>