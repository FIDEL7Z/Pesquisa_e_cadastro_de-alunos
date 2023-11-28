<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão de Registro</title>
    <link rel="stylesheet" type="text/css" href="css/excluir.css">
    <link rel="icon" href="https://www.unipe.edu.br/wp-content/uploads/2023/02/marcaUnipeFavicon.svg" sizes="32x32">

</head>

<body>
    <?php
    include "conexao.php";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM pessoas WHERE cod_pessoa = $id";

        if (mysqli_query($conn, $sql)) {
            echo "<h1>Aluno Excluido</h1>";
            echo "<p>Registro excluído com sucesso!</p>";
        } else {
            echo "<h1>Exclusão de Registro</h1>";
            echo "<p>Erro ao excluir registro: " . mysqli_error($conn) . "</p>";
        }

        mysqli_close($conn);
    } else {
        echo "<h1>Exclusão de Registro</h1>";
        echo "<p>ID não especificado.</p>";
    }
    ?>

    <a href="pesquisa.php" role="button">Voltar</a>
</body>

</html>