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
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 mx-auto">
                                    <h2>Заявки в изчакване</h2>
                                    @if($orders->count() > 0)
                                    @foreach($orders as $order)
                                    <div class="d-sm-flex p-2">
                                        <div>
                                            {!!
                                            Avatar::create($order->user->name)->setDimension(100)->setFontSize(50)->toSvg()
                                            !!}
                                        </div>
                                        <div class="p-3">
                                            <div>
                                                <strong>Описание:</strong>
                                                <p> {{ $order->description }}</p>
                                            </div>
                                            <div>
                                                <strong>Категория: </strong> <u>{{ $order->category->name }}</u>
                                            </div>
                                            <div>
                                                <strong>Населено място:</strong>
                                                <span> {{ $order->user->settlement }}</span>
                                            </div>
                                            <div>
                                                <strong>Статус:</strong>
                                                <span> {{ $order->status }}</span>
                                            </div>
                                    </div>
                                    @endforeach
                                    {{ $orders->links() }}
                                    @endif
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