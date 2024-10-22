<?php

namespace Database\Seeders;

use App\Models\Depto;
use Illuminate\Database\Seeder;

class DeptoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Depto::factory(10)->create(); // Crear 10 departamentos de ejemplo
    }
}
