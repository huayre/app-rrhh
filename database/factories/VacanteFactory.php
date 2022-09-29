<?php

namespace Database\Factories;

use App\Models\Area;
use App\Models\Vacante;
use Illuminate\Database\Eloquent\Factories\Factory;

class VacanteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vacante::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
            'cantidad' => mt_rand(1, 5),
            'fecha_limite' => date('Y-m-d'),
            'requisitos' => $this->faker->text($maxNbChars = 20),
            'responsabilidades' => $this->faker->text($maxNbChars = 20),
            'beneficios' => $this->faker->text($maxNbChars = 20),
            'tipo_puesto' => $this->faker->word,
            'area_id' => Area::all()->random()->id,
        ];
    }
}
