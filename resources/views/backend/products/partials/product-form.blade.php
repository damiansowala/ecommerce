<div class="row d-flex justify-content-end mb-3">
    @include('backend.products.partials.nav-button')
</div>
<div class="row mb-3">
    <div class="col-12 col-md-9 mb-3">
        <div class="row mb-3">
            <div class="col-12 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="productName" class="form-label">Nazwa produktu</label>
                            <input type="text" class="form-control" id="productName" name="productName" placeholder="Wpisz nazwę produktu">
                        </div>
                        <div class="mb-3">
                            <label for="productDesc" class="form-label">Opis produktu</label>
                            <textarea class="form-control" id="productDesc" name="productDesc" rows="10" placeholder="Opisz produkt"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="productCat" class="form-label">Kategorie {!! TooltipHelper::tooltipSettingsUrl('https://example.com/settings', TooltipEnum::ADD_PRODUCT_ADD_CATEGORY) !!}</label>
                            <select class="form-select" id="productCat" name="productCat">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12 col-md-6">
                                <label for="productPurchasePrice" class="col-form-label">Cena zakpu netto:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="productPurchasePriceNetto" name="productPurchasePriceNetto" placeholder="000">
                                    <span class="input-group-text">PLN</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="productPurchasePriceBrutto" class="col-form-label">Cena zakpu brutto:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="productPurchasePriceBrutto" name="productPurchasePriceBrutto" placeholder="000">
                                    <span class="input-group-text">PLN</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3">
                <div class="card card-custome">
                    <div class="card-header">
                        <div class="d-flex justify-content-between w-100">

                            <span>Tabela informacyjna</span>


                            <button type="button" class="btn btn-outline-primary" id="tableAddRow">
                                <i class="bi bi-plus-lg"></i>
                            </button>
                        </div>

                    </div>
                    <div id="tableInfo" class="card-body">
                        <div class="row mb-3">
                            <div class="col-6"><input type="text" name="tableInfoRow1" class="form-control"></div>

                            <div class="col-6"><input type="text" name="tableInfoRow1" class="form-control"></div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 mb-3">
                <div class="card card-custome">
                    <div class="card-header">
                        Sprzedaż produktu
                    </div>
                    <div class="card-body pb-4">
                        <div class="row mb-3">
                            <div class="col-3"></div>
                            <div class="col-3">On-line</div>
                            <div class="col-3">Detaliczna</div>
                            <div class="col-3">Hurtowa</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3">Marża</div>
                            <div class="col-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="productMarkupOnline" name="productMarkupOnline" value="0">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="productMarkupRetail" name="productMarkupRetail" value="0">

                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="productMarkupWholesale" name="productMarkupWholesale" value="0">


                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3">Cena netto</div>
                            <div class="col-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="productPriceNettoOnline" name="productPriceNettoOnline" placeholder="000">
                                    <span class="input-group-text">PLN</span>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="productPriceNettoRetail" name="productPriceNettoRetail" placeholder="000">
                                    <span class="input-group-text">PLN</span>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="productPriceNettoWholesale" name="productPriceNettoWholesale" placeholder="000">
                                    <span class="input-group-text">PLN</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3">Cena brutto</div>
                            <div class="col-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="productPriceBruttoOnline" name="productPriceBruttoOnline" placeholder="000">
                                    <span class="input-group-text">PLN</span>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="productPriceBruttoRetail" name="productPriceBruttoRetail" placeholder="000">
                                    <span class="input-group-text">PLN</span>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="productPriceBruttoWholesale" name="productPriceBruttoWholesale" placeholder="000">
                                    <span class="input-group-text">PLN</span>
                                </div>
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col-3">Zakup minimalny:</div>
                            <div class="col-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="" name="" placeholder="000">
                                    <span class="input-group-text">szt.</span>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="" name="" placeholder="000">
                                    <span class="input-group-text">szt.</span>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="" name="" placeholder="000">
                                    <span class="input-group-text">szt.</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3">Metoda sprzedaży {!! TooltipHelper::tooltipSettingsUrl('https://example.com/settings', TooltipEnum::ADD_PRODUCT_METHOD_SALES) !!}</div>
                            <div class="col-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option value="1">Sztuki</option>
                                    <option value="2">Paleta</option>
                                    <option value="3">Opakowanie</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option value="1">Sztuki</option>
                                    <option value="2">Paleta</option>
                                    <option value="3">Opakowanie</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option value="1">Sztuki</option>
                                    <option value="2">Paleta</option>
                                    <option value="3">Opakowanie</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <div class="card card-custome">
                    <div class="card-header">
                        Parametry fizyczne
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="inputPassword6" class="col-form-label">Waga:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="" name="" placeholder="000">
                                <span class="input-group-text">g</span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword6" class="col-form-label">Wysokość:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="" name="" placeholder="000">
                                <span class="input-group-text">cm</span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword6" class="col-form-label">Długość:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="" name="" placeholder="000">
                                <span class="input-group-text">cm</span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword6" class="col-form-label">Szerokość:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="" name="" placeholder="000">
                                <span class="input-group-text">cm</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <div class="card card-custome">
                    <div class="card-header">
                        Kody EAN
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="inputPassword6" class="col-form-label">EAN-13 {!! TooltipHelper::tooltip(TooltipEnum::ADD_PRODUCT_EAN_13) !!}</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="" name="" placeholder="000">
                                <span class="input-group-text" id="basic-addon1"> {!! TooltipHelper::customTooltip('bi-upc-scan', TooltipEnum::ADD_PRODUCT_EAN_CODE, '#') !!} </span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword6" class="col-form-label">EAN-8 {!! TooltipHelper::tooltip(TooltipEnum::ADD_PRODUCT_EAN_8) !!}</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="" name="" placeholder="000">
                                <span class="input-group-text" id="basic-addon1"> {!! TooltipHelper::customTooltip('bi-upc-scan', TooltipEnum::ADD_PRODUCT_EAN_CODE, '#') !!} </span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword6" class="col-form-label">EAN-128 {!! TooltipHelper::tooltip(TooltipEnum::ADD_PRODUCT_EAN_128) !!}</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="" name="" placeholder="000">
                                <span class="input-group-text" id="basic-addon1"> {!! TooltipHelper::customTooltip('bi-upc-scan', TooltipEnum::ADD_PRODUCT_EAN_CODE, '#') !!} </span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword6" class="col-form-label">EAN-14 {!! TooltipHelper::tooltip(TooltipEnum::ADD_PRODUCT_EAN_14) !!}</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="" name="" placeholder="000">
                                <span class="input-group-text" id="basic-addon1"> {!! TooltipHelper::customTooltip('bi-upc-scan', TooltipEnum::ADD_PRODUCT_EAN_CODE, '#') !!} </span>
                            </div>
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
                        <div class="mb-3">
                            <label for="inputPassword6" class="col-form-label">Na magazynie</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="" name="" placeholder="000">
                                <span class="input-group-text">szt.</span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword6" class="col-form-label">Niski stan {!! TooltipHelper::tooltip(TooltipEnum::ADD_PRODUCT_EAN_8) !!}</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="" name="" placeholder="000">
                                <span class="input-group-text">szt.</span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword6" class="col-form-label">Powiadomienia {!! TooltipHelper::tooltipSettingsUrl('https://example.com/settings', TooltipEnum::ADD_PRODUCT_ALERTS) !!}</label>
                            <select class="form-select" aria-label="Default select example">
                                @foreach(BoolenEnum::options() as $value)
                                <option value="{{ $value }}" {{ old('active') == $value ? 'selected' : '' }}>
                                    {{ BoolenEnum::from($value)->label() }}
                                </option>
                                @endforeach
                            </select>
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
                    <label for="productAddDate" class="col-form-label">Data dodania</label>
                    <input type="password" id="productAddDate" name="productAddDate" class="form-control" disabled>
                </div>
                <div class="mb-3">
                    <label for="productStatus" class="form-label">Status {!! TooltipHelper::tooltip(TooltipEnum::ADD_PRODUCT_STATUS) !!}</label>
                    <select class="form-select" id="productStatus" name="productStatus" required>
                        @foreach(ActiveStatusEnum::cases() as $status)
                        <option value="{{ $status->value }}">{{ $status->label() }}</option>
                        @endforeach
                    </select>
                </div>
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
