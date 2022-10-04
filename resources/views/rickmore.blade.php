<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css\conteudo\rickmore.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/stylemenu.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/stylehome.css') }}" rel="stylesheet" >
    <title>Rick and Morty</title>
</head>
<body>
    <!-- Comeco da menu -->
    <header>
        <nav>
            <a class="logo"></a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>    
            <ul class="nav-list">
                <li><a href="/">Inicio</a></li>
                <li><a href="/">Sobre</a></li>
                <li><a href="/">Projetos</a></li>
                <li><a href="/">Contato</a></li>
            </ul>
        </nav>
    </header>
    <!-- Comeco do menu -->
    <header class="header">
    <img src="{{ asset('imagens\logo_search.png') }}" alt="Logo" height="300" width="300" draggable="false">
    </header>
    <script src="{{ asset('js/mobile_navbar.js') }}"></script>
    <!-- Final do menu -->
    <!-- Comeco da introducao do site -->
    <header class="onde">
    <img src="imagens\rickmore\TumbleRickMore.jpg" alt="Logo" draggable="false">
    </header>
    <div class="info">
        <h1>Rick e Morty</h1>
        <br><br><br><br>
        <h1>A série Rick e Morty está <br> disponível no <a href="https://www.hbomax.com/br/pt/series/urn:hbo:series:GXkRjxwjR68PDwwEAABKJ?utm_id=sa%7c71700000085056459%7c58700007207970782%7cp66001139219&gclid=CjwKCAjwg5uZBhATEiwAhhRLHsF4ARP_Nj_XPizd36NDdNqK3FlZbusxGt2JAVE_qic2Lukt5Sb1thoCZr0QAvD_BwE&gclsrc=aw.ds&countryRedirect=1" target="_blank">HBO Max</a></h1>
    </div>
    <!-- Final da introducao do site -->
    <!-- Comeco da sinopse -->
    <div class="sinopse">
        <div class="tituloSinopse">
            <br><br><br>
            <h1>Sinopse</h1>
            <br><br><br>
    </div>
    <div class="textoSinopse"><h2>Acompanhe malucas viagens no tempo-espaço e por universos paralelos com Rick, um cientista com problemas com a bebida, e seu neto Morty, um adolescente não tão brilhante quanto o avô.</h2></div>
        </div>
    <div>
    <!-- Comeco dos slides -->
    <div class="content">
        <div class="slides">
            <input type="radio" name="slide" id="slide1" checked>
            <input type="radio" name="slide" id="slide2">
            <input type="radio" name="slide" id="slide3">
            <input type="radio" name="slide" id="slide4">
            <input type="radio" name="slide" id="slide5">

            <div class="slide s1">
                <img src="imagens\rickmore\curiosidade1.png" alt="foto do personagem Rick">
            </div>
            <div class="slide">
                <img src="imagens\rickmore\more.webp" alt="foto do personagem More">
            </div>
            <div class="slide">
                <img src="imagens\rickmore\summer.webp" alt="foto do personagem Summer">
            </div>
            <div class="slide">
                <img src="imagens\rickmore\beth.webp" alt="foto do personagem Beth">
            </div>
            <div class="slide">
                <img src="imagens\rickmore\jerry.jpg" alt="foto do personagem Jerry">
            </div>
            <div class="navigation">
                <label class="bar" for="slide1"></label>
                <label class="bar" for="slide2"></label>
                <label class="bar" for="slide3"></label>
                <label class="bar" for="slide4"></label>
                <label class="bar" for="slide5"></label>
            </div>

        </div>
    </div>
     <!--Final dos slides -->
     </div>
</body>
</html>