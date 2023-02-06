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
        'canSubmit' => 'setParcelsToSubmition',
        'resetParcels' => 'changeShowParcels',
    ];

    protected $rules = [
        'parcel_day' => 'required|numeric',
        'payment_parcel' => 'required',
        'description_parcel' => '',
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

    public function verifyIfHaveParcels()
    {
        if (count($this->parcels) > 1) {
            return true;
        } else {
            return false;
        }
    }

    public function addParcel()
    {
        if (count($this->parcels) < 12) {
            if (count($this->parcels) > 0) {
                $this->calculateParcelPrice(count($this->parcels), $this->parcels[0]['parcel_price']);

                $this->resetErrorBag();

                $this->validate([
                    'parcel_day' => 'required|numeric',
                    'payment_parcel' => 'required',
                ]);

                $this->parcels[] = [
                    'parcel_day' => $this->parcel_day,
                    'payment_parcel' => $this->payment_parcel,
                    'description_parcel' => $this->description_parcel,
                ];

                $this->emit('parcelsAdded', $this->parcels);
            } else {
                if ($this->parcel_price <= $this->totalWithDiscouts && $this->validate()) {
                    $this->parcels[] = [
                        'parcel_day' => $this->parcel_day,
                        'parcel_price' => $this->parcel_price,
                        'payment_parcel' => $this->payment_parcel,
                        'description_parcel' => $this->description_parcel,
                    ];
                } else {
                    $this->emit('addErrorBag', 'O valor da parcela inical não pode ser maior que o valor total do pedido.');
                }
            }

            $this->reset(['parcel_day', 'parcel_price', 'payment_parcel', 'description_parcel']);
        } else {
            $this->emit('addErrorBag', 'O número máximo de parcelas é 12.');
        }
    }

    public function setParcelsToSubmition()
    {
        if ($this->showParcels) {
            if ($this->verifyIfHaveParcels()) {
                $this->emit('submitValidation');
            } else {
                $this->emit('addErrorBag', 'Adicione pelo menos duas parcela.');
            }
        } else {
            $this->setOnlyOneParcel();
        }
    }

    public function setTotal()
    {
        $this->totalWithDiscouts = array_sum(array_column($this->products, 'totalWithDiscouts'));
    }

    public function setOnlyOneParcel()
    {
        $this->validate([
            'payment_parcel' => 'required',
        ]);

        if ($this->payment_parcel) {
            $this->parcels = [
                'parcel_day' => 0,
                'parcel_price' => $this->totalWithDiscouts,
                'payment_parcel' => $this->payment_parcel,
                'description_parcel' => $this->description_parcel,
            ];

            $this->emit('onlyOneParcel', $this->parcels);
        } else {
            if (is_null($this->payment_parcel)) {
                $this->emit('addErrorBag', 'Selecione uma forma de pagamento.');
            }
        }
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

    public function changeShowParcels()
    {
        $this->parcels = [];
        $this->emit('parcelsAdded', $this->parcels);
        $this->render();
    }
}
