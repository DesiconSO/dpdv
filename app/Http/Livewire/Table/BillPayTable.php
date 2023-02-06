<?php

namespace App\Http\Livewire\Table;

use App\Models\BillPay;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Cache;
use Maatwebsite\Excel\Excel;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filters\MultiSelectFilter;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class BillPayTable extends DataTableComponent
{
    protected $model = BillPay::class;

    protected $listeners = ['categoriesFilter'];

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setEmptyMessage(__('No results found'))
            ->setSingleSortingDisabled()
            ->setSecondaryHeaderTrAttributes(function ($rows) {
                return ['class' => 'bg-gray-100'];
            })
            ->setSecondaryHeaderTdAttributes(function (Column $column, $rows) {
                if ($column->isField('id')) {
                    return ['class' => 'text-red-500'];
                }

                return ['default' => true];
            })
            ->setFooterTrAttributes(function ($rows) {
                return ['class' => 'bg-gray-100'];
            })
            ->setFooterTdAttributes(function (Column $column, $rows) {
                if ($column->isField('name')) {
                    return ['class' => 'text-green-500'];
                }

                return ['default' => true];
            })
            ->setBulkActions([
                'exportSelected' => 'Export',
            ]);
    }

    public function builder(): Builder
    {
        return BillPay::query()
            ->when($this->getAppliedFilterWithValue('categories'),
                fn($query, $categories) => $query->whereIn('categoria', $categories)
            );
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id')
                ->sortable()
                ->searchable(),
            Column::make('IdBling', 'idBling')
                ->searchable()
                ->sortable(),
            Column::make('Fornecedor', 'fornecedor')
                ->format(fn($value) => (collect(json_decode($value))['nome']))
                ->searchable()
                ->sortable(),
            Column::make('Situacao', 'situacao')
                ->sortable(),
            Column::make('Categoria', 'categoria')
                ->sortable(),
            Column::make('DataEmissao', 'dataEmissao')
                ->sortable(),
            Column::make('VencimentoOriginal', 'vencimentoOriginal')
                ->sortable(),
            Column::make('Vencimento', 'vencimento')
                ->searchable()
                ->sortable(),
            Column::make('Competencia', 'competencia')
                ->sortable(),
            Column::make('NroDocumento', 'nroDocumento')
                ->sortable(),
            Column::make('NomeFornecedor', 'nomeFornecedor')
                ->sortable(),
            Column::make('Valor', 'valor')
                ->sortable(),
            Column::make('Saldo', 'saldo')
                ->sortable(),
            Column::make('IdFormaPagamento', 'idFormaPagamento')
                ->sortable(),
            Column::make('Portador', 'portador')
                ->sortable(),
            Column::make('LinkBoleto', 'linkBoleto')
                ->sortable(),
            Column::make('Vendedor', 'vendedor')
                ->sortable(),
            Column::make('Ocorrencia', 'ocorrencia')
                ->sortable(),
            Column::make('Cliente', 'cliente')
                ->sortable(),
        ];
    }

    public function filters(): array
    {
        return [
            MultiSelectFilter::make('categories')
                ->filter(function (Builder $builder) {
                    $builder->when($this->getAppliedFilterWithValue('categories'),
                        fn($query, $categories) => $query->whereIn('categoria', $categories)
                    );
                })
                ->hiddenFromAll(),

            SelectFilter::make('situacao')
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

            SelectFilter::make('ocorrencia')
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
                    }
                }),
        ];

    }

    public function exportSelected()
    {
        foreach ($this->getSelected() as $item) {
            dd(BillPay::find($item));
            $this->emit('exportBillPay', $item);
        }

        return true;
    }

    public function categoriesFilter($categoriesData)
    {
        if (!empty($categoriesData)) {
            $this->setFilterEvent('categories', $categoriesData);
        } else {
            $this->clearFilterEvent();
            $this->emit('refreshDatatable');
        }
    }

    public function clearCategories()
    {
        $this->filters['categories'] = false;
        $this->clearFilterEvent();
        $this->applyFilters();
    }

    public function setCategoriesFilter()
    {

    }
}
