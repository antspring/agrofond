@extends('layout.base')

@section('content')
<main>
    <div class="crumbs">
        <div class="container">
            <a href="index.html" class="homelink">Главная</a> / <span class="current">Готовые решения</span>
        </div>
    </div>

    <section id="solutions" class="solutions">
        <div class="container">
            <h1 class="pageh1">Готовые решения</h1>
            <div class="leaf"><img src="img/leaf.png" alt="---"></div>
            <div class="solutionsfilter">
                <button data-filter="filter1">Животноводство</button>
                <button data-filter="filter2">Растениеводство</button>
                <button data-filter="filter3">Птицеводство</button>
                <button data-filter="filter4">Рыбоводство</button>
            </div>
            <div class="row solutionsrow">
                <div class="col-xs-12 col-sm-4 col-md-3" data-filter="filter1">
                    <a href="example.docx" download="download" class="solution">
                        <img src="img/pdficon.png" alt="PDF">
                        <p class="title">Животноводство</p>
                        <p class="name">Наименование</p>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3" data-filter="filter3">
                    <a href="example.docx" download="download" class="solution">
                        <img src="img/pdficon.png" alt="PDF">
                        <p class="title">Птицеводство</p>
                        <p class="name">Наименование</p>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3" data-filter="filter2">
                    <a href="example.docx" download="download" class="solution">
                        <img src="img/pdficon.png" alt="PDF">
                        <p class="title">Растениеводство</p>
                        <p class="name">Наименование</p>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3" data-filter="filter4">
                    <a href="example.docx" download="download" class="solution">
                        <img src="img/pdficon.png" alt="PDF">
                        <p class="title">Рыбоводство</p>
                        <p class="name">Наименование</p>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3" data-filter="filter3">
                    <a href="example.docx" download="download" class="solution">
                        <img src="img/pdficon.png" alt="PDF">
                        <p class="title">Птицеводство</p>
                        <p class="name">Наименование</p>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3" data-filter="filter2">
                    <a href="example.docx" download="download" class="solution">
                        <img src="img/pdficon.png" alt="PDF">
                        <p class="title">Растениеводство</p>
                        <p class="name">Наименование</p>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3" data-filter="filter4">
                    <a href="example.docx" download="download" class="solution">
                        <img src="img/pdficon.png" alt="PDF">
                        <p class="title">Рыбоводство</p>
                        <p class="name">Наименование</p>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3" data-filter="filter1">
                    <a href="example.docx" download="download" class="solution">
                        <img src="img/pdficon.png" alt="PDF">
                        <p class="title">Животноводство</p>
                        <p class="name">Наименование</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
