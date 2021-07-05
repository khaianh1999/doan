@extends('layouts.admin.auth')

@section('main-content')
    <div class="login-box">
        <div class="login-logo">
            <a href="/">Khải Anh</a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Tài khoản của bạn</p>
                <form method="POST" action="{{ route('password') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    @if (session('errorMsg'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('errorMsg') }}
                        </div>
                    @endif
                    @if (session('successMsg'))
                        <div class="alert alert-success" role="alert">
                            {{ session('successMsg') }}
                        </div>
                    @endif
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" value="">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
