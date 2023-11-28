<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar</title>
    <link rel="stylesheet" type="text/css" href="css/pesquisa.css">
    <link rel="icon" href="https://www.unipe.edu.br/wp-content/uploads/2023/02/marcaUnipeFavicon.svg" sizes="32x32">
</head>

<body>
    <?php
    $pesquisa = $_POST['busca'] ?? '';
    include "conexao.php";
    $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";
    $dados = mysqli_query($conn, $sql);
    ?>

    <h1>Pesquisar</h1>
    <nav>
        <form action="pesquisa.php" method="POST">
            <input type="search" placeholder="Nome" name="busca">
            <button type="submit">Pesquisar</button>
        </form>
    </nav>

    <table>
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Matricula</th>
                <th scope="col">Nota_1</th>
                <th scope="col">Nota_2</th>
                <th scope="col">Média</th>
                <th scope="col">Funções</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($linha = mysqli_fetch_assoc($dados)) {
                $cod_pessoa = $linha['cod_pessoa'];
                $nome = $linha['nome'];
                $matricula = $linha['matricula'];
                $nota_1 = $linha['nota_1'];
                $nota_2 = $linha['nota_2'];
                $media = ($nota_1 + $nota_2) / 2;
                echo "<tr>
                        <th scope='row'>$nome</th>
                        <td>$matricula</td>
                        <td>$nota_1</td>
                        <td>$nota_2</td>
                        <td>$media</td>
                        <td>
                            <a href='editar.php?id=$cod_pessoa'>Editar</a>
                            <a href='#' onclick='confirmarExclusao($cod_pessoa, \"$nome\")'>Excluir</a>
                        </td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>

    <a href="logado.php" class="button">Voltar para o início</a>

    <script src="js/funcao_excluir.js"></script>
</body>

</html>