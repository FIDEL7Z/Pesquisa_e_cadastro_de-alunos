<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Cadastro</title>
    <link rel="stylesheet" type="text/css" href="css/edit_script.css">
    <link rel="icon" href="https://www.unipe.edu.br/wp-content/uploads/2023/02/marcaUnipeFavicon.svg" sizes="32x32">
</head>

<body>
    <?php
    include "conexao.php";
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $nota_1 = $_POST['nota_1'];
    $nota_2 = $_POST['nota_2'];

    $sql = "UPDATE `pessoas` SET `nome` = '$nome', `matricula` = '$matricula', `nota_1` = '$nota_1', `nota_2` = '$nota_2'  WHERE cod_pessoa = $id";

    echo "<h1>Alteração de Cadastro Realizado</h1>";

    if (mysqli_query($conn, $sql)) {
        echo "<p>$nome alterado com sucesso!</p>";
    } else {
        echo "<p>$nome não alterado!</p>";
    }
    ?>

    <a href='logado.php'>Voltar</a>
</body>

</html>