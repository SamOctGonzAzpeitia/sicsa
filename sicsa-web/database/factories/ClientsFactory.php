<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

use App\Models\Clients;

class ClientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Clients::class;

    public function definition()
    {
        return [
            //
            'name' => $this->faker->name(),
            'rfc' => $this->faker->unique()->randomNumber(8),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->unique()->randomNumber(8),
            'address' => $this->faker->address(),

        ];
    }
}
