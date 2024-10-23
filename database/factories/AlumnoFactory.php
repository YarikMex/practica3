<?php

namespace Database\Factories;

use App\Models\Carrera;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'noctrl' => $this->faker->unique()->numerify('#######'),
            'nombre' => $this->faker->name(),
            'apellidopaterno' => $this->faker->lastName(),
            'apellidomaterno' => $this->faker->lastName(),
            'sexo' => $this->faker->randomElement(['M', 'F']),
            'carrera_id' => Carrera::inRandomOrder()->first()->id,  // Relacionar con una carrera existente
        ];
    }
}
