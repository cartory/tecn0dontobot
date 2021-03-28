<?php

namespace Database\Factories;

use App\Models\Paciente;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Paciente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ci' => $this->faker->randomNumber($nbDigits = 5, $strict = false),
            'nombre' => $this->faker->name,
            'fNac' => $this->faker->date($format = 'Y-m-d'),
            'celular' => $this->faker->e164PhoneNumber,
            'genero'=> $this->faker->randomElement($array = array ('M','F')),
        ];
    }
}
