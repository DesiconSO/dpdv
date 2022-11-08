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

        $this->setEmptyMessage(__('table.no_data'));
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make(__('table.description'), "name")
                ->sortable(),
            Column::make("SKU", "sku")
                ->sortable(),
            Column::make(__('table.price'), "price")
                ->sortable()
                ->format(
                    fn ($value, $row, Column $column) => __('table.money') . " " . $row->price
                ),
            ButtonGroupColumn::make('Actions')
                ->attributes(function ($row) {
                    return [
                        'class' => '',
                    ];
                })
                ->buttons([
                    LinkColumn::make('Destroy') // make() has no effect in this case but needs to be set anyway
                        ->title(fn ($row) => __('table.delete'))
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
