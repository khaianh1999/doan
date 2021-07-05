@extends('layouts.admin.app')

@section('title', 'Điện thoại')

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
                <h6 class="m-0 font-weight-bold text-primary">Thông tin sản phẩm</h6>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.phones.store') }}" autocomplete="off" id="myform" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="name">Tên sản phẩm<span class="small text-danger">*</span></label>
                                    <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}" maxlength="500" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="origin">Xuất xứ<span class="small text-danger">*</span></label>
                                    <input type="text" id="origin" class="form-control" name="origin" value="{{ old('origin') }}" maxlength="500" required>
                                </div>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="code">Mã sản phẩm<span class="small text-danger">*</span></label>
                                    <input type="text" id="code" class="form-control" name="code" value="{{ old('code') }}" maxlength="500" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="picture">Ảnh sản phẩm<span class="small text-danger">*</span></label>
                                    <input type="file" id="picture" class="form-control" name="picture" value="{{ old('picture') }}" maxlength="500" required>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-labe l" for="price">Giá tiền<span class="small text-danger">*</span></label>
                                    <input type="text" id="price" class="form-control" name="price" value="{{ old('price') }}" maxlength="500" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <label class="form-control-label" for="status">Trạng thái</label>
                                <select class="form-control custom-select" name="status" style="width:100%;">
                                    <option value="1" @if (old('status')==0) selected="selected" @endif>
                                        Hoạt động</option>
                                    <option value="0" @if (old('status')==1) selected="selected" @endif>
                                        Không hoạt động</option>

                                </select>
                            </div>


                        </div>


                        <div class="row mt-5">
                            <div class="col-lg-12">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="description" style="margin-top: -26px;">Mô tả

                                    </label>
                                    <textarea rows="5" id="description" class="form-control rich-text" name="description" maxlength="500">{{ old('description') }}</textarea>
                                </div>
                            </div>
                        </div>
                     
                        <div class="row mt-5">
                            <div class="col-lg-12">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="configuration" style="margin-top: -26px;">Cấu hình
                                    </label>
                                    <textarea rows="5" id="configuration" class="form-control rich-text" name="configuration" maxlength="500">{{ old('configuration') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col text-left">
                                <button type="submit" class="btn btn-primary save submit">Tạo Mới</button>
                                <a href="{{ route('admin.phones.index') }}" class="btn btn-secondary">Thoát</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




@endsection