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
        // Arreglo con los valores específicos para el campo `periodo`
        $periodos = [
            'Ene-Jun 24',
            'Ago-Dic 24',
            'Ene-Jun 25',
            'Ago-Dic 25',
            'Ene-Jun 26',
            'Ago-Dic 26',
            'Ene-Jun 27'
        ];

        return [
            'periodo' => $this->faker->unique()->randomElement($periodos), // Selecciona un periodo del arreglo
            'descCorta' => $this->faker->lexify('??????'),  // Descripción corta aleatoria
            'FechaIni' => $this->faker->date(),
            'FechaFin' => $this->faker->date(),
        ];
    }
}
