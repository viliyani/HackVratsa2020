<div class="card">
    <h5 class="card-header">Навигация</h5>
    <div class="card-body vertical-menu-card">
        <div class="row">
            <div class="col-md-12">
                <div class="list-group">
                    @if ($user->hasRole('assistant'))
                    <a href="#" class="list-group-item list-group-item-action">Асистент</a>
                    @endif
                    <a href="#" class="list-group-item list-group-item-action">
                        Текст
                    </a>
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