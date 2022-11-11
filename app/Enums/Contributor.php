<?php

namespace App\Enums;

enum Contributor: int
{
    case CONTRIBUTOR = 1;
    case EXEMPTED = 2;
    case NO_CONTRIBUTOR = 9;

    public function data(): string
    {
        return match ($this) {
            self::CONTRIBUTOR => 'Contribuinte ICMS',
            self::EXEMPTED => 'Contribuinte isento de Inscrição no cadastro de Contribuintes do ICMS',
            self::NO_CONTRIBUTOR => 'Não Contribuinte, que pode ou não possuir Inscrição Estadual no Cadastro de Contribuintes do ICMS',
        };
    }
}
