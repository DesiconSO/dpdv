<?php

declare(strict_types=1);

namespace App\Jobs;

use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class UpdateProductsFromBlingJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 1;

    public int $timeout = 240;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $count = 1;
        $finished = false;

        while ($finished == false) {
            $response = Http::bling([])->get("produtos/page={$count}/json/");

            if ($response->successful()) {
                if (isset($response['retorno']['produtos'])) {
                    $dados = $response['retorno']['produtos'];
                    $this->storeProducts($dados);
                } else {
                    $finished = true;
                    break;
                }

                print_r("\nNumero do contador produtos $count");
                $count++;
            } else {
                $finished = true;
                break;
            }
        }
    }

    private function storeProducts($products)
    {
        foreach ($products as $product) {
            Product::updateOrCreate(
                ['sku' => $product['produto']['codigo']],
                [
                    'name' => $product['produto']['descricao'],
                    'price' => $product['produto']['preco'],
                    'sku' => $product['produto']['codigo'],
                ]
            );
        }
    }
}
