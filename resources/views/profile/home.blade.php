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
                    <h5 class="card-header">Профил</h5>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md">
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
                                @if(Auth::user()->hasRole('quarantined'))
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><span class="font-weight-bold">Карантина от:</span> {{ $user->quarantine_started_at }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><span class="font-weight-bold">Карантина до:</span> {{ $user->quarantine_finished_at }}</p>
                                    </div>
                                </div>
                                @endif
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="{{ route('profile.edit') }}" class="btn btn-outline-primary"><i class="fas fa-edit"></i> Редактирай профила</a>
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