<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Search</title>
    <link href="{{ asset('css\home\stylemenu.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css\home\stylehome.css') }}" rel="stylesheet" >
    <link href="{{ asset('css\home\stylebarrapesquisa.css') }}" rel="stylesheet" >
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
    <main>
    <!-- Comeco da home -->
    <header class="header">
    <img src="{{ asset('imagens\logo_search.png') }}" alt="Logo" height="300" width="300" draggable="false">
    </header>
    <main class="main">
        <div class="main-child">
            <h1>Descubra onde sua série ou filme está!!!</h1>
            <br>
            <span>De uma maneira muito fácil e rápida</span>
            <br><br>
            <!-- Comeco da barra de pesquisa -->
            <div class="searchBox">
                <div class="search"><img src="{{ asset('imagens\lupa.svg') }}"></div>
                <div class="searchInput">
                    <input type="text" placeholder="Search Here">
                </div>
                <div class="close"><img src="{{ asset('imagens\close.svg') }}"></div>
            </div>
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
            <script>
                let search = document.querySelector('.search');
                let close = document.querySelector('.close');
                let searchBox = document.querySelector('.searchBox');
                search.onclick = function(){
                    searchBox.classList.add('active');
                }
                close.onclick = function(){
                    searchBox.classList.remove('active');
                }
            </script>
            <!-- Final da barra de pesquisa -->
            <br><br>
            <p>digite acima o nome da sua série ou filme </p>
        </div>
        <div class="gradient"></div>
    </main>
    <section class="section">
        <div class="container">
            <div class="grid">
                <div>
            <h1>Aproveite seu tempo livre</h1>
            <p>Não perca mais seu tempo procurando aonde esta determinanda série ou filme , nós do "Aonde esta ?" , facilitamos isso para você</p>
                </div>
                <div class="img-tv">
                <img src="{{ asset('https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/tv.png') }}" alt="TV">
                <video class="video-tv" autoplay playinline muted loop>
                    <source src="{{ asset('https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/video-tv-0819.m4v') }}" type="video/mp4">
                </video>
                </div>
            </div>
        </div>
    </section>
    <section class="quem section">
        <div class="container">
            <div class="grid">
                <div>
            <h1>Quem somos ?</h1>
            <p>Somos um grupo de estudantes de programação da Etec da Zona Leste (SP), e este é o nosso Trabalho de Conclusão de Curso</p>
                </div>
                <div class="img-tv">
                <img src="{{ asset('https://hbomax-images.warnermediacdn.com/2021-08/br_devices_trophy.png?host=wme-hbomax-drupal-prod.s3.amazonaws.com&w=1007') }}" alt="hbo">
                </div>
            </div>
        </div>
    </section>
    <!-- Final da home -->

    </main>
    <script src="{{ asset('js/mobile_navbar.js') }}"></script>
    <!-- Final do menu -->

</body>

</html>