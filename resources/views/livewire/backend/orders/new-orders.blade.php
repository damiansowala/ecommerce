<div>
    <h2 class="text-lg font-bold mb-4">Tworzenie zamówienia</h2>

    <!-- Wybór produktu -->
    <div class="mb-4">
        <label for="product-select" class="block text-sm font-medium text-gray-700">Wybierz produkt</label>
        <select id="product-select" class="form-select js-example-basic-single w-full" wire:model="search">
            <option value="">-- Wybierz produkt --</option>
            @foreach($products as $product)
            <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select>
        <button wire:click="addProduct(search)" class="bg-blue-500 text-white px-4 py-2 rounded mt-2">Dodaj</button>
    </div>

    <!-- Lista produktów w zamówieniu -->
    <h3 class="text-md font-semibold mb-2">Produkty w zamówieniu:</h3>
    @if(!empty($selectedProducts))
    <table class="w-full border mb-4">
        <thead>
            <tr class="bg-gray-200">
                <th class="p-2">Produkt</th>
                <th class="p-2">Ilość</th>
                <th class="p-2">Akcje</th>
            </tr>
        </thead>
        <tbody>
            @foreach($selectedProducts as $index => $item)
            <tr>
                <td class="p-2">{{ $item['name'] }}</td>
                <td class="p-2">
                    <input type="number" wire:model="selectedProducts.{{$index}}.quantity" min="1" class="w-16 border p-1">
                </td>
                <td class="p-2">
                    <button wire:click="removeProduct({{ $index }})" class="btn btn-primary">Usuń</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Brak produktów w zamówieniu.</p>
    @endif

    <!-- Przycisk składania zamówienia -->
    <button wire:click="placeOrder" class="btn btn-primary">Złóż zamówienie</button>
</div>
