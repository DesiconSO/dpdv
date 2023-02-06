<?php

namespace App\Http\Livewire;

use App\Enums\SaleMode;
use App\Enums\ShippingCompany;
use App\Enums\StatusProposal;
use App\Models\Proposal;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class ProposalTable extends DataTableComponent
{
    protected $model = Proposal::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function ($row) {
                return route('proposal.edit', $row);
            })
            ->setTableRowUrlTarget(function ($row) {
                if ($row->type === 'this') {
                    return '_blank';
                }

                return '_self';
            });

        $this->setEagerLoadAllRelationsStatus(true);
        $this->setEmptyMessage(__('No results found'));
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id')
                ->sortable(),
            Column::make(__(__('Client')), 'client.name')
                ->format(fn ($value) => ucwords($value))
                ->sortable(),
            Column::make(__('Status'), 'status')
                ->format(fn ($value) => ucfirst(StatusProposal::from($value)->data()))
                ->sortable(),
            Column::make(__('Shipping company'), 'shipping_company')
                ->format(fn ($value) => ucfirst(ShippingCompany::from($value)->name()))
                ->sortable(),
            Column::make(__('Sale mode'), 'sale_mode')
                ->format(fn ($value) => ucfirst(SaleMode::from($value)->data()))
                ->sortable(),
            Column::make(__('Seller discount'), 'seller_discount')
                ->sortable(),
            Column::make(__('Shipping price'), 'shipping_price')
                ->format(fn ($value) => $value)
                ->sortable(),
            Column::make(__('Seller note'), 'seller_note')
                ->sortable(),
            Column::make(__('Updated at'), 'updated_at')
                ->sortable(),
        ];
    }
}
