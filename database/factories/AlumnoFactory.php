<?php

namespace Database\Factories;

use App\Models\Carrera;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Lista de estudiantes predefinidos
        static $indice = 0; // Índice estático para mantener la posición en el arreglo
        $estudiantes = [
            ['Angel Javier', 'Marin', 'Ochoa', '21430347'],
            ['Santiago Yarik', 'Andrade', 'Garcia', '21430322'],
            ['Issac', 'Sanchez', 'Lezama', '21430366'],
            ['Samuel Alejandro', 'Perales', 'Delgado', '21430356'],
            ['Juanalberto', 'Aguirre', 'Cruz', '21430318'],
            ['Yessica Azeneth', 'Cervantes', 'Vara', '21430330'],
            ['Jose Julio', 'Duran', 'Villa', '21430334'],
            ['Carlo', 'Lara', 'Garcia', '21430345'],
            ['Ernesto', 'Marquez', 'De Los Reyes', '21430348'],
            ['Israel Emmanuel', 'Reyna', 'Lopez', '21430360'],
            ['Michelle Alejandra', 'Esquivel', 'Mendez', '21430337'],
            ['Roberto Isaac', 'Alvarado', 'Garcia', '21430320'],
            ['Luis', 'Reyes', 'Vielma', '21430359'],
            ['Juan Antonio', 'Castilla', 'Orta', '21430327'],
            ['Eduardo Antonio', 'Juarez', 'Sanchez', '19430300'],
            ['Fernando', 'Hernandez', 'Alvarez', '21430344'],
            ['Elias Arnulfo', 'Morales', 'Garcia', '20430054'],
            ['Angel De Jesus', 'Sanchez', 'Lopez', '21430370'],
            ['Keren Adriana', 'Escobar', 'Castilleja', '21430336'],
            ['Juan Yarik', 'Fuentes', 'Sierra', '21430338'],
        ];

        // Obtener el estudiante actual del arreglo
        $estudiante = $estudiantes[$indice % count($estudiantes)];
        $indice++;

        // Asignar cada 5 alumnos a una carrera
        $carreras = Carrera::all();
        $carreraAsignada = $carreras->get(intdiv($indice - 1, 5) % $carreras->count());

        return [
            'noctrl' => $estudiante[3],
            'nombre' => $estudiante[0],
            'apellidopaterno' => $estudiante[1],
            'apellidomaterno' => $estudiante[2],
            'sexo' => $this->faker->randomElement(['M', 'F']),
            'carrera_id' => $carreraAsignada->id, // Asigna el ID de carrera según el índice
        ];
    }
}
