<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
</head>

<body>
    <header>
        <div class="header">
            <nav>
                <a href="/"><img src="{{ asset('css/img/logo.svg') }}" alt="" class="logo"></a>
                <ul class="nav">
                    <li class="nav_li"><a href="/" class="nav_li_a decnone">Главная</a></li>
                    <li class="nav_li"><a href="{{ route('performances.index') }}" class="nav_li_a decnone">Мероприятия</a></li>
                    <li class="nav_li"><a href="/about_us" class="nav_li_a decnone">О нас</a></li>
                    <li class="nav_li"><a href="news.html" class="nav_li_a decnone">Новости</a></li>
                    <li class="nav_li"><a href="/about_village" class="nav_li_a decnone">О селе</a></li>
                </ul>
                <div class="login">
                @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a href="{{ route('login') }}" class="login_button decnone">Вход</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="signbut decnone">Регистрация</a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                </div>
                <!-- <img src="img/burger.svg" class="burger" alt=""> -->
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <span class="footer_text">© Мосеевский сельский клуб 2025</span>
        <a href="https://vk.com/moseevka_club"><img src="{{ asset('css/img/icons8-vk.svg') }}" alt="" class="footer2_social_img"></a>
    </footer>
    <script src="{{ asset('css/script.js')}}"></script>
</body>

</html>