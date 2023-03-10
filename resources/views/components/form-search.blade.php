@props(['name'])
<form method="GET" class="form-inline">
    <div class="input-group input-group-sm ml-auto">
        <input name="{{ $name }}" value="<?= request()->input($name) ?>" type="text" class="form-control" placeholder="search...">
        <div class="input-group-append">
            <button type="submit" class="btn btn-outline-secondary">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
</form>