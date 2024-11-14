<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Personals;

class PersonalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear 10 registros de ejemplo en la tabla `personals`
        Personals::factory(10)->create();
    }
}
