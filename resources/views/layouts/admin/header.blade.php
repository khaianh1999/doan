<nav class="main-header navbar navbar-expand" style="padding-bottom: 0">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                    class="fas fa-fw fa-stream fa-flip-horizontal"></i></a>
        </li>
    </ul>
    @auth
        <ul class="navbar-nav ml-auto">
            <!-- @php
                $language = Session()->get('language');
            @endphp
            <li class="nav-item">
                <p class="nav-link">
                    @if (Session()->get('language') == 'vi')
                        <a href="{{ route('admin.change-language', ['en']) }}">
                            <img src="https://i.imgur.com/467V5bS.png" style="width:20px;height:20px;">
                        </a>
                    @else
                        <a href="{{ route('admin.change-language', ['vi']) }}">
                            <img src="https://i.imgur.com/W8bgRxW.png" alt="" style="width:20px;height:20px;">
                        </a>
                    @endif
                </p>
            </li> -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-user-circle mr-2"></i> {{ Auth::user()->full_name }}<i
                        class="fas fa-angle-down ml-2"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">{{ Auth::user()->full_name }} </span>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('admin.users.edit', Auth::user()->id) }}" class="dropdown-item">
                        <i class="fas fa-user mr-2"></i>Hồ sơ
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('admin.passwordChange') }}" class="dropdown-item">
                        <i class="fas fa-key mr-2"></i>Đổi mật khẩu
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item dropdown-footer text-left">
                        Đăng xuất
                        <i class="float-right fa fa-fw fa-sign-out-alt text-danger"></i>
                    </a>
                </div>
            </li>
        </ul>
    @endauth
</nav>
@can('bp_agent_id')
    <ul style="list-style: none;">
        <li style="font-weight:bold; color: #1b65a4;text-align: right;padding-right: 45px;">Tài khoản đại lý: {{ Auth::user()->full_name }} - Số dư tài khoản:
            @foreach ($agents as $item)
                @if (Auth::user()->bp_agent_id == $item->id)
                    {{ currency_format($item->account_balance) }}
                @endif
            @endforeach
        </li>
    </ul>
@endcan
