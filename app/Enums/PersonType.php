<?php

namespace App\Enums;

enum PersonType: string
{
    case PHYSICAL = 'F';
    case LEGAL = 'J';
    case STRANGE = 'E';
}
