<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login_script.css">
    <link rel="icon" href="https://www.unipe.edu.br/wp-content/uploads/2023/02/marcaUnipeFavicon.svg" sizes="32x32">
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            <?php
            session_start();
            include "conexao_login.php";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nomelogin = $_POST['nomelogin'];
                $senha = $_POST['senha'];

                $sql = "SELECT * FROM ID_nome WHERE nomelogin = '$nomelogin' AND senha = '$senha'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) == 1) {
                    $_SESSION['nomelogin'] = $nomelogin;
                    header("Location: logado.php");
                } else {
                    echo "<div class='error-message'>Nome de login ou senha incorretos.</div>";
                    echo "<div class='button-container'><button onclick='history.go(-1)'>Voltar</button></div>";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>