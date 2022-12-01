<?php

namespace App\Http\Livewire\Table;

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

    protected $listeners = ['productAdded' => 'setProducts', 'sellerDiscountChanged' => 'setSellerDiscount', 'clientChanged' => 'setClient'];

    public function mount(array $products, array $parcels, $seller_discount, $client)
    {
        $this->products = $products;
        $this->parcels = $parcels;
        $this->seller_discount = $seller_discount;
        $this->client = $client;
    }

    public function render($client = null)
    {
        $this->client = $client;
        return view('livewire.table.parcels-table');
    }

    public function setProducts(array $products)
    {
        $this->products = $products;
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

        $this->emit('parcelsAdded', $this->parcels);
    }

    private function calculateParcelPrice($parcelsAmount, $firstPrice)
    {

        $productsPrice = (collect($this->products)->map(function ($product) {
            return $product['totalWithDiscouts'];
        })->sum());

        $productsPrice = $productsPrice - ($productsPrice * ($this->seller_discount / 100));
        $this->parcelsPrice = ($productsPrice - $firstPrice) / $parcelsAmount;
    }
}
