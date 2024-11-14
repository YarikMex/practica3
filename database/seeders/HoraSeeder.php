<?php

namespace Database\Seeders;

use App\Models\Hora;
use Illuminate\Database\Seeder;

class HoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hora::factory(10)->create();
    }
}
