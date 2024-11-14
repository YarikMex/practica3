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
        // Lista de departamentos con datos específicos
        $deptos = [
            ['nombredepto' => 'Ing. en Sistemas Computacionales', 'nombremediano' => 'Sistemas Comp.', 'nombrecorto' => 'ISC'],
            ['nombredepto' => 'Ing. en Electrónica', 'nombremediano' => 'Electrónica', 'nombrecorto' => 'IE'],
            ['nombredepto' => 'Ing. Mecánica', 'nombremediano' => 'Mecánica', 'nombrecorto' => 'IM'],
            ['nombredepto' => 'Ing. Industrial', 'nombremediano' => 'Industrial', 'nombrecorto' => 'II'],
            ['nombredepto' => 'Ing. en Gestión Empresarial', 'nombremediano' => 'Gestión Emp.', 'nombrecorto' => 'IGE'],
            ['nombredepto' => 'Contador Público', 'nombremediano' => 'Contaduría', 'nombrecorto' => 'CP'],
            ['nombredepto' => 'Ing. Mecatrónica', 'nombremediano' => 'Mecatrónica', 'nombrecorto' => 'IMT'],
            ['nombredepto' => 'Dirección', 'nombremediano' => 'Dirección', 'nombrecorto' => 'DIR'],
            ['nombredepto' => 'Subdirección', 'nombremediano' => 'Subdirección', 'nombrecorto' => 'SUB'],
            ['nombredepto' => 'Ciencias Básicas', 'nombremediano' => 'Ciencias Bás.', 'nombrecorto' => 'CB'],
        ];

        // Crear o encontrar cada departamento para evitar duplicados
        foreach ($deptos as $deptoData) {
            Depto::firstOrCreate($deptoData);
        }
    }
}
