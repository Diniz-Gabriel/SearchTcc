<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css\loginEregister\stylelogin.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css\home\stylehome.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css\home\stylemenu.css') }}" rel="stylesheet" >
    <link href="{{ asset('css\loginEregister\footerlogin.css') }}" rel="stylesheet" type="text/css">
        <title>Login</title>
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
    <header class="header">
    <img src="{{ asset('imagens\logo_search.png') }}" alt="Logo" height="300" width="300" draggable="false">
    </header>
    <script src="{{ asset('js\mobile_navbar.js') }}"></script>
    <!-- Final do menu -->
    <div class="box">
        <div class="form">
            <form method="POST" action="{{ route('login') }}">
                @csrf
    
            <h2>Entrar</h2>
            <div class="inputBox">
                <input type="text" required="required" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus >
                <span>Email
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" required="required" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password">
                <span>Senha
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </span>
                <i></i>
            </div>
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="lembrar" name="remember">
                    <span class="lembraar">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div class="links">
                
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <a href="{{ route('register') }}">Inscreva-se</a>
            </div>
            <x-primary-button class="botao">
                {{ __('Log in') }}
            </x-primary-button>
            
        </div>
    </form>
</div>

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

    
         