<?php

namespace App\Http\Livewire;

use App\Models\Discount;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class DiscountTable extends DataTableComponent
{
    protected $model = Discount::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setSingleSortingDisabled();
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id')
                ->searchable()
                ->sortable(),
            Column::make('User', 'user.name')
                ->searchable()
                ->sortable(),
            Column::make('SKU', 'product.sku')
                ->searchable()
                ->sortable(),
            Column::make('Max amount', 'max_amount')
                ->sortable(),
            Column::make('Discount', 'discount'),
            Column::make('Updated at', 'updated_at')
                ->sortable(),
        ];
    }
}
