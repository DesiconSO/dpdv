<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'physical_person',
        'fone',
        'state_registration',
        'cpf_cnpj',
        'address',
        'number',
        'complement',
        'district',
        'zip_code',
        'city',
        'fu',
        'fantasy',
        'tax_regime_code',
        'municipal_registration',
    ];

    protected $cast = [
        'physical_person' => 'boolean',
    ];
}
