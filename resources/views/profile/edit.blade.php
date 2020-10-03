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
                    @include('commons.msgs')
                    <div class="card-body">
                        <form method="POST" action="{{ route('profile.update') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="text-center font-weight-bold">Лични данни</p>
                                    <div class="form-group row">
                                        <label for="name" class="col-md-3 col-form-label text-md-right">Име</label>

                                        <div class="col-md-7">
                                            <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="settlement" class="col-md-3 col-form-label text-md-right">Град</label>

                                        <div class="col-md-7">
                                            <input id="settlement" type="text" class="form-control" name="settlement" value="{{$user->settlement}}" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="address" class="col-md-3 col-form-label text-md-right">Адрес</label>

                                        <div class="col-md-7">
                                            <input id="address" type="text" class="form-control" name="address" value="{{$user->address}}" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="phone" class="col-md-3 col-form-label text-md-right">Телефон</label>

                                        <div class="col-md-7">
                                            <input id="phone" type="text" class="form-control" name="phone" value="{{$user->phone}}" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="age" class="col-md-3 col-form-label text-md-right">Възраст</label>

                                        <div class="col-md-7">
                                            <input id="age" type="text" class="form-control" name="age" value="{{$user->age}}" autocomplete="off">
                                        </div>
                                    </div>

                                    @if(Auth::user()->hasRole('quarantined'))

                                    <div class="form-group row">
                                        <label for="quarantine_from" class="col-md-3 col-form-label text-md-right">Карантина от</label>

                                        <div class="col-md-7">
                                            <input id="quarantine_from" type="text" class="form-control" name="quarantine_from" value="{{$user->age}}" autocomplete="off">
                                        </div>
                                    </div>

                                    @endif



                                </div>
                                <div class="col-md-6">
                                    <p class="text-center font-weight-bold">Акаунт</p>
                                    <div class="form-group row">
                                        <label for="phone" class="col-md-3 col-form-label text-md-right">Email</label>

                                        <div class="col-md-7">
                                            <input id="phone" type="text" class="form-control" name="phone" value="{{$user->email}}" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="old_password" class="col-md-3 col-form-label text-md-right">Стара парола</label>

                                        <div class="col-md-7">
                                            <input id="old_password" type="password" class="form-control" name="old_password" value="" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="new_password" class="col-md-3 col-form-label text-md-right">Нова парола</label>

                                        <div class="col-md-7">
                                            <input id="new_password" type="password" class="form-control" name="new_password" value="" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="image" class="col-md-3 col-form-label text-md-right">Снимка</label>

                                        <div class="col-md-7">
                                            <input id="image" type="file" class="form-control" name="image" value="" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mx-auto">
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 mx-auto mt-4">
                                            <button type="submit" class="btn btn-success btn-block">
                                                Редактирай
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection