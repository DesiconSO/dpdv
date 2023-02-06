<?php

namespace App\Http\Livewire\Table;

use App\Models\Category;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class CategoryTable extends DataTableComponent
{
    protected $model = Category::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setDefaultSort('Identification')
            ->setEmptyMessage(__('No results found'));
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id')
                ->searchable()
                ->sortable(),
            Column::make('User id', 'user.name')
                ->searchable()
                ->sortable(),
            Column::make('Identification', 'identification')
                ->searchable()
                ->sortable(),
            Column::make('Description', 'description')
                ->searchable()
                ->sortable(),
            Column::make(__('Created at'), 'created_at')
                ->sortable(),
            LinkColumn::make('')
                ->title(fn($row) => __('Delete'))
                ->location(fn(Category $row) => route('category.destroy', $row))
                ->attributes(fn($row) => [
                    'class' => 'rounded-full text-red-500 hover:text-red-600',
                ]),
        ];
    }
}
