<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/stylelogin.css">
    <title>Login</title>
</head>
<body>
    <div class="header">
        <div class="logo">
            <a href="index.php">
                <img src="img/momologo.png" alt="">
            </a>
        </div>
    </div>
    <div class="login_td">
    <div class="login_body">
        <i class="gif"></i>
        <div class="login_box">
                <div class="login_botao">
                <h2>Entrar</h2>
                <button><a href="cadastropessoa.php" class="pagcadastro">Cadastre-se<a></button>
                </div>
            <form method="POST" action="php/ploginpessoa.php">
                <div class="input_box">
                    <input type="email" name="email_cliente" placeholder="Email" required>
                </div>

                <div class="input_box">
                    <input type="password" name="senha_cliente" placeholder="Senha" required>
                </div>

                <div>
                    <button class="submit" name="btnLogin">Entrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

    <a href="index.php" id="home">Voltar</a>
</body>
</html>