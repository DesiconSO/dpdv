<?php

namespace App\Enums;

enum PersonType: string
{
    case PHYSICAL = 'F';
    case LEGAL = 'J';
    case STRANGE = 'E';

    public function data(): string
    {
        return match ($this) {
            self::PHYSICAL => 'Pessoa Física',
            self::LEGAL => 'Pessoa Jurídica',
            self::STRANGE => 'Estrangeiro',
        };
    }
}
