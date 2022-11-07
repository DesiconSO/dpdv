<?php

namespace App\Enums;

enum SaleMode: string
{
    case CONSUPTION = 'consumption';
    case NO_SALE = 'resale';
}
