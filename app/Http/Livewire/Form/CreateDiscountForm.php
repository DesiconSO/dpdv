<?php

namespace App\Http\Livewire\Form;

use App\Models\Discount;
use App\Models\Product;
use Livewire\Component;

class CreateDiscountForm extends Component
{
    public $sku;

    public $max_amount;

    public $discount;

    public function render()
    {
        return view('livewire.form.create-discount-form');
    }

    protected $messages = [];

    public $rules = [
        'sku' => 'required|string',
        'max_amount' => 'required|numeric',
        'discount' => 'required|numeric|between:0,15',
    ];

    public function submit()
    {
        $this->validate();

        Discount::create(
            [
                'product_id' => Product::firstWhere('sku', $this->sku)->id,
                'max_amount' => $this->max_amount,
                'discount' => $this->discount,
                'user_id' => auth()->user()->id,
            ]
        );

        session()->flash('success', __('form.success'));

        return redirect()->route('discount.index');
    }
}
