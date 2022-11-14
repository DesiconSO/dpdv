<?php

namespace App\Http\Livewire;

use App\Models\Client;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class ClientTable extends DataTableComponent
{
    protected $model = Client::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setSingleSortingDisabled();
        Column::make('Name');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id')
                ->sortable(),
            Column::make(__('table.name'), 'name')->searchable()
                ->sortable(),
            Column::make(__('table.identification'), 'cpf_cnpj')->searchable()
                ->sortable(),
            Column::make(__('table.fone'), 'fone')->searchable()
                ->sortable(),
            Column::make(__('table.fu'), 'fu')->searchable()
                ->sortable(),
            Column::make(__('table.city'), 'city')->searchable()
                ->sortable(),
            Column::make(__('table.updated_at'), 'updated_at')
                ->sortable(),
        ];
    }
}
