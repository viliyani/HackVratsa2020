@extends('layouts.manage')

@section('card-header', 'Добавяне на потребител')

@section('content')
<form method="POST" action="{{ route('users.store') }}"">
    @csrf
    <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Име</label>
    <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-address-card"></i>
                </div>
            </div>
            <input id="name" name="name" placeholder="Въведете име" type="text" class="form-control"
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
                <input id="email" name="email" placeholder="Въведете имейл адрес" type="text" class="form-control"
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
        <label for="role" class="col-4 col-form-label">Роля</label>

        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-users"></i></span>
                </div>
                <select class="form-control" id="role" name="role">
                    @foreach ($roles as $role)
                    <option value="{{ $role->slug }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>
           
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
                <input id="password" name="password" placeholder="Въведете парола" type="password" class="form-control"
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
            <button name="submit" type="submit" class="btn btn-primary">Създай</button>
        </div>
    </div>
</form>
@endsection