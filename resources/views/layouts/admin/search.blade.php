<form action="{{ $route }}" method="get" id="admin-search">
    @csrf
    <div class="row mb-4">
        <div class="col-sm-4">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('common.column_name') }}..."
                    value="{{ request()->input('q') }}">
            </div>
        </div>
        <div class="col-sm-2">
            <button type="submit" id="search-btn" class="btn btn-primary">{{ trans('common.btn_search') }}</button>
        </div>
    </div>
</form>
