@extends('layouts.app')

@section('content')
<div class="site-section mb-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4">
                @include('layouts.includes.users.menu')
            </div>
            <div class="col-md mb-5">
                <div class="card">
                    <h5 class="card-header">Редактиране на профила</h5>
                    @include('commons.msgs')
                    <div class="card-body">
                        <form method="POST" action="{{ route('profile.update', auth()->user()->id) }}">
                            @csrf
                            <p class="text-center font-weight-bold">Лични данни</p>
                            <div class="form-group row">
                                <label for="name" class="col-md-3 col-form-label text-md-right">Име</label>

                                <div class="col-md-7">
                                    <input id="name" type="text" class="form-control" name="name"
                                        value="{{$user->name}}" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="settlement" class="col-md-3 col-form-label text-md-right">Град</label>

                                <div class="col-md-7">
                                    <input id="settlement" type="text" class="form-control" name="settlement"
                                        value="{{$user->settlement}}" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-md-3 col-form-label text-md-right">Адрес</label>

                                <div class="col-md-7">
                                    <input id="address" type="text" class="form-control" name="address"
                                        value="{{$user->address}}" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone" class="col-md-3 col-form-label text-md-right">Телефон</label>

                                <div class="col-md-7">
                                    <input id="phone" type="text" class="form-control" name="phone"
                                        value="{{$user->phone}}" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="age" class="col-md-3 col-form-label text-md-right">Възраст</label>

                                <div class="col-md-7">
                                    <input id="age" type="text" class="form-control" name="age" value="{{$user->age}}"
                                        autocomplete="off">
                                </div>
                            </div>

                            @if(Auth::user()->hasRole('quarantined'))

                            <p class="text-center">Карантина</p>
                            <div class="form-group row">
                                <label for="quarantine_started_at"
                                    class="col-md-3 col-form-label text-md-right">От</label>

                                <div class="col-md-7">
                                    <input id="quarantine_started_at" type="date" class="form-control"
                                        name="quarantine_started_at" value="{{$user->quarantine_started_at}}"
                                        autocomplete="off">
                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="quarantine_finished_at"
                                    class="col-md-3 col-form-label text-md-right">До</label>

                                <div class="col-md-7">
                                    <input id="quarantine_finished_at" type="date" class="form-control"
                                        name="quarantine_finished_at" value="{{$user->quarantine_finished_at}}"
                                        autocomplete="off">
                                </div>

                            </div>

                            @endif



                            <p class="text-center font-weight-bold">Профил</p>
                            <div class="form-group row">
                                <label for="email" class="col-md-3 col-form-label text-md-right">Имейл адрес</label>

                                <div class="col-md-7">
                                    <input id="email" type="text" class="form-control" name="email"
                                        value="{{$user->email}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="old_password" class="col-md-3 col-form-label text-md-right">Стара
                                    парола</label>

                                <div class="col-md-7">
                                    <input id="old_password" type="password" class="form-control" name="old_password"
                                        value="" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="new_password" class="col-md-3 col-form-label text-md-right">Нова
                                    парола</label>

                                <div class="col-md-7">
                                    <input id="new_password" type="password" class="form-control" name="new_password"
                                        value="" autocomplete="off">
                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <div class="form-group row">
                                <div class="col-md-10 mx-auto">
                                    <button type="submit" class="btn btn-success btn-block">
                                        <i class="fas fa-user-edit"></i> Редактирай
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
@endsection