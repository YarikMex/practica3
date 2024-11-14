<?php

namespace Database\Factories;

use App\Models\Personals;
use App\Models\Depto;
use App\Models\Puesto;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonalsFactory extends Factory
{
    protected $model = Personals::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        static $indice = 0;

        // Lista de personal con datos específicos
        $personalList = [
            // DOCENTES
            ['RFC' => 'ENWE758208V2', 'nombres' => 'FLOR DE MARÍA', 'apellidop' => 'RIVERA', 'apellidom' => 'SÁNCHEZ', 'tipo' => 'Docente'],
            ['RFC' => 'HJBF7126395Q', 'nombres' => 'ROBERTO', 'apellidop' => 'ESPINOZA', 'apellidom' => 'TORRES', 'tipo' => 'Docente'],
            ['RFC' => 'MPLW3625189A', 'nombres' => 'ANTONIO', 'apellidop' => 'CHÁVEZ', 'apellidom' => 'SÁNCHEZ', 'tipo' => 'Docente'],
            ['RFC' => 'JHFG8291742Z', 'nombres' => 'ROGELIO CESAR', 'apellidop' => 'RODRIGUEZ', 'apellidom' => 'CERVANTES', 'tipo' => 'Docente'],
            ['RFC' => 'BLFR4837265H', 'nombres' => 'MIGUEL ARTURO', 'apellidop' => 'VELEZ', 'apellidom' => 'RIOJAS', 'tipo' => 'Docente'],
            ['RFC' => 'QNWD5901748E', 'nombres' => 'HECTOR', 'apellidop' => 'CHAVEZ', 'apellidom' => 'CASTELLANOS', 'tipo' => 'Docente'],
            ['RFC' => 'KLPT2039476Y', 'nombres' => 'WILBER ELIUD', 'apellidop' => 'GARCIA', 'apellidom' => 'VILLAREAL', 'tipo' => 'Docente'],
            ['RFC' => 'VXZH3810274L', 'nombres' => 'DAVID SERGIO', 'apellidop' => 'CASTILLON', 'apellidom' => 'DOMINGUEZ', 'tipo' => 'Docente'],
            ['RFC' => 'CWKN5248193D', 'nombres' => 'HILDA PATRICIA', 'apellidop' => 'BELTRAN', 'apellidom' => 'HERNANDEZ', 'tipo' => 'Docente'],
            ['RFC' => 'ABJF89206395A', 'nombres' => 'ROGELIO CESAR', 'apellidop' => 'RODRIGUEZ', 'apellidom' => 'GONZALEZ', 'tipo' => 'Docente'],
            // SUBDIRECCION
            ['RFC' => 'GOPA760101MRA', 'nombres' => 'ULISES', 'apellidop' => 'VALDEZ', 'apellidom' => 'RODRIGUEZ', 'tipo' => 'Subdireccion'],
            ['RFC' => 'CAJR870213HV3', 'nombres' => 'CARLOS', 'apellidop' => 'PATIÑO', 'apellidom' => 'CHAVEZ', 'tipo' => 'Subdireccion'],
            ['RFC' => 'LODM920405NMA', 'nombres' => 'AIDA', 'apellidop' => 'HERNANDEZ', 'apellidom' => 'ÁVILA', 'tipo' => 'Subdireccion'],
        ];

        // Selecciona el personal en base al índice actual
        $personal = $personalList[$indice % count($personalList)];
        $indice++; // Incrementa el índice para la siguiente llamada

        return [
            'RFC' => $personal['RFC'],
            'nombres' => $personal['nombres'],
            'apellidop' => $personal['apellidop'],
            'apellidom' => $personal['apellidom'],
            'licenciatura' => $this->faker->optional()->jobTitle(),
            'licit' => $this->faker->boolean(),
            'especializacion' => $this->faker->optional()->jobTitle(),
            'espit' => $this->faker->boolean(),
            'maestria' => $this->faker->optional()->jobTitle(),
            'maetit' => $this->faker->boolean(),
            'doctorado' => $this->faker->optional()->jobTitle(),
            'doctit' => $this->faker->boolean(),
            'fechasingsep' => $this->faker->optional()->date(),
            'fechaisingins' => $this->faker->optional()->date(),
            'depto_id' => Depto::inRandomOrder()->first()->id ?? Depto::factory()->create()->id,  // Asocia aleatoriamente con un departamento existente o crea uno nuevo
            'puesto_id' => Puesto::inRandomOrder()->first()->id ?? Puesto::factory()->create()->id,  // Asocia aleatoriamente con un puesto existente o crea uno nuevo
        ];
    }
}
