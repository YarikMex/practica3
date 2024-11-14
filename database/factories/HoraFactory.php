<?php

namespace Database\Factories;

use App\Models\Hora;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hora>
 */
class HoraFactory extends Factory
{
    protected $model = Hora::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $horaInicio = $this->faker->time(); // Genera una hora aleatoria para el inicio
        $horaFin = date('H:i:s', strtotime($horaInicio . ' +1 hour')); // Suma una hora al inicio para obtener la hora de fin

        return [
            'hora_ini' => $horaInicio,
            'hora_fin' => $horaFin,
        ];
    }
}
