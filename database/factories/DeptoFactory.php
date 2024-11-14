<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Depto>
 */
class DeptoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $indice = 0;

        // Lista de departamentos con nombres específicos
        $deptos = [
            ['Ing. en Sistemas Computacionales', 'Sistemas Comp.', 'ISC'],
            ['Ing. en Electrónica', 'Electrónica', 'IE'],
            ['Ing. Mecánica', 'Mecánica', 'IM'],
            ['Ing. Industrial', 'Industrial', 'II'],
            ['Ing. en Gestión Empresarial', 'Gestión Emp.', 'IGE'],
            ['Contador Público', 'Contaduría', 'CP'],
            ['Ing. Mecatrónica', 'Mecatrónica', 'IMT'],
            ['Dirección', 'Dirección', 'DIR'],
            ['Subdirección', 'Subdirección', 'SUB'],
            ['Ciencias Básicas', 'Ciencias Bás.', 'CB'],
        ];

        // Selecciona el departamento en base al índice actual
        $depto = $deptos[$indice % count($deptos)];
        $indice++; // Incrementa el índice para la siguiente ejecución

        return [
            'nombredepto' => $depto[0],     // Nombre completo del departamento
            'nombremediano' => $depto[1],   // Nombre mediano del departamento
            'nombrecorto' => $depto[2],     // Nombre corto del departamento
        ];
    }
}
