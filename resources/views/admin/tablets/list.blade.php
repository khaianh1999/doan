@extends('layouts.admin.app')

@section('title', 'Máy tính bảng')

@section('main-content')

@include('admin.tablets.search', ['route' => route('admin.tablets.index')])
<form method="post">
    @csrf
    @method('POST')
    <div class="action-list col-12 mb-2" style="display:flex; justify-content:space-between; align-items: center;">
        <div class="amount-user">
            @if ($tablets->total() <= 0) @else {!! $tablets->total() !!} Laptop
                @endif
        </div>
        <div class="text-right">
            <a href="{{ route('admin.tablets.create') }}" class="text-success">Tạo mới</a>
        </div>
    </div>
    @if (session('successMsg'))
    <div class="alert alert-success" role="alert">
        {{ session('successMsg') }}
    </div>
    @endif
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table m-0">
                    <thead>
                        <tr>

                            <th width="2%">ID</th>
                            <th>Tên sản phẩm</th>
                            <th class="text-center" style="width:20%;">Ảnh sản phẩm</th>
                            <th>Xuất xứ</th>
                            <th>Giá tiền</th>
                            <th>Trạng thái</th>
                            <th width="12%">
                                <form action="">Chức năng</form>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($tablets->total() <= 0) <tr>
                            <td colspan="8" class="text-center text-danger bg-danger">
                                  Không có giữ liệu
                            </td>
                            </tr>
                            @else
                            @foreach ($tablets as $item)
                        
                            <tr>
                               
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                <img src="{{ asset('img/'. $item->picture) }}" alt="sanpham" class="mx-auto d-block w-50">
                                </td>
                                <td>{{ $item->origin }}</td>
                                <td>{{ currency_format($item->price) }}</td>
                                <td>
                                    @if ($item->status === 1)
                                    <span class="badge badge-success">Hoạt động</span>
                                    @else
                                    <span class="badge badge-danger">Không hoạt động</span>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('admin.tablets.destroy', $item->id) }}" method="POST" style="float: left; margin-right: 7px">
                                        <a class="btn btn-primary btn-sm mr-1" href="{{ route('admin.tablets.edit', $item->id) }}"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-danger btn-sm delete-d" id="{{ $item->id }}" data="tablets"><i class="fas fa-trash"></i></a>
                                    </form>

                                    {{-- //Modal Delete --}}
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        Bạn có muốn xóa không ?
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5>Bạn có chắc chắn không ?</h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                                                    <button type="button" class="btn btn-primary" id="confirm-delete">Đồng ý</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="{{ $item->id }}" class="status" data="tablets">
                                        @if ($item->status === 1)
                                        <a href="javascript:void(0)" class="btn btn-secondary btn-sm" title="Inactive"><i class="fas fa-minus-square"></i></a>
                                        @else
                                        <a href="javascript:void(0)" class="btn btn-success btn-sm" title="Active"><i class="fas fa-plus-square"></i></a>
                                        @endif
                                    </div>

                                </td>
                            </tr>
                       
                            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">
                                                Bạn có muốn thay đổi không ?
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h5>Thay đổi trạng thái</h5>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancel">Thoát</button>
                                            <button type="button" class="btn btn-primary" id="confirm-change">Đồng ý</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</form>
<div class="row">
    @if ($tablets->total() <= 0) <p>
        </p>
        @else
        <div class="col-6">
            Hiển thị : {!! $tablets->currentPage() * $tablets->perPage() - $tablets->perPage() + 1 !!} - {!! $tablets->currentPage() * $tablets->perPage() - $tablets->perPage() + $tablets->count() !!}
            của {!! $tablets->total() !!}
        </div>
        <div class="col-6">
            <div class="float-right">
                {!! $tablets->appends(request()->except(['page', '_token']))->links() !!}
            </div>
        </div>
        @endif
</div>











@endsection

<?php
 function currency_format($number, $suffix = '') {
    if (!empty($number)) {
        return number_format($number, 0, ',', ',') . "{$suffix}";
    }
}
?>