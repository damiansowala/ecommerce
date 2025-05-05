<?php

namespace App\Enums;

enum ClientTypeEnum: string
{
    case COMPANY = 'company';
    case INDIVIDUAL = 'individual';

    public function label(): string
    {
        return match ($this) {
            self::COMPANY => 'Firma',
            self::INDIVIDUAL => 'Osoba fizyczna',
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
            self::COMPANY->value => self::COMPANY->label(),
            self::INDIVIDUAL->value => self::INDIVIDUAL->label(),
            null => 'Brak typu klienta',
            default => 'Nieznany typ klienta',
        };

        $color = ($value == self::COMPANY->value) ? 'text-bg-primary' : 'text-bg-secondary';

        return '<span class="badge ' . $color . ' w-100">' . $status . '</span>';
    }
}
