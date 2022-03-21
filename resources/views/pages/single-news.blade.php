@extends('layout.base')

@section('content')
    <main>
        <div class="crumbs">
            <div class="container">
                <a href="index.html" class="homelink">Главная</a> / <a href="news.html">Новости</a> / <span class="current">Цифровизация сельского хозяйства с господдержкой</span>
            </div>
        </div>

        <section id="single" class="single">
            <div class="container">
                <h1 class="pageh1">{{ $news['heading'] }}</h1>
                <div class="leaf"><img src="{{ asset('img/leaf.png') }}" alt="---"></div>
                <div class="row">
                    <div class="col-xs-12 col-md-5 col-lg-6"><img src="{{ asset('storage/'.$news['image']) }}" alt="Заголовок" class="thumb"></div>
                    <div class="col-xs-12 col-md-7 col-lg-6">
                        <p class="maintext">{{ $news['text'] }}</p>
                    </div>
                    <div class="col-xs-12"><p class="maintext">Специалисты отраслевой IT-Компании «СТЭК ЛАБС» не только справились с основной задачей: разработали и внедрили цифровое решение, построили соответствующую IT инфраструктуру, но и предложили цифровые решения для других бизнес-процессов: отгрузка товара и формирование отчета для бухгалтерии, проведение анализа продукции для лаборатории.</p></div>
                </div>
            </div>
        </section>
    </main>
@endsection
