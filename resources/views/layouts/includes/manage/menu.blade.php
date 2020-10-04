<div class="card">
    <h5 class="card-header">Администрация</h5>
    <div class="card-body vertical-menu-card">
        <div class="row">
            <div class="col-md-12">
                <div class="list-group">
                    <a class="list-group-item list-group-item-action {{ request()->routeIs('manage.dashboard') ? 'active' : '' }}"
                        href="{{ route('manage.dashboard') }}">Начало</a>
                    <a class="list-group-item list-group-item-action {{ request()->routeIs('users.*') ? 'active' : ''  }}"
                        href="{{ route('users.index') }}">Потребители</a></li>
                    <a class="list-group-item list-group-item-action {{ request()->routeIs('manage.categories.*') ? 'active' : '' }}"
                        href="{{ route('manage.categories.index') }}">Категории</a></li>
                </div>
            </div>
        </div>
    </div>
</div>