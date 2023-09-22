<?php
require_once '../conexaobnc.php';
session_start();
$pdo = connect();

//sessao.

$cod_cliente = $_SESSION['cod_cliente'];
$sql = $pdo->prepare("SELECT * FROM tb_clientes WHERE cod_cliente = :cod_cliente");
$sql->bindParam(':cod_cliente', $cod_cliente);
$sql->execute();
$dados = $sql->fetchAll();


//verificacao de login.
if (!isset($_SESSION['logado'])) :
    header("Location: ../index.php");
endif;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
<!--Link para o css-->
    <link rel="stylesheet" href="css/adminhomestyle.css">
<!--Link para o fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">

    <!-- Começo da barra lateral de menu -->
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="img/momologo.png">
                    <h2>MO<span class="corlogo">MO</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>

            <div class="sidebar">
                <a href="adminhome.php">
                    <i class="fa-solid fa-list"></i>
                    <h3>Dashboard</h3>
                </a>
                <a href="listagemcliente.php" class="active">
                    <i class="fa-solid fa-user"></i>
                    <h3>Clientes</h3>
                </a>
                <a href="listagempedido.php">
                    <i class="fa-solid fa-receipt"></i>
                    <h3>Pedidos</h3>
                </a>
                <a href="listagemproduto.php">
                    <i class="fa-brands fa-dashcube"></i>
                    <h3>Produtos</h3>
                </a>
                <a href="cadastroproduto.php">
                    <i class="fa-solid fa-plus"></i>
                    <h3>Add Produto</h3>
                </a>
                <a href="../php/sair.php">
                    <i class="fa-solid fa-right-to-bracket"></i>
                    <h3>Sair</h3>
                </a>
               
            </div>
        </aside>
    <!-- Fim da barra lateral de menu -->

    <main>

        <h1>Cadastro</h1>

            <div class="tabela_meio">
                <h2>Cadastrar usuários</h2>
                <form method="post" action="php/pcadastrocliente.php">
                    <label>
                        Nome : <input type="text" name="nome_cliente"/>
                    </label>
                    <label>
                        Telefone : <input type="text" name="telefone_cliente"/>
                    </label>
                    <label>
                        Tipo : <input type="text" name="tipo_cliente"/>
                    </label>
                    <label>
                        Email : <input type="text" name="email_cliente"/>
                    </label>
                    <label>
                        Senha : <input type="password" name="senha_cliente"/>
                    </label>
                    <input type="submit" value="Salvar"/>
                </form>
            </div>
    </main>

    <div class="direita">
        <div class="top">
            <button id="menu-btn">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="botaotema">
                <i class="fa-solid fa-sun"></i>
                <i class="fa-solid fa-moon active"></i>
            </div>
            <div class="profile">
                <div class="info">
                    <p>Olá, <b>Alexia</b></p>
                    <small class="text-muted">Admin</small>
                </div>
                <div class="foto-perfil">
                    <img src="img/perfil1.jpg">
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="js/adminhome.js"></script>
</body>
</html>