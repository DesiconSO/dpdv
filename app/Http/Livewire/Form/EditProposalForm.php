<?php

namespace App\Http\Livewire\Form;

use App\Enums\SaleMode;
use App\Enums\ShippingCompany;
use App\Enums\ShippingMode;
use App\Enums\StatusProposal;
use App\Models\Client;
use App\Models\Proposal;
use Livewire\Component;

class EditProposalForm extends Component
{
    public $client;
    public $shipping_company;
    public $seller_discount;
    public $shipping_price;
    public $seller_note;
    public $status;
    public $shippingMode;
    public $saleMode;
    public $nfe;
    public $products = [];
    public $parcels = [];
    public $proposal;

    public $otherErrors = [];

    protected $listeners = [
        'productAdded' => 'setProducts',
        'parcelsAdded' => 'setParcels',
        'onlyOneParcel' => 'setOnlyOneParcel',
        'addErrorBag' => 'addErrorBag',
        'submitValidation' => 'submit',
    ];

    protected $rules = [
        'client' => 'required',
        'shipping_company' => 'required',
        'seller_discount' => '',
        'shipping_price' => 'required|numeric',
        'seller_note' => '',
        'status' => '',
        'shippingMode' => 'required',
        'saleMode' => 'required',
        'products' => 'array',
        'parcels' => 'array',
        'nfe' => 'boolean|required',
    ];

    public function mount(Proposal $proposal)
    {
        dd($proposal->productsProposal);
        $this->proposal = $proposal;

        $this->client = Client::find($proposal->client);
        $this->shipping_company = $proposal->shipping_company;
        $this->seller_discount = $proposal->seller_discount;
        $this->shipping_price  = $proposal->shipping_price;
        $this->seller_note = $proposal->seller_note;
        $this->status = $proposal->status;
        $this->shippingMode = $proposal->shippingMode;
        $this->saleMode = $proposal->saleMode;
        $this->nfe = $proposal->nfe;
        $this->products = [];
        $this->parcels = [];
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

    public function setProducts(array $products)
    {
        $this->emit('resetParcels');
        $this->products = $products;
    }

    public function setParcels(array $parcels)
    {
        $this->resetErrorBag();
        $this->parcels = $parcels;
    }

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

            $this->setProducts([]);
        }
    }

    public function setOnlyOneParcel($parcels)
    {
        $this->parcels[0] = $parcels;

        $this->submit();
    }

    public function changeNfe()
    {
        $this->emit('NfeChanged', $this->nfe);
        if ($this->nfe != null) {
            $this->setProducts([]);
        }
    }

    public function changeSaleMode()
    {
        $this->emit('saleModeChanged', $this->saleMode);

        if ($this->saleMode != null) {
            $this->setProducts([]);
        }
    }

    private function verifyIfHaveProductsInArray()
    {
        if (!count($this->products)) {
            $this->addError('products', 'Adicione pelo menos um produto.');
            return false;
        } else {
            return true;
        }
    }

    public function verifyIfHaveParcelsInArray()
    {
        if (!count($this->parcels)) {
            $this->emit('getParcel', $this->parcels);
        }
    }

    public function addErrorBag($message)
    {
        $this->addError('parcels', $message);
    }

    public function canSubmit()
    {
        $this->emit('canSubmit', $this->parcels);
    }

    public function submit()
    {
        if ($this->validate() && $this->verifyIfHaveProductsInArray()) {

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
                'nfe' => $this->nfe,
            ]);

            return redirect()->route('proposal.index')->with('success', 'Proposta criada com sucesso!');
        }
    }
}
