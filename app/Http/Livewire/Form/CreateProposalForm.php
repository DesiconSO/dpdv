<?php

namespace App\Http\Livewire\Form;

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

    public function render()
    {
        return view('livewire.form.create-proposal-form');
    }
}
