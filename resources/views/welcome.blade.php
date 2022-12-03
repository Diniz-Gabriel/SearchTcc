<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link href="{{ asset('css\home\stylemenu.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css\home\stylehome.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css\home\stylebarrapesquisa.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css\home\footerhome.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- Comeco da home -->
    <img src="imagens\logo_search.png" alt="logo" class="logo">
    <main>
    <header class="header">
    <div class="main-child">   
        <h1>Descubra onde sua série ou filme está!!!</h1>
        <br>
        <h2>De uma maneira muito fácil e rápida</h2>
        <br><br>
        <!-- Comeco da barra de pesquisa -->
        <div class="searchBox">
            <div class="search" type="submit" id='pesquisa' name="pesquisa" value="pesquisa"><img src="{{ asset('imagens\lupa.svg') }}"></div>
            <div class="searchInput">
                <input type="text" placeholder="Search Here" id="pesquisar" name="pesquisar">
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
                searchBox.classList.add('active'); // esse script aqui é nao importa mto, so faz a animao funcionar
                }

                pesquisa.addEventListener('click',(e) => {
                let srch = document.getElementById('pesquisar').value; // esse aqui faz a pesquisa local, só q antes de colocar essa array de baixo se eu colocasse o nome errado n acontecia nada, agr pelo menos deu not found
                if(srch == "") {
                        return false
                    }
                let seriesPage = [
                    {
                        brooklyn: ['Brooklyn Nine-Nine', 'Brooklyn 99','Broklyn Nine-Nine', 'Broklyn 99']
                    },
                    {
                        ck: ['CobraKai', 'Cobra Kai', 'Cobra Cai']
                    },
                    {
                        rickmorty: ['Rick e Mortry', 'Rick and Mortry', 'Rick and More', 'Rick e More']
                    },
                    {
                        st: ['Stranger Things']
                    }
                ]

                for (let i = 0; i < seriesPage[0].brooklyn.length; i++) {
                        let element = seriesPage[0].brooklyn[i]
                        let isTrue = element.toLowerCase().includes(srch.toLowerCase().trim())
                        if(isTrue) {
                           window.location.assign("./99")
                           console.log("funcionou");
                            return "redirecionando"
                        }
                    }
                for (let i = 0; i < seriesPage[1].ck.length; i++) {
                        let element = seriesPage[1].ck[i]
                        let isTrue = element.toLowerCase().includes(srch.toLowerCase().trim())
                        if(isTrue) {
                         window.location.assign("./ck")
                           console.log("funcionou a pagina");
                            return "redirecionando"
                    }
                }

                for (let i = 0; i < seriesPage[2].rickmorty.length; i++) {
                        let element = seriesPage[2].rickmorty[i]
                        let isTrue = element.toLowerCase().includes(srch.toLowerCase().trim())
                        if(isTrue) {
                            window.location.assign("./rickmorty")
                            return "redirecionando"
                    }
                }
                for (let i = 0; i < seriesPage[3].st.length; i++) {
                        let element = seriesPage[3].st[i]
                        let isTrue = element.toLowerCase().includes(srch.toLowerCase().trim())
                        if(isTrue) {
                            window.location.assign("./st")
                            return "redirecionando"
                    }
                    
                }

                let naoEncontrado = document.querySelector(".NEN")
                naoEncontrado.innerText = "desculpa não catalogamos essa série ou filme ainda"

                })

                close.onclick = function(){
                searchBox.classList.remove('active'); // esse script aqui é nao importa mto, so faz a animao funcionar
                let clearMessage = document.querySelector("#pesquisar")
                clearMessage.value = ""
                }
                
                let inputPesquisa = document.querySelector("#pesquisar")
                inputPesquisa.addEventListener("keydown", () => {
                        let naoEncontrado = document.querySelector(".NEN")
                        naoEncontrado.innerText = ""
                    })

        </script>
        <!-- Final da barra de pesquisa -->
        <br><br>
        <span class="NEN"></span>
        <br>
        <p>digite acima o nome da sua série ou filme </p>
    </div>
    </header>
    <div class="bubbles">
    <main class="main">
            <span style="--i:11;"></span>
            <span style="--i:12;"></span>
            <span style="--i:24;"></span>
            <span style="--i:10;"></span>
            <span style="--i:14;"></span>
            <span style="--i:23;"></span>
            <span style="--i:18;"></span>
            <span style="--i:16;"></span>
            <span style="--i:19;"></span>
            <span style="--i:20;"></span>
            <span style="--i:22;"></span>
            <span style="--i:25;"></span>
            <span style="--i:18;"></span>
            <span style="--i:21;"></span>
            <span style="--i:15;"></span>
            <span style="--i:13;"></span>
            <span style="--i:26;"></span>
            <span style="--i:17;"></span>
            <span style="--i:13;"></span>
            <span style="--i:28;"></span>
            <span style="--i:11;"></span>
            <span style="--i:12;"></span>
            <span style="--i:24;"></span>
            <span style="--i:10;"></span>
            <span style="--i:14;"></span>
            <span style="--i:23;"></span>
            <span style="--i:18;"></span>
            <span style="--i:16;"></span>
            <span style="--i:19;"></span>
            <span style="--i:20;"></span>
            <span style="--i:22;"></span>
            <span style="--i:25;"></span>
            <span style="--i:18;"></span>
            <span style="--i:21;"></span>
            <span style="--i:15;"></span>
            <span style="--i:13;"></span>
            <span style="--i:26;"></span>
            <span style="--i:17;"></span>
            <span style="--i:13;"></span>
            <span style="--i:28;"></span>
        <div class="gradient"></div>
    </main>
    <section class="section">
        <div class="container">
            <div class="grid">
                <div>
            <h1>Aproveite seu tempo livre</h1>
            <br>
            <p>Não perca mais seu tempo procurando aonde esta determinanda série ou filme, nós do "Search🔍", facilitamos isso para você</p>
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
    </main>
<!-- Final da home -->
</div>
    <script src="{{ asset('js/mobile_navbar.js') }}"></script>
    <!-- Final do menu -->
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
