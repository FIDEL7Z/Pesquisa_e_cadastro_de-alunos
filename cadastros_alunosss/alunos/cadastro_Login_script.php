<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/cadastro_script.css">
    <title>Cadastro de Aluno</title>
    <link rel="icon" href="https://www.unipe.edu.br/wp-content/uploads/2023/02/marcaUnipeFavicon.svg" sizes="32x32">
</head>

<body><?php
        include "conexao_login.php";

        $nomelogin = $_POST['nomelogin'];
        $senha = $_POST['senha'];


        $sql = "INSERT INTO `ID_nome` (`nomelogin`, `senha`) 
    VALUES ('$nomelogin','$senha')";

        echo "<h1>Cadastro</h1>";

        if (mysqli_query($conn, $sql)) {
            echo "<p>$nomelogin cadastrado com sucesso!</p>";
        } else {
            echo "<p>$nomelogin não foi cadastrado!</p>";
        }
        ?><a href='index.php'>Voltar</a></body>

</html>