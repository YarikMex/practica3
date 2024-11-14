<?php

namespace Database\Seeders;

use App\Models\Materia;
use Illuminate\Database\Seeder;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Genera un número específico de materias
        Materia::factory()->count(10)->create(); // Cambia el número según lo que necesites
    }
}
