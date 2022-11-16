<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Jobs\UpdateProductsFromBlingJob;
use Illuminate\Console\Command;

class refreshAllCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:refresh';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'update all products from bling';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        UpdateProductsFromBlingJob::dispatch();

        return Command::SUCCESS;
    }
}
