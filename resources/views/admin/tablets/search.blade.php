<form action="{{ $route }}" method="get" id="admin-search">
    @csrf
    <div class="row " id="input_search">
        <div class="" id="search_text" style="margin:0 0 10px 0;">
            <label for="a" class="d-block">Tên, Giá tiền...</label>
            <div class="input-group">
                <input id="a" type="text" name="q" class="form-control"
                    placeholder="tên, giá tiền..."
                    value="{{ request()->input('q') }}" autocomplete="off">
            </div>
        </div>
        <div class="" id="search_select">
            <label for="status" class="d-block">Trạng thái</label>
            <select class="form-control custom-select" name="status" id="status">
                <option value="1" <?php if (1==request()->input('status')) {
                    echo 'selected="selected"';
                    } ?>>Hoạt động</option>
                <option value="0" <?php if (0==request()->input('status')) {
                    echo 'selected="selected"';
                    } ?>>Không hoạt động</option>
                <option value=" " <?php if (null==request()->input('status')) {
                    echo 'selected="selected"';
                    } ?>>Tất cả</option>
            </select>
        </div>
     


        <div class="d-flex flex-column" id="btn_search">
            <label for="" class="d-block">&nbsp;</label>
            <div class="d-flex">
                <a href="{{ route('admin.tablets.index') }}" class="btn btn-default"
                    id="reset">Đặt lại</a>
                <button type="submit" id="search" class="btn btn-success">Tìm kiếm</button>
            </div>
        </div>
    </div>




</form>
