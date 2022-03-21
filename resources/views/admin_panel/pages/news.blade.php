@extends('admin_panel.base')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Новости</h1>
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
                                <form action="{{ route('news.store') }}" method="POST" class="save_form flex-column" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group col ml-2">
                                            <label class="custom-file-label" for="customFile">Выберите изображение</label>
                                            <input name="image" type="file" class="custom-file-input" id="customFile">
                                        </div>
                                        <div class="form-group col">
                                            <label for="exampleInputEmail1">Заголовок</label>
{{--                                            <input name="heading" type="text" class="form-control" id="exampleInputEmail1" placeholder="Введите заголовок" required>--}}
                                            <textarea name="heading" class="form-control" id="exampleInputEmail1" placeholder="Введите заголовок"></textarea>
                                        </div>
                                        <div class="form-group col">
                                            <label for="exampleInputEmail1">Текст</label>
{{--                                            <input name="text" type="text" class="form-control" id="exampleInputEmail1" placeholder="Введите текст" required>--}}
                                            <textarea name="text" class="form-control" id="exampleInputEmail1" placeholder="Введите текст"></textarea>
                                        </div>
                                    </div>
                                    <div class="card-footer ml-2">
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
