<?php
   
    global $tituloPagina;
   $tituloPagina = "Home";
   include ('php/cabecalho.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title><?php echo $titulo?></title>
</head>
<body>
    <!--Começo do meu cabeçalho-->
    <header class="cabecalho">
        <div class="container">
        <h1 class="logo">Logo da empresa</h1>
        <nav class="menu-principal menu-principal--fechar">
            <button class="menu-principal__btn">Abrir/fechar menu</button>
            <ul class="menu-principal__lista">
                <li><a class="menu-principal__item menu-principal__item--atual" href="index.php">Home</a></li>
                <li><a class="menu-principal__item" href="sobre.php">Sobre nós</a></li>
                <li><a class="menu-principal__item" href="portifolio.php">Portifolio</a></li>
                <li><a class="menu-principal__item" href="contatos.php">Contato</a></li>
            </ul>
        </nav>
    </div>
    </header>
    <!--Fim do meu cabeçalho-->

    <!--Começo do meu contudo principal-->
    <main>
        <!--Começo do cabeçalho do conteudo principal-->
        <header class="cabecalho-home">
            <h2 class="cabecalho-home__titulo">Texto grande aqui</h2>
            <p class="cabecalho-home__subtitulo">Texto menor aqui</p>
            <a class="cabecalho-home__role" href="#servicos">Role para ver mais</a>
        </header>
        <!--Fim do cabeçalho do conteudo principal-->

        <!--Inicio do conteudo-->
            <section id="servicos" class="home-servico">
                <div class="container">
                    <h2 class="home-titulo">O que fazemos</h2>    
                        <section class="home-servico__item"> <!-- Sessão serviços -->
                            <img src="img/icon/earth.png" alt="icone do planeta terra">
                            <h2>Desenvolvimento web</h2>
                            <p class="home-servico__texto">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                        </section>
                        <section class="home-servico__item">
                            <img src="img/icon/card.png" alt="icone de um cartão de crédito">
                            <h2>E-commerce</h2>
                            <p class="home-servico__texto">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                        </section>
                        <section class="home-servico__item">
                            <img src="img/icon/coffee.png" alt="icone de duas xicaras de café">
                            <h2>Café</h2>
                            <p class="home-servico__texto">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                        </div>
                        </section> <!-- Fim sessão serviços -->
                        <section class="depoimento"> <!-- sessão depoimentos -->
                            <div class="container">
                            <h2 class="home-titulo home-titulo--branco">O que falam de nós</h2>
                        <div class="depoimento__caixa">
                            <section class="depoimento__item">
                                <img class="depoimento__img" src="img/pessoas/Oliveira.png" alt="Foto do Felipe Oliveira">
                                <p class="depoimento__texto">Lorem ipsum, dolor sit amet consectetur adipisicing elit. <br> Illo accusantium voluptatum nobis ipsa iste doloribus, Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
                                <p class="depoimento__pessoa">Felipe Oliveira - Estágiario</p>
                            </section>

                            <section class="depoimento__item">
                                <img class="depoimento__img" src="img/pessoas/Oliveira.png" alt="Foto do Felipe Oliveira">
                                <p class="depoimento__texto">Lorem ipsum, dolor sit amet consectetur adipisicing elit. <br> Illo accusantium voluptatum nobis ipsa iste doloribus, Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
                                <p class="depoimento__pessoa">Gabriele Gomes - Estágiario</p>
                            </section>

                            <section class="depoimento__item">
                                <img class="depoimento__img" src="img/pessoas/Oliveira.png" alt="Foto do Felipe Oliveira">
                                <p class="depoimento__texto">Lorem ipsum, dolor sit amet consectetur adipisicing elit. <br> Illo accusantium voluptatum nobis ipsa iste doloribus, Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
                                <p class="depoimento__pessoa">Eduardo Rodrigues - Estágiario</p>
                            </section>
                        </div>
                        </section><!-- Fim sessão depoimentos -->
                </div>
            </section>
            <!--Fim do conteudo-->
    </main>
    <!--Fim do meu contudo principal-->

    <!--Começo do meu rodapé-->
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
    <script src="JS/main.js"></script>
</body>
</html>