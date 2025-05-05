<?php

namespace App\Helpers;

use App\Enums\TooltipEnum;

class TooltipHelper
{
    /**
     * Generowanie tooltipa z podstawowym tekstem.
     *
     * @param string|null $prompt
     * @return string
     */
    public static function tooltip(string $prompt = null): string
    {
        return '<i class="bi bi-question-circle ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="' . e($prompt) . '"></i>';
    }

    /**
     * Generowanie tooltipa z ikoną ustawień i linkiem.
     *
     * @param string|null $url
     * @param string|null $prompt
     * @return string
     */
    public static function tooltipSettingsUrl(string $url = null, string $prompt = null): string
    {
        return '<a href="' . $url . '"><i class="bi bi-gear ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="' . e($prompt) . '"></i></a>';
    }

    /**
     * Generowanie tooltipa z niestandardową klasą ikony.
     *
     * @param string|null $iconClass
     * @param string|null $prompt
     * @return string
     */
    public static function customTooltip(string $iconClass = 'bi-question-circle', string $prompt = null, string $url = '#'): string
    {
        return '<a href="' . $url . '"><i class="bi ' . $iconClass . ' ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="' . e($prompt) . '"></i></a>';
    }
}


// <!-- Tooltip z podstawowym tekstem -->
// {!! TooltipHelper::tooltip(TooltipEnum::EMPTY) !!}

// <!-- Tooltip z linkiem do ustawień -->
// {!! TooltipHelper::tooltipSettingsUrl('https://example.com/settings', TooltipEnum::EMPTY) !!}

// <!-- Tooltip z niestandardową ikoną -->
// {!! TooltipHelper::customTooltip('bi-lock', TooltipEnum::EMPTY, '#') !!}