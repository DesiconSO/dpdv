<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Jobs\GetBillsReciveJob;
use Illuminate\Console\Command;

class GetBillsRecive extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'billRecive:refresh';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get all bills to recive from bling.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        GetBillsReciveJob::dispatch();
    }
}
