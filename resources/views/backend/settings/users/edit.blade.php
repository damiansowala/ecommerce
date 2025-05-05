<?php

use App\Helpers;
use App\Enums;

$userName = ($user) ? $user->getFullNameAttribute() : 'Użytkownik nie istnieje';

?>




@extends('backend/layouts.app', ['pageTitle' => 'Edytuj użytkownika: ' . $userName, 'pageSubTitle' => 'Ustawienia'])



@section('content')

<div class="row d-flex justify-content-end mb-3">
    @include('backend.settings.users.partials.nav-button')

</div>


<div class="card">
    <div class="card-body">



        <form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="mb-3">
                        <label for="status" class="form-label">Status konta</label>
                        <select class="form-select" id="status" name="status" required>
                            <option disabled>Wybierz status konta</option>
                            <!-- Opcje statusów -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Typ konta</label>
                        <select class="form-select" id="accountType" name="role" required>
                            <option disabled>Wybierz typ konta</option>
                            @foreach(RoleHelper::generateRoles() as $role)
                            <option value="{{ $role->name }}" {{ $role->name === $user->role ? 'selected' : '' }}>{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Imię</label>
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="surname" class="form-label">Nazwisko</label>
                        <input type="text" class="form-control" name="surname" value="{{ $user->surname }}" required>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="login" class="form-label">Login</label>
                        <input type="text" class="form-control" name="login" value="{{ $user->login }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Hasło (pozostaw puste, aby nie zmieniać)</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Potwierdź hasło</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Zaktualizuj użytkownika</button>
        </form>




    </div>
</div>


@endsection
