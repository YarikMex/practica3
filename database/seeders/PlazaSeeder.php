<?php

namespace Database\Seeders;

use App\Models\Plaza;
use Illuminate\Database\Seeder;

class PlazaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plazas = ['E3817', 'E3815', 'E3717', 'E3617', 'E3520'];

        foreach ($plazas as $nombre) {
            Plaza::create(['nombrePlaza' => $nombre]);
        }
    }
}
