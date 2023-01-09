<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\FeedBack;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class FeedBackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (App::environment('local')) {
            FeedBack::factory(10)
                ->create();
        }
    }
}
