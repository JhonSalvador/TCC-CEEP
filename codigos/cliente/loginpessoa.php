<?php
//conexao
include_once "conexaobnc.php";
$pdo = connect();

//sessao
session_start();

//botao de envio dos dados
if(isset($_POST['btnLogin'])):
    
    $erros = [];
    $email_cliente = $_POST['email_cliente'];
    $senha_cliente = $_POST['senha_cliente'];

    if(empty($email_cliente) or empty($senha_cliente)):

        $erros[] = "<li> Os campos devem ser preenchidos! </li>";

    else:
        $sql = $pdo->prepare("SELECT * FROM tb_clientes WHERE email_cliente = :email_cliente");
        $sql->bindParam(':email_cliente', $email_cliente);
        $sql->execute();

        if($sql->rowCount() > 0):
            
            $sql = $pdo->prepare("SELECT * FROM tb_clientes WHERE email_cliente = :email_cliente AND senha_cliente = :senha_cliente");
            $sql->bindParam(':email_cliente', $email_cliente);
            $sql->bindParam(':senha_cliente', $senha_cliente);
            $sql->execute();

            if($sql->rowCount() == 1):
                $dados = $sql->fetch();
                $_SESSION['logado'] = true;
                $_SESSION['cod_cliente'] = $dados['cod_cliente'];
        
                if($dados['tipo_cliente'] == 'A'):
                    header("Location: ./admin/adminhome.php");
                    echo "<li>Logado com sucesso</li>";
                    
    
                else:
                    header("Location: ./homecliente.php");
                    echo "<li>Logado com sucesso</li>";
                endif;
            else:
                $erros[] = "<li>Usuario e senha incorretos</li>";
            endif;
        else:

            $erros[] = "<li> Usuário não existe </li>";

        endif;
    endif;
endif;
?>

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

        <!--mostra o erro-->

        <?php
        if(!empty($erros)):
        foreach($erros as $erro):
        echo $erro;
        endforeach;
        endif;
        ?>
    
        <!--mostra o erro-->
        
            <form method="POST" action="">
                <div class="input_box">
                    <input type="email" name="email_cliente" placeholder="Email">
                </div>

                <div class="input_box">
                    <input type="password" name="senha_cliente" placeholder="Senha">
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