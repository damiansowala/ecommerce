<div>
    <div class="card">
        <div class="card-body">
            <!-- Formularz do przesyłania zdjęć -->
            <form wire:submit.prevent="uploadPhotos">
                <div class="mb-4">
                    <label for="photos" class="form-label">Dodaj zdjęcia</label>
                    <input type="file" wire:model="photos" id="photos" multiple class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Prześlij</button>
            </form>

            <!-- Komunikat po przesłaniu zdjęć -->
            @if(session()->has('message'))
            <div class="mt-4 text-success">{{ session('message') }}</div>
            @endif

            <!-- Paginacja -->
            <div class="mt-4 d-flex justify-content-between align-items-center">
                <div>
                    <label for="pagination" class="form-label">Wyświetlaj po:</label>
                    <select wire:model="perPage" id="pagination" class="form-select">
                        @foreach($paginationOptions as $option)
                        <option value="{{ $option }}">{{ $option }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Lista mediów -->
            <div class="row mt-4">
                @foreach($media as $item)
                <div class="col-12 col-md-12">
                    <div class="card mb-3">
                        <div class="row p-2">
                            <div class="col-12 col-md-5">
                                <!-- Leniwe ładowanie obrazów -->
                                <img class="img-fluid rounded-start" src="{{ asset('storage/images/media/' . $item->id . '/' . $item->file_name) }}" alt="{{ $item->file_name }}" loading="lazy">
                            </div>
                            <div class="col-12 col-md-7">
                                <div class="card-body">
                                    <p class="card-text"><strong>Nazwa:</strong> {{ $item->file_name }}</p>
                                    <p class="card-text"><strong>Typ:</strong> {{ $item->mime_type }}</p>
                                    <p class="card-text"><strong>Wielkość:</strong> {{ number_format($item->size / 1024, 2) }} KB</p>
                                    <button wire:click="confirmDelete({{ $item->id }})" class="btn btn-danger btn-sm">Usuń</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Paginacja -->
            <div class="mt-4">
                {{ $media->links() }}
            </div>

            <!-- Potwierdzenie usunięcia -->
            @if($confirmDelete)
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center">
                <div class="bg-white p-6 rounded shadow-lg">
                    <h3 class="text-xl">Na pewno chcesz usunąć to zdjęcie?</h3>
                    <div class="mt-4">
                        <button wire:click="deletePhoto" class="btn btn-danger">Tak, usuń</button>
                        <button wire:click="$set('confirmDelete', false)" class="btn btn-secondary">Anuluj</button>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
