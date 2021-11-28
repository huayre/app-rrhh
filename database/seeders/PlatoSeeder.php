<?php

namespace Database\Seeders;

use App\Models\Plato;
use Illuminate\Database\Seeder;

class PlatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $platos = [
            [
                'nombre' => 'AJI DE GALLINA ',
                'descripcion' => 'Es un plato típico de América Latina y España ​ con variaciones regionales según el país. Consiste en arroz cocinado con pollo, en presas o desmechado, verduras, y sazonado con especias',
                'precio' => rand(1, 30),
                'imagen' =>'http://localhost:8085/storage/imagenes/platos/oMGXI3KYrr0EdX09Tw9oXfQzBe14CFgSSE4JWsTG.jpg',
                'stock' =>rand(10, 50)
            ],
            [
                'nombre' => 'JUANE ',
                'descripcion' => 'Es un plato típico de América Latina y España ​ con variaciones regionales según el país. Consiste en arroz cocinado con pollo, en presas o desmechado, verduras, y sazonado con especias',
                'precio' => rand(1, 30),
                'imagen' =>'http://localhost:8085/storage/imagenes/platos/oMGXI3KYrr0EdX09Tw9oXfQzBe14CFgSSE4JWsTG.jpg',
                'stock' =>rand(10, 50)
            ],
            [
                'nombre' => 'PARRILLA ',
                'descripcion' => 'Es un plato típico de América Latina y España ​ con variaciones regionales según el país. Consiste en arroz cocinado con pollo, en presas o desmechado, verduras, y sazonado con especias',
                'precio' => rand(1, 30),
                'imagen' =>'http://localhost:8085/storage/imagenes/platos/oMGXI3KYrr0EdX09Tw9oXfQzBe14CFgSSE4JWsTG.jpg',
                'stock' =>rand(10, 50)
            ],
            [
                'nombre' => 'PACHAMANCA ',
                'descripcion' => 'Es un plato típico de América Latina y España ​ con variaciones regionales según el país. Consiste en arroz cocinado con pollo, en presas o desmechado, verduras, y sazonado con especias',
                'precio' => rand(1, 30),
                'imagen' =>'http://localhost:8085/storage/imagenes/platos/oMGXI3KYrr0EdX09Tw9oXfQzBe14CFgSSE4JWsTG.jpg',
                'stock' =>rand(10, 50)
            ],
            [
                'nombre' => 'LOMO SALTADO ',
                'descripcion' => 'Es un plato típico de América Latina y España ​ con variaciones regionales según el país. Consiste en arroz cocinado con pollo, en presas o desmechado, verduras, y sazonado con especias',
                'precio' => rand(1, 30),
                'imagen' =>'http://localhost:8085/storage/imagenes/platos/oMGXI3KYrr0EdX09Tw9oXfQzBe14CFgSSE4JWsTG.jpg',
                'stock' =>rand(10, 50)
            ],
            [
                'nombre' => 'PESCADO FRITO ',
                'descripcion' => 'Es un plato típico de América Latina y España ​ con variaciones regionales según el país. Consiste en arroz cocinado con pollo, en presas o desmechado, verduras, y sazonado con especias',
                'precio' => rand(1, 30),
                'imagen' =>'http://localhost:8085/storage/imagenes/platos/oMGXI3KYrr0EdX09Tw9oXfQzBe14CFgSSE4JWsTG.jpg',
                'stock' =>rand(10, 50)
            ],
            [
                'nombre' => 'ARROS CON POLLO ',
                'descripcion' => 'Es un plato típico de América Latina y España ​ con variaciones regionales según el país. Consiste en arroz cocinado con pollo, en presas o desmechado, verduras, y sazonado con especias',
                'precio' => rand(1, 30),
                'imagen' =>'http://localhost:8085/storage/imagenes/platos/oMGXI3KYrr0EdX09Tw9oXfQzBe14CFgSSE4JWsTG.jpg',
                'stock' =>rand(10, 50)
            ],
            [
                'nombre' => 'CERVEZA ',
                'descripcion' => 'Es un plato típico de América Latina y España ​ con variaciones regionales según el país. Consiste en arroz cocinado con pollo, en presas o desmechado, verduras, y sazonado con especias',
                'precio' => rand(1, 30),
                'imagen' =>'http://localhost:8085/storage/imagenes/platos/oMGXI3KYrr0EdX09Tw9oXfQzBe14CFgSSE4JWsTG.jpg',
                'stock' =>rand(10, 50)
            ],
            [
                'nombre' => 'AGUAJINA ',
                'descripcion' => 'Es un plato típico de América Latina y España ​ con variaciones regionales según el país. Consiste en arroz cocinado con pollo, en presas o desmechado, verduras, y sazonado con especias',
                'precio' => rand(1, 30),
                'imagen' =>'http://localhost:8085/storage/imagenes/platos/oMGXI3KYrr0EdX09Tw9oXfQzBe14CFgSSE4JWsTG.jpg',
                'stock' =>rand(10, 50)
            ],
            [
                'nombre' => 'POLLO A LA PLANCHA ',
                'descripcion' => 'Es un plato típico de América Latina y España ​ con variaciones regionales según el país. Consiste en arroz cocinado con pollo, en presas o desmechado, verduras, y sazonado con especias',
                'precio' => rand(1, 30),
                'imagen' =>'http://localhost:8085/storage/imagenes/platos/oMGXI3KYrr0EdX09Tw9oXfQzBe14CFgSSE4JWsTG.jpg',
                'stock' =>rand(10, 50)
            ]
        ];
        foreach ($platos as $plato) {
            Plato::create([
                'nombre'        =>$plato['nombre'],
                'descripcion'   =>$plato['descripcion'],
                'precio'        =>$plato['precio'],
                'imagen'        =>$plato['imagen'],
                'stock'         =>$plato['stock']
            ]);
        }

    }
}
