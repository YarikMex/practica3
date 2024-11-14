<?php

namespace Database\Factories;

use App\Models\Edificio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Edificio>
 */
class EdificioFactory extends Factory
{
    protected $model = Edificio::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $indice = 0;

        // Lista de edificios con nombres específicos
        $edificios = [
            ['nombreCompleto' => 'Edificio K', 'nombreCorto' => 'K'],
            ['nombreCompleto' => 'Edificio D', 'nombreCorto' => 'D'],
            ['nombreCompleto' => 'Edificio H', 'nombreCorto' => 'H'],
        ];

        // Selecciona el edificio basado en el índice actual
        $edificio = $edificios[$indice % count($edificios)];
        $indice++; // Incrementa el índice para la próxima llamada

        return [
            'nombreedificio' => $edificio['nombreCompleto'], // Nombre completo del edificio
            'nombrecorto' => $edificio['nombreCorto'],       // Nombre corto del edificio
        ];
    }
}
