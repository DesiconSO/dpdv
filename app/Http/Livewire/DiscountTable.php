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
            Column::make('Actions')
                ->label(
                    function ($row) {
                        $delete = '<button class="px-2 py-1 m-1 font-bold text-white bg-blue-500 rounded hover:bg-blue-700" wire:click="delete('.$row->id.')">Excluir</button>';

                        return $delete;
                    }
                )->html(),
        ];
    }

    public function delete(Discount $discount)
    {
        if ($discount->delete()) {
            session()->flash('success', 'Desconto excluído com sucesso!');

            return redirect()->route('discount.index');
        }
        session()->flash('error', __('form.error'));

        return redirect()->route('discount.index');
    }
}
