<?php

namespace App\Http\Livewire\Backend\Uni;

use Livewire\Component;

use App\Models\ColumnVisibility;

class TableComponent extends Component
{
    public $dataTable;
    public $tableID;
    public $columns;
    public $selectedColumns = [];
    public $userId;
    public $originalData;  // Oryginalne dane
    public $search = '';

    public $isVisible = true;

    public $actionUrl;

    // Inicjalizacja danych w komponencie
    public function mount($dataTable, $tableID, $actionUrl)
    {
        $this->dataTable = $dataTable;
        $this->originalData = $dataTable;
        $this->tableID = $tableID;
        $this->userId = auth()->id();
        $this->loadColumnVisibility();
        $this->columns =  (!empty($dataTable) && isset($dataTable[0])) ? array_keys($dataTable[0]) : [];

        $this->actionUrl = $actionUrl;
    }
    public function loadColumnVisibility()
    {
        // Ładowanie zapisanych preferencji widoczności kolumn dla użytkownika
        $visibility = ColumnVisibility::where('user_id', $this->userId)
            ->where('table_name', $this->tableID)
            ->get();

        $this->selectedColumns = $visibility->pluck('column_index')->toArray();
    }
    public function saveColumnVisibility()
    {
        // Usuwanie starych zapisanych preferencji
        ColumnVisibility::where('user_id', $this->userId)
            ->where('table_name', $this->tableID)
            ->delete();

        // Zapisanie nowych preferencji
        foreach ($this->selectedColumns as $index) {
            ColumnVisibility::create([
                'user_id' => $this->userId,
                'table_name' => $this->tableID,
                'column_index' => $index,
                'is_visible' => true,
            ]);
        }

        session()->flash('message', 'Preferencje widoczności kolumn zostały zapisane.');
    }

    public function updateColumnVisibility($columnIndex)
    {
        // Ustawienie widoczności na podstawie przełącznika
        $visibility = $this->isVisible ? 1 : 0;

        // Zapisz widoczność kolumny do bazy danych przy użyciu modelu ColumnVisibility
        ColumnVisibility::updateOrCreate(
            [
                'user_id' => auth()->id(),  // ID użytkownika
                'table_name' =>   $this->tableID,  // Nazwa tabeli
                'column_index' => $columnIndex  // Indeks kolumny
            ],
            [
                'is_visible' => $visibility  // Aktualizacja widoczności
            ]
        );
    }
    public function updatedSearch()
    {
        // Filtruj dane po każdej zmianie w polu wyszukiwania
        $this->filterData();

        // Emitowanie zdarzenia za pomocą dispatch()
        $this->dispatch('dataUpdated', ['search' => $this->search]);
    }
    public function filterData()
    {
        // Jeśli fraza wyszukiwania jest pusta, przywracamy oryginalne dane
        if ($this->search === '') {
            $this->dataTable = $this->originalData;
        } else {
            // Filtrowanie danych na podstawie wyszukiwania
            $filteredData = collect($this->originalData)->filter(function ($item) {
                foreach ($item as $key => $value) {
                    if (strpos(strtolower((string) $value), strtolower($this->search)) !== false) {
                        return true;
                    }
                }
                return false;
            });

            // Jeżeli nie ma wyników, ustaw pustą kolekcję
            if ($filteredData->isEmpty()) {
                $this->dataTable = [];  // Jeśli brak wyników, tabela jest pusta
            } else {
                $this->dataTable = $filteredData->values()->all(); // Resetuje klucze tablicy
            }
        }
    }



    public function render()
    {

        // Przekazujemy przefiltrowane dane do widoku
        return view('livewire.backend.uni.table-component', [
            'dataTable' =>  $this->dataTable,
            'columns' => $this->columns
        ]);
    }
}
