<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Jobs\GetBillsPayJob;
use Illuminate\Console\Command;

class GetBillsPay extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'billPay:refresh';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get all bills to pay from bling.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        GetBillsPayJob::dispatch();
    }
}
