<?php

namespace Database\Factories;

use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Persona::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName,
            'apellido' => $this->faker->lastName,
            'num_dni' => rand(10000000, 9999999),
            'direccion' => $this->faker->address,
            'num_celular' => rand(100000000, 99999999),
            'correo' => $this->faker->email,
            'url_linkedin' => $this->faker->name . 'linkedin.com',
            'url_copia_dni' => '',
            'salario' => rand(930, 8000),
            'fecha_nacimiento' => date('Y-m-d'),
            'avatar' => '',
            'tipo_persona' => 3,
            'area_id' => rand(1, 7),
        ];
    }
}
