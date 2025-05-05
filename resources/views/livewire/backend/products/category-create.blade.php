<form wire:submit.prevent="store">
    <div class="card">
        <div class="card-header">Dodaj kategorie</div>
        <div class="card-body">
            <div class="mb-3">
                <label for="cat_name" class="form-label">Nazwa kategorii</label>
                <input type="text" id="cat_name" class="form-control" wire:model="cat_name">
                @error('cat_name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Opis kategorii</label>
                <textarea id="description" class="form-control" rows="8" wire:model="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="parent_id" class="form-label">Kategoria nadrzędna</label>
                <select name="parent_id" class="form-select" wire:model="parent_id">
                    <option value="">Brak</option>
                    @php
                    SelectHelper::renderCategoryOptions($categories, 0, $parentID = null, $editedCategoryId = null);
                    @endphp
                </select>
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-plus-circle me-2"></i> Dodaj kategorię
                <div wire:loading class="spinner-border spinner-border-sm" role="status"></div>
            </button>
        </div>
    </div>
    @include('backend/layouts/partials.alerts')
</form>
