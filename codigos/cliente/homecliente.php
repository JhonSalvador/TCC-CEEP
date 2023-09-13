<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/stylecatalogohome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Home</title>
</head>
<body>
    <header>
        <a href="index.php" class="logo">
            <img src="img/momologo.png" alt="">
        </a>
            <i class="fa-solid fa-bars" id="menu_icon"></i>
            <ul class="navbar">
                <li><a href="#home">Home</a></li>
                <li><a href="#produtos">Cardápio</a></li>
                <li><a href="#about">Sobre nós</a></li>
            </ul>
            <div class="header_icon">
                <i class="fa-solid fa-cart-shopping"></i>
                <i class="fa-solid fa-magnifying-glass" id="search_icon"></i>
                <i class="fa-solid fa-user" id="iconperfil"></i>
            </div>
            <div class="search_box">
                <input type="search" name="" id="" placeholder="Pesquise Aqui...">
            </div>
            <div class="perfil_box">
                <ul>
                    <li>
                        <!--<img src="">-->
                        <a>Olá <br> Alexia!</a>
                    </li>
                </ul>
            </div>
    </header>
    <section class="home" id="home">
        <div class="home_text">
            <h1>Começe seu dia <br> com café</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum perspiciatis dolor iure aut at illum voluptatem laudantium nisi incidunt id!</p>
            <a href="#produtos" class="btn">Peça agora</a>
        </div>
        <div class="home_img">
            <img src="img/hometeste/cafefoda.png" alt="">
        </div>
    </section>

    <!-- Seção do Cardápio -->

    <section class="produtos" id="produtos">
        <div class="heading">
            <h2>Nosso Cardápio</h2>
        </div>

        <!-- Caixa dos produtos -->

        <div class="produtos_container">
            <div class="box">
                <img src="img/hometeste/p1.png" alt="">
                <h3>Americano pure</h3>
                <div class="conteudo">
                    <span>valor</span>
                    <a href="/">Add ao carrinho</a>
                </div>
             </div>

             <div class="box">
                <img src="img/hometeste/p1.png" alt="">
                <h3>Americano pure</h3>
                <div class="conteudo">
                    <span>valor</span>
                    <a href="/">Add ao carrinho</a>
                </div>
             </div>

             <div class="box">
                <img src="img/hometeste/p1.png" alt="">
                <h3>Americano pure</h3>
                <div class="conteudo">
                    <span>valor</span>
                    <a href="/">Add ao carrinho</a>
                </div>
             </div>

             <div class="box">
                <img src="img/hometeste/p1.png" alt="">
                <h3>Americano pure</h3>
                <div class="conteudo">
                    <span>valor</span>
                    <a href="/">Add ao carrinho</a>
                </div>
             </div>
             
        </div>
    </section>

    <section class="about" id="about">
        <div class="about_img">
            <img src="img/hometeste/florsobre.jpg" alt="">
        </div>
        <div class="about_text">
            <h2>Nossa História</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nisi repudiandae nobis corporis vitae quod temporibus doloremque neque quisquam pariatur.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nisi repudiandae nobis corporis vitae quod temporibus doloremque neque quisquam pariatur.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat eveniet minima error nam dignissimos?</p>
        </div>

    </section>

    <footer id="main">
        <div id="footer_conteudo">
            <div id="footer_contatos">
                <img src="img/momologo.png" id="logo_footer">
                    <p>Contatos</p>
                <div id="footer_social_media">
                    <a href="https://instagram.com/salvador.byoh?igshid=ZDc4ODBmNjlmNQ=="class="footer_link" id="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="https://wa.me/5545999085717"class="footer_link" id="whatsapp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>

            <ul class="footer_list">
                <li>
                    <h3>Sobre</h3>
                </li>
                <li>
                    <a href="/" class="footer_link">Quem somos</a>
                </li>
                <li>
                    <a href="/" class="footer_link">De onde vem o café</a>
                </li>
                <li>
                    <a href="/" class="footer_link">Um pouco de café</a>
                </li>
            </ul>

            <div id="footer_subscribe">
                <h3>Quer receber ofertas?</h3>

                <p>
                    Coloque o seu e-mail aqui para receber nossas novidades!
                </p>

                <div id="input_group">
                    <input type="email" id="email">
                    <button>
                        <i class="fa-regular fa-envelope"></i>
                    </button>
                </div>

            </div>
        </div>
        <div id="footer_copyright">
            &#169
            2023 All Rights Reserved
        </div>
    </footer>
    <script src="js/catalogohome.js"></script>
    <script src="js/homecliente.js"></script>
</body>
</html>