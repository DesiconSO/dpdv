<?php

namespace App\Http\Livewire\Table;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\BillPay;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class BillPayTable extends DataTableComponent
{
    protected $model = BillPay::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable()
                ->searchable(),
            Column::make("IdBling", "idBling")
                ->searchable()
                ->sortable(),
            Column::make("Fornecedor", "fornecedor")
                ->format(fn ($value) => (collect(json_decode($value))['nome']))
                ->searchable()
                ->sortable(),
            Column::make("Situacao", "situacao")
                ->sortable(),
            Column::make("DataEmissao", "dataEmissao")
                ->sortable(),
            Column::make("VencimentoOriginal", "vencimentoOriginal")
                ->sortable(),
            Column::make("Vencimento", "vencimento")
                ->searchable()
                ->sortable(),
            Column::make("Competencia", "competencia")
                ->sortable(),
            Column::make("NroDocumento", "nroDocumento")
                ->sortable(),
            Column::make("NomeFornecedor", "nomeFornecedor")
                ->sortable(),
            Column::make("Valor", "valor")
                ->sortable(),
            Column::make("Saldo", "saldo")
                ->sortable(),
            Column::make("Categoria", "categoria")
                ->sortable(),
            Column::make("IdFormaPagamento", "idFormaPagamento")
                ->sortable(),
            Column::make("Portador", "portador")
                ->sortable(),
            Column::make("LinkBoleto", "linkBoleto")
                ->sortable(),
            Column::make("Vendedor", "vendedor")
                ->sortable(),
            Column::make("Ocorrencia", "ocorrencia")
                ->sortable(),
            Column::make("Cliente", "cliente")
                ->sortable(),
        ];
    }

    public function filters(): array
    {
        return [
            SelectFilter::make('Situacao')
                ->options([
                    '' => 'Todos',
                    'pago' => 'Pagas',
                    'aberto' => 'Abertas',
                    'parcial' => 'Parcial',
                ])
                ->filter(function (Builder $builder, string $value) {
                    if ($value === 'pago') {
                        $builder->where('situacao', 'pago');
                    } elseif ($value === 'aberto') {
                        $builder->where('situacao', 'aberto');
                    } elseif ($value === 'parcial') {
                        $builder->where('situacao', 'parcial');
                    } else {
                        $builder->all();
                    }
                }),

            SelectFilter::make('Ocorrência')
                ->options([
                    '' => 'Todas',
                    'unica' => 'Única',
                    'mensal' => 'Mensal',
                    'parcela' => 'Parcela',
                ])
                ->filter(function (Builder $builder, string $value) {
                    if ($value === 'unica') {
                        $builder->where('ocorrencia', 'Única');
                    } elseif ($value === 'mensal') {
                        $builder->where('ocorrencia', 'Mensal');
                    } elseif ($value === 'parcela') {
                        $builder->where('ocorrencia', 'Parcela');
                    } else {
                        $builder;
                    }
                }),

            SelectFilter::make('Categoria')
                ->options(
                    [
                        '' => 'Todas'
                    ] + BillPay::select('categoria')->distinct()->pluck('categoria', 'categoria')->toArray()
                )->filter(function (Builder $builder, string $value) {
                    if ($value) {
                        $builder->where('categoria', $value);
                    } else {
                        $builder;
                    }
                }),
        ];
    }
}
