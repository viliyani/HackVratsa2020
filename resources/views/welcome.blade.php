@extends('layouts.app')

@section('content')

<div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
        <div class="block-30 block-30-sm item welcome-carousel-box" style="background-image: url('images/good2.jpg');" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="right-info-box">
                        <div class="right-info-box-title">Помощ по време на криза!</div>
                        <div>
                            <p>Ако имате нужда от помощ, ние ще ви помогнем!</p>
                        </div>
                        <div class="right-info-box-btn-box mt-3">
                            <a href="{{ route('register') }}" class="btn btn-success btn-lg"><i class="fas fa-share"></i> Регистрирай се</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section section-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-6 pr-4">
                <div class="block-48">
                    <span class="block-48-text-1">Изпълнени Общо</span>
                    <div class="block-48-counter ftco-number" data-number="21">0</div>
                    <span class="block-48-text-1 mb-1 d-block">Заявки за Помощ в България</span>
                </div>
            </div>
            <div class="col-md-6 pl-4 welcome-text">
                <h2 class="display-4 mb-3">Кои сме ние?</h2>
                <p class="lead"><span class="font-weight-bold">Карантино Герои</span> е платформа, която свързва хората, които са под карантина и имат нужда от помощ с хора, които могат и искат да помогнат.</p>
            </div>
        </div>
    </div>
</div>

@endsection