<?php

namespace App\Enums;

enum TaxRegimeCode: int
{
    case NOT_DESINED = 0;
    case SIMPLE_NATIONAL = 1;
    case SIMPLE_NATIONAL_GROSS = 2;
    case NORMAL_REGIME = 3;

    public function data(): string
    {
        return match ($this) {
            self::NOT_DESINED => 'Não definido',
            self::SIMPLE_NATIONAL => 'Simples nacional',
            self::SIMPLE_NATIONAL_GROSS => 'Simples nacional - Excesso de sublimite de receita bruta',
            self::NORMAL_REGIME => 'Regime normal',
        };
    }
}
