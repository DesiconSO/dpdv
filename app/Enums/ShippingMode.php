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

    public function data(): string
    {
        return match ($this) {
            self::FOB => 'Contratação do Frete por conta do Destinatário (FOB)',
            self::CIF => 'Contratação do Frete por conta do Remetente (CIF)',
            self::CFT => 'Contratação do Frete por conta de Terceiros',
            self::CPR => 'Transporte Próprio por conta do Remetente',
            self::CPD => 'Transporte Próprio por conta do Destinatário',
            self::SOT => 'Sem Ocorrência de Transporte',
        };
    }
}
