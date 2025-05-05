<?php

namespace App\Helpers;

class BadgeHelper
{
    /**
     * Generowanie badge z liczbową wartością.
     *
     * @param int|string $number Liczba lub tekst do wyświetlenia w badge
     * @param string $textColor Kolor tekstu (np. "text-bg-danger")
     * @return string
     */
    public static function badge($number = 0, string $textColor = 'text-bg-danger'): string
    {
        return '<span class="badge ' . e($textColor) . ' rounded-pill">' . e($number) . '</span>';
    }
}


// {!! BadgeHelper::badge(32) !!} <!-- Badge z wartością 32 i domyślnym kolorem -->
// {!! BadgeHelper::badge(50, 'text-bg-primary') !!} <!-- Badge z wartością 50 i innym kolorem -->
