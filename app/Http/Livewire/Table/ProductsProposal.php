<?php

namespace App\Http\Livewire\Table;

use App\Models\Client;
use App\Traits\DifalTrait;
use App\Traits\StaggeredDiscountTrait;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ProductsProposal extends Component
{
    use DifalTrait, StaggeredDiscountTrait;

    public $client;
    public $sku;
    public $amount;
    public array $products;
    public $saleMode;

    protected $listeners = ['productAdded' => 'setProducts', 'clientChanged' => 'setClient', 'saleModeChanged' => 'setSaleMode'];

    public function mount(array $products)
    {
        $this->products = $products;
    }

    public function render()
    {
        return view('livewire.table.products-proposal');
    }

    public function setProducts(array $products)
    {
        $this->products = $products;
    }

    public function setClient($client)
    {
        $this->client = $client;
    }

    public function setSaleMode($saleMode)
    {
        $this->saleMode = $saleMode;
    }

    protected $rules = [
        'client' => 'required|min:6',
        'sku' => 'required|string',
        'amount' => 'required|numeric',
        'saleMode' => 'required',
        'products' => 'array',
    ];

    protected $messages = [
        'client.required' => 'O campo "Identificação do cliente" é obrigatório.',
        'sku.required' => 'O campo "Dados do produto" é obrigatório.',
        'amount.required' => 'O campo "Quantidade" é obrigatório.',
        'saleMode.required' => 'O campo "Modo de venda" é obrigatório.',
    ];

    public function searchProduct()
    {
        $this->validate();

        $response = Http::bling([])->get("produto/{$this->sku}/json/");
        $product = $response['retorno']['produtos'][0]['produto'];
        $client = Client::all()->where('cpf_cnpj', '==', '57.175.996/0001-93')->first();

        // Calculete Difal
        $difalDiscount = $this->getDifal(
            $product,
            $client,
            1,
            true
        );

        // Calculete Staggered Discount
        $staggeredDiscountTotal = $this->getStaggeredDiscount($product, $this->amount);

        // Calculate total with discounts
        $totalWithDiscouts = $this->getTotalWithDiscounts($difalDiscount, $staggeredDiscountTotal, $this->amount);

        array_push($this->products, ['product' => $product, 'amount' => $this->amount, 'staggeredDiscount' => $staggeredDiscountTotal, 'difal' => $difalDiscount, 'totalWithDiscouts' => $totalWithDiscouts]);

        $this->emit('productAdded', $this->products);
    }

    private function getTotalWithDiscounts($difalDiscount, $staggeredDiscount, $amount)
    {
        return ($staggeredDiscount - ($staggeredDiscount * ($difalDiscount / 100))) * $amount;
    }
}
