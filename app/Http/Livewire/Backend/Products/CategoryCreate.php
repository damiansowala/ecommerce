<?php

namespace App\Http\Livewire\Backend\Products;

use Illuminate\Support\Facades\Log;
use Livewire\Component;
use App\Repositories\Products\ProductRepository;
use App\Repositories\Settings\SettingsSeoRepository;
use App\Http\Livewire\Backend\Products\Request;

class CategoryCreate extends Component
{
    public $categories;
    public $cat_name, $description, $parent_id;
    protected $productRepository;
    protected $settingsSeoRepository;
    public function __construct()
    {
        $this->productRepository = new ProductRepository;
        $this->settingsSeoRepository = new SettingsSeoRepository;
    }
    public function mount()
    {
        // Ładowanie kategorii głównych
        $this->categories = $this->productRepository->getCategoriesWithChildren();
    }
    public function store()
    {

        $validated = $this->validate([
            'cat_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'parent_id' => 'nullable|exists:product_categories,id',
        ]);



        if ($this->productRepository->existingCategory($validated)) {
            // Zwrócenie błędu, jeśli kategoria istnieje
            session()->flash('error', 'Kategoria o tej nazwie i rodzicu już istnieje.');
            return;
        }


        try {
            // Tworzenie nowej kategorii
            $category = $this->productRepository->createCategory($validated);
            // Tworzenie pustych danych SEO za pomocą nowej metody
            $seo = $this->settingsSeoRepository->createEmptySettingsSeo();
            // Powiązanie SEO z kategorią
            $category->setting_seo_id = $seo->id;
            $category->save();
            // Emitowanie zdarzenia
            $this->dispatch('category-added');
            // Resetowanie formularza
            $this->resetForm();
            // Powiadomienie o sukcesie
            session()->flash('success', 'Kategoria została dodana.');
        } catch (\Exception $e) {
            // Logowanie błędu
            Log::error('Błąd podczas tworzenia kategorii', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'validated_data' => $validated ?? null,
            ]);
            // Obsługa błędu
            session()->flash('error', 'Wystąpił błąd podczas dodawania kategorii: ' . $e->getMessage());
        }
    }
    public function resetForm()
    {
        // Resetowanie danych formularza
        $this->cat_name = '';
        $this->description = '';
        $this->parent_id = null;
    }
    public function render()
    {
        return view('livewire.backend.products.category-create', [
            'categories' => $this->categories
        ]);
    }
}
