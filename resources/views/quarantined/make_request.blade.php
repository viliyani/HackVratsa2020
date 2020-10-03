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
                    <h5 class="card-header">Направете заявка</h5>

                    <div class="card-body">

                        <div class="row">
                            @if(session()->has('errors'))
                            <div class="col-md-12">
                                @foreach ($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">
                                    {{ $error }}
                                </div>
                                @endforeach
                            </div>
                            @endif
                            <div class="col-md-12 mx-auto">
                                <form method="POST" action="{{ route('quarantined.make_request.post') }}">
                                    @csrf
                                    <p class="text-center font-weight-bold">Категория</p>
                                    <div class="form-group row">
                                        <div class="col-md-8 mx-auto">
                                            <select name="category_id" class="form-control cat-select-items" style="display: none;">
                                                <option value="1">Храна</option>
                                                <option value="2">Лекарства</option>
                                                <option value="3">Друго</option>
                                            </select>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="cat-box" data-cat-box-num="1">
                                                        <div class="cat-image">
                                                            <img src="{{asset('images/food.png')}}" class="img-fluid">
                                                        </div>
                                                        <div class="cat-name">
                                                            Храна
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="cat-box" data-cat-box-num="2">
                                                        <div class="cat-image">
                                                            <img src="{{asset('images/medicaments.png')}}" class="img-fluid">
                                                        </div>
                                                        <div class="cat-name">
                                                            Лекарства
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="cat-box" data-cat-box-num="3">
                                                        <div class="cat-image">
                                                            <img src="{{asset('images/other.png')}}" class="img-fluid">
                                                        </div>
                                                        <div class="cat-name">
                                                            Друго
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-center mt-5"><span class="font-weight-bold">Доставка:</span> 4 лв.</p>
                                    <p class="text-center font-weight-bold mt-4">Опишете от какво имате нужда:</p>
                                    <div class="form-group row">
                                        <div class="col-md-8 mx-auto">
                                            <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 mx-auto mt-4">
                                            <button type="submit" class="btn btn-success btn-block">
                                                Изпрати
                                            </button>
                                        </div>
                                    </div>
                                </form>


                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(".cat-box").click(function() {
        let catBoxNum = $(this).data("cat-box-num");

        // Reset all selected cats
        $(".cat-box").removeClass('cat-selected');
        $("select[name=category_id] option").removeAttr('selected');

        // Add class to selected cat
        $(this).addClass('cat-selected');

        // Change select option value
        $("select[name=category_id] option[value="+catBoxNum+"]").attr('selected','selected');
    });
</script>
@endsection