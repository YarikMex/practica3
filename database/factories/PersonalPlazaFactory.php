<?php

namespace Database\Factories;

use App\Models\PersonalPlaza;
use App\Models\Plaza;
use App\Models\Personals;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PersonalPlaza>
 */
class PersonalPlazaFactory extends Factory
{
    protected $model = PersonalPlaza::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tiponombramiento' => $this->faker->numberBetween(10, 95), // Ajuste en rango de tipo de nombramiento
            'plaza_id' => Plaza::inRandomOrder()->first()->id ?? Plaza::factory()->create()->id, // Selecciona o crea Plaza
            'personal_id' => Personals::inRandomOrder()->first()->id ?? Personals::factory()->create()->id, // Selecciona o crea Personal
        ];
    }
}
