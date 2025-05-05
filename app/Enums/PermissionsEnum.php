<?php

namespace App\Enums;

enum PermissionsEnum: string
{
        // Podstawowe uprawnienia dla każdego modułu
    case VIEW_SALES = 'view-sales';
    case CREATE_SALES = 'create-sales';
    case EDIT_SALES = 'edit-sales';
    case DELETE_SALES = 'delete-sales';

    case VIEW_REPS = 'view-reps';
    case CREATE_REPS = 'create-reps';
    case EDIT_REPS = 'edit-reps';
    case DELETE_REPS = 'delete-reps';

    case VIEW_MESSAGES = 'view-messages';
    case CREATE_MESSAGES = 'create-messages';
    case EDIT_MESSAGES = 'edit-messages';
    case DELETE_MESSAGES = 'delete-messages';

    case VIEW_SETTINGS = 'view-settings';
    case CREATE_SETTINGS = 'create-settings';
    case EDIT_SETTINGS = 'edit-settings';
    case DELETE_SETTINGS = 'delete-settings';

    case VIEW_DOCUMENTS = 'view-documents';
    case CREATE_DOCUMENTS = 'create-documents';
    case EDIT_DOCUMENTS = 'edit-documents';
    case DELETE_DOCUMENTS = 'delete-documents';

    case VIEW_PRODUCTS = 'view-products';
    case CREATE_PRODUCTS = 'create-products';
    case EDIT_PRODUCTS = 'edit-products';
    case DELETE_PRODUCTS = 'delete-products';

    // Metoda pomocnicza do wyświetlania etykiet dla uprawnień
    public function label(): string
    {
        return match ($this) {
            static::VIEW_SALES => 'Przeglądaj Sprzedaż',
            static::CREATE_SALES => 'Twórz Sprzedaż',
            static::EDIT_SALES => 'Edytuj Sprzedaż',
            static::DELETE_SALES => 'Usuń Sprzedaż',

            static::VIEW_REPS => 'Przeglądaj Przedstawicieli',
            static::CREATE_REPS => 'Dodaj Przedstawiciela',
            static::EDIT_REPS => 'Edytuj Przedstawiciela',
            static::DELETE_REPS => 'Usuń Przedstawiciela',

            static::VIEW_MESSAGES => 'Przeglądaj Wiadomości',
            static::CREATE_MESSAGES => 'Twórz Wiadomość',
            static::EDIT_MESSAGES => 'Edytuj Wiadomość',
            static::DELETE_MESSAGES => 'Usuń Wiadomość',

            static::VIEW_SETTINGS => 'Przeglądaj Ustawienia',
            static::CREATE_SETTINGS => 'Dodaj Ustawienia',
            static::EDIT_SETTINGS => 'Edytuj Ustawienia',
            static::DELETE_SETTINGS => 'Usuń Ustawienia',

            static::VIEW_DOCUMENTS => 'Przeglądaj Dokumenty',
            static::CREATE_DOCUMENTS => 'Twórz Dokument',
            static::EDIT_DOCUMENTS => 'Edytuj Dokument',
            static::DELETE_DOCUMENTS => 'Usuń Dokument',

            static::VIEW_PRODUCTS => 'Przeglądaj Produkty',
            static::CREATE_PRODUCTS => 'Dodaj Produkt',
            static::EDIT_PRODUCTS => 'Edytuj Produkt',
            static::DELETE_PRODUCTS => 'Usuń Produkt',
        };
    }
}
