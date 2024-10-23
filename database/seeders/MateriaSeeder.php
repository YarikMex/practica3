<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Materia;
use App\Models\Reticula; // Asegurarse de importar el modelo Reticula

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Asegúrate de que existan retículas antes de asignarlas a materias
        $reticulas = Reticula::all();

        if ($reticulas->isEmpty()) {
            $this->command->info('No hay retículas disponibles. Por favor, inserta retículas primero.');
            return;
        }

        // Crear materias de ejemplo
        Materia::create([
            'nombreMateria' => 'Matemáticas Básicas',
            'nivel' => 'L',  // Nivel Licenciatura
            'nombreMediano' => 'Matemáticas B',
            'nombreCorto' => 'MatB',
            'modalidad' => 'P',  // Modalidad Presencial
            'idReticula' => $reticulas->random()->id,  // Asignar una retícula aleatoria
        ]);

        Materia::create([
            'nombreMateria' => 'Física Avanzada',
            'nivel' => 'L',  // Nivel Licenciatura
            'nombreMediano' => 'Física A',
            'nombreCorto' => 'FisA',
            'modalidad' => 'E',  // Modalidad En línea
            'idReticula' => $reticulas->random()->id,  // Asignar una retícula aleatoria
        ]);

        Materia::create([
            'nombreMateria' => 'Tópicos de Investigación',
            'nivel' => 'M',  // Nivel Maestría
            'nombreMediano' => 'Tópicos Inv',
            'nombreCorto' => 'TopInv',
            'modalidad' => 'P',  // Modalidad Presencial
            'idReticula' => $reticulas->random()->id,  // Asignar una retícula aleatoria
        ]);

        Materia::create([
            'nombreMateria' => 'Programación Avanzada',
            'nivel' => 'M',  // Nivel Maestría
            'nombreMediano' => 'Prog Avanz',
            'nombreCorto' => 'ProgA',
            'modalidad' => 'E',  // Modalidad En línea
            'idReticula' => $reticulas->random()->id,  // Asignar una retícula aleatoria
        ]);
    }
}
