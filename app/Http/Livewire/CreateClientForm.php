<?php

namespace App\Http\Livewire;

use App\Enums\Contributor;
use App\Enums\PersonType;
use App\Enums\TaxRegimeCode;
use App\Models\Client;
use Livewire\Component;

class CreateClientForm extends Component
{
    public $name;

    public $fantasy;

    public $email;

    public $person_type;

    public $cpf_cnpj;

    public $tax_regime_code;

    public $contributor;

    public $state_registration;

    public $zipcode;

    public $fu;

    public $city;

    public $district;

    public $number;

    public $complement;

    public $fone;

    public $observation;

    public $adress;

    protected $rules = [
        'name' => 'required|string|between:1,120',
        'email' => 'required|email',
        'fantasy' => 'string|between:1,30',
        'person_type' => 'required',
        'fone' => 'integer|max_digits:40',
        'contributor' => 'required',
        'cpf_cnpj' => 'required|unique:clients|integer|max_digits:14',
        'adress' => 'required|string|between:1,50',
        'number' => 'required|string|between:1,10',
        'complement' => 'nullable|string|between:1,100',
        'district' => 'required|string|between:1,30',
        'zipcode' => 'required|string|between:1,10',
        'adress' => 'required|string|between:1,50',
        'city' => 'required|string|between:1,30',
        'fu' => 'required|string|size:2',
        'state_registration' => 'integer|max_digits:12|nullable',
        'tax_regime_code' => 'required',
        'observation' => 'nullable|string|between:1,255',
    ];

    public function render()
    {
        $personTypes = PersonType::cases();
        $contributors = Contributor::cases();
        $taxRegimeCodes = TaxRegimeCode::cases();

        $this->personTypeCases();

        return view(
            'livewire.create-client-form',
            compact([
                'personTypes',
                'contributors',
                'taxRegimeCodes',
            ])
        );
    }

    public function submit()
    {
        $this->validate();

        // Store the client...
        if (Client::create($this->all())) {
            session()->flash('success', 'Cliente cadastrado com sucesso!');

            return redirect()->route('client.index');
        } else {
            session()->flash('error', 'Erro ao cadastrar cliente!');

            return redirect()->route('client.index');
        }
    }

    public function personTypeCases()
    {
        if ($this->person_type === PersonType::PHYSICAL) {
            return true;
        }

        switch ($this->person_type) {
            case PersonType::PHYSICAL:
                dd('Pessoa Física');
                break;

            case PersonType::LEGAL:
                dd('Pessoa Jurídica');
                break;

            case PersonType::STRANGE:
                dd('Pessoa Estrangeira');
                break;
        }
    }
}
