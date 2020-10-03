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
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <img src="{{ Avatar::create($user->name)->toBase64() }}" />
                                    </div>
                                </div>
                                <div class="row">
                                    
                                    <div class="col-md-12 mt-4 text-center">
                                        <i class="fas fa-star rating-star"></i>
                                        <i class="fas fa-star rating-star"></i>
                                        <i class="fas fa-star rating-star"></i>
                                        <i class="fas fa-star-half-alt rating-star"></i>
                                        <i class="far fa-star rating-star"></i>
                                    </div>
                                    <div class="col-md-12 text-center mt-2">
                                        <span class="font-weight-bold">Рейтинг:</span> 3.5
                                     </div>
                                </div>
                            </div>

                            <div class="col-md-8 mx-auto">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><span class="font-weight-bold">Име:</span> {{ $user->name }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><span class="font-weight-bold">Години:</span> {{ $user->age ?? '[ Не е попълнено ]' }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><span class="font-weight-bold">Имейл:</span> {{ $user->email }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><span class="font-weight-bold">Телефон:</span> {{ $user->phone ?? '[ Не е попълнено ]'}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><span class="font-weight-bold">Град:</span> {{ $user->settlement ?? '[ Не е попълнено ]' }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><span class="font-weight-bold">Адрес:</span> {{ $user->address ?? '[ Не е попълнено ]'}} </p>
                                    </div>
                                </div>
                                @if(Auth::user()->hasRole('quarantined'))
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><span class="font-weight-bold">Карантина от:</span> {{ $user->quarantine_started_at ?? '[ Не е попълнено ]' }} </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><span class="font-weight-bold">Карантина до:</span> {{ $user->quarantine_finished_at ?? '[ Не е попълнено ]' }}</p>
                                    </div>
                                </div>
                                @endif
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="{{ route('profile.edit', auth()->user()->id) }}" class="btn btn-outline-primary"><i class="fas fa-edit"></i> Редактирай профила</a>
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