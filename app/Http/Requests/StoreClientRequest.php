<?php

namespace App\Http\Requests;

use App\Enums\PersonType;
use App\Enums\Taxpayer;
use App\Enums\TaxRegimeCode;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class StoreClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:120'],
            'fantasy' => ['string', 'max:30'],
            'person_type' => ['required', new Enum(PersonType::class)],
            'fone' => ['integer', 'min:6', 'max:40'],
            'cpf_cnpj' => ['required', 'unique:clients', 'integer', 'max:14'],
            'taxpayer' => ['required', new Enum(Taxpayer::class)],
            'adress' => ['required', 'string', 'max:50'],
            'number' => ['required', 'string', 'max:10'],
            'complement' => ['string', 'max:100'],
            'district' => ['required', 'string', 'max:30'],
            'zip_code' => ['required', 'string', 'max:10'],
            'city' => ['required', 'string', 'max:30'],
            'fu' => ['required', 'string', 'size:2'],
            'state_registration' => ['integer', 'min:6', 'max:12'],
            'tax_regime_code' => ['required', new Enum(TaxRegimeCode::class)],
        ];
    }
}
