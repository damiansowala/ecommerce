<?php

namespace App\Http\Livewire\Backend\Settings;

use Livewire\Component;
use App\Models\Settings\SettingsSalesMethod;

class SalesMethodsSelect extends Component
{
    public $methods = [];
    public $selectedMethod = null; // Wybrana metoda sprzedaży
    public $name;
    public function mount($name = 'sales_method')
    {
        $this->name = $name;
        $this->methods = SettingsSalesMethod::all(); // Pobranie metod sprzedaży z bazy danych
    }

    public function updatedSelectedMethod()
    {
        // Obsługa zmiany wyboru, np. emitowanie zdarzenia do innych komponentów
        $this->emit('salesMethodSelected', $this->selectedMethod);
    }

    public function render()
    {
        return view('livewire.backend.settings.sales-methods-select');
    }
}
