<?php

namespace Database\Seeders;

use App\Models\Proposal;
use App\Models\ProposalProducts;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class ProposalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (App::environment('local')) {
            Proposal::factory(10)->hasProductsProposal(5)->create();
            Proposal::all()->map(
                fn ($item) =>
                ProposalProducts::factory(fake()->randomDigitNotNull())->create(['proposal_id' => $item->id])
            );
        }
    }
}
