<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Mochila Cheia</title>
    <link rel="stylesheet" href="./app/scss/style.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

</head>

<body>

    <header class="header">
        <div class="overlay has-fade"></div>
        <nav class="container-header flex flex-jc-sb flex-ai-c">
            <a href="/" class="header__logo">
                <img src="./images/logo.svg" alt="Mochila Cheia">
            </a>
            
            <a id="btnHamburguer" href="#" class="header__menu hide-for-desktop">
                <span></span>
                <span></span>
                <span></span>
            </a>

            <div class="header__links hide-for-mobile">
                <a href="/aboutPage.html">Quem somos</a>
                <a href="#">Regulamento</a>
            </div>
        </nav>

        <div class="header__toggle has-fade">
            <a href="/aboutPage.html">Quem somos</a>
            <a href="#">Regulamento</a>
            <a href="/donation.html">Quero Doar</a>
            <a href="#">Quero Receber</a>
        </div>

    </header>

    <main class="hero">
        <div class="container">

            <div class="hero__image"></div>
            <div class="hero__text container--pall">

                <h1>
                    Seja bem vindo ao projeto Mochila Cheia
                </h1>
            
                <p>
                    Criando uma ponte entre crianças que precisam de material escolar e pessoas dispostas a ajudar.
                </p>
            
                <a href="/donation.html" class="button button__doar">Quero Doar</a>
                <a href="#" class="button button__receber">Quero Receber</a>

            </div>           
        </div>
    </main>

    <footer class="footer"> 
        <div class="footer__copyright">
            &copy; Mochila Cheia. Todos os direitos reservados.
        </div>
    </footer>

    <script src="./app/js/script.js"></script>

</body>
</html>
