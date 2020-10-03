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
                    <h5 class="card-header">Редактиране на профила</h5>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-center font-weight-bold">Лични данни</p>
                                <!-- 
                                    име
                                    телефон
                                    адрес
                                    ...

                                 -->

                        
                            </div>
                            <div class="col-md-6">
                                <p class="text-center font-weight-bold">Акаунт</p>
                                <!-- 
                                    снимка
                                    имейл
                                    парола - стара парола, нова парола ^ 2                                    

                                 -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection