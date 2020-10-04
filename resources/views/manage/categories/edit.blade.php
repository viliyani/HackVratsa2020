@extends('layouts.manage')

@section('card-header', 'Редактиране на категория')
@section('content')
<form action="{{ route('manage.categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group row">
        <label for="name" class="col-4 col-form-label">Име</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                </div>
            <input id="name" name="name" value="{{ $category->name }}" type="text" class="form-control" required="required">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Редактирай</button>
        </div>
    </div>
</form>
@endsection