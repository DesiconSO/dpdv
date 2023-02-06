<?php

namespace App\Http\Livewire\Components;

use App\Models\BillPay;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class FilterDrawerDropdownComponent extends Component
{
    public string $dropdownIdentification;

    public $categories = ['todos'];

    public function mount($dropdownIdentification)
    {
        $this->dropdownIdentification = $dropdownIdentification;
    }

    public function search()
    {
        if (in_array('todos', $this->categories)) {
            $items = BillPay::all();
        } else {
            $items = DB::table('bill_pays')->whereIn('categoria', $this->categories)->get();
        }

        $this->emit('search', $items);
    }

    public function clearCategories()
    {
        $this->categories = ['todos'];
        $items = BillPay::all();
        $this->emit('search', $items);
    }

    public function render()
    {
        return view('livewire.components.filter-drawer-dropdown-component');
    }
}
