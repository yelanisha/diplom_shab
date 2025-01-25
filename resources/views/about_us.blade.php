@extends('layouts.market')
@section('title', 'О нас')
@section('content')
<section class="about_us">
            <h1 class="title">О нас</h1>
            <div class="about">
                <div class="block1">
                    <img src="{{ asset('css/img/celo.jpg') }}" alt="" class="about__img1">
                    <p class="about__text">Мосеевский сельский клуб - это сердце нашего села, место, где хранятся
                        традиции, зарождаются новые идеи и крепнет дружба. Наш клуб - динамичный центр культурной и
                        общественной жизни, которому уже более 50-ти лет! Мы гордимся своими традициями и достижениями,
                        и постоянно стремимся к новым вершинам. </p>
                </div>
                <div class="block1">
                    <p class="about__text">Наши творческие коллективы неоднократно становились лауреатами районных
                        конкурсов, а наши мероприятия собирают полный зал благодарных зрителей.</p>
                    <img src="{{ asset('css/img/photo_2024-11-23_15-26-28.jpg') }}" alt="" class="about__img">
                </div>
                <div class="block2">
                    <span class="main__info__sub">Сохраняя традиции, создавая будущее!</span>
                    <img src="{{ asset('css/img/photo_2024-11-24_21-47-53.jpg') }}" alt="" class="about__img">
                </div>
            </div>
        </section>
@endsection