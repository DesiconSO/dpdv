<?php

namespace App\Models;

use App\Enums\Contributor;
use App\Enums\PersonType;
use App\Enums\TaxRegimeCode;
use Illuminate\Database\Eloquent\Casts\Attribute;
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
        'contributor',
    ];

    protected $cast = [
        'person_type' => PersonType::class,
        'contributor' => Contributor::class,
        'tax_regime_code' => TaxRegimeCode::class,
    ];

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => formatText($value),
            set: fn ($value) => unformatText($value),
        );
    }

    protected function email(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => unformatText($value),
        );
    }

    protected function cpfCnpj(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => formatDocument($value),
            set: fn ($value) => unformatDocument($value)
        );
    }

    protected function fone(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => formatPhone($value),
            set: fn ($value) => unformatDocument($value)
        );
    }
}
