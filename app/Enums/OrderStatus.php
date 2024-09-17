<?php

namespace App\Enums;

enum OrderStatus : int
{
    case PENDING = 1;
    case CONFIRMED = 2;
    case CANCELLED = 3;
    case PROCESSING = 4;
    case ON_HOLD = 5;
    case SHIPPED = 6;
    case DELIVERED = 7;

    // Method to return color classes (e.g., Bootstrap classes)
    public function color(): string
    {
        return match ($this) {
            self::PENDING => 'secondary',
            self::CONFIRMED => 'primary',
            self::CANCELLED => 'danger',
            self::PROCESSING => 'secondary',
            self::ON_HOLD => 'warning',
            self::SHIPPED => 'info',
            self::DELIVERED => 'success',
        };
    }

    // Method to return human-readable labels for each status
    public function label(): string
    {
        return match ($this) {
            self::PENDING => 'Pending',
            self::CONFIRMED => 'Confirmed',
            self::CANCELLED => 'Cancelled',
            self::PROCESSING => 'Processing',
            self::ON_HOLD => 'On Hold',
            self::SHIPPED => 'Shipped',
            self::DELIVERED => 'Delivered',
        };
    }
}
