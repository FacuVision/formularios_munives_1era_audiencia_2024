<?php

namespace Database\Factories;

use App\Models\Neighbor;
use Illuminate\Database\Eloquent\Factories\Factory;

class NeighborFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */


    public function definition()
    {

            return [
                'name' => $this->faker->name,
                'lastname' => $this->faker->lastName,
                'document' => $this->faker->unique()->randomNumber(8),
                'territory' => $this->faker->unique()->address,
                'type_organization' => $this->faker->name,
                'audency_period' => $this->faker->sentence,
                'creation_date' => $this->faker->date
            ];


    }
}
