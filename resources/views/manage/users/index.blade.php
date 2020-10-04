@extends('layouts.manage')

@section('content')
<div class="clearfix">
    <a href="{{ route('users.create') }}" class="btn btn-primary mt-2 float-right">
        <i class="fas fa-plus"></i>
        <span>Нов потребител</span>
    </a>
</div>
<h2>Потребители</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Име</th>
            <th>Имейл</th>
            <th>Роли</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                @if ($user->roles->count() > 0)
                    <ul>
                        @foreach ($user->roles as $role)
                        <li>{{ $role->name }}</li>
                        @endforeach
                    </ul>
                </div>
                @else
                Няма роли!
                @endif
            </td>
            <td>
                <div class="field is-grouped">
                    <p class="control">
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">
                                <i class="fas fa-edit"></i>
                        </a>
                    </p>
                    <p class="control">
                        <a target="_blank" href="{{ route('users.show', $user->id) }}" class="btn btn-info">
                                <i class="far fa-eye"></i>
                        </a>
                    </p>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $users->links() }}
@endsection