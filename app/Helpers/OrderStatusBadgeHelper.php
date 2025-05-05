<?php

use App\Enums\OrderStatusEnum;

if (!function_exists('orderStatusBadge')) {
    function orderStatusBadge(OrderStatusEnum $status): string
    {
        // Mapowanie kolorów do statusów
        $colors = [
            OrderStatusEnum::NEW->value => 'text-bg-primary',
            OrderStatusEnum::PENDING_PAYMENT->value => 'text-bg-warning',
            OrderStatusEnum::ON_HOLD_PENDING_PAYMENT->value => 'text-bg-secondary',
            OrderStatusEnum::PROCESSING->value => 'text-bg-info',
            OrderStatusEnum::READY_TO_SHIP->value => 'text-bg-success',
            OrderStatusEnum::SHIPPED->value => 'text-bg-primary',
            OrderStatusEnum::DELIVERED->value => 'text-bg-success',
            OrderStatusEnum::AWAITING_PAYMENT_PICKUP->value => 'text-bg-warning',
            OrderStatusEnum::COMPLETED->value => 'text-bg-success',
            OrderStatusEnum::CANCELED->value => 'text-bg-danger',
            OrderStatusEnum::RETURNED->value => 'text-bg-dark',
            OrderStatusEnum::FAILED->value => 'text-bg-danger',
        ];

        // Pobranie klasy koloru na podstawie wartości statusu
        $colorClass = $colors[$status->value] ?? 'text-bg-secondary';

        // Generowanie znacznika <span> z odpowiednią klasą koloru i tekstem
        return sprintf(
            '<span class="badge %s">%s</span>',
            $colorClass,
            $status->label()
        );
    }
}
