<?php

namespace App\Http\Livewire\Table;

use App\Models\BillRecive;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class BillReciveTable extends DataTableComponent
{
    protected $model = BillRecive::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id')
                ->sortable(),
            Column::make('IdBling', 'idBling')
                ->sortable(),
            Column::make('DataEmissao', 'dataEmissao')
                ->sortable(),
            Column::make('VencimentoOriginal', 'vencimentoOriginal')
                ->sortable(),
            Column::make('Vencimento', 'vencimento')
                ->sortable(),
            Column::make('Competencia', 'competencia')
                ->sortable(),
            Column::make('NroDocumento', 'nroDocumento')
                ->sortable(),
            Column::make('Valor', 'valor')
                ->sortable(),
            Column::make('Saldo', 'saldo')
                ->sortable(),
            Column::make('Historico', 'historico')
                ->sortable(),
            Column::make('Categoria', 'categoria')
                ->sortable(),
            Column::make('IdFormaPagamento', 'idFormaPagamento')
                ->sortable(),
            Column::make('Portador', 'portador')
                ->sortable(),
            Column::make('LinkBoleto', 'linkBoleto')
                ->sortable(),
            Column::make('Vendedor', 'vendedor')
                ->sortable(),
            Column::make('Pagamento', 'pagamento')
                ->sortable(),
            Column::make('Ocorrencia', 'ocorrencia')
                ->sortable(),
            Column::make('Cliente', 'cliente')
                ->sortable(),
            Column::make('Created at', 'created_at')
                ->sortable(),
            Column::make('Updated at', 'updated_at')
                ->sortable(),
        ];
    }
}
