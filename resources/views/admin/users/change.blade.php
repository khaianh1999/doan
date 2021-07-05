@extends('layouts.admin.app')

@section('title', 'Người dùng')

@section('main-content')

      @if ($errors->any())
        <div class="alert alert-danger border-left-danger" role="alert">
            <ul class="pl-4 my-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

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
    <div class="row">
        <div class="col-lg-12 order-lg-1">

            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">Thay đổi mật khẩu</h5>
                </div>

                <div class="card-body">

                    <form method="POST" action="{{ route('admin.passwordUpdate') }}" id="myform">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="pl-lg-4">
                            <div class="row form-group">
                                <div class="col-lg-6">
                                    <label class="form-control-label"
                                        for="full_name">Mật khẩu cũ<span
                                            class="small text-danger">*</span></label>
                                    <input type="password" id="" class="form-control" name="oldpassword" value="" required
                                        autocomplete="oldpassword" autofocus>
                                    @error('oldpassword')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-6">
                                    <label class="form-control-label" for="email">Mật khẩu mới<span
                                            class="small text-danger">*</span></label>
                                    <input type="password" id="password" class="form-control" name="password" value=""
                                        required autocomplete="password" autofocus>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-6">
                                    <label class="form-control-label"
                                        for="email">Nhập lại mật khẩu <span
                                            class="small text-danger">*</span></label>
                                    <input type="password" id="password_comfirm" class="form-control"
                                        name="password_comfirm" value="" required autocomplete="password_confirm" autofocus>
                                    @error('password_confirm')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col text-left">
                                    <button type="submit"
                                        class="btn btn-primary save">Lưu</button>
                                    <a href="{{ route('admin.users.index') }}"
                                        class="btn btn-secondary">Thoát</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>

@endsection
