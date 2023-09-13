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
                <a href="adminhome.php" class="active">
                    <i class="fa-solid fa-list"></i>
                    <h3>Dashboard</h3>
                </a>
                <a href="listagemcliente.php">
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
                <a href="../loginpessoa.php">
                    <i class="fa-solid fa-right-to-bracket"></i>
                    <h3>Sair</h3>
                </a>
               
            </div>
        </aside>
    <!-- Fim da barra lateral de menu -->

    <main>

        <h1>Dashboard</h1>

        <div class="insights">
            <!-- Inicio do total vendas -->
            <div class="vendas">
                <i class="fa-solid fa-chart-simple"></i>
                <div class="meio">
                    <div class="esqrd">
                        <h3>Total Vendas</h3>
                        <h1>$25,024</h1>
                    </div>
                    <div class="progresso">
                        <svg> 
                            <circle cx='38' cy='38' r='36'></circle>
                        </svg>
                        <div class="numero">
                            <p>81%</p>
                        </div>
                    </div>
                    <small class="text-muted"> Ultimas 24 horas </small>
                </div>
            </div>
                <!-- Fim do total vendas -->
                <!-- Inicio dos gastos -->
                <div class="gastos">
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                    <div class="meio">
                        <div class="esqrd">
                            <h3>Total Gastos</h3>
                            <h1>$14,160</h1>
                        </div>
                        <div class="progresso">
                            <svg> 
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="numero">
                                <p>41%</p>
                            </div>
                        </div>
                        <small class="text-muted"> Ultimas 24 horas </small>
                    </div>
                </div>
                    <!-- Fim dos gastos -->
                    <!-- Inicio dos ganhos -->
                    <div class="ganhos">
                        <i class="fa-solid fa-chart-line"></i>
                        <div class="meio">
                            <div class="esqrd">
                                <h3>Total Ganhos</h3>
                                <h1>$10,864</h1>
                            </div>
                            <div class="progresso">
                                <svg> 
                                    <circle cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="numero">
                                    <p>22%</p>
                                </div>
                            </div>
                            <small class="text-muted"> Ultimas 24 horas </small>
                        </div>
                    </div>
                        <!-- Fim dos ganhos -->
            </div>

            <div class="tabela_meio">
                <h2>Pedidos Recentes</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Nome Produto</th>
                            <th>Numero Produto</th>
                            <th>Pagamento</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Cappuccino</td>
                            <td>12345</td>
                            <td>Certo</td>
                            <td class="aviso">Pendente</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Cappuccino</td>
                            <td>12345</td>
                            <td>Certo</td>
                            <td class="aviso">Pendente</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Cappuccino</td>
                            <td>12345</td>
                            <td>Certo</td>
                            <td class="aviso">Pendente</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Cappuccino</td>
                            <td>12345</td>
                            <td>Certo</td>
                            <td class="aviso">Pendente</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Cappuccino</td>
                            <td>12345</td>
                            <td>Certo</td>
                            <td class="aviso">Pendente</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Cappuccino</td>
                            <td>12345</td>
                            <td>Certo</td>
                            <td class="aviso">Pendente</td>
                        </tr>
                    </tbody>

                </table>

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