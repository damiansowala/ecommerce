<?php

namespace App\Enums;

enum SaleTypeEnum: string
{
    case WHOLESALE = 'wholesale'; // Hurt
    case RETAIL = 'retail';       // Detal
    case ONLINE = 'online';       // Online

    public function label(): string
    {
        return match ($this) {
            self::WHOLESALE => 'Hurt',
            self::RETAIL => 'Detal',
            self::ONLINE => 'Sklep Online',
        };
    }

    public static function options(): array
    {
        return array_map(fn($case) => $case->value, self::cases());
    }

    public static function select(): array
    {
        return array_reduce(self::cases(), function ($carry, $case) {
            $carry[$case->value] = $case->label();
            return $carry;
        }, []);
    }


    public static function getLabelForValue(string|null $value): string
    {
        $status = match ($value) {
            self::WHOLESALE->value => self::WHOLESALE->label(),
            self::RETAIL->value => self::RETAIL->label(),
            self::ONLINE->value => self::ONLINE->label(),
            null => 'Brak typu sprzedaży',
            default => 'Nieznany typ sprzedaży',
        };

        $color = match ($value) {
            self::WHOLESALE->value => 'text-bg-primary',
            self::RETAIL->value => 'text-bg-warning',
            self::ONLINE->value => 'text-bg-info',
            default => 'text-bg-danger',
        };

        return '<span class="badge ' . $color . ' w-100">' . $status . '</span>';
    }
}
