@extends('backend/layouts.app', ['pageTitle' => 'Dodaj producenta'])

@section('content')

<div class="row d-flex justify-content-end mb-3">
    @include('backend.manufacturers.partials.nav-button')
</div>

<form class="row" action="{{ route('manufacturers.store') }}" method="POST">
    @csrf
    <div class="col-12 col-md-9">
        <div class="row">
            <div class="col-12 col-md-6 mb-3">
                <div class="card">
                    <div class="card-body">

                        <x-form.form-input type="text" name="name" label="Nazwa firmy producenta" />
                        <x-form.form-input type="text" name="street" label="Ulica i numer" />
                        <x-form.form-input type="text" name="postal_code" label="Kod pocztowy" />
                        <x-form.form-input type="text" name="city" label="Miasto" />

                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <div class="card">
                    <div class="card-body">

                        <x-form.form-input type="number" name="nip" label="NIP" />
                        <x-form.form-input type="number" name="krs" label="KRS" />
                        <x-form.form-input type="number" name="regon" label="Regon" />
                        <x-form.form-input type="text" name="code" label="Kod producenta" />

                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <div class="card card-custome">

                    <div class="card-body">
                        <x-form.form-input type="text" name="contact_person" label="Osoba kontaktowa" />
                        <x-form.form-input type="text" name="phone" label="Telefon" />
                        <x-form.form-input type="text" name="email" label="E-mail" />
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="col-12 col-md-3 mb-3">
        <div class="card mb-3">
            <div class="card-body">

                <div class="input-group mb-3">
                    <div class="form-floating">
                        <select class="form-select" id="status" name="status" required>
                            @foreach(ActiveStatusEnum::cases() as $status)
                            <option value="{{ $status->value }}">{{ $status->label() }}</option>
                            @endforeach
                        </select>
                        <label for="status" class="form-label">Status</label>
                    </div>
                    <span class="input-group-text">{!! TooltipHelper::tooltip(TooltipEnum::ADD_PRODUCT_STATUS) !!}</span>
                </div>

                <x-button.button-save type="submit" text="Dodaj grupę" />

            </div>
        </div>
    </div>
</form>

@endsection
