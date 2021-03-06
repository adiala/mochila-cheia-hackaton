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
                <a href="/rulesPage.html">Regulamento</a>
            </div>
        </nav>

        <div class="header__toggle has-fade">
            <a href="/aboutPage.html">Quem somos</a>
            <a href="/rulesPage.html">Regulamento</a>
            <a href="/donation.html">Quero Doar</a>
            <a href="#">Quero Receber</a>
        </div>

    </header>

        <main>
            <div class="title">
                <h1 class="flex flex-jc-c flex-ai-c">FAZER NOVO CADASTRO</h1>
            </div>
    <div class="formularioCadastro">        
        <div>
            <form id="nomeDoResponsavel"></form>
            <fieldset class="inputLine">
                <legend>Nome do Responsável</legend>
                <input type="text" id="nameResp" name="nameResp"><br><br>
            </fieldset>
            </form>    
        </div>
        <div>
            <form id="cpfDoResponsavel"></form>
            <fieldset class="inputLine">
                <legend>CPF do Responsável</legend>
                <input type="text" id="cpfResp" name="cpfResp" maxlength="11"><br><br>
            </fieldset>
            </form>    
        </div>
        <div>
            <form id="telefoneParaContato"></form>
            <fieldset class="inputLine">
                <legend>Telefone para Contato</legend>
                <input type="tel" id="telContact" name="telContact" maxlength="11"><br><br>
            </fieldset>
            </form>    
        </div>
        <div>
            <form id="nomeDaCriança"></form>
            <fieldset class="inputLine">
                <legend>Nome da Criança</legend>
                <input type="text" id="kidName" name="kidName"><br><br>
            </fieldset>
            </form>    
        </div>
        <div>
            <form id="escolaDaCriança"></form>
            <fieldset class="inputLine">
                <legend>Escola da Criança</legend>
                <input type="text" id="kidSchool" name="kidSchool"><br><br>
            </fieldset>
            </form>    
        </div>
        <div>
            <form id="raDaCriança"></form>
            <fieldset class="inputLine">
                <legend>R.A. da Criança</legend>
                <input type="text" id="kidRegister" name="kidRegister"><br><br>
            </fieldset>
            </form>    
        </div>

        </main>

    <footer class="footer"> 
        <div class="footer__copyright">
            &copy; Mochila Cheia. Todos os direitos reservados.
        </div>
    </div>        
    </footer>

    <script src="./app/js/script.js"></script>

</body>