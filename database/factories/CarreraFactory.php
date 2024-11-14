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
        static $indice = 0;

        // Arreglo de datos específicos para las carreras
        $carreras = [
            ['Ingeniería en Sistemas Computacionales', 'Ing. en Sistemas', 'ISC'],
            ['Ingeniería Electrónica', 'Ing. Eléctrica', 'IE'],
            ['Ingeniería Mecánica', 'Ing. Mecánica', 'IM'],
            ['Ingeniería Industrial', 'Ing. Industrial', 'II'],
            ['Contaduría Pública', 'Cont. Pública', 'CP'],
            ['Ingeniería en Gestión Empresarial', 'Ing. Gestión', 'IGE'],
            ['Ingeniería en Mecatrónica', 'Ing. Mecatrónica', 'IMT'],
        ];

        // Selecciona la carrera en base al índice actual
        $carrera = $carreras[$indice % count($carreras)];
        $indice++; // Incrementa el índice para la próxima llamada

        return [
            'nombreCarrera' => $carrera[0],  // Nombre completo de la carrera
            'nombreMediano' => $carrera[1],  // Nombre mediano de la carrera
            'nombreCorto' => $carrera[2],    // Nombre corto de la carrera
            'depto_id' => Depto::factory(),  // Asocia un departamento usando el factory de Depto
        ];
    }
}
