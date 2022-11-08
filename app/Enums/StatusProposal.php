<?php

namespace App\Enums;

enum StatusProposal: int
{
    case ACCEPT = 1;
    case WAITING = 2;
    case REJECT = 0;
}
