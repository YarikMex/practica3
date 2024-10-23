<?php

namespace Database\Factories;

use App\Models\Reticula;
use App\Models\Carrera;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reticula>
 */
class ReticulaFactory extends Factory
{
    protected $model = Reticula::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'descripcion' => $this->faker->text(50),
            'fechaEnVigor' => $this->faker->date(),
            'idCarrera' => Carrera::inRandomOrder()->first()->id, // Asocia aleatoriamente con una carrera existente
        ];
    }
}
