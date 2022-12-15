<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class SellerSalesChart extends Chart
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
        $this->labels(['Eduarda', 'Victor', 'Thiago', 'Robson']);

        $this->dataset('My dataset', 'doughnut', [4000, 5000, 3000, 7000])
            ->backgroundcolor(['rgb(255, 200, 132)', 'rgb(255, 159, 64)', 'rgb(255, 205, 86)', 'rgb(75, 192, 192)']);
        $this->displayAxes(false);

        return $this;
    }
}
