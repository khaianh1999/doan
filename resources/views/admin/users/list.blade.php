@extends('layouts.admin.app')

@section('title', 'Người dùng')

@section('main-content')

@include('admin.users.search', ['route' => route('admin.users.index')])
<form method="post">
    @csrf
    @method('POST')
    <div class="action-list col-12 mb-2" style="display:flex; justify-content:space-between; align-items: center;">
        <div class="amount-user">
            @if ($users->total() <= 0) @else {!! $users->total() - 1 !!} người dùng
                @endif
        </div>
        <div class="text-right">
            <button type="submit" formaction="{{ route('resetPassAll') }}" id="resetPass" class="text-success mr-2">Reset Password</button>
            <a href="{{ route('admin.users.create') }}"  class="text-success">Tạo mới</a>
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
                            <th class="checkbox_class" width="2%">
                                <input type="checkbox" class="selectall">
                            </th>
                            <th width="2%">ID</th>
                            <th>Tên </th>
                            <th>Email</th>
                            <th width="10%">Status</th>
                            <th width="12%">Điện thoại</th>
                            <th width="12%">Ngày tạo</th>
                            <th width="12%">
                                <form action="">Chức năng</form>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($users->total() <= 0) <tr>
                            <td colspan="8" class="text-center text-danger bg-danger">
                                  Không có giữ liệu
                            </td>
                            </tr>
                            @else
                            @foreach ($users as $item)
                            @if ($item->email === 'admin@bestprice.vn')
                            @else
                            <tr>
                                <td class="checkbox_class" width="2%">
                                    <input type="checkbox" name="ids[]" class="selectbox" value="{{ $item->email }}">
                                </td>
                                <td>{{ $item->id }}</td>

                                <td>{{ $item->full_name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    @if ($item->status === 1)
                                    <span class="badge badge-success">Hoạt động</span>
                                    @else
                                    <span class="badge badge-danger">Không hoạt động</span>
                                    @endif
                                </td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <form action="{{ route('admin.users.destroy', $item->id) }}" method="POST" style="float: left; margin-right: 7px">
                                        <a class="btn btn-primary btn-sm mr-1" href="{{ route('admin.users.edit', $item->id) }}"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-danger btn-sm delete-d" id="{{ $item->id }}" data="users"><i class="fas fa-trash"></i></a>
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
                                    <div id="{{ $item->id }}" class="status" data="users">
                                        @if ($item->status === 1)
                                        <a href="javascript:void(0)" class="btn btn-secondary btn-sm" title="Inactive"><i class="fas fa-minus-square"></i></a>
                                        @else
                                        <a href="javascript:void(0)" class="btn btn-success btn-sm" title="Active"><i class="fas fa-plus-square"></i></a>
                                        @endif
                                    </div>

                                </td>
                            </tr>
                            @endif
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
    @if ($users->total() <= 0) <p>
        </p>
        @else
        <div class="col-6">
            Hiển thị : {!! $users->currentPage() * $users->perPage() - $users->perPage() + 1 !!} - {!! $users->currentPage() * $users->perPage() - $users->perPage() + $users->count() - 1 !!}
            của {!! $users->total() - 1 !!}
        </div>
        <div class="col-6">
            <div class="float-right">
                {!! $users->appends(request()->except(['page', '_token']))->links() !!}
            </div>
        </div>
        @endif
</div>

@endsection