<?php

namespace Database\Factories;

use App\Models\Lugar;
use App\Models\Edificio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lugar>
 */
class LugarFactory extends Factory
{
    protected $model = Lugar::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $indice = 0;

        // Lista de lugares con nombres completos y cortos
        $lugares = [
            ['nombreLugar' => 'salon 1K', 'nombreCorto' => '1K'],
            ['nombreLugar' => 'salon 2K', 'nombreCorto' => '2K'],
            ['nombreLugar' => 'salon 3K', 'nombreCorto' => '3K'],
            ['nombreLugar' => 'salon 4K', 'nombreCorto' => '4K'],
            ['nombreLugar' => 'salon 5K', 'nombreCorto' => '5K'],
            ['nombreLugar' => 'salon 6K', 'nombreCorto' => '6K'],
            ['nombreLugar' => 'salon 7K', 'nombreCorto' => '7K'],
            ['nombreLugar' => 'salon 8K', 'nombreCorto' => '8K'],
            ['nombreLugar' => 'salon 9K', 'nombreCorto' => '9K'],
            ['nombreLugar' => 'salon 10K', 'nombreCorto' => '10K'],
            ['nombreLugar' => 'salon 11K', 'nombreCorto' => '11K'],
            ['nombreLugar' => 'salon 12K', 'nombreCorto' => '12K'],
            ['nombreLugar' => 'salon 1D', 'nombreCorto' => '1D'],
            ['nombreLugar' => 'salon 2D', 'nombreCorto' => '2D'],
            ['nombreLugar' => 'salon 3D', 'nombreCorto' => '3D'],
            ['nombreLugar' => 'salon 4D', 'nombreCorto' => '4D'],
            ['nombreLugar' => 'salon 5D', 'nombreCorto' => '5D'],
            ['nombreLugar' => 'salon 6D', 'nombreCorto' => '6D'],
            ['nombreLugar' => 'salon 7D', 'nombreCorto' => '7D'],
            ['nombreLugar' => 'salon 8D', 'nombreCorto' => '8D'],
            ['nombreLugar' => 'salon 9D', 'nombreCorto' => '9D'],
        ];

        // Selecciona un lugar de manera cíclica usando el índice
        $lugar = $lugares[$indice % count($lugares)];
        $indice++; // Incrementa el índice para la próxima llamada

        return [
            'nombrelugar' => $lugar['nombreLugar'],   // Asigna el nombre completo del lugar
            'nombrecorto' => $lugar['nombreCorto'],    // Asigna el nombre corto del lugar
            'edificio_id' => Edificio::inRandomOrder()->first()->id ?? Edificio::factory()->create()->id, // Asigna un edificio existente o genera uno
        ];
    }
}
