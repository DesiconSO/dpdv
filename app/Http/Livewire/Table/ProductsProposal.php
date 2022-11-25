<?php

namespace App\Http\Livewire\Table;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ProductsProposal extends Component
{
    public $client;
    public $sku;
    public $amount;

    public array $products = array();

    public function render()
    {
        return view('livewire.table.products-proposal');
    }

    public function searchProduct()
    {
        $response = Http::bling([])->get("produto/{$this->sku}/json/");
        $product = $response['retorno']['produtos'][0]['produto'];

        array_push($this->products, [$product, $this->amount]);

        $this->emit('products', ['products' => $this->products]);
    }
}
