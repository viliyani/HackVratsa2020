@extends('layouts.app')

@section('content')

<div class="container p-3">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <h5 class="card-header">Контакти</h5>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <div class="row block-9">
                                <div class="col-md-12 pr-md-5">
                                    <form action="#">
                                        <div class="form-group">
                                            <input type="text" class="form-control px-3 py-3" placeholder="Име">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control px-3 py-3" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control px-3 py-3" placeholder="Тема">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="" id="" cols="30" rows="7" class="form-control px-3 py-3" placeholder="Съобщение"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Изпрати" class="btn btn-primary">
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
</div>
@endsection