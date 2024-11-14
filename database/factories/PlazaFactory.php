<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plaza>
 */
class PlazaFactory extends Factory
{
    protected $model = \App\Models\Plaza::class;

    public function definition(): array
    {
        $plazas = ['E3817', 'E3815', 'E3717', 'E3617', 'E3520']; // Valores específicos

        return [
            'nombrePlaza' => $this->faker->randomElement($plazas), // Elimina el `unique()`
        ];
    }
}
