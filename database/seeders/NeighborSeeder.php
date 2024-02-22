<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Neighbor;

class NeighborSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Neighbor::factory()->count(19)->create();

    }
}
