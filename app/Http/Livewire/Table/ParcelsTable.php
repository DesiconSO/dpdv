<?php

namespace App\Http\Livewire\Table;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ParcelsTable extends Component
{
    public array $parcels;

    public array $products;

    public $seller_discount;

    public $parcel_day;

    public $parcel_price;

    public $payment_parcel;

    public $description_parcel;

    public $parcelsPrice;

    public $client;

    public $totalWithDiscouts;

    public $paymentMethods;

    public $showParcels;

    protected $listeners = [
        'productAdded' => 'setProducts',
        'sellerDiscountChanged' => 'setSellerDiscount',
        'clientChanged' => 'setClient',
        'getParcel' => 'setOnlyOneParcel',
    ];

    public function mount(array $products, array $parcels, $seller_discount, $client)
    {
        $this->products = $products;
        $this->parcels = $parcels;
        $this->seller_discount = $seller_discount;
        $this->client = $client;
    }

    public function render($client = null)
    {
        $this->getPaymentMethods();

        $this->client = $client;

        return view('livewire.table.parcels-table');
    }

    public function setProducts(array $products)
    {
        $this->products = $products;

        $this->setTotal();
    }

    public function setSellerDiscount($seller_discount)
    {
        $this->seller_discount = $seller_discount;
    }

    public function setClient($client)
    {
        $this->client = $client;
    }

    public function addParcel()
    {
        if ($this->showParcels) {
            $this->parcels[0] = [];
        } else {
            if (count($this->parcels) < 12) {
                if (count($this->parcels) > 0) {
                    $this->calculateParcelPrice(count($this->parcels), $this->parcels[0]['parcel_price']);

                    $this->parcels[] = [
                        'parcel_day' => $this->parcel_day,
                        'payment_parcel' => $this->payment_parcel,
                        'description_parcel' => $this->description_parcel,
                    ];
                } else {
                    $this->parcels[] = [
                        'parcel_day' => $this->parcel_day,
                        'parcel_price' => $this->parcel_price,
                        'payment_parcel' => $this->payment_parcel,
                        'description_parcel' => $this->description_parcel,
                    ];
                }

                $this->reset(['parcel_day', 'parcel_price', 'payment_parcel', 'description_parcel']);
            }
        }

        $this->emit('parcelsAdded', $this->parcels);
    }

    public function setTotal()
    {
        $this->totalWithDiscouts = array_sum(array_column($this->products, 'totalWithDiscouts'));
    }

    public function setOnlyOneParcel()
    {
        $this->parcels = [
            'parcel_day' => 0,
            'parcel_price' => $this->totalWithDiscouts,
            'payment_parcel' => $this->payment_parcel,
            'description_parcel' => $this->description_parcel,
        ];

        $this->emit('onlyOneParcel', $this->parcels);
    }

    private function calculateParcelPrice($parcelsAmount, $firstPrice)
    {
        $productsPrice = (collect($this->products)->map(function ($product) {
            return $product['totalWithDiscouts'];
        })->sum());

        $productsPrice = $productsPrice - ($productsPrice * ($this->seller_discount / 100));
        $this->parcelsPrice = ($productsPrice - $firstPrice) / $parcelsAmount;
    }

    public function getPaymentMethods()
    {
        $this->paymentMethods = Http::bling([])->get('formaspagamento/json/')->json()['retorno']['formaspagamento'];

        $this->paymentMethods = collect($this->paymentMethods)->map(function ($paymentMethod) {
            if (in_array(
                $paymentMethod['formapagamento']['id'],
                [
                    '50972',
                    '69590',
                    '777279',
                    '787855',
                    '789959',
                    '789960',
                    '797755',
                    '947074',
                    '947314',
                    '1302911',
                ]
            )) {
                return $paymentMethod;
            }
        })->toArray();
    }
}
