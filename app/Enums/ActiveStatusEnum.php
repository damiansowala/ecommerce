<?php

namespace App\Enums;

enum ActiveStatusEnum: int
{
    case ACTIVE = 1;
    case INACTIVE = 0;

    public function label(): string
    {
        return match ($this) {
            self::ACTIVE => 'Aktywny',
            self::INACTIVE => 'Nieaktywny',
        };
    }

    public static function options(): array
    {
        return array_map(fn($case) => $case->value, self::cases());
    }

    public static function getLabelForValue(int|string|null $value): string
    {
        $status = match ($value) {
            self::ACTIVE->value => self::ACTIVE->label(),
            self::INACTIVE->value => self::INACTIVE->label(),
            null => 'Brak statusu',
            default => 'Nieznany status',
        };

        $color = ($value == 1) ? 'text-bg-success' : 'text-bg-danger';

        return '<span class="badge ' . $color  . '  w-100">' . $status . '</span>';
    }


    public static function select(): array
    {
        return array_reduce(self::cases(), function ($carry, $case) {
            $carry[$case->value] = $case->label();
            return $carry;
        }, []);
    }
}
