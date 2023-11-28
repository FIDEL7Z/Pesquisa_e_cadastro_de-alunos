<!DOCTYPE html>
<html>

<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/card.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="icon" href="https://www.unipe.edu.br/wp-content/uploads/2023/02/marcaUnipeFavicon.svg" sizes="32x32">
</head>

<body>
    <div class="container">
        <div class="login-form">
            <h1>Login</h1>
            <form method="post" action="login_script.php">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="nome" id="nomelogin" name="nomelogin" required>
                </div>
                <div class="form-group password-group">
                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" required>
                    <button id="mostrarSenha" type="button" onclick="mostrarOcultarSenha()"><i class="bi bi-eye-fill"></i></button>
                </div>
                <button type="submit"> Logar </a> </button>
            </form>
            <p>Não possui uma conta? <a href="cadastro_login.php">Cadastre-se</a></p>
        </div>
    </div>
    <div class="social-card">
        <p><i class="bi bi-pc-display-horizontal"></i></i> Developers <i class="bi bi-code-square"></i></p>
        <div class="creator-info">
            <p>Jefferson Fidelis</p>
            <a href="https://github.com/FIDEL7Z" target="_blank" title="GitHub"><i class="bi bi-github"></i></a>
            <a href="https://www.linkedin.com/in/jefferson-fidelis-16bb091b1/" target="_blank" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
            <a href="https://www.instagram.com/fidel7z/" target="_blank" title="Instagram"><i class="bi bi-instagram"></i></a>
        </div>
        <div class="creator-info">
            <p>Hugo Almeda</p>
            <a href="https://www.linkedin.com/in/hugo-halmeida/" target="_blank" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
            <a href="https://www.instagram.com/hugoalmx/" target="_blank" title="Instagram"><i class="bi bi-instagram"></i></a>
        </div>
    </div>
    <script src="js/butao.js"></script>
</body>

</html>