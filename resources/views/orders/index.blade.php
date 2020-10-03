@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <h2>Заявки от хора под карантина</h2>
            @if($orders->count() > 0)
            @foreach($orders as $order)
            <div class="d-sm-flex p-2">
                <div>
                    {!! Avatar::create($order->user->name)->setDimension(100)->setFontSize(50)->toSvg() !!}
                </div>
                <div class="p-3">
                    <div>
                        <strong>Описание:</strong>
                        <p> {{ $order->description }}</p>
                    </div>
                    <div>
                        <strong>Категория: </strong> <u>{{ $order->category->name }}</u>
                    </div>
                </div>
            </div>
            @endforeach
            {{ $orders->links() }}
            @endif
        </div>
    </div>
</div>
@endsection