@extends('admin_panel.base')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Контент для слайдера</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div id="slider_content" class="col">
                        <div class="form_content">
                            <div class="card card-primary">
                                <form action="{{ route('home-slider.store') }}" method="POST" class="save_form">
                                    @csrf
                                    <div class="card-body row">
                                        <div class="form-group col">
                                            <label for="exampleInputEmail1">Заголовок</label>
                                            <input name="heading" type="text" class="form-control" id="exampleInputEmail1" placeholder="Введите заголовок">
                                        </div>
                                        <div class="form-group col">
                                            <label for="exampleInputEmail1">Текст</label>
                                            <input name="text" type="text" class="form-control" id="exampleInputEmail1" placeholder="Введите текст">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Добавить</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
