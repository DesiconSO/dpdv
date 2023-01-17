<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('products:refresh')
            ->hourly()
            ->appendOutputTo('storage/logs/products-fresh.log');

        $schedule->command('optimize:clear')
            ->dailyAt('4:00')
            ->appendOutputTo('storage/logs/optimize.log');

        $schedule->command('queue:work')
            ->everyMinute()
            ->appendOutputTo('storage/logs/queue.log');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
