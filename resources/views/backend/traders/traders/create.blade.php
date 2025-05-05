@extends('backend/layouts.app', ['pageTitle' => 'Nowy handlowiec'])
@section('content')
<div class="row d-flex justify-content-end mb-3">
    @include('backend.traders.partials.nav-button')
</div>


<form class="row" action="{{ route('traders.store') }}" method="POST">

    @csrf

    <div class="col-12 col-md-9">
        <div class="row">

            <div class="col-12 col-md-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <x-form.form-input type="text" name="name" label="Imię i nazwisko" />
                        <x-form.form-input-group-text type="number" name="commission" text="%" label="Prowizja" />
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <x-form.form-input type="text" name="phone" label="Numer telefonu" />
                        <x-form.form-input type="text" name="email" label="Adres e-mail" />
                    </div>
                </div>
            </div>

            @if($clientGroups->isNotEmpty())
            <div class="col-12">
                <div class="card card-custome">

                    <div class="card-body">
                        <h6 class="mb-4">Przypisz grupy klientow</h6>
                        @foreach($clientGroups as $group)
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" name="group[]" value="{{ $group->id }}" id="group-{{ $group->id }}">
                            <label class="form-check-label" for="group-{{ $group->id }}">
                                {{ $group->name }}
                            </label>

                            @php $tradersNames = $group->traders->pluck('traderName')->implode(', '); @endphp
                            @if( $tradersNames)
                            <small class="d-block text-body-secondary"> Przypisane do: {{$tradersNames}}</small>
                            @else
                            <small class="d-block text-body-secondary"> Nie przypisano</small>
                            @endif

                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>





    <div class="col-12 col-md-3 mb-3">
        <div class="card mb-3">
            <div class="card-body">
                <x-select.select-enums-tooltip name="status" placeholder="Status handlowca" :options="ActiveStatusEnum::select()" :tooltip="TooltipHelper::tooltip(TooltipEnum::CLIENTS_STATUS)" />
                <button type="submit" class="btn btn-primary d-block w-100 mb-2">
                    <i class="bi bi-save me-1"></i>
                    Dodaj handlowca
                    <div wire:loading class="spinner-border spinner-border-sm" role="status"></div>
                </button>
            </div>
        </div>
    </div>
</form>
@endsection


<script>
    $(document).ready(function() {
        $('.select-clients-group').select2();
    });

</script>
