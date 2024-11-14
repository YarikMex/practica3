<?php

namespace Database\Factories;

use App\Models\Carrera;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reticula>
 */
class ReticulaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $indice = 0;

        // Lista de descripciones específicas para las retículas
        $descripciones = [
            'Retícula ISC',
            'Retícula IE',
            'Retícula IM',
            'Retícula II',
            'Retícula CP',
            'Retícula IGE',
            'Retícula IMT',
        ];

        // Selecciona la descripción de manera cíclica usando el índice
        $descripcion = $descripciones[$indice % count($descripciones)];
        $indice++; // Incrementa el índice para la próxima llamada

        return [
            'descripcion' => $descripcion,  // Asigna la descripción específica
            'fechaEnVigor' => $this->faker->date('Y-m-d'),  // Genera una fecha en vigor aleatoria
            'idCarrera' => Carrera::inRandomOrder()->first()->id ?? Carrera::factory()->create()->id, // Asocia con una carrera existente o crea una nueva
        ];
    }
}
