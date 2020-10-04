@extends('layouts.manage')

@section('content')
<div class="columns">
    <div class="column is-7-desktop has-padding-10">
        <h2 class="title is-2">Категории</h2>
        @if($categories->count() > 0)
        <div class="table-container">
            <table class="table is-hoverable is-fullwidth">
                <thead>
                    <tr>
                        <th>Име</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td data-label="Име: ">{{ $category->name }}</td>
                        <td>
                            <a href="{{ route('manage.categories.edit', $category->slug) }}" class="button is-primary">
                                <span class="icon">
                                    <i class="fas fa-edit"></i>
                                </span>
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
    <div class="column has-padding-10">
        <h2 class="title is-2">Нов таг</h2>
        <form action="{{ route('manage.categories.store') }}" method="POST">
            @csrf
            <div class="field">
                <label for="name" class="label">Име</label>
                <div class="control">
                    <input class="input @error('name') is-danger @enderror" type="text" name="name" id="name">
                    @error('name')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="field">
                <button class="button is-info" type="submit">Добави!</button>
            </div>
        </form>
    </div>
</div>
@endsection
