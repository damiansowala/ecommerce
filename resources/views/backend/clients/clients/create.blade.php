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
                        <x-form.form-input type="text" name="first_name" label="Imię klienta" />
                        <x-form.form-input type="text" name="last_name" label="Nazwisko klienta" />
                        <x-form.form-input type="tel" name="phone" label="Telefon kontaktowy" />
                        <x-form.form-input type="email" name="email" label="Email" />
                    </div>
                </div>

            </div>

            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        Adres wysyłki
                    </div>
                    <div class="card-body">
                        <x-form.form-input type="text" name="street" label="Ulica" />
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <x-form.form-input type="number" name="building_number" label="Numer budynku" />
                            </div>
                            <div class="col-12 col-md-6">
                                <x-form.form-input type="number" name="premises_number" label="Numer lokalu" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <x-form.form-input type="number" name="zip_code" label="Kod pocztowy" />
                            </div>
                            <div class="col-12 col-md-8">
                                <x-form.form-input type="text" name="city" label="Miejscowość" />
                            </div>
                        </div>

                        <x-form.form-input type="text" name="country" label="Kraj" />

                    </div>
                </div>

            </div>


            <div class="col-12">
                <div class="card card-custome">

                    <div class="card-header">
                        Dane do faktury
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <x-form.form-input type="text" name="company_name" label="Nazwa firmy" />
                                <x-form.form-input type="text" name="company_street" label="Ulica" />
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <x-form.form-input type="number" name="company_building_number" label="Numer budynku" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <x-form.form-input type="number" name="company_premises_number" label="Numer lokalu" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <x-form.form-input type="number" name="company_zip_code" label="Kod pocztowy" />
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <x-form.form-input type="text" name="company_city" label="Miejscowość" />
                                    </div>
                                </div>

                            </div>
                            <div class="col-12 col-md-6">
                                <x-form.form-input type="text" name="company_country" label="Kraj" />
                                <x-form.form-input type="number" name="nip" label="NIP" />
                                <x-form.form-input type="number" name="regon" label="REGON" />
                                <x-form.form-input type="number" name="krs" label="KRS" />
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
                <x-select.select-enums-tooltip name="verified" placeholder="Weryfikacja" :options="VerificationStatusEnum::select()" :tooltip="TooltipHelper::tooltip(TooltipEnum::CLIENTS_VERIFICATION)" />



                {{--
                <div class="input-group mb-3">
                    <div class="form-floating ">
                        <select class="form-select">
                            <option selected> -- Brak --</option>
                            <option value="1">Handlowiec 2</option>
                            <option value="2">Handlowiec 3</option>
                            <option value="3">Handlowiec 4</option>
                        </select>
                        <label for="status" class="form-label">Grupa klientów</label>
                    </div>
                    <span class="input-group-text">{!! TooltipHelper::tooltip(TooltipEnum::CLIENTS_CAREER) !!}</span>
                </div> --}}

                <div class="mb-3">
                    @foreach($clientGroups as $group)
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" name="group[]" value="{{ $group->id }}" id="group-{{ $group->id }}">
                        <label class="form-check-label" for="group-{{ $group->id }}">
                            {{ $group->name }}
                        </label>
                    </div>
                    @endforeach
                </div>


                <x-button.button-save type="submit" text="Dodaj klienta" />

            </div>
        </div>
    </div>
</form>
@include('backend/layouts/partials.alerts')
@endsection
