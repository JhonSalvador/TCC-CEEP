
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/stylecadastro.css">
    <title>Formulário de cadastro</title>
</head>
<body>
    <div class="header">
        <div class="logo">
            <a href="index.php">
                <img src="img/momologo.png" alt="">
            </a>
        </div>
    </div>
        <div class="form">
            <form method="post" action="./php/pcadastropessoa.php">
                <div class="form_header">
                    <div class="titulo">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login_botao">
                        <button><a href="loginpessoa.php">Entrar</a></button>
                    </div>
                </div>
                    
                <div class="input_group">
                    <div class="input_box">
                        <label for="name">Nome</label>
                        <input id="nome_cliente" type="text" name="nome_cliente" placeholder="Nome" required>
                    </div>
                    <div class="input_box">
                        <label for="email">E-Mail</label>
                        <input id="email_cliente" type="email" name="email_cliente" placeholder="Email" required>
                    </div>
                    <div class="input_box">
                        <label for="number">Celular</label>
                        <input id="telefone_cliente" type="text" name="telefone_cliente" placeholder="(xx) xxxx-xxxx" required>
                    </div>
                    <div class="input_box">
                        <label for="password">Senha</label>
                        <input id="senha_cliente" type="password" name="senha_cliente" placeholder="Digite sua senha" required>
                    </div>
                    <div class="input_box">
                        <label for="confirmpassword">Confirme sua senha</label>
                        <input id="senha_cliente" type="password" name="senha_cliente" placeholder="Confirme sua senha" required>
                    </div>
                    <div class="cadastro_botao">
                    <button type="submit" href="./loginpessoa.php">Cadastrar-se</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <a href="index.php" id="home">Voltar</a>
</body>
</html>