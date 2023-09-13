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
            <form action="/">
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
                        <label for="firstname">Primeiro Nome</label>
                        <input id="firstname" type="text" name="firstname" placeholder="Primeiro nome" required>
                    </div>
                    <div class="input_box">
                        <label for="lastname">Sobrenome</label>
                        <input id="lastname" type="text" name="lastname" placeholder="Sobrenome" required>
                    </div>
                    <div class="input_box">
                        <label for="email">E-Mail</label>
                        <input id="email" type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="input_box">
                        <label for="number">Celular</label>
                        <input id="numer" type="text" name="number" placeholder="(xx) xxxx-xxxx" required>
                    </div>
                    <div class="input_box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="password" placeholder="Digite sua senha" required>
                    </div>
                    <div class="input_box">
                        <label for="confirmpassword">Confirme sua senha</label>
                        <input id="confirmpassword" type="password" name="confirmpassword" placeholder="Confirme sua senha" required>
                    </div>
                </div>

                <div class="gender_inputs">
                    <div class="gender_title">
                        <h6>Gênero</h6>
                    </div>
                    <div class="gender_group" required>
                        <div class="gender_input">
                            <input type="radio" id="female" name="gender">
                            <label for="female">Feminino</label>
                        </div>
                        <div class="gender_input">
                            <input type="radio" id="male" name="gender">
                            <label for="male">Masculino</label>
                        </div>
                    </div>
                </div>
                <div class="continue_button">
                    <button><a href="/">Criar cadastro</a></button>
                </div>
            </form>
        </div>
    </div>
    <a href="index.php" id="home">Voltar</a>
</body>
</html>