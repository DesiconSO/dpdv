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

    public $nfe;

    protected $listeners = [
        'productAdded' => 'setProducts',
        'clientChanged' => 'setClient',
        'saleModeChanged' => 'setSaleMode',
        'NfeChanged' => 'setNfe',
    ];

    public function mount(array $products)
    {
        $this->products = $products;
    }

    public function render()
    {
        return view('livewire.table.products-proposal');
    }

    public function setNfe($nfe)
    {
        if ($nfe == '1') {
            $this->nfe = true;
        } else {
            $this->nfe = false;
        }
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
        'nfe' => 'boolean',
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

        if (isset($response->json()['retorno']['erros'])) {
            foreach ($response->json()['retorno']['erros'] as $error) {
                $this->addError('sku', $error['erro']['msg']);
            }
        } else {
            $product = $response['retorno']['produtos'][0]['produto'];

            $client = Client::all()->where('cpf_cnpj', '==', $this->client['cpf_cnpj'])->first();

            // Calculete Difal
            $difalDiscount = $this->getDifal(
                $product,
                $client,
                $this->nfe,
                $this->saleMode
            );

            // Calculete Staggered Discount

            if ($staggeredDiscountTotal = $this->getStaggeredDiscount($product, $this->amount)) {
                // Calculate total with discounts
                $totalWithDiscouts = $this->getTotalWithDiscounts($difalDiscount, $staggeredDiscountTotal, $this->amount);

                array_push($this->products, ['product' => $product, 'amount' => $this->amount, 'staggeredDiscount' => $staggeredDiscountTotal, 'difal' => $difalDiscount, 'totalWithDiscouts' => $totalWithDiscouts]);

                $this->emit('productAdded', $this->products);
            } else {
                $this->addError('sku', 'O produto não encontrado.');
            }
        }
    }

    private function getTotalWithDiscounts($difalDiscount, $staggeredDiscount, $amount)
    {
        return ($staggeredDiscount - ($staggeredDiscount * ($difalDiscount / 100))) * $amount;
    }
}
