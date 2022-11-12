<link href="{{ asset('css\home\stylemenu.css') }}" rel="stylesheet" >
<link href="{{ asset('css\loginEregister\footerrestpassword.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css\home\stylehome.css') }}" rel="stylesheet" type="text/css">

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

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    {{ __('Email Password Reset Link') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

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
