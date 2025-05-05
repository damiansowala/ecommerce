@extends('backend/layouts.app', ['pageTitle' => 'Role i uprawnienia'])


@section('content')

<a href="{{ route('roles.create') }}">Dodaj rolę</a>

@if (session('success'))
<div>{{ session('success') }}</div>
@endif

<div class="card">
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 40px"></th>
                    <th></th>
                    <th>Moduły</th>
                </tr>
                <tr>

                    <th style="width: 40px">#</th>
                    <th>Nazwa roli</th>
                    <th>Produkty</th>
                    <th>Sprzedaż</th>
                    <th>Klienci</th>
                    <th>Handlowcy</th>
                    <th>Dokumenty</th>
                    <th>Magazyn</th>
                    <th>Wiadomości</th>
                    <th>Ustawienia</th>
                    <th style="width: 50px"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                <tr class="align-middle">
                    <td>1.</td>
                    <td><a href="{{ route('roles.edit', $role) }}">{{ $role->name }}</a></td>

                    <td><span class="badge text-bg-success d-block">Dostępny</span></td>
                    <td><span class="badge text-bg-danger d-block">Nie dostępny</span></td>
                    <td><span class="badge text-bg-success d-block">Dostępny</span></td>
                    <td><span class="badge text-bg-warning d-block">Ograniczony</span></td>
                    <td><span class="badge text-bg-success d-block">Dostępny</span></td>
                    <td><span class="badge text-bg-danger d-block">Nie dostępny</span></td>
                    <td><span class="badge text-bg-warning d-block">Ograniczony</span></td>
                    <td><span class="badge text-bg-danger d-block">Nie dostępny</span></td>


                    <td>

                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="{{ route('roles.edit', $role) }}">Edytuj</a>
                                </li>
                                <li>
                                    <form action="{{ route('roles.destroy', $role) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="dropdown-item" type="submit">Usuń</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
