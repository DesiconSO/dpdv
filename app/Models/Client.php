<?php

namespace App\Models;

use App\Enums\Contributor;
use App\Enums\PersonType;
use App\Enums\TaxRegimeCode;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'physical_person',
        'fone',
        'state_registration',
        'cpf_cnpj',
        'adress',
        'number',
        'complement',
        'district',
        'zipcode',
        'city',
        'fu',
        'fantasy',
        'tax_regime_code',
        'municipal_registration',
        'observation',
        'person_type',
        'contributor'
    ];

    protected $cast = [
        'person_type' => PersonType::class,
        'contributor' => Contributor::class,
        'tax_regime_code' => TaxRegimeCode::class,
    ];
}
