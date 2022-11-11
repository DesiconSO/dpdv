<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Discount;

class DiscountTable extends DataTableComponent
{
    protected $model = Discount::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("User", "user.name")
                ->sortable(),
            Column::make("SKU", "product.sku")
                ->sortable(),
            Column::make("Discount", "discount"),
            Column::make("Max amount", "max_amount"),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
