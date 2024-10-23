<?php

namespace Database\Factories;

use App\Models\Carrera;
use App\Models\Reticula;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReticulaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'descripcion' => $this->faker->sentence(5),
            'fechaEnVigor' => $this->faker->date(),
            'idCarrera' => Carrera::factory(),
        ];
    }
}
