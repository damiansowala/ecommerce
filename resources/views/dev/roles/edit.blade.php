@extends('backend/layouts.app', ['pageTitle' => 'Edytuj rolę'])


@section('content')



<form action="{{ route('roles.update', $role) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Nazwa roli:</label>
    <input type="text" name="name" value="{{ $role->name }}" required>

    <h2>Przypisz uprawnienia:</h2>
    @foreach ($permissions as $permission)
    <div>
        <input type="checkbox" name="permissions[]" value="{{ $permission->id }}" {{ $role->hasPermissionTo($permission) ? 'checked' : '' }}>
        <label>{{ $permission->name }}</label>
    </div>
    @endforeach

    <button type="submit">Zaktualizuj</button>
</form>


@endsection
