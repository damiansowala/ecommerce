@extends('backend/layouts.app', ['pageTitle' => 'Rejestracja nowego użytkownika', 'pageSubTitle' => 'Ustawienia'])

@section('content')

<div class="row d-flex justify-content-end mb-3">
    @include('backend.settings.users.partials.nav-button')

</div>



<form id="registrationForm" action="{{ route('users.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-12 col-md-9">
            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-6">
                            <x-form.form-input type="text" name="name" label="Imię użytkownika" />
                            <x-form.form-input type="text" name="surname" label="Nazwisko użytkownika" />
                            <x-form.form-input type="email" name="email" label="E-mail" />

                        </div>

                        <div class="col-md-6">
                            <x-form.form-input type="text" name="login" label="Login" />

                            <x-form.form-input type="password" name="password" label="Hasło" />
                            <x-form.form-input type="password" name="password_confirmation" label="Potwierdź Hasło" />

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12 col-md-3">
            <div class="card">
                <div class="card-body">

                    <x-select.select-enums-tooltip name="status" placeholder="Status konta" :options="ActiveStatusEnum::select()" :tooltip="TooltipHelper::tooltip(TooltipEnum::CLIENTS_STATUS)" />

                    <div class="mb-3">
                        <label for="accountType" class="form-label">Typ konta</label>
                        <select class="form-select" id="accountType" name="role" required>
                            <option value="" disabled selected>Wybierz typ konta</option>
                            {!! RoleHelper::generateRoleSelect() !!}
                        </select>
                    </div>

                    <x-button.button-save type="submit" text="Dodaj użytkownika" />
                </div>
            </div>
        </div>
    </div>

</form>








@endsection
