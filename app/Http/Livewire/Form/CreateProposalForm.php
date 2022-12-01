<?php

namespace App\Http\Livewire\Form;

use App\Enums\SaleMode;
use App\Enums\ShippingMode;
use App\Models\Client;
use Livewire\Component;

class CreateProposalForm extends Component
{
    public $client;
    public $shipping_company;
    public $sale_mode;
    public $shipping_mode;
    public $seller_discount;
    public $shipping_price;
    public $seller_note;
    public $status;
    public $payment_method;
    public $payment_condition;
    public $payment_value;
    public $payment_discount;
    public $parcel_price;
    public $description_parcel;
    public $shippingMode;
    public $saleMode;
    public $NFE;

    public $products = array();
    public $parcels = array();

    protected $listeners = ['productAdded' => 'setProducts', 'parcelsAdded' => 'setParcels'];

    public function setProducts(array $products)
    {
        $this->products = $products;
    }

    public function setParcels(array $parcels)
    {
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
        }
    }

    public function render()
    {
        $this->shippingMode = ShippingMode::cases();
        $this->saleMode = SaleMode::cases();

        return view(
            'livewire.form.create-proposal-form',
        );
    }
}
