<?php

namespace App\Http\Livewire;

use App\Models\Proposal;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class ProposalTable extends DataTableComponent
{
    protected $model = Proposal::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id')
                ->sortable(),
            Column::make('Shipping company', 'shipping_company')
                ->sortable(),
            Column::make('Sale mode', 'sale_mode')
                ->sortable(),
            Column::make('Shipping mode', 'shipping_mode')
                ->sortable(),
            Column::make('Seller discount', 'seller_discount')
                ->sortable(),
            Column::make('Shipping price', 'shipping_price')
                ->sortable(),
            Column::make('Seller note', 'seller_note')
                ->sortable(),
            Column::make('Status', 'status')
                ->sortable(),
            Column::make('Created at', 'created_at')
                ->sortable(),
            Column::make('Updated at', 'updated_at')
                ->sortable(),
        ];
    }
}
