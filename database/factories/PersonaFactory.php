<?php

namespace Database\Factories;

use App\Models\Area;
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
            'correo' => $this->faker->unique()->email,
            'url_linkedin' => $this->faker->name . 'linkedin.com',
            'url_copia_dni' => '',
            'salario' => rand(930, 8000),
            'fecha_nacimiento' => "1998-10-05",
            'avatar' => '',
            'tipo_persona' => 1,
            'area_id' => Area::all()->random()->id,
        ];
    }
}
