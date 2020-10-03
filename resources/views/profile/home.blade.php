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
                    <h5 class="card-header">Профил</h5>

                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <img src="{{ Avatar::create($user->name)->toBase64() }}" />
                            </div>
                            <div class="col">
                                <strong>{{ $user->name }}</strong>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <strong>Имейл адрес:</strong>
                            </div>
                            <div class="col">
                                <p>{{ $user->email }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <strong>Регистрация:</strong>
                            </div>
                            <div class="col">
                                <p>{{ $user->created_at }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection