@extends('layouts.admin.app')

@section('title', 'Khách hàng')

@section('main-content')

@include('admin.customers.search', ['route' => route('admin.customers.index')])
<form method="post">
    @csrf
    @method('POST')
    <div class="action-list col-12 mb-2" style="display:flex; justify-content:space-between; align-items: center;">
        <div class="amount-user">
            @if ($customers->total() <= 0) @else {!! $customers->total() - 1 !!} khách hàng
                @endif
        </div>
        <div class="text-right">
            <a href="{{ route('admin.customers.create') }}" class="text-success">Tạo mới</a>
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
                            <th>Tên </th>
                            <th>Email</th>
                            <th>Giới tính</th>
                            <th width="12%">Điện thoại</th>
                            <th>Địa chỉ</th>
                            <th width="12%">
                                <form action="">Chức năng</form>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($customers->total() <= 0)
                         <tr>
                            <td colspan="8" class="text-center text-danger bg-danger">
                                Không có giữ liệu
                            </td>
                            </tr>
                            @else
                            @foreach ($customers as $item)

                            <tr>

                                <td>{{ $item->id }}</td>

                                <td>{{ $item->full_name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ ($item->gender == '1') ? "Nam" : "Nữ" }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->address }}</td>

                                <td>
                                    <form action="{{ route('admin.customers.destroy', $item->id) }}" method="POST" style="float: left; margin-right: 7px">
                                        <a class="btn btn-primary btn-sm mr-1" href="{{ route('admin.customers.edit', $item->id) }}"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-danger btn-sm delete-d" id="{{ $item->id }}" data="customers"><i class="fas fa-trash"></i></a>
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


                                </td>
                            </tr>


                            @endforeach
                            @endif
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</form>
<div class="row">
    @if ($customers->total() <= 0) <p>
        </p>
        @else
        <div class="col-6">
            Hiển thị : {!! $customers->currentPage() * $customers->perPage() - $customers->perPage() + 1 !!} - {!! $customers->currentPage() * $customers->perPage() - $customers->perPage() + $customers->count() - 1 !!}
            của {!! $customers->total() - 1 !!}
        </div>
        <div class="col-6">
            <div class="float-right">
                {!! $customers->appends(request()->except(['page', '_token']))->links() !!}
            </div>
        </div>
        @endif
</div>

@endsection