@extends('backend/layouts.app', ['pageTitle' => 'Nowe zamówienie'])
@section('content')

<div class="row d-flex justify-content-end mb-3">
    @include('backend.sales.partials.nav-button')
</div>

<form class="row" action="">
    <div class="col-12 col-md-8">
        <div class="row">
            <div class="col-12 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="form-floating">
                            <select id="clientSelect" class="form-select">
                                <option value="">Wybierz klienta</option>
                            </select>
                            <label for="state">KLient</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Lista zamawianych produktów
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">

                            <livewire:backend.orders.new-orders>

                                <div class="col-12 col-md-9">
                                    <div class="form-floating">
                                        <select id="productSelect" class="form-select">
                                            <option value="">Wybierz produkt</option>
                                        </select>
                                        <label for="state">Produkt</label>
                                    </div>
                                </div>

                                <div class="col-12 col-md-3">
                                    <x-form.form-input type="text" name="ilosc" label="Ilość" />
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-12 col-md-4">
        <div class="card">
            <div class="card-body">
                <x-select.select-enums-tooltip name="status" placeholder="Metoda płatności" :options="ActiveStatusEnum::select()" :tooltip="TooltipHelper::tooltip(TooltipEnum::CLIENTS_STATUS)" />
                <x-select.select-enums-tooltip name="status" placeholder="Metoda dostawy" :options="ActiveStatusEnum::select()" :tooltip="TooltipHelper::tooltip(TooltipEnum::CLIENTS_STATUS)" />
                <x-select.select-enums-tooltip name="status" placeholder="Status płatności" :options="ActiveStatusEnum::select()" :tooltip="TooltipHelper::tooltip(TooltipEnum::CLIENTS_STATUS)" />
                <x-select.select-enums-tooltip name="status" placeholder="Status zamówienia" :options="ActiveStatusEnum::select()" :tooltip="TooltipHelper::tooltip(TooltipEnum::CLIENTS_STATUS)" />
                <x-button.button-save type="submit" text="Dodaj zamówienie" />
            </div>
        </div>
    </div>

</form>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        let clients = @json($clients);
        let products = @json($products);


        console.log(clients);

        $('#clientSelect').select2({
            data: clients.map(client => ({
                id: client.id
                , text: client.first_name + ' ' + client.last_name
            }))
            , placeholder: "Wybierz klienta"
            , allowClear: true
        });

        $('#productSelect').select2({
            data: products.map(product => ({
                id: product.id
                , text: product.name
            }))
            , placeholder: "Wybierz produkt"
            , allowClear: true
        });
    });

</script>
@endpush
