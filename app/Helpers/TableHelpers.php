<?php

namespace App\Helpers;

use App\Models\ColumnVisibility;

class TableHelpers
{
    private function getColumnVisibilityState($tableName, $columnIndex)
    {
        // Pobierz widoczność kolumny na podstawie nazwy tabeli i indeksu kolumny
        $columnVisibility = ColumnVisibility::where('table_name', $tableName)
            ->where('column_index', $columnIndex)
            ->first();

        // Zwróć stan widoczności kolumny
        return $columnVisibility && $columnVisibility->is_visible;
    }

    function getColumnVisibility($tableName, $columnIndex)
    {
        // Użyj wspólnej metody do sprawdzenia widoczności
        $isVisible = $this->getColumnVisibilityState($tableName, $columnIndex);

        // Zwróć styl CSS tylko dla display: none;
        return $isVisible ? '' : 'style="display: none"';
    }

    function getCheckboxVisibility($tableName, $columnIndex)
    {
        // Użyj wspólnej metody do sprawdzenia widoczności
        $isVisible = $this->getColumnVisibilityState($tableName, $columnIndex);

        // Zwróć odpowiednią klasę dla form-check-input w zależności od widoczności
        return $isVisible ? 'checked' : '';
    }

    function getFiltersVisibility($tableName, $columnIndex)
    {
        // Użyj wspólnej metody do sprawdzenia widoczności
        $isVisible = $this->getColumnVisibilityState($tableName, $columnIndex);

        // Zwróć odpowiednią klasę dla form-check-input w zależności od widoczności
        return $isVisible ? ' ' : ' d-none';
    }
}
