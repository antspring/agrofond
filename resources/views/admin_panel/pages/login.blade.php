@extends('admin_panel.base')

@section('content')
<div class="login-logo">
    <b>Log</b>in
</div>
<div class="card">
    <div class="card-body login-card-body">
        <form method="post">
            <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Login">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-sign-in-alt"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Войти</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
