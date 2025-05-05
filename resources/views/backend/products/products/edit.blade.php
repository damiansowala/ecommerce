@extends('backend/layouts.app', ['pageTitle' => 'Edytuj produkt'])
@section('content')
<div class="row d-flex justify-content-end mb-3">
    @include('backend.products.partials.nav-button')
</div>
<form action="{{ route('product.store') }}" method="POST">
    @csrf
    <div class="row mb-3">
        <div class="col-12 col-md-9 mb-3">
            <div class="row mb-3">
                <div class="col-12 mb-3">
                    <div class="card">
                        <div class="card-body">

                            <x-form.form-input type="text" name="name" label="Nazwa produktu" />

                            <div class="input-group mb-3">
                                <div class="form-floating">

                                    <select name="cat_id" class="form-select">
                                        <option value="">Brak</option>
                                        @php
                                        SelectHelper::renderCategoryOptions($categories, 0, $parentID = null, $editedCategoryId = null);
                                        @endphp
                                    </select>
                                    <label for="cat_id" class="col-form-label">Kategoria</label>
                                    @error('cat_id') <span class="text-danger">{{ $message }}</span> @enderror

                                </div>
                                <span class="input-group-text">{!! TooltipHelper::tooltipSettingsUrl(url('/products/categories') , TooltipEnum::ADD_PRODUCT_ADD_CATEGORY) !!}</span>
                            </div>

                            <x-form.form-textarea name="desc" label="Opis produktu" />

                        </div>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="card card-custome">
                        <div class="card-header">
                            <div class="d-flex justify-content-between w-100">
                                <span>Tabela informacyjna {!! TooltipHelper::tooltipSettingsUrl('https://example.com/settings', TooltipEnum::ADD_PRODUCT_METHOD_SALES) !!}</span>
                                <button type="button" class="btn btn-outline-primary" id="tableAddRow">
                                    <i class="bi bi-plus-lg me-2"></i> Dodaj wiersz
                                </button>
                            </div>
                        </div>
                        <div id="tableInfo" class="card-body">
                            <div class="row mb-3">
                                <div class="col-4">
                                    <input type="text" name="tableInfoRow1" class="form-control" placeholder="Atrybut">
                                </div>
                                <div class="col-8">
                                    <input type="text" name="tableInfoRow1" class="form-control" placeholder="Wartość">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3 mb-3">
                    <div class="card card-custome">
                        <div class="card-header">
                            Cena zakupu
                        </div>
                        <div class="card-body pb-3">

                            <x-form.form-input-group-text type="number" name="price_netto" text="PLN" label="Cena netto" />
                            <x-form.form-input-group-text type="number" name="vat" text="%" label="Podatek VAT" />
                            <x-form.form-input-group-text type="number" name="price_brutto" text="PLN" label="Cena brutto" />

                        </div>
                    </div>
                </div>



                <div class="col-12 col-md-3 mb-3">
                    <div class="card card-custome">
                        <div class="card-header">
                            Cena online
                            <input type="hidden" name="prices[online][price_type]" value="online">
                        </div>
                        <div class="card-body">

                            <x-form.form-input-group-text type="number" name="prices[online][margin]" text="%" label="Marża" />
                            <x-form.form-input-group-text type="number" name="prices[online][net_price]" text="PLN" label="Cena netto" />
                            <x-form.form-input-group-text type="number" name="prices[online][gross_price]" text="PLN" label="Cena brutto" />
                            <x-form.form-input-group-text type="number" name="prices[online][min_purchase]" text="szt." label="Minimum zakupowe" />

                            <div class="mb-3">
                                <livewire:backend.settings.sales-methods-select name="prices[online][sales_method_id]" />
                                @error('productMethodSalesWholesale') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-3 mb-3">
                    <div class="card card-custome">
                        <div class="card-header">
                            Cena detaliczna
                            <input type="hidden" name="prices[retail][price_type]" value="retail">
                        </div>
                        <div class="card-body">

                            <x-form.form-input-group-text type="number" name="prices[retail][margin]" text="%" label="Marża" />
                            <x-form.form-input-group-text type="number" name="prices[retail][net_price]" text="PLN" label="Cena netto" />
                            <x-form.form-input-group-text type="number" name="prices[retail][gross_price]" text="PLN" label="Cena brutto" />
                            <x-form.form-input-group-text type="number" name="prices[retail][min_purchase]" text="szt." label="Minimum zakupowe" />

                            <div class="mb-3">
                                <livewire:backend.settings.sales-methods-select name="prices[retail][sales_method_id]" />
                                @error('productMethodSalesWholesale') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3 mb-3">
                    <div class="card card-custome">
                        <div class="card-header">
                            Cena hurtowa
                            <input type="hidden" name="prices[wholesale][price_type]" value="wholesale">
                        </div>
                        <div class="card-body">

                            <x-form.form-input-group-text type="number" name="prices[wholesale][margin]" text="%" label="Marża" />
                            <x-form.form-input-group-text type="number" name="prices[wholesale][net_price]" text="PLN" label="Cena netto" />
                            <x-form.form-input-group-text type="number" name="prices[wholesale][gross_price]" text="PLN" label="Cena brutto" />
                            <x-form.form-input-group-text type="number" name="prices[wholesale][min_purchase]" text="szt." label="Minimum zakupowe" />

                            <div class="mb-3">
                                <livewire:backend.settings.sales-methods-select name="prices[wholesale][sales_method_id]" />
                                @error('productMethodSalesWholesale') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-4 mb-3">
                    <div class="card card-custome">
                        <div class="card-header">
                            Parametry fizyczne {!! TooltipHelper::tooltip(TooltipEnum::EMPTY) !!}
                        </div>
                        <div class="card-body">

                            <x-form.form-input-group-text type="number" name="weight" text="g" label="Waga" />
                            <x-form.form-input-group-text type="number" name="height" text="cm" label="Wysokość" />
                            <x-form.form-input-group-text type="number" name="width" text="cm" label="Długość" />
                            <x-form.form-input-group-text type="number" name="length" text="cm" label="Szerokość" />

                        </div>
                    </div>
                </div>







                <div class="col-12 col-md-4 mb-3">
                    <div class="card card-custome">
                        <div class="card-header">
                            Kody EAN
                        </div>
                        <div class="card-body">



                            <div class="input-group mb-3">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="ean13" name="ean13" placeholder="0">
                                    <label for="ean13" class="col-form-label">EAN-13</label>
                                </div>
                                <span class="input-group-text"> {!! TooltipHelper::customTooltip('bi-upc-scan', TooltipEnum::ADD_PRODUCT_EAN_CODE, '#') !!} </span>
                                <span class="input-group-text"> {!! TooltipHelper::tooltip(TooltipEnum::ADD_PRODUCT_EAN_13) !!} </span>
                                @error('ean13') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="input-group mb-3">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="ean8" name="ean8" placeholder="0">
                                    <label for="ean8" class="col-form-label">EAN-8</label>
                                </div>
                                <span class="input-group-text"> {!! TooltipHelper::customTooltip('bi-upc-scan', TooltipEnum::ADD_PRODUCT_EAN_CODE, '#') !!} </span>
                                <span class="input-group-text"> {!! TooltipHelper::tooltip(TooltipEnum::ADD_PRODUCT_EAN_8) !!} </span>
                                @error('ean8') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="input-group mb-3">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="ean128" name="ean128" placeholder="0">
                                    <label for="ean128" class="col-form-label">EAN-128</label>
                                </div>
                                <span class="input-group-text"> {!! TooltipHelper::customTooltip('bi-upc-scan', TooltipEnum::ADD_PRODUCT_EAN_CODE, '#') !!} </span>
                                <span class="input-group-text"> {!! TooltipHelper::tooltip(TooltipEnum::ADD_PRODUCT_EAN_128) !!} </span>
                                @error('ean128') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="input-group mb-3">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="ean14" name="ean14" placeholder="0">
                                    <label for="ean14" class="col-form-label">EAN-14</label>
                                </div>
                                <span class="input-group-text"> {!! TooltipHelper::customTooltip('bi-upc-scan', TooltipEnum::ADD_PRODUCT_EAN_CODE, '#') !!} </span>
                                <span class="input-group-text"> {!! TooltipHelper::tooltip(TooltipEnum::ADD_PRODUCT_EAN_14) !!} </span>
                                @error('ean14') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>


                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 mb-3">
                    <div class="card card-custome">
                        <div class="card-header">
                            Stan magazynowy
                        </div>
                        <div class="card-body">


                            <x-form.form-input-group-text type="number" name="quantity" text="szt." label="Na magazynie" />





                            <div class="input-group mb-3">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="low_stock" name="low_stock" placeholder="0">
                                    <label for="low_stock" class="col-form-label">Niski stan </label>
                                </div>
                                <span class="input-group-text">szt.</span>
                                <span class="input-group-text">{!! TooltipHelper::tooltip(TooltipEnum::EMPTY) !!}</span>
                                @error('low_stock') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="input-group mb-3">
                                <div class="form-floating">
                                    <select class="form-select" id="notifications" name="notifications">
                                        @foreach(BoolenEnum::options() as $value)
                                        <option value="{{ $value }}" {{ old('active') == $value ? 'selected' : '' }}>
                                            {{ BoolenEnum::from($value)->label() }}
                                        </option>
                                        @endforeach
                                    </select>
                                    <label for="notifications" class="col-form-label">Powiadomienia </label>
                                </div>
                                <span class="input-group-text">{!! TooltipHelper::tooltipSettingsUrl('https://example.com/settings', TooltipEnum::ADD_PRODUCT_ALERTS) !!}</span>
                                @error('notifications') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-3">
            <div class="card mb-3">
                <div class="card-body">

                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="password" id="productAddDate" name="productAddDate" class="form-control" disabled>
                            <label for="productAddDate" class="col-form-label">Data utworzenia</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="password" id="productAddDate" name="productAddDate" class="form-control" disabled>
                            <label for="productAddDate" class="col-form-label">Data aktualizacji</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="password" id="productAddDate" name="productAddDate" class="form-control" disabled>
                            <label for="productAddDate" class="col-form-label">Autor</label>
                        </div>
                    </div>
                    {{-- dodać pole who_added i powiązać produkt z osobą któa go dodała --}}


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

                    <button type="submit" class="btn btn-primary d-block w-100 mb-2">
                        <i class="bi bi-save me-1"></i>
                        Dodaj produkt
                        <div wire:loading class="spinner-border spinner-border-sm" role="status"></div>
                    </button>
                </div>
            </div>
            <div class="card mb-3 card-custome">
                <div class="card-header">
                    Obraz główny
                </div>
                <div class="card-body">
                </div>
            </div>
            <div class="card mb-3 card-custome">
                <div class="card-header">
                    Inne obrazy
                </div>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
    @include('backend.settings.seo.partials.form-create')
