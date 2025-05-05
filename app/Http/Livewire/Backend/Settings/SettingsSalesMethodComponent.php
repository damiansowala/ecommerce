<?php

namespace App\Http\Livewire\Backend\Settings;

use Livewire\Component;
use App\Models\Settings\SettingsSalesMethod;

class SettingsSalesMethodComponent extends Component
{
    public $methods = [];
    public $name;

    protected $rules = [
        'name' => 'required|string|max:255|unique:settings_sales_method,name',
    ];

    protected $messages = [
        'name.required' => 'Pole nazwy jest wymagane.',
        'name.unique' => 'Metoda sprzedaży o takiej nazwie już istnieje.',
    ];

    public function mount()
    {
        // Inicjalizacja danych
        $this->methods = SettingsSalesMethod::all();
    }

    public function addMethod()
    {
        // Walidacja danych
        $this->validate();

        // Tworzenie nowego rekordu
        SettingsSalesMethod::create(['name' => $this->name]);

        // Resetowanie pola formularza i odświeżenie danych
        $this->name = '';
        $this->methods = SettingsSalesMethod::all();

        // Informacja o sukcesie
        session()->flash('success', 'Metoda sprzedaży została dodana.');
    }

    public function deleteMethod($id)
    {
        // Usuwanie metody sprzedaży
        SettingsSalesMethod::destroy($id);

        // Odświeżenie danych
        $this->methods = SettingsSalesMethod::all();

        // Informacja o sukcesie
        session()->flash('success', 'Metoda sprzedaży została usunięta.');
    }

    public function render()
    {
        return view('livewire.backend.settings.settings-sales-method-component');
    }
}
