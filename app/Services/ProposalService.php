<?php

use App\Models\Client;

class ProposalService
{
    public function getDifal($product, Client $client)
    {
        return $product->getDifal();
    }
}
