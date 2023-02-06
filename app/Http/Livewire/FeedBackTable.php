<?php

namespace App\Http\Livewire;

use App\Models\FeedBack;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class FeedBackTable extends DataTableComponent
{
    protected $model = FeedBack::class;

    public $userToName;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setHideReorderColumnUnlessReorderingEnabled()
            ->setSingleSortingDisabled()
            ->setEmptyMessage(__('No results found'));
    }

    public function columns(): array
    {
        return [
            Column::make(__('Id'), 'id')
                ->searchable()
                ->sortable(),
            Column::make(__('From user').':', 'fromUser.name')
                ->searchable()
                ->sortable(),
            Column::make(__('To user').':', 'toUser.name')
                ->searchable()
                ->sortable(),
            Column::make(__('Updated at'), 'updated_at')
                ->sortable(),
            Column::make(__('Created at'), 'created_at')
                ->sortable(),
        ];
    }
}
