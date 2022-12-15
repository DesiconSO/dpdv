<?php

namespace App\Enums;

enum ShippingCompany: int
{
    case MANDAE = 0;
    case JONAS = 1;
    case APEX = 2;

    public function name(): string
    {
        return match ($this) {
            self::MANDAE => 'mandae',
            self::JONAS => 'jonas',
            self::APEX => 'apex',
        };
    }
}
