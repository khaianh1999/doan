@extends('layouts.admin.auth')

@section('main-content')
    <div class="login-box">
        <div class="login-logo">
            <a href="/">Khai Anh</a>
        </div>
        <div class="card">

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
            <div class="card-body login-card-body">
                <p class="login-box-msg">Gửi mật khẩu mới thành công</p>
                <form>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">


                    <div class="row">
                        <div class="col-12">

                            <a href="{{ route('login') }}" class="btn btn-primary btn-block">
                                Đăng nhập</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
