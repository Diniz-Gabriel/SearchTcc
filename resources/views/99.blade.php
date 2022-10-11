<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css\conteudo\99.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css\home\stylemenu.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css\home\stylehome.css') }}" rel="stylesheet" >
    <link href="{{ asset('css\stylefooter.css') }}" rel="stylesheet" type="text/css">
    <title>Brooklyn Nine-Nine</title>
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
    <script src="{{ asset('js\mobile_navbar.js') }}"></script>
    <!-- Final do menu -->
    <!-- Comeco da introducao do site -->
    <header class="onde">
    <img src="{{ asset('https://cdn.falauniversidades.com.br/wp-content/uploads/2020/05/13141215/Brooklyn-Nine-Nine-Confira-5-quest%C3%B5es-sociais-abordadas-na-s%C3%A9rie.jpg') }}" alt="Logo" height="400" width="8000" draggable="false">
    </header>
    <div class="info">
        <h1>Brooklyn Nine-Nine</h1>
        <br><br><br><br>
        <h1>A série Brooklyn Nine-Nine está <br> disponível na <a class="link" href="https://www.netflix.com/br/title/70281562" target="_blank">Netflix</a></h1>
    </div>
    <!-- Final da introducao do site -->
    <!-- Comeco da sinopse -->
    <div class="sinopse">
        <div class="tituloSinopse">
            <br><br><br>
            <h1>Sinopse</h1>
            <br><br><br>
    </div>
    <div class="textoSinopse"><h2>O brilhante e imaturo detetive Jake Peralta precisa aprender a seguir as regras e trabalhar em equipe quando um capitão exigente assume o comando de seu esquadrão.</h2></div>
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
                    <h2 class="curiosidadetxt"><a href="https://skycombotv.com.br/noticia/curiosidades-sobre-a-serie-brooklyn-nine-nine/" target="_blank">Andy Samberg (Peralta) e Chelsea Peretti (Linetti) frequentaram a mesma escola primária. Exatamente como seus respectivos personagens na série.</a></h2>
            </div>
            <div class="slide">
                    <br><br><br><br>
            <h1 class="curiosidade">Curiosidade</h1>
                    <br><br><br><br><br><br><br>
                    <h2 class="curiosidadetxt"><a href="https://skycombotv.com.br/noticia/curiosidades-sobre-a-serie-brooklyn-nine-nine/" target="_blank">Terry Crews (Sgt. Jeffords) gritava “NINE NINE” no set de filmagem apenas como uma estratégia bem humorada para motivar o elenco. Os escritores, vendo aquilo, acharam tão inusitado que resolveram incluir esse comportamento no personagem.</a></h2>
            </div>
            <div class="slide">
                    <br><br><br><br>
            <h1 class="curiosidade">Curiosidade</h1>
                    <br><br><br><br><br><br><br>
                    <h2 class="curiosidadetxt"><a href="https://skycombotv.com.br/noticia/curiosidades-sobre-a-serie-brooklyn-nine-nine/" target="_blank">Apesar das piadas sobre Amy ser uma dançarina ruim, a atriz Melissa Fumero é uma profissional, com prática desde a infância.</a></h2>
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
            <input type="radio" name="slideelenco" id="slide6elenco">
            <input type="radio" name="slideelenco" id="slide7elenco">

            <div class="slideelenco s1">
                <img src="imagens\99\AndySamberg.webp" alt="foto do personagem Andy Samberg">
                <h1 class="elenco">Andy Samberg</h1>
                <br><br><br><br>
                <h3 class="elencotxt">Andrew David Samberg ou Andy Samberg é um ator, comediante, produtor e músico norte-americano. Tornou-se conhecido pelo seu trabalho como escritor e ator do humorístico no Saturday Night Live ...<br><br><br><br><br><br><center><a class="link" href="https://pt.wikipedia.org/wiki/Andy_Samberg" target="_blank">Wikipedia</a></center></h3>
            </div>
            <div class="slideelenco">
            <img src="imagens\99\MelissaFumero.webp" alt="foto da personagem Melissa Fumero">
                <h1 class="elenco">Melissa Fumero</h1>
                <br><br><br><br>
                <h3 class="elencotxt">Melissa Fumero é uma atriz americana, que ficou conhecida por interpretar Adriana Cramer em One Life to Live, Zoe em Gossip Girl, e Amy Santiago em Brooklyn Nine-Nine.<br><br><br><br><br><br><center><a class="link" href="https://pt.wikipedia.org/wiki/Melissa_Fumero" target="_blank">Wikipedia</a></center></h3>
            </div>
            <div class="slideelenco">
            <img src="imagens\99\StephanieBeatriz.webp" alt="foto da personagem Stephanie Beatriz">
                <h1 class="elenco">Stephanie Beatriz</h1>
                <br><br><br><br>
                <h3 class="elencotxt">Stephanie Beatriz é uma atriz argentina-americana. Ela é mais conhecida por interpretar Detetive Rosa Diaz na série de televisão Brooklyn Nine-Nine, da NBC. Além de estrelar como Bonnie no filme independente "A Luz da Lua" e como Mirabel Madrigal em "Encanto"<br><br><br><br><br><br><center><a class="link" href="https://pt.wikipedia.org/wiki/Noah_Schnapp" target="_blank">Wikipedia</a></center></h3>
            </div>
            <div class="slideelenco">
                <img src="imagens\99\ChelseaPeretti.webp" alt="foto da personagem Chelsea Peretti">
                <h1 class="elenco">Chelsea Peretti</h1>
                <br><br><br><br>
                <h3 class="elencotxt">Chelsea Vanessa Peretti é uma comediante, atriz e escritora americana. Ela é mais conhecida por interpretar Gina Linetti na série de comédia policial Brooklyn Nine-Nine.<br><br><br><br><br><br><center><a class="link" href="https://pt.wikipedia.org/wiki/Chelsea_Peretti" target="_blank">Wikipedia</a></center></h3>
            </div>
            <div class="slideelenco">
                <img src="imagens\99\TerryCrews.jpg" alt="foto do personagem Terry Crews">
                <h1 class="elenco">Terry Crews</h1>
                <br><br><br><br>
                <h3 class="elencotxt">Terrence Alan Crews, conhecido como Terry Crews, é um ator, apresentador, dançarino, ilustrador, ativista e ex-jogador de futebol americano. Ganhou notoriedade mundial ao participar da comédia As Branquelas, e em seguida, do seriado Todo Mundo Odeia o Chris.<br><br><br><br><br><br><center><a class="link" href="https://pt.wikipedia.org/wiki/Terry_Crews" target="_blank">Wikipedia</a></center></h3>
            </div>
            <div class="slideelenco">
                <img src="imagens\99\AndreBraugher.jpg" alt="foto do personagem Andre Braugher">
                <h1 class="elenco">Andre Braugher</h1>
                <br><br><br><br>
                <h3 class="elencotxt">Andre Braugher é um ator estadunidense, conhecido por interpretar os personagens Raymond Holt na série de comédia Brooklyn Nine-Nine, Thomas Searles no filme Tempo de Glória, Frank Pembleton na série criminal Homicide: Life on the Street, e Owen Thoreau Jr. em Men of a Certain Age.<br><br><br><br><br><br><center><a class="link" href="https://pt.wikipedia.org/wiki/Andre_Braugher" target="_blank">Wikipedia</a></center></h3>
            </div>
            <div class="slideelenco">
                <img src="imagens\99\JoeLoTruglio.jpg" alt="foto do personagem Joe Lo Truglio">
                <h1 class="elenco">Joe Lo Truglio</h1>
                <br><br><br><br>
                <h3 class="elencotxt">Joe Lo Truglio é um ator, comediante e escritor norte-americano mais conhecido por seu trabalho como Charles Boyle na série Brooklyn Nine-Nine.<br><br><br><br><br><br><center><a class="link" href="https://pt.wikipedia.org/wiki/Joe_Lo_Truglio" target="_blank">Wikipedia</a></center></h3>
            </div>
            <div class="navigationelenco">
                <label class="barelenco" for="slide1elenco"></label>
                <label class="barelenco" for="slide2elenco"></label>
                <label class="barelenco" for="slide3elenco"></label>
                <label class="barelenco" for="slide4elenco"></label>
                <label class="barelenco" for="slide5elenco"></label>
                <label class="barelenco" for="slide6elenco"></label>
                <label class="barelenco" for="slide7elenco"></label>
            </div>

        </div>
    </div>
     <!--Final dos slides do elenco -->
     <!--Comeco do rodape -->
     <br><br><br><br>
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