<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PeriodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'periodo' => $this->faker->unique()->sentence(2),  // Generar un nombre de periodo único
            'descCorta' => $this->faker->lexify('??????'),  // Generar una descripción corta de 6 caracteres
            'FechaIni' => $this->faker->date(),
            'FechaFin' => $this->faker->date(),
        ];
    }
}
