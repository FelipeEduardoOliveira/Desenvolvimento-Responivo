<?php
   
    global $tituloPagina;
   $tituloPagina = "Contatos";
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
<body class="pagina-contato">
    <!--Começo do meu cabeçalho-->
    <header class="cabecalho">
        <div class="container">
        <h1 class="logo">Logo da empresa</h1>
        <nav class="menu-principal menu-principal--fechar">
            <button class="menu-principal__btn">Abrir/fechar menu</button>
            <ul class="menu-principal__lista">
                <li><a class="menu-principal__item" href="index.php">Home</a></li>
                <li><a class="menu-principal__item" href="sobre.php">Sobre nós</a></li>
                <li><a class="menu-principal__item" href="portifolio.php">Portifolio</a></li>
                <li><a class="menu-principal__item menu-principal__item--atual" href="contatos.php">Contato</a></li>
            </ul>
        </nav>
    </div>
    </header>
    <!--Fim do meu cabeçalho-->

    <main>
        <!--Começo do cabeçalho do conteudo principal-->
        <header class="cabecalho-sobre">
            <h1 class="cabecalho-sobre__titulo">Contatos</h1>
        </header>
        <!--Fim do cabeçalho do conteudo principal-->
        <section class="pagina-conteudo container">
            <p class="texto-centralizado">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                 Perferendis quae odit voluptatibus nemo error
            </p>  
            <form action="#" class="formulario">
                <div class="formulario__grupo formulario__grupo--esq">
                    <label class="formulario__label" for="nome">Nome</label><br>
                    <input class="formulario__campo" id="nome" type="text" name="nome">
                </div>
                <div class="formulario__grupo formulario__grupo--dir">
                    <label class="formulario__label" for="email">E-mail</label><br>
                    <input class="formulario__campo" id="email" type="email" name="email">
                </div>
                <div class="formulario__grupo">
                    <label class="formulario__label" for="mensagem">Mensagem</label><br>
                    <textarea name="mensagem" class="formulario__campo" id="mensagem" cols="30" rows="10"></textarea>
                </div>
                <input type="submit" class="formulario__btn" value="Enviar">
            </form>
            <p class="texto-centralizado">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> 
                Hic placeat eum rem neque nobis. Libero cumque culpa error veniam architecto.
            </p>

        </section>
                <div class="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117054.83385297506!2d-46.85448729719606!3d-23.533813088053353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5583db0fdfef%3A0x90ee3c33b723aa9c!2sOsasco%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1584907523915!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
    </main>

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
    <script src="JS/jquery.validate.min.js"></script>
    <script src="JS/main.js"></script>
</body>
</html>