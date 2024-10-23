<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reticula;
use App\Models\Carrera;

class ReticulaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Asumimos que ya existen carreras creadas en la tabla carreras
        // Usamos factory para crear múltiples registros de Retículas
        Reticula::factory(10)->create(); // Crear 10 retículas como ejemplo
    }
}
