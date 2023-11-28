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
        include "conexao.php";

        $nome = $_POST['nome'];
        $matricula = $_POST['matricula'];
        $nota_1 = $_POST['nota_1'];
        $nota_2 = $_POST['nota_2'];

        $sql = "INSERT INTO `pessoas` (`nome`, `matricula`, `nota_1`, `nota_2`) 
    VALUES ('$nome','$matricula','$nota_1','$nota_2')";

        echo "<h1>Cadastro</h1>";

        if (mysqli_query($conn, $sql)) {
            echo "<p>$nome cadastrado com sucesso!</p>";
        } else {
            echo "<p>$nome não foi cadastrado!</p>";
        }
        ?><a href='logado.php'>Voltar</a></body>

</html>