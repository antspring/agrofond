@extends('layout.base')

@section('content')
<main>
    <section id="first" class="first">
        <div class="container">
            <div class="fslider">
                <div class="slide">
                    <h1 class="title">Lorem ipsum dolor. <br> Et tincidunt in senectus.</h1>
                    <p class="text">Ultrices in suspendisse ut ipsum porttitor sed at diam. <br> Urna, tortor tortor vitae ut diam <br> adipiscing mattis maecenas.</p>
                </div>
                <div class="slide">
                    <p class="title">Lorem ipsum dolor. <br> Et tincidunt in senectus.</p>
                    <p class="text">Ultrices in suspendisse ut ipsum porttitor sed at diam. <br> Urna, tortor tortor vitae ut diam <br> adipiscing mattis maecenas.</p>
                </div>
                <div class="slide">
                    <p class="title">Lorem ipsum dolor. <br> Et tincidunt in senectus.</p>
                    <p class="text">Ultrices in suspendisse ut ipsum porttitor sed at diam. <br> Urna, tortor tortor vitae ut diam <br> adipiscing mattis maecenas.</p>
                </div>
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
