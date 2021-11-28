<?php

namespace Database\Factories;

use App\Models\Plato;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlatoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Plato::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => 'PLATO ',
            'descripcion' => 'Es un plato típico de América Latina y España ​ con variaciones regionales según el país. Consiste en arroz cocinado con pollo, en presas o desmechado, verduras, y sazonado con especias',
            'precio' => rand(1,30),
            'imagen' =>'http://localhost:8085/storage/imagenes/platos/oMGXI3KYrr0EdX09Tw9oXfQzBe14CFgSSE4JWsTG.jpg',
            'stock' =>rand(10,50)
        ];
    }
}
