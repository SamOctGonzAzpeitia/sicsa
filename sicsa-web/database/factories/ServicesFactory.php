<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Services;
use Illuminate\Support\Str;



class ServicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    
    protected $model = Services::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'client_id' => $this->faker->numberBetween($min = 1, $max = 5),
            'status_id' => $this->faker->numberBetween($min = 1, $max = 2),
            'notas' => $this->faker->text(),
            'costo' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000),
            'fecha_inicio' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'fecha_fin' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
