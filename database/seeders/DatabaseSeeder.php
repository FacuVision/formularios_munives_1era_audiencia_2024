<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Neighbor;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'admin',
            'email' => 'udt@munives.gob.pe',
            "password" => bcrypt("udt@munives.gob.pe"),
        ]);

        //$this->call(NeighborSeeder::class);







    }
}
