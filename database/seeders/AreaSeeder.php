<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $areas =
            [
                [
                    'nombre' => 'VENTAS',
                    'descripcion' => 'Área de ventas'
                ],
                [
                    'nombre' => 'COMPRAS',
                    'descripcion' => 'Área de compras'
                ],
                [
                    'nombre' => 'COCINA',
                    'descripcion' => 'Área de cocina'
                ],
                [
                    'nombre' => 'ATENCIÓN',
                    'descripcion' => 'Área de atencion'
                ],
                [
                    'nombre' => 'RECURSO HUMANOS',
                    'descripcion' => 'Area de recursos humanos'
                ],
                [
                    'nombre' => 'LIMPIEZA',
                    'descripcion' => 'Area de limpieza'
                ],
                [
                    'nombre' => 'ADMINISTRACIÓN',
                    'descripcion' => 'Area de administración'
                ]
            ];

        Area::upsert(
            $areas,
            ['nombre'],
            ['descripcion']
        );
    }
}
