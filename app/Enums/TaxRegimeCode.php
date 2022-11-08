<?php

namespace App\Enums;

enum TaxRegimeCode: int
{
    case NOT_DESINED = 0;
    case SIMPLE_NATIONAL = 1;
    case SIMPLE_NATIONAL_GROSS = 2;
    case NORMAL_REGIME = 3;
}
