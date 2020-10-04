@extends('layouts.manage')

@section('card-header', 'Редактиране на потребител')

@section('content')
<form method="POST" action="{{ route('users.update', $user->id) }}"">
    @csrf
    @method('PUT')
    <div class=" form-group row">
    <label for="name" class="col-4 col-form-label">Име</label>
    <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-address-card"></i>
                </div>
            </div>
        <input id="name" name="name" value="{{ $user->name }}" type="text" class="form-control"
                aria-describedby="nameHelpBlock" required="required">
        </div>
        @error('name')
        <span class="text-danger">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-4 col-form-label">Имейл адрес</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">@</div>
                </div>
                <input id="email" name="email" value="{{ $user->email }}" type="text" class="form-control"
                    aria-describedby="emailHelpBlock">
            </div>
            @error('email')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="password" class="col-4 col-form-label">Парола</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-key"></i>
                    </div>
                </div>
                <input id="password" name="password" type="password" class="form-control"
                    aria-describedby="passwordHelpBlock">
            </div>
            @error('password')
            <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Редактирай</button>
        </div>
    </div>
</form>
@endsection