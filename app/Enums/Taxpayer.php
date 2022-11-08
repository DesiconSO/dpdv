<?php

namespace App\Enums;

use Illuminate\Contracts\Translation\Translator;

enum Taxpayer: int
{
    case CONTRIBUTOR = 1; // 1 - Contribuinte ICMS
    case EXEMPTED = 2; // 2 - Contribuinte isento de Inscrição no cadastro de Contribuintes do ICMS
    case NO_CONTRIBUTOR = 9; // 9 - Não Contribuinte, que pode ou não possuir Inscrição Estadual no Cadastro de Contribuintes do ICMS
}
