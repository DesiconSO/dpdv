<?php

namespace App\Http\Livewire\Form;

use App\Enums\SaleMode;
use App\Enums\ShippingCompany;
use App\Enums\ShippingMode;
use App\Enums\StatusProposal;
use App\Models\Client;
use App\Models\Proposal;
use Livewire\Component;

class CreateProposalForm extends Component
{
    public $client;

    public $shipping_company;

    public $seller_discount;

    public $shipping_price;

    public $seller_note;

    public $status;

    public $shippingMode;

    public $saleMode;

    public $NFE;

    public $products = [];

    public $parcels = [];

    protected $listeners = [
        'productAdded' => 'setProducts',
        'parcelsAdded' => 'setParcels',
        'onlyOneParcel' => 'setOnlyOneParcel',
    ];

    public function setProducts(array $products)
    {
        $this->products = $products;
    }

    public function setParcels(array $parcels)
    {
        $this->parcels = $parcels;
    }

    protected $rules = [
        'client' => 'required',
        'shipping_company' => 'required',
        'seller_discount' => 'required|numeric',
        'shipping_price' => 'required|numeric',
        'seller_note' => '',
        'status' => '',
        'shippingMode' => 'required',
        'saleMode' => 'required',
        'products' => 'array',
        'parcels' => 'array',
        'NFE' => 'boolean|required',
    ];

    public function changeSellerDiscount()
    {
        $this->emit('sellerDiscountChanged', $this->seller_discount);
    }

    public function changeClient()
    {
        if ($this->client != null) {
            $client = Client::all()->firstWhere('cpf_cnpj', '===', $this->client);
            if ($client) {
                $this->emit('clientChanged', $client);
                $this->resetErrorBag();
            } else {
                $this->addError('client', 'Cliente não encontrado');
            }
        }
    }

    public function setOnlyOneParcel($parcels)
    {
        $this->parcels[0] = $parcels;
    }

    public function changeNFE()
    {
        $this->emit('NFEChanged', $this->NFE);
    }

    public function changeSaleMode()
    {
        $this->emit('saleModeChanged', $this->saleMode);
    }

    public function render()
    {
        $shippingModeState = ShippingMode::cases();
        $saleModeState = SaleMode::cases();
        $shippingCompany = ShippingCompany::cases();

        return view(
            'livewire.form.create-proposal-form',
            compact('shippingModeState', 'saleModeState', 'shippingCompany')
        );
    }

    public function submit()
    {
        if ($this->validate()) {
            if ($this->parcels == null) {
                $this->emit('getParcel', $this->parcels);
            }

            $client = Client::all()->firstWhere('cpf_cnpj', '===', $this->client);

            Proposal::create([
                'user_id' => auth()->user()->id,
                'client_id' => $client->id,
                'shipping_company' => ShippingCompany::from($this->shipping_company)->value,
                'seller_discount' => $this->seller_discount,
                'shipping_price' => $this->shipping_price,
                'seller_note' => $this->seller_note,
                'status' => StatusProposal::WAITING->value,
                'shipping_mode' => ShippingMode::from($this->shippingMode)->value,
                'sale_mode' => SaleMode::from($this->saleMode)->value,
                'NFE' => $this->NFE,
            ]);

            return redirect()->route('proposal.index')->with('success', 'Proposta criada com sucesso!');
        }
    }
}
