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
                    <h5 class="card-header">Направи заявка</h5>

                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-8 mx-auto">
                                <form method="POST" action="{{ route('quarantined.make_request.post') }}">
                                    @csrf
                                    <p class="text-center font-weight-bold">Лични данни</p>
                                    <div class="form-group row">
                                        <label for="name" class="col-md-3 col-form-label text-md-right">Име</label>

                                        <div class="col-md-7">
                                            <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}" autocomplete="off">
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