<?php

namespace App\Charts;

use App\Models\User;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class ClientCreatedChart extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    private function listUserProposalsCount()
    {
        $users = User::all();
        $users = $users->map(function ($user) {
            return collect([$user->proposals->count(), $user->name]);
        });

        return $users->sortDesc();
    }

    public function chart()
    {
        $usersData = $this->listUserProposalsCount()->take(15)->sort();
        $data1 = $usersData->map(function ($user) {
            return $user[0];
        })->values();

        $data2 = $usersData->map(function ($user) {
            return $user[1];
        })->values();

        $this->labels($data2);

        // dd($usersData->map(fn ($user) => $user['count'])->toArray());
        $this->dataset('Propostas', 'bar', $data1)
            ->options([
                'backgroundColor' => 'rgba(56, 203, 10, 0.6)',
            ]);

        $this->displayAxes(false);

        return $this;
    }
}
