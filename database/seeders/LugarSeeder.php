<?php

namespace Database\Seeders;

use App\Models\Lugar;
use Illuminate\Database\Seeder;

class LugarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lugar::factory(10)->create();
    }
}
