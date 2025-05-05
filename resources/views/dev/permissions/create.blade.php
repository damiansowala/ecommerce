@extends('backend/layouts.app', ['pageTitle' => 'Edytuj produkt'])


@section('content')


<h1>Dodaj uprawnienie</h1>
<form action="{{ route('permissions.store') }}" method="POST">
    @csrf
    <label for="name">Nazwa uprawnienia:</label>
    <input type="text" name="name" required>
    <button type="submit">Dodaj</button>
</form>


@endsection
