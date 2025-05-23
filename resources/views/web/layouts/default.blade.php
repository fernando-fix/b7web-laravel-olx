<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.scss'])
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&family=Open+Sans:ital@0;1&family=Oswald:wght@400;700&display=swap"
        rel="stylesheet" />
    @yield('styles')
    @stack('styles')
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" />
    <title>@yield('title', 'B7Store')</title>
</head>

<body>
    <div id="loader"></div>
    <header>
        <div class="header-area">
            <a href="{{ route('home') }}" class="header-area-left">B7Store</a>
            <div class="header-area-right">
                @if (auth()->check())
                    <a href="{{ route('profile.edit', Auth::user()) }}" class="my-account">
                        <img src="{{ asset('assets/icons/userIcon.png') }}" />
                        Minha Conta
                        <br>
                        {{ Str::before(auth()->user()->name, ' ') > 8 ? Str::limit(Str::before(auth()->user()->name, ' '), 8, '...') : Str::before(auth()->user()->name, ' ') }}
                    </a>
                @else
                    <a href="{{ route('login') }}" class="my-account">Login</a>
                @endif
                <a href="{{ route('home') }}" class="announce-now">Anunciar agora →</a>
                <img class="menu-icon" src="{{ asset('assets/icons/menuIcon.png') }}" alt="Menu" />
                <div class="menu-mobile">
                    <a href="myAccount.html" class="my-account-mobile">
                        <img src="{{ asset('assets/icons/userIcon.png') }}" alt="Ícone do usuário" />
                        Minha Conta
                    </a>
                    <a class="my-account-mobile" href="/index.html">
                        <img src="{{ asset('assets/icons/logoutIcon.png') }}" /> Sair
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <span>powered by B7Web</span>
        <span>B7Store</span>
    </footer>
    @include('web.components.loadpage')
    @include('web.components.sweetalert')
    @yield('scripts')
    @stack('scripts')
</body>

</html>
