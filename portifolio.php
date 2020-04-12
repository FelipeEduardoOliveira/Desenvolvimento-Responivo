<?php
   
    global $tituloPagina;
   $tituloPagina = "Portifolio";
   include ('php/cabecalho.php');

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo?></title>
    <link rel="stylesheet" href="./css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <!--Começo do meu cabeçalho-->
    <header class="cabecalho">
        <div class="container">
        <h1 class="logo">Logo da empresa</h1>
        <nav class="menu-principal menu-principal--fechar">
            <button class="menu-principal__btn">Abrir/fechar menu</button>
            <ul class="menu-principal__lista">
                <li><a class="menu-principal__item" href="index.php">Home</a></li>
                <li><a class="menu-principal__item" href="sobre.php">Sobre nós</a></li>
                <li><a class="menu-principal__item menu-principal__item--atual" href="portifolio.php">Portifolio</a></li>
                <li><a class="menu-principal__item" href="contatos.php">Contato</a></li>
            </ul>
        </nav>
    </div>
    </header>
    <!--Fim do meu cabeçalho-->

    <!-- Inicio do conteudo principal -->
    <main>
        <!-- Inicio do cabeçalho do conteudo principal -->
        <header class="cabecalho-sobre">
            <h1 class="cabecalho-sobre__titulo">Portifolio</h1>
        </header>
        <!-- Inicio do cabeçalho do conteudo principal -->

        <!-- Inicio do conteudo -->
        <section class="pagina-conteudo">
                <p class="texto-centralizado">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus optio consectetur autem facilis. <br> Nostrum nisi totam eaque temporibus possimus, corporis esse libero rem. <br> illum, quisquam vero inventore magni quasi veritatis?
                </p>
        <!-- Inicio da navegação do portifolio -->
            <nav>
                <ul class="lista-trabalhos">
                    <li class="lista-trabalhos__item">   
                        <a data-fancybox="gallery" href="img/portfolio/aircraft-2806035_1280.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/aircraft-2806035_min.jpg" alt="Avião voando">
                            <h2 class="lista-trabalhos__titulo">Titulo do trabalho</h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos__item">   
                        <a data-fancybox="gallery" href="img/portfolio/gear-2291916_1280.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/gear-2291916_min.jpg" alt="Engrenagem">
                            <h2 class="lista-trabalhos__titulo">Titulo do trabalho</h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos__item">   
                        <a data-fancybox="gallery" href="img/portfolio/hong-kong-1990268_1280.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/hong-kong-1990268_min.jpg" alt="Cidade de Hong Kong">
                            <h2 class="lista-trabalhos__titulo">Titulo do trabalho</h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos__item">   
                        <a data-fancybox="gallery" href="img/portfolio/landscape-2268775_1280.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/landscape-2268775_min.jpg" alt="Montanhas">
                            <h2 class="lista-trabalhos__titulo">Titulo do trabalho</h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos__item">   
                        <a data-fancybox="gallery" href="img/portfolio/saddle-2614038_1280.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/saddle-2614038_min.jpg" alt="Banco de uma bicicleta">
                            <h2 class="lista-trabalhos__titulo">Titulo do trabalho</h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos__item">   
                        <a data-fancybox="gallery" href="img/portfolio/town-2430571_1920.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/town-2430571_min.jpg" alt="Pequena cidade vista de cima">
                            <h2 class="lista-trabalhos__titulo">Titulo do trabalho</h2>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- Fim da navegação do portifolio -->
        </section>
        <!-- Inicio do conteudo -->
    </main>
    <!-- Fim do conteudo principal -->

    <footer class="rodape">
        <!--Começo do meu primeiro bloco do rodapé-->
        <div class="rodape__linha-1">
            <div class="container">
            <!--Começo da minha primeira coluna-->
            <div class="rodape__coluna">
                <a href="index.php" class="logo">Logo da empresa</a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim a laboriosam optio harum omnis veritatis quis, vel quos rem necessitatibus dolorum minus magni, fugit laborum aspernatur possimus voluptates cumque molestias.</p>
            </div>
            <!--Fim da minha primeira coluna-->

            <!--Começo da minha segunda coluna-->
            <div class="rodape__coluna">
                <h2 class="rodape__titulo">Social</h2>
                <ul class="rodape__lista-links">
                    <li><a class="rodape__lista-links__item" href="https://www.facebook.com" target="_blank">Facebook</a></li>
                    <li><a class="rodape__lista-links__item" href="https://www.github.com/FelipeEduardoOliveira" target="_blank">Git Hub</a></li>
                    <li><a class="rodape__lista-links__item" href="https://www.linkedin.com" target="_blank">LinkedIn</a></li>
                    <li><a class="rodape__lista-links__item" href="https://www.instagram.com" target="_blank">Instagram</a></li>
                </ul>
            </div>
            <!--Fim da minha segunda coluna-->

            <!--Começo da minha terceira coluna-->
            <div class="rodape__coluna">
                <h2 class="rodape__titulo">Links</h2>
                <ul class="rodape__lista-links">
                    <li><a class="rodape__lista-links__item" href="index.php">Home</a></li>
                    <li><a class="rodape__lista-links__item" href="sobre.php">Sobre nós</a></li>
                    <li><a class="rodape__lista-links__item" href="portifolio.php">Portifolio</a></li>
                    <li><a class="rodape__lista-links__item" href="contatos.php">Contato</a></li>
                </ul>
            </div>
            <!--Fim da minha terceira coluna-->
        </div>
        <!--Fim do meu primeiro bloco do rodapé-->
    </div>
        <!--Começo do meu segundo bloco do rodapé-->
        <div class="rodape__linha-2">
            © <?php echo date('Y');?> - Todos os direitos reservados - Felipe Oliveira
        </div>
        <!--Fim do meu segundo bloco do rodapé-->
    </footer>
    <!--Começo do meu rodapé-->
    <script src="JS/jquery.js"></script>
    <script src="JS/slick.js"></script>
    <script src='JS/jquery.fancybox.min.js'></script>
    <script src="JS/main.js"></script>
</body>
</html>