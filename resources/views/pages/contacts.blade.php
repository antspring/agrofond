@extends('layout.base')

@section('content')
<main>
    <div class="crumbs">
        <div class="container">
            <a href="index.html" class="homelink">Главная</a> / <span class="current">Контакты</span>
        </div>
    </div>

    <section id="contacts" class="contacts">
        <div class="container">
            <h1 class="pageh1">Контакты</h1>
            <div class="leaf"><img src="img/leaf.png" alt="---"></div>
            <div class="row">
                <div class="col-xs-12 col-sm-5 col-md-6">
                    <div class="contactblock">
                        <div class="icon"><img src="img/mailicon.png" alt="Почта" class="ficon"></div>
                        <div class="info">
                            <a href="mailto:frapk45@mail.ru">frapk45@mail.ru</a>
                            <a href="mailto:ck@invest45.ru">ck@invest45.ru</a>
                        </div>
                    </div>
                    <div class="contactblock">
                        <div class="icon"><img src="img/telicon.png" alt="Телефоны" class="ficon"></div>
                        <div class="info">
                            <a href="tel:83522432180">+7 (3522) - 43 - 21 - 80</a>
                            <a href="tel:83522433510">+7 (3522) - 43 - 35 - 10</a>
                            <a href="tel:89225794403">+7 (922) - 579 - 44 - 03</a>
                        </div>
                    </div>
                    <div class="contactblock">
                        <div class="icon"><img src="img/mapicon.png" alt="Адрес" class="ficon"></div>
                        <div class="info">
                            <p>640002 г. Курган, <br> ул. Володарского, 65, стр. 1, оф. 510</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-7 col-md-6"><div id="map"></div></div>
            </div>
        </div>
    </section>
</main>
@endsection
