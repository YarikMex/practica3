<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PuestosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('puestos')->insert([
            [
                'nombrePuesto' => 'Gerente',
                'tipoPuesto' => 'Administrativo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombrePuesto' => 'Asistente',
                'tipoPuesto' => 'Operativo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombrePuesto' => 'Contador',
                'tipoPuesto' => 'Administrativo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
