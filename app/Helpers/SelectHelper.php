<?php

namespace App\Helpers;


class SelectHelper
{
    public static function renderCategoryOptions($categories, $level = 0, $parentID = null, $editedCategoryId = null)
    {
        foreach ($categories as $category) {
            // Pomijamy edytowaną kategorię
            if ($category->id != $editedCategoryId) {
                // Generujemy wcięcia za pomocą znaków "-"
                $indentation = str_repeat('-', $level);

                // Tworzymy opcję select
                echo "<option value=\"{$category->id}\" " . ($category->id == $parentID ? 'selected' : '') . ">
                    {$indentation} {$category->cat_name}
                </option>";

                // Jeśli kategoria ma dzieci, wywołujemy rekurencyjnie funkcję
                if ($category->children->isNotEmpty()) {
                    SelectHelper::renderCategoryOptions($category->children, $level + 1, $parentID, $editedCategoryId);
                }
            }
        }
    }
}
