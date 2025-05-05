<?php

namespace App\Enums;

enum VerificationStatusEnum: int
{
    case VERIFIED = 1;
    case UNVERIFIED = 0;

    public function label(): string
    {
        return match ($this) {
            self::VERIFIED => 'Zweryfikowany',
            self::UNVERIFIED => 'Niezweryfikowany',
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


    public static function getLabelForValue(int|string|null $value): string
    {
        $status = match ($value) {
            self::VERIFIED->value => self::VERIFIED->label(),
            self::UNVERIFIED->value => self::UNVERIFIED->label(),
            null => 'Brak statusu',
            default => 'Nieznany status',
        };

        $color = ($value == self::VERIFIED->value) ? 'text-bg-success' : 'text-bg-danger';

        return '<span class="badge ' . $color . ' w-100">' . $status . '</span>';
    }
}
