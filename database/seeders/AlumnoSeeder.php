<?php

namespace Database\Seeders;

use App\Models\Carrera;
use App\Models\Alumno;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Crear varias carreras primero
        Carrera::factory(5)->create();

        // Luego, crear los alumnos
        Alumno::factory(5)->create();
    }
}