<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
        ]);

        if (App::environment('local')) {
            $this->call([
                ClientSeeder::class,
                ProductSeeder::class,
                DiscountSeeder::class,
                FeedBackSeeder::class,
                ProposalSeeder::class,
            ]);
        }
    }
}
