{{-- <aside class="menu">
    <ul class="menu-list">
        <li><a class="{{ request()->routeIs('manage.dashboard') ? 'is-active' : '' }}"
                href="{{ route('manage.dashboard') }}">Начало</a></li>
    </ul>
    <p class="menu-label">Администрация</p>
    <ul class="menu-list">
        <li><a class="{{ request()->routeIs('users.*') ? 'is-active' : ''  }}"
                href="{{ route('users.index') }}">Потребители</a></li>
    </ul>
    <ul class="menu-list">
    {{-- <p class="menu-label">Статии</p>
    <ul class="menu-list">
        <li><a class="{{ request()->routeIs('manage.articles.*') ? 'is-active' : '' }}"
                href="{{ route('manage.articles.index') }}">Статии</a></li>
    </ul>
    <ul class="menu-list">
        <li><a class="{{ request()->routeIs('manage.categories.*') ? 'is-active' : '' }}"
                href="{{ route('manage.categories.index') }}">Категории</a></li>
    </ul>
    <ul class="menu-list">
        <li><a class="{{ request()->routeIs('manage.tags.*') ? 'is-active' : '' }} "
                href="{{ route('manage.tags.index') }}">Тагове</a></li>
    </ul> --}}
{{-- </aside>  --}}
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
                    <a href="#" class="list-group-item list-group-item-action">
                        Текст
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        Текст
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        Текст
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
