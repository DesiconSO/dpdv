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

    protected $listeners = ['productAdded' => 'setProducts', 'clientChanged' => 'setClient'];

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

    public function searchProduct()
    {
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
