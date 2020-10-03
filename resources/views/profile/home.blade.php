@extends('layouts.app')

@section('content')
<div class="site-section mb-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-3">
                @include('layouts.includes.users.menu')
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
                                <strong>Присъединяване:</strong>
                            </div>
                            <div class="col">
                                <p>{{ $user->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection