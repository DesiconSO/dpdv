<?php

namespace App\Enums;

enum ShippingMode: string
{
    case FOB = 'D';
    case CIF = 'R';
    case CFT = 'T';
    case CPR = '3';
    case CPD = '4';
    case SOT = 'S';
}
