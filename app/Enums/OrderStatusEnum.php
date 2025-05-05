<?php

namespace App\Enums;

enum OrderStatusEnum: string
{
    case NEW = 'new';
    case PENDING_PAYMENT = 'pending_payment';
    case ON_HOLD_PENDING_PAYMENT = 'on_hold_pending_payment';
    case PROCESSING = 'processing';
    case READY_TO_SHIP = 'ready_to_ship';
    case SHIPPED = 'shipped';
    case DELIVERED = 'delivered';
    case AWAITING_PAYMENT_PICKUP = 'awaiting_payment_pickup';
    case COMPLETED = 'completed';
    case CANCELED = 'canceled';
    case RETURNED = 'returned';
    case FAILED = 'failed';

    public function label(): string
    {
        return match ($this) {
            self::NEW => 'Nowe',
            self::PENDING_PAYMENT => 'Oczekuje na płatność',
            self::ON_HOLD_PENDING_PAYMENT => 'Wstrzymane, oczekuje na płatność',
            self::PROCESSING => 'W trakcie realizacji',
            self::READY_TO_SHIP => 'Gotowe do wysyłki',
            self::SHIPPED => 'Wysłane',
            self::DELIVERED => 'Dostarczone',
            self::AWAITING_PAYMENT_PICKUP => 'Oczekuje na odbiór płatności',
            self::COMPLETED => 'Zrealizowane',
            self::CANCELED => 'Anulowane',
            self::RETURNED => 'Zwrócone',
            self::FAILED => 'Nieudane',
        };
    }

    public static function options(): array
    {
        return array_map(fn($case) => $case->value, self::cases());
    }
}
