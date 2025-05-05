<?php

namespace App\Enums;

enum OggEnmu: string
{
    case WEBSITE = 'website';
    case ARTICLE = 'article';

    public function label(): string
    {
        return match ($this) {
            self::WEBSITE => 'Website (zalecany)',
            self::ARTICLE => 'Article',
        };
    }

    public static function options(): array
    {
        return array_map(fn($case) => $case->value, self::cases());
    }
}
