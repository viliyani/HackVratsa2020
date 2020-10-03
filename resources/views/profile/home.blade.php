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
                            <div class="col-md-2">
                                <img src="{{ Avatar::create($user->name)->toBase64() }}" />
                            </div>
                            <div class="col-md-8 mx-auto">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><span class="font-weight-bold">Име:</span> {{ $user->name }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><span class="font-weight-bold">Години:</span> {{ $user->age }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><span class="font-weight-bold">Имейл:</span> {{ $user->email }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><span class="font-weight-bold">Телефон:</span> {{ $user->phone }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><span class="font-weight-bold">Град:</span> {{ $user->settlement }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><span class="font-weight-bold">Адрес:</span> {{ $user->address }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection