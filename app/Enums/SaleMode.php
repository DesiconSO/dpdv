<?php

namespace App\Enums;

enum SaleMode: int
{
    case SALE = 1;
    case RESALE = 0;

    public function data(): string
    {
        return match ($this) {
            self::SALE => 'Pessoal',
            self::RESALE => 'Revenda',
        };
    }
}
