<?php

namespace App\Enums;

enum UserRoles: int
{
    case GUEST = 0;
    case USER = 1;
    case ADMIN = 2;
    case SELLER = 3;

    public function data(): string
    {
        return match ($this) {
            self::USER => 'user',
            self::ADMIN => 'admin',
            self::SELLER => 'seller',
            self::GUEST => 'guest',
        };
    }
}