</form>

@include('backend/layouts/partials.alerts')


<script>
    document.addEventListener("DOMContentLoaded", () => {
        const nettoInput = document.getElementById("productPurchasePriceNetto");
        const bruttoInput = document.getElementById("productPurchasePriceBrutto");
        const vatRate = 0.23;
        nettoInput.addEventListener("input", () => {
            const nettoValue = parseFloat(nettoInput.value.replace(",", "."));
            if (!isNaN(nettoValue)) {
                bruttoInput.value = (nettoValue * (1 + vatRate)).toFixed(2).replace(".", ",");
            } else {
                bruttoInput.value = "";
            }
        });
        bruttoInput.addEventListener("input", () => {
            const bruttoValue = parseFloat(bruttoInput.value.replace(",", "."));
            if (!isNaN(bruttoValue)) {
                nettoInput.value = (bruttoValue / (1 + vatRate)).toFixed(2).replace(".", ",");
            } else {
                nettoInput.value = "";
            }
        });
    });

</script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const vatRate = 0.23;
        const inputs = {
            netto: {
                purchase: document.getElementById("productPurchasePriceNetto")
                , online: document.getElementById("productPriceNettoOnline")
                , retail: document.getElementById("productPriceNettoRetail")
                , wholesale: document.getElementById("productPriceNettoWholesale")
            , }
            , brutto: {
                purchase: document.getElementById("productPurchasePriceBrutto")
                , online: document.getElementById("productPriceBruttoOnline")
                , retail: document.getElementById("productPriceBruttoRetail")
                , wholesale: document.getElementById("productPriceBruttoWholesale")
            , }
            , markup: {
                online: document.getElementById("productMarkupOnline")
                , retail: document.getElementById("productMarkupRetail")
                , wholesale: document.getElementById("productMarkupWholesale")
            , }
        , };
        // Function to copy purchase prices to sales prices
        const copyPurchasePrices = () => {
            const nettoValue = parseFloat(inputs.netto.purchase.value.replace(",", "."));
            const bruttoValue = parseFloat(inputs.brutto.purchase.value.replace(",", "."));
            if (!isNaN(nettoValue)) {
                inputs.netto.online.value = nettoValue.toFixed(2).replace(".", ",");
                inputs.netto.retail.value = nettoValue.toFixed(2).replace(".", ",");
                inputs.netto.wholesale.value = nettoValue.toFixed(2).replace(".", ",");
            }
            if (!isNaN(bruttoValue)) {
                inputs.brutto.online.value = bruttoValue.toFixed(2).replace(".", ",");
                inputs.brutto.retail.value = bruttoValue.toFixed(2).replace(".", ",");
                inputs.brutto.wholesale.value = bruttoValue.toFixed(2).replace(".", ",");
            }
        };
        // Function to calculate netto or brutto prices based on markup
        const calculatePrices = (type) => {
            const nettoValue = parseFloat(inputs.netto.purchase.value.replace(",", "."));
            const markup = parseFloat(inputs.markup[type].value.replace(",", "."));
            if (!isNaN(nettoValue) && !isNaN(markup)) {
                const nettoSale = nettoValue * (1 + markup / 100);
                const bruttoSale = nettoSale * (1 + vatRate);
                inputs.netto[type].value = nettoSale.toFixed(2).replace(".", ",");
                inputs.brutto[type].value = bruttoSale.toFixed(2).replace(".", ",");
            }
        };
        // Function to calculate netto from brutto and vice versa
        const calculateFromBrutto = (type) => {
            const bruttoValue = parseFloat(inputs.brutto[type].value.replace(",", "."));
            const nettoValue = parseFloat(inputs.netto.purchase.value.replace(",", "."));
            if (!isNaN(bruttoValue) && !isNaN(nettoValue)) {
                const nettoSale = bruttoValue / (1 + vatRate);
                const markup = ((nettoSale / nettoValue) - 1) * 100;
                inputs.netto[type].value = nettoSale.toFixed(2).replace(".", ",");
                inputs.markup[type].value = markup.toFixed(2).replace(".", ",");
            }
        };
        // Initialize by copying purchase prices to sales prices
        copyPurchasePrices();
        // Event listeners for purchase price inputs
        inputs.netto.purchase.addEventListener("input", copyPurchasePrices);
        inputs.brutto.purchase.addEventListener("input", () => {
            const bruttoValue = parseFloat(inputs.brutto.purchase.value.replace(",", "."));
            if (!isNaN(bruttoValue)) {
                inputs.netto.purchase.value = (bruttoValue / (1 + vatRate)).toFixed(2).replace(".", ",");
                copyPurchasePrices();
            }
        });
        // Event listeners for markup and brutto inputs
        ["online", "retail", "wholesale"].forEach((type) => {
            inputs.markup[type].addEventListener("input", () => calculatePrices(type));
            inputs.brutto[type].addEventListener("input", () => calculateFromBrutto(type));
        });
    });

</script>
<script>
    document.getElementById('tableAddRow').addEventListener('click', function() {
        // Pobierz sekcję, która ma być powielana
        const cardBody = document.getElementById('tableInfo');
        // Pobierz pierwszy fragment (div.row) do sklonowania
        const rowToClone = cardBody.querySelector('.row');
        // Sklonuj fragment
        const clonedRow = rowToClone.cloneNode(true);
        // Wyczyść wartości w inputach w sklonowanym wierszu
        const inputs = clonedRow.querySelectorAll('input');
        inputs.forEach((input, index) => {
            // Zaktualizuj atrybut 'name', zmieniając numer na unikalny
            const newName = `tableInfoRow${cardBody.querySelectorAll('.row').length}`;
            input.name = newName;
            input.value = ''; // Wyczyść wartość inputa
        });
        // Dodaj sklonowany fragment na końcu card-body
        cardBody.appendChild(clonedRow);
    });

</script>
@endsection
