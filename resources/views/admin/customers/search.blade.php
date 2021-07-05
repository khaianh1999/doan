<form action="{{ $route }}" method="get" id="admin-search">
    @csrf
    <div class="row " id="input_search">
        <div class="" id="search_text" style="margin:0 0 10px 0;">
            <label for="a" class="d-block">Tên, Email...</label>
            <div class="input-group">
                <input id="a" type="text" name="q" class="form-control"
                    placeholder="tên, email..."
                    value="{{ request()->input('q') }}" autocomplete="off">
            </div>
        </div>
        <div class="" id="search_select">
            <label for="gender" class="d-block">Giới tính</label>
            <select class="form-control custom-select" name="gender" id="gender">
                <option value="1" <?php if (1==request()->input('gender')) {
                    echo 'selected="selected"';
                    } ?>>Nam</option>
                <option value="0" <?php if (0==request()->input('gender')) {
                    echo 'selected="selected"';
                    } ?>>Nữ</option>
                <option value=" " <?php if (null==request()->input('gender')) {
                    echo 'selected="selected"';
                    } ?>>Tất cả</option>
            </select>
        </div>
     


        <div class="d-flex flex-column" id="btn_search">
            <label for="" class="d-block">&nbsp;</label>
            <div class="d-flex">
                <a href="{{ route('admin.customers.index') }}" class="btn btn-default"
                    id="reset">Đặt lại</a>
                <button type="submit" id="search" class="btn btn-success">Tìm kiếm</button>
            </div>
        </div>
    </div>




</form>
