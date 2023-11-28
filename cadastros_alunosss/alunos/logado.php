<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>
    <link rel="stylesheet" type="text/css" href="css/Pagina_logada.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="icon" href="https://www.unipe.edu.br/wp-content/uploads/2023/02/marcaUnipeFavicon.svg" sizes="32x32">
</head>

<body>
    <div class="content">
        <?php
        session_start();
        ?>

        <img src="img/UNIPE1.jpg" alt="Imagem do Usuário" class="profile-image">
        <div class="user-name">Bem-Vindo, <?php echo isset($_SESSION['nomelogin']) ? $_SESSION['nomelogin'] : ''; ?></div>
        <h1>Bem-Vindo ao Cadastro de Alunos</h1>

        <p>Explore as funcionalidades disponíveis:</p>
        <div class="buttons">
            <a href="cadastro.php" class="btn">Cadastrar Alunos</a>
            <a href="pesquisa.php" class="btn">Pesquisar Alunos</a>
            <a href="index.php" class="btn-back">Voltar para o Login</a>
        </div>

        <div class="clock">
            <div id="time"></div>
        </div>

        <script>
            function getCurrentTime() {
                $.ajax({
                    url: 'http://worldtimeapi.org/api/ip',
                    dataType: 'json',
                    success: function(data) {
                        var time = new Date(data.utc_datetime);
                        var hours = time.getHours().toString().padStart(2, '0');
                        var minutes = time.getMinutes().toString().padStart(2, '0');
                        var seconds = time.getSeconds().toString().padStart(2, '0');
                        var formattedTime = hours + ':' + minutes + ':' + seconds;
                        $('#time').html('Horário Atual: <span class="animated">' + formattedTime + '</span>');
                    }
                });
            }

            setInterval(getCurrentTime, 1000);

            getCurrentTime();
        </script>
    </div>
</body>

</html>