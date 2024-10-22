<?php

namespace Database\Factories;

use App\Models\Depto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carrera>
 */
class CarreraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombreCarrera' => $this->faker->unique()->jobTitle(),  // Genera un nombre de carrera único
            'nombreMediano' => $this->faker->lexify(str_repeat('?', 50)),  // Genera un nombre mediano aleatorio de 50 caracteres
            'nombreCorto' => $this->faker->lexify(str_repeat('?', 5)),  // Genera un nombre corto de 5 caracteres
            'depto_id' => Depto::factory(),  // Relación con el departamento, genera un departamento relacionado
        ];
    }
}
