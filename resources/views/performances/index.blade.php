@extends('layouts.market')
@section('title', 'Мероприятия')
@section('content')
<section class="meropr">
            <h1 class="title">Мероприятия</h1>
            <div class="news__blocks--center">
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
                    <a href="card.html" class="news__block__card">
                        <div class="news__block">
                            <img src="img/photo_2024-11-13_23-49-31.jpg" alt="" class="meropr__img">
                            <div class="text__wrap">
                                <h2 class="dates">03.11.2024</h2>
                            </div>
                        </div>
                    </a>
                    <a href="card.html" class="news__block__card">
                        <div class="news__block">
                            <img src="img/photo_2024-11-15_17-53-37.jpg" alt="" class="meropr__img">
                            <div class="text__wrap">
                                <h2 class="dates">24.10.2024</h2>
                            </div>
                        </div>
                    </a>
                    <a href="card.html" class="news__block__card">
                        <div class="news__block">
                            <img src="img/-fw0Dplt0nY.jpg" alt="" class="meropr__img">
                            <div class="text__wrap">
                                <h2 class="dates">08.05.2024</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="pagination" id="pagination"></div>
            </div>
        </section>
@endsection