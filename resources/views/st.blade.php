<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css\conteudo\st.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css\home\stylemenu.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css\home\stylehome.css') }}" rel="stylesheet" >
    <link href="{{ asset('css\stylefooter.css') }}" rel="stylesheet" type="text/css">
    <title>Stranger Things</title>
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
    <img src="{{ asset('https://occ-0-1307-185.1.nflxso.net/dnm/api/v6/6AYY37jfdO6hpXcMjf9Yu5cnmO0/AAAABer7SeWc6FvkBqWtk61GwL7rshAEVCOARQZVTEJGnLXykYBlO4nbbr6gs7M650BjULuaN6hucXKr5xY2iqPAajrxXd70HawdJeuD.jpg?r=608') }}" alt="Logo" height="400" width="8000" draggable="false">
    </header>
    <div class="info">
        <h1>Stranger Things</h1>
        <br><br><br><br>
        <h1>A série Stranger Things está <br> disponível na <a class="link" href="https://www.netflix.com/br/title/80057281" target="_blank">Netflix</a></h1>
    </div>
    <!-- Final da introducao do site -->
    <!-- Comeco da sinopse -->
    <div class="sinopse">
        <div class="tituloSinopse">
            <br><br><br>
            <h1>Sinopse</h1>
            <br><br><br>
    </div>
    <div class="textoSinopse"><h2>Quando um garoto desaparece, a cidade toda participa nas buscas. Mas o que encontram são segredos, forças sobrenaturais e uma menina.</h2></div>
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
                    <h2 class="curiosidadetxt"><a href="https://br.ign.com/stranger-things/99533/feature/stranger-things-curiosidades-serie-netflix-vecna-hopper-eleven-stephen-king" target="_blank">O ator David Harbour emagreceu entre as temporadas 3 e 4 de Stranger Things. Portanto, para as cenas de Flashback, que exigiam o físico anterior do personagem Hopper, a equipe da série usou próteses e maquiagem.</a></h2>
            </div>
            <div class="slide">
                    <br><br><br><br>
            <h1 class="curiosidade">Curiosidade</h1>
                    <br><br><br><br><br><br><br>
                    <h2 class="curiosidadetxt"><a href="https://br.ign.com/stranger-things/99533/feature/stranger-things-curiosidades-serie-netflix-vecna-hopper-eleven-stephen-king" target="_blank">Em Stranger Things 4, Lucas (Caleb McLaughlin) quer deixar de ser tão nerd e entrar para o grupo dos descolados. Para isso, ele usa o time de basquete do colégio de Hawkins como trampolim. E quem reparou no número da jersey (camisa) que ele usa? 8! Tal qual Kobe Bryant, lenda da NBA. Obviamente, a escolha do número 8 não foi por acaso, e sim uma ideia do próprio Caleb, grande fã de Kobe que queria homenagear o ídolo.</a></h2>
            </div>
            <div class="slide">
                    <br><br><br><br>
            <h1 class="curiosidade">Curiosidade</h1>
                    <br><br><br><br><br><br><br>
                    <h2 class="curiosidadetxt"><a href="https://br.ign.com/stranger-things/99533/feature/stranger-things-curiosidades-serie-netflix-vecna-hopper-eleven-stephen-king" target="_blank">Hoje, todo mundo conhece Stranger Things apenas com o nome da série mencionado. Mas o título quase foi outro: Montauk. E o que é o Projeto Montauk? Foram supostos projetos secretos do governo americano para desenvolver técnicas de guerra psicológica e investigações exóticas, como viagem no tempo. Fazia sentido segundo o conceito, mas vamos combinar que Stranger Things vingou muito mais, né?</a></h2>
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
            <input type="radio" name="slideelenco" id="slide8elenco">
            <input type="radio" name="slideelenco" id="slide9elenco">
            <input type="radio" name="slideelenco" id="slide10elenco">
            <input type="radio" name="slideelenco" id="slide11elenco">
            

            <div class="slideelenco s1">
                <img src="imagens\st\MillieB.webp" alt="foto da Millie Bobby Brown">
                <h1 class="elenco">Millie Bobby Brown</h1>
                <br><br><br><br>
                <h3 class="elencotxt">Millie Bobby Brown é uma atriz e cantora britânica nascida na Espanha. A atriz ganhou reconhecimento mundial e aclamação da crítica por seu papel como Onze na série de televisão Stranger Things da Netflix.<br><br><br><br><br><br><center><a class="link" href="https://pt.wikipedia.org/wiki/Millie_Bobby_Brown" target="_blank">Wikipedia</a></center></h3>
            </div>
            <div class="slideelenco">
            <img src="imagens\st\FinnW.webp" alt="foto do Finn Wolfhard">
                <h1 class="elenco">Finn Wolfhard</h1>
                <br><br><br><br>
                <h3 class="elencotxt">Finn Wolfhard é um ator, músico, roteirista e diretor canadense. Entre seus papéis incluí-se Mike Wheeler na série Stranger Things, da Netflix, pelo qual recebeu três indicações ao Prêmio Screen Actors Guild para melhor elenco em série de drama, ganhando uma.<br><br><br><br><br><br><center><a class="link" href="https://pt.wikipedia.org/wiki/Finn_Wolfhard" target="_blank">Wikipedia</a></center></h3>
            </div>
            <div class="slideelenco">
            <img src="imagens\st\NoahSchnapp.jpg" alt="foto do Noah Schnapp">
                <h1 class="elenco">Noah Schnapp</h1>
                <br><br><br><br>
                <h3 class="elencotxt">Noah Cameron Schnapp é um ator norte-americano, mais conhecido por interpretar Will Byers na série de televisão Stranger Things da Netflix e dar voz a Charlie Brown no filme The Peanuts Movie. Também atuou no filme Bridge of Spies de Steven Spielberg.<br><br><br><br><br><br><center><a class="link" href="https://pt.wikipedia.org/wiki/Noah_Schnapp" target="_blank">Wikipedia</a></center></h3>
            </div>
            <div class="slideelenco">
                <img src="imagens\st\CalebMcLaughlin.webp" alt="foto do Caleb McLaughlin">
                <h1 class="elenco">Caleb McLaughlin</h1>
                <br><br><br><br>
                <h3 class="elencotxt">Caleb McLaughlin é um ator norte-americano, mais conhecido por interpretar Lucas Sinclair na série de televisão Stranger Things da Netflix. McLaughlin começou sua carreira no palco da Broadway como o jovem Simba no musical The Lion King.<br><br><br><br><br><br><center><a class="link" href="https://pt.wikipedia.org/wiki/Caleb_McLaughlin" target="_blank">Wikipedia</a></center></h3>
            </div>
            <div class="slideelenco">
                <img src="imagens\st\SadieSink.jpg" alt="foto da Sadie Sink">
                <h1 class="elenco">Sadie Sink</h1>
                <br><br><br><br>
                <h3 class="elencotxt">Sadie Elizabeth Sink é uma atriz norte-americana. É mais conhecida por interpretar Maxine "Max" Mayfield na série televisiva Stranger Things da Netflix. Ela também apareceu em episódios de Blue Bloods, The Americans e interpretou Ziggy Berman em Fear Street Part Two: 1978.<br><br><br><br><br><br><center><a class="link" href="https://pt.wikipedia.org/wiki/Sadie_Sink" target="_blank">Wikipedia</a></center></h3>
            </div>
            <div class="slideelenco">
                <img src="imagens\st\GatenMatarazzo.jpg" alt="foto do Gaten Matarazzo">
                <h1 class="elenco">Gaten Matarazzo</h1>
                <br><br><br><br>
                <h3 class="elencotxt">Gaten John Matarazzo III é um ator norte-americano, mais conhecido por interpretar Dustin Henderson na série de televisão Stranger Things da Netflix.<br><br><br><br><br><br><center><a class="link" href="https://pt.wikipedia.org/wiki/Gaten_Matarazzo" target="_blank">Wikipedia</a></center></h3>
            </div>
            <div class="slideelenco">
                <img src="imagens\st\JoeKeery.webp" alt="foto do Joe Keery">
                <h1 class="elenco">Joe Keery</h1>
                <br><br><br><br>
                <h3 class="elencotxt">Joseph David Keery, mais conhecido como Joe Keery, é um ator norte-americano. É mais conhecido por interpretar Steve Harrington na série Stranger Things da Netflix.<br><br><br><br><br><br><center><a class="link" href="https://pt.wikipedia.org/wiki/Joe_Keery" target="_blank">Wikipedia</a></center></h3>
            </div>
            <div class="slideelenco">
                <img src="imagens\st\DavidHarbour.jpg" alt="foto do David Harbour">
                <h1 class="elenco">David Harbour</h1>
                <br><br><br><br>
                <h3 class="elencotxt">David Kenneth Harbour é um ator norte-americano. Ganhou reconhecimento por seu papel como Jim Hopper na série de drama e ficção científica Stranger Things, pelo qual ele recebeu um Prêmio Critics' Choice em 2018. Por este papel ele também recebeu indicações ao Emmy do Primetime e Globo de Ouro.<br><br><br><br><br><center><a class="link" href="https://pt.wikipedia.org/wiki/David_Harbour" target="_blank">Wikipedia</a></center></h3>
            </div>
            <div class="slideelenco">
                <img src="imagens\st\NataliaDyer.jpg" alt="foto da Natalia Dyer">
                <h1 class="elenco">Natalia Dyer</h1>
                <br><br><br><br>
                <h3 class="elencotxt">Natalia Danielle Dyer é uma atriz norte-americana, mais conhecida por interpretar Nancy Wheeler na série de televisão Stranger Things da Netflix.<br><br><br><br><br><br><br><br><center><a class="link" href="https://pt.wikipedia.org/wiki/Natalia_Dyer" target="_blank">Wikipedia</a></center></h3>
            </div>
            <div class="slideelenco">
                <img src="imagens\st\WinonaRyder.webp" alt="foto da Winona Ryder">
                <h1 class="elenco">Winona Ryder</h1>
                <br><br><br><br>
                <h3 class="elencotxt">Winona Laura Horowitz, mais conhecida como Winona Ryder, é uma atriz norte-americana, nascida no estado de Minnesota, próximo à localidade de Winona, inspiração para seu prenome<br><br><br><br><br><br><br><br><center><a class="link" href="https://pt.wikipedia.org/wiki/Winona_Ryder" target="_blank">Wikipedia</a></center></h3>
            </div>
            <div class="slideelenco">
                <img src="imagens\st\MayaHawke.webp" alt="foto da Maya Hawke">
                <h1 class="elenco">Maya Hawke</h1>
                <br><br><br><br>
                <h3 class="elencotxt">Maya Ray Thurman Hawke é uma atriz, modelo, cantora e compositora norte-americana, filha de Uma Thurman e Ethan Hawke. Ela é mais conhecida por interpretar Robin Buckley na série Stranger Things.<br><br><br><br><br><br><br><br><center><a class="link" href="https://pt.wikipedia.org/wiki/Maya_Hawke" target="_blank">Wikipedia</a></center></h3>
            </div>
            <div class="navigationelenco">
                <label class="barelenco" for="slide1elenco"></label>
                <label class="barelenco" for="slide2elenco"></label>
                <label class="barelenco" for="slide3elenco"></label>
                <label class="barelenco" for="slide4elenco"></label>
                <label class="barelenco" for="slide5elenco"></label>
                <label class="barelenco" for="slide6elenco"></label>
                <label class="barelenco" for="slide7elenco"></label>
                <label class="barelenco" for="slide8elenco"></label>
                <label class="barelenco" for="slide9elenco"></label>
                <label class="barelenco" for="slide10elenco"></label>
                <label class="barelenco" for="slide11elenco"></label>
                
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