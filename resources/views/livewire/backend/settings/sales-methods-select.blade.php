@if($methods->isNotEmpty())

<div class="input-group">
    <div class="form-floating">
        <select id="sales-method" name="{{ $name }}" class="form-select" wire:model="selectedMethod">
            <option value="" selected>-- Wybierz metodę --</option>
            @foreach ($methods as $method)
            <option value="{{ $method->id }}">{{ $method->name }}</option>
            @endforeach
        </select>
        <label for="{{ $name }}">Metoda sprzedaży</label>
    </div>
    <span class="input-group-text"> {!! TooltipHelper::tooltipSettingsUrl(url('/settings/ecommerce/sales-method') , TooltipEnum::ADD_PRODUCT_METHOD_SALES) !!}</span>
</div>

@else

<div class="input-group">
    <div class="form-floating">
        <input class="form-control" value="-- Brak metod --" disabled>
        <label>Metoda sprzedaży</label>
    </div>
    <span class="input-group-text"> {!! TooltipHelper::tooltipSettingsUrl(url('/settings/ecommerce/sales-method') , TooltipEnum::ADD_PRODUCT_METHOD_SALES) !!}</span>
</div>

@endif
