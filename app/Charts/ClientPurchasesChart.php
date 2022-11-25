<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class ClientPurchasesChart extends Chart
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

    public function chart()
    {
        $this->labels([
            'Victor',
            'Eduarda',
            'Thiago',
            'Robson',
            'João',
            'Maria',
            'José',
            'Pedro',
            'Paula',
            'Ana',
            'Carlos',
            'Rayanne'
        ]);

        $this->dataset('Compras', 'bar', [4000, 5000, 3000, 7000, 4000, 5000, 3000, 7000, 4000, 5000, 3000, 7000])
            ->options([
                'backgroundColor' => 'rgba(56, 203, 137, 0.6)',
            ]);
        $this->displayAxes(false);

        $this->minimalist(false);

        $this->displayLegend(true);

        return $this;
    }
}
