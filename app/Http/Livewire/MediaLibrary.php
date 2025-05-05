<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class MediaLibrary extends Component
{
    use WithPagination, WithFileUploads;

    public $photos = [];
    public $filesCount = 0;
    public $confirmDelete = false;
    public $photoToDelete = null;
    public $paginationOptions = [40, 80, 120];
    public $perPage = 40;

    public function uploadPhotos()
    {
        \Log::debug('Photos:', $this->photos); // Sprawdzamy, co znajduje się w $this->photos

        // Walidacja
        $this->validate([
            'photos.*' => 'image|max:10240', // Maksymalny rozmiar 10MB
        ]);

        // Iteracja po zdjęciach
        foreach ($this->photos as $photo) {
            // Tworzymy obiekt Media i przypisujemy plik do kolekcji
            $mediaItem = Media::create([
                'model_type' => 'null',  // Możesz ustawić na null, jeśli nie przypisujesz do modelu
                'model_id' => 0,         // Ustaw 0, jeśli nie przypisujesz do konkretnego modelu
                'collection_name' => 'photos',
                'name' => $photo->getClientOriginalName(),
                'file_name' => $photo->getClientOriginalName(),
                'mime_type' => $photo->getMimeType(),
                'disk' => 'public', // Dysk publiczny
                'size' => $photo->getSize(),
                'manipulations' => json_encode([]),
                'custom_properties' => json_encode([]),
                'generated_conversions' => json_encode([]),
            ]);

            // Przypisanie pliku do kolekcji i zapis na dysku
            $mediaItem->addMedia($photo)
                ->toMediaCollection('photos', 'public'); // Przypisujemy do kolekcji
        }

        // Wyczyść zdjęcia po zapisaniu
        $this->photos = [];

        session()->flash('message', 'Zdjęcia zostały dodane.');
    }

    // Usuwanie zdjęcia
    public function confirmDelete($mediaId)
    {
        $this->photoToDelete = $mediaId;
        $this->confirmDelete = true;
    }

    public function deletePhoto()
    {
        $media = Media::findOrFail($this->photoToDelete);
        $media->delete();
        $this->confirmDelete = false;
        session()->flash('message', 'Zdjęcie zostało usunięte.');
    }

    public function render()
    {
        $media = Media::latest()->paginate($this->perPage);

        return view('livewire.media-library', compact('media'));
    }
}
