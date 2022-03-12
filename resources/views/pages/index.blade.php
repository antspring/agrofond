@extends('layout.base')

@section('content')
<main>
    <section id="first" class="first">
        <div class="container">
            <div class="fslider">
                @foreach($home_slider_items as $item)
                    <div class="slide">
                        <h1 class="title">{{$item->heading}}</h1>
                        <p class="text">{{$item->text}}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="lastnews" class="lastnews">
        <div class="container">
            <h2><span>Последние</span> Новости</h2>
            <div class="leaf"><img src="img/leaf.png" alt="---"></div>
            <div class="newslider">
                <div class="card">
                    <img src="img/news.png" alt="Заголовок">
                    <p class="title">Заголовок</p>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat ultrices nulla eu in nisl, ultrices. Vivamus porttitor ac aliquet quisque scelerisque phasellus.</p>
                    <a href="single.html">Подробнее</a>
                </div>
                <div class="card">
                    <img src="img/news.png" alt="Заголовок">
                    <p class="title">Заголовок</p>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat ultrices nulla eu in nisl, ultrices. Vivamus porttitor ac aliquet quisque scelerisque phasellus.</p>
                    <a href="single.html">Подробнее</a>
                </div>
                <div class="card">
                    <img src="img/news.png" alt="Заголовок">
                    <p class="title">Заголовок</p>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat ultrices nulla eu in nisl, ultrices. Vivamus porttitor ac aliquet quisque scelerisque phasellus.</p>
                    <a href="single.html">Подробнее</a>
                </div>
                <div class="card">
                    <img src="img/news.png" alt="Заголовок">
                    <p class="title">Заголовок</p>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat ultrices nulla eu in nisl, ultrices. Vivamus porttitor ac aliquet quisque scelerisque phasellus.</p>
                    <a href="single.html">Подробнее</a>
                </div>
                <div class="card">
                    <img src="img/news.png" alt="Заголовок">
                    <p class="title">Заголовок</p>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat ultrices nulla eu in nisl, ultrices. Vivamus porttitor ac aliquet quisque scelerisque phasellus.</p>
                    <a href="single.html">Подробнее</a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
