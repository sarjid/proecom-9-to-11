<?php

namespace App\Enums;

enum GlobalStatus: int
{
    case INACTIVE = 0;
    case ACTIVE = 1;

    // This method returns the corresponding color class for each status
    public function color(): string
    {
        return match($this) {
            self::INACTIVE => 'danger',    // Inactive = danger (red)
            self::ACTIVE => 'success',     // Active = success (green)
        };
    }

    // Optionally, you can also have a label method if needed
    public function label(): string
    {
        return match($this) {
            self::INACTIVE => 'Inactive',
            self::ACTIVE => 'Active',
        };
    }
}
