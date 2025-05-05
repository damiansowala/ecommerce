@extends('backend/layouts.app', ['pageTitle' => 'Nowy klient'])
@section('content')
<div class="row d-flex justify-content-end mb-3">
    @include('backend.clients.partials.nav-button')
</div>
<form class="row" action="{{ route('client.store') }}" method="POST">
    @csrf
    <div class="col-12 col-md-9">
        <div class="row">
            <div class="col-12 col-md-6 mb-3">
                <div class="card mb-3">
                    <div class="card-header">
                        Podstawowe informacje o kliencie
                    </div>
                    <div class="card-body">
                        <x-form.form-input-edit type="text" name="first_name" label="Imię klienta" value="{{ $client->first_name}}" />
                        <x-form.form-input-edit type="text" name="last_name" label="Nazwisko klienta" value="{{ $client->last_name}}" />
                        <x-form.form-input-edit type="tel" name="phone" label="Telefon kontaktowy" value="{{ $client->phone}}" />
                        <x-form.form-input-edit type="email" name="email" label="Email" value="{{ $client->email}}" />
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        Adres wysyłki
                    </div>
                    <div class="card-body">
                        <x-form.form-input-edit type="text" name="street" label="Ulica" value="{{ $client->street}}" />
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <x-form.form-input-edit type="number" name="building_number" label="Numer budynku" value="{{ $client->building_number}}" />
                            </div>
                            <div class="col-12 col-md-6">
                                <x-form.form-input-edit type="number" name="premises_number" label="Numer lokalu" value="{{ $client->premises_number}}" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <x-form.form-input-edit type="number" name="zip_code" label="Kod pocztowy" value="{{ $client->zip_code}}" />
                            </div>
                            <div class="col-12 col-md-8">
                                <x-form.form-input-edit type="text" name="city" label="Miejscowość" value="{{ $client->city}}" />
                            </div>
                        </div>
                        <x-form.form-input-edit type="text" name="country" label="Kraj" value="{{ $client->country}}" />
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Dane do faktury
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <x-form.form-input-edit type="text" name="company_name" label="Nazwa firmy" value="{{ $client->company_name}}" />
                                <x-form.form-input-edit type="text" name="company_street" label="Ulica" value="{{ $client->company_street}}" />
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <x-form.form-input-edit type="number" name="company_building_number" label="Numer budynku" value="{{ $client->company_building_number}}" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <x-form.form-input-edit type="number" name="company_premises_number" label="Numer lokalu" value="{{ $client->company_premises_number}}" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <x-form.form-input-edit type="number" name="company_zip_code" label="Kod pocztowy" value="{{ $client->company_zip_code}}" />
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <x-form.form-input-edit type="text" name="company_city" label="Miejscowość" value="{{ $client->company_city}}" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <x-form.form-input-edit type="text" name="company_country" label="Kraj" value="{{ $client->company_country}}" />
                                <x-form.form-input-edit type="number" name="nip" label="NIP" value="{{ $client->nip}}" />
                                <x-form.form-input-edit type="number" name="regon" label="REGON" value="{{ $client->regon}}" />
                                <x-form.form-input-edit type="number" name="krs" label="KRS" value="{{ $client->krs}}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-12">
        <div class="card mb-3">
            <div class="card-body">
                <x-select.select-enums-tooltip name="status" placeholder="Status konta" :options="ActiveStatusEnum::select()" :tooltip="TooltipHelper::tooltip(TooltipEnum::CLIENTS_STATUS)" />
                <x-select.select-enums-tooltip name="client_type" placeholder="Typ klienta" :options="SaleTypeEnum::select()" :tooltip="TooltipHelper::tooltip(TooltipEnum::EMPTY)" />
                <x-select.select-enums-tooltip name="client_kind" placeholder="Rodzaj klienta" :options="ClientTypeEnum::select()" :tooltip="TooltipHelper::tooltip(TooltipEnum::EMPTY)" />
                <div class="input-group mb-3">
                    <div class="form-floating ">
                        <select class="form-select">
                            <option selected> -- Brak --</option>
                            <option value="1">Handlowiec 2</option>
                            <option value="2">Handlowiec 3</option>
                            <option value="3">Handlowiec 4</option>
                        </select>
                        <label for="status" class="form-label">Opiekun konta</label>
                    </div>
                    <span class="input-group-text">{!! TooltipHelper::tooltip(TooltipEnum::CLIENTS_CAREER) !!}</span>
                </div>
                <x-select.select-enums-tooltip name="verified" placeholder="Weryfikacja" :options="VerificationStatusEnum::select()" :tooltip="TooltipHelper::tooltip(TooltipEnum::CLIENTS_VERIFICATION)" />
                <x-button.button-save type="submit" text="Edytuj klienta" />
            </div>
        </div>
    </div>
</form>
@include('backend/layouts/partials.alerts')
@endsection
