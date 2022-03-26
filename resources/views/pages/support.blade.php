@extends('layout.base')

@section('content')
<main>
    <div class="crumbs">
        <div class="container">
            <a href="{{ route('home') }}" class="homelink">Главная</a> / <span class="current">Меры поддержки</span>
        </div>
    </div>

    <section id="support" class="support">
        <div class="container">
            <h1 class="pageh1">Меры поддержки</h1>
            <div class="leaf"><img src="img/leaf.png" alt="---"></div>
            <div class="supportcard">
                <div class="head">
                    <img src="img/supportcard.png" alt="Финансовая поддержка" class="thumb">
                    <p class="title">Финансовая поддержка</p>
                    <a href="javascript:void(0);"><img src="img/arrow.png" alt="▼"></a>
                </div>
                <div class="content">
                    <div class="icon"><img src="img/fond.png" alt="Микрозаймы Фонда микрофинансирования Курганской области"></div>
                    <div class="info">
                        <p class="name">Микрозаймы Фонда микрофинансирования Курганской области</p>
                        <p class="text">Своя ферма.</p>
                        <a href="supportitem.html">Подробнее</a>
                    </div>
                </div>
                <div class="content">
                    <div class="icon"><img src="img/fond.png" alt="Микрозаймы Фонда микрофинансирования Курганской области"></div>
                    <div class="info">
                        <p class="name">Микрозаймы Фонда микрофинансирования Курганской области</p>
                        <p class="text">Своя ферма.</p>
                        <a href="supportitem.html">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="supportcard">
                <div class="head">
                    <img src="img/supportcard.png" alt="Имущественная поддержка" class="thumb">
                    <p class="title">Имущественная поддержка</p>
                    <a href="javascript:void(0);"><img src="img/arrow.png" alt="▼"></a>
                </div>
                <div class="content">
                    <div class="icon"><img src="img/fond.png" alt="Микрозаймы Фонда микрофинансирования Курганской области"></div>
                    <div class="info">
                        <p class="name">Микрозаймы Фонда микрофинансирования Курганской области</p>
                        <p class="text">Своя ферма.</p>
                        <a href="supportitem.html">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="supportcard">
                <div class="head">
                    <img src="img/supportcard.png" alt="Административная поддержка" class="thumb">
                    <p class="title">Административная поддержка</p>
                    <a href="javascript:void(0);"><img src="img/arrow.png" alt="▼"></a>
                </div>
                <div class="content">
                    <div class="icon"><img src="img/fond.png" alt="Микрозаймы Фонда микрофинансирования Курганской области"></div>
                    <div class="info">
                        <p class="name">Микрозаймы Фонда микрофинансирования Курганской области</p>
                        <p class="text">Своя ферма.</p>
                        <a href="supportitem.html">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
