<?php

namespace Database\Factories;

use App\Models\Reticula;
use Illuminate\Database\Eloquent\Factories\Factory;

class MateriaFactory extends Factory
{
    public function definition(): array
    {
        $materias = [
            'ISC' => [
                'semestre 1' => [
                    'Taller de Ética' => ['nombreMediano' => 'T. Ética', 'nombreCorto' => 'TE'],
                    'Fundamentos de Programación' => ['nombreMediano' => 'Fund. Prog.', 'nombreCorto' => 'FP'],
                    'Cálculo Diferencial' => ['nombreMediano' => 'Cálc. Dif.', 'nombreCorto' => 'CD'],
                ],
                'semestre 2' => [
                    'Cálculo Integral' => ['nombreMediano' => 'Cálc. Int.', 'nombreCorto' => 'CI'],
                    'Programación Orientada a Objetos' => ['nombreMediano' => 'Prog. OO', 'nombreCorto' => 'POO'],
                    'Álgebra Lineal' => ['nombreMediano' => 'Álg. Lin.', 'nombreCorto' => 'AL'],
                ],
                // Añade los semestres y materias restantes según el formato anterior
            ],
            'II' => [
                'semestre 1' => [
                    'Dibujo Industrial' => ['nombreMediano' => 'Dib. Ind.', 'nombreCorto' => 'DI'],
                    'Fundamentos de Investigación' => ['nombreMediano' => 'Fund. Inv.', 'nombreCorto' => 'FI'],
                ],
                'semestre 2' => [
                    'Análisis de la Realidad Nacional' => ['nombreMediano' => 'An. Real. Nac.', 'nombreCorto' => 'ARN'],
                    'Probabilidad y Estadística' => ['nombreMediano' => 'Prob. Est.', 'nombreCorto' => 'PE'],
                ],
                // Añade los semestres y materias restantes según el formato anterior
            ],
        ];
        
        // Seleccionar una carrera aleatoria (ISC o II)
        $carrera = $this->faker->randomElement(['ISC', 'II']);
        
        // Seleccionar un semestre aleatorio de la carrera
        $semestre = $this->faker->randomElement(array_keys($materias[$carrera]));

        // Seleccionar una materia aleatoria dentro del semestre
        $nombreMateria = $this->faker->randomElement(array_keys($materias[$carrera][$semestre]));
        
        // Obtener los detalles de la materia
        $detallesMateria = $materias[$carrera][$semestre][$nombreMateria];

        // Valores para nivel y modalidad
        $nivel = ['L', 'M'];
        $modalidad = ['P', 'E'];

        return [
            'nombreMateria' => $nombreMateria,
            'nivel' => $this->faker->randomElement($nivel),
            'nombreMediano' => $detallesMateria['nombreMediano'],
            'nombreCorto' => $detallesMateria['nombreCorto'],
            'modalidad' => $this->faker->randomElement($modalidad),
            'idReticula' => Reticula::where('descripcion', 'Retícula ' . $carrera)->inRandomOrder()->first()->id ?? Reticula::factory()->create(['descripcion' => 'Retícula ' . $carrera])->id,
        ];
    }
}
