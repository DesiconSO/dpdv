<?php

namespace App\Http\Livewire;

use App\Models\Discount;
use Livewire\WithPagination;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class DiscountTable extends DataTableComponent
{
    use WithPagination;

    protected $model = Discount::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setHideReorderColumnUnlessReorderingEnabled()
            ->setSingleSortingDisabled();
        $this->setEmptyMessage(__('No results found'));
    }

    public function columns(): array
    {
        return [
            Column::make(__('table.id'), 'id')
                ->searchable()
                ->sortable(),
            Column::make(__('table.user'), 'user.name')
                ->searchable()
                ->sortable(),
            Column::make(__('table.sku'), 'product.sku')
                ->sortable()
                ->searchable()
                ->setSortingPillDirections('0-9', '9-0'),
            Column::make(__('table.name'), 'product.name')
                ->sortable()
                ->searchable(),
            Column::make(__('table.Max amount'), 'max_amount')
                ->sortable(),
            Column::make(__('table.discount'), 'discount'),
            Column::make(__('table.updated at'), 'updated_at')
                ->sortable(),
            Column::make('')
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
