<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css\conteudo\rickmorty.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css\home\stylemenu.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css\home\stylehome.css') }}" rel="stylesheet" >
    <link href="{{ asset('css\stylefooter.css') }}" rel="stylesheet" type="text/css">
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
    <img src="imagens\rickmorty\TumbleRickMorty.jpg" alt="Logo" draggable="false">
    </header>
    <div class="info">
        <h1>Rick e Morty</h1>
        <br><br><br><br>
        <h1>A série Rick e Morty está <br> disponível no <a class="link" href="https://www.hbomax.com/br/pt/series/urn:hbo:series:GXkRjxwjR68PDwwEAABKJ?utm_id=sa%7c71700000085056459%7c58700007207970782%7cp66001139219&gclid=CjwKCAjwg5uZBhATEiwAhhRLHsF4ARP_Nj_XPizd36NDdNqK3FlZbusxGt2JAVE_qic2Lukt5Sb1thoCZr0QAvD_BwE&gclsrc=aw.ds&countryRedirect=1" target="_blank">HBO Max</a></h1>
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
    <!-- Comeco dos slides das curiosidades-->
    <div class="content">
        <div class="slides">
            <input type="radio" name="slide" id="slide1" checked>
            <input type="radio" name="slide" id="slide2">
            <input type="radio" name="slide" id="slide3">

            <div class="slide s1">
                    <br><br><br><br>
                    <h1 class="curiosidade">Curiosidade</h1>
                    <br><br><br><br><br><br><br>
                    <h2 class="curiosidadetxt"><a href="https://www.stoned.com.br/pagina/7-curiosidades-sobre-rick-and-morty-que-voce-ainda-nao-sabia.html" target="_blank">Os criadores tinham uma ideia de inserir um segredo que só seria revelado no final, mas foi abandonada porque um fã o descobriu</a></h2>
            </div>
            <div class="slide">
                    <br><br><br><br>
            <h1 class="curiosidade">Curiosidade</h1>
                    <br><br><br><br><br><br><br>
                    <h2 class="curiosidadetxt"><a href="https://www.stoned.com.br/pagina/7-curiosidades-sobre-rick-and-morty-que-voce-ainda-nao-sabia.html" target="_blank">Pickle Rick é uma homenagem a um episódio de Breaking Bad</a></h2>
            </div>
            <div class="slide">
                    <br><br><br><br>
            <h1 class="curiosidade">Curiosidade</h1>
                    <br><br><br><br><br><br><br>
                    <h2 class="curiosidadetxt"><a href="https://www.stoned.com.br/pagina/7-curiosidades-sobre-rick-and-morty-que-voce-ainda-nao-sabia.html" target="_blank">O seriado foi criado, vendido e rotulado em apenas um dia</a></h2>
            </div>
            <div class="navigation">
                <label class="bar" for="slide1"></label>
                <label class="bar" for="slide2"></label>
                <label class="bar" for="slide3"></label>
            </div>

        </div>
    </div>
     <!--Final dos slides das curiosidades -->
     </div>
    <!-- Comeco dos slides do elenco-->
    <div class="content1">
        <div class="slideselenco">
            <input type="radio" name="slideelenco" id="slide1elenco" checked>
            <input type="radio" name="slideelenco" id="slide2elenco">
            <input type="radio" name="slideelenco" id="slide3elenco">
            <input type="radio" name="slideelenco" id="slide4elenco">
            <input type="radio" name="slideelenco" id="slide5elenco">

            <div class="slideelenco s1">
                <img src="imagens\rickmorty\rick.webp" alt="foto do personagem Rick">
                <h1 class="elenco">Rick Sanchez</h1>
                <br><br><br><br>
                <h3 class="elencotxt">Traduzido do inglês-<br>Richard D. "Rick" Sanchez é um dos dois personagens homônimos da série de televisão animada Rick and Morty do Adult Swim e da franquia resultante. Criado por Justin Roiland e Dan Harmon e dublado pelo primeiro, Sanchez é um cientista alcoólatra misantropo inspirado pelo Dr...<a class="link" href="https://en.wikipedia.org/wiki/Rick_Sanchez" target="_blank">Wikipedia (inglês)</a></h3>
            </div>
            <div class="slideelenco">
            <img src="imagens\rickmorty\morty.webp" alt="foto do personagem Morty">
                <h1 class="elenco">Morty Smith</h1>
                <br><br><br><br>
                <h3 class="elencotxt">Traduzido do inglês-<br>Mortimer Chauncey "Morty" Smith, Sr. é um dos personagens homônimos da série de televisão animada americana Rick and Morty. Criado por Justin Roiland e Dan Harmon, Morty é um menino ansioso de 14 anos baseado em Marty McFly de Michael J. Fox de Back to the Future.<a class="link" href="https://en.wikipedia.org/wiki/Morty_Smith" target="_blank">Wikipedia (inglês)</a></h3>
            </div>
            <div class="slideelenco">
            <img src="imagens\rickmorty\summer.webp" alt="foto da personagem Summer">
                <h1 class="elenco">Summer Smith</h1>
                <br><br><br><br>
                <h3 class="elencotxt"></h3>   
            </div>
            <div class="slideelenco">
                <img src="imagens\rickmorty\jerry.webp" alt="foto do personagem Jerry">
                <h1 class="elenco">Jerry Smith</h1>
                <br><br><br><br>
                <h3 class="elencotxt">Traduzido do inglês-<br>Jerry Smith é um dos personagens principais da série animada de televisão americana Rick and Morty. Criado por Justin Roiland e Dan Harmon, Jerry é retratado como um perdedor medíocre e desempregado que encontra conteúdo em sua vida simples.<a class="link" href="https://en.wikipedia.org/wiki/Jerry_Smith_(Rick_and_Morty)" target="_blank">Wikipedia (inglês)</a></h3>  
            </div>
            <div class="slideelenco">
                <img src="imagens\rickmorty\beth.webp" alt="foto da personagem Beth">
                <h1 class="elenco">Beth Smith</h1>
                <br><br><br><br>
                <h3 class="elencotxt"></h3>
            </div>
            <div class="navigationelenco">
                <label class="barelenco" for="slide1elenco"></label>
                <label class="barelenco" for="slide2elenco"></label>
                <label class="barelenco" for="slide3elenco"></label>
                <label class="barelenco" for="slide4elenco"></label>
                <label class="barelenco" for="slide5elenco"></label>
            </div>

        </div>
    </div>
     <!--Final dos slides do elenco -->
     <!--Comeco do rodape -->
        <footer>
            <div class="waves">
                <div class="wave" id="wave1"></div>
                <div class="wave" id="wave2"></div>
                <div class="wave" id="wave3"></div>
                <div class="wave" id="wave4"></div>
            </div>
        <ul class="redessociais">
                <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
        </ul>
        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Team</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <p>Search</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>  
     <!--Final do rodape -->
</body>
</html>