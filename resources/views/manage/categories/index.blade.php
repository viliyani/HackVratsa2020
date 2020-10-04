@extends('layouts.manage')

@section('card-header', 'Категории')

@section('content')
<h2>Нова категория</h2>
<form action="{{ route('manage.categories.store') }}" method="POST">
    @csrf
    <fieldset class="form-group">
        <label for="name">Име</label>
        <input class="form-control" type="text" name="name" id="name" required>
        @if ($errors->has('name'))
        <p class="m-1 alert alert-danger">{{ $errors->first('name') }}</p>
        @endif
    </fieldset>
    <fieldset>
        <button class="mb-2 btn btn-primary btn-block" type="submit">Добави!</button>
    </fieldset>
</form>

<h2 class="mt-4">Всички Категории</h2>
@if($categories->count() > 0)
<table class="table table-striped">
    <thead>
        <tr>
            <th>Име</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->name }}</td>
            <td>
                <a href="{{ route('manage.categories.edit', $category->id) }}" class="btn btn-primary">
                    <i class="fas fa-edit"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>
{{ $categories->links() }}
@else
<div class="message is-info">
    <div class="message-body">
        Все още няма добавени категории!</div>
</div>
@endif
</div>

</div>
</div>
@endsection