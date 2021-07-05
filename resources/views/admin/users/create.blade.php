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
    <div class="row">
        <div class="col-lg-12 order-lg-1">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Thông tin người dùng</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.users.store') }}" autocomplete="off" id="myform">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label"
                                            for="full_name">Tên đầy đủ<span
                                                class="small text-danger">*</span></label>
                                        <input type="text" id="name" class="form-control" name="full_name"
                                            value="{{ old('full_name') }}" maxlength="500" required>
                                    </div>
                                </div>
                          
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="email">Email
                                            <span class="small text-danger">*</span></label>
                                        <input type="email" id="email" class="form-control" name="email"
                                            placeholder="example@example.com" value="{{ old('email') }}" maxlength="200"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="phone">Số điện thoại
                                            <span class="small text-danger">*</span>
                                        </label>
                                        <input type="text" id="phone" class="form-control" name="phone"
                                            value="{{ old('phone') }}" minlength="10" maxlength="10" required>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label"
                                            for="address">Địa chỉ
                                            <span class="small text-danger">*</span>
                                        </label>
                                        <textarea rows="5" id="address" class="form-control" name="address" maxlength="500"
                                            required>{{ old('address') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col text-left">
                                    <button type="submit"
                                        class="btn btn-primary save submit">Tạo Mới</button>
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