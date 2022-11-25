<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;

class ParcelsTable extends Component
{
    public array $parcels = array();
    public $parcel_day;
    public $parcel_price;
    public $payment_parcel;
    public $description_parcel;

    protected $listeners = ['products' => 'addParcel'];

    public function render()
    {
        return view('livewire.table.parcels-table');
    }

    public function addParcel($products)
    {
        dd($products);

        if (count($this->parcels) < 12) {
            $this->parcels[] = [
                'parcel_day' => $this->parcel_day,
                'parcel_price' => $this->parcel_price,
                'payment_parcel' => $this->payment_parcel,
                'description_parcel' => $this->description_parcel,
            ];

            if (count($this->parcels) > 0) {
                $this->calculateParcelPrice(count($this->parcels));
            }

            $this->reset(['parcel_day', 'parcel_price', 'payment_parcel', 'description_parcel']);
        }
    }

    private function calculateParcelPrice($index)
    {
        $this->parcel_price = $this->total / ($index + 1);
    }
}
