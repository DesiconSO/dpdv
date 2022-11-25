<?php

namespace App\Http\Livewire;

use App\Charts\ClientCreatedChart;
use App\Charts\ClientPurchasesChart;
use App\Charts\ProposalChart;
use App\Charts\SellerSalesChart;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $proposalBar = new ProposalChart;
        $sellerSalesChart = new SellerSalesChart;
        $clientPurchasesChart = new ClientPurchasesChart;
        $clientCreatedChart = new ClientCreatedChart;

        $proposalBar->chart();
        $sellerSalesChart->chart();
        $clientPurchasesChart->chart();
        $clientCreatedChart->chart();

        return view(
            'livewire.dashboard',
            compact(
                'proposalBar',
                'sellerSalesChart',
                'clientPurchasesChart',
                'clientCreatedChart',
            )
        );
    }
}
