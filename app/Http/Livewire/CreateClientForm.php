<?php

namespace App\Http\Livewire;

use App\Enums\Contributor;
use App\Enums\PersonType;
use App\Enums\TaxRegimeCode;
use App\Models\Client;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

    public $user;

    public function __construct()
    {
        if (auth()->user()->roles->first()->name === 'user') {
            $this->name = auth()->user()->name ?? '';
            $this->email = auth()->user()->email ?? '';
        }
    }

    protected $rules = [
        'name' => 'required|string|between:1,120',
        'email' => 'required|email',
        'fantasy' => 'nullable|string|between:1,30',
        'person_type' => 'required',
        'fone' => 'integer|max_digits:40',
        'contributor' => 'required',
        'cpf_cnpj' => 'required|unique:clients|integer|max_digits:14',
        'adress' => 'required|string|between:1,50',
        'number' => 'required|string|digits_between:1,10',
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
        if ($client = Client::create($this->all())) {
            if (auth()->user()->roles->first()->name === 'user') {
                $user = User::find(auth()->user()->id);
                $user->client_id = $client->id;
                $user->name = $client->name;
                $user->save();
            }

            session()->flash('message', 'Cliente cadastrado com sucesso!');
            return redirect()->route('client.index');
        } else {
            session()->flash('message', 'Erro ao cadastrar cliente!');
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
