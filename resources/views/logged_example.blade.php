@extends('layouts.app')

@section('content')
<div class="site-section mb-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-3">
                <div class="card bg-secondary">
                    <h5 class="card-header text-white">Меню</h5>
                    <div class="card-body vertical-menu-card">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="list-group">
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
                                    <a href="#" class="list-group-item list-group-item-action">
                                        Текст
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 mb-5">
                <div class="card">
                    <h5 class="card-header">Име на страницата</h5>

                    <div class="card-body">
                        <p>Това е шаблон за страниците, когато потребителя е влязъл!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection