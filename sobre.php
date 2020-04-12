<?php
   
    global $tituloPagina;
   $tituloPagina = "Sobre Nós";
   include ('php/cabecalho.php');

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo?></title>
    <link rel="stylesheet" href="./css/style.css">
    </head>
<body class="pagina-sobre">
   <!--Começo do meu cabeçalho-->
    <header class="cabecalho">
        <div class="container">
        <h1 class="logo">Logo da empresa</h1>
        <nav class="menu-principal menu-principal--fechar">
            <button class="menu-principal__btn">Abrir/fechar menu</button>
            <ul class="menu-principal__lista">
                <li><a class="menu-principal__item" href="index.php">Home</a></li>
                <li><a class="menu-principal__item menu-principal__item--atual" href="sobre.php">Sobre nós</a></li>
                <li><a class="menu-principal__item" href="portifolio.php">Portifolio</a></li>
                <li><a class="menu-principal__item" href="contatos.php">Contato</a></li>
            </ul>
        </nav>
        </div>
    </header>
    <!--Fim do meu cabeçalho-->

    <!--Começo do meu contudo principal-->
    <main>
        <article>
            <!--Começo do cabeçalho do conteudo principal-->
            <header class="cabecalho-sobre">
                <h1 class="cabecalho-sobre__titulo">Sobre nós</h1>
            </header>
            <!--Fim do cabeçalho do conteudo principal-->

            <!--Inicio do conteudo-->
                <section class="pagina-conteudo container">
                    <p class="texto-centralizado">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi ut cum nostrum quidem, commodi nesciunt sit, esse sunt sint fugit nisi modi repudiandae? Quas, magni qui! Voluptate officiis qui blanditiis.</p>
                    <img src="./img/mesaComNote.jpg" class="img-left" alt="Mesa de trabalho com um notebook, caderno e uma caneta">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus totam sit expedita ab aliquid enim nam explicabo molestias dignissimos porro, nihil praesentium ipsum velit saepe neque deserunt ea, beatae est.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ipsam laudantium laboriosam magnam nisi, fuga sapiente facilis voluptatem odio tenetur temporibus adipisci soluta itaque quisquam nemo. Libero cum reprehenderit laboriosam?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus cum sit at repellat non amet excepturi molestiae obcaecati deleniti aliquam voluptates, quidem porro quisquam omnis laborum cumque hic impedit incidunt.</p>
                </section>
                <!--Fim do conteudo-->
            </article>
    </main>
    <!--Fim do meu contudo principal-->

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
    <script src="JS/main.js"></script>
</body>
</html>