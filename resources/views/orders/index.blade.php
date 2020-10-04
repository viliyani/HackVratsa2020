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
                    <h5 class="card-header">Заявки от хора под карантина</h5>

                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="">
                                    @if($orders->count() > 0)
                                    @foreach($orders as $order)
                                    <hr>
                                    <div class="d-sm-flex p-2">
                                        <div>
                                            <div>{!!
                                            Avatar::create($order->user->name)->setDimension(100)->setFontSize(50)->toSvg()
                                            !!}</div>
                                            <div class="mt-2"><a href="{{ route('profile.show', $order->user->id) }}" class="btn btn-outline-success btn-block">Профил</a></div>
                                        </div>
                                        <div class="p-3">
                                            <span class="badge badge-success p-2">Свободна</span>
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
                                        <form action="{{ route('orders.update', $order->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-primary">Потвърди</a>
                                            </form>
                                        </div>
                                    </div>
                                    <hr>
                                    @endforeach
                                    {{ $orders->links() }}
                                    @else
                                    <div class="alert alert-info">Няма налични заявки!</div>
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