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
                <a href="index.html"><img src="img/logo.svg" alt="" class="logo"></a>
                <ul class="nav">
                    <li class="nav_li"><a href="index.html" class="nav_li_a decnone">Главная</a></li>
                    <li class="nav_li"><a href="meropr.html" class="nav_li_a decnone">Мероприятия</a></li>
                    <li class="nav_li"><a href="about_us.html" class="nav_li_a decnone">О нас</a></li>
                    <li class="nav_li"><a href="news.html" class="nav_li_a decnone">Новости</a></li>
                    <li class="nav_li"><a href="about_village.html" class="nav_li_a decnone">О селе</a></li>
                </ul>
                <div class="login">
                    <a href="login.html" class="login_button decnone">Вход</a>
                    <a href="registration.html" class="signbut decnone">Регистрация</a>
                </div>
                <!-- <img src="img/burger.svg" class="burger" alt=""> -->
            </nav>
        </div>
    </header>

    <main>
        <section class="main__info">
            <h1 class="main__info__title">Дом Культуры села <span class="color_green">Мосеевка</span></h1>
            <span class="main__info__sub">Сохраняя традиции, создавая будущее!</span>
            <img src="img/mainselo.jpg" alt="" class="main__info__img">
        </section>
        <section class="news">
            <h1 class="title">Новости и события</h1>
            <div class="news__blocks">
                <div class="news__blocks__arr">
                    <a href="card.html" class="news__block__card">
                        <div class="news__block">
                            <img src="img/cl1.jpg" alt="" class="news__img">
                            <div class="text__wrap">
                                <h2 class="dates">13.11.2024</h2>
                                <p class="news__title">Ремонт клуба</p>
                                <span class="news__sub">Продолжается ремонт сельского клуба. Для жителей сельской
                                    местности
                                    возрождение домов культуры – отрадный факт.</span>
                            </div>
                        </div>
                    </a>
                    <a href="card.html" class="news__block__card">
                        <div class="news__block">
                            <img src="img/SXoFDrHSVQM.jpg" alt="" class="news__img">
                            <div class="text__wrap">
                                <h2 class="dates">04.11.2024</h2>
                                <p class="news__title">День народного единства</p>
                                <span class="news__sub">4 ноября - День народного единства! В этот день мы вспоминаем
                                    о важности
                                    сплоченности и силы нашего народа.</span>
                            </div>
                        </div>
                    </a>
                    <a href="card.html" class="news__block__card">
                        <div class="news__block">
                            <img src="img/7rkAwrNmMEA.jpg" alt="" class="news__img">
                            <div class="text__wrap">
                                <h2 class="dates">01.10.2024</h2>
                                <p class="news__title">День пожилых людей</p>
                                <span class="news__sub">1 октября — Международный день пожилых людей, ежегодно, в
                                    золотую
                                    осеннюю
                                    пору мы чествуем тех, кого мы уважаем и любим.</span>
                            </div>
                        </div>
                    </a>
                </div>
                <a href="news.html"><img src="img/allnews.svg" alt=""></a>
            </div>
        </section>
        <section class="meropr">
            <h1 class="title">Ближайшие мероприятия</h1>
            <div class="news__blocks">
                <div class="news__blocks__arr">
                    <a href="card.html" class="news__block__card">
                        <div class="news__block">
                            <img src="img/photo_2024-11-13_21-32-45.jpg" alt="" class="meropr__img">
                            <div class="text__wrap">
                                <h2 class="dates">13.12.2024</h2>
                            </div>
                        </div>
                    </a>
                    <a href="card.html" class="news__block__card">
                        <div class="news__block">
                            <img src="img/photo_2024-11-13_23-49-33.jpg" alt="" class="meropr__img">
                            <div class="text__wrap">
                                <h2 class="dates">25.11.2024</h2>
                            </div>
                        </div>
                    </a>
                    <a href="card.html" class="news__block__card">
                        <div class="news__block">
                            <img src="img/ebley.png" alt="" class="meropr__img">
                            <div class="text__wrap">
                                <h2 class="dates">08.11.2024</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <a href="meropr.html"><img src="img/allmerop.svg" alt=""></a>
            </div>
        </section>
        <section class="where">
            <h1 class="title">Где нас найти?</h1>
            <div class="where__info">
                <script type="text/javascript" charset="utf-8" async
                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Abe2fd23ecb322fbc87083a0017cdf3cc2d287a567afbc49800dda4967386830c&amp;width=500&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
                <div class="where__text">
                    <span class="where__texts">ул. Советская, 51А</span>
                    <a href="tel:89371234567" class="where__texts--line">+8(937)123-45-67</a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <span class="footer_text">© Мосеевский сельский клуб 2025</span>
        <a href="#"><img src="img/icons8-vk.svg" alt="" class="footer2_social_img"></a>
    </footer>
</body>

</html>