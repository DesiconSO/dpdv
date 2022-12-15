<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class ProductTable extends DataTableComponent
{
    protected $model = Product::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');

        $this->setEmptyMessage(__('No results found'));
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id')
                ->sortable(),
            Column::make(__('table.description'), 'name')
                ->searchable()
                ->sortable(),
            Column::make('SKU', 'sku')
                ->searchable()
                ->sortable(),
            Column::make(__('table.price'), 'price')
                ->sortable()
                ->format(
                    fn ($value, $row, Column $column) => __('table.money').' '.$row->price
                ),
            ButtonGroupColumn::make('Actions')
                ->attributes(function ($row) {
                    return [
                        'class' => '',
                    ];
                })
                ->buttons([
                    LinkColumn::make('Desconto') // make() has no effect in this case but needs to be set anyway
                        ->title(fn ($row) => __('Desconto'))
                        ->location(fn ($row) => route('product.destroy', $row->id))
                        ->attributes(function ($row) {
                            return [
                                'class' => 'underline hover:no-underline text-red-500',
                            ];
                        }),
                ]),
        ];
    }
}
