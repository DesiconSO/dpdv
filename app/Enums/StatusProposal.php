<?php

namespace App\Enums;

enum StatusProposal: int
{
    case REJECT = 0;
    case ACCEPT = 1;
    case WAITING = 2;

    public function data(): string
    {
        return match ($this) {
            self::ACCEPT => 'aceita',
            self::WAITING => 'pendente',
            self::REJECT => 'rejeitada',
        };
    }
}
